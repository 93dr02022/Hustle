<?php

namespace App\Http\Livewire\Admin\Services;

use App\Http\Validators\Admin\Services\PaystackValidator;
use App\Models\PaystackSettings;
use App\Utils\Uploader\ImageUploader;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;
use Artisan;
use Config;
use Livewire\Component;
use Livewire\WithFileUploads;
use WireUi\Traits\Actions;

class PaystackComponent extends Component
{
    use SEOToolsTrait, WithFileUploads, Actions;

    public $is_enabled;

    public $name;

    public $logo;

    public $currency;

    public $exchange_rate;

    public $deposit_fee;

    /**
     * Initialize component
     *
     * @return void
     */
    public function mount()
    {
        // Get paystack settings
        $settings = settings('paystack');

        // Fill default settings
        $this->fill([
            'is_enabled' => $settings->is_enabled ? 1 : 0,
            'name' => $settings->name,
            'currency' => $settings->currency,
            'exchange_rate' => $settings->exchange_rate,
            'deposit_fee' => $settings->deposit_fee,
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
        $this->seo()->setTitle(setSeoTitle(__('messages.t_paystack_payment_settings'), true));
        $this->seo()->setDescription(settings('seo')->description);

        return view('livewire.admin.services.paystack', [
            'currencies' => config('money'),
        ])->extends('livewire.admin.layout.app')->section('content');
    }

    /**
     * Update settings
     *
     * @return void
     */
    public function update()
    {
        try {
            PaystackValidator::validate($this);

            $settings = settings('paystack');

            if ($this->logo) {
                $path = ImageUploader::make($this->logo)
                    ->size(200)
                    ->toBucket('services');

                ImageUploader::deBucket("{$settings->logo_id}");
            } else {
                $path = $settings->logo_id;
            }

            // Save settings
            PaystackSettings::first()->update([
                'is_enabled' => $this->is_enabled ? 1 : 0,
                'name' => $this->name,
                'logo_id' => $path,
                'currency' => $this->currency,
                'exchange_rate' => $this->exchange_rate,
                'deposit_fee' => $this->deposit_fee,
            ]);

            // Update cache
            settings('paystack', true);

            // Success
            $this->notification([
                'title' => __('messages.t_success'),
                'description' => __('messages.t_toast_operation_success'),
                'icon' => 'success',
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {

            // Validation error
            $this->notification([
                'title' => __('messages.t_error'),
                'description' => __('messages.t_toast_form_validation_error'),
                'icon' => 'error',
            ]);

            throw $e;
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
