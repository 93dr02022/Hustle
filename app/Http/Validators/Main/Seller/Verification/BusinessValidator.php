<?php

namespace App\Http\Validators\Main\Seller\Verification;

use Illuminate\Support\Facades\Validator;

class BusinessValidator
{

    /**
     * Validate form
     *
     * @param object $request
     */
    static function validate($payload)
    {
        $rules = [
            'business_name' => ['required', 'string', 'max:255'],
            'business_email' => ['required', 'email', 'max:60'],
            'business_phone' => ['required', 'numeric', 'digits:11'],
            'registration_file' => ['required', 'string'],
            'registration_number' => ['required', 'string']
        ];

        return Validator::make($payload, $rules);
    }
}
