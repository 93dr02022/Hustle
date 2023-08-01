<?php

namespace App\Http\Controllers\Api\Main;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Main\UpdateAccountRequest;
use App\Models\User;
use App\Models\UserNotificationSettings;
use App\Support\Utils;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Get the currently authenticated user
     * 
     * @return \Illuminate\Http\JsonResponse
     */
    public function authUser(Request $request)
    {
        return Utils::successResp($request->user());
    }

    /**
     * update authenticated user account
     * 
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateAccount(UpdateAccountRequest $request)
    {
        try {
            User::where('id', auth()->id())
                ->update($request->validated());

            return Utils::successResp();
        } catch (\Throwable $th) {
            return Utils::errorResp();
        }
    }

    /**
     * Update the user fcm_token field
     * 
     * @return \Illuminate\Http\JsonResponse
     */
    public function upateFcmToken(Request $request)
    {
        $request->validate(['token' => 'required']);

        try {
            UserNotificationSettings::updateOrCreate(
                ['user_id' => request()->user()->id],
                ['app_token' => $request->token]
            );

            return Utils::successResp();
        } catch (\Throwable $th) {
            return Utils::errorResp();
        }
    }
}
