<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AssociadoRequest extends FormRequest
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
            'nome' => 'required|max:60',
            'cpf' => array(
                'required',
                'regex:/([0-9]{3}\.?[0-9]{3}\.?[0-9]{3}\-?[0-9]{2})/'
            )
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'Campo nome é obrigatório!',
            'cpf.required' => 'Campo cpf é obrigatório!',
            'cpf.regex' => 'Campo cpf deve ser no formato: 000.000.000-00'
        ];
    }
}
