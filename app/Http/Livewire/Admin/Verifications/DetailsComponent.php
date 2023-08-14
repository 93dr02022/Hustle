<?php

namespace App\Http\Livewire\Admin\Verifications;

use App\Models\User;
use App\Models\VerificationCenter;
use App\Notifications\User\Everyone\VerificationApproved;
use App\Notifications\User\Everyone\VerificationDeclined;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;
use Livewire\Component;
use Livewire\WithPagination;
use WireUi\Traits\Actions;

class DetailsComponent extends Component
{
    use WithPagination, SEOToolsTrait, Actions;

    public $verification;

    public $business_name;
    public $business_email;
    public $business_phone;
    public $registration_number;

    public $has_personal;
    public $has_business;
    public $file_selfie;
    public $registration_file;
    public $mask_bvn;
    public $business_verify_status;
    public $photo_status;
    public $verified_at;
    public $declined_at;

    public $bn_status;
    public $ph_status;

    public function mount($uid)
    {
        // Get category
        $verification = VerificationCenter::where('uid', $uid)
            ->with('user')
            ->firstOrFail();

        // Fill form
        $this->fill([
            'business_name' => $verification->business_name,
            'business_email' => $verification->business_email,
            'business_phone' => $verification->business_phone,
            'registration_number' => $verification->registration_number,

            'has_personal' => $verification->has_personal,
            'has_business' => $verification->has_business,
            'file_selfie' => $verification->file_selfie,
            'registration_file' => $verification->registration_file,
            'mask_bvn' => $verification->mask_bvn,
            'business_verify_status' => $verification->business_verify_status,
            'photo_status' => $verification->photo_status,
            'verified_at' => $verification->verified_at,
            'declined_at' => $verification->declined_at,
        ]);

        // Set verification
        $this->verification = $verification;
    }

    /**
     * Render component
     *
     * @return Illuminate\View\View
     */
    public function render()
    {
        // Seo
        $this->seo()->setTitle(setSeoTitle(__('messages.t_verification_center'), true));
        $this->seo()->setDescription(settings('seo')->description);

        return view('livewire.admin.verifications.details', [])->extends('livewire.admin.layout.app')->section('content');
    }

    /**
     *  Verify user information
     */
    public function verify()
    {
        try {
            $this->verification->business_verify_status = $this->bn_status;
            $this->verification->photo_status = $this->ph_status;
            $this->verification->verified_at = $this->bn_status == 'verified' ? now() : null;
            $this->verification->save();

            $user = User::where('id', $this->verification->user_id)->firstOrFail();

            if ($this->bn_status == 'verified') {
                // Send notification
                $user->notify((new VerificationApproved)->locale(config('app.locale')));

                // Send notification
                notification([
                    'text' => 't_ur_account_has_verified',
                    'action' => url('seller/verification'),
                    'user_id' => $user->id,
                ]);
            }

            if ($this->bn_status == 'declined') {
                // Send notification
                $user->notify((new VerificationDeclined)->locale(config('app.locale')));

                // Send notification
                notification([
                    'text' => 'Your business verification was decline',
                    'action' => url('seller/verification'),
                    'user_id' => $user->id,
                ]);
            }

            if ($this->ph_status == 'verified') {
                // Send notification
                notification([
                    'text' => 't_ur_account_has_verified',
                    'action' => url('seller/home'),
                    'user_id' => $user->id,
                ]);
            }

            $this->notification([
                'title' => __('messages.t_success'),
                'description' => __('messages.t_toast_operation_success'),
                'icon' => 'success',
            ]);

            $this->verification->refresh();
            $this->dispatchBrowserEvent('close-modal', 'verifyModal');
        } catch (\Throwable $th) {
            $this->notification([
                'title' => __('messages.t_error'),
                'description' => __('Sorry error occured while trying to complete user verification.'),
                'icon' => 'error',
            ]);
        }
    }

    /**
     * Approve selected verification
     *
     * @param  int  $id
     * @return void
     */
    public function approve($id)
    {
        // Get verification
        $verification = VerificationCenter::where('id', $id)->where('status', 'pending')->firstOrFail();

        // Get user
        $user = User::where('id', $verification->user_id)->firstOrFail();

        // Update user status
        $user->status = 'verified';
        $user->save();

        // Send notification
        $user->notify((new VerificationApproved)->locale(config('app.locale')));

        // Update verification status
        $verification->status = 'verified';
        $verification->verified_at = now();
        $verification->save();

        // Send notification
        notification([
            'text' => 't_ur_account_has_verified',
            'action' => url('account/verification'),
            'user_id' => $user->id,
        ]);

        // Success
        $this->notification([
            'title' => __('messages.t_success'),
            'description' => __('messages.t_toast_operation_success'),
            'icon' => 'success',
        ]);
    }

    /**
     * Decline selected verification
     *
     * @param  int  $id
     * @return void
     */
    public function decline($id)
    {
        // Get verification
        $verification = VerificationCenter::where('id', $id)->where('status', 'pending')->firstOrFail();

        // Get user
        $user = User::where('id', $verification->user_id)->firstOrFail();

        // Send notification
        $user->notify((new VerificationDeclined)->locale(config('app.locale')));

        // Update verification status
        $verification->status = 'declined';
        $verification->declined_at = now();
        $verification->save();

        // Send notification
        notification([
            'text' => 't_verification_files_declined',
            'action' => url('account/verification'),
            'user_id' => $user->id,
        ]);

        // Success
        $this->notification([
            'title' => __('messages.t_success'),
            'description' => __('messages.t_toast_operation_success'),
            'icon' => 'success',
        ]);
    }
}
