<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if (Auth::check() && Auth::user()->is_admin) {
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
            'sku' => 'required',
            'name' => 'required',
            'price' => 'required|numeric',
            'image_upload.*' => 'required|image',
            'description' => 'required',
            'measure_unit' => 'required',
            'category_id' => 'required',
            'quantity' => 'required|numeric',
            'value.*' => 'required',
            'key.*' => 'required'
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
            'key.*.required' => 'Attribute field is required',
            'image_upload.*.required' => 'Image field is required',
            'image_upload.*.image' => 'Must be an image',
            'value.*.required' => 'Value field is required',
        ];
    }
}
