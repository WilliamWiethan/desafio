<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContaRequest extends FormRequest
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
            'conta' => 'required|integer',
            'tipo' => 'required',
            'agencia' => 'required|integer',
            'cpf' => array(
                'required',
                'regex:/([0-9]{3}\.?[0-9]{3}\.?[0-9]{3}\-?[0-9]{2})/'
            )
        ];
    }

    public function messages()
    {
        return [
            'conta.required' => 'Campo conta é obrigatório!',
            'conta.integer' => 'Conta deve ser um valor numérico!',
            'conta.tipo' => 'Campo tipo é obrigatório!',
            'agencia.required' => 'Campo agência é obrigatório!',
            'agencia.integer' => 'Agência deve ser um valor numérico!',
            'cpf.required' => 'Campo cpf é obrigatório!',
            'cpf.regex' => 'Campo cpf deve ser no formato: 000.000.000-00'
        ];
    }
}
