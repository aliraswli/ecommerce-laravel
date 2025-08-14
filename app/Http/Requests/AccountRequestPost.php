<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class AccountRequestPost extends FormRequest
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
            'first_name' => [
                'required',
                'string',
                'max:56',
                'persian_alpha',
            ],
            'last_name' => [
                'required',
                'string',
                'max:56',
                'persian_alpha',
            ],
            'phone' => [
                'required',
                'numeric',
                'ir_mobile',
                'persian_not_accept',
            ],
        ];
    }
}
