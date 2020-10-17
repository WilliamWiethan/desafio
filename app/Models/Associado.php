<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Associado extends Model
{
    protected $fillable = [
        'nome',
        'cpf'
    ];

    public function contas()
    {
        return $this->hasMany('App\Models\Conta', 'cpf', 'cpf');
    }
}
