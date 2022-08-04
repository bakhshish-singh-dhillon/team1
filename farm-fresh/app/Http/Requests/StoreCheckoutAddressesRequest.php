<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreCheckoutAddressesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if (Auth::check()) {
            return true;
        }
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "billing_address_name" => "required",
            "billing_address" => "required",
            "billing_city" => "required",
            "billing_province" => "required",
            "billing_country" => "required",
            "billing_postal_code" => "required|regex:/[a-zA-Z]\d[a-zA-Z][\s]\d[a-zA-Z]\d/",
            "billing_phone" => "required|integer",
            "shipping_address_name" => "required",
            "shipping_address" => "required",
            "shipping_city" => "required",
            "shipping_province" => "required",
            "shipping_country" => "required",
            "shipping_postal_code" => "required|regex:/[a-zA-Z]\d[a-zA-Z][\s]\d[a-zA-Z]\d/",
            "shipping_phone" => "required|integer",

        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function messages()
    {
        return [
            'shipping_postal_code.regex' => 'Invalid postal code! hint: A1A 1B1',
            'billing_postal_code.regex' => 'Invalid postal code! hint: A1A 1B1',
        ];
    }
}
