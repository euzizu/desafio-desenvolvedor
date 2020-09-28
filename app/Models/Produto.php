<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    public $table = 'produto';
    protected $fillable = ['nome', 'descricao', 'codigo', 'quantidade', 'preco', 'ativo'];
}


