@extends('layouts.admin')

@permission('read-categories')
@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">{{ __("Listado de los Carnet") }}</h3>
        </div>
        <div class="box-body">
            <div id="categories_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                <div class="row">
                    <div class="col-sm-12">
                        <table id="usuarios" class="table table-bordered table-hover dataTable" role="grid">
                            <thead>
                                <tr>
                                    <th>{{ __("ID") }}</th>
                                    <th>{{ __("Nombre") }}</th>
                                    <th>{{ __("Apellido paterno") }}</th>
                                    <th>{{ __("Apellido materno") }}</th>
                                    <th>{{ __("Correo institucional") }}</th>
                                    <th>{{ __("Celular") }}</th>
                                    <th>{{ __("Rfc") }}</th>
                                    <th>{{ __("Foto") }}</th>
                                    <th width="60">{{ __("Acciones") }}</th>
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
            dt = $("#usuarios").DataTable({    //este es el ide de la tabla para que convierta en datatebles
                pageLength: 5,
                lengthMenu: [5, 10, 25, 50, 75, 100, 250, 500],
                processing: true,
                serverSide: true,
                ajax: '{{ route('usuarios.json') }}',
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json'
                },
                columns: [
                    { data: 'id', visible: false },
                    { data: 'nom' },
                    { data: 'ap' },
                    { data: 'am' },
                    { data: 'correo_inst' },
                    { data: 'tel_cel' },
                    { data: 'rfc' },
                    { data: 'foto' },
                    { data: 'actions' }
                ]
            })
        })
    </script>
@endpush
