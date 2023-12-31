<?php

namespace App\Http\Validators\Main\Seller\Withdrawals;

use Illuminate\Support\Facades\Validator;

class SettingsValidator
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
            $rules = [
                'offline_info'  => 'nullable',
            ];

            // Set errors messages
            $messages = [
                'email.email' => __('messages.t_validator_email'),
                'email.max' => __('messages.t_validator_max', ['max' => 60]),
            ];

            // Set data to validate
            $data     = [
                'offline_info' => $request->offline_info
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
