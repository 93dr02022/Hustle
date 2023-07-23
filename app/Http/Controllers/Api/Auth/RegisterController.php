<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Auth\RegisterRequest;
use App\Models\User;
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

            $user->notify(new Welcome);

            return Utils::successResp([
                'token' => $user->createToken('authToken')->plainTextToken,
                'user' => $user->refresh(),
            ]);
        } catch (\Throwable $th) {
            return Utils::errorResp();
        }
    }
}
