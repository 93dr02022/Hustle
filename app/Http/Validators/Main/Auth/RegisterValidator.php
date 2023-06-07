<?php

namespace App\Http\Validators\Main\Auth;

use App\Rules\UsernameRule;
use Illuminate\Support\Facades\Validator;

class RegisterValidator
{

    /**
     * Validate form
     *
     * @param object $request
     * @return void
     */
    static function validate($request)
    {
        try {

            // Set rules
            $rules = [
                'username' => ['required', 'max:60', 'min:3', 'unique:users', new UsernameRule()],
                'email'    => 'required|max:60|email|unique:users',
                'password' => 'required|max:60',
                'firstname' => 'required|max:60|min:3',
                'lastname' => 'required|max:60|min:3'
            ];

            // Set errors messages
            $messages = [
                'username.required' => __('messages.t_validator_required'),
                'username.max'      => __('messages.t_validator_max', ['max' => 60]),
                'username.min'      => __('messages.t_validator_min', ['min' => 3]),
                'username.unique'   => __('messages.t_validator_unique'),
                'email.required'    => __('messages.t_validator_required'),
                'email.max'         => __('messages.t_validator_max', ['max' => 60]),
                'email.email'       => __('messages.t_validator_email'),
                'email.unique'      => __('messages.t_validator_unique'),
                'password.required' => __('messages.t_validator_required'),
                'password.max'      => __('messages.t_validator_max', ['max' => 60]),
                'firstname.required' => __('messages.t_validator_required'),
                'firstname.max'      => __('messages.t_validator_max', ['max' => 60]),
                'firstname.min'      => __('messages.t_validator_min', ['min' => 3]),
                'firstname.regex'    => __('messages.t_validator_regex'),
                'lastname.required' => __('messages.t_validator_required'),
                'lastname.max'      => __('messages.t_validator_max', ['max' => 60]),
                'lastname.min'      => __('messages.t_validator_min', ['min' => 3]),
                'lastname.regex'    => __('messages.t_validator_regex'),
            ];

            // Set data to validate
            $data = [
                'email' => $request->email,
                'username' => $request->username,
                'password' => $request->password,
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
            ];

            // Validate data
            Validator::make($data, $rules, $messages)->validate();

            // Reset validation
            $request->resetValidation();
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
