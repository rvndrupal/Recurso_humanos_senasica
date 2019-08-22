@foreach ($use[0]->solteros as $item)

<tr class="hijos" id="row'+i+'">
    <td>
           <div class="input-group flex-nowrap">
                   <div class="input-group-prepend">
                       <span class="input-group-text" id="addon-wrapping">Nombre</span>
                   </div>
                   <input type="text" class="form-control" data-valor="'+i+'" name="nombre_hijo[]" id="sol_hijo'+i+'" placeholder="Nombre" aria-label="Nombre"
                   aria-describedby="addon-wrapping" value="{{ $item->nombre_hijo }}">
           </div>
     </td>

    <td>
           <div class="input-group flex-nowrap">
                   <div class="input-group-prepend">
                       <span class="input-group-text" id="addon-wrapping">Curp</span>
                   </div>
                   <input type="text" class="form-control" data-valor="'+i+'" name="curp_hijo[]" id="curp_hijo'+i+'" placeholder="Curp"
                   aria-label="Nombre" aria-describedby="addon-wrapping" value="{{ $item->curp_hijo }}">
           </div>
     </td>

     {{-- <td>
           <div class="col-md-12">
                   <input type="file" class="form-control"  id="carga_curp_hijo"  name="carga_curp_hijo[]" >
           </div>
       </div>
     </td> --}}
     <td>
         <div class="row">
          <div class="col-md-5">
                <div class="image-upload-curp-hijo" {{ $loop->index+1 }}>
                    <label for="file-input-curp-hijo">
                        <img src="{{ asset('img/subir2.jpg') }}" alt ="Click aquí para subir tu foto" title ="Click aquí para subir tu foto" >
                    </label>
                    <input id="file-input-curp-hijo" type="file"  class="form-control" name="carga_curp_hijo[]"/>
                </div>
          </div>
            <div class="col-md-6">

                    <div id="previa-curp-hijo" {{ $loop->index+1 }}>
                    <img src="http://localhost/recursos/public/{{ $item->carga_curp_hijo }}" width="100px" height="70px" alt="">
                    {{--  <input type="file" class="form-control"  id="carga_rfc"  name="carga_rfc">  --}}
                    </div>
                    <div id="img_pre-curp-hijo" {{ $loop->index+1 }}>

                    </div>

            </div>
        </div>
     </td>


    <td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td>
</tr>
@endforeach
