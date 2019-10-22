<table>
        <thead>
        <tr>
            <th>id</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Fecha de Nacimineto</th>
            <th>Fecha domicilio</th>
            <th>Rfc</th>
            <th>Curp</th>
            <th>Calle</th>
            <th>Numero</th>
            <th>Correo Personal</th>
            <th>Correo Institucional</th>
            <th>Tel Casa</th>
            <th>Tel Movil</th>
            <th>Pais</th>
            <th>Estado</th>
            <th>Municipio</th>
            <th>Colonia</th>
            <th>Cp</th>
            <th>Calle</th>
            <th>Numero</th>
            <th>Fecha Domicilio</th>
            <th>Estado Civil</th>
            {{--  <th>Nombre Conyuge</th>
            <th>Ap Conyuge</th>
            <th>Am Conyuge</th>
            <th>Curp Conyuge</th>  --}}


            <th>Hijos</th>
            <th>Dependientes</th>
            <th>Grado</th>


        </tr>
        </thead>
        <tbody>
        @foreach($usuarios as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nom }}</td>
                <td>{{ $item->ap }}</td>
                <td>{{ $item->am }}</td>
                <td>{{ $item->fecha_nacimiento }}</td>
                <td>{{ $item->fecha_domicilio }}</td>
                <td>{{ $item->rfc }}</td>
                <td>{{ $item->curp }}</td>
                <td>{{ $item->calle }}</td>
                <td>{{ $item->numero }}</td>
                <td>{{ $item->correo_per }}</td>
                <td>{{ $item->correo_ins }}</td>
                <td>{{ $item->tel_casa }}</td>
                <td>{{ $item->tel_movil }}</td>
                <td>{{ $item->paises->nombre_pais }}</td>
                <td>{{ $item->estados->nombre }}</td>
                <td>{{ $item->municipios->nombre_mun }}</td>
                <td>{{ $item->colonias->nombre_col }}</td>
                <td>{{ $item->colonias->codigo_postal }}</td>
                <td>{{ $item->calle }}</td>
                <td>{{ $item->numero }}</td>
                <td>{{ $item->fecha_domicilio }}</td>
                <td>{{ $item->estadoCivil->nombre }}</td>
                {{--  @if($item->conyuges->nombres_coy)
                <td>{{ $item->conyuges[0]->nombres_coy }}</td>
                <td>{{ $item->conyuges->primero_coy }}</td>
                <td>{{ $item->conyuges->segundo_coy }}</td>
                <td>{{ $item->conyuges->curp_coy }}</td>
                @else
                <td>Sin Conyuge</td>
                <td>Sin Conyuge</td>
                <td>Sin Conyuge</td>
                <td>Sin Conyuge</td>
                @endif  --}}


                @foreach ($item->solteros as $hijos)
                <td>Nombre: {{ $hijos->nombre_hijo }} | Curp: {{ $hijos->curp_hijo }}</td><p></p>
                @endforeach

                @foreach ($item->Descensientes as $dep)
                <td>Nombre: {{ $dep->nombre_des }} | Ap: {{ $dep->ap_des }} | Am: {{ $dep->am_des }}</td><p></p>
                @endforeach
                <td>{{ $item->DetalleEscolaridades[0]->grados_id }}</td>


            </tr>
        @endforeach
        </tbody>
    </table>
