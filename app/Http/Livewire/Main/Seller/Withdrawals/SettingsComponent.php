<?php

namespace App\Http\Livewire\Main\Seller\Withdrawals;

use App\Http\Validators\Main\Seller\Withdrawals\SettingsValidator;
use App\Models\UserWithdrawalSettings;
use App\Models\VerificationCenter;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Livewire\Component;
use WireUi\Traits\Actions;

class SettingsComponent extends Component
{
    use SEOToolsTrait, Actions;

    public $personalBank;

    public $personalAccountName;

    public $personalAccountNumber;

    public $personalTransferCode;

    public $businessBank;

    public $businessAccountName;

    public $businessAccountNumber;

    public $businessTransferCode;

    public $selectedType;

    public $transferCode;

    public $verification;

    public $withdrawInfo;

    /**
     * Init component
     *
     * @return void
     */
    public function mount()
    {
        $this->verification = VerificationCenter::where('user_id', auth()->id())->first();

        if (!$this->verification) {
            $this->toastSuccess('You need to complete your verification before setting bank account');
            return redirect('/seller/verification');
        }

        $withdrawInfo = UserWithdrawalSettings::firstOrCreate(['user_id' => auth()->id()]);

        $withdrawInfo->refresh();

        $this->withdrawInfo = $withdrawInfo;

        $this->personalBank = $withdrawInfo->personal_bank_code;
        $this->personalAccountName = $withdrawInfo->personal_account_name;
        $this->personalAccountNumber = $withdrawInfo->personal_acct_number;

        $this->businessBank = $withdrawInfo->business_bank_code;
        $this->businessAccountName = $withdrawInfo->business_account_name;
        $this->businessAccountNumber = $withdrawInfo->business_acct_number;
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
    public function getBankName($type)
    {
        $bank = collect($this->banks)->first(function ($bank) use ($type) {
            $bankCode = $type == 'personal' ? $this->personalBank : $this->businessBank;

            return $bank['code'] == $bankCode;
        });

        return $bank['name'];
    }

    /**
     * Create Paystack Transfer code for recipient
     */
    public function paystackRecipient($type)
    {
        $response = Http::withToken(config('paystack.secretKey'))
            ->post("https://api.paystack.co/transferrecipient", [
                'type' => 'nuban',
                'name' => auth()->user()->first_name . " " . auth()->user()->first_name,
                'account_number' => $type == 'personal' ? $this->personalAccountNumber : $this->businessAccountNumber,
                'bank_code' => $type == 'personal' ? $this->personalBank : $this->businessBank,
                'currency' => 'NGN',
            ])
            ->object();

        if (!$response->status) {
            return false;
        }

        return $response->data->recipient_code;
    }

    /**
     * Run paystack api to validate name via account number
     */
    public function accountMatch($type)
    {
        $response = Http::withToken(config('paystack.secretKey'))
            ->get("https://api.paystack.co/bank/resolve", [
                'account_number' => $type == 'personal' ? $this->personalAccountNumber : $this->businessAccountNumber,
                'bank_code' => $type == 'personal' ? $this->personalBank : $this->businessBank
            ])
            ->object();

        if (!$response->status) {
            return false;
        }

        if ($type == 'personal') {
            $containsAll = Str::containsAll($response->data->account_name, [
                auth()->user()->first_name,
                auth()->user()->last_name,
            ], true);
        }

        if ($type == 'business') {
            $containsAll = Str::containsAll($response->data->account_name, [
                $this->verification->business_name
            ], true);
        }

        if (!$containsAll) {
            return false;
        }

        return $response->data->account_name;
    }

    /**
     * Very the seller supplied account information
     */
    public function verify($type)
    {
        $accountName = $this->accountMatch($type);
        $transferCode = $this->paystackRecipient($type);

        if (!$accountName || !$transferCode) {
            return false;
        }

        if ($type == 'personal') {
            $this->personalAccountName = $accountName;
            $this->personalTransferCode = $transferCode;
        }

        if ($type == 'business') {
            $this->businessAccountName = $accountName;
            $this->businessTransferCode = $transferCode;
        }

        return true;
    }

    /**
     * Update personal account withdrawal settings
     *
     * @return void
     */
    public function updatePersonal()
    {
        if (!$this->verification->has_personal) {
            $this->toastError('Please complete your personal verification before setting withdrawal account.');
            return false;
        }

        // check nobody else has used this account before
        $acctExists = UserWithdrawalSettings::where('personal_acct_number', $this->accountNumber)
            ->where('user_id', '!=', auth()->id())
            ->exists();

        if ($acctExists) {
            $this->toastMessage('Your account number has been flagged please change');
            return;
        }

        try {
            if (!$this->verify('personal')) {
                $this->toastError(__('We are unable to verify your bank information please retry.'));
                return false;
            }

            UserWithdrawalSettings::where('user_id', auth()->id())
                ->update([
                    'personal_acct_number' => $this->personalAccountNumber,
                    'personal_bank_name' => $this->getBankName('personal'),
                    'personal_bank_code' => $this->personalBank,
                    'personal_transfer_recipient' => $this->personalTransferCode,
                    'personal_account_name' => $this->personalAccountName,
                ]);

            $this->toastSuccess(__('messages.t_toast_operation_success'));
        } catch (\Throwable $th) {
            $this->toastError($th->getMessage());
        }
    }

    /**
     * Update personal account withdrawal settings
     *
     * @return void
     */
    public function updateBusiness()
    {
        if ($this->verification->business_verify_status !== 'verified') {
            $this->toastError('you can only add business account when your business verified.');
            return false;
        }

        // check nobody else has used this account before
        $acctExists = UserWithdrawalSettings::where('business_acct_number', $this->businessAccountNumber)
            ->where('user_id', '!=', auth()->id())
            ->exists();

        if ($acctExists) {
            $this->toastMessage('Your account number has been flagged please change');
            return;
        }

        try {
            if (!$this->verify('business')) {
                $this->toastError(__('We are unable to verify your bank information please retry.'));
                return false;
            }

            UserWithdrawalSettings::where('user_id', auth()->id())
                ->update([
                    'business_acct_number' => $this->businessAccountNumber,
                    'business_bank_name' => $this->getBankName('business'),
                    'business_bank_code' => $this->businessBank,
                    'business_transfer_recipient' => $this->businessTransferCode,
                    'business_account_name' => $this->businessAccountName,
                ]);

            $this->toastSuccess(__('messages.t_toast_operation_success'));
        } catch (\Throwable $th) {
            $this->toastError($th->getMessage());
        }
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
