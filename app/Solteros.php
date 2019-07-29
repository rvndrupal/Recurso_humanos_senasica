<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solteros extends Model
{
    protected $fillable = ['nombre','edad'];

    public function usuario()
    {
        return $this->belongsTo('App\Usuarios');
    }
}
