<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereço extends Model
{
    protected $fillable = ['rua', 'numero', 'bairro', 'cidade', 'estado', 'cep', 'complemento'];
}
