<?php

namespace App\Http\Livewire\Main\Seller\Quotes;

use App\Models\Quotation;
use App\Models\QuotationItem;
use Livewire\Component;

class QuotesComponent extends Component
{
    public $quoteItems = [];
    public $simpleModal;

    public function render()
    {
        return view('livewire.main.seller.quotes.quotes', [
            'quotations' => $this->quotations
        ])
            ->extends('livewire.main.seller.layout.app')
            ->section('content');
    }

    /**
     * Quotation computed properties
     * 
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getQuotationsProperty()
    {
        return Quotation::query()->authUser()->paginate(10);
    }

    /**
     * Get quotation items
     */
    public function getQuotationItems($quotationId)
    {
        return QuotationItem::where('quotation_id', $quotationId)
            ->get()
            ->toArray();
    }
}
