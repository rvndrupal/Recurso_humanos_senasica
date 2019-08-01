@extends('layouts.admin')

{{--  @permission('read-usuariosSuper')  --}}
@permission('read-usuarios')
@section('content')
<html lang="en">
        <head>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <title>jQuery UI Tabs - Default functionality</title>
          <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
          <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
          <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
          <script>
          $( function() {
            $( "#tabs" ).tabs();
          } );
          </script>
        </head>
        <body>

        <div id="tabs">
          <ul>
            <li><a href="#tabs-1">Personal</a></li>
            <li><a href="#tabs-2">Domicilio</a></li>
            <li><a href="#tabs-3">Estado Civil</a></li>
            <li><a href="#tabs-4">Escolaridad</a></li>
          </ul>
          <div id="tabs-1">
              <div class="row">
                    <div class="col-md-3">
                            <img src="/recursos/public/Fotos/Usuarios/{{ $usuario->foto }}" class="card-img" alt="..." style="width:250px; height:250px ">
                    </div>
                    <div class="col-md-6">
                        <h5 class="card-title">Nombre: {{ $usuario->nom }}</h5>
                        <p class="card-text">Apellido paterno: {{ $usuario->ap }}</p>
                        <p class="card-text">Apellido materno: {{ $usuario->am }}</p>
                        <p class="card-text">Fecha de Nacimiento: {{ $usuario->fecha_nacimiento }}</p>
                        <h5 class="card-title">Correo Institucional: {{ $usuario->correo_ins }}</h5>
                        <h5 class="card-title">Correo Personal: {{ $usuario->correo_per }}</h5>
                        <h5 class="card-title">Telefono casa: {{ $usuario->tel_casa }}</h5>
                        <h5 class="card-title">Télefono movil: {{ $usuario->tel_movil }}</h5>

                        <p class="card-text"><small class="text-muted">Fecha de Alta: {{ $usuario->created_at }}</small></p>
                    </div>
                </div>{{-- row --}}

                <div class="row">

                    <div class="col-md-12">
                                <table class="table" style="margin: 14px 0 0 0;">
                                        <thead class="thead-dark">
                                          <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">RFC</th>
                                            <th scope="col">CURP</th>
                                            <th scope="col">IFE</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <th scope="row">1</th>
                                            <td>
                                                <a href="http://localhost/recursos/public/{{ $usuario->carga_rfc }} " download="{{ $usuario->carga_pdf }}">
                                                    <i class="glyphicon glyphicon-download">RFC</i>
                                                </a>
                                            </td>
                                            <td>
                                            <a href="http://localhost/recursos/public/{{ $usuario->carga_curp }} " download="{{ $usuario->carga_pdf }}">
                                                <i class="glyphicon glyphicon-download">CURP</i>
                                            </a>
                                            </td>
                                            <td>
                                                <a href="http://localhost/recursos/public/{{ $usuario->carga_ife }} " download="{{ $usuario->carga_ife }}">
                                                <i class="glyphicon glyphicon-download">IFE</i>
                                                </a>
                                            </td>
                                          </tr>

                                        </tbody>
                                </table>
                        </div>
                </div>

          </div>{{-- tab-1 --}}



          <div id="tabs-2">
              <div class="row">
                  <div class="col-md-12">
                          <table class="table" style="margin: 14px 0 0 0;">
                                  <thead class="thead-dark">
                                    <tr>
                                      <th scope="col">#</th>
                                      <th scope="col">PAIS</th>
                                      <th scope="col">ESTADO</th>
                                      <th scope="col">MUNICIPIO</th>
                                      <th scope="col">COLONIA</th>
                                      <th scope="col">CP</th>
                                      <th scope="col">CALLE</th>
                                      <th scope="col">NUM</th>
                                      <th scope="col">COMPROBANTE</th>
                                      <th scope="col">FECHA DOMICILIO</th>

                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <th scope="row">1</th>
                                      <td>{{ $usuario->paises->nombre_pais }}</td>
                                      <td>{{ $usuario->estados->nombre }}</td>
                                      <td>{{ $usuario->municipios->nombre_mun }}</td>
                                      <td> {{ $usuario->colonias->nombre_col }}</td>
                                      <td> {{ $usuario->colonias->codigo_postal }}</td>
                                      <td> {{ $usuario->calle }}</td>
                                      <td> {{ $usuario->numero }}</td>
                                      <td>
                                        <a href="http://localhost/recursos/public/{{ $usuario->carga_domicilio }} " download="{{ $usuario->carga_domicilio }}">
                                            <i class="glyphicon glyphicon-download">Comprobante</i>
                                        </a>
                                      </td>
                                      <td> {{ $usuario->fecha_domicilio }} </td>
                                    </tr>

                                  </tbody>
                          </table>
                  </div>
              </div>
          </div> {{-- tabs2 --}}



          <div id="tabs-3">
                <div class="row">
                        <div class="col-md-12">
                                <table class="table" style="margin: 14px 0 0 0;">
                                        <thead class="thead-dark">
                                          <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">ESTADO CIVIL</th>
                                            <th scope="col">CONYUGE</th>
                                            <th scope="col">HIJOS</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <th scope="row">1</th>
                                            <td>{{ $usuario->estadoCivil->nombre }}</td>
                                            <td>
                                            @foreach($usuario->conyuges as $item)
                                            <h5 class="card-title">{{ $item->nombres_coy }} {{ $item->primero_coy }} {{ $item->segundo_coy }}</h5>
                                            <h5 class="card-title">Curp: {{ $item->curp_coy }}</h5>
                                            <a href="http://localhost/recursos/public/{{ $item->carga_curp_coy }} " download="{{ $item->carga_curp_coy }}">
                                                <i class="glyphicon glyphicon-download">Curp</i>
                                            </a>
                                            @endforeach
                                            </td>
                                            <td>
                                            @if($usuario->estadoCivil->nombre=="Soltero(a)")

                                                    @foreach($usuario->solteros as $item)
                                                        @if($item->nombre == '0' and $item->edad=='0')
                                                        <h3>No tiene Hijos</h3>
                                                        @else
                                                        <h5 class="card-title">{{ $item->nombre }}  Edad: {{ $item->edad }}</h5>
                                                        @endif
                                                    @endforeach

                                            @else
                                                @if($usuario->HijosConyuges)
                                                    @foreach($usuario->HijosConyuges as $item)
                                                        @if($item->nombre_hijo_coy == '0')
                                                        <h3>No tiene Hijos</h3>
                                                        @else
                                                        <h5 class="card-title">{{ $item->nombre_hijo_coy }}  Edad: {{ $item->edad_hijo_coy }}</h5>
                                                        @endif
                                                    @endforeach
                                                @endif
                                            @endif
                                            </td>
                                          </tr>
                                        </tbody>
                                </table>
                        </div>
                    </div>


                    {{-- dESCENDIENTES --}}
                    <div class="row">
                        <div class="col-md-12">
                        <h3>Familiares Descendientes</h3>
                        <ul>
                            @foreach($usuario->Descensientes as $item)
                            @if($item->nombre_des=="0")

                            @else
                            <li>{{ $item->nombre_des }} {{ $item->ap_des }} {{ $item->am_des }}</li>
                            @endif
                            @endforeach
                        </ul>

                        </div>
                    </div>

          </div>




          <div id="tabs-4">
            {{--  Grado escolar: {{ $ng }}<p></p>  --}}
            {{--  Carrera: {{ $carrera['nom_car'] }}<p></p>  --}}
            {{--  Cedula:{{ $usuario->DetalleEscolaridades[0]->cedula }}<p></p>
            Escuela: {{ $ne }}<p></p>
            Título: {{ $nt }}<p></p>  --}}


            <table class="table" style="margin: 14px 0 0 0;">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">ESTUDIOS</th>
                        <th scope="col">GRADOS</th>
                        <th scope="col">CARRERAS</th>
                        <th scope="col">CEDULA</th>
                        <th scope="col">ESCUELA</th>
                        <th scope="col">TÍTULO</th>

                      </tr>
                    </thead>
                    <tbody>

                      <tr>
                        <th scope="row">
                           @for($i=1; $i<=$total; $i++)
                            {{ $i }}<p></p>
                           @endfor
                        </th>
                        <td>
                            @foreach($ng as $item)
                            {{ $item }}<p></p>
                            @endforeach
                        </td>
                        <td>
                            @foreach($nc as $item)
                            {{ $item }}<p></p>
                            @endforeach
                        </td>
                        <td>
                            @for($i=0; $i<$total; $i++)
                            {{ $usuario->DetalleEscolaridades[$i]->cedula }}<p></p>
                            @endfor
                        </td>
                        <td>
                            @foreach($ne as $item)
                            {{ $item }}<p></p>
                            @endforeach
                        </td>

                        <td>
                            @foreach($nt as $item)
                            {{ $item }}<p></p>
                            @endforeach
                        </td>

                      </tr>
                    </tbody>
            </table>






          </div>{{-- Escolaridad --}}


        </div>{{-- tabs --}}


        </body>
        </html>

@endsection

@endpermission








