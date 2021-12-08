<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Republica extends Model
{
    protected $fillable = ['nome', 'quant_quartos', 'preco', 'descricao', 'regras', 'contato'];
}
