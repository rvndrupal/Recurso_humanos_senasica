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

       <form id="msform" action="" class="formulario" enctype="multipart/form-data">
            @csrf
        <!-- progressbar -->
        <ul id="progressbar">
            <li class="active">Paso 1</li>
            <li>Paso 2</li>
            <li>Paso 3</li>
            <li>Paso 4</li>
            <li>Final</li>
        </ul>
        <h4>Nuevo Usuario</h4>
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
                    <div class="col-md-4">
                        <div class="form-group">
                            <select class="form-control" name="pais" placeholder="Pais" id="pais">
                                @foreach ($pais as $item)
                                <option value="{{ $item->id }}">{{ $item->nombre_pais }}</option>
                                @endforeach
                            </select>

                        </div>
                    </div>

                    <div class="col-md-4">
                            <div class="form-group">
                                <select class="form-control" name="estado" placeholder="Estado" id="estado">
                                    <option value=""></option>
                                </select>

                            </div>
                    </div>

                    <div class="col-md-4">
                            <div class="form-group">
                                <select class="form-control" name="colonia" placeholder="Colonia" id="colonia">
                                    <option value=""></option>
                                </select>

                            </div>
                    </div>


                    <div class="col-md-12">
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
                        <input type="text" name="curp" id="curp" placeholder="Curp ..." />
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
                    <input type="text" name="rfc" id="rfc" placeholder="Rfc ..." />
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





        $('#guardar').click(function()
        {

            $('.formulario').on('submit', function(event){
                event.preventDefault();
                    $.ajax({
                    url:"{{ route('usuarios.store') }}",
                    method:"POST",
                    data: new FormData(this),
                    contentType: false,
                    cache:false,
                    processData: false,
                    dataType:"json",
                    success:function(data)
                    {
                    var html = '';
                    if(data.errors)
                    {
                        html = '<div class="alert alert-danger">';
                        for(var count = 0; count < data.errors.length; count++)
                        {
                        html += '<p>' + data.errors[count] + '</p>';
                        }
                        html += '</div>';
                    }
                    if(data.success)
                    {
                        html = '<div class="alert alert-success">' + data.success + '</div>';
                        window.location.replace("http://localhost/recursos/public/admin/usuarios");
                    }
                    $('#resultado').append(html);

                    }
                    })
             });



        });  //guardar







});//inicio


</script>
