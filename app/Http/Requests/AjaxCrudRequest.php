<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AjaxCrudRequest extends FormRequest
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
            'name' => 'required|max:255',
            'mobile' => 'numeric|max:10',
            'address' => 'required',
            'gender' => 'required',
            'type' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|image',
            'customer_status' => 'required',
        ];
    }
}
