<?php

namespace App\Http\Livewire\Admin\Gigs\Options;

use App\Models\Gig;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;
use Livewire\Component;

class EditComponent extends Component
{
    use SEOToolsTrait;

    public $gig;

    public $step;

    protected $queryString = ['step'];

    /**
     * Init component
     *
     * @param  int  $id
     * @return void
     */
    public function mount($id)
    {
        // Get gig
        $gig = Gig::where('uid', $id)->firstOrFail();

        // Set gig
        $this->gig = $gig;
    }

    /**
     * Render component
     *
     * @return Illuminate\View\View
     */
    public function render()
    {
        return view('livewire.admin.gigs.options.edit')->extends('livewire.admin.layout.app')->section('content');
    }
}
