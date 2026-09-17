<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estoque extends Model
{
    protected $table = 'estoque';

    protected $fillable = [

        'codigo_produto',
        'nome_produto',
        'categoria',
        'marca',
        'unidade',
        'quantidade',
        'estoque_minimo',
        'data_validade',
        'fornecedor',
        'observacao',

    ];
}