<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SubmitFormRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|min:5|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|digits:10',
            'gender' => Rule::in(['male', 'female', 'others'])
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Please enter your name.',
            'name.min' => 'Please enter at least 5 characters.',
            'name.max' => 'Please enter less than 255 characters.',
            'email.required' => 'Please enter your email.',
            'email.email' => 'Please enter email in a valid format.',
            'email.max' => 'Please enter less than 255 characters.',
            'phone.required' => 'Please enter your phone number.',
            'phone.digits' => 'Please enter a valid phone number'
        ];
    }
}
