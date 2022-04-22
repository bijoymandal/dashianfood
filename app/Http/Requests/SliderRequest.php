<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderRequest extends FormRequest
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
            'heading'=>'required|string',
            'description'=>'required|string',
            'status'=>'in:0,1',
        ];
    }
    public function messages()
    {
        return [
            'heading.required'=>'heading must be required',
            'heading.string'=>'heading must be string',
            'description.required'=>'please filed description',
            'description.string'=>'description must be string',
            'status.in'=>'at selected one status'
        ];
    }
}