<?php

namespace App\Http\Livewire\Main\Seller\Withdrawals;

use Livewire\Component;
use WireUi\Traits\Actions;
use App\Models\UserWithdrawalSettings;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;
use App\Http\Validators\Main\Seller\Withdrawals\SettingsValidator;
use Illuminate\Validation\ValidationException;

class SettingsComponent extends Component
{
    use SEOToolsTrait, Actions;

    public $offline_info;
    public $bank;
    public $accountName;
    public $accountNumber;

    /**
     * Init component
     *
     * @return void
     */
    public function mount()
    {
        $withdrawInfo = UserWithdrawalSettings::where('user_id', auth()->id())->first();

        if ($withdrawInfo) {
            $this->bank = $withdrawInfo->bank_name;
            $this->accountName = $withdrawInfo->account_name;
            $this->accountNumber = $withdrawInfo->gateway_provider_id;
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
        $separator   = settings('general')->separator;
        $title       = __('messages.t_withdrawal_settings') . " $separator " . settings('general')->title;
        $description = settings('seo')->description;
        $ogimage     = src(settings('seo')->ogimage);

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
        $this->seo()->twitter()->setSite("@" . settings('seo')->twitter_username);
        $this->seo()->twitter()->addValue('card', 'summary_large_image');
        $this->seo()->metatags()->addMeta('fb:page_id', settings('seo')->facebook_page_id, 'property');
        $this->seo()->metatags()->addMeta('fb:app_id', settings('seo')->facebook_app_id, 'property');
        $this->seo()->metatags()->addMeta('robots', 'index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1', 'name');
        $this->seo()->jsonLd()->setTitle($title);
        $this->seo()->jsonLd()->setDescription($description);
        $this->seo()->jsonLd()->setUrl(url()->current());
        $this->seo()->jsonLd()->setType('WebSite');

        return view('livewire.main.seller.withdrawals.settings')->extends('livewire.main.seller.layout.app')->section('content');
    }


    /**
     * Update withdrawal settings
     *
     * @return void
     */
    public function update()
    {
        try {
            SettingsValidator::validate($this);

            UserWithdrawalSettings::where('user_id', auth()->id())->update([
                'gateway_provider_id'   => $this->offline_info,
                'gateway_provider_name' => 'offline'
            ]);

            $this->toastSuccess(__('messages.t_toast_operation_success'));
        } catch (ValidationException $e) {
            $this->toastError(__('messages.t_toast_form_validation_error'));

            throw $e;
        } catch (\Throwable $th) {
            $this->toastError($th->getMessage());
        }
    }

    /**
     * Toast error message
     */
    public function toastError($message)
    {
        $this->notification([
            'title' => __('messages.t_error'),
            'description' => $message,
            'icon' => 'error'
        ]);
    }

    /**
     * Toast success message
     */
    public function toastSuccess($message)
    {
        $this->notification([
            'title' => __('messages.t_success'),
            'description' => $message,
            'icon' => 'success'
        ]);
    }
}
