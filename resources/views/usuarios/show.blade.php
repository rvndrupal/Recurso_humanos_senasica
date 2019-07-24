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

                        <div class="card mb-3" style="max-width: 800px;">
                            <div class="row no-gutters">
                                <div class="col-md-6">
                                {{--  <img src="'/recursos/public/Fotos/Usuarios/'.$row->foto.'" class="card-img" alt="...">  --}}
                                <img src="/recursos/public/Fotos/Usuarios/{{ $usuario->foto }}" class="card-img" alt="..." style="width:100% ">
                                </div>
                                <div class="col-md-6">
                                    <div class="card-body">
                                        <h5 class="card-title">Nombre: {{ $usuario->nom }}</h5>
                                        <p class="card-text">Apellido paterno: {{ $usuario->ap }}</p>
                                        <p class="card-text">Apellido materno: {{ $usuario->am }}</p>
                                        <p class="card-text">Fecha de Nacimiento: {{ $usuario->fecha_nacimiento }}</p>
                                        <p class="card-text"><small class="text-muted">Fecha de Alta: {{ $usuario->created_at }}</small></p>

                                    </div>
                                </div>



                                <div class="col-md-3">
                                    <div class="card-footer">
                                        <h5 class="card-title">RFC: {{ $usuario->rfc }}</h5>
                                        <a href="http://localhost/recursos/public/{{ $usuario->carga_rfc }} " download="{{ $usuario->carga_pdf }}">
                                        <i class="glyphicon glyphicon-download">RFC</i>
                                        </a>
                                        {{--  <h5 class="card-text">Rfc: .'/recursos/public/'.{{ $usuario->carga_rfc }}</h5>  --}}
                                        <p class="card-text">CURP: {{ $usuario->curp }}</p>
                                        <a href="http://localhost/recursos/public/{{ $usuario->carga_curp }} " download="{{ $usuario->carga_pdf }}">
                                        <i class="glyphicon glyphicon-download">CURP</i>
                                        </a>

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

                                <div class="col-md-5">
                                        <h5 class="card-title">Municipio: {{ $usuario->municipio }}</h5>
                                        <h5 class="card-text">Fecha Domicilio: {{ $usuario->fecha_domicilio }}</h5>
                                        <h5>Credencial de elector</h5>
                                        <a href="http://localhost/recursos/public/{{ $usuario->carga_ife }} " download="{{ $usuario->carga_ife }}">
                                        <i class="glyphicon glyphicon-download">IFE</i>
                                        </a>

                                         <h5>Comprobante Domicilio</h5>
                                        <a href="http://localhost/recursos/public/{{ $usuario->carga_domicilio }} " download="{{ $usuario->carga_domicilio }}">
                                        <i class="glyphicon glyphicon-download">Comprobante</i>
                                        </a>

                                </div>


                                <div class="col-md-4">
                                        <h5 class="card-title">Correo Institucional: {{ $usuario->correo_ins }}</h5>
                                        <h5 class="card-title">Correo Personal: {{ $usuario->correo_per }}</h5>
                                        <h5 class="card-title">Telefono casa: {{ $usuario->tel_casa }}</h5>
                                        <h5 class="card-title">Télefono movil: {{ $usuario->tel_movil }}</h5>
                                </div>



                            </div>
                        </div>


                    </div>
                </div>

        </div>
    </div>
@endsection

@endpermission

