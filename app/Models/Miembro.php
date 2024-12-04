<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Miembro extends Model
{
    protected $fillable = ['nombre', 'lista_id', 'posicion', 'tipo'];
}
