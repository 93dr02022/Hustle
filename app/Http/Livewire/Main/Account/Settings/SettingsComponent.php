<?php

namespace App\Http\Livewire\Main\Account\Settings;

use App\Models\User;
use App\Models\Country;
use Livewire\Component;
use WireUi\Traits\Actions;
use Illuminate\Support\Facades\Hash;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;
use App\Http\Validators\Main\Account\Settings\EditValidator;
use App\Models\State;
use Illuminate\Validation\ValidationException;

class SettingsComponent extends Component
{
    use SEOToolsTrait, Actions;

    public $username;
    public $email;
    public $firstname;
    public $lastname;
    public $country;
    public $state;
    public $city;
    public $postcode;
    public $localGovernmentZone;
    public $password;
    public $address;

    public $states = [];

    /**
     * Init component
     *
     * @return void
     */
    public function mount()
    {
        $user = auth()->user();

        // Fill form
        $this->fill([
            'username' => $user->username,
            'email' => $user->email,
            'firstname' => $user->first_name,
            'lastname' => $user->last_name,
            'country' => $user->country_id,
            'postcode' => $user->post_code,
            'localGovernmentZone' => $user->local_government_zone,
            'address' => $user->address,
            'city' => $user->city,
            'state' => $user->state_id,
        ]);

        $this->fetchStates($user->country_id);
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
        $title       = __('messages.t_account_settings') . " $separator " . settings('general')->title;
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

        return view('livewire.main.account.settings.settings', [
            'countries' => $this->countries,
            'states' => $this->states,
        ])->extends('livewire.main.layout.app')->section('content');
    }


    /**
     * Get list of countries
     *
     * @return object
     */
    public function getCountriesProperty()
    {
        return Country::where('is_active', true)->orderBy('name', 'asc')->get();
    }

    /**
     * Updated lifecycle
     */
    public function updatedCountry($value)
    {
        $this->fetchStates($value);
    }

    /**
     * fetch state for selected country
     */
    public function fetchStates($countryId)
    {
        if ($countryId) {
            $this->states = State::where('country_id', $countryId)->get()->toArray();
        }
    }


    /**
     * Update user account settings
     *
     * @return void
     */
    public function update()
    {
        try {
            EditValidator::validate($this);

            // Set current user
            $user = auth()->user();

            // Validate current password
            if ($user->password && !Hash::check($this->password, $user->password)) {
                $this->toastError(__('messages.t_ur_current_pass_does_not_match'));

                return;
            }

            // Update user data
            User::where('id', auth()->id())->update([
                'username' => clean($this->username),
                'email' => clean($this->email),
                'first_name' => $this->firstname ? clean($this->firstname) : null,
                'last_name' => $this->lastname ? clean($this->lastname) : null,
                'country_id' => $this->country ? $this->country : null,
                'state_id' => $this->state ? $this->state : null,
                'address' => $this->address ? $this->address : null,
                'post_code' => $this->postcode ? $this->postcode : null,
                'local_government_zone' => $this->localGovernmentZone ? $this->localGovernmentZone : null,
                'city' => $this->city ? $this->city : null,
            ]);

            // Refresh user
            $user->refresh();

            // Reset password input
            $this->reset('password');

            // Success
            $this->notification([
                'title'       => __('messages.t_success'),
                'description' => __('messages.t_ur_account_settings_updated'),
                'icon'        => 'success'
            ]);
        } catch (ValidationException $e) {

            $this->toastError(__('messages.t_toast_form_validation_error'));

            throw $e;
        } catch (\Throwable $th) {

            $this->toastError(__('messages.t_toast_something_went_wrong'));

            throw $th;
        }
    }

    /**
     * Wire UI Error toast notification
     */
    public function toastError($message)
    {
        $this->notification([
            'title'       => __('messages.t_error'),
            'description' => $message,
            'icon'        => 'error'
        ]);
    }
}
