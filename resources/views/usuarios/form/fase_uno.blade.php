<div class="col-md-4">

        <div class="input-group flex-nowrap">

                 <div class="input-group-prepend">
                     <span class="input-group-text" id="addon-wrapping">Nom</span>
                 </div>
                 <input type="text" class="form-control" name="nom" id="nom" placeholder="Nombre" aria-label="Nombre" aria-describedby="addon-wrapping">
         </div>
         <span id="error_nom" class="error">Falta el nombre</span>
     </div>
     <div class="col-md-4">
             <div class="input-group flex-nowrap">
                 <div class="input-group-prepend">
                     <span class="input-group-text" id="addon-wrapping">Ap</span>
                 </div>
                 <input type="text" class="form-control" name="ap" id="ap" placeholder="Apellido Paterno" aria-label="Apellido Paterno" aria-describedby="addon-wrapping">
             </div>
             <span id="error_ap" class="error">Falta el Apellido</span>
         </div>
     <div class="col-md-4">
             <div class="input-group flex-nowrap">
                 <div class="input-group-prepend">
                     <span class="input-group-text" id="addon-wrapping">Am</span>
                 </div>
                 <input type="text" class="form-control" name="am" id="am" placeholder="Apellido Materno" aria-label="Apellido Materno" aria-describedby="addon-wrapping">
             </div>
     </div>
     <div class="col-md-4">
         <div class="input-group flex-nowrap">
                 <div class="input-group-prepend">
                 <span class="input-group-text" id="addon-wrapping">Pais</span>
             </div>
             <select  name="paises_id" class="estados_select" placeholder="Pais">
                     <option value="">Pais</option>
                     @foreach ($pais as $item)
                     <option value="{{ $item->id }}">{{ $item->nombre_pais }}</option>
                     @endforeach
             </select>
         </div>
     </div>
     <div class="col-md-3">
         <div class="input-group flex-nowrap">
             <div class="input-group-prepend">
                 <span class="input-group-text" id="addon-wrapping">Rfc</span>
             </div>
             <input type="text" class="form-control" name="rfc" id="rfc" placeholder="Rfc" aria-label="Apellido Materno" aria-describedby="addon-wrapping">
         </div>
     </div>
     <div class="col-md-5">
         <div class="input-group flex-nowrap">
             <div class="input-group-prepend">
                 <span class="input-group-text" id="inputGroupFileAddon01">Rfc</span>
                 </div>
                 <div class="custom-file">
                 <input type="file" class="custom-file-input" data-name="rfcc" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="carga_rfc" >
                 <label class="custom-file-label" id="rfcc" for="inputGroupFile01">Choose file</label>
             </div>
         </div>
      </div>
     <div class="col-md-4">
         <div class="input-group flex-nowrap">
                 <div class="input-group-prepend">
                     <span class="input-group-text" id="addon-wrapping">Curp</span>
                 </div>
                 <input type="text" class="form-control" name="curp" id="curp" placeholder="Rfc" aria-label="Apellido Materno" aria-describedby="addon-wrapping">
         </div>
     </div>
     <div class="col-md-4">
         <div class="input-group flex-nowrap">
             <div class="input-group-prepend">
                 <span class="input-group-text" id="inputGroupFileAddon01">Curp</span>
                 </div>
                 <div class="custom-file">
                 <input type="file" class="custom-file-input" data-name="curpp" name="carga_curp" id="carga_curp"  aria-describedby="inputGroupFileAddon01">
                 <label class="custom-file-label" id="curpp" for="inputGroupFile01">Choose file</label>
             </div>
         </div>
     </div>
     <div class="col-md-4">
         <div class="input-group flex-nowrap">
                 <div class="input-group-prepend">
                     <span class="input-group-text" id="inputGroupFileAddon01">Ife</span>
                     </div>
                     <div class="custom-file">
                     <input type="file" class="custom-file-input" data-name="ifee" name="carga_ife" id="inputGroupFileAddon01"  aria-describedby="inputGroupFileAddon01">
                     <label class="custom-file-label" id="ifee" for="inputGroupFile01">Choose file</label>
                 </div>
         </div>
     </div>
     <div class="col-md-4">
         <div class="input-group flex-nowrap">
             <div class="input-group-prepend">
                 <span class="input-group-text" id="addon-wrapping">@</span>
             </div>
             <input type="text" class="form-control"  name="correo_per" id="correo_per" placeholder="Correo Personal" aria-label="Username" aria-describedby="addon-wrapping">
         </div>
     </div>
     <div class="col-md-4">
         <div class="input-group flex-nowrap">
             <div class="input-group-prepend">
                 <span class="input-group-text" id="addon-wrapping">@</span>
             </div>
             <input type="text" class="form-control"  name="correo_ins" id="correo_ins" placeholder="Correo Institucional" aria-label="Username" aria-describedby="addon-wrapping">
         </div>
     </div>
     <div class="col-md-4">
         <div class="input-group flex-nowrap">
             <div class="input-group-prepend">
                 <span class="input-group-text" id="addon-wrapping">Casa</span>
             </div>
             <input type="text" class="form-control" name="tel_casa" id="tel_casa" placeholder="Telefono de casa" aria-label="Nombre" aria-describedby="addon-wrapping">
         </div>
     </div>
     <div class="col-md-4">
         <div class="input-group flex-nowrap">
                 <div class="input-group-prepend">
                     <span class="input-group-text" id="addon-wrapping">Movil</span>
                 </div>
                 <input type="text" class="form-control" name="tel_movil" id="tel_movil" placeholder="Telefono movil" aria-label="Nombre" aria-describedby="addon-wrapping">
         </div>
     </div>
     <div class="col-md-4">
             <div class="input-group flex-nowrap">
                 <div class="input-group-prepend">
                     <span class="input-group-text" id="addon-wrapping">Fecha Nacimiento</span>
                 </div>
                 <input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" placeholder="Telefono movil" aria-label="Nombre" aria-describedby="addon-wrapping">
             </div>
     </div>
     <div class="col-md-4">
         <div class="input-group flex-nowrap">
                 <div class="input-group-prepend">
                     <span class="input-group-text" id="inputGroupFileAddon01">Foto</span>
                     </div>
                     <div class="custom-file">
                     <input type="file" class="custom-file-input" data-name="fotos" name="foto" id="foto"  aria-describedby="inputGroupFileAddon01">
                     <label class="custom-file-label" id="fotos" for="inputGroupFile01">Choose file</label>
                 </div>
         </div>
     </div>
</div>



<input type="button" name="next" id="validar" class="next action-button" value="Siguiente" />
