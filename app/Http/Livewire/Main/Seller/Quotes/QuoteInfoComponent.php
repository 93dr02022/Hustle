<?php

namespace App\Http\Livewire\Main\Seller\Quotes;

use App\Models\Quotation;
use Artesaos\SEOTools\Traits\SEOTools;
use Livewire\Component;
use WireUi\Traits\Actions;

class QuoteInfoComponent extends Component
{
    use Actions, SEOTools;

    public $quotation;

    public $canUpdate = true;

    public $expiration;

    public function mount($quoteId)
    {
        $quotation = Quotation::where('id', $quoteId)
            ->where('user_id', auth()->id())
            ->with(['items', 'invoices', 'settings'])
            ->firstOrFail();

        $this->quotation = $quotation;
    }

    public function render()
    {
        $this->seo()->setTitle(setSeoTitle(__('Quote details'), true));
        $this->seo()->setDescription(settings('seo')->description);

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
