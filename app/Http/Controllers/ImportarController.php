<?php

namespace App\Http\Controllers;
use App\Pais;
use App\Estados;
use App\Colonias;
use App\Codigos;

use Illuminate\Http\Request;

class ImportarController extends Controller
{
    public function importar()
    {
        $path=public_path('Base/datos_completa.csv');
        $lineas=file($path); //crear las lineas del arreglo
        $utf8=array_map('utf8_encode',$lineas); //lo pasamos a utf8
        $datos= array_map('str_getcsv', $utf8); //con esto se regresa todo en lineas separadas

        //dd($datos);

        //lógica
        for($i=1; $i<sizeof($datos); $i++)
        {
            $codigos=new Codigos();
            $codigos->codigo=$datos[$i][3]; //le pasamos su valor dem arreglo
            $codigos->municipio_id=getColoniaId($array[$i][0], $array[$i][1], $array[$i][2]);  //el id de la relacion importante
            //esta funcion espera el nombre de la region y el del municipio

            $codigos->save();


        }
    }

    public function getMunicipioId($paisName, $estadoName, $coloniaName)
    {

        $colonia=Colonias::where('colonia', $coloniaName)->first();

        if($colonia)//si se encuentra
        {
            return $colonia->id;
        }

        $colonia=new Colonias();
        $colonia->colonia=$coloniaName;

        $estado=Estados::firstOrCreate([
            'nombre_estado' => $estadoName
        ]);


        $estado->estados_id= $region->id ;

        $estado->save();

        return $municipio->id;




    }
}
