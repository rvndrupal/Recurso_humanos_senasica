<?php

namespace App\Exports;

use App\Usuarios;
use App\Estados;
use App\Municipios;
use App\Colonias;
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
        $depen=[];
        $depenS=[];
        $salidaNC=[];

        $escuela=[];
        $escuelaS=[];
        $idioma=[];
        $idiomaS=[];
        $laborales=[];
        $laboralesS=[];
        $busES=[];

        foreach($usuarios->solteros as $coy)
        {
            if(is_null($coy))
            {
                $salidaNC=['Nombre' => '', 'Curp: ' => ''];
            }else{

            $nomCom="Nombre: ".$coy->nombre_hijo."  Curp: ".$coy->curp_hijo." | ";
            array_push($coyArray,$nomCom);
             $salidaNC=implode(" ",$coyArray);
            }
        }





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




        foreach ($usuarios->Descensientes as $dep) {
            if(is_null($dep)){

                     $depenS=['estado' => 'sin'];
                }
                else
                {
                     $vdep="Nombre: ".$dep->nombre_des." Ap: ".$dep->ap_des." Am: ".$dep->am_des;
                    array_push($depen,$vdep);
                    $depenS=implode(" ",$depen);
                }
        }

        //escolaridad
        foreach ($usuarios->DetalleEscolaridades as $esc) {

            if(isset($esc->cedula)){$cedula=$esc->cedula;}else{$cedula="Sin Cédula";}

            $vesc="|| Escolaridad-> Grado: ".$esc->grados->nom_gra." | Carrera: ".$esc->carreras->nom_car." | Cedula: ".$cedula." | Escuela: ".$esc->escuelas->nombre_escuela.
            "| Títulos: ". $esc->titulos->nombre_titulo;

            array_push($escuela,$vesc);
            $escuelaS=implode(" ",$escuela);
        }

        //Idiomas.
        foreach ($usuarios->DetalleIdiomas as $idi) {

            $idiv="|| Idioma: ".$idi->idiomas->nombre_idioma."| Nivel: ".$idi->nivel_ingles;
            array_push($idioma,$idiv);
            $idiomaS=implode(" ",$idioma);
        }

        //Laborales.
        //
        //dd()

        foreach ($usuarios->DetalleLaborales as $labo)
        {
        $numE=$labo->est_lab;
        $busE=Estados::where('id','=',$numE)->select('nombre')->get();

        $numM=$labo->mun_lab;
        $busM=Municipios::where('id',$numM)->select('nombre_mun')->get();

        $colM=$labo->col_lab;
        $colM=Colonias::where('id',$colM)->select('nombre_col','codigo_postal')->get();




        $labv=" || Puesto: ".$labo->puesto_actual."| Código: ".$labo->codigos->nom_codigos."| Nivel: ".$labo->niveles->nom_niveles."| Dirección General: ".
        $labo->direccionesg->nombre_dir_gen."| Dirección Area: ".$labo->direccionesa->nombre_dir_are.
        "| Fecha ultimo: ".$labo->fecha_ultimo."| Fecha Senasica: ".$labo->fecha_senasica."| Calle: ".$labo->calle_lab."| Num: ".$labo->num_lab.
        "| Estado: ".$busE[0]->nombre."| Municipio: ".$busM[0]->nombre_mun."| Colonia: ".$colM[0]->nombre_col."| CP: ".$colM[0]->codigo_postal;

        array_push($laborales,$labv);
        $laboralesS=implode(" ",$laborales);
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
            $salidaNC,
            $depenS,
            $escuelaS,
            $idiomaS,
            $laboralesS


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
            'Información Dependientes',
            "Escuela",
            "Idiomas",
            "Laborales"

        ];
    }
}
