@extends('layouts.admin')

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">{{ __('Importar') }}</h3>
        </div>

        <div class="box-body">
            <div class="row">
                <div class="col-md-6">
                    <form action="{{ route('import.pais') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="file" id="" accept=".csv">
                        <br>
                        <button class="btn btn-success">Importar Archivo CSV</button>
                    </form>
                </div>


            </div>
        </div>

        <div class="box-footer">
            <a href="{{ route('paises.index') }}" class="btn btn-default">{{ __('Volver') }}</a>
        </div>

    </div>
@stop
