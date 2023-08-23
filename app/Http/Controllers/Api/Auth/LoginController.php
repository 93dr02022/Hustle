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

    /**
     * we are using the logout here due to 
     * mobile app not being able to intercept the logout url
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function webLogout(Request $request)
    {
        auth()->logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }
}
