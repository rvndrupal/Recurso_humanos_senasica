<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    protected $fillable = ['nom','ap','am','foto','rfc','curp','calle','numero','correo_inst','correo_per',
        'tel_casa','tel_cel','condicion','pais_id'

    ];

    public function pais()
    {
        return $this->hasOne('App\Pais');
    }

}
