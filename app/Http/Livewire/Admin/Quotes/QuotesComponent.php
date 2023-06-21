<?php

namespace App\Http\Livewire\Admin\Quotes;

use App\Models\Quotation;
use Livewire\Component;

class QuotesComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.quotes.quotes', [
            'quotations' => $this->quotations,
        ])->extends('livewire.admin.layout.app')->section('content');
    }

    /**
     * Quotes computed properties
     */
    public function getQuotationsProperty()
    {
        return Quotation::query()
            ->select(
                'quotations.*',
                'users.first_name as owner_first_name',
                'users.last_name as owner_last_name'
            )
            ->join('users', 'quotations.user_id', 'users.id')
            ->paginate(20);
    }
}
