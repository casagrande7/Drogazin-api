<?php

namespace App\Http\Controllers;

use App\Http\Requests\FornecedoresFormRequest;
use App\Models\FornecedoresModel;
use Illuminate\Http\Request;

class FornecedoresController extends Controller
{
    public function store(FornecedoresFormRequest $request){
        $fornecedores = FornecedoresModel::create([
            'Nome' => $request ->nome,
            'CPF' => $request ->cpf,
            'E-mail' => $request ->email,
            'Contato' => $request ->contato,
            'CEP' => $request ->cep,
            'Inscrição Municipal' => $request ->im,
            'País' => $request ->pais,
            'CNPJ' => $request ->cnpj,
            'Bairro' => $request ->bairro,
            'Código' => $request ->codigo,
            'Cidade' => $request ->cidade,
            'WebSite' => $request ->ws

        ]); 
        return response()->json([
            "success" => true, 
            "message" => "Fornecedores cadastrado com sucesso",
            "data" => $fornecedores
        ], 200);
    }
}
