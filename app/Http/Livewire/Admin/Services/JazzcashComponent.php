<?php

namespace App\Http\Livewire\Admin\Services;

use App\Http\Validators\Admin\Services\JazzcashValidator;
use App\Models\JazzcashSettings;
use App\Utils\Uploader\ImageUploader;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Config;
use Livewire\Component;
use Livewire\WithFileUploads;
use WireUi\Traits\Actions;

class JazzcashComponent extends Component
{
    use SEOToolsTrait, WithFileUploads, Actions;

    public $is_enabled;

    public $name;

    public $logo;

    public $currency;

    public $exchange_rate;

    public $deposit_fee;

    public $merchant_id;

    public $password;

    public $integerity_salt;

    public $environment;

    /**
     * Initialize component
     *
     * @return void
     */
    public function mount()
    {
        // Get jazzcash settings
        $settings = settings('jazzcash');

        // Get env
        $env = config('jazzcash.environment');

        // Fill default settings
        $this->fill([
            'is_enabled' => $settings->is_enabled ? 1 : 0,
            'name' => $settings->name,
            'currency' => $settings->currency,
            'exchange_rate' => $settings->exchange_rate,
            'deposit_fee' => $settings->deposit_fee,
            'merchant_id' => config('jazzcash.' . $env . 'merchant_id'),
            'password' => config('jazzcash.' . $env . 'password'),
            'integerity_salt' => config('jazzcash.' . $env . 'integerity_salt'),
            'environment' => $env,
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
        $this->seo()->setTitle(setSeoTitle(__('messages.t_jazzcash'), true));
        $this->seo()->setDescription(settings('seo')->description);

        return view('livewire.admin.services.jazzcash', [
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
            JazzcashValidator::validate($this);

            // Get old settings
            $settings = settings('jazzcash');

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
            JazzcashSettings::first()->update([
                'is_enabled' => $this->is_enabled ? 1 : 0,
                'name' => $this->name,
                'logo_id' => $logoPath,
                'currency' => $this->currency,
                'exchange_rate' => $this->exchange_rate,
                'deposit_fee' => $this->deposit_fee,
            ]);

            // Check selected env
            if ($this->environment === 'sandbox') {

                // Set keys
                Config::write('jazzcash.sandbox.merchant_id', $this->merchant_id);
                Config::write('jazzcash.sandbox.password', $this->password);
                Config::write('jazzcash.sandbox.integerity_salt', $this->integerity_salt);
                Config::write('jazzcash.sandbox.return_url', url('callback/jazzcash'));
            } else {

                // Set keys
                Config::write('jazzcash.live.merchant_id', $this->merchant_id);
                Config::write('jazzcash.live.password', $this->password);
                Config::write('jazzcash.live.integerity_salt', $this->integerity_salt);
                Config::write('jazzcash.live.return_url', url('callback/jazzcash'));
            }

            // Clear config cache
            Artisan::call('config:clear');

            // Update cache
            settings('jazzcash', true);

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
