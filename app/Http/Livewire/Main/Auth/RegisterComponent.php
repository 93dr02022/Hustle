<?php

namespace App\Http\Livewire\Main\Auth;

use App\Http\Validators\Main\Auth\RegisterValidator;
use App\Models\Admin;
use App\Models\EmailVerification;
use App\Models\User;
use App\Notifications\Admin\PendingUser;
use App\Notifications\User\Everyone\VerifyEmail;
use App\Notifications\User\Everyone\Welcome;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use WireUi\Traits\Actions;

class RegisterComponent extends Component
{
    use SEOToolsTrait, Actions;

    public $email;

    public $username;

    public $password;

    public $fullname;

    public $firstname;

    public $lastname;

    public $recaptcha_token;

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
    }

    /**
     * Render component
     *
     * @return Illuminate\View\View
     */
    public function render()
    {
        // SEO
        $separator = settings('general')->separator;
        $title = __('messages.t_signup') . " $separator " . settings('general')->title;
        $description = settings('seo')->description;
        $ogimage = src(settings('seo')->ogimage);

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
        $this->seo()->twitter()->setSite('@' . settings('seo')->twitter_username);
        $this->seo()->twitter()->addValue('card', 'summary_large_image');
        $this->seo()->metatags()->addMeta('fb:page_id', settings('seo')->facebook_page_id, 'property');
        $this->seo()->metatags()->addMeta('fb:app_id', settings('seo')->facebook_app_id, 'property');
        $this->seo()->metatags()->addMeta('robots', 'index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1', 'name');
        $this->seo()->jsonLd()->setTitle($title);
        $this->seo()->jsonLd()->setDescription($description);
        $this->seo()->jsonLd()->setUrl(url()->current());
        $this->seo()->jsonLd()->setType('WebSite');

        return view('livewire.main.auth.register')->extends('livewire.main.auth.layout.auth')->section('content');
    }

    /**
     * Create new account
     *
     * @param  array  $form
     * @return mixed
     */
    public function register($form)
    {
        try {
            if (!is_array($form) || !isset($form['email']) || !isset($form['password']) || !isset($form['firstname']) || !isset($form['lastname']) || !isset($form['username'])) {
                return;
            }

            // Set data
            $this->email = $form['email'];
            $this->password = $form['password'];
            $this->firstname = $form['firstname'];
            $this->lastname = $form['lastname'];
            $this->username = $form['username'];
            $this->recaptcha_token = $form['recaptcha_token'];

            $this->verifyRecaptcha();

            RegisterValidator::validate($this);
            $settings = settings('auth');

            $user = User::create([
                'uid' => uid(),
                'first_name' => clean($this->firstname),
                'last_name' => clean($this->lastname),
                'email' => clean($this->email),
                'username' => clean($this->username),
                'password' => Hash::make($this->password),
                'status' => $settings->verification_required ? 'pending' : 'active',
                'referral_code' => bin2hex(random_bytes(6)),
                'level_id' => 1,
            ]);

            // Check if user requires verification
            if ($settings->verification_required) {
                if ($settings->verification_type === 'email') {
                    // Generate verification token and save it
                    $token = uid(64);
                    $verification = EmailVerification::create([
                        'token' => $token,
                        'email' => $this->email,
                        'expires_at' => now()->addMinutes($settings->verification_expiry_period),
                    ]);

                    // Send notification to user
                    $user->notify((new VerifyEmail($verification))->locale(config('app.locale')));

                    // Redirect to same page with success message
                    return redirect('auth/register')
                        ->with('success', __('messages.t_register_verification_email_sent', [
                            'email' => $this->email,
                            'minutes' => $settings->verification_expiry_period,
                        ]));
                } elseif ($settings->verification_type === 'admin') {

                    // Send notification to admin
                    Admin::first()
                        ->notify((new PendingUser($user))
                            ->locale(config('app.locale')));

                    // Redirect to same page with success
                    return redirect('auth/register')
                        ->with('success', __('messages.t_register_verification_admin_pending'));
                }
            }

            $user->notify(new Welcome);

            auth()->login($user, true);

            $this->notification([
                'title' => __('messages.t_success'),
                'description' => __('Registration successful you can proceed to marketplace.'),
                'icon' => 'success',
            ]);

            return redirect('/');
        } catch (\Throwable $th) {
            $this->toastError($th->getMessage());

            return;
        }
    }

    /**
     * Verify recaptcha token
     */
    public function verifyRecaptcha()
    {
        if (settings('security')->is_recaptcha) {
            try {
                $recaptcha_secret = config('recaptcha.secret_key');

                // post request to server
                $verify_recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($recaptcha_secret) . '&response=' . urlencode($this->recaptcha_token);

                $recaptcha_response = file_get_contents($verify_recaptcha_url);
                $recaptcha_decoded_response = json_decode($recaptcha_response, true);

                if (!isset($recaptcha_decoded_response['success'])) {
                    throw new \Exception(__('messages.t_recaptcha_error_message'));
                }
            } catch (\Throwable $th) {
                throw new \Exception(__('messages.t_recaptcha_error_message'));
            }
        }
    }

    /**
     * Wire UI Error toast notification
     */
    public function toastError($message)
    {
        $this->notification([
            'title' => __('messages.t_error'),
            'description' => $message,
            'icon' => 'error',
        ]);
    }
}
