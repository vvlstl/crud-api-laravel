<?php

namespace App\Http\Requests\User;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|string|confirmed',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'The "name" field is required.',
            'name.string' => 'The "name" field must be a string.',

            'email.required' => 'The "email" field is required.',
            'email.email' => 'The "email" field must contain a valid email address.',

            'password.required' => 'The "password" field is required.',
            'password.string' => 'The "password" field must be a string.',
            'password.confirmed' => 'The "password" confirmation does not match.',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'message' => 'Validation error',
            'errors' => $validator->errors(),
        ], 422));
    }

}
