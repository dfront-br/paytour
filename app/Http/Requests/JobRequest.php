<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobRequest extends FormRequest
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
            'name'  => 'required|min:3',
            'email' => 'required|email',
            'phone' => 'required|min:11',
            'file'  => 'required|mimes:doc,docx,pdf|max:1024',
            'occupation' => 'required',
            'educate_id' => 'required',
        ];
    }

    public function messages()
    {
        return [];
    }
}
