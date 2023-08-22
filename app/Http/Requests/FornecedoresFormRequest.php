<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class FornecedoresFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'Nome' => 'required|max:80|min:3',
            'CPF' => 'required|max:11|min:11|unique:fornecedores,CPF',
            'Email' =>'required|email|unique:fornecedores,Email',
            'Contato' => 'required|max:15|min:5|',
            'CEP' => 'required|max:8|min:8',
            'Inscricao_Municipal' => 'required|max:11|min:11',
            'Pais' => 'required|max:40|min:3',
            'CNPJ' => 'required|max:14|min:14|unique:fornecedores,CNPJ',
            'Bairro' => 'required|max:30|min:1',
            'Codigo' => 'required|max:12|min:12|unique:fornecedores,Codigo',
            'Cidade' => 'required|max:30|min:1',
            'Web_Site' => 'required|max:50|min:1|unique:fornecedores,Web_Site'
        ];
    }
    public function failedValidation(Validator $validator){
        throw new HttpResponseException(response()->json([
            'success' => false,
            'error' => $validator->errors()

        ]));
    }

        public function messages(){
            return [
                'Nome.required' => 'Nome é obrigatório',
                'Nome.max' => 'O campo nome deve conter no máximo 80 caracteres',
                'Nome.min' => 'O campo nome deve conter no mínimo 5 caracteres',
                'CPF.required' => 'CPF é obrigatório',
                'CPF.max' => 'O CPF deve conter no máximo 11 caracteres',
                'CPF.min' => 'O CPF deve conter no mínimo 11 caracteres',
                'CPF.unique'=> 'CPF já cadastrado no sistema',
                'Email.required' => 'Email é obrigatório',
                'Email.unique' => 'Email já cadastrado no sistema',
                'Contato.required' => 'Contato é obrigatório',
                'Contato.max' => 'O campo contato deve conter no máximo 10 caracteres',
                'Contato.min' => 'O campo contato deve conter no mínimo 5 caracteres',
                'CEP.required' => 'CEP é obrigatório',
                'CEP.max' => 'O campo CEP deve conter no máximo 8 caracteres',
                'CEP.min' => 'O campo CEP deve conter no mínimo 8 caracteres',
                'Inscricao_Municipal.required' => 'Inscrição Municipal é obrigatório',
                'Inscricao_Municipal.max' => 'O campo inscrição municipal deve conter no máximo 11 caracteres',
                'Inscricao_Municipal.min' => 'O campo isncrição municipal deve conter no mínimo 11 caracteres',
                'Pais.required' => 'País é obrigatório',
                'Pais.max' => 'O campo país deve conter no máximo 30 caracteres',
                'Pais.min' => 'O campo país deve conter no mínimo 3 caracteres',
                'CNPJ.required' => 'CNPJ é obrigatório',
                'CNPJ.max' => 'O campo CNPJ deve conter no máximo 14 caracteres',
                'CNPJ.min' => 'O campo CNPJ deve conter no mínimo 14 caracteres',
                'CNPJ.unique' => 'Email já cadastrado no sistema',
                'Bairro.required' => 'Bairro é obrigatório',
                'Bairro.max' => 'O campo Bairro deve conter no máximo 30 caracteres',
                'Bairro.min' => 'O campo Bairro deve conter no mínimo 1 caracteres',
                'Codigo.required' => 'Código é obrigatório',
                'Codigo.max' => 'O campo Código deve conter no máximo 12 caracteres',
                'Codigo.min' => 'O campo Código deve conter no mínimo 12 caracteres',
                'Codigo.unique'=>'Código já foi cadastrado no sistema',
                'Cidade.required' => 'Cidade é obrigatório',
                'Cidade.max' => 'O campo Cidade deve conter no máximo 30 caracteres',
                'Cidade.min' => 'O campo Cidade deve conter no mínimo 1 caracteres',
                'Web_Site.required' => 'WebSite é obrigatório',
                'Web_Site.max' => 'O campo WebSite deve conter no máximo 50 caracteres',
                'Web_Site.min' => 'O campo WebSite deve conter no mínimo 1 caracteres',
                'Web_Site.unique'=>'WebSite já foi cadastrado no sistema',
                

            ];
        }
}

