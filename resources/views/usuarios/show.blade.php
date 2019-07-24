@extends('layouts.admin')

@permission('show-usuarios') //verificar cual le toca bien
@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">{{ __("Datos del Usuario") }}</h3>
        </div>
        <div class="container">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-6">
                                {{--  <img src="'/recursos/public/Fotos/Usuarios/'.$row->foto.'" class="card-img" alt="...">  --}}
                                <img src="/recursos/public/Fotos/Usuarios/{{ $usuario->foto }}" class="card-img" alt="..." style="width:100% ">
                                </div>
                                <div class="col-md-6">
                                    <div class="card-body">
                                        <h5 class="card-title">Nombre: {{ $usuario->nom }}</h5>
                                        <p class="card-text">Apellido paterno: {{ $usuario->ap }}</p>
                                        <p class="card-text">Apellido materno: {{ $usuario->ap }}</p>
                                        <p class="card-text">Fecha de Nacimiento: {{ $usuario->fecha_nacimiento }}</p>
                                        <p class="card-text"><small class="text-muted">Fecha de Alta: {{ $usuario->created_at }}</small></p>

                                    </div>
                                </div>



                                <div class="col-md-3">
                                    <div class="card-footer">
                                        <h5 class="card-title">RFC: {{ $usuario->rfc }}</h5>
                                        <p class="card-text">CURP: {{ $usuario->curp }}</p>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                        <div class="card-footer">
                                            <h5 class="card-title">Pais: {{ $usuario->pais->nombre_pais }}</h5>
                                            <h5 class="card-title">Estado: {{ $usuario->estados->nombre_estado }}</h5>
                                            <h5 class="card-title">Colonia: {{ $usuario->colonias->colonia }}</h5>
                                            <h5 class="card-title">Código Postal: {{ $usuario->codigos->codigo }}</h5>
                                            {{--  <p class="card-text">Estado: {{ $usuario->pais }}</p>  --}}
                                        </div>
                                    </div>


                            </div>
                        </div>


                    </div>
                </div>

        </div>
    </div>
@endsection

@endpermission

