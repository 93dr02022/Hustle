<?php

namespace App\Http\Livewire\Main\Seller\Withdrawals;

use App\Http\Validators\Main\Seller\Withdrawals\MakeValidator;
use App\Jobs\Main\Seller\SendMoney;
use App\Models\Admin;
use App\Models\UserWithdrawalHistory;
use App\Models\UserWithdrawalSettings;
use App\Notifications\Admin\PendingWithdrawal as AdminPendingWithdrawal;
use App\Notifications\User\Seller\PendingWithdrawal as SellerPendingWithdrawal;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;
use DB;
use Illuminate\Validation\ValidationException;
use Livewire\Component;
use WireUi\Traits\Actions;

class CreateComponent extends Component
{
    use SEOToolsTrait, Actions;

    public $can_withdraw = true;

    public $reason;

    public $paypal_email;

    public $offline_info;

    public $amount;

    public $withdrawalSettings;

    /**
     * Init component
     *
     * @return void
     */
    public function mount()
    {
        $withdrawSettings = UserWithdrawalSettings::where('user_id', auth()->id())
            ->whereNotNull('gateway_provider_id')
            ->first();

        // Check if user has withdrawal settings or not
        if (!$withdrawSettings) {
            return redirect('seller/withdrawals/settings');
        }

        // Get withdrawal settings
        $settings = settings('withdrawal');

        // Get user available balance
        $available_balance = auth()->user()->balance_available;

        // Get user pending withdrawal
        $pending = UserWithdrawalHistory::where('user_id', auth()->id())->where('status', 'pending')->first();

        // Check if user a pending withdrawal
        if ($pending) {
            $this->can_withdraw = false;
            $this->reason = __('messages.t_cant_withdraw_reason_pending_request');
        }

        // check user latest withdrawal
        $latest = UserWithdrawalHistory::where('user_id', auth()->id())
            ->where('status', 'paid')
            ->latest()
            ->first();

        // Check if he has a paid withdrawal
        $passedLimit = $this->checkWithdrawLimit($settings, $latest);
        if ($passedLimit !== true) {
            return redirect('seller/withdrawals')
                ->with('message', $passedLimit);
        }

        // User does not have any withdrawal, let's check minimum withdrawal amount
        if ($settings->min_withdrawal_amount > $available_balance) {

            $this->can_withdraw = false;

            $this->reason = __('messages.t_cant_withdraw_reason_min_amount', [
                'amount' => money($settings->min_withdrawal_amount, settings('currency')->code, true),
            ]);
        }

        $this->offline_info = $withdrawSettings->gateway_provider_id;
        $this->withdrawalSettings = $withdrawSettings;
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
        $title = __('messages.t_withdrawal') . " $separator " . settings('general')->title;
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

        return view('livewire.main.seller.withdrawals.create')->extends('livewire.main.seller.layout.app')->section('content');
    }

    /**
     * Make a withdrawal
     *
     * @return void
     */
    public function withdraw()
    {
        try {
            MakeValidator::validate($this);

            $userWithdrawSettings = UserWithdrawalSettings::where('user_id', auth()->id())
                ->whereNotNull('gateway_provider_id')
                ->first();

            // Check if user has withdrawal email or not
            if (!$userWithdrawSettings) {
                return redirect('seller/withdrawals/settings');
            }

            // Get withdrawal settings
            $settings = settings('withdrawal');
            $available_balance = auth()->user()->balance_available;

            // Check if user has this money in his account
            if ($this->amount > $available_balance) {
                $this->toastError(__('messages.t_withdrawal_money_not_enough'));

                return;
            }

            // Get user pending withdrawal
            $pending = UserWithdrawalHistory::userPending()->first();

            // Check if user a pending withdrawal
            if ($pending) {
                return redirect('seller/withdrawals')
                    ->with('message', __('messages.t_cant_withdraw_reason_pending_request'));
            }

            $latest = UserWithdrawalHistory::userLatestPaid()->first();

            // Check if he has a paid withdrawal
            $passedLimit = $this->checkWithdrawLimit($settings, $latest);
            if ($passedLimit !== true) {
                return redirect('seller/withdrawals')
                    ->with('message', $passedLimit);
            }

            // User does not have any withdrawal, let's check minimum withdrawal amount
            if ($this->amount < $settings->min_withdrawal_amount) {
                $this->toastError(__('messages.t_cant_withdraw_reason_min_amount', [
                    'amount' => money($settings->min_withdrawal_amount, settings('currency')->code, true),
                ]));

                return;
            }

            $withdrawal = UserWithdrawalHistory::create([
                'uid' => uid(25),
                'user_id' => auth()->id(),
                'gateway_provider_id' => $userWithdrawSettings->gateway_provider_id,
                'gateway_provider_name' => $userWithdrawSettings->gateway_provider_name,
                'amount' => convertToNumber($this->amount),
                'transfer_code' => $userWithdrawSettings->transfer_code,
                'fee' => null,
            ]);

            // Update user balance
            auth()->user()->update([
                'balance_withdrawn' => DB::raw("balance_withdrawn + {$this->amount}"),
                'balance_available' => DB::raw("balance_available - {$this->amount}"),
            ]);

            // Send notification to admin
            Admin::first()->notify((new AdminPendingWithdrawal($withdrawal))->locale(config('app.locale')));
            auth()->user()->notify((new SellerPendingWithdrawal($withdrawal))->locale(config('app.locale')));

            SendMoney::dispatch($withdrawal);

            // Success
            return redirect('seller/withdrawals')->with('success', __('messages.t_ur_withdrawal_request_under_review'));
        } catch (ValidationException $e) {

            $this->toastError(__('messages.t_toast_form_validation_error'));

            throw $e;
        } catch (\Throwable $th) {

            $this->toastError($th->getMessage());
        }
    }

    /**
     * Validate user withdrawal limit by heck withdrawal
     * period settings
     */
    public function checkWithdrawLimit($settings, $latest)
    {
        $now = now();
        $message = true;

        if ($latest) {
            switch ($settings->withdrawal_period) {
                case 'daily':

                    if ($latest->created_at->diffInHours($now) < 24) {
                        $message = __('messages.t_cant_withdraw_reason_period_24_hours');
                    }

                    break;
                case 'weekly':

                    if ($latest->created_at->diffInHours($now) < 168) {
                        $message = __('messages.t_cant_withdraw_reason_period_7_days');
                    }

                    break;
                case 'monthly':

                    if ($latest->created_at->diffInHours($now) < 720) {
                        $message = __('messages.t_cant_withdraw_reason_period_monthly');
                    }

                    break;
                default:
                    // code...
                    break;
            }
        }

        return $message;
    }

    /**
     * Send 
     */

    /**
     * Toast error message to user.
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
