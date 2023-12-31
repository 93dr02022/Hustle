<?php

namespace App\Http\Livewire\Admin\Settings;

use App\Http\Validators\Admin\Settings\GeneralValidator;
use App\Models\Language;
use App\Models\SettingsGeneral;
use App\Utils\Uploader\ImageUploader;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;
use Illuminate\Support\Facades\Config;
use Livewire\Component;
use Livewire\WithFileUploads;
use WireUi\Traits\Actions;

class GeneralComponent extends Component
{
    use WithFileUploads, SEOToolsTrait, Actions;

    public $title;

    public $subtitle;

    public $separator;

    public $logo;

    public $logo_dark;

    public $favicon;

    public $announce_link;

    public $announce_text;

    public $is_language_switcher;

    public $default_language;

    /**
     * Initialize component
     *
     * @return void
     */
    public function mount()
    {
        // Get settings
        $settings = settings('general');

        // Fill default settings
        $this->fill([
            'title' => $settings->title,
            'subtitle' => $settings->subtitle,
            'separator' => $settings->separator,
            'announce_link' => $settings->header_announce_link,
            'announce_text' => $settings->header_announce_text,
            'is_language_switcher' => $settings->is_language_switcher,
            'default_language' => $settings->default_language,
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
        $this->seo()->setTitle(setSeoTitle(__('messages.t_general_settings'), true));
        $this->seo()->setDescription(settings('seo')->description);

        return view('livewire.admin.settings.general', [
            'languages' => $this->languages,
        ])->extends('livewire.admin.layout.app')->section('content');
    }

    /**
     * Get available languages
     *
     * @return object
     */
    public function getLanguagesProperty()
    {
        return Language::where('is_active', true)->orderBy('name', 'desc')->get();
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
            GeneralValidator::validate($this);

            // Get settings
            $settings = SettingsGeneral::first();

            // Check if request has logo
            if ($this->logo) {
                $logoPath = ImageUploader::make($this->logo)
                    ->extension('png')
                    ->unBucket($settings->logo_id)
                    ->toBucket('site/logo');
            } else {
                $logoPath = $settings->logo_id;
            }

            // Check if request has logo dark
            if ($this->logo_dark) {
                $logoDarkPath = ImageUploader::make($this->logo_dark)
                    ->extension('png')
                    ->unBucket($settings->logo_dark__id)
                    ->toBucket('site/logo');
            } else {
                $logoDarkPath = $settings->logo_dark_id;
            }

            // Check if request has favicon
            if ($this->favicon) {
                $faviconPath = ImageUploader::make($this->favicon)
                    ->extension('png')
                    ->unBucket($settings->favicon_id)
                    ->toBucket('site/favicon');
            } else {
                $faviconPath = $settings->favicon_id;
            }

            // Save settings
            $settings->title = $this->title;
            $settings->subtitle = $this->subtitle;
            $settings->separator = $this->separator;
            $settings->header_announce_text = $this->announce_text ? $this->announce_text : null;
            $settings->header_announce_link = $this->announce_link ? $this->announce_link : null;
            $settings->is_language_switcher = $this->is_language_switcher;
            $settings->default_language = $this->default_language;

            // Save logo
            if ($logoPath) {
                $settings->logo_id = $logoPath;
            }

            // Save dark logo
            if ($logoDarkPath) {
                $settings->logo_dark_id = $logoDarkPath;
            }

            // Save favicon
            if ($faviconPath) {
                $settings->favicon_id = $faviconPath;
            }

            $settings->save();

            // Set app name
            Config::write('app.name', $this->title);
            Config::write('app.url', url('/'));
            Config::write('app.locale', $this->default_language);
            Config::write('app.fallback_locale', $this->default_language);

            // Refresh data from cache
            settings('general', true);

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
