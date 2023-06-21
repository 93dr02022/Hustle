<?php

namespace App\Http\Livewire\Admin\Quotes;

use App\Models\Quotation;
use Livewire\Component;

class QuoteViewComponent extends Component
{
    public $quotation;

    public function mount($reference)
    {
        $this->quotation = Quotation::query()
            ->with('owner', 'items')
            ->where('reference', $reference)
            ->first();
    }

    public function render()
    {
        return view('livewire.admin.quotes.details', [
            'quotation' => $this->quotation,
        ])->extends('livewire.admin.layout.app')->section('content');
    }
}
