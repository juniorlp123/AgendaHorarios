<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersRequest extends FormRequest
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
            'nome' => 'required',
            'email' => 'required|email',
            'senha' => 'required',
        ];
    }

    public function messages(){
        return [
            'nome.required' => 'Informe o nome',
            'email.required' => 'Informe o e-mail',
            'email.email' => 'Informe um e-mail válido',
            'senha.required' => 'Informe uma senha'
        ];
    }
}
