<?php

namespace App\Http\Requests\Api;

use App\Enums\Gender;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

class StoreEmployeeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'firstName' => ['required', 'string', 'min:2'],
            'lastName' => ['required', 'string', 'min:2'],
            'middleName' => ['string'],
            'gender' => ['required', 'string', new Enum(Gender::class)],
            'dateOfBirth' => ['required', 'date', 'date_format:Y-m-d', 'before_or_equal:2006-12-31'],
//            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
//            'phoneNumber' => ['required', 'regex:/^09\d{9}$/'],
//            'password' => ['required'],
        ];
    }

    public function messages(): array
    {
        return [
            'date_of_birth.before_or_equal' => 'Employee must be above 18 years old',
        ];
    }
}
