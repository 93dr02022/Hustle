<?php

namespace App\Http\Livewire\Admin\Verifications;

use App\Models\User;
use App\Models\VerificationCenter;
use App\Notifications\User\Everyone\VerificationApproved;
use App\Notifications\User\Everyone\VerificationDeclined;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;
use Livewire\Component;
use Livewire\WithPagination;
use WireUi\Traits\Actions;

class VerificationsComponent extends Component
{
    use WithPagination, SEOToolsTrait, Actions;

    /**
     * Render component
     *
     * @return Illuminate\View\View
     */
    public function render()
    {
        // Seo
        $this->seo()->setTitle(setSeoTitle(__('messages.t_verification_center'), true));
        $this->seo()->setDescription(settings('seo')->description);

        return view('livewire.admin.verifications.verifications', [
            'verifications' => $this->verifications,
        ])->extends('livewire.admin.layout.app')->section('content');
    }

    /**
     * Get list of verifications
     *
     * @return object
     */
    public function getVerificationsProperty()
    {
        return VerificationCenter::latest()->paginate(42);
    }
}
