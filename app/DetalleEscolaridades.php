<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleEscolaridades extends Model
{
    protected $fillable= ['usuarios_id','grados_id','carreras_id','cedula','escuelas_id','titulos_id','carga_titulo','carga_cedula','idiomas_id',
    'nivel_ingles','carga_certificado'];

    public function usuario()
    {
        return $this->belongsTo('App\Usuarios');
    }

    public function carreras()
    {
        return $this->belongsTo('App\Carreras','carreras_id');
    }

    public function grados(){
        return $this->belongsTo('App\Grados','grados_id');
    }

     public function escuelas(){
        return $this->belongsTo('App\Escuelas','escuelas_id');
    }


}
