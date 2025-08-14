<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreAddressRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            "title" => [
                "required",
                "string",
                "max:255",
                "min:3",
            ],
            "address" => [
                "required",
                "string",
                "max:1000",
                "min:3",
            ],
            "province" => [
                "required",
                "string",
                "max:255",
                "min:3",
            ],
            "city" => [
                "required",
                "string",
                "max:255",
                "min:3",
            ],
            "postal_code" => [
                "required",
                "string",
                "ir_postal_code",
            ]
        ];
    }
}
