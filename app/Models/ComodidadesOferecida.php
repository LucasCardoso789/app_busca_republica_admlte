<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComodidadesOferecida extends Model
{
    protected $fillable = ['name', 'ibge_code', 'state_id'];
}
