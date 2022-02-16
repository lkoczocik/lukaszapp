<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LukaszFormRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first-name' => 'required',
            'last-name' => 'required',
            'email' => 'required|email',
            'telephone' => 'required|regex:/^[0][0-9]{4,}/|min:0|max:11',
            'contact-method' => 'required'
        ];
    }

    /**
     * Custom validation messages
     *
     * @return array
     */
    public function messages()
    {
        return [
            'first-name.required' => 'Enter your first name',
            'last-name.required' => 'Enter your last name',
            'email.required' => 'Enter your email address',
            'email.email' => 'Enter an email address in the correct format, like name@example.com',
            'telephone.required' => 'Enter your telephone number',
            'telephone.regex' => 'Enter a telephone number in the correct format',
            'telephone.max' => 'Enter a UK telephone number',
            'contact-method.required' => 'Select your preferred contact method'
        ];
    }
}
