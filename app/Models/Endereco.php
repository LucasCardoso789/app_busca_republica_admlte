<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $fillable = ['rua', 'numero', 'bairro', 'cidade', 'estado', 'cep', 'complemento', 'republica_id'];

    public function republica() {
        return $this->belongsTo('App\Models\Republica');
    }
}
