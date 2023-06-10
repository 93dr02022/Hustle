<?php

namespace App\Http\Validators\Main\Seller\Quote;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EditQuoteValidator
{

    /**
     * Validation rules
     */
    public static $rules = [
        'first_name' => ['required', 'string', 'min:3', 'max:255'],
        'last_name' => ['required', 'string', 'min:3', 'max:255'],
        'email' => ['required', 'email', 'max:50'],
        'phone_number' => ['required', 'numeric', 'max_digits:11'],
        'payment_method' => ['required', 'in:paystack,cash'],
        'note' => ['required', 'string', 'max:1000'],
        'expires_at' => ['required', 'date'],
        'items.*.description' => ['required', 'string', 'min:3', 'max:255'],
        'items.*.quantity' => ['required', 'numeric', 'min:1', 'max:10000'],
        'items.*.price' => ['required', 'numeric', 'min:100'],
        'items.*.discount' => ['required', 'numeric', 'min:0']
    ];


    public static function validate($payload)
    {
        return Validator::make($payload, self::$rules);
    }
}
