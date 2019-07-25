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
                       <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="addon-wrapping">Nom</span>
                                </div>
                                <input type="text" class="form-control" name="nom" id="nom" placeholder="Nombre" aria-label="Nombre" aria-describedby="addon-wrapping">
                        </div>
                    </div>

                    <div class="col-md-4">
                            <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="addon-wrapping">Ap</span>
                                </div>
                                <input type="text" class="form-control" name="ap" id="ap" placeholder="Apellido Paterno" aria-label="Apellido Paterno" aria-describedby="addon-wrapping">
                            </div>
                        </div>
                    <div class="col-md-4">
                            <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="addon-wrapping">Am</span>
                                </div>
                                <input type="text" class="form-control" name="am" id="am" placeholder="Apellido Materno" aria-label="Apellido Materno" aria-describedby="addon-wrapping">
                            </div>
                    </div>

                    <div class="col-md-6">
                        <div class="input-group flex-nowrap">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="addon-wrapping">Rfc</span>
                            </div>
                            <input type="text" class="form-control" name="rfc" id="rfc" placeholder="Rfc" aria-label="Apellido Materno" aria-describedby="addon-wrapping">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="input-group flex-nowrap">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupFileAddon01">Rfc</span>
                                </div>
                                <div class="custom-file">
                                <input type="file" class="custom-file-input"  id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="carga_rfc" >
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>
                        </div>
                     </div>

                    <div class="col-md-6">
                        <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="addon-wrapping">Curp</span>
                                </div>
                                <input type="text" class="form-control" name="curp" id="curp" placeholder="Rfc" aria-label="Apellido Materno" aria-describedby="addon-wrapping">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="input-group flex-nowrap">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupFileAddon01">Curp</span>
                                </div>
                                <div class="custom-file">
                                <input type="file" class="custom-file-input" name="carga_curp" id="carga_curp"  aria-describedby="inputGroupFileAddon01">
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupFileAddon01">Ife</span>
                                    </div>
                                    <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="carga_ife" id="inputGroupFileAddon01"  aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="input-group flex-nowrap">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="addon-wrapping">@</span>
                            </div>
                            <input type="text" class="form-control"  name="correo_per" id="correo_per" placeholder="Correo Personal" aria-label="Username" aria-describedby="addon-wrapping">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="input-group flex-nowrap">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="addon-wrapping">@</span>
                            </div>
                            <input type="text" class="form-control"  name="correo_ins" id="correo_ins" placeholder="Correo Institucional" aria-label="Username" aria-describedby="addon-wrapping">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="input-group flex-nowrap">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="addon-wrapping">Casa</span>
                            </div>
                            <input type="text" class="form-control" name="tel_casa" id="tel_casa" placeholder="Telefono de casa" aria-label="Nombre" aria-describedby="addon-wrapping">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="addon-wrapping">Movil</span>
                                </div>
                                <input type="text" class="form-control" name="tel_movil" id="tel_movil" placeholder="Telefono movil" aria-label="Nombre" aria-describedby="addon-wrapping">
                        </div>
                    </div>

                    <div class="col-md-6">
                            <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="addon-wrapping">Fecha Nacimiento</span>
                                </div>
                                <input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" placeholder="Telefono movil" aria-label="Nombre" aria-describedby="addon-wrapping">
                            </div>
                    </div>


                    <div class="col-md-6">
                        <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupFileAddon01">Foto</span>
                                    </div>
                                    <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="foto" id="foto"  aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                </div>
                        </div>
                    </div>


            </div>



            <input type="button" name="next" id="validar" class="next action-button" value="Siguiente" />

        </fieldset>
        <fieldset>
            <h2 class="fs-title">DOMICILIO PARTICULAR</h2>
            <h3 class="fs-subtitle">Datos Particulares</h3>
            <div class="row">
                    <div class="col-md-4">
                        <div class="input-group flex-nowrap">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="addon-wrapping">Pais</span>
                            </div>
                            <select class="form-control" name="pais_id" placeholder="Pais" id="pais">
                                    <option value="">Selecciona un Pais</option>
                                @foreach ($pais as $item)
                                <option value="{{ $item->id }}">{{ $item->nombre_pais }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                        <div class="col-md-4">
                                <div class="input-group flex-nowrap">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="addon-wrapping">Estado</span>
                                    </div>
                                    <select class="form-control" name="estados_id" placeholder="Estado" id="estado">
                                            <option value="">Estado</option>
                                        </select>
                                </div>
                        </div>

                        <div class="col-md-4">
                            <div class="input-group flex-nowrap">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="addon-wrapping">Colonia</span>
                                    </div>
                                    <select class="form-control" name="colonias_id" placeholder="Colonia" id="colonia">
                                            <option value="">Colonia</option>
                                    </select>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="input-group flex-nowrap">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="addon-wrapping">CP</span>
                                    </div>
                                    <select class="form-control" name="codigos_id" placeholder="codigo" id="codigo">
                                            <option value="">CP</option>
                                    </select>
                            </div>
                        </div>

                        <div class="col-md-8">
                                <div class="input-group flex-nowrap">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="addon-wrapping">Calle</span>
                                    </div>
                                    <input type="text" class="form-control" name="calle" id="calle" placeholder="Calle" aria-label="Apellido Materno" aria-describedby="addon-wrapping">
                                </div>
                        </div>

                        <div class="col-md-2">
                            <div class="input-group flex-nowrap">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="addon-wrapping">'#'</span>
                                    </div>
                                    <input type="text" class="form-control" name="numero" id="numero" placeholder="Num" aria-label="Apellido Materno" aria-describedby="addon-wrapping">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="addon-wrapping">Municipio</span>
                                </div>
                                <input type="text" class="form-control" name="municipio" id="municipio" placeholder="Municipio" aria-label="Apellido Materno" aria-describedby="addon-wrapping">
                            </div>
                        </div>

                        <div class="col-md-6">
                                <div class="input-group flex-nowrap">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupFileAddon01">Domicilio</span>
                                            </div>
                                            <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="carga_domicilio" id="inputGroupFileAddon01"  aria-describedby="inputGroupFileAddon01">
                                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                        </div>
                                </div>
                            </div>

                        <div class="col-md-7">
                            <div class="input-group flex-nowrap">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="addon-wrapping">Fecha Domicilio</span>
                                    </div>
                                    <input type="date" class="form-control" name="fecha_domicilio" id="fecha_domicilio" placeholder="Fecha" aria-label="Nombre" aria-describedby="addon-wrapping">
                            </div>
                        </div>



            </div>
            <input type="button" name="previous" class="previous action-button" value="Previous" />
            <input type="button" name="next" id="validar" class="next action-button" value="Siguiente" />

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

                            <div id="conHijos">
                                <div class="col-md-12">

                                    <table class="table table-bordered" id="dynamic_field">
                                            <tr>
                                                    <td>
                                                            <div class="input-group flex-nowrap">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text" id="addon-wrapping">Nombre</span>
                                                                    </div>
                                                                    <input type="text" class="form-control" name="nombre[]" id="hijo" placeholder="Nombre" aria-label="Nombre" aria-describedby="addon-wrapping">
                                                            </div>
                                                    </td>
                                                    <td>
                                                            <div class="input-group flex-nowrap">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text" id="addon-wrapping">Edad</span>
                                                                    </div>
                                                                    <input type="text" class="form-control" name="edad[]" id="edad" placeholder="Nombre" aria-label="Nombre" aria-describedby="addon-wrapping">
                                                            </div>
                                                    </td>
                                                    <td><button type="button" name="add" id="add" class="btn btn-success">+</button></td>
                                            </tr>
                                    </table>

                                </div>

                            </div>{{-- Con hijos --}}




                            <div id="sinHijos">
                            </div>{{-- -Sin hijos --}}




                         </div>{{-- Soltero --}}

                         <div id="casado">
                                <div class="col-md-4" >
                                    <h1>casado</h1>
                                </div>
                         </div>

                         <div id="viudo">
                                <div class="col-md-4" >
                                    <h1>Viudo</h1>
                                </div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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


        //estado civil ocultar
        $('#estado_civil').change(function(){

            var seleccion=$(this).val();

            if(seleccion=='1')
            {
                $('#soltero').show(500);
                $('#casado').hide();
                $('#viudo').hide();
                $('#conHijos').hide();
                $('#sinHijos').hide();
            }
            if(seleccion=='2'){
                $('#soltero').hide();
                $('#casado').show(500);
                $('#viudo').hide();
            }

            if(seleccion=='3'){
                $('#soltero').hide();
                $('#casado').hide();
                $('#viudo').show(500);
            }

        });

        //soltero
        $('#hijos').change(function(){

            var seleccion=$(this).val();


            if(seleccion=='si')
            {
                $('#conHijos').show(500);
                $('#sinHijos').hide();
            }
            if(seleccion=='no'){
                $('#conHijos').hide();
                $('#sinHijos').show(500);

                $('#conHijos').html(""); //limpiar con hijos

                $('#sinHijos').html('<table class="table table-bordered" id="dynamic_field">'+
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

            }
        });

        //multiples campos hijos
        var i=1;
        $('#add').click(function(){
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
        $('#submit').click(function(){
             $.ajax({
                  url:"name.php",
                  method:"POST",
                  data:$('#add_name').serialize(),
                  success:function(data)
                  {
                       alert(data);
                       $('#add_name')[0].reset();
                  }
             });
        });

















});//inicio


</script>
