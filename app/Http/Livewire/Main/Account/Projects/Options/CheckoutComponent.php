<?php

namespace App\Http\Livewire\Main\Account\Projects\Options;

use App\Jobs\Main\Post\Project\SendAlertToFreelancers;
use App\Models\ProjectPlan;
use App\Models\ProjectSubscription;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;
use Illuminate\Support\Facades\Http;
use Livewire\Component;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
use WireUi\Traits\Actions;

class CheckoutComponent extends Component
{
    use SEOToolsTrait, Actions;

    public $subscription;

    public $selected_payment_method;

    /**
     * Init component
     *
     * @param  string  $id
     * @return void
     */
    public function mount($id)
    {
        // Get subscription
        $subscription = ProjectSubscription::where('uid', $id)
            ->where('status', 'pending')
            ->whereHas('project', function ($query) {
                return $query->where('user_id', auth()->id())
                    ->where('status', 'pending_payment');
            })
            ->firstOrFail();

        // Set subscription
        $this->subscription = $subscription;
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
        $title = __('messages.t_promote_project') . " $separator " . settings('general')->title;
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

        return view('livewire.main.account.projects.options.checkout')->extends('livewire.main.layout.app')->section('content');
    }

    /**
     * Checkout
     *
     * @param  mixed  $data
     * @return void
     */
    public function checkout($data = null)
    {
        try {
            switch ($this->selected_payment_method) {
                case 'paystack':
                    $response = $this->paystack($data);
                    break;
                case 'wallet':
                    $response = [];
                    break;
                default:
                    break;
            }

            // Check if response succeeded
            if (isset($response['success']) && $response['success'] === true) {
                $this->success('paystack', $response['transaction']['payment_id']);

                // Go to projects page
                return redirect('account/projects')
                    ->with('success', __('messages.t_ur_payment_has_succeeded'));
            } else {
                return back()->with('error', $response['message']);
            }
        } catch (\Throwable $th) {

            // Error
            $this->notification([
                'title' => __('messages.t_error'),
                'description' => $th->getMessage(),
                'icon' => 'error',
            ]);
        }
    }

    /**
     * Calculate exchange rate
     *
     * @param  float  $gateway_exchange_rate
     * @return mixed
     */
    protected function calculateExchangeAmount($gateway_exchange_rate = null)
    {
        try {

            // Get total amount
            $amount = $this->subscription->total;

            // Get default currency exchange rate
            $default_exchange_rate = (float) settings('currency')->exchange_rate;

            // Set gateway exchange rate
            $gateway_exchange_rate = is_null($gateway_exchange_rate) ? $default_exchange_rate : (float) $gateway_exchange_rate;

            // Check if same exchange rate
            if ($default_exchange_rate == $gateway_exchange_rate) {

                // No need to calculate amount
                return $amount;
            } else {

                // Return new amount
                return (float) number_format($amount * $gateway_exchange_rate / $default_exchange_rate, 2, '.', '');
            }
        } catch (\Throwable $th) {
            return $amount;
        }
    }

    /**
     * Handles paystack payment.
     */
    protected function paystack($reference_id)
    {
        try {
            $total_amount = $this->calculateExchangeAmount();

            $payment = Http::acceptJson()
                ->withToken(config('paystack.secretKey'))
                ->get("https://api.paystack.co/transaction/verify/$reference_id")
                ->json();


            // Let's see if payment suuceeded
            if (is_array($payment) && isset($payment['status']) && $payment['status'] === true && isset($payment['data'])) {

                // Get paid amount
                $amount = $payment['data']['amount'] / 100;

                // Get currency
                $currency = $payment['data']['currency'];

                // Check currency
                if (strtolower($currency) != strtolower(settings('paystack')->currency)) {
                    $response = [
                        'success' => false,
                        'message' => __('messages.t_checkout_currency_invalid'),
                    ];

                    return $response;
                }

                // This amount must equals amount in order
                if ($amount != $total_amount) {
                    $response = [
                        'success' => false,
                        'message' => __('messages.t_amount_in_cart_not_equals_received'),
                    ];

                    return $response;
                }

                // Payment succeeded
                $response = [
                    'success' => true,
                    'transaction' => [
                        'payment_id' => $payment['data']['id'],
                        'payment_method' => 'paystack',
                        'payment_status' => 'paid',
                        'amount_paid' => $amount
                    ],
                ];

                // Return response
                return $response;
            } else {
                // We couldn't handle your payment
                $response = [
                    'success' => false,
                    'message' => __('messages.t_we_could_not_handle_ur_payment'),
                ];

                // Return response
                return $response;
            }
        } catch (\Throwable $th) {

            // Something went wrong
            $response = [
                'success' => false,
                'message' => $th->getMessage(),
            ];

            // Return response
            return $response;
        }
    }

    /**
     * Successfull payment
     *
     * @param  string  $payment_method
     * @param  string  $payment_id
     * @return void
     */
    private function success($payment_method, $payment_id)
    {
        $project = $this->subscription->project;

        // Get projects settings
        $settings = settings('projects');

        // Update subscription
        $this->subscription->payment_method = $payment_method;
        $this->subscription->payment_id = $payment_id;
        $this->subscription->status = 'paid';
        $this->subscription->save();

        // Check if project has featured plan
        if ($project->is_featured) {

            // Get featured plan
            $featured_plan = ProjectPlan::whereType('featured')->first();
        } else {

            // No plan selected
            $featured_plan = null;
        }

        // Check if project has urgent plan
        if ($project->is_urgent) {

            // Get urgent plan
            $urgent_plan = ProjectPlan::whereType('urgent')->first();
        } else {

            // No plan selected
            $urgent_plan = null;
        }

        // Check if project has alert plan
        if ($project->is_alert) {

            // Get alert plan
            $alert_plan = ProjectPlan::whereType('alert')->first();
        } else {

            // No plan selected
            $alert_plan = null;
        }

        // Check if project has highlighted plan
        if ($project->is_highlighted) {

            // Get highlighted plan
            $highlighted_plan = ProjectPlan::whereType('highlight')->first();
        } else {

            // No plan selected
            $highlighted_plan = null;
        }

        // We need to send notifications to freelancer if alert plans was selected for this project
        if ($alert_plan) {

            // Run a job for this in background
            SendAlertToFreelancers::dispatch($project);
        }

        // Update project
        $project->status = $settings->auto_approve_projects ? 'active' : 'pending_approval';
        $project->expiry_date_featured = $featured_plan ? now()->addDays($featured_plan->days) : null;
        $project->expiry_date_urgent = $urgent_plan ? now()->addDays($urgent_plan->days) : null;
        $project->expiry_date_highlight = $highlighted_plan ? now()->addDays($highlighted_plan->days) : null;
        $project->save();
    }
}
