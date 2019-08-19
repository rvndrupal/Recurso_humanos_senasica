
@permission('show-usuarios')
<a
    href="{{ route('usuarios.show', ['id' => $id]) }}"
    title="{{ __('Ver') }}"
    data-id="{{ $id }}"
    class="btn btn-sm btn-info"s
>
    <i class="fa fa-eye"></i>
</a>
@endpermission



@permission('update-usuarios')
    <a
        href="{{ route('usuarios.edit', ['id' => $id]) }}"
        title="{{ __('Actualizar carnet') }}"
        data-id="{{ $id }}"
        class="btn btn-sm btn-primary"
    >
        <i class="fa fa-pencil-alt"></i>
    </a>
@endpermission

{{--  @permission('read-usuarios')  --}}
@permission('desactivar-usuarios')
<a
    href="{{ route('usuarios.desactivar', ['id' => $id]) }}"
    title="{{ __('Eliminar carnet') }}"
    data-id="{{ $id }}"
    class="btn btn-sm btn-danger btn-remove"
>
    <i class="fa fa-trash-alt"></i>
</a>
@endpermission


{{--  @permission('read-usuarios')  --}}
@permission('activar-usuarios')
<a
    href="{{ route('usuarios.activar', ['id' => $id]) }}"
    title="{{ __('Activar carnet') }}"
    data-id="{{ $id }}"
    class="btn btn-sm btn-success btn-remove"
>
    <i class="fa fa-check"></i>
</a>
@endpermission

