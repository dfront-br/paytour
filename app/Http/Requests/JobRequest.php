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
        return [
            'name.required'  => 'O campo nome é obrigatório',
            'name.min'  => 'O nome precisa ter no minimo :min caracteres',
            'email.required' => 'O email é obrigatório',
            'email.email' => 'O email precisa ser um email válido',
            'phone.required' => 'O telefone é obrigatório',
            'phone.min'  => 'O telefone precisa ter no minimo :min caracteres',
            'file.required'  => 'O arquivo é obrigatório',
            'file.mimes'  => 'O arquivo precisa ser do tipo: doc, docx ou pdf',
            'file.max'  => 'O tamanho maximo do arquivo 1MB',
            'occupation.required'  => 'O campo cargo é obrigatório',
            'educate_id.required'  => 'O campo escolaridade é obrigatório',
        ];
    }
}
