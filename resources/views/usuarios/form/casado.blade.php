<h4>Información del Conyuge</h4>
<div class="row">

        <div class="col-md-4">

            <div class="input-group flex-nowrap">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="addon-wrapping">Nombres</span>
                </div>
                <input type="text" class="form-control" name="nombres_coy" id="nombres_coy" placeholder="Nombres" aria-label="" aria-describedby="addon-wrapping">
            </div>
        </div>

        <div class="col-md-4">
            <div class="input-group flex-nowrap">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">Apellido</span>
                    </div>
                <input type="text" class="form-control" name="primero_coy" id="primero_coy"    placeholder="Paterno" aria-label="Nombre" aria-describedby="addon-wrapping">
            </div>
        </div>

        <div class="col-md-4">
            <div class="input-group flex-nowrap">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">Apellido</span>
                    </div>
                <input type="text" class="form-control" name="segundo_coy" id="segundo_coy"    placeholder="Materno" aria-label="Nombre" aria-describedby="addon-wrapping">
            </div>
        </div>

        <div class="col-md-4">
            <div class="input-group flex-nowrap">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">Curp</span>
                    </div>
                <input type="text" class="form-control" name="curp_coy" id="curp_coy"    placeholder="Curp" aria-label="Nombre" aria-describedby="addon-wrapping">
            </div>
        </div>

        <div class="col-md-8">
            <div class="input-group flex-nowrap">
                    <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupFileAddon01">Curp</span>
                    </div>
                    <div class="custom-file">
                    <input type="file" class="custom-file-input" name="carga_curp_coy" id="carga_curp_coy"  aria-describedby="inputGroupFileAddon01">
                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    </div>
            </div>
        </div>

</div>


<div class="row">
        <table class="table table-bordered" id="dynamic_hijos">
            <h4>Tienes Hijos</h4><br><p></p>
                <tr>
                        <td>
                                <div class="input-group flex-nowrap">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="addon-wrapping">Nombre</span>
                                        </div>
                                        <input type="text" class="form-control" name="nombre_hijo_coy[]" id="hijo"   placeholder="Nombre" aria-label="Nombre" aria-describedby="addon-wrapping">
                                </div>
                        </td>
                        <td>
                                <div class="input-group flex-nowrap">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="addon-wrapping">Edad</span>
                                        </div>
                                       <input type="text" class="form-control" name="edad_hijo_coy[]" id="edad"    placeholder="Edad" aria-label="Nombre" aria-describedby="addon-wrapping">
                                </div>
                        </td>
                        <td><button type="button" name="addHijos" id="addHijos" class="btn btn-success">+</button></td>

                </tr>

        </table>
</div>


<h4>Familiares Descendientes</h4>
<table class="table table-bordered" id="ifc">
        <tr>
                <td>
                        <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="addon-wrapping">Nombre</span>
                                </div>
                                <input type="text" class="form-control" name="nombre_des[]" id="hijo"   placeholder="Nombre" aria-label="Nombre" aria-describedby="addon-wrapping">
                        </div>
                </td>
                <td>
                    <div class="input-group flex-nowrap">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="addon-wrapping">Ap</span>
                            </div>
                            <input type="text" class="form-control" name="ap_des[]" id="edad"    placeholder="Paterno" aria-label="Nombre" aria-describedby="addon-wrapping">
                    </div>
                </td>
                <td>
                        <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="addon-wrapping">Ap</span>
                                </div>
                                <input type="text" class="form-control" name="am_des[]" id="edad"    placeholder="Materno" aria-label="Nombre" aria-describedby="addon-wrapping">
                        </div>
                    </td>
                <td><button type="button" name="add" id="addViudo" class="btn btn-success">+</button></td>

        </tr>

</table>




<script src="http://thecodeplayer.com/uploads/js/jquery-1.9.1.min.js" type="text/javascript"></script>
<script>


        var i=1;
        $(document).on('click', '#addHijos', function(){
             i++;
             $('#dynamic_hijos').append('<tr id="row'+i+'">'+
                 '<td>'+
                        '<div class="input-group flex-nowrap">'+
                                '<div class="input-group-prepend">'+
                                    '<span class="input-group-text" id="addon-wrapping">Nombre</span>'+
                                '</div>'+
                                '<input type="text" class="form-control" name="nombre_hijo_coy[]" id="hijo" placeholder="Nombre" aria-label="Nombre" aria-describedby="addon-wrapping">'+
                        '</div>'+
                  '</td>'+
                  '<td>'+
                        '<div class="input-group flex-nowrap">'+
                                '<div class="input-group-prepend">'+
                                    '<span class="input-group-text" id="addon-wrapping">Edad</span>'+
                                '</div>'+
                                '<input type="text" class="form-control" name="edad_hijo_coy[]" id="edad" placeholder="Nombre" aria-label="Nombre" aria-describedby="addon-wrapping">'+
                        '</div>'+
                 '</td>'+
                 '<td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
        });
        $(document).on('click', '.btn_remove', function(){
             var button_id = $(this).attr("id");
             $('#row'+button_id+'').remove();
        });


        var i=1;
        $(document).on('click', '#addViudo', function(){
             i++;
             $('#ifc').append('<tr id="row'+i+'">'+
                 '<td>'+
                        '<div class="input-group flex-nowrap">'+
                                '<div class="input-group-prepend">'+
                                    '<span class="input-group-text" id="addon-wrapping">Nombre</span>'+
                                '</div>'+
                                '<input type="text" class="form-control" name="nombre_des[]" id="hijo" placeholder="Nombre" aria-label="Nombre" aria-describedby="addon-wrapping">'+
                        '</div>'+
                  '</td>'+
                  '<td>'+
                        '<div class="input-group flex-nowrap">'+
                                '<div class="input-group-prepend">'+
                                    '<span class="input-group-text" id="addon-wrapping">Ap</span>'+
                                '</div>'+
                                '<input type="text" class="form-control" name="ap_des[]" id="edad" placeholder="Paterno" aria-label="Nombre" aria-describedby="addon-wrapping">'+
                        '</div>'+
                 '</td>'+

                 '<td>'+
                        '<div class="input-group flex-nowrap">'+
                                '<div class="input-group-prepend">'+
                                    '<span class="input-group-text" id="addon-wrapping">Ap</span>'+
                                '</div>'+
                                '<input type="text" class="form-control" name="am_des[]" id="edad" placeholder="Materno" aria-label="Nombre" aria-describedby="addon-wrapping">'+
                        '</div>'+
                 '</td>'+
                 '<td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
        });
        $(document).on('click', '.btn_remove', function(){
             var button_id = $(this).attr("id");
             $('#row'+button_id+'').remove();
        });




</script>

