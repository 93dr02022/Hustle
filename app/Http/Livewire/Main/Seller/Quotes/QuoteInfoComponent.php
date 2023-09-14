<?php

namespace App\Http\Livewire\Main\Seller\Quotes;

use App\Models\Quotation;
use Livewire\Component;
use WireUi\Traits\Actions;

class QuoteInfoComponent extends Component
{
    use Actions;

    public $quotation;

    public $canUpdate = true;

    public $expiration;

    public function mount($quoteId)
    {
        $quotation = Quotation::where('id', $quoteId)
            ->where('user_id', auth()->id())
            ->with(['items', 'invoices'])
            ->firstOrFail();

        $this->quotation = $quotation;
    }

    public function render()
    {
        return view('livewire.main.seller.quotes.details', [
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
    }
}
