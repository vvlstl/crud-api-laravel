<?php

namespace App\Http\Requests\Contact;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class UpdateRequest extends FormRequest
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
            'email' => 'email',
            'name' => 'string',
            'age' => 'integer',
            'sex' => 'string|in:male,female,other',
            'birthday' => 'date',
            'phone' => 'numeric|digits:11',
        ];
    }

    public function messages()
    {
        return [
            'email.email' => 'The "email" field must contain a valid email address.',

            'name.string' => 'The "name" field must be a string.',

            'age.integer' => 'The "age" field must be an integer.',

            'sex.string' => 'The "sex" field must be a string.',
            'sex.in' => 'The "sex" field must be one of the following values: male, female, other.',

            'birthday.date' => 'The "birthday" field must contain a valid date.',

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
