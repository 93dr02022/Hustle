<?php

namespace App\Http\Livewire\Main\Seller\Verification;

use App\Http\Validators\Main\Account\Verification\SelfieValidator;
use App\Models\UserWithdrawalSettings;
use App\Models\VerificationCenter;
use App\Models\User;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Intervention\Image\Facades\Image;
use Livewire\Component;
use Livewire\WithFileUploads;
use WireUi\Traits\Actions;

class VerificationComponent extends Component
{
    use WithFileUploads, SEOToolsTrait, Actions;

    public $verification;

    public $document_type = 'bvn';

    public $selfie;

    public $first_name;

    public $last_name;

    public $bank;

    public $bvn = null;

    public $accountNumber;

    public $accountName;

    public $transferCode;

    /**
     * Init component
     *
     * @return void
     */
    public function mount()
    {
        // Get user verification
        $verification = VerificationCenter::firstOrCreate(
            ['user_id' => auth()->id()],
            ['uid' => uid()]
        );

        // Set verification
        $this->verification = $verification;

        $this->first_name = auth()->user()->first_name;
        $this->last_name = auth()->user()->last_name;
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
        $title = __('messages.t_verification_center') . " $separator " . settings('general')->title;
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

        return view('livewire.main.seller.verification.verification', [
            'banks' => $this->banks,
        ])
            ->extends('livewire.main.seller.layout.app')
            ->section('content');
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
     * Run paystack api to validate the names via BVN
     * if BVN is provided
     */
    public function bvnMatch()
    {
        $response = Http::withToken(config('paystack.secretKey'))
            ->post('https://api.paystack.co/bvn/match', [
                'bvn' => $this->bvn,
                'bank_code' => $this->bank,
                'account_number' => $this->accountNumber,
                'first_name' => $this->first_name,
                'last_name' => $this->last_name,
            ])
            ->object();

        if (!$response->status) {
            $this->toastMessage('Sorry error occured unable to validate your information.');

            return false;
        }

        if (!$response->data->first_name || !$response->data->last_name) {
            $this->toastMessage('Sorry we are unable to validate your names');

            return false;
        }

        return $response->data;
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
            $this->toastMessage('Sorry error occured unable to validate your information.');

            return false;
        }

        $containsAll = Str::containsAll($response->data->account_name, [
            $this->first_name,
            $this->last_name,
        ], true);

        if (!$containsAll) {
            $this->toastMessage('Sorry we are unable to validate your names');

            return false;
        }

        return $response->data->account_name;
    }

    /**
     * Create Paystack Transfer code for recipient
     */
    public function paystackRecipient()
    {
        $response = Http::withToken(config('paystack.secretKey'))
            ->post("https://api.paystack.co/transferrecipient", [
                'type' => 'nuban',
                'name' => "{$this->first_name} {$this->last_name}",
                'account_number' => $this->accountNumber,
                'bank_code' =>  $this->bank,
                'currency' => 'NGN',
            ])
            ->object();

        if (!$response->status) {
            $this->toastMessage('Sorry error occured unable to validate your information.');

            return false;
        }

        return $response->data->recipient_code;
    }

    /**
     * Personal verification
     */
    public function personalVerify()
    {
        try {
            $bvnInfo = $this->bvnMatch();

            $accountName = $this->accountMatch();
            $transferCode = $this->paystackRecipient();

            if (!$bvnInfo || !$accountName || !$transferCode) {
                $this->toastMessage('We are unable to verify your personal information.');
                return;
            }

            VerificationCenter::where('user_id', auth()->id())
                ->update([
                    'has_personal' => true,
                ]);

            UserWithdrawalSettings::upsert(
                [
                    [
                        'user_id' => auth()->id(),
                        'gateway_provider_name' => 'offline',
                        'account_type' => 'personal',
                        'gateway_provider_id' => $this->accountNumber,
                        'bank_name' => $this->getBankName(),
                        'bank_code' => $this->bank,
                        'transfer_recipient' => $transferCode,
                        'account_name' => $accountName,
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

            User::where('id', auth()->id())
                ->update(['status' => 'verified']);

            $this->toastMessage('Your personal information has been verified successfully.', 'success');

            $this->dispatchBrowserEvent('refresh');
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    /**
     * Personal verification
     */
    public function photoVerify($file)
    {
        try {
            $filename = 'verifications/' . uid() . '.jpeg';
            $image = Image::make($file);

            Storage::disk('s3')->put($filename, $image->encode());

            $this->verification->file_selfie = $filename;
            $this->verification->photo_status = 'awaiting';
            $this->verification->save();

            $this->toastMessage('Your verification photo successfully uploaded.', 'success');

            $this->dispatchBrowserEvent('refresh');
        } catch (\Throwable $th) {
            $this->toastMessage('Error occured while trying to upload the verification photo.');
        }
    }

    /**
     * Complete Verification forma and submits the form
     */
    public function businessVerify()
    {
        try {
            VerificationCenter::where('user_id', auth()->id())
                ->update([
                    'has_business' => true,
                    'registration_file' => '',
                    'business_verify_status' => 'pending'
                ]);

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

            User::where('id', auth()->id())
                ->update([
                    'status' => 'verified'
                ]);

            // Success, now refresh page
            $this->dispatchBrowserEvent('refresh');
        } catch (ValidationException $e) {

            $this->toastMessage(__('messages.t_toast_form_validation_error'));
            throw $e;
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Wire UI Error toast notification
     */
    public function toastMessage($message, $type = 'error')
    {
        $this->notification([
            'title' => $type == 'error' ? __('messages.t_error') : __('messages.t_success'),
            'description' => $message,
            'icon' =>  $type,
        ]);
    }
}
