{{--  @extends('layouts.admin')  --}}

{{--  @permission('read-usuariosSuper')  --}}
{{--  @permission('read-usuarios')
@section('content')  --}}
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="{{ asset('css/jquery-ui.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/jquery-ui.theme.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/estilos.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.4.2/css/buttons.dataTables.min.css">
    {{--  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.4.2/css/buttons.dataTables.min.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/select/1.2.3/css/select.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">  --}}





            <h3 class="box-title">{{ __("Exportar Usuarios") }}</h3>



                <div class="row">
                    <div class="col-sm-12">


                        <table id="usuarios_exp" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>{{ __("Id") }}</th>
                                    <th>{{ __("Nombre") }}</th>
                                    <th>{{ __("Apellido paterno") }}</th>
                                    <th>{{ __("Apellido materno") }}</th>
                                    <th>{{ __("Fecha de Nacimiento") }}</th>
                                    <th>{{ __("Fecha de Domicilio") }}</th>
                                    <th>{{ __("Rfc") }}</th>
                                    <th>{{ __("Curp") }}</th>
                                    <th>{{ __("Calle") }}</th>
                                    <th>{{ __("Numero") }}</th>
                                    <th>{{ __("Correo Personal") }}</th>
                                    <th>{{ __("Correo Institucional") }}</th>
                                    <th>{{ __("Tel casa") }}</th>
                                    <th>{{ __("Movil") }}</th>
                                    <th>{{ __("Nombre conyuge") }}</th>
                                    <th>{{ __("Paterno conyuge") }}</th>
                                    <th>{{ __("Materno conyuge") }}</th>
                                    <th>{{ __("Hijo")}}</th>





                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($usuarios as  $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->nom }}</td>
                                    <td>{{ $user->ap }}</td>
                                    <td>{{ $user->am }}</td>
                                    <td>{{ $user->fecha_nacimiento }}</td>
                                    <td>{{ $user->fecha_domicilio }}</td>
                                    <td>{{ $user->rfc }}</td>
                                    <td>{{ $user->curp }}</td>
                                    <td>{{ $user->calle }}</td>
                                    <td>{{ $user->numero }}</td>
                                    <td>{{ $user->correo_per }}</td>
                                    <td>{{ $user->correo_ins }}</td>
                                    <td>{{ $user->tel_casa }}</td>
                                    <td>{{ $user->tel_movil }}</td>
                                    <td>{{ $user->conyuges[0]->nombres_coy }}</td>
                                    <td>{{ $user->conyuges[0]->primero_coy }}</td>
                                    <td>{{ $user->conyuges[0]->segundo_coy }}</td>
                                    {{--  @if(count($user->solteros) != 0)  --}}
                                        @foreach($user->solteros as $hijos)

                                            <td>{{ $hijos->nombre_hijo }} Curp: {{ $hijos->curp_hijo }}</td>

                                        @endforeach
                                    {{--  @else
                                        <td>0</td>
                                    @endif  --}}

                                </tr>

                                @endforeach

                            </tbody>

                        </table>
                        <div class="text-center">
                                <a class="toggle-vis btn btn-sm btn-info" data-column="1">Nombre</a>
                                <a class="toggle-vis btn btn-sm btn-info" data-column="2">Ap</a>
                                <a class="toggle-vis btn btn-sm btn-info" data-column="3">Am</a>
                                <a class="toggle-vis btn btn-sm btn-info" data-column="4">Fecha de Nacimiento</a>
                                <a class="toggle-vis btn btn-sm btn-info" data-column="5">Fecha Domicilio</a>
                                <a class="toggle-vis btn btn-sm btn-info" data-column="6">Rfc</a>
                                <a class="toggle-vis btn btn-sm btn-info" data-column="7">Curp</a>
                                <a class="toggle-vis btn btn-sm btn-info" data-column="8">Calle</a>
                                <a class="toggle-vis btn btn-sm btn-info" data-column="9">Numero</a>
                                <a class="toggle-vis btn btn-sm btn-info" data-column="10">Correo Personal</a>
                                <a class="toggle-vis btn btn-sm btn-info" data-column="11">Correo Institucional</a>
                            </div>
                    </div>
                </div>



{{--  @endsection

@endpermission  --}}


<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

<script src="//cdn.datatables.net/buttons/1.4.2/js/dataTables.buttons.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.4.2/js/buttons.flash.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src=" //cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script src="//cdn.datatables.net/buttons/1.4.2/js/buttons.html5.min.js"></script>
<script src=" //cdn.datatables.net/buttons/1.4.2/js/buttons.print.min.js"></script>






<script>
        $(document).ready(function() {
          var dt=$('#usuarios_exp').DataTable( {
                 "scrollX": true,

                 dom: 'Bfrtip',
                 buttons: [
                     {{--  'copy', 'csv', 'excel', 'pdf',  --}}
                     {
                        extend: 'excel',
                        exportOptions: {
                         columns: ':visible'
                        },

                     }
                 ]
            });

            //para mostrar columnas
            $("a.toggle-vis").on("click", function(e){
                e.preventDefault();
                var column= dt.column($(this).data("column"));
                column.visible( !column.visible());
                if(!column.visible()){
                    $(this).removeClass('btn-info');
                }else{
                    $(this).addClass('btn-info');
                }
            });




        });
</script>

