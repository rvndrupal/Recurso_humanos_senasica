<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    // protected $fillable = ['nom','ap','am','foto','rfc','curp','calle','numero','correo_inst','correo_per',
    //     'tel_casa','tel_cel','condicion','pais_id','colonia'

    // ];

    protected $fillable = ['nom','ap','am','curp','rfc','condicion','foto','fecha_nacimiento','pais_id','calle','numero','estados_id',
    'colonias_id','codigos_id'

    ];

    public function pais()
    {
        return $this->belongsTo('App\Pais');
    }

    public function estados()
    {
        return $this->belongsTo('App\Estados');
    }

    public function colonias()
    {
        return $this->belongsTo('App\Colonias');
    }

    public function codigos()
    {
        return $this->belongsTo('App\Codigos');
    }


}
