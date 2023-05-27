<?php

namespace App\Http\Livewire\Main\Seller\Quotes;

use App\Models\Quotation;
use Livewire\Component;

class QuotesComponent extends Component
{
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
        return Quotation::query()->authUser()->paginate(20);
    }
}
