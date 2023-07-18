<?php

namespace App\Http\Livewire\Main\Seller\Withdrawals;

use App\Http\Validators\Main\Seller\Withdrawals\SettingsValidator;
use App\Models\UserWithdrawalSettings;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Livewire\Component;
use WireUi\Traits\Actions;

class SettingsComponent extends Component
{
    use SEOToolsTrait, Actions;

    public $offline_info;

    public $bank;

    public $accountName;

    public $accountNumber;

    public $transferCode;

    /**
     * Init component
     *
     * @return void
     */
    public function mount()
    {
        $withdrawInfo = UserWithdrawalSettings::where('user_id', auth()->id())->first();

        if ($withdrawInfo) {
            $this->bank = $withdrawInfo->bank_code;
            $this->accountName = $withdrawInfo->account_name;
            $this->accountNumber = $withdrawInfo->gateway_provider_id;
        }
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
        $title = __('messages.t_withdrawal_settings') . " $separator " . settings('general')->title;
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

        return view('livewire.main.seller.withdrawals.settings', [
            'banks' => $this->banks
        ])->extends('livewire.main.seller.layout.app')->section('content');
    }

    /**
     * Get the list of verification banks
     */
    public function getBanksProperty()
    {
        $banks = Http::withToken(config('paystack.secretKey'))
            ->get('https://api.paystack.co/bank?per_page=100')
            ->collect()
            ->toArray();

        return $banks['data'];
    }

    /**
     * Get bank name to save
     */
    public function getBankName()
    {
        $bank = collect($this->banks)->first(function ($bank) {
            return $bank['code'] === $this->bank;
        });

        return $bank['name'];
    }

    /**
     * Create Paystack Transfer code for recipient
     */
    public function paystackRecipient()
    {
        $response = Http::withToken(config('paystack.secretKey'))
            ->post("https://api.paystack.co/transferrecipient", [
                'type' => 'nuban',
                'name' => auth()->user()->first_name . " " . auth()->user()->first_name,
                'account_number' => $this->accountNumber,
                'bank_code' =>  $this->bank,
                'currency' => 'NGN',
            ])
            ->object();

        if (!$response->status) {
            return false;
        }

        return $response->data->recipient_code;
    }

    /**
     * Very the seller supplied account information
     */
    public function verify()
    {
        $accountName = $this->accountMatch();
        $transferCode = $this->paystackRecipient();

        if (!$accountName || !$transferCode) {
            return false;
        }

        $this->accountName = $accountName;
        $this->transferCode = $transferCode;

        return true;
    }

    /**
     * Update withdrawal settings
     *
     * @return void
     */
    public function update()
    {
        try {
            if (!$this->verify()) {
                $this->toastError(__('We are unable to verify your bank information please retry.'));
                return false;
            }

            UserWithdrawalSettings::upsert(
                [
                    [
                        'user_id' => auth()->id(),
                        'gateway_provider_name' => 'offline',
                        'gateway_provider_id' => $this->accountNumber,
                        'bank_name' => $this->getBankName(),
                        'bank_code' => $this->bank,
                        'transfer_recipient' => $this->transferCode,
                        'account_name' => $this->accountName,
                    ],
                ],
                ['user_id'],
                [
                    'gateway_provider_id',
                    'bank_name',
                    'bank_code',
                    'transfer_recipient',
                    'account_name'
                ]
            );

            $this->toastSuccess(__('messages.t_toast_operation_success'));
        } catch (\Throwable $th) {
            $this->toastError($th->getMessage());
        }
    }

    /**
     * Run paystack api to validate name via account number
     * if BVN is not provided.
     */
    public function accountMatch()
    {
        $response = Http::withToken(config('paystack.secretKey'))
            ->get("https://api.paystack.co/bank/resolve?account_number={$this->accountNumber}&bank_code={$this->bank}")
            ->object();

        if (!$response->status) {
            return false;
        }

        $containsAll = Str::containsAll($response->data->account_name, [
            auth()->user()->first_name,
            auth()->user()->last_name,
        ], true);

        if (!$containsAll) {
            return false;
        }

        return $response->data->account_name;
    }

    /**
     * Toast error message
     */
    public function toastError($message)
    {
        $this->notification([
            'title' => __('messages.t_error'),
            'description' => $message,
            'icon' => 'error',
        ]);
    }

    /**
     * Toast success message
     */
    public function toastSuccess($message)
    {
        $this->notification([
            'title' => __('messages.t_success'),
            'description' => $message,
            'icon' => 'success',
        ]);
    }
}
