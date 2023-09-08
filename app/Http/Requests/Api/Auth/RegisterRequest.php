<?php

namespace App\Http\Requests\Api\Auth;

use App\Rules\UsernameRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'username' => ['required', 'max:60', 'min:3', 'unique:users', new UsernameRule()],
            'email' => ['required', 'max:60', 'unique:users,email'],
            'password' => ['required', 'max:60'],
            'first_name' => ['required', 'max:60', 'min:3'],
            'last_name' => ['required', 'max:60', 'min:3'],
        ];
    }

    /**
     * Create user attributes
     */
    public function createUserAttributes()
    {
        return collect($this->safe()->except('password'))
            ->merge([
                'uid' => uid(),
                'level_id' => 1,
                'status' => 'active',
                'referral_code' => bin2hex(random_bytes(6)),
                'password' => Hash::make($this->input('password')),
            ])
            ->toArray();
    }
}
