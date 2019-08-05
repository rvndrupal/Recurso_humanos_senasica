<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="{{ asset('css/estilos.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/chosen.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/jquery-ui.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/jquery-ui.theme.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/errores.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/simple-sidebar.css') }}" rel="stylesheet" />

    <title>Document</title>
</head>
<body>

    {{-- EMPIEZA EL MENU --}}

    <div class="d-flex toggled" id="wrapper">


            <!-- Sidebar -->
            <div class="bg-light border-right" id="sidebar-wrapper">
              <div class="sidebar-heading">ADMINISTRACIÓN</div>
              <div class="list-group list-group-flush">
                <a href="{{ route('home') }}" class="list-group-item list-group-item-action bg-light">INICIO</a>
                <a href="#" class="list-group-item list-group-item-action bg-light">DOS</a>
                <a href="#" class="list-group-item list-group-item-action bg-light">TRES</a>
                <a href="#" class="list-group-item list-group-item-action bg-light">CUATRO</a>
                <a href="#" class="list-group-item list-group-item-action bg-light">CINCO</a>
                <a href="#" class="list-group-item list-group-item-action bg-light">SEIS</a>
              </div>
            </div>
            <!-- /#sidebar-wrapper -->




       <form id="msform" action="{{ route('usuarios.store') }}" method="POST" class="formulario" enctype="multipart/form-data">
            @csrf

       {{-- -menu --}}

       <button class="btn btn-primary" id="menu-toggle" style="margin: -72px +91% 0 7px; background-color: #27ae60; border-color: #686869;">Menú</button>
       {{-- -menu --}}
        <!-- progressbar -->
        <ul id="progressbar">
            <li class="active">PERSONALES</li>
            <li>DOMICILIO PARTICULAR</li>
            <li>ESTADO CIVIL</li>
            <li>ESCOLARIDAD</li>
            <li>DATOS LABORALES</li>
            <li>EXPERIENCIA LABORAL</li>
            <li>SEGURO SOCIAL</li>
        </ul>
        <!-- fieldsets -->
        <fieldset>
            <h2 class="fs-title">Datos Personales</h2>
            <h3 class="fs-subtitle">Registro</h3>
            <div class="row">

                  @include('usuarios/form/fase_uno')

        </fieldset>
        <fieldset>
            <h2 class="fs-title">DOMICILIO PARTICULAR</h2>
            <h3 class="fs-subtitle">Datos Particulares</h3>
            <div class="row">

                @include('usuarios/form/fase_dos')

        </fieldset>

        <fieldset>
                <h2 class="fs-title">ESTADO CIVIL</h2>
                <h3 class="fs-subtitle">Datos Personales</h3>
                <div class="row">
                    <div class="col-md-12">
                        <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="addon-wrapping">Selecciona una opción</span>
                                </div>
                                <select class="form-control" name="estado_civils_id" id="estado_civil" placeholder="Estado civil" >
                                    <option value="">Estado civil</option>
                                    @foreach ($estadoCivil as $item)
                                     <option value="{{ $item->id }}">{{ $item->nombre }}</option>
                                    @endforeach

                                </select>
                        </div>
                    </div>
                </div>
                    <div class="elementos_estado">

                        <div id="soltero">
                            <div class="col-md-4" >
                                    <div class="input-group flex-nowrap">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="addon-wrapping">Hijos</span>
                                            </div>
                                            <select class="form-control" name="" id="hijos" placeholder="Hijos" >
                                                <option value="">Tienes Hijos</option>
                                                <option value="si">Si</option>
                                                <option value="no">No</option>
                                            </select>
                                    </div>
                            </div>

                            <div id="bh">
                            </div>
                            <div id="if">

                            </div>
                        </div>{{-- -soltero --}}

                         <div id="casado">
                             @include('usuarios/form/casado')

                             <div id="ec">
                                <table class="table table-bordered" id="dynamic_hijos">

                                </table>

                             </div>

                             <div id="ifc">

                             </div>

                         </div>{{-- casados --}}



                     </div>



                <input type="button" name="previous" class="previous action-button" value="Previous" />
                <input type="button" name="next" id="validar" class="next action-button" value="Siguiente" />
        </fieldset>

        <fieldset>
                <h2 class="fs-title">Escolaridad</h2>
                <h3 class="fs-subtitle">Información del nivel Académico</h3>
                <div class="row">
                        @include('usuarios/form/escolaridad')
                </div>
                <input type="button" name="previous" class="previous action-button" value="Previous" />
                <input type="button" name="next" id="validar" class="next action-button" value="Siguiente" />
        </fieldset>

        <fieldset>
                <h2 class="fs-title">Datos Laborales</h2>

                @include('usuarios/form/laborales')


                <input type="button" name="previous" class="previous action-button" value="Previous" />
                <input type="button" name="next" id="validar" class="next action-button" value="Siguiente" />
        </fieldset>


        <fieldset>
                <h2 class="fs-title">Experiencia Laboral</h2>

                @include('usuarios/form/exp_laboral')

                <input type="button" name="previous" class="previous action-button" value="Previous" />
                <input type="button" name="next" id="validar" class="next action-button" value="Siguiente" />
        </fieldset>


        <fieldset>
            <h2 class="fs-title">DATOS SEGURO SOCIAL</h2>

            @include('usuarios/form/seguros')

            <input type="button" name="previous" class="previous action-button" value="Previous" />
            <input type="submit" name="submit"  class="submit action-button" id="guardar"  value="Guardar" />
        </fieldset>
    </form>



</div>{{-- DEL MENU WRAPER --}}


    <!-- jQuery -->
    <script src="http://thecodeplayer.com/uploads/js/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- jQuery easing plugin -->
    <script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js" type="text/javascript"></script>
    <script src="{{ asset('js/scripts.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery.validate.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery-ui.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>

</body>
</html>




<script>
$(document).ready(function(){

        //mostrar estado
        $("#estado").change(function(e){

            var id=e.target.value;
            console.log(id);

            if(id=="selected"){
                $("#municipios").append("<option value=''>Selecciona un estado</option>");
                console.log("nada");
            }
            else{

                $.get("municipios/" + id, function(data){

                    $("#municipios").empty();

                    for(i=0; i<data.length ;i++)
                        {
                            $("#municipios").append("<option value='" +data[i].id+"'>"+data[i].nombre_mun+"</option>");
                        }

                });
            }
        });//estados

        //mostrar las colonias
        $("#municipios").change(function(e){

            var id=e.target.value;
            console.log(id);

            if(id=="selected"){
                $("#colonia").append("<option value=''>Selecciona un código</option>");
                console.log("nada");
            }
            else{

                $.get("colonias/" + id, function(data){

                    $("#colonias").empty();

                    for(i=0; i<data.length ;i++)
                        {
                            $("#colonias").append("<option value='" +data[i].id+"'>"+data[i].nombre_col+"</option>");

                        }

                });
            }
        });


        //mostrar las cp
        $("#colonias").change(function(e){

            var id=e.target.value;
            console.log(id);

            if(id=="selected"){
                $("#colonia").append("<option value=''>Selecciona un código</option>");
                console.log("nada");
            }
            else{

                $.get("cp/" + id, function(data){

                    $("#colonias_cp").empty();

                    for(i=0; i<data.length ;i++)
                        {
                            $("#colonias_cp").append(" <div class='input-group-prepend' id='colonias_cp'><span class='input-group-text' id='addon-wrapping'>CP</span></div><input type='text' name='codigo_postal' readonly value="+data[i].codigo_postal+" class='form-control'> ");
                        }

                });
            }
        });






        //estado civil ocultar
        $('#estado_civil').change(function(){

            var seleccion=$(this).val();

            if(seleccion=='1')
            {
                $('#soltero').show(500);
                $('#casado').hide();
                $('#ec').empty();
                $('dynamic_hijos').empty();

            }
            if(seleccion=='2'){
                $('#soltero').hide();
                $('#casado').show(500);
                $('#viudo').hide();
                $('#bh').empty();
                $('#if').empty();
            }



        });

        //soltero
        $('#hijos').change(function(){

            var seleccion=$(this).val();



            if(seleccion=='si')
            {

                $('#bh').html('<table class="table table-bordered" id="dynamic_field">'+
                        '<tr>'+
                                '<td>'+
                                        '<div class="input-group flex-nowrap">'+
                                                '<div class="input-group-prepend">'+
                                                    '<span class="input-group-text" id="addon-wrapping">Nombre</span>'+
                                                '</div>'+
                                                '<input type="text" class="form-control" name="nombre[]" id="hijo"   placeholder="Nombre" aria-label="Nombre" aria-describedby="addon-wrapping">'+
                                        '</div>'+
                                '</td>'+
                                '<td>'+
                                        '<div class="input-group flex-nowrap">'+
                                                '<div class="input-group-prepend">'+
                                                    '<span class="input-group-text" id="addon-wrapping">Edad</span>'+
                                                '</div>'+
                                               '<input type="text" class="form-control" name="edad[]" id="edad"    placeholder="Edad" aria-label="Nombre" aria-describedby="addon-wrapping">'+
                                        '</div>'+
                                '</td>'+
                                '<td><button type="button" name="add" id="add" class="btn btn-success">+</button></td>'+

                        '</tr>'+

                '</table>');



                $('#if').html('<table class="table table-bordered" id="dynamic_field">'+
                        '<hr>'+
                        '<h4>Familiares Descendientes</h4>'+
                        '<tr>'+
                                '<td>'+
                                        '<div class="input-group flex-nowrap">'+
                                                '<div class="input-group-prepend">'+
                                                    '<span class="input-group-text" id="addon-wrapping">Nombre</span>'+
                                                '</div>'+
                                                '<input type="text" class="form-control" name="nombre_des[]" id="hijo"   placeholder="Nombre" aria-label="Nombre" aria-describedby="addon-wrapping">'+
                                        '</div>'+
                                '</td>'+
                                '<td>'+
                                    '<div class="input-group flex-nowrap">'+
                                            '<div class="input-group-prepend">'+
                                                '<span class="input-group-text" id="addon-wrapping">Ap</span>'+
                                            '</div>'+
                                            '<input type="text" class="form-control" name="ap_des[]" id="edad"    placeholder="Paterno" aria-label="Nombre" aria-describedby="addon-wrapping">'+
                                    '</div>'+
                                '</td>'+
                                '<td>'+
                                        '<div class="input-group flex-nowrap">'+
                                                '<div class="input-group-prepend">'+
                                                    '<span class="input-group-text" id="addon-wrapping">Ap</span>'+
                                                '</div>'+
                                                '<input type="text" class="form-control" name="am_des[]" id="edad"    placeholder="Materno" aria-label="Nombre" aria-describedby="addon-wrapping">'+
                                        '</div>'+
                                    '</td>'+
                                '<td><button type="button" name="add" id="addViudo" class="btn btn-success">+</button></td>'+

                        '</tr>'+

                '</table>');



            }
            if(seleccion=='no'){

                $('#bh').html('<table class="table table-bordered" id="dynamic_field">'+
                        '<tr>'+
                                '<td>'+
                                        '<div class="input-group flex-nowrap">'+
                                                '<div class="input-group-prepend">'+
                                                    '<span class="input-group-text" id="addon-wrapping">Nombre</span>'+
                                                '</div>'+
                                                '<input type="text" class="form-control" name="nombre[]" id="hijo" readonly value="0" placeholder="Nombre" aria-label="Nombre" aria-describedby="addon-wrapping">'+
                                        '</div>'+
                                '</td>'+
                                '<td>'+
                                        '<div class="input-group flex-nowrap">'+
                                                '<div class="input-group-prepend">'+
                                                    '<span class="input-group-text" id="addon-wrapping">Edad</span>'+
                                                '</div>'+
                                               '<input type="text" class="form-control" name="edad[]" id="edad"  readonly value="0" placeholder="Edad" aria-label="Nombre" aria-describedby="addon-wrapping">'+
                                        '</div>'+
                                '</td>'+

                        '</tr>'+

                '</table>');

                $('#if').html('<table class="table table-bordered" id="dynamic_field">'+
                        '<hr>'+
                        '<h4>Familiares Descendientes</h4>'+
                        '<tr>'+
                                '<td>'+
                                        '<div class="input-group flex-nowrap">'+
                                                '<div class="input-group-prepend">'+
                                                    '<span class="input-group-text" id="addon-wrapping">Nombre</span>'+
                                                '</div>'+
                                                '<input type="text" class="form-control" name="nombre_des[]" id="hijo"   placeholder="Nombre" aria-label="Nombre" aria-describedby="addon-wrapping">'+
                                        '</div>'+
                                '</td>'+
                                '<td>'+
                                    '<div class="input-group flex-nowrap">'+
                                            '<div class="input-group-prepend">'+
                                                '<span class="input-group-text" id="addon-wrapping">Ap</span>'+
                                            '</div>'+
                                            '<input type="text" class="form-control" name="ap_des[]" id="edad"    placeholder="Paterno" aria-label="Nombre" aria-describedby="addon-wrapping">'+
                                    '</div>'+
                                '</td>'+
                                '<td>'+
                                        '<div class="input-group flex-nowrap">'+
                                                '<div class="input-group-prepend">'+
                                                    '<span class="input-group-text" id="addon-wrapping">Ap</span>'+
                                                '</div>'+
                                                '<input type="text" class="form-control" name="am_des[]" id="edad"    placeholder="Materno" aria-label="Nombre" aria-describedby="addon-wrapping">'+
                                        '</div>'+
                                    '</td>'+
                                '<td><button type="button" name="add" id="addViudo" class="btn btn-success">+</button></td>'+

                        '</tr>'+

                '</table>');



            }
        });


        var i=1;
        $(document).on('click', '#add', function(){
             i++;
             $('#dynamic_field').append('<tr id="row'+i+'">'+
                 '<td>'+
                        '<div class="input-group flex-nowrap">'+
                                '<div class="input-group-prepend">'+
                                    '<span class="input-group-text" id="addon-wrapping">Nombre</span>'+
                                '</div>'+
                                '<input type="text" class="form-control" name="nombre[]" id="hijo" placeholder="Nombre" aria-label="Nombre" aria-describedby="addon-wrapping">'+
                        '</div>'+
                  '</td>'+
                  '<td>'+
                        '<div class="input-group flex-nowrap">'+
                                '<div class="input-group-prepend">'+
                                    '<span class="input-group-text" id="addon-wrapping">Edad</span>'+
                                '</div>'+
                                '<input type="text" class="form-control" name="edad[]" id="edad" placeholder="Nombre" aria-label="Nombre" aria-describedby="addon-wrapping">'+
                        '</div>'+
                 '</td>'+
                 '<td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
        });
        $(document).on('click', '.btn_remove', function(){
             var button_id = $(this).attr("id");
             $('#row'+button_id+'').remove();
        });


        var i=1;
        $(document).on('click', '#addViudo', function(){
             i++;
             $('#if').append('<tr id="row'+i+'">'+
                 '<td>'+
                        '<div class="input-group flex-nowrap">'+
                                '<div class="input-group-prepend">'+
                                    '<span class="input-group-text" id="addon-wrapping">Nombre</span>'+
                                '</div>'+
                                '<input type="text" class="form-control" name="nombre_des[]" id="hijo" placeholder="Nombre" aria-label="Nombre" aria-describedby="addon-wrapping">'+
                        '</div>'+
                  '</td>'+
                  '<td>'+
                        '<div class="input-group flex-nowrap">'+
                                '<div class="input-group-prepend">'+
                                    '<span class="input-group-text" id="addon-wrapping">Ap</span>'+
                                '</div>'+
                                '<input type="text" class="form-control" name="ap_des[]" id="edad" placeholder="Paterno" aria-label="Nombre" aria-describedby="addon-wrapping">'+
                        '</div>'+
                 '</td>'+

                 '<td>'+
                        '<div class="input-group flex-nowrap">'+
                                '<div class="input-group-prepend">'+
                                    '<span class="input-group-text" id="addon-wrapping">Ap</span>'+
                                '</div>'+
                                '<input type="text" class="form-control" name="am_des[]" id="edad" placeholder="Materno" aria-label="Nombre" aria-describedby="addon-wrapping">'+
                        '</div>'+
                 '</td>'+
                 '<td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
        });
        $(document).on('click', '.btn_remove', function(){
             var button_id = $(this).attr("id");
             $('#row'+button_id+'').remove();
        });



            $('input[type="file"]').change(function(e){
                var fileName = e.target.files[0].name;

                var nom=$(this).data("name");
                $("#"+nom).html(fileName);
            });

            $('input[type="text"]').change(function(){
                $(this).css('background','rgb(234, 234, 234)');
                $(this).css('color','black');
            });

            {{-- DEL MENU --}}
            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
              });

            {{-- DEL MENU --}}



});//inicio


</script>


