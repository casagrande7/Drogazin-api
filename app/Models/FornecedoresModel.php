<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FornecedoresModel extends Model
{
    use HasFactory;
    protected $fillable =[
        'Nome',
        'CPF',
        'E-mail',
        'Contato',
        'CEP',
        'Inscricao Municipal',
        'País',
        'CNPJ',
        'Bairro',
        'Código',
        'Cidade',
        'WebSite'
    ];
}
