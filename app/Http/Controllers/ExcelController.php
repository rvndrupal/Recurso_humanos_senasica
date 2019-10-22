<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\Usuarios;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsuariosExport;
use Maatwebsite\Excel\Concerns\WithMapping;

class ExcelController extends Controller
{


    // function exportarExcel2()
    // {
    //     return Excel::download(new UsuariosExport, 'usuarios.xlsx');
    // }

    public function exportarExcel2() {
        return Excel::download( new UsuariosExport(), 'usuarios.xlsx') ;
    }




    //Exportar excel dos
    // public function exportarExcel2()
    // {
    //     Excel::create('Usuarios', function ($excel){

    //         $excel->sheet('Datos', function($sheet){
    //         //header
    //         $sheet->row(1,['User_id','Nombre','Ap','Am']);

    //         //body
    //         $usuarios=Usuarios::all();
    //         $row=[];

    //         $row[0]=$usuarios->id;
    //         $row[1]=$usuarios->nom;
    //         $row[2]=$usuarios->ap;
    //         $row[3]=$usuarios->am;


    //         $sheet->appendRow($row);
    //         });
    //     })->export('xls');

    // }
}
