<?php

namespace App\Http\Livewire\Main\Seller\Quotes;

use Livewire\Component;

class CreateQuoteComponent extends Component
{
    public function render()
    {
        return view('livewire.main.seller.quotes.create')
            ->extends('livewire.main.seller.layout.app')
            ->section('content');
    }

    public function create($form)
    {
        dd($form);
    }
}
