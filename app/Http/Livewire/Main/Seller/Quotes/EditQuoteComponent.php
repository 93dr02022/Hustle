<?php

namespace App\Http\Livewire\Main\Seller\Quotes;

use App\Http\Validators\Main\Seller\Quote\EditQuoteValidator;
use App\Models\Order;
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

    public function mount($quoteId)
    {
        $this->quotation = Quotation::where('id', $quoteId)
            ->with('items')
            ->withCasts(['expires_at' => 'date:Y-m-d'])
            ->firstOrFail();

        if ($this->quotation->paid) {
            $this->canUpdate = false;
        }
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

            Quotation::where('id', $this->quotation->id)->update([
                ...$totals,
                ...$quoteAttr,
            ]);

            Order::where('id', $this->quotation->order_id)
                ->update([
                    'total_value' => $totals['total'] + $totals['total_tax'],
                    'subtotal_value' => $totals['total'],
                    'taxes_value' => $totals['total_tax'],
                    'placed_at' => now(),
                ]);

            QuotationItem::where('quotation_id', $this->quotation->id)->delete();

            QuotationItem::query()
                ->insert($quoteItems->map(function ($item) {
                    $taxedPrice = $this->calcTaxedPrice($item['price']);
                    $item['user_id'] = auth()->id();
                    $item['quotation_id'] = $this->quotation->id;
                    $item['tax_rates'] = settings('commission')->tax_value;
                    $item['taxed_price'] = $taxedPrice;
                    $item['total_price'] = $taxedPrice - $item['discount'];
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
     * Calculate quotation item taxed and discounted price
     */
    public function calcTaxedPrice($price)
    {
        $taxRate = floatval(settings('commission')->tax_value) / 100;
        $priceAfterTax = $price - ($price * $taxRate);

        return $priceAfterTax;
    }

    /**
     * Calculate total records to save
     */
    public function calculateTotals(Collection $items)
    {
        $totalDiscount = 0;
        $totalTax = 0;
        $totalQuantity = 0;

        $totalPrice = $items->sum(function ($item) use (&$totalDiscount, &$totalTax, &$totalQuantity) {
            $price = $item['price'];
            $taxRate = floatval(settings('commission')->tax_value) / 100;
            $discount = $item['discount'];

            // Calculate the price after removing the tax and subtracting the discount
            $priceAfterTax = $price - ($price * $taxRate);
            $priceAfterDiscount = $priceAfterTax - $discount;

            // Add the discount and tax amounts to the respective totals
            $totalDiscount += $discount;
            $totalTax += ($price - $priceAfterTax);
            $totalQuantity += $item['quantity'];

            return $priceAfterDiscount;
        });

        return [
            'total_discount' => $totalDiscount,
            'total_tax' => $totalTax,
            'total' => $totalPrice,
            'total_quantity' => $totalQuantity,
        ];
    }
}
