<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Auth\LoginRequest;
use App\Models\User;
use App\Support\Utils;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Authenticates user and returns token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(LoginRequest $request)
    {
        $user = User::whereEmail($request->email)->first();
        $request->verify($user);

        if (!in_array($user->status, ['active', 'verified'])) {
            return Utils::validateResp([
                'email' => 'Your account is inactive please contact correcthustle to resolve.'
            ]);
        }

        return Utils::successResp([
            'token' => $user->createToken('authToken')->plainTextToken,
            'user' => $user,
        ]);
    }

    /**
     * log user out
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();
        return Utils::successResp([], 'Successfully logged out');
    }
}
