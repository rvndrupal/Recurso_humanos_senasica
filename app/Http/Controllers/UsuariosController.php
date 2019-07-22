<?php

namespace App\Http\Controllers;

use App\Usuarios;
use App\Pais;
use App\Estados;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Storage;
use DB;

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
            // return datatables()->of(Usuarios::query()->where('condicion','=','1'))->addColumn('actions', $actions) funciona
            return datatables()->of(Usuarios::query())->addColumn('actions', $actions)
                ->rawColumns(['actions'])
                ->toJson();
        }
    }

    public function listaAdmin(){
        $title = __('Usuarios');
        return view('usuarios.indexAdmin', compact('title'));
    }

    public function jsonAdmin () {
        if (request()->ajax()) {
            $actions = 'usuarios.datatables.indexAdminAction';
            return datatables()->of(Usuarios::query()->where('condicion','=','1'))->addColumn('actions', $actions)
            // return datatables()->of(Usuarios::query())->addColumn('actions', $actions)
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


    public function cards()
    {
        $title = __('Carnets');
        return view('usuarios.cards2',compact('title'));
    }


    public function cardsAction(Request $request)
    {
        if($request->ajax())
        {
            $output = '';
            $query = $request->get('query');
            if($query != '')
            {




            $data = DB::table('usuarios')

                ->where('condicion','=','1')

                ->orwhere('nom', 'like', '%'.$query.'%')
                // ->orWhere('ap', 'like', '%'.$query.'%')
                // ->orWhere('am', 'like', '%'.$query.'%')
                // ->orWhere('rfc', 'like', '%'.$query.'%')
                // ->orWhere('curp', 'like', '%'.$query.'%')
                ->orderBy('nom', 'desc')
                ->get();

            }
            else
            {
            $data = DB::table('rusuarios')
                ->orderBy('nom', 'desc')
                ->union(condicion)
                ->get();
            }




                $total_row = $data->count();
                if($total_row > 0)
                {
                   $uri ='/recursos/public/Fotos/Usuarios/';
                    foreach($data as $row)

                    {
                        $output .= '
                            <div class="card bg-secondary text-white text-left ">
                                <a href="./show/?id='.$row->id.'">
                                    <img src="'.$uri.$row->foto.'"  class="card-img-top" alt="'.$row->nom.'">
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title">Nombre: '.$row->nom.'</h5>
                                    <p class="card-text">Apellido paterno:  '.$row->ap.'</p>
                                    <p class="card-text">ID:  '.$row->id.'</p>
                                    <p class="card-text">Fecha de creación:  '.$row->created_at.'</p>
                                </div>

                            </div>
                        ';
                    }
                }
                else
                {
                    $output = '

                      <h2>  No hay resultados</h2>

                ';
                }
            $data = array(
            'table_data'  => $output,
            'total_data'  => $total_row
            );

            echo json_encode($data);
        }
    }//cards

    /**
     * Display the specified resource.
     *
     * @param  \App\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Usuarios $usuarios, $id)
    {
        $title = __('Usuario');

        $usuario= Usuarios::findOrFail($id);

        //dd($usuario);

        return view('usuarios.show', compact('usuario','title'));
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
    public function destroy(Usuarios $usuarios,  $id)
    {
        dd($id);
    }

    public function desactivar($id)
    {
        $usuario= Usuarios::findOrFail($id);
        $usuario->condicion='0';
        $usuario->save();
        $title = __('Usuarios');
        return view('usuarios.index',compact('title'));
    }

    public function activar($id)
    {
        $usuario= Usuarios::findOrFail($id);
        $usuario->condicion='1';
        $usuario->save();
        $title = __('Usuarios');
        return view('usuarios.index',compact('title'));
    }
}
