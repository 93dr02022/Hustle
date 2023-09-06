<?php

namespace App\Http\Livewire\Main\Account\Referral;

use App\Http\Validators\Main\Account\Settings\EditValidator;
use App\Models\Country;
use App\Models\State;
use App\Models\User;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Livewire\Component;
use WireUi\Traits\Actions;


class ReferralComponent extends Component
{
    use SEOToolsTrait, Actions;

    public $username;

    /**
     * Init component
     *
     * @return void
     */
    public function mount()
    {
        $user = auth()->user();

        if (is_null($user->referral_code)) {
            $user->referral_code = bin2hex(random_bytes(6));
            $user->save();
        }
    }

    /**
     * Render component
     *
     * @return Illuminate\View\View
     */
    public function render()
    {
        // SEO
        $separator = settings('general')->separator;
        $title = __('messages.t_account_settings') . " $separator " . settings('general')->title;
        $description = settings('seo')->description;
        $ogimage = src(settings('seo')->ogimage);

        $this->seo()->setTitle($title);
        $this->seo()->setDescription($description);
        $this->seo()->setCanonical(url()->current());
        $this->seo()->opengraph()->setTitle($title);
        $this->seo()->opengraph()->setDescription($description);
        $this->seo()->opengraph()->setUrl(url()->current());
        $this->seo()->opengraph()->setType('website');
        $this->seo()->opengraph()->addImage($ogimage);
        $this->seo()->twitter()->setImage($ogimage);
        $this->seo()->twitter()->setUrl(url()->current());
        $this->seo()->twitter()->setSite('@' . settings('seo')->twitter_username);
        $this->seo()->twitter()->addValue('card', 'summary_large_image');
        $this->seo()->metatags()->addMeta('fb:page_id', settings('seo')->facebook_page_id, 'property');
        $this->seo()->metatags()->addMeta('fb:app_id', settings('seo')->facebook_app_id, 'property');
        $this->seo()->metatags()->addMeta('robots', 'index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1', 'name');
        $this->seo()->jsonLd()->setTitle($title);
        $this->seo()->jsonLd()->setDescription($description);
        $this->seo()->jsonLd()->setUrl(url()->current());
        $this->seo()->jsonLd()->setType('WebSite');

        return view('livewire.main.account.referral.referral', [])->extends('livewire.main.layout.app')->section('content');
    }

    /**
     * Wire UI Error toast notification
     */
    public function toastError($message)
    {
        $this->notification([
            'title' => __('messages.t_error'),
            'description' => $message,
            'icon' => 'error',
        ]);
    }
}
