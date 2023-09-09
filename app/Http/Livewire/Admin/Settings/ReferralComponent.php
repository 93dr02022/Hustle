<?php

namespace App\Http\Livewire\Admin\Settings;

use App\Http\Validators\Admin\Settings\CurrencyValidator;
use App\Models\ReferralSetting;
use App\Models\SettingsCurrency;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;
use Livewire\Component;
use WireUi\Traits\Actions;

class ReferralComponent extends Component
{
    use SEOToolsTrait, Actions;

    public $referral_amount;

    public $settings;

    /**
     * Initialize component
     *
     * @return void
     */
    public function mount()
    {

        $settings = ReferralSetting::firstOrFail();

        // Fill default settings
        $this->fill([
            'referral_amount' => $settings->referral_amount,
        ]);
    }

    /**
     * Render component
     *
     * @return Illuminate\View\View
     */
    public function render()
    {
        // Seo
        $this->seo()->setTitle(setSeoTitle(__('Referral Settings'), true));
        $this->seo()->setDescription(settings('seo')->description);

        return view('livewire.admin.settings.referral', [])->extends('livewire.admin.layout.app')->section('content');
    }

    /**
     * Update settings
     *
     * @return void
     */
    public function update()
    {
        if (intval($this->referral_amount) <= 0 || intval($this->referral_amount) == null) {
            // Success
            $this->notification([
                'title' => __('messages.t_error'),
                'description' => __('Please check your input there is something wrong'),
                'icon' => 'error',
            ]);

            return;
        }

        try {
            // Update settings
            ReferralSetting::where('id', 1)->update([
                'referral_amount' => $this->referral_amount,
            ]);

            // Success
            $this->notification([
                'title' => __('messages.t_success'),
                'description' => __('messages.t_toast_operation_success'),
                'icon' => 'success',
            ]);
        } catch (\Throwable $th) {

            // Error
            $this->notification([
                'title' => __('messages.t_error'),
                'description' => __('messages.t_toast_something_went_wrong'),
                'icon' => 'error',
            ]);

            throw $th;
        }
    }
}
