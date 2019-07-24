<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="{{ asset('css/estilos.css') }}" rel="stylesheet" />
    <title>Document</title>
</head>
<body>

       <form id="msform" action="{{ route('usuarios.store') }}" method="POST" class="formulario" enctype="multipart/form-data">
            @csrf
        <!-- progressbar -->
        <ul id="progressbar">
            <li class="active">Paso 1</li>
            <li>Paso 2</li>
            <li>Paso 3</li>
            <li>Paso 4</li>
            <li>Final</li>
        </ul>
        <!-- fieldsets -->
        <fieldset>
            <h2 class="fs-title">Datos Personales</h2>
            <h3 class="fs-subtitle">Registro</h3>
            <div class="row">

                    <div class="col-md-4">
                            <input type="text" name="nom" id="nom" placeholder="Nombre ..." required />
                    </div>

                    <div class="col-md-4">
                            <input type="text" name="ap" id="ap" placeholder="Apellido Paterno ..." />
                        </div>
                    <div class="col-md-4">
                            <input type="text" name="am" id="am" placeholder="Apellido Materno ..." />
                    </div>

                    <div class="col-md-6">
                            <input type="text" name="curp" id="curp" placeholder="Curp ..." />
                    </div>

                    <div class="col-md-6">
                            <input type="text" name="rfc" id="rfc" placeholder="Rfc ..." />
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <select class="form-control" name="pais_id" placeholder="Pais" id="pais">
                                    <option value="">Selecciona un Pais</option>
                                @foreach ($pais as $item)
                                <option value="{{ $item->id }}">{{ $item->nombre_pais }}</option>
                                @endforeach
                            </select>

                        </div>
                    </div>

                    <div class="col-md-4">
                            <div class="form-group">
                                <select class="form-control" name="estados_id" placeholder="Estado" id="estado">
                                    <option value=""></option>
                                </select>

                            </div>
                    </div>

                    <div class="col-md-4">
                            <div class="form-group">
                                <select class="form-control" name="colonias_id" placeholder="Colonia" id="colonia">
                                    <option value=""></option>
                                </select>

                            </div>
                    </div>

                    <div class="col-md-2">
                            <div class="form-group">
                                <select class="form-control" name="codigos_id" placeholder="codigo" id="codigo">
                                    <option value=""></option>
                                </select>

                            </div>
                    </div>

                    <div class="col-md-8">
                            <input type="text" name="calle" id="calle" placeholder="Calle ..." />
                    </div>

                    <div class="col-md-2">
                            <input type="text" name="numero" id="numero" placeholder="Numero ..." />
                    </div>

                    <div class="col-md-6">
                            <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" placeholder="Rfc ..." />
                    </div>


                    <div class="col-md-6">
                            <input type="file" name="foto" id="foto" placeholder="Foto ..."  />
                    </div>
            </div>



            <input type="button" name="next" id="validar" class="next action-button" value="Siguiente" />

        </fieldset>
        <fieldset>
            <h2 class="fs-title">Demo dos</h2>
            <h3 class="fs-subtitle">Demo dos</h3>
            <div class="row">



            </div>
            <input type="button" name="previous" class="previous action-button" value="Previous" />
            <input type="button" name="next" id="validar" class="next action-button" value="Siguiente" />

        </fieldset>

        <fieldset>
                <h2 class="fs-title">Demo tres</h2>
                <h3 class="fs-subtitle">Demo tres</h3>
                <div class="row">

                </div>
                <input type="button" name="previous" class="previous action-button" value="Previous" />
                <input type="button" name="next" id="validar" class="next action-button" value="Siguiente" />
        </fieldset>

        <fieldset>
                <h2 class="fs-title">Demo cuatro</h2>
                <h3 class="fs-subtitle">Demo cuatro</h3>
                <div class="row">
                    <div class="col-md-4">

                    </div>
                </div>
                <input type="button" name="previous" class="previous action-button" value="Previous" />
                <input type="button" name="next" id="validar" class="next action-button" value="Siguiente" />
        </fieldset>





        <fieldset>
            <h2 class="fs-title">Final</h2>
            <h3 class="fs-subtitle">Final</h3>
            <div class="row">
                <div class="col-md-4">

                </div>
            </div>

            <input type="button" name="previous" class="previous action-button" value="Previous" />
            <input type="submit" name="submit"  class="submit action-button" id="guardar"  value="Guardar" />
        </fieldset>
    </form>

    <!-- jQuery -->
    <script src="http://thecodeplayer.com/uploads/js/jquery-1.9.1.min.js" type="text/javascript"></script>
    <!-- jQuery easing plugin -->
    <script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js" type="text/javascript"></script>
    <script src="{{ asset('js/scripts.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery.validate.min.js') }}" type="text/javascript"></script>



</body>
</html>




<script>
$(document).ready(function(){

        $("#pais").change(function(e){

            var id=e.target.value;
            console.log(id);

            if(id=="selected"){
                $("#estado").append("<option value=''>Selecciona un estado</option>");
                console.log("nada");
            }
            else{

                $.get("estados/" + id, function(data){

                    $("#estado").empty();

                    for(i=0; i<data.length ;i++)
                        {
                            $("#estado").append("<option value='" +data[i].id+"'>"+data[i].nombre_estado+"</option>");
                        }

                });
            }
        });//pais


        $("#estado").change(function(e){

            var id=e.target.value;
            console.log(id);

            if(id=="selected"){
                $("#colonia").append("<option value=''>Selecciona un estado</option>");
                console.log("nada");
            }
            else{

                $.get("colonias/" + id, function(data){

                    $("#colonia").empty();

                    for(i=0; i<data.length ;i++)
                        {
                            $("#colonia").append("<option value='" +data[i].id+"'>"+data[i].colonia+"</option>");
                        }

                });
            }
        });//estados


        $("#colonia").change(function(e){

            var id=e.target.value;
            console.log(id);

            if(id=="selected"){
                $("#codigo").append("<option value=''>Selecciona un código</option>");
                console.log("nada");
            }
            else{

                $.get("codigos/" + id, function(data){

                    $("#codigo").empty();

                    for(i=0; i<data.length ;i++)
                        {
                            $("#codigo").append("<option value='" +data[i].id+"'>"+data[i].codigo+"</option>");
                        }

                });
            }
        });//colonia

















});//inicio


</script>
