<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedores extends Model
{
    use HasFactory;
    protected $fillable =[
        'Nome',
        'CPF',
        'Email',
        'Contato',
        'CEP',
        'Inscricao_Municipal',
        'Pais',
        'CNPJ',
        'Bairro',
        'Codigo',
        'Cidade',
        'Web_Site'
    ];
}
