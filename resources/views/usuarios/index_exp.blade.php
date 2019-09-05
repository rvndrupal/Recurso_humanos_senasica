@extends('layouts.admin')

{{--  @permission('read-usuariosSuper')  --}}
@permission('read-usuarios')
@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">{{ __("Exportar Usuarios") }}</h3>
        </div>
        <div class="box-body">
            <div id="categories_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="text-center">
                            <a class="toggle-vis btn btn-sm btn-info" data-column="1">Nombre</a>
                            <a class="toggle-vis btn btn-sm btn-info" data-column="2">Ap</a>
                            <a class="toggle-vis btn btn-sm btn-info" data-column="3">Am</a>
                            {{--  <a class="toggle-vis btn btn-sm btn-info" data-column="4">Curp</a>  --}}
                            {{--  <a class="toggle-vis btn btn-sm btn-info" data-column="5">Rfc</a>
                            <a class="toggle-vis btn btn-sm btn-info" data-column="6">Calle</a>
                            <a class="toggle-vis btn btn-sm btn-info" data-column="7">Número</a>
                            <a class="toggle-vis btn btn-sm btn-info" data-column="8">Email personal</a>  --}}
                        </div>

                        <table id="usuarios_exp" class="table table-bordered table-hover dataTable" role="grid">
                            <thead>
                                <tr>
                                    <th>{{ __("Id") }}</th>
                                    {{--  <th>{{ __("Foto") }}</th>  --}}
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


                                    <th>{{ __("Estado") }}</th>
                                    <th width="130">{{ __("Acciones") }}</th>
                                </tr>
                            </thead>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@endpermission

@push('js')
    <script>
        jQuery(document).ready(function ($) {
            //extender funcionalidad
            $.extend(true, $.fn.dataTable.defaults,{
                //info:false,
                //ordering:false,
                //searching:false,
                //Mostrar botones de impresion
                responsive: true,

            });



            //poner filtros de busqueda en el footer


            var dt = $("#usuarios_exp").DataTable({    //este es el ide de la tabla para que convierta en datatebles

                //stateSave: true, //se quede en el numero buscado importante
                //scrollX:true, //verificarlo despues
                pageLength: 2000,
                lengthMenu: [5, 10, 15, 20, 25, 50, 75, 100, 250, 500],
                processing: true,
                serverSide: true,

                ajax: '{{ route('usuarios.json') }}',
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json'
                },
                columns: [

                    { data: 'id' },
                    {{--  { data: 'foto',
                         "render": function (data, type, row) {
                           return '<img src="/recursos/public/Fotos/Usuarios/'+data+'" width="50px">'
                         }
                    },  --}}

                    { data: 'nom' },
                    { data: 'ap' },
                    { data: 'am' },
                    { data: 'fecha_nacimiento' },
                    { data: 'fecha_domicilio' },
                    { data: 'rfc' },
                    { data: 'curp' },
                    { data: 'calle' },
                    { data: 'numero' },
                    { data: 'correo_per' },
                    { data: 'correo_ins' },

                    { data: 'condicion',
                        "render": function (data, type, row) {
                            if (row.condicion == 1) {
                                return "<p class='activo_index'>Activo</p>"
                            }
                            else
                            {
                                return "<p class='desactivado_index'>Desactivado</p>"
                            }
                        }
                     },
                    { data: 'actions' }
                ],
                columnDefs:[
                    // { targets: [0], orderData:[0,1], visible: false, searching: false}, //ordena la columna uno
                ],

                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });

            //Detalles boton +


            //para los campos de busqueda


            //para mostrar columnas
            $("a.toggle-vis").on("click", function(e){
                e.preventDefault();
                var column= dt.column($(this).data("column"));
                column.visible( !column.visible());
            });




        });//jquery
    </script>
@endpush
