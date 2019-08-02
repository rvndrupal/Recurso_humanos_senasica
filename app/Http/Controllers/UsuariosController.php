<?php

namespace App\Http\Controllers;

use App\Usuarios;
use App\Paises;
use App\Estados;
use App\Municipios;
use App\Colonias;
use App\Codigos;
use App\EstadoCivil;
use App\Solteros;
use App\Escuelas;
use App\Titulos;
use App\Carreras;
use App\Grados;
use App\Idiomas;
use App\DireccionesGenerales;
use App\DireccionesAreas;
use App\DetalleLaborales;

use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Storage;
use DB;

use Illuminate\Support\Facades\Redirect;

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
                // ->orderBy('nom','ASC')
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



     //mostrar los municipios
     public function municipios(Request $request, $id){

        if (request()->ajax()) {

        $municipios=Municipios::orderBy('nombre_mun','ASC')->select('id','nombre_mun')->where('estados_id','=',$id)->get();

         return response()->json($municipios);

        }
    }

      //mostrar colonias
      public function colonias(Request $request, $id){

        if (request()->ajax()) {

        $colonias=Colonias::orderBy('nombre_col','ASC')->select('id','nombre_col','codigo_postal')->where('municipios_id','=',$id)->get();

         return response()->json($colonias);

        }
    }


    //mostrar cp
    public function cp(Request $request, $id){

        if (request()->ajax()) {

        $cp=Colonias::orderBy('codigo_postal','ASC')->select('codigo_postal')->where('id','=',$id)->get();

         return response()->json($cp);

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

       $pais=Paises::orderBy('id','ASC')->select('id','nombre_pais')->get();
       $estados=Estados::orderBy('nombre','ASC')->select('id','nombre')->where('condicion','=','1')->get();
       $escuelas=Escuelas::orderBy('id','ASC')->select('id','nombre_escuela')->get();
       $titulos=Titulos::orderBy('id','ASC')->select('id','nombre_titulo')->get();
       $grados=Grados::orderBy('id','ASC')->select('id','nom_gra')->get();
       $escuelas=Escuelas::orderBy('id','ASC')->select('id','nombre_escuela')->get();
       $carreras=Carreras::orderBy('id','ASC')->select('id','nom_car')->get();
       $idiomas=Idiomas::orderBy('id','ASC')->select('id','nombre_idioma')->get();
       $estadoCivil=EstadoCivil::orderBy('id','ASC')->select('id','nombre')->get();
       $estadoCivil=EstadoCivil::orderBy('id','ASC')->select('id','nombre')->get();
       $dg=DireccionesGenerales::orderBy('id','ASC')->select('id','nombre_dir_gen')->get();
       $da=DireccionesAreas::orderBy('id','ASC')->select('id','nombre_dir_are')->get();

        //dd($usuarios);

        return view('usuarios.form', compact('usuarios', 'title','estados','estadoCivil','pais','escuelas','titulos','carreras','grados','escuelas','idiomas','dg','da'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $rules = array(
        //     'nom'       =>  'required',
        //     'ap'      =>  'required',
        //     'am'   =>  'required',
        //     'curp'   =>  'required',
        //     'rfc'   =>  'required',
        //     'foto'  => 'required',
        //     'fecha_nacimiento' => 'required',
        //     'calle'  => 'required',
        //     'numero'  => 'required',
        //     'pais' => 'requerid'

        // );

        // $error = Validator::make($request->all(), $rules);

        // if($error->fails())
        // {
        //     return response()->json(['errors' => $error->errors()->all()]);
        // }




        // $form_data = array(
        //     'nom'        =>  $request->nom,
        //     'ap'         =>  $request->ap,
        //     'am'             =>  $request->am,
        //     'curp'             =>  $request->curp,
        //     'rfc'             =>  $request->rfc,
        //     'fecha_nacimiento'  => $request->fecha_nacimiento,
        //     'calle'  => $request->calle,
        //     'numero'  => $request->numero,
        //     'condicion'  => '1',
        // );


        $usuario = Usuarios::create($request->all());
        //  $usuario->pais()->attach($request->get('pais'));
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

         if ($request->hasfile('carga_rfc')) {

            $filenamewithExt = $request->file('carga_rfc')->getClientOriginalName();

            $usuario->carga_rfc=$request->carga_rfc->storeAs('RFC',$filenamewithExt);

         }

         if ($request->hasfile('carga_curp')) {
            $filenamewithExt = $request->file('carga_curp')->getClientOriginalName();
            $usuario->carga_curp=$request->carga_curp->storeAs('CURP',$filenamewithExt);
         }


         if ($request->hasfile('carga_ife')) {
            $filenamewithExt = $request->file('carga_ife')->getClientOriginalName();
            $usuario->carga_ife=$request->carga_ife->storeAs('IFE',$filenamewithExt);
         }

         if ($request->hasfile('carga_domicilio')) {
            $filenamewithExt = $request->file('carga_domicilio')->getClientOriginalName();
            $usuario->carga_domicilio=$request->carga_domicilio->storeAs('DOMICILIO',$filenamewithExt);
         }

         if(isset($request->nombre))
         {
                foreach($request->nombre as $item=>$v)
                {

                    $nom=$request->nombre[$item];
                    $edad=$request->edad[$item];

                    if($nom=="0" || $nom==""){
                    $nom=0;
                    }else{
                    $nom=$request->nombre[$item];
                    }

                    if($edad=="0" || $edad=="")
                    {
                    $edad=0;
                    }else{
                    $edad=$request->edad[$item];
                    }

                    $usuario->solteros()->create([
                    'nombre'=>$nom,
                    'edad'=>$edad
                    ]);

                }
        }

        if(isset($request->nombres_coy))
        {
                $nom=$request->nombres_coy;
                $primero=$request->primero_coy;
                $segundo=$request->segundo_coy;
                $curp=$request->curp_coy;
                $curp_carga=$request->carga_curp_coy;

                //dd($curp_carga);

                if($nom==""){$nom=0;}else{$nom=$request->nombres_coy;}
                if($primero==""){$primero=0;}else{$primero=$request->primero_coy;}
                if($segundo==""){$segundo=0;}else{$segundo=$request->segundo_coy;}
                if($curp==""){$curp=0;}else{$curp=$request->curp_coy;}
                if($curp_carga==""){$curp_carga=0;}else{
                $filenamewithExt =$curp_carga->getClientOriginalName();
                $curp_carga=$request->carga_curp_coy->storeAs('CURPCONYUGES',$filenamewithExt);
                }



                $usuario->conyuges()->create([
                    'nombres_coy'=>$nom,
                    'primero_coy'=>$primero,
                    'segundo_coy'=>$segundo,
                    'curp_coy'=>$curp,
                    'carga_curp_coy'=>$curp_carga

                ]);
         }

         if(isset($request->nombre_hijo_coy))
         {
                foreach($request->nombre_hijo_coy as $item=>$v)
                {

                    $nom=$request->nombre_hijo_coy[$item];
                    $edad=$request->edad_hijo_coy[$item];

                    //dd($edad);

                    if($nom=="0" || $nom==""){
                    $nom=0;
                    }else{
                    $nom=$request->nombre_hijo_coy[$item];
                    }

                    if($edad=="0" || $edad=="")
                    {
                    $edad=0;
                    }else{
                    $edad=$request->edad_hijo_coy[$item];
                    }

                    $usuario->HijosConyuges()->create([
                    'nombre_hijo_coy'=>$nom,
                    'edad_hijo_coy'=>$edad
                    ]);

                }
        }

        if(isset($request->nombre_des))
         {
                foreach($request->nombre_des as $item=>$v)
                {

                    $nom=$request->nombre_des[$item];
                    $ap=$request->ap_des[$item];
                    $am=$request->am_des[$item];

                    //dd($edad);

                    if($nom==""){$nom=0;}else{$nom=$request->nombre_des[$item];}
                    if($ap==""){$ap=0;}else{$ap=$request->ap_des[$item];}
                    if($am==""){$am=0;}else{$am=$request->am_des[$item];}

                    $usuario->Descensientes()->create([
                    'nombre_des'=>$nom,
                    'ap_des'=>$ap,
                    'am_des'=>$am
                    ]);

                }
        }



        if(isset($request->grados_id))
        {
        //Escolaridad
            foreach($request->grados_id as $item=>$v)
            {
                  //dd($request->carga_titulo);
                  $filenamewithExt = $request->carga_titulo[$item]->getClientOriginalName();
                  $filenameCed = $request->carga_cedula[$item]->getClientOriginalName();
                $usuario->DetalleEscolaridades()->create([
                    'titulos_id'=>$request->titulos_id[$item],
                    'carreras_id'=>$request->carreras_id[$item],
                    'escuelas_id'=>$request->escuelas_id[$item],
                    'grados_id'=>$request->grados_id[$item],
                    'cedula'=>$request->cedula[$item],
                    'carga_titulo'=>$request->carga_titulo[$item]->storeAs('TITULOPROFESIONAL',$filenamewithExt),
                    'carga_cedula'=>$request->carga_cedula[$item]->storeAs('CEDULA',$filenameCed),
                    ]);
            }
        }

        if(isset($request->idiomas_id))
        {
        //ingles
            foreach($request->idiomas_id as $item=>$v)
            {
                $filenameCce = $request->carga_certificado[$item]->getClientOriginalName();
                $usuario->DetalleIdiomas()->create([
                    'idiomas_id'=>$request->idiomas_id[$item],
                    'carga_certificado'=>$request->carga_certificado[$item]->storeAs('CERT_IDIOMAS',$filenameCce),
                    'nivel_ingles'=>$request->nivel_ingles[$item],
                    ]);

            }
        }


        //laborales
        $usuario->DetalleLaborales()->create([
            'puesto_actual'=>$request->puesto_actual,
            'codigo_puesto'=>$request->codigo_puesto,
            'grado_nivel'=>$request->grado_nivel,
            'direcciones_generales_id'=>$request->direcciones_generales_id,
            'direcciones_areas_id'=>$request->direcciones_areas_id,
            'fecha_ultimo'=>$request->fecha_ultimo,
            'fecha_senasica'=>$request->fecha_senasica,
            'calle_lab'=>$request->calle_lab,
            'num_lab'=>$request->num_lab,
            'col_lab'=>$request->col_lab,
            'fecha_gobierno'=>$request->fecha_gobierno,
            'mun_lab'=>$request->mun_lab,
            'est_lab'=>$request->est_lab,
            'cod_lab'=>$request->cod_lab,
            ]);







         $usuario->save();

         $title = __('Usuarios');

    //    return view('usuarios.index',compact('title'));

      return redirect(route('usuarios.index'))->with('message', [
        'success', __("Usuario creado con Exito")
        ]);



        // return response()->json(['success' => 'Dato guardado correctamente.']);

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

                ->orwhere('nom', 'like', '%'.$query.'%')
                ->orWhere('ap', 'like', '%'.$query.'%')
                ->orWhere('am', 'like', '%'.$query.'%')
                ->orWhere('rfc', 'like', '%'.$query.'%')
                ->orWhere('curp', 'like', '%'.$query.'%')
                ->orderBy('nom', 'desc')
                ->get();

            }
            else
            {
            $data = DB::table('usuarios')
                ->orderBy('nom', 'desc')
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
                                <a href="./show/'.$row->id.'">
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

        // $total=count($usuario->DetalleEscolaridades);
        //dd($total);

            $nt=[];//Los valores en array pasados
            $nc=[];
            $ne=[];
            $ng=[];

            foreach($usuario->DetalleEscolaridades as $item=>$v)
            {
                 $id_titulo=$usuario->DetalleEscolaridades[$item]->titulos_id;
                $nom_titulo=Titulos::select('nombre_titulo')->where('id','=',$id_titulo)->get();
                $ntv=$nom_titulo[0]->nombre_titulo;
                array_push($nt, $ntv);



                $id_car=$usuario->DetalleEscolaridades[$item]->carreras_id;
                $nom_car=Carreras::select('nom_car')->where('id','=',$id_car)->get();
                $ncv=$nom_car[0]->nom_car;
                array_push($nc, $ncv);

                $id_esc=$usuario->DetalleEscolaridades[$item]->escuelas_id;
                $nom_esc=Escuelas::select('nombre_escuela')->where('id','=',$id_esc)->get();
                $nev=$nom_esc[0]->nombre_escuela;
                array_push($ne, $nev);

                $id_gra=$usuario->DetalleEscolaridades[$item]->grados_id;
                $nom_gra=Grados::select('nom_gra')->where('id','=',$id_gra)->get();
                $ngv=$nom_gra[0]->nom_gra;
                array_push($ng, $ngv);
            }

            $total=count($ng);

            //idiomas
            $idi=[];
            foreach($usuario->DetalleIdiomas as $item=>$v)
            {
                $id_idiomas=$usuario->DetalleIdiomas[$item]->idiomas_id;
                $nom_idi=Idiomas::select('nombre_idioma')->where('id','=',$id_idiomas)->get();
                $nid=$nom_idi[0]->nombre_idioma;
                array_push($idi, $nid);
            }
            $totalidi=count($idi);


            // DATOS LABORALES
            $dge=[];
            $dga=[];
            $estl=[];
            $munl=[];
            $coll=[];


                $id_dge=$usuario->DetalleLaborales[0]->direcciones_generales_id;
                $nom_dge=DireccionesGenerales::select('nombre_dir_gen')->where('id','=',$id_dge)->get();
                $ndge=$nom_dge[0]->nombre_dir_gen;
                array_push($dge, $ndge);

                $id_dga=$usuario->DetalleLaborales[0]->direcciones_areas_id;
                $nom_dga=DireccionesAreas::select('nombre_dir_are')->where('id','=',$id_dga)->get();
                $ndga=$nom_dga[0]->nombre_dir_are;
                array_push($dga, $ndga);

                $id_estl=$usuario->DetalleLaborales[0]->est_lab;
                $nom_estl=Estados::select('nombre')->where('id','=',$id_estl)->get();
                $nestl=$nom_estl[0]->nombre;
                array_push($estl, $nestl);

                $id_munl=$usuario->DetalleLaborales[0]->mun_lab;
                $nom_munl=Municipios::select('nombre_mun')->where('id','=',$id_munl)->get();
                $nmunl=$nom_munl[0]->nombre_mun;
                array_push($munl, $nmunl);

                $id_coll=$usuario->DetalleLaborales[0]->col_lab;
                $nom_coll=Colonias::select('nombre_col')->where('id','=',$id_coll)->get();
                $ncoll=$nom_coll[0]->nombre_col;
                array_push($coll, $ncoll);









           // dd($ndge);

            //dd($usuario->DetalleLaborales);




        return view('usuarios.show',compact('usuario','title','nc','ng','total','ne','nt','idi','totalidi','dge','dga','munl','estl','coll'));
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
        // return view('usuarios.index',compact('title'));
        return Redirect::back();
    }

    public function activar($id)
    {
        $usuario= Usuarios::findOrFail($id);
        $usuario->condicion='1';
        $usuario->save();
        $title = __('Usuarios');
        // return view('usuarios.index',compact('title'));
        return Redirect::back();
    }
}
