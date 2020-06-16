<?php

namespace App\Http\Requests\Phone;

use Illuminate\Foundation\Http\FormRequest;

class PhoneStoreRequest extends FormRequest
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
            'nis' =>  'min:10|max:13',
            'name' => 'min:2',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg',
            'class' => 'required',
            'school' => 'required'
        ];
    }
}
