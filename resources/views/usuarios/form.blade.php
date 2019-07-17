@extends('layouts.admin')

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">{{ __('Formulario Carnet') }}</h3>
        </div>

        <div class="box-body">
            @if($usuarios->exists)
                {{ Form::model($usuarios, ['url' => route('usuarios.update', ['id' => $usuarios->id]), 'method' => 'put']) }}
            @else
                {{ Form::model($usuarios, ['url' => route('usuarios.store')]) }}
            @endif

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                {{ Form::label('nom', __('Nombre'), ['class' => 'control-label']) }}
                {{ Form::text('nom', null, ['class' => ['form-control'], 'id' => 'name']) }}
                @if($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('nom') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="box-footer">
            <a href="{{ route('categories.index') }}" class="btn btn-default">{{ __('Volver') }}</a>
            {{ Form::submit($title, ['class' => 'btn btn-info pull-right']) }}
            {{ Form::close() }}
        </div>

    </div>
@stop
