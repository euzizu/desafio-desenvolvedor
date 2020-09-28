<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public $table = 'cliente';
    protected $fillable = ['nome', 'email', 'senha', 'cpf', 'ativo'];
}
