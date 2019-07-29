<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conyuges extends Model
{
    protected $fillable = ['nombres_coy','primero_coy','segundo_coy','curp_coy','carga_curp_coy'];

    public function usuario()
    {
        return $this->belongsTo('App\Usuarios');
    }
}
