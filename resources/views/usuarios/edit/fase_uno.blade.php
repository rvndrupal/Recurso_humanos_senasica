    {{-- FASE UNO EDITAR --}}
    <div class="row foto">
            <div class="col-md-2">
                <div id="pre" class="load">

                </div>
            </div>
            <div class="col-md-2">
                    <label class="foto_tex">FOTO</label>
            </div>
            <div class="col-md-5">
                    <input type="file" class="form-control"  name="foto" id="previo" >
            </div>

    </div>

<div class="row">
    <div class="col-md-4">

        <div class="input-group flex-nowrap">

                 <div class="input-group-prepend">
                     <span class="input-group-text" id="addon-wrapping">Nom</span>
                 </div>
                 @foreach ($use as $item)
                 <input type="text" class="form-control" name="nom" id="nom" placeholder="Nombre" aria-label="Nombre" aria-label="Nombre"
                 aria-describedby="addon-wrapping" value="{{ $item->nom }}">
                 @endforeach
         </div>
     </div>

     <div class="col-md-4">
             <div class="input-group flex-nowrap">
                 <div class="input-group-prepend">
                     <span class="input-group-text" id="addon-wrapping">Ap</span>
                 </div>
                 @foreach ($use as $item)
                 <input type="text" class="form-control" name="ap" id="ap" placeholder="Apellido Paterno" aria-label="Apellido Paterno"
                 aria-describedby="addon-wrapping" value="{{ $item->ap }}">
                 @endforeach
             </div>
             <span id="error_ap" class="error">Falta el Apellido</span>
    </div>


     <div class="col-md-4">
             <div class="input-group flex-nowrap">
                 <div class="input-group-prepend">
                     <span class="input-group-text" id="addon-wrapping">Am</span>
                 </div>
                 @foreach ($use as $item)
                 <input type="text" class="form-control" name="am" id="am" placeholder="Apellido Materno" aria-label="Apellido Materno"
                  aria-describedby="addon-wrapping" value="{{ $item->am }}">
                 @endforeach
             </div>
     </div>
     <div class="col-md-4">
         <div class="input-group flex-nowrap">
                 <div class="input-group-prepend">
                 <span class="input-group-text" id="addon-wrapping">Pais</span>
             </div>
             <select  name="paises_id" class="form-control pais" data-live-search="true" data-size="7" placeholder="Pais" id="pais">
                     <option value="">Selecciona un Pais</option>
                     @foreach ($paiss as $item)
                     <option value="{{ $item->id }}"
                        @if($item->id === $sel_pais)
                        selected
                        @endif
                        >
                      {{ $item->nombre_pais }}
                    </option>
                     @endforeach
             </select>
         </div>
     </div>

     <div class="col-md-4">
         <div class="input-group flex-nowrap">
             <div class="input-group-prepend">
                 <span class="input-group-text" id="addon-wrapping">Rfc</span>
             </div>
             @foreach ($use as $item)
             <input type="text" class="form-control" name="rfc" id="rfc" placeholder="Rfc" aria-label="Apellido Materno"
              aria-describedby="addon-wrapping" value="{{ $item->rfc }}">
             @endforeach
         </div>
     </div>

     <div class="col-md-4">
         <div class="input-group flex-nowrap">
                 <div class="input-group-prepend">
                     <span class="input-group-text" id="addon-wrapping">Curp</span>
                 </div>
                 @foreach ($use as $item)
                 <input type="text" class="form-control" name="curp" id="curp" placeholder="Rfc" aria-label="Apellido Materno"
                 aria-describedby="addon-wrapping" value="{{ $item->curp }}">
                 @endforeach
         </div>
     </div>


     <div class="col-md-4">
         <div class="input-group flex-nowrap">
             <div class="input-group-prepend">
                 <span class="input-group-text" id="addon-wrapping">@</span>
             </div>
             @foreach ($use as $item)
             <input type="email" class="form-control"  name="correo_per" id="correo_per" placeholder="Correo Personal" aria-label="Username"
             aria-describedby="addon-wrapping" value="{{ $item->correo_per }}">
             @endforeach
         </div>
     </div>
     <div class="col-md-4">
         <div class="input-group flex-nowrap">
             <div class="input-group-prepend">
                 <span class="input-group-text" id="addon-wrapping">@</span>
             </div>
             @foreach ($use as $item)
             <input type="email" class="form-control"  name="correo_ins" id="correo_ins" placeholder="Correo Institucional" aria-label="Username"
             aria-describedby="addon-wrapping" value="{{ $item->correo_ins }}">
             @endforeach
         </div>
     </div>
     <div class="col-md-4">
         <div class="input-group flex-nowrap">
             <div class="input-group-prepend">
                 <span class="input-group-text" id="addon-wrapping">Casa</span>
             </div>
             @foreach ($use as $item)
             <input type="text" class="form-control" name="tel_casa" id="tel_casa" placeholder="Telefono de casa" aria-label="Nombre"
             aria-describedby="addon-wrapping" value="{{ $item->tel_casa }}">
             @endforeach
         </div>
     </div>

     <div class="col-md-4">
         <div class="input-group flex-nowrap">
                 <div class="input-group-prepend">
                     <span class="input-group-text" id="addon-wrapping">Movil</span>
                 </div>
                 @foreach ($use as $item)
                 <input type="text" class="form-control" name="tel_movil" id="tel_movil" placeholder="Telefono movil" aria-label="Nombre"
                 aria-describedby="addon-wrapping" value="{{ $item->tel_movil }}">
                 @endforeach
         </div>
     </div>
     <div class="col-md-2">
            <h6 class="foto_tex2">Fecha de Nacimiento</h6>
        </div>
     <div class="col-md-4">
             {{--  <div class="input-group flex-nowrap">
                 <div class="input-group-prepend">  --}}
                     {{--  <span class="input-group-text" id="addon-wrapping">Fecha Nacimiento</span>
                 </div>  --}}
                 @foreach ($use as $item)
                 <input type="text" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" placeholder="Fecha de Nacimiento" aria-label="Nombre"
                 aria-describedby="addon-wrapping" value="{{ $item->fecha_nacimiento }}">
                 @endforeach
                 {{--  </div>  --}}
     </div>
</div>



    <div class="row rfc">
            <div class="col-md-1">
                    <label class="foto_tex">RFC</label>
            </div>

          <div class="col-md-5">
                @foreach ($use as $item)
                <input type="file" class="form-control"  id="carga_rfc"  name="carga_rfc" value="{{ $item->carga_rfc}}" >
                @endforeach
          </div>
    </div>

    <div class="row curp">
        <div class="col-md-1">
        <label class="foto_tex">CURP</label>
        </div>
        <div class="col-md-5">
            <input type="file" class="form-control"  name="carga_curp" id="carga_curp" >
        </div>
    </div>

    <div class="row curp">
        <div class="col-md-1">
        <label class="foto_tex">IFE</label>
        </div>
        <div class="col-md-5">
                <input type="file" class="form-control"  name="carga_ife" id="carga_ife" >
        </div>
    </div>





<input type="button" name="next" id="validar" class="next action-button" value="Siguiente" />






