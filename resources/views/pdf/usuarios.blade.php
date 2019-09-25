<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Reporte Usuario</title>
</head>
<body>

    <div class="container">
        <div class="row">

            <div class="col-md-6">
                    <img src="{{ $ruta }}/Fotos/Usuarios/{{ $usuario->foto }}" class="card-img" alt="..." style="width:200px; height:200px ">

            </div>
            <div class="col-md-6">
                   <h6 style="margin: 0 0 0 50%;">Nombre: {{ $usuario->nom }}</h6>
                   <h6 style="margin: 0 0 0 50%;">Apellido Paterno: {{ $usuario->ap }}</h6>
                   <h6 style="margin: 0 0 0 50%;">Apellido Materno: {{ $usuario->am }}</h6>
                   <h6 style="margin: 0 0 0 50%;">Fecha Nacimiento: {{ $usuario->fecha_nacimiento }}</h6>
                   <h6 style="margin: 0 0 0 50%;">Fecha Domicilio: {{ $usuario->fecha_domicilio }}</h6>
            </div>
        </div>

        <div class="row">
                <h6> Curp: {{ $usuario->curp }}</h6>
                <img src="{{ $ruta }}/{{ $usuario->carga_curp }}" class="card-img" alt="..." style="width:250px; height:250px; margin: 50px 0 0px 0px;">
                <h6 style="margin: 0px 0 0px 60%;"> Rfc: {{ $usuario->rfc }}</h6>
                <img src="{{ $ruta }}/{{ $usuario->carga_rfc }}" class="card-img" alt="..." style="width:250px; height:250px; margin: 40px 0 0px 60%;">
                <img src="{{ $ruta }}/{{ $usuario->carga_ife }}" class="card-img" alt="..." style="width:250px; height:250px; margin: 280px 0 0px 0px;">
                <img src="{{ $ruta }}/{{ $usuario->carga_domicilio }}" class="card-img" alt="..." style="width:250px; height:250px; margin: 370px 0 0px 60%;">
        </div>


        <div class="row">
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Calle</th>
                    <th scope="col">Numero</th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                        <td width="85%">{{ $usuario->calle }}</td>
                        <td>{{ $usuario->numero }}</td>
                    </tr>
                </tbody>
              </table>
        </div>


        <div class="row">
                <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">Corre Personal</th>
                        <th scope="col">Correo Institucional</th>
                        <th scope="col">Tel Casa</th>
                        <th scope="col">Tel Movil</th>
                      </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $usuario->correo_per }}</td>
                            <td>{{ $usuario->correo_ins }}</td>
                            <td>{{ $usuario->tel_casa }}</td>
                            <td>{{ $usuario->tel_movil }}</td>
                        </tr>
                    </tbody>
                  </table>
            </div>

            <div class="row">
                    <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">Pais</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Municipios</th>
                            <th scope="col">Colonia</th>
                            <th scope="col">CP</th>
                          </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $usuario->paises->nombre_pais }}</td>
                                <td>{{ $usuario->estados->nombre }}</td>
                                <td>{{ $usuario->municipios->nombre_mun }}</td>
                                <td>{{ $usuario->colonias->nombre_col }}</td>
                                <td>{{ $usuario->colonias->codigo_postal }}</td>
                            </tr>
                        </tbody>
                      </table>
            </div>

            <div class="row">
                <h4>Estado Civil</h4>
                <hr>
                    <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">Estado Civil</th>
                            <th scope="col">Nombres</th>
                            <th scope="col">Apellido Paterno</th>
                            <th scope="col">Apellido Materno</th>
                            <th scope="col">Curp</th>
                            <th scope="col">Curp</th>


                          </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $usuario->estadoCivil->nombre }}</td>
                                @if(isset($usuario->conyuges[0]->nombres_coy))
                                <td>{{ $usuario->conyuges[0]->nombres_coy }}</td>
                                <td>{{ $usuario->conyuges[0]->primero_coy }}</td>
                                <td>{{ $usuario->conyuges[0]->segundo_coy  }}</td>
                                <td>{{ $usuario->conyuges[0]->curp_coy }}</td>
                                <td> <img src="{{ $ruta }}/{{ $usuario->conyuges[0]->carga_curp_coy }}" class="card-img" alt="..." style="width:120px; height:90px; margin: 0px 0 0px 0px;"></td>
                                @else
                                <td>No tiene</td>
                                @endif
                            </tr>
                        </tbody>
                      </table>
            </div>


            <div class="row">
                    <h4>Hijos</h4>
                    <hr>
                    <table class="table">
                        <thead class="thead-dark">

                          <tr>
                            <th scope="col">Hijo</th>
                            <th scope="col">Curp Hijo</th>

                          </tr>
                        </thead>
                        @foreach($usuario->solteros as $item)
                        <tbody>
                            <tr>
                                <td>{{ $item->nombre_hijo }}  Curp: {{ $item->curp_hijo  }}</td>
                                <td> <img src="{{ $ruta }}/{{ $item->carga_curp_hijo }}" class="card-img" alt="..." style="width:150px; height:120px; margin: 0px 0 0px 0px;"></td>
                            </tr>
                        </tbody>
                        @endforeach
                      </table>
            </div>

            <div class="row">
                    <h4>Dependientes</h4>
                    <hr>
                    <table class="table">
                        <thead class="thead-dark">

                          <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido Paterno</th>
                            <th scope="col">Apellido Materno</th>

                          </tr>
                        </thead>
                        @foreach($usuario->Descensientes as $item)
                        <tbody>
                            <tr>
                                <td>{{ $item->nombre_des }}</td>
                                <td>{{ $item->ap_des }}</td>
                                <td>{{ $item->am_des }}</td>

                            </tr>
                        </tbody>
                        @endforeach
                      </table>
            </div>









    </div> {{-- container --}}




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>








