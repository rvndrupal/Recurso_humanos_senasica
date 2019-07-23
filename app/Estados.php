<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estados extends Model
{

    protected $fillable = ['nombre_estado','pais_id'];

    public function pais()
    {
        return $this->belongsTo('App\Pais');
    }

    public function colonias()
    {
        return $this->hasMany('App\Colonias');
    }
}
