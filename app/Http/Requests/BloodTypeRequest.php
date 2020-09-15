<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BloodTypeRequest extends FormRequest
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
            'name'=>'required|in:A+,AB,O,AB+'
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'اسم الحقل مطلوب',
            'name.in'=>' اسم الحقل يجب ان يكون A+ او B+ او AB و',
        ];
    }
}
