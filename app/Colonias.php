<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colonias extends Model
{
    protected $fillable = ['colonia','estados_id'];


    public function estado()
    {
        return $this->belongsTo('App\Estados');
    }

    public function codigos()
    {
        return $this->hasMany('App\Codigos');
    }

    public function usuario()
    {
        return $this->belongsToMany('App\Usuarios');
    }
}
