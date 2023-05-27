<?php

namespace App\Http\Livewire\Main\Seller\Quotes;

use Livewire\Component;

class QuotesComponent extends Component
{
    public function render()
    {
        return view('livewire.main.seller.quotes.quotes')->extends('livewire.main.seller.layout.app')->section('content');
    }
}
