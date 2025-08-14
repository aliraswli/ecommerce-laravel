<?php

namespace App\Http\Requests\Auth;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class RegisterRequestPost extends FormRequest
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
                'regex:/^[\p{Arabic}\s]+$/u',
            ],
            'email' => [
                'required',
                'email',
                'max:255',
                'unique:App\Models\User,email',
                'regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/',
            ],
            'phone' => [
                'required',
                'numeric',
                'ir_mobile',
                'persian_not_accept',
                'unique:App\Models\User,phone',
            ],
            'username' => [
                'required',
                'string',
                'max:50',
                'unique:App\Models\User,username',
                'alpha_dash',
            ],
            'password' => [
                'required',
                'string',
                'min:8',
                'confirmed',
                'persian_not_accept',
            ],
        ];
    }
}
