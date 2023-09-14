<?php

namespace App\Http\Livewire\Main\Seller\Quotes;

use App\Models\Quotation;
use App\Models\QuotationItem;
use Livewire\Component;
use WireUi\Traits\Actions;

class QuotesComponent extends Component
{
    use Actions;
    
    public $quoteItems = [];

    public $simpleModal;

    public function render()
    {
        return view('livewire.main.seller.quotes.quotes', [
            'quotations' => $this->quotations,
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

    /**
     * Delete a single quotation
     */
    public function deleteQuotation($quotationId)
    {
        if (is_null($quotationId)) {
            $this->notification([
                'title' => __('messages.t_error'),
                'description' => 'You need to select at least one quote to be deleted.',
                'icon' => 'error',
            ]);

            return;
        }

        $quotation = Quotation::where('id', $quotationId)
            ->where('user_id', auth()->id())->first();

        if (is_null($quotation) || $quotation->paid) {
            $this->notification([
                'title' => __('messages.t_error'),
                'description' => 'The selected quotation can\'t be deleted check your selection and retry.',
                'icon' => 'error',
            ]);

            return;
        }

        try {
            $quotation->delete();

            $this->notification([
                'title' => __('messages.t_success'),
                'description' => 'Quotation deleted successfully',
                'icon' => 'success',
            ]);

            $this->dispatchBrowserEvent('refresh');
        } catch (\Throwable $th) {
            $this->notification([
                'title' => __('messages.t_error'),
                'description' => 'Sorry error occurred while trying to delete quote',
                'icon' => 'error',
            ]);
        }
    }
}
