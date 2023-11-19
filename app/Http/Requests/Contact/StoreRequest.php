<?php

namespace App\Http\Requests\Contact;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class StoreRequest extends FormRequest
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
            'user_id' => 'required|integer',
            'email' => 'required|email',
            'name' => 'required|string',
            'age' => 'required|integer',
            'sex' => 'required|string|in:male,female,other',
            'birthday' => 'required|date',
            'phone' => 'required|numeric|digits:11',
        ];
    }

    public function messages()
    {
        return [
            'user_id.required' => 'The "user_id" field is required.',
            'user_id.integer' => 'The "user_id" field must be an integer.',

            'email.required' => 'The "email" field is required.',
            'email.email' => 'The "email" field must contain a valid email address.',

            'name.required' => 'The "name" field is required.',
            'name.string' => 'The "name" field must be a string.',

            'age.required' => 'The "age" field is required.',
            'age.integer' => 'The "age" field must be an integer.',

            'sex.required' => 'The "sex" field is required.',
            'sex.string' => 'The "sex" field must be a string.',
            'sex.in' => 'The "sex" field must be one of the following values: male, female, other.',

            'birthday.required' => 'The "birthday" field is required.',
            'birthday.date' => 'The "birthday" field must contain a valid date.',

            'phone.required' => 'The "phone" field is required.',
            'phone.numeric' => 'The "phone" field must contain only digits.',
            'phone.digits' => 'The "phone" field must be 11 digits long.',
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
