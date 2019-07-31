<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleEscolaridades extends Model
{
    protected $fillable= ['usuarios_id','grados_id','carreras_id','cedula','escuelas_id','titulos_id'];

    public function usuario()
    {
        return $this->belongsTo('App\Usuarios');
    }


}
