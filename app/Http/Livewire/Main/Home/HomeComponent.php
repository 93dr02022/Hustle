<?php

namespace App\Http\Livewire\Main\Home;

use App\Mail\User\Everyone\NewsletterVerification as EveryoneNewsletterVerification;
use App\Models\Category;
use App\Models\Gig;
use App\Models\NewsletterList;
use App\Models\NewsletterVerification;
use App\Models\Project;
use App\Models\User;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;
use Illuminate\Support\Facades\Http;
use Livewire\Component;
use Mail;
use WireUi\Traits\Actions;

class HomeComponent extends Component
{
    use SEOToolsTrait, Actions;

    public $email;

    public $browsingLocation;

    /**
     * Init component
     *
     * @return void
     */
    public function mount()
    {
        if (!session()->has('browsingLocation')) {
            $res = Http::retry(0)->get('https://ipapi.co/json')->collect();
            session()->put('browsingLocation', $res->toArray() ?? null);
        }

        $this->browsingLocation = session()->get('browsingLocation');
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
        $title = settings('general')->title . " $separator " . settings('general')->subtitle;
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

        return view('livewire.main.home.home', [
            'categories' => modelCaches('main_category_cache'),
            'randomCategories' => modelCaches('random_gigs_cache'),
            'sellers' => $this->sellers,
            'gigs' => $this->gigs,
            'projects' => modelCaches('home_projects_cache'),
        ])->extends('livewire.main.layout.app')->section('content');
    }

    /**
     * Get 4 gigs randomly
     *
     * @return object
     */
    public function getGigsProperty()
    {
        return Gig::active()
            ->inRandomOrder()
            ->take(6)
            ->with('owner')
            ->get();
    }

    /**
     * Get categories in home page
     *
     * @return object
     */
    public function getCategoriesProperty()
    {
        return Category::where('is_visible', true)->inRandomOrder()->get();
    }

    /**
     * Get best sellers
     *
     * @return object
     */
    public function getSellersProperty()
    {
        return User::where('account_type', 'seller')
            ->whereHas('sales')
            ->whereIn('status', ['status', 'verified'])
            ->withCount('sales')
            ->orderBy('sales_count', 'desc')
            ->take(12)
            ->get();
    }

    /**
     * Get recent projects
     *
     * @return mixed
     */
    public function getProjectsProperty()
    {
        return Project::whereIn('status', ['completed', 'active'])->take(12)->get();
    }

    /**
     * Subscribe to our newsletter
     *
     * @return void
     */
    public function newsletter()
    {
        try {

            // Check if newsletter enabled
            if (!settings('newsletter')->is_enabled) {
                return;
            }

            // Validate email address
            if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {

                // Error
                $this->notification([
                    'title' => __('messages.t_error'),
                    'description' => __('messages.t_pls_enter_valid_email_address'),
                    'icon' => 'error',
                ]);

                return;
            }

            // Get email in list
            $email = NewsletterList::where('email', $this->email)->first();

            // Check if email exists
            if ($email) {

                // Check if email already verified
                if ($email->status === 'verified') {

                    // Reset form
                    $this->reset('email');

                    // Return
                    return;
                } else {

                    // Delete old verifications
                    NewsletterVerification::where('list_id', $email->id)->delete();

                    // Generate verification token
                    $token = uid(60);

                    // Generate verification
                    $verification = new NewsletterVerification();
                    $verification->list_id = $email->id;
                    $verification->token = $token;
                    $verification->save();

                    // Send verification token
                    Mail::to($this->email)->send(new EveryoneNewsletterVerification($token));

                    // Reset form
                    $this->reset('email');

                    // Success
                    $this->notification([
                        'title' => __('messages.t_success'),
                        'description' => __('messages.t_we_sent_verification_link_newsletter'),
                        'icon' => 'success',
                    ]);
                }
            } else {

                // Add email to list
                $list = new NewsletterList();
                $list->uid = uid();
                $list->email = clean($this->email);
                $list->ip_address = request()->ip();
                $list->save();

                // Email not found, generate verification token
                $token = uid(60);

                // Generate verification
                $verification = new NewsletterVerification();
                $verification->list_id = $list->id;
                $verification->token = $token;
                $verification->save();

                // Send verification token
                Mail::to($this->email)->send(new EveryoneNewsletterVerification($token));

                // Reset form
                $this->reset('email');

                // Success
                $this->notification([
                    'title' => __('messages.t_success'),
                    'description' => __('messages.t_we_sent_verification_link_newsletter'),
                    'icon' => 'success',
                ]);
            }
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
