<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Auth\RegisterRequest;
use App\Models\EmailVerification;
use App\Models\User;
use App\Notifications\User\Everyone\VerifyEmailMobile;
use App\Notifications\User\Everyone\Welcome;
use App\Support\Utils;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Creates new user account
     * 
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(RegisterRequest $request)
    {
        try {
            $user = User::create($request->createUserAttributes());

            $token = mt_rand(111111, 999999);

            $verification = EmailVerification::create([
                'token' => $token,
                'email' => $user->email,
                'expires_at' => now()->addMinutes(60),
            ]);

            // Send notification to user
            $user->notify((new VerifyEmailMobile($verification))->locale(config('app.locale')));

            return Utils::successResp([
                'token' => $user->createToken('authToken')->plainTextToken,
                'user' => $user->refresh(),
            ]);
        } catch (\Throwable $th) {
            return Utils::errorResp();
        }
    }
}
