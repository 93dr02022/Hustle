<?php

namespace App\Http\Livewire\Main\Seller\Quotes;

use App\Http\Validators\Main\Seller\Quote\EditQuoteValidator;
use App\Models\Order;
use App\Models\OrderInvoice;
use App\Models\Quotation;
use App\Models\QuotationItem;
use DB;
use Illuminate\Support\Collection;
use Livewire\Component;
use WireUi\Traits\Actions;

class EditQuoteComponent extends Component
{
    use Actions;

    public $quotation;

    public $canUpdate = true;

    public $expiration;

    public function mount($quoteId)
    {
        $this->quotation = Quotation::where('id', $quoteId)
            ->with('items')
            ->withCasts(['expires_at' => 'date:Y-m-d'])
            ->firstOrFail();

        if ($this->quotation->paid) {
            $this->canUpdate = false;
        }

        $this->expiration = now()->addDays(7)->format('Y-m-d');
    }

    public function render()
    {
        return view('livewire.main.seller.quotes.edit', [
            'commission' => settings('commission'),
        ])
            ->extends('livewire.main.seller.layout.app')
            ->section('content');
    }

    /**
     * Update the Quotation and it items
     */
    public function update($form)
    {
        $validator = EditQuoteValidator::validate($form);

        if ($validator->fails()) {
            return ['success' => false, 'errors' => $validator->errors()->messages()];
        }

        DB::beginTransaction();
        try {
            $quoteAttr = $validator->safe()->except('items');
            $quoteItems = collect($validator->safe()->only('items')['items']);
            $totals = $this->calculateTotals($quoteItems);
            $commission = $this->commission($totals['total']);
            $profitValue = $totals['total'] - $commission;
            $paymentMethod = $quoteAttr['payment_method'];
            $totalValue = $totals['total'] + $totals['total_tax'];

            Quotation::where('id', $this->quotation->id)->update([
                'profit_value' => $profitValue,
                'commission_value' => $commission,
                'quote_date' => now(),
                'paid' => $paymentMethod === 'cash',
                ...$totals,
                ...$quoteAttr,
            ]);

            if ($paymentMethod === 'cash') {
                $this->quotation->owner()->update([
                    'balance_available' => DB::raw("balance_available - {$commission}")
                ]);

                OrderInvoice::create([
                    'order_id' => $this->quotation->order_id,
                    'payment_method' => $paymentMethod,
                    'payment_id' => uid(),
                    'amount_paid' => $totalValue,
                    'firstname' => $this->quotation->first_name,
                    'lastname' => $this->quotation->last_name,
                    'email' => $this->quotation->email,
                    'status' => 'paid'
                ]);
            }

            Order::where('id', $this->quotation->order_id)
                ->update([
                    'total_value' => $totalValue,
                    'subtotal_value' => $totals['total'],
                    'taxes_value' => $totals['total_tax'],
                    'placed_at' => now(),
                ]);

            QuotationItem::where('quotation_id', $this->quotation->id)->delete();

            QuotationItem::query()
                ->insert($quoteItems->map(function ($item) {
                    $item['user_id'] = auth()->id();
                    $item['quotation_id'] = $this->quotation->id;
                    $item['total_price'] = $item['price'] - $item['discount'];
                    $item['created_at'] = now();
                    $item['updated_at'] = now();

                    return $item;
                })->toArray());

            DB::commit();

            $this->notification([
                'title' => 'Quotation Updated',
                'description' => 'Quotation updated successfully. you can now share quotation to customers to pay',
                'icon' => 'success',
            ]);

            return redirect()->to('/seller/quotes');
        } catch (\Throwable $th) {
            $this->notification([
                'title' => __('messages.t_error'),
                'description' => __('messages.t_toast_something_went_wrong'),
                'icon' => 'error',
            ]);
        }
    }

    /**
     * Calculate total records to save
     */
    public function calculateTotals(Collection $items)
    {
        $totalDiscount = 0;
        $totalQuantity = 0;

        $totalPrice = $items->sum(function ($item) use (&$totalDiscount, &$totalQuantity) {
            $price = $item['price'];
            $discount = $item['discount'];

            $priceAfterDiscount = $price - $discount;

            $totalDiscount += $discount;
            $totalQuantity += $item['quantity'];

            return $priceAfterDiscount;
        });

        return [
            'total_discount' => $totalDiscount,
            'total_tax' => $this->taxes($totalPrice),
            'total' => $totalPrice,
            'total_quantity' => $totalQuantity,
        ];
    }

    /**
     * Calculate commission value for quotation
     */
    public function commission($price)
    {
        $settings = settings('commission');

        if ($settings->commission_type === 'percentage') {
            $commission = $settings->commission_value * $price / 100;
        } else {
            $commission = $settings->commission_value;
        }

        return $commission;
    }

    /**
     * Calculate taxes
     *
     * @return int
     */
    public function taxes($total)
    {
        $settings = settings('commission');

        if ($settings->enable_taxes) {
            if ($settings->tax_type === 'percentage') {
                $tax = bcmul($total, $settings->tax_value) / 100;
                return $tax;
            } else {
                $tax = $settings->tax_value;
                return $tax;
            }
        } else {
            return 0;
        }
    }
}
