<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="{{ asset('css/estilos.css') }}" rel="stylesheet" />
    <title>Document</title>

    <meta name="csrf-token" content="{!! csrf_token() !!}">
</head>
<body>

       <form id="msform" action="" class="formulario">
            @csrf
        <!-- progressbar -->
        <ul id="progressbar">
            <li class="active">Paso 1</li>
            <li>Paso 2</li>
            <li>Paso 3</li>
            <li>Paso 4</li>
            <li>Final</li>
        </ul>
        <h4>Editar Usuario</h4>
        <!-- fieldsets -->
        @foreach ($datos as $item)
        <fieldset>
            <h2 class="fs-title">Paso uno</h2>
            <h3 class="fs-subtitle">Paso uno</h3>
            <div class="row">
                <div class="col-md-3">
                    <input type="text" name="nom" id="nom" placeholder="Nombre ..." value="{{ $item->nom }}" />
                </div>
            </div>


            <input type="button" name="next" id="validar" class="next action-button" value="Siguiente" />

        </fieldset>
        <fieldset>
            <h2 class="fs-title">Demo dos</h2>
            <h3 class="fs-subtitle">Demo dos</h3>
            <div class="row">
                <div class="col-md-4">
                    <input type="text" name="ap" id="ap" placeholder="Apellido Paterno ..." value="{{ $item->ap }}"/>
                </div>
            </div>
            <input type="button" name="previous" class="previous action-button" value="Previous" />
            <input type="button" name="next" id="validar" class="next action-button" value="Siguiente" />

        </fieldset>

        <fieldset>
                <h2 class="fs-title">Demo tres</h2>
                <h3 class="fs-subtitle">Demo tres</h3>
                <div class="row">
                    <div class="col-md-4">
                        <input type="text" name="am" id="am" placeholder="Apellido Materno ..." value="{{ $item->am }}"/>
                    </div>
                </div>
                <input type="button" name="previous" class="previous action-button" value="Previous" />
                <input type="button" name="next" id="validar" class="next action-button" value="Siguiente" />
        </fieldset>

        <fieldset>
                <h2 class="fs-title">Demo cuatro</h2>
                <h3 class="fs-subtitle">Demo cuatro</h3>
                <div class="row">
                    <div class="col-md-4">
                        <input type="text" name="curp" id="curp" placeholder="Curp ..." value="{{ $item->curp }}" />
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
                    <input type="text" name="rfc" id="rfc" placeholder="Rfc ..." value="{{ $item->rfc }}" />
                </div>
            </div>

            <input type="hidden" value="{{ $item->id }}" id="idEditar" name="id">

            @endforeach

            <input type="button" name="previous" class="previous action-button" value="Previous" />
            <input type="submit" name="submit"  class="submit action-button" id="guardarEditar" value="Editar"/>
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


        //editar


        $('#guardarEditar').click(function()
        {

            $('.formulario').on('submit', function(event){
                event.preventDefault();
                var id=$('#idEditar').val();

                    $.ajax({
                    url:'http://localhost/recursos/public/admin/usuarios/update/'+id,
                    method:"PUT",
                    data: new FormData(this),
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
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






        });  //editar








});//inicio


</script>
