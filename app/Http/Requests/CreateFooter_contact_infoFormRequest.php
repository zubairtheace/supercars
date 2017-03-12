<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateFooter_contact_infoFormRequest extends FormRequest
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
            'phone_number' => 'required|numeric|digits:8',
            'email' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'phone_number.required' => 'Please provide a Phone Number',
            'email.required' => 'Please provide an Email Address',
            'phone_number.digits' => 'Mobile Phone Number should be 8 digits',
            'phone_number.numeric' => 'Phone Number is a number'
        ];
    }
}
