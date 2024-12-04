<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lista extends Model
{
    protected $fillable = ['nombre'];

    public function miembros()
    {
        return $this->hasMany(Miembro::class);
    }

}
