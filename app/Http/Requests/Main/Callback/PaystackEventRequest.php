<?php

namespace App\Http\Requests\Main\Callback;

use Illuminate\Foundation\Http\FormRequest;

class PaystackEventRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $signature = request()->header('x-paystack-signature');

        $hash = hash_hmac('sha512', request()->getContent(), config('paystack.secretKey'));

        return $hash === $signature;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
        ];
    }
}
