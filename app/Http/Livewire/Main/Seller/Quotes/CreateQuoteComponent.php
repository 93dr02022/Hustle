<?php

namespace App\Http\Livewire\Main\Seller\Quotes;

use App\Http\Validators\Main\Seller\Quote\CreateQuoteValidator;
use App\Models\Order;
use App\Models\OrderInvoice;
use App\Models\Quotation;
use App\Models\QuotationItem;
use App\Models\User;
use App\Notifications\User\Seller\QuotationCreated;
use DB;
use Illuminate\Support\Collection;
use Livewire\Component;
use WireUi\Traits\Actions;

class CreateQuoteComponent extends Component
{
    use Actions;

    public $expiration;
    public $quotePerson = null;

    public function mount()
    {
        $this->expiration = now()->addDays(7)->format('Y-m-d');
        if (request()->has('uid')) {
            $this->quotePerson = User::find(request()->uid);
        }
    }

    public function render()
    {
        return view('livewire.main.seller.quotes.create', [
            'commission' => settings('commission'),
        ])
            ->extends('livewire.main.seller.layout.app')
            ->section('content');
    }

    public function create($form)
    {
        $validator = CreateQuoteValidator::validate($form);

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

            $order = Order::create([
                'total_value' => $totalValue,
                'uid' => uid(10),
                'subtotal_value' => $totals['total'],
                'taxes_value' => $totals['total_tax'],
                'placed_at' => now(),
            ]);

            $quotation = Quotation::create([
                'user_id' => auth()->id(),
                'order_id' => $order->id,
                'quote_date' => now(),
                'reference' => uid(10),
                'is_draft' => true,
                'paid' => $paymentMethod === 'cash',
                'profit_value' => $profitValue,
                'commission_value' => $commission,
                ...$totals,
                ...$quoteAttr,
            ]);

            if ($paymentMethod === 'cash') {
                $quotation->owner()->update([
                    'balance_available' => DB::raw("balance_available - {$commission}")
                ]);

                OrderInvoice::create([
                    'order_id' => $quotation->order_id,
                    'payment_method' => $paymentMethod,
                    'payment_id' => uid(),
                    'amount_paid' => $totalValue,
                    'firstname' => $quotation->first_name,
                    'lastname' => $quotation->last_name,
                    'email' => $quotation->email,
                    'status' => 'paid'
                ]);
            }

            QuotationItem::query()
                ->insert($quoteItems->map(function ($item) use ($quotation) {
                    $item['user_id'] = auth()->id();
                    $item['quotation_id'] = $quotation->id;
                    $item['total_price'] = $item['price'] - $item['discount'];
                    $item['created_at'] = now();
                    $item['updated_at'] = now();

                    return $item;
                })->toArray());

            DB::commit();

            $quotation->owner
                ->notify((new QuotationCreated())
                    ->locale(config('app.locale')));


            $this->notification([
                'title' => 'Quotation Created',
                'description' => 'Quotation created successfully. you can now share quotation to customers to pay',
                'icon' => 'success',
            ]);

            if ($this->quotePerson) {
                return redirect("/inbox/" . strtolower($this->quotePerson->uid));
            }

            return $quotation->toArray();
        } catch (\Throwable $th) {
            dd($th);
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
