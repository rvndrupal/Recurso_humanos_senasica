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
            <li><a href="#tabs-4">Sección 4</a></li>
          </ul>
          <div id="tabs-1">
              <div class="row">
                    <div class="col-md-4">
                            <img src="/recursos/public/Fotos/Usuarios/{{ $usuario->foto }}" class="card-img" alt="..." style="width:100% ">
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
                                            <th scope="col">HIJOS</th>



                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <th scope="row">1</th>
                                            <td>{{ $usuario->estadoCivil->nombre }}</td>
                                            <td>
                                                @foreach($usuario->solteros as $item)
                                                    @if($item->nombre == '0')
                                                    <h3>No tiene Hijos</h3>
                                                    @else
                                                    <h5 class="card-title">{{ $item->nombre }}  Edad: {{ $item->edad }}</h5>
                                                    @endif
                                                @endforeach
                                            </td>

                                          </tr>

                                        </tbody>
                                </table>
                        </div>
                    </div>

          </div>




          <div id="tabs-4">
            <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
            <p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
          </div>


        </div>{{-- tabs --}}


        </body>
        </html>

@endsection

@endpermission








