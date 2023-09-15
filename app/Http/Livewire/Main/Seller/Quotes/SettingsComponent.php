<?php

namespace App\Http\Livewire\Main\Seller\Quotes;

use App\Http\Validators\Main\Seller\Quote\SettingsValidator;
use App\Models\QuoteSetting;
use App\Utils\Uploader\ImageUploader;
use Livewire\Component;
use Livewire\WithFileUploads;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use WireUi\Traits\Actions;

class SettingsComponent extends Component
{
    use WithFileUploads, SEOToolsTrait, Actions;

    public $settings;

    public $canUpdate = true;

    public $expiration;

    public $logo = null;

    public $business_name;

    public $contact;

    public $email;

    public $address;

    public function mount()
    {
        $this->settings = QuoteSetting::firstOrCreate(['user_id' => auth()->id()])->refresh();

        $this->fill([
            'business_name' => $this->settings->business_name,
            'contact' => $this->settings->contact,
            'email' => $this->settings->email,
            'address' => $this->settings->address,
        ]);
    }

    public function render()
    {
        $this->seo()->setTitle(setSeoTitle(__('Quote Settings'), true));
        $this->seo()->setDescription(settings('seo')->description);

        return view('livewire.main.seller.quotes.settings', [
            'commission' => settings('commission'),
        ])
            ->extends('livewire.main.seller.layout.app')
            ->section('content');
    }

    /**
     * Update the Quotation and it items
     */
    public function update()
    {
        try {
            $validator = SettingsValidator::validate($this);

            if ($this->logo) {
                $path = ImageUploader::make($this->logo)
                    ->size(250)
                    ->toBucket('quotations');

                Storage::disk('s3')->delete("{$this->settings->logo}");
            }

            $this->settings->update([
                ...$validator->safe()->except('logo'),
                'logo' => $this->logo ? $path : $this->settings->logo
            ]);

            $this->notification([
                'title' => __('messages.t_success'),
                'description' => __('Quotation settings update successfully.'),
                'icon' => 'success',
            ]);

            redirect('seller/quotes/settings');
        } catch (\Illuminate\Validation\ValidationException $e) {
            $this->notification([
                'title' => __('messages.t_error'),
                'description' => __('messages.t_toast_form_validation_error'),
                'icon' => 'error',
            ]);

            throw $e;
        } catch (\Throwable $th) {
            $this->notification([
                'title' => __('messages.t_error'),
                'description' => __('messages.t_toast_something_went_wrong'),
                'icon' => 'error',
            ]);

            throw $th;
        }
    }
}
