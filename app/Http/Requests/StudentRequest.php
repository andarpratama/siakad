<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
            'nim' => 'required',
            'name' => 'required',
            'image' => 'required|max:255',
            'majors_id' => 'required',
            'gender' => 'required',
            'email' => 'required',
            'address' => 'required',
            'handphone' => 'required',
            'religion' => 'required',
            'placeofbirth' => 'required',
            'dateofbirth' => 'required|date'
        ];
    }
}
