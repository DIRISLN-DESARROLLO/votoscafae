<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Voto extends Model
{
    protected $fillable = ['user_id', 'lista_id','hash_votacion'];

    public function lista()
    {
        return $this->belongsTo(Lista::class);
    }
}
