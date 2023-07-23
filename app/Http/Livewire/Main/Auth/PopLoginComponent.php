<?php

namespace App\Http\Livewire\Main\Auth;

use App\Http\Validators\Main\Auth\LoginValidator;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use WireUi\Traits\Actions;

class PopLoginComponent extends Component
{
    use SEOToolsTrait, Actions;

    public $email;

    public $password;

    public $recaptcha_token;

    public $remember_me = true;

    public $social_grid;

    /**
     * Initialize component
     *
     * @return void
     */
    public function mount()
    {
        // Set empty social grid counter
        $social_grid_counter = 0;

        // Get auth settings
        $settings_auth = settings('auth');

        // Check if facebook login enabled
        if ($settings_auth->is_facebook_login) {
            $social_grid_counter += 1;
        }

        // Check if twitter login enabled
        if ($settings_auth->is_twitter_login) {
            $social_grid_counter += 1;
        }

        // Check if google login enabled
        if ($settings_auth->is_google_login) {
            $social_grid_counter += 1;
        }

        // Check if github login enabled
        if ($settings_auth->is_github_login) {
            $social_grid_counter += 1;
        }

        // Check if linkedin login enabled
        if ($settings_auth->is_linkedin_login) {
            $social_grid_counter += 1;
        }

        // Set grid
        $this->social_grid = $social_grid_counter;

        // Redirect to previous url
        if (!session()->has('url.intended')) {
            session(['url.intended' => url()->previous()]);
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('livewire.main.auth.pop');
    }

    /**
     * Login
     *
     * @return void
     */
    public function login($form)
    {
        try {

            // Verify form first
            if (!is_array($form) || !isset($form['email']) || !isset($form['password'])) {
                return;
            }

            // Set data
            $this->email = $form['email'];
            $this->password = $form['password'];
            $this->recaptcha_token = $form['recaptcha_token'];

            // Verify recapctah first (If enabled)
            if (settings('security')->is_recaptcha) {
                try {

                    // Get recaptcha secret key
                    $recaptcha_secret = config('recaptcha.secret_key');

                    // post request to server
                    $verify_recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($recaptcha_secret) . '&response=' . urlencode($this->recaptcha_token);

                    // Get recaptcha response
                    $recaptcha_response = file_get_contents($verify_recaptcha_url);

                    // Convert response to json
                    $recaptcha_decoded_response = json_decode($recaptcha_response, true);

                    // should return JSON with success as true
                    if (!isset($recaptcha_decoded_response['success'])) {

                        // Spam detected
                        $this->notification([
                            'title' => __('messages.t_error'),
                            'description' => __('messages.t_recaptcha_error_message'),
                            'icon' => 'error',
                        ]);

                        return;
                    }
                } catch (\Throwable $th) {

                    // Spam detected
                    $this->notification([
                        'title' => __('messages.t_error'),
                        'description' => __('messages.t_recaptcha_error_message'),
                        'icon' => 'error',
                    ]);

                    return;
                }
            }

            // Validate form
            LoginValidator::validate($this);

            // Set login credentials
            $credentials = ['email' => $this->email, 'password' => $this->password];

            // Attempt login
            if (Auth::attempt($credentials, $this->remember_me)) {

                // Check if user active
                if (in_array(auth()->user()->status, ['active', 'verified'])) {
                    $this->notification([
                        'title' => __('messages.t_success'),
                        'description' => __('Login successful'),
                        'icon' => 'success',
                    ]);

                    $this->dispatchBrowserEvent('refresh');
                    return;
                } else {

                    // Logout
                    Auth::logout();

                    request()->session()->invalidate();

                    request()->session()->regenerateToken();

                    // Error
                    $this->notification([
                        'title' => __('messages.t_error'),
                        'description' => __('messages.t_toast_something_went_wrong'),
                        'icon' => 'error',
                    ]);

                    return;
                }
            }

            // Failed
            $this->notification([
                'title' => __('messages.t_error'),
                'description' => __('messages.t_invalid_login_credentials_pls_try_again'),
                'icon' => 'error',
            ]);
        } catch (\Throwable $th) {

            // Error
            $this->notification([
                'title' => __('messages.t_error'),
                'description' => __('messages.t_toast_something_went_wrong'),
                'icon' => 'error',
            ]);
        }
    }
}
