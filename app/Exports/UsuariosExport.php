<?php

namespace App\Exports;

use App\Usuarios;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;


use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromQuery;


// class UsuariosExport implements FromCollection,WithHeadings
// {

    //  /**
    // * @return \Illuminate\Support\Collection
    // */
    // // public function headings(): array
    // // {
    // //     return [
    // //         'Id',
    // //         'Nombre',
    // //         'Ap',
    // //         'Am',
    // //         'Fecha de Nacimiento',
    // //         'Fecha de Domicilio',

    // //     ];
    // // }
    // // /**
    // // * @return \Illuminate\Support\Collection
    // // */
    // // public function collection()
    // // {

    // //     $usuarios=Usuarios::with('solteros')->select('id','nom','ap','am','fecha_nacimiento','fecha_domicilio')->get();
    // //     return $usuarios;
    // // }


// }


class UsuariosExport implements FromCollection, WithMapping, WithHeadings
{
    // public function view(): View
    // {
    //     $usuarios=Usuarios::all();



    //     return view('usuarios.excel', [
    //         'usuarios' => $usuarios
    //     ]);
    // }

    public function collection()
    {
        //returns Data with User data, all user data, not restricted to start/end dates
    //    return Usuarios::with('conyuges')->get();
        return Usuarios::all();
    }



    public function map($usuarios) : array {

        $coyArray=[];
        $salidaCoy=[];
        $apCoy=[];
        $salidaAp=[];
        $conyuge=[];
        $conyugeS=[];

        foreach($usuarios->solteros as $coy)
        {
            $nomCom="Nombre: ".$coy->nombre_hijo."  Curp: ".$coy->curp_hijo." | ";
            array_push($coyArray,$nomCom);
        }

        $salidaNC=implode(" ",$coyArray);

       

        //conyuges
        foreach ($usuarios->conyuges as $conyu) {    

            //dump($conyu);

             if(is_null($conyu)){
                   
                     $conyugeS=['estado' => 'Soltero(a)'];
                }
                else
                {
                     $ifc="Nombre: ".$conyu->nombres_coy." Ap: ".$conyu->primero_coy." Am: ".$conyu->segundo_coy." Curp: ".$conyu->curp_coy;
                    array_push($conyuge,$ifc);
                    $conyugeS=implode(" ",$conyuge);
                   
                }
        }


        return [
            $usuarios->id,
            $usuarios->nom,
            $usuarios->ap,
            $usuarios->am,
            $usuarios->paises->nombre_pais,
            $usuarios->rfc,
            $usuarios->curp,
            $usuarios->correo_per,
            $usuarios->correo_ins,
            $usuarios->tel_casa,
            $usuarios->tel_movil,
            $usuarios->fecha_nacimiento,
            $usuarios->estados->nombre,
            $usuarios->municipios->nombre_mun,
            $usuarios->colonias->nombre_col,
            $usuarios->colonias->codigo_postal,
            $usuarios->fecha_domicilio,
            $usuarios->estadoCivil->nombre,
            $conyugeS,

            $salidaNC

        ];
    }

    public function headings(): array
    {
        return [
            'ID',
            'Nombre',
            'Ap',
            'Am',
            'Pais',
            'Rfc',
            'Curp',
            'Correo Personal',
            'Correo Institucional',
            'Teléfono Casa',
            'Teléfono Movil',
            'Fecha de Nacimiento',
            'Estado',
            'Municipio',
            'Colonia',
            'Código Postal',
            'Fecha Domicilio',
            'Estado Civil',
            'Información Conyuge',
            'Información Hijos',

        ];
    }
}
