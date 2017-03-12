<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateFooter_opening_hourFormRequest extends FormRequest
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
            'week_day' => 'required',
            'week_time' => 'required',
            'week_end_day' => 'required',
            'week_end_time' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'week_day.required' => 'Please provide Week Days',
            'week_time.required' => 'Please provide Opening Hours for Week Days',
            'week_end_day.required' => 'Please provide Week End Days',
            'week_end_time.required' => 'Please provide Opening Hours for Week End Days',
        ];
    }
}
