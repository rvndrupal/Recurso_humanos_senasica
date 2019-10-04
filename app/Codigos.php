<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Codigos extends Model
{
    protected $fillable = ['nom_codigos'];

    public function usuario()
    {
        return $this->belongsToMany('App\Usuarios');
    }

}
