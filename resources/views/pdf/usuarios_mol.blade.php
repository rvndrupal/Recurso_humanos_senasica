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
                    {{--  <img src="{{ $ruta }}/Fotos/Usuarios/{{ $usuario->foto }}" class="card-img" alt="..." style="width:200px; height:200px ">  --}}
                    <img src="http://localhost/recursos/public/Fotos/Usuarios/{{ $usuario->foto }}" class="card-img" alt="..." style="width:200px; height:200px ">
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
                <img src="{{ $ruta }}/{{ $usuario->carga_curp }}" class="card-img" alt="..." style="width:350px; height:350px; margin: 50px 0 0px 0px;">
                <h6 style="margin: 0px 0 0px 50%;"> Rfc: {{ $usuario->rfc }}</h6>
                <img src="{{ $ruta }}/{{ $usuario->carga_rfc }}" class="card-img" alt="..." style="width:350px; height:350px; margin: 50px 0 0px 50%;">
                <h6> Curp: {{ $usuario->ife }}</h6>
                <img src="{{ $ruta }}/{{ $usuario->carga_ife }}" class="card-img" alt="..." style="width:350px; height:350px; margin: 140px 0 0px 0px;">
        </div>








    </div>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>








