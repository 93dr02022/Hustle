<?php

namespace App\Http\Livewire\Main\Seller\Quotes;

use App\Http\Validators\Main\Seller\Quote\CreateQuoteValidator;
use App\Models\Quotation;
use App\Models\QuotationItem;
use DB;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use WireUi\Traits\Actions;

class CreateQuoteComponent extends Component
{
    use Actions;

    public function render()
    {
        return view('livewire.main.seller.quotes.create', [
            'commission' => settings('commission')
        ])
            ->extends('livewire.main.seller.layout.app')
            ->section('content');
    }

    public function create($form)
    {
        // CreateQuoteValidator::validate($this, $form);
        $validator = CreateQuoteValidator::validate($form);

        if ($validator->fails()) {
            return ['errors' => $validator->errors()->messages()];
        }

        DB::beginTransaction();
        try {
            $quoteAttr = $validator->safe()->except('items');
            $quoteItems = $validator->safe()->collect('items');
            $totals = $this->calculateTotals($quoteItems);

            $quotation = Quotation::create([
                'user_id' => auth()->id,
                'quote_date' => now(),
                'reference' => uid(15),
                'sharing_uid' => strtolower(uid(25)),
                'is_draft' => true,
                'paid' => false,
                ...$totals,
                ...$quoteAttr
            ]);

            QuotationItem::query()
                ->insert($quoteItems->map(function ($item) use ($quotation) {
                    $item['quotation_id'] = $quotation->id;
                    $item['created_at'] = now();
                    $item['updated_at'] = now();

                    return $item;
                })->toArray());

            DB::commit();
        } catch (\Throwable $th) {
            $this->notification([
                'title'       => __('messages.t_error'),
                'description' => __('messages.t_toast_something_went_wrong'),
                'icon'        => 'error'
            ]);
        }
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
            $taxRate = 0.075;
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
            'total_quantity' => $totalQuantity
        ];
    }
}
