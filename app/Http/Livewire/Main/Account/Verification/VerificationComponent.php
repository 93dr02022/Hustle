<?php

namespace App\Http\Livewire\Main\Account\Verification;

use Livewire\Component;
use WireUi\Traits\Actions;
use Livewire\WithFileUploads;
use App\Models\VerificationCenter;
use App\Utils\Uploader\ImageUploader;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;
use App\Http\Validators\Main\Account\Verification\DocIDValidator;
use App\Http\Validators\Main\Account\Verification\SelfieValidator;
use App\Http\Validators\Main\Account\Verification\DocDriverValidator;
use App\Http\Validators\Main\Account\Verification\DocPassportValidator;
use Illuminate\Support\Facades\Http;

class VerificationComponent extends Component
{

    use WithFileUploads, SEOToolsTrait, Actions;

    public $verification;
    public $document_type;
    public $selfie;
    public $currentStep = 1;
    public $doc_id = [];
    public $doc_driver_license = [];
    public $doc_passport = [];

    public $first_name;
    public $last_name;
    public $bank;
    public $bvn;
    public $accountNumber;

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
     * Set document type
     *
     * @return void
     */
    public function setDocumentType()
    {
        // Document type must be id, driver license or passport
        if (!in_array($this->document_type, ['id', 'driver_license', 'passport', 'bvn'])) {

            // Error
            $this->notification([
                'title'       => __('messages.t_error'),
                'description' => __('messages.t_please_select_a_valid_document_type'),
                'icon'        => 'error'
            ]);

            return;
        }

        // Go to next step
        $this->currentStep = 2;

        if ($this->document_type == 'bvn') {
            $this->dispatchBrowserEvent('pharaonic.select2.load', [
                'component' => $this->id,
                'target'    => '#select2-id-bank'
            ]);
        }
    }

    /**
     * Run paystack api to validate the bvn
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
            $this->toastError("Sorry we are unable to validate your first name and last name");
            return false;
        }

        return true;
    }


    /**
     * Set document files
     *
     * @return void
     */
    public function setDocumentFiles()
    {
        try {

            // Validate files
            switch ($this->document_type) {
                case 'id':
                    DocIDValidator::validate($this);
                    break;
                case 'driver_license':
                    DocDriverValidator::validate($this);
                    break;
                case 'passport':
                    DocPassportValidator::validate($this);
                    break;
            }

            // Go to next step
            $this->currentStep = 3;
        } catch (\Illuminate\Validation\ValidationException $e) {

            // Validation error
            $this->notification([
                'title'       => __('messages.t_error'),
                'description' => __('messages.t_toast_form_validation_error'),
                'icon'        => 'error'
            ]);

            throw $e;
        } catch (\Throwable $th) {
            throw $th;
        }
    }


    /**
     * Finish verification
     *
     * @return void
     */
    public function finish()
    {
        try {

            // Validate selfie photo
            SelfieValidator::validate($this);

            // Get user id
            $user_id = auth()->id();

            // Check if document (id)
            if ($this->document_type === 'id') {

                // Upload front side
                $front_side_id = ImageUploader::make($this->doc_id['front'])
                    ->folder('verifications')
                    ->handle();

                // Upload back side
                $back_side_id  = ImageUploader::make($this->doc_id['back'])
                    ->folder('verifications')
                    ->handle();
            } elseif ($this->document_type === 'driver_license') {

                // Upload front side
                $front_side_id = ImageUploader::make($this->doc_driver_license['front'])
                    ->folder('verifications')
                    ->handle();

                // Upload back side
                $back_side_id  = ImageUploader::make($this->doc_driver_license['back'])
                    ->folder('verifications')
                    ->handle();
            } elseif ($this->document_type === 'passport') {

                // Upload front side
                $front_side_id = ImageUploader::make($this->doc_passport['front'])
                    ->folder('verifications')
                    ->handle();

                // No back side for passport
                $back_side_id  = null;
            }

            // Save selfie
            $selfie = ImageUploader::make($this->selfie)
                ->folder('verifications')
                ->handle();

            // Save verification
            $verification                  = new VerificationCenter();
            $verification->uid             = uid();
            $verification->user_id         = $user_id;
            $verification->document_type   = $this->document_type;
            $verification->file_front_side = $front_side_id;
            $verification->file_back_side  = $back_side_id;
            $verification->file_selfie     = $selfie;
            $verification->save();

            // Success, now refresh page
            $this->dispatchBrowserEvent('refresh');
        } catch (\Illuminate\Validation\ValidationException $e) {

            // Validation error
            $this->notification([
                'title'       => __('messages.t_error'),
                'description' => __('messages.t_toast_form_validation_error'),
                'icon'        => 'error'
            ]);

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
     * Start again and send files
     *
     * @return void
     */
    public function sendFilesAgain()
    {
        // Check if verification already declined
        if ($this->verification && $this->verification->status === 'declined') {

            // Delete verification
            $this->verification->delete();

            // Success, now refresh page
            $this->dispatchBrowserEvent('refresh');
        }
    }

    /**
     * Error toast notification
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
