<?php

namespace App\Http\Validators\Main\Seller\Quote;

use Illuminate\Support\Facades\Validator;

class SettingsValidator
{
   /**
    * Validate form
    *
    * @param object $request
    */
   static function validate($request)
   {
      try {
         $rules = [
            'logo' => ['nullable', 'image', 'mimes:jpg,png,jpeg', "max:5120"],
            'business_name' => ['required', 'string', 'min:3', 'max:150'],
            'email' => ['required', 'email', 'max:50'],
            'contact' => ['required', 'numeric', 'max_digits:11'],
            'address' => ['nullable', 'string', 'max:1000'],
         ];

         $data = [
            'logo' => $request->logo,
            'business_name' => $request->business_name,
            'contact' => $request->contact,
            'email' => $request->email,
            'address' => $request->address,
         ];

         // Validate data
         $validator = Validator::make($data, $rules);

         $validator->validate();

         // Reset validation
         $request->resetValidation();

         return $validator;
      } catch (\Throwable $th) {
         throw $th;
      }
   }
}
