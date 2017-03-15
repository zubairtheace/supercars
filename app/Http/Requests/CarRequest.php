<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarRequest extends FormRequest
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
            'make_id' => 'required',
            'model' => 'required|max:20',
            'color_id' => 'required',
            'type' => 'required',
            'year' => 'required',
            'engine_capacity' => 'required',
            'transmission' => 'required',
            'mileage' => 'required',
            'price' => 'required',
            'picture' => 'required'
        ];
    }
}
