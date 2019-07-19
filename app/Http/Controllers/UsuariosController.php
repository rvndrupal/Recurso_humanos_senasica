<?php

namespace App\Http\Controllers;

use App\Usuarios;
use App\Pais;
use App\Estados;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Storage;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = __('Usuarios');
        return view('usuarios.index', compact('title'));
    }

    public function json () {
        if (request()->ajax()) {
            $actions = 'usuarios.datatables.index';
            return datatables()->of(Usuarios::query())->addColumn('actions', $actions)
                ->rawColumns(['actions'])
                ->toJson();
        }
    }

    //mostrar los paises
    public function estados(Request $request, $id){

        if (request()->ajax()) {

        $estados=Estados::orderBy('nombre_estado','ASC')->select('id','nombre_estado')->where('pais_id','=',$id)->get();

         return response()->json($estados);

        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = __('Crear Carnet');
        $usuarios = new Usuarios;

       $pais=Pais::orderBy('nombre_pais','ASC')->select('id','nombre_pais')->where('condicion','=','1')->get();
        //dd($pais);
        return view('usuarios.form', compact('usuarios', 'title','pais'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(
            'nom'       =>  'required',
            'ap'      =>  'required',
            'am'   =>  'required',
            'curp'   =>  'required',
            'rfc'   =>  'required',
            'foto'  => 'required'
        );

        $error = Validator::make($request->all(), $rules);

        if($error->fails())
        {
            return response()->json(['errors' => $error->errors()->all()]);
        }


        $form_data = array(
            'nom'        =>  $request->nom,
            'ap'         =>  $request->ap,
            'am'             =>  $request->am,
            'curp'             =>  $request->curp,
            'rfc'             =>  $request->rfc,
            'condicion'  => '1',
        );

        $usuario = Usuarios::create($request->all());



         //Handle File Upload
         if($request->hasFile('foto')){

            //Get filename with the extension
            $filenamewithExt = $request->file('foto')->getClientOriginalName();

            //Get just filename
            $filename = pathinfo($filenamewithExt,PATHINFO_FILENAME);

            //Get just ext
            $extension = $request->file('foto')->guessClientExtension();

            //FileName to store
            $fileNameToStore = time().'.'.$extension;

            //Upload Image
            $path = $request->file('foto')->storeAs('Fotos/Usuarios',$fileNameToStore);

            $usuario->foto=$fileNameToStore;
         }

         $usuario->save();


        // //IMAGE
        // if($request->file('foto')){
        //     $path = Storage::disk('public')->put('FotoUsuarios',  $request->file('foto'));
        //     $foto->fill(['file' => asset($path)])->save();
        // }



        return response()->json(['success' => 'Dato guardado correctamente.']);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function show(Usuarios $usuarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuarios $usuarios, $id)
    {
        $datos=Usuarios::where('id','=',$id)->get();

        //dd($datos);

        return view('usuarios.editar',compact('datos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuarios $usuarios, $id)
    {
        //dd($id);
        $usuario = Usuarios::find($id);

        $usuario->fill($request->all())->save();

        $usuario->condicion='1';

        $usuario->save();

        return view('usuarios.editar');
    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuarios $usuarios)
    {
        //
    }
}
