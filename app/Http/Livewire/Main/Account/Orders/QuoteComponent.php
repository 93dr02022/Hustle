<?php

namespace App\Http\Livewire\Main\Account\Orders;

use App\Models\Order;
use App\Models\Quotation;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;
use Livewire\Component;
use Livewire\WithPagination;
use WireUi\Traits\Actions;

class QuoteComponent extends Component
{
    use WithPagination, SEOToolsTrait, Actions;

    public $quotation;

    /**
     * Mounted hook
     * 
     */
    public function mount($orderId)
    {
        $quotation = Quotation::where('order_id', $orderId)->with(['items', 'invoice'])
            ->first();

        $this->quotation = $quotation;
    }

    /**
     * Render component
     *
     * @return Illuminate\View\View
     */
    public function render()
    {
        return view('livewire.main.account.orders.quote', [])->extends('livewire.main.layout.app')->section('content');
    }

    /**
     * Get list of orders
     *
     * @return object
     */
    public function getQuoteProperty()
    {
        return Order::with(['quotation', 'items'])
            ->where('buyer_id', auth()->id())
            ->orderByDesc('id')
            ->paginate(10);
    }
}
