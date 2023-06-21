<?php

namespace App\Http\Livewire\Admin\Settings;

use App\Http\Validators\Admin\Settings\FooterValidator;
use App\Models\Page;
use App\Models\SettingsFooter;
use App\Utils\Uploader\ImageUploader;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;
use Livewire\Component;
use Livewire\WithFileUploads;
use WireUi\Traits\Actions;

class FooterComponent extends Component
{
    use WithFileUploads, SEOToolsTrait, Actions;

    public $is_language_switcher;

    public $page_terms;

    public $page_policy;

    public $logo;

    public $copyrights;

    public $social_facebook;

    public $social_twitter;

    public $social_instagram;

    public $social_linkedin;

    public $social_pinterest;

    public $social_youtube;

    public $social_github;

    /**
     * Initialize component
     *
     * @return void
     */
    public function mount()
    {
        // Get settings
        $settings = settings('footer');

        // Fill default settings
        $this->fill([
            'is_language_switcher' => $settings->is_language_switcher ? 1 : 0,
            'page_terms' => $settings->page_terms_id,
            'page_policy' => $settings->page_policy_id,
            'copyrights' => $settings->copyrights,
            'social_facebook' => $settings->social_facebook,
            'social_twitter' => $settings->social_twitter,
            'social_instagram' => $settings->social_instagram,
            'social_linkedin' => $settings->social_linkedin,
            'social_pinterest' => $settings->social_pinterest,
            'social_youtube' => $settings->social_youtube,
            'social_github' => $settings->social_github,
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
        $this->seo()->setTitle(setSeoTitle(__('messages.t_footer_settings'), true));
        $this->seo()->setDescription(settings('seo')->description);

        return view('livewire.admin.settings.footer', [
            'pages' => $this->pages,
        ])->extends('livewire.admin.layout.app')->section('content');
    }

    /**
     * Get pages
     *
     * @return object
     */
    public function getPagesProperty()
    {
        return Page::orderBy('title', 'desc')->get();
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
            FooterValidator::validate($this);

            // Get old settings
            $settings = settings('footer');

            // Check if request has logo
            if ($this->logo) {
                $logoPath = ImageUploader::make($this->logo)
                    ->unBucket($settings->logo_id)
                    ->toBucket('site/footer/logo');
            } else {
                $logoPath = $settings->logo_id;
            }

            // Update settings
            SettingsFooter::where('id', 1)->update([
                'is_language_switcher' => $this->is_language_switcher ? 1 : 0,
                'page_terms_id' => $this->page_terms ?? null,
                'page_policy_id' => $this->page_policy ?? null,
                'logo_id' => $logoPath,
                'copyrights' => $this->copyrights,
                'social_facebook' => $this->social_facebook,
                'social_twitter' => $this->social_twitter,
                'social_instagram' => $this->social_instagram,
                'social_linkedin' => $this->social_linkedin,
                'social_pinterest' => $this->social_pinterest,
                'social_youtube' => $this->social_youtube,
                'social_github' => $this->social_github,
            ]);

            // Refresh data from cache
            settings('footer', true);

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
