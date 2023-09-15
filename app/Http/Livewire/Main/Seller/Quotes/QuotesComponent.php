<?php

namespace App\Http\Livewire\Main\Seller\Quotes;

use App\Models\Quotation;
use App\Models\QuotationItem;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use WireUi\Traits\Actions;

class QuotesComponent extends Component
{
    use Actions;
    
    public $quoteItems = [];

    public $simpleModal;

    // filter
    public $start_date;

    public $end_date;

    public $status;

    public $search;

    protected $queryString = ['search', 'start_date', 'end_date', 'status'];

    public function mount()
    {
        $this->getMetrics();
    }

    public function render()
    {
        return view('livewire.main.seller.quotes.quotes', [
            'quotations' => $this->quotations,
            'metrics' => $this->metrics
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
        return Quotation::query()
            ->when($this->start_date)->where('quote_date', '>=', $this->start_date)
            ->when($this->end_date)->where('quote_date', '<=', $this->end_date)
            ->when($this->status)->where('paid', boolval($this->status))
            ->when($this->search)->where(function ($query) {
                $query->where('first_name', 'LIKE', "%{$this->search}%")
                ->orWhere('last_name', 'LIKE', "%{$this->search}%");
            })
            ->authUser()
            ->paginate(10);
    }

    /**
     * Quotation Metrics
     * 
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getMetricsProperty()
    {
        return cache('quote_stats');
    }

    /**
     * Quotation Metrics
     * 
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getMetrics()
    {
        Cache::forget('quote_stats');

        return Cache::rememberForever('quote_stats', function () {
            return Quotation::select(
                DB::raw('SUM(CASE WHEN paid = 1 THEN total ELSE 0 END) as paid_invoices'),
                DB::raw('SUM(CASE WHEN paid = 0 THEN total ELSE 0 END) as unpaid_invoices'),
                DB::raw('SUM(CASE WHEN in_wallet = 1 THEN profit_value ELSE 0 END) as total_profit'),
                DB::raw('COUNT(*) as quotations'),

            )
                ->authUser()
                ->first();
        });
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
     * Reset filter
     *
     * @return void
     */
    public function resetFilter()
    {
        // Reset filter
        return redirect('seller/quotes');
    }

    /**
     * Filter data
     *
     * @return mixed
     */
    public function filter()
    {
        $queries = [];

        // Check if has min price
        if ($this->start_date) {
            $queries['start_date'] = $this->start_date;
        }

        // Check if has max price
        if ($this->end_date) {
            $queries['end_date'] = $this->end_date;
        }

        // Check if has delivery time
        if ($this->status) {
            $queries['status'] = $this->status;
        }

        if ($this->search) {
            $queries['search'] = $this->search;
        }

        // Change this to query string
        $string = Arr::query($queries);

        // Generate url
        $url = url('seller/quotes?' . $string);

        return redirect($url);
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
