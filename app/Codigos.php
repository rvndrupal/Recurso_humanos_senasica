<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Codigos extends Model
{
    protected $fillable = ['codigo','colonias_id'];


    public function colonia()
    {
        return $this->belongsTo('App\Colonias');
    }
}
