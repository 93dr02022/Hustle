<?php

namespace App\Http\Livewire\Admin\Services;

use App\Http\Validators\Admin\Services\MollieValidator;
use App\Models\MollieSettings;
use App\Utils\Uploader\ImageUploader;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;
use Artisan;
use Config;
use Livewire\Component;
use Livewire\WithFileUploads;
use WireUi\Traits\Actions;

class MollieComponent extends Component
{
    use SEOToolsTrait, WithFileUploads, Actions;

    public $is_enabled;

    public $name;

    public $logo;

    public $currency;

    public $exchange_rate;

    public $deposit_fee;

    public $key;

    /**
     * Initialize component
     *
     * @return void
     */
    public function mount()
    {
        // Get mollie settings
        $settings = settings('mollie');

        // Fill default settings
        $this->fill([
            'is_enabled' => $settings->is_enabled ? 1 : 0,
            'name' => $settings->name,
            'currency' => $settings->currency,
            'exchange_rate' => $settings->exchange_rate,
            'deposit_fee' => $settings->deposit_fee,
            'key' => config('mollie.key'),
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
        $this->seo()->setTitle(setSeoTitle(__('messages.t_mollie_payment_settings'), true));
        $this->seo()->setDescription(settings('seo')->description);

        return view('livewire.admin.services.mollie', [
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

            // Validate form
            MollieValidator::validate($this);

            // Get old settings
            $settings = settings('mollie');

            // Check if request has a logo file
            if ($this->logo) {

                // Upload new logo
                $logoPath = ImageUploader::make($this->logo)
                    ->unBucket($settings->logo_id)
                    ->toBucket('services');
            } else {

                // Use old value
                $logoPath = $settings->logo_id;
            }

            // Save settings
            MollieSettings::first()->update([
                'is_enabled' => $this->is_enabled ? 1 : 0,
                'name' => $this->name,
                'logo_id' => $logoPath,
                'currency' => $this->currency,
                'exchange_rate' => $this->exchange_rate,
                'deposit_fee' => $this->deposit_fee,
            ]);

            // Set keys
            Config::write('mollie.key', $this->key);

            // Clear config cache
            Artisan::call('config:clear');

            // Update cache
            settings('mollie', true);

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
