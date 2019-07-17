@permission('update-usuarios')
    <a
        href="{{ route('usuarios.edit', ['id' => $id]) }}"
        title="{{ __('Actualizar carnet') }}"
        data-id="{{ $id }}"
        class="btn btn-primary"
    >
        <i class="fa fa-pencil-alt"></i>
    </a>
@endpermission

@permission('delete-usuarios')
<a
    href="#"
    data-route="{{ route('usuarios.destroy', ['id' => $id]) }}"
    title="{{ __('Eliminar carnet') }}"
    data-id="{{ $id }}"
    class="btn btn-danger btn-remove"
>
    <i class="fa fa-trash-alt"></i>
</a>
@endpermission
