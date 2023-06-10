<?php

namespace App\Http\Livewire\Main\Account\Verification;

use Livewire\Component;
use WireUi\Traits\Actions;
use Livewire\WithFileUploads;
use App\Models\VerificationCenter;
use App\Utils\Uploader\ImageUploader;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;
use App\Http\Validators\Main\Account\Verification\SelfieValidator;
use App\Models\UserWithdrawalSettings;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class VerificationComponent extends Component
{

    use WithFileUploads, SEOToolsTrait, Actions;

    public $verification;
    public $document_type = 'bvn';
    public $selfie;
    public $currentStep = 1;
    public $doc_id = [];
    public $doc_driver_license = [];
    public $doc_passport = [];

    public $first_name;
    public $last_name;
    public $bank;
    public $bvn = null;
    public $accountNumber;
    public $accountName;

    /**
     * Init component
     *
     * @return void
     */
    public function mount()
    {
        // Get user verification
        $verification = auth()->user()->verification;

        // Set verification
        $this->verification = $verification ? $verification : false;

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
        $separator   = settings('general')->separator;
        $title       = __('messages.t_verification_center') . " $separator " . settings('general')->title;
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

        return view('livewire.main.account.verification.verification', [
            'banks' => $this->banks
        ])
            ->extends('livewire.main.layout.app')
            ->section('content');
    }

    /**
     * Get the list of verification banks
     */
    public function getBanksProperty()
    {
        $banks = Http::withToken(config('paystack.secretKey'))
            ->get("https://api.paystack.co/bank?per_page=100")
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
            ->post("https://api.paystack.co/bvn/match", [
                "bvn" => $this->bvn,
                "bank_code" => $this->bank,
                "account_number" => $this->accountNumber,
                "first_name" => $this->first_name,
                "last_name" => $this->last_name
            ])
            ->object();

        if (!$response->status) {
            $this->toastError("Sorry error occured unable to validate your information.");
            return false;
        }

        if (!$response->data->first_name || !$response->data->last_name) {
            $this->toastError("Sorry we are unable to validate your names");
            return false;
        }

        return true;
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
            $this->toastError("Sorry error occured unable to validate your information.");
            return false;
        }

        $containsAll = Str::containsAll($response->data->account_name, [
            $this->first_name,
            $this->last_name
        ], true);

        if (!$containsAll) {
            $this->toastError("Sorry we are unable to validate your names");
            return false;
        }

        return $response->data->account_name;
    }


    /**
     * Very the seller supplied account information 
     */
    public function verify()
    {
        if ($this->bvn && !$this->bvnMatch()) {
            return;
        }

        $accountName = $this->accountMatch();

        if (!$accountName) {
            return;
        }

        $this->accountName = $accountName;

        $this->currentStep = 2;
    }


    /**
     * Complete Verification forma and submits the form
     */
    public function finish()
    {
        try {
            SelfieValidator::validate($this);

            $extension  = $this->selfie->getClientOriginalExtension();
            $fileName = makeFileName($extension);

            $path = $this->selfie->storeAs('verifications', $fileName, 's3');

            $url = Storage::disk('s3')->url($path);

            VerificationCenter::upsert([
                [
                    'uid' => uid(),
                    'user_id' => auth()->id(),
                    'document_type' => $this->document_type,
                    'status' => $this->bvn ? 'verified' : 'pending',
                    'file_selfie' => $url
                ]
            ], ['user_id'], ['document_type', 'file_selfie']);

            UserWithdrawalSettings::upsert([
                [
                    'user_id' => auth()->id(),
                    'gateway_provider_name' => 'offline',
                    'gateway_provider_id' => $this->accountNumber,
                    'bank_name' => $this->getBankName(),
                    'bank_code' => $this->bank,
                    'account_name' => $this->accountName,
                ]
            ], ['user_id'], ['gateway_provider_id', 'bank_name', 'bank_code', 'account_name']);

            // Success, now refresh page
            $this->dispatchBrowserEvent('refresh');
        } catch (ValidationException $e) {

            $this->toastError(__('messages.t_toast_form_validation_error'));
            throw $e;
        } catch (\Throwable $th) {
            throw $th;
        }
    }


    /**
     * Go back
     *
     * @return void
     */
    public function back()
    {
        // Check if not first step
        if ($this->currentStep !== 1) {
            $this->currentStep -= 1;
        }

        if ($this->currentStep == 2 && $this->document_type == 'bvn') {
            $this->dispatchBrowserEvent('pharaonic.select2.load', [
                'component' => $this->id,
                'target'    => '#select2-id-bank'
            ]);
        }
    }


    /**
     * Start verification again and resend files
     */
    public function sendFilesAgain()
    {
        if ($this->verification && $this->verification->status === 'declined') {

            $this->verification->delete();
            $this->dispatchBrowserEvent('refresh');
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
