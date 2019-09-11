@permission('update-user')
    <a
        href="{{ route('user.edit', ['id' => $id]) }}"
        title="{{ __('Actualizar usuario') }}"
        data-id="{{ $id }}"
        class="btn btn-sm btn-primary"
    >
        <i class="fa fa-pencil-alt"></i>
    </a>
@endpermission

{{--  @permission('delete-user')
<a
    href="#"
    data-route="{{ route('user.destroy', ['id' => $id]) }}"
    title="{{ __('Eliminar usuario') }}"
    data-id="{{ $id }}"
    class="btn btn-danger btn-remove"
>
    <i class="fa fa-trash-alt"></i>
</a>
@endpermission  --}}


{{--  @permission('delete-user')
{!! Form::open(['route' => ['user.destroy', 'id' => $id], 'method' => 'DELETE']) !!}
<button class="btn btn-sm btn-danger eliminar" style="margin: -53px 0 0 39px;">
        <i class="fa fa-trash-alt"></i>
</button>

{!! Form::close() !!}
@endpermission  --}}

@permission('activar-user')
<a
    href="{{ route('user.activar', ['id' => $id]) }}"
    title="{{ __('Activar carnet') }}"
    data-id="{{ $id }}"
    class="btn btn-sm btn-success activo">
    <i class="fa fa-check"></i>
</a>
@endpermission


@permission('desactivar-user')
<a
    href="{{ route('user.desactivar', ['id' => $id]) }}"
    title="{{ __('Eliminar carnet') }}"
    data-id="{{ $id }}"
    class="btn btn-sm btn-danger desactivar"
>
    <i class="fa fa-trash-alt"></i>
</a>
@endpermission




