<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleLaborales extends Model
{
    protected $fillable= ['puesto_actual','codigos_id','niveles_id','usuarios_id','direcciones_generales_id','direcciones_areas_id',
'fecha_ultimo','fecha_senasica','calle_lab','num_lab','col_lab','fecha_gobierno','mun_lab',
'est_lab','cod_lab'];

    public function usuario()
    {
        return $this->belongsTo('App\Usuarios');
    }

    public function codigos()
    {
        return $this->belongsTo('App\Codigos','codigos_id');
    }

    public function niveles()
    {
        return $this->belongsTo('App\Niveles','niveles_id');
    }

    public function direccionesg()
    {
        return $this->belongsTo('App\DireccionesGenerales','direcciones_generales_id');
    }

    public function direccionesa()
    {
        return $this->belongsTo('App\DireccionesAreas','direcciones_areas_id');
    }



}
