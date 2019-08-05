<div class="field_wrapper3">
    <div>{{-- div principal --}}


    <div class="container" style=" border: 1px solid #00000036; padding: 23px; margin: 0 0 17px 0px;">
        <div class="row">

            <div class="col-md-12">
                <div class="input-group flex-nowrap">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">Denomincación del Puesto</span>
                        </div>
                    <input type="text" class="form-control" name="den_puesto[]" id="den_puesto[]"    placeholder="Denominación del puesto" aria-label="Nombre" aria-describedby="addon-wrapping">
                </div>
            </div>

            <div class="col-md-12">
                    <div class="input-group flex-nowrap">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="addon-wrapping">Institución ó Empresa</span>
                            </div>
                        <input type="text" class="form-control" name="ins_puesto[]" id="ins_puesto[]"    placeholder="Institución ó Empresa" aria-label="Nombre" aria-describedby="addon-wrapping">
                    </div>
            </div>

            <div class="col-md-12">
                    <div class="input-group flex-nowrap">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="addon-wrapping">Área de Experiencia</span>
                            </div>
                        <input type="text" class="form-control" name="area_puesto[]" id="area_puesto[]"    placeholder="Área de Experiencia" aria-label="Nombre" aria-describedby="addon-wrapping">
                    </div>
            </div>

            <div class="col-md-6">
                    <div class="input-group flex-nowrap">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="addon-wrapping">Años de Experiencia</span>
                            </div>
                        <input type="text" class="form-control" name="anos_puesto[]" id="anos_puesto[]"    placeholder="Años de Experiencia" aria-label="Nombre" aria-describedby="addon-wrapping">
                    </div>
            </div>

            <div class="col-md-12">
                    <div class="input-group flex-nowrap">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">Fecha de Ingreso</span>
                        </div>
                        <input type="date" class="form-control" name="fecha_ing_puesto[]" id="fecha_ing_puesto[]" placeholder="Senasica" aria-label="Nombre" aria-describedby="addon-wrapping">
                    </div>
            </div>

            <div class="col-md-12">
                    <div class="input-group flex-nowrap">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">Fecha de Baja</span>
                        </div>
                        <input type="date" class="form-control" name="fecha_baj_puesto[]" id="fecha_baj_puesto[]" placeholder="Senasica" aria-label="Nombre" aria-describedby="addon-wrapping">
                    </div>
            </div>

            <div class="col">
                    <div class="input-group flex-nowrap">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupFileAddon01">Documento Experiencia</span>
                            </div>
                            <div class="custom-file">
                            <input type="file" class="custom-file-input" data-name="doc_expe" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="doc_puesto[]" >
                            <label class="custom-file-label" id="doc_expe" for="inputGroupFile01">Choose file</label>
                        </div>
                    </div>
            </div>


        </div>{{-- row --}}
    </div>{{-- -container --}}
    <a href="#" class="add_Expe btn btn-success" style="margin: 0 0 7px 86%;" title="Add field">Agregar Experiencia</a>


    </div>{{-- Div importante contenedor --}}
</div>{{-- wraper --}}












<script type="text/javascript">
    $(document).ready(function(){
        var maxField = 10; //Input fields increment limitation
        var addButton = $('.add_Expe'); //Add button selector
        var wrapper = $('.field_wrapper3'); //Input field wrapper
        var fieldHTML = '<div>'+
               ' <div class="container" style=" border: 1px solid #00000036; padding: 23px; margin: 0 0 17px 0px;">'+
                       ' <div class="row">'+

                          '  <div class="col-md-12">'+
                               ' <div class="input-group flex-nowrap">'+
                                      '  <div class="input-group-prepend">'+
                                           ' <span class="input-group-text" id="addon-wrapping">Denomincación del Puesto</span>'+
                                       ' </div>'+
                                  '  <input type="text" class="form-control" name="den_puesto[]" id="den_puesto[]"    placeholder="Denominación del puesto" aria-label="Nombre" aria-describedby="addon-wrapping">'+
                              '  </div>'+
                          '  </div>'+

                           ' <div class="col-md-12">'+
                                   ' <div class="input-group flex-nowrap">'+
                                           ' <div class="input-group-prepend">'+
                                                '<span class="input-group-text" id="addon-wrapping">Institución ó Empresa</span>'+
                                           ' </div>'+
                                       ' <input type="text" class="form-control" name="ins_puesto[]" id="ins_puesto[]"    placeholder="Institución ó Empresa" aria-label="Nombre" aria-describedby="addon-wrapping">'+
                                    '</div>'+
                           ' </div>'+

                           ' <div class="col-md-12">'+
                                   ' <div class="input-group flex-nowrap">'+
                                           ' <div class="input-group-prepend">'+
                                                '<span class="input-group-text" id="addon-wrapping">Área de Experiencia</span>'+
                                            '</div>'+
                                       ' <input type="text" class="form-control" name="area_puesto[]" id="area_puesto[]"    placeholder="Área de Experiencia" aria-label="Nombre" aria-describedby="addon-wrapping">'+
                                   ' </div>'+
                           ' </div>'+

                            '<div class="col-md-6">'+
                                   ' <div class="input-group flex-nowrap">'+
                                           ' <div class="input-group-prepend">'+
                                                '<span class="input-group-text" id="addon-wrapping">Años de Experiencia</span>'+
                                           ' </div>'+
                                       ' <input type="text" class="form-control" name="anos_puesto[]" id="anos_puesto[]"    placeholder="Años de Experiencia" aria-label="Nombre" aria-describedby="addon-wrapping">'+
                                   ' </div>'+
                            '</div>'+

                           ' <div class="col-md-12">'+
                                   ' <div class="input-group flex-nowrap">'+
                                       ' <div class="input-group-prepend">'+
                                            '<span class="input-group-text" id="addon-wrapping">Fecha de Ingreso</span>'+
                                       ' </div>'+
                                       ' <input type="date" class="form-control" name="fecha_ing_puesto[]" id="fecha_ing_puesto[]" placeholder="Senasica" aria-label="Nombre" aria-describedby="addon-wrapping">'+
                                   ' </div>'+
                            '</div>'+

                           ' <div class="col-md-12">'+
                                    '<div class="input-group flex-nowrap">'+
                                      '  <div class="input-group-prepend">'+
                                            '<span class="input-group-text" id="addon-wrapping">Fecha de Baja</span>'+
                                       ' </div>'+
                                        '<input type="date" class="form-control" name="fecha_baj_puesto[]" id="fecha_baj_puesto[]" placeholder="Senasica" aria-label="Nombre" aria-describedby="addon-wrapping">'+
                                   ' </div>'+
                           ' </div>'+

                           ' <div class="col">'+
                                   ' <div class="input-group flex-nowrap">'+
                                       ' <div class="input-group-prepend">'+
                                            '<span class="input-group-text" id="inputGroupFileAddon01">Documento Experiencia</span>'+
                                           ' </div>'+
                                            '<div class="custom-file">'+
                                            '<input type="file" class="custom-file-input" data-name="doc_expe" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="doc_puesto[]" >'+
                                           ' <label class="custom-file-label" id="doc_expe" for="inputGroupFile01">Choose file</label>'+
                                      '  </div>'+
                                   ' </div>'+
                          '  </div>'+






                       ' </div>'+{{-- row --}}
                   ' </div>'+{{-- -container --}}

        '<a href="#" class="btn btn-sm btn btn-danger remove_button" style="margin: 0 0 0 97%;" >X</a>'+

'</div>';

        var x = 1; //Initial field counter is 1
        $(addButton).click(function(){ //Once add button is clicked
            if(x < maxField){ //Check maximum number of input fields
                x++; //Increment field counter
                $(wrapper).append(fieldHTML); // Add field html
            }
        });
        $(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
            e.preventDefault();
            $(this).parent('div').remove(); //Remove field html
            x--; //Decrement field counter
        });
    });


</script>

