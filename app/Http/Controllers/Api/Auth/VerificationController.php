<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Models\EmailVerification;
use App\Models\User;
use App\Notifications\User\Everyone\VerifyEmailMobile;
use App\Notifications\User\Everyone\Welcome;
use App\Support\Utils;
use Carbon\Carbon;
use Illuminate\Http\Request;

class VerificationController extends Controller
{
    /**
     * Verify email otp
     * @see intentionally ignore form request
     * 
     * @return \Illuminate\http\JsonResponse
     */
    public function resend(Request $request)
    {
        $request->validate([
            'email' => ['required', 'exists:users,email']
        ]);

        try {
            EmailVerification::where('email', $request->email)->delete();
            $user = User::whereEmail($request->email)->first();
            $token = mt_rand(111111, 999999);

            $verification = EmailVerification::create([
                'token' => $token,
                'email' => $user->email,
                'expires_at' => now()->addMinutes(60),
            ]);

            // Send email
            $user->notify((new VerifyEmailMobile($verification))->locale(config('app.locale')));

            return Utils::successResp([], 'A new verification code has been sent to your email address');
        } catch (\Throwable $th) {
            return Utils::errorResp();
        }
    }

    /**
     * Verify the otp
     * @see intentionally ignore form request
     * 
     * @return \Illuminate\Http\JsonResponse
     */
    public function verify(Request $request)
    {
        $request->validate([
            'token' => ['required', 'digits:6'],
            'email' => ['required', 'email']
        ]);

        try {
            $verification = EmailVerification::whereToken($request->token)
                ->whereEmail($request->email)
                ->first();

            if (!$verification) {
                return Utils::validateResp(['token' => 'This verification code is invalid. Please request new one']);
            }

            $expiry_date = new Carbon($verification->expires_at);

            if ($expiry_date->isPast()) {
                return Utils::validateResp(['token' => 'This verification code has expired. Please request new one']);
            }

            // Verification is correct, activate account
            $user = User::whereEmail($verification->email)->first();

            // Update user status
            $user->status = 'active';
            $user->email_verified_at = now();
            $user->save();

            // Delete verification
            $verification->delete();

            // Send welcome to user
            $user->notify((new Welcome)->locale(config('app.locale')));

            return Utils::successResp([], 'Your account has been successfully activated.');
        } catch (\Throwable $th) {
            return Utils::errorResp();
        }
    }
}
