<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Conta extends Model
{
    protected $primaryKey = 'conta';

    protected $fillable = [
        'cpf',
        'conta',
        'tipo',
        'agencia'
    ];

    public function associado()
    {
        return $this->belongsTo('App\Models\Associado');
    }
}
