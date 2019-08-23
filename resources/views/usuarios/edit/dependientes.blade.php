@foreach ($use[0]->Descensientes as $item)
<tr class="dependientes" id="row{{ $loop->index+1 }}">
        <td>
               <div class="input-group flex-nowrap">
                       <div class="input-group-prepend">
                           <span class="input-group-text" id="addon-wrapping">Nombre</span>
                       </div>
                       <input type="text" class="form-control" data-valor="'+i+'" name="nombre_des[]" id="nombre_des'+i+'" placeholder="Nombre"
                       aria-label="Nombre" aria-describedby="addon-wrapping" value="{{ $item->nombre_des }}">

               </div>
         </td>
         <td>
               <div class="input-group flex-nowrap">
                       <div class="input-group-prepend">
                           <span class="input-group-text" id="addon-wrapping">Apellido</span>
                       </div>
                       <input type="text" class="form-control" data-valor="'+i+'" name="ap_des[]" id="ap_des'+i+'" placeholder="paterno" aria-label="Nombre"
                       aria-describedby="addon-wrapping" value="{{ $item->ap_des }}">
               </div>
        </td>

        <td>
               <div class="input-group flex-nowrap">
                       <div class="input-group-prepend">
                           <span class="input-group-text" id="addon-wrapping">Apellido</span>
                       </div>
                       <input type="text" class="form-control" data-valor="'+i+'" name="am_des[]" id="am_des'+i+'" placeholder="materno"
                       aria-label="Nombre" aria-describedby="addon-wrapping" value="{{ $item->am_des }}">
               </div>
        </td>

        <td><button type="button" name="remove" id="{{ $loop->index+1 }}" class="btn btn-danger btn_remove">X</button></td>
</tr>
@endforeach
