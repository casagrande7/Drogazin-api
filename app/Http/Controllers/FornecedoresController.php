<?php

namespace App\Http\Controllers;

use App\Http\Requests\FornecedoresFormRequest;
use App\Models\Fornecedores;
use App\Models\FornecedoresModel;
use Illuminate\Http\Request;

class FornecedoresController extends Controller
{
    public function store(FornecedoresFormRequest $request){
        $fornecedores = Fornecedores::create([
            'Nome' => $request ->Nome,
            'CPF' => $request ->CPF,
            'Email' => $request ->Email,
            'Contato' => $request ->Contato,
            'CEP' => $request ->CEP,
            'Inscricao_Municipal' => $request ->Inscricao_Municipal,
            'Pais' => $request ->Pais,
            'CNPJ' => $request ->CNPJ,
            'Bairro' => $request ->Bairro,
            'Codigo' => $request ->Codigo,
            'Cidade' => $request ->Cidade,
            'Web_Site' => $request ->Web_Site

        ]); 
        return response()->json([
            "success" => true, 
            "message" => "Fornecedores cadastrado com sucesso",
            "data" => $fornecedores
        ], 200);
    }
}
