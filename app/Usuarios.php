<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    // protected $fillable = ['nom','ap','am','foto','rfc','curp','calle','numero','correo_inst','correo_per',
    //     'tel_casa','tel_cel','condicion','pais_id','colonia'

    // ];

    protected $fillable = ['nom','ap','am','curp','rfc','condicion','foto','fecha_nacimiento','paises_id','calle','numero','estados_id',
    'colonias_id','municipios_id','fecha_domicilio','carga_rfc','carga_curp','carga_ife',
    'correo_per','correo_ins','tel_casa','tel_movil','carga_domicilio','estado_civils_id'

    ];

    public function paises()
    {
        return $this->belongsTo('App\Paises');
    }

    public function estados()
    {
        return $this->belongsTo('App\Estados');
    }

    public function colonias()
    {
        return $this->belongsTo('App\Colonias');
    }

    public function municipios()
    {
        return $this->belongsTo('App\Municipios');
    }

    public function estadoCivil()
    {
        return $this->belongsTo('App\EstadoCivil','estado_civils_id'); //el nombre del id de la tabla
    }

    public function solteros()
    {
        return $this->hasMany('App\Solteros');
    }

    public function conyuges()
    {
        return $this->hasMany('App\Conyuges');
    }

    public function HijosConyuges()
    {
        return $this->hasMany('App\HijosConyuge');
    }

    public function Descensientes()
    {
        return $this->hasMany('App\Descensientes');
    }

    public function DetalleEscolaridades()
    {
        return $this->hasMany('App\DetalleEscolaridades');
    }

    public function DetalleIdiomas()
    {
        return $this->hasMany('App\DetalleIdiomas');
    }


}
