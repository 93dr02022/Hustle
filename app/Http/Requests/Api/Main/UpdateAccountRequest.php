<?php

namespace App\Http\Requests\Api\Main;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAccountRequest extends FormRequest
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
            'first_name' => ['required', 'string', 'max:50'],
            'last_name' => ['required', 'string', 'max:50'],
            'state_id' => ['required', 'numeric', 'exists:states,id'],
            'country_id' => ['required', 'numeric', 'exists:countries,id'],
            'city' => ['required', 'string'],
            'local_government_zone' => ['required', 'string'],
            'post_code' => ['nullable', 'string'],
            'address' => ['nullable', 'string'],
        ];
    }
}
