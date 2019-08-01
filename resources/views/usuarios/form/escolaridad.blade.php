<div class="field_wrapper">
    <div>{{-- div principal --}}

    <a href="#" class="add_button btn btn-success" style="margin: 0 0 7px 86%;" title="Add field">Agregar Carrera</a>
    <div class="container" style=" border: 1px solid #00000036; padding: 23px; margin: 0 0 17px 0px;">
        <div class="row">

            <div class="col">
                    <div class="input-group flex-nowrap">
                            <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">Grado</span>
                        </div>
                        <select  name="grados_id[]" class="estados_select" placeholder="Escolar">
                                <option value="">Escolar</option>
                                @foreach ($grados as $item)
                                <option value="{{ $item->id }}">{{ $item->nom_gra }}</option>
                                @endforeach
                        </select>
                    </div>
            </div>


            <div class="col">
                    <div class="input-group flex-nowrap">
                            <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">Carrera</span>
                        </div>
                        <select  name="carreras_id[]" class="estados_select" placeholder="Carrera">
                                <option value="">Carrera</option>
                                @foreach ($carreras as $item)
                                <option value="{{ $item->id }}">{{ $item->nom_car }}</option>
                                @endforeach
                        </select>
                    </div>

            </div>

            <div class="col">
                <div class="input-group flex-nowrap">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">Cedula</span>
                        </div>
                    <input type="text" class="form-control" name="cedula[]" id="cedula"    placeholder="Cedula profesional" aria-label="Nombre" aria-describedby="addon-wrapping">
                </div>
            </div>

            <div class="col">
                <div class="input-group flex-nowrap">
                        <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">Escuela</span>
                    </div>
                    <select  name="escuelas_id[]" class="estados_select" placeholder="Escuelas">
                            <option value="">Escuela</option>
                            @foreach ($escuelas as $item)
                            <option value="{{ $item->id }}">{{ $item->nombre_escuela }}</option>
                            @endforeach
                    </select>
                </div>
            </div>

            <div class="col">
                <div class="input-group flex-nowrap">
                        <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">Título</span>
                    </div>
                    <select  name="titulos_id[]" class="estados_select" placeholder="Profesional">
                            <option value="">Título</option>
                            @foreach ($titulos as $item)
                            <option value="{{ $item->id }}">{{ $item->nombre_titulo }}</option>
                            @endforeach
                    </select>
                </div>
            </div>
            <div class="col">
                    <div class="input-group flex-nowrap">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupFileAddon01">Título</span>
                            </div>
                            <div class="custom-file">
                            <input type="file" class="custom-file-input" data-name="titulol" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="carga_titulo[]" >
                            <label class="custom-file-label" id="titulol" for="inputGroupFile01">Choose file</label>
                        </div>
                    </div>
            </div>

            <div class="col">
                    <div class="input-group flex-nowrap">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupFileAddon01">Cédula</span>
                            </div>
                            <div class="custom-file">
                            <input type="file" class="custom-file-input" data-name="cedulal" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="carga_cedula[]" >
                            <label class="custom-file-label" id="cedulal" for="inputGroupFile01">Choose file</label>
                        </div>
                    </div>
            </div>


        </div>{{-- row --}}
    </div>{{-- -container --}}


    </div>{{-- Div importante contenedor --}}
</div>{{-- wraper --}}






{{-- -Idiomas --}}
<div class="field_wrapper2" style="width:100%" ">
        <div>{{-- div principal --}}

                <h2 class="fs-title" style="margin: 81px 0px 0 0;">IDIOMAS</h2>

        <a href="#" class="add_button2 btn btn-success" style="margin: 0 0 7px 86%;" title="Add field">Agregar Idioma</a>
        <div class="container" style=" border: 1px solid #00000036; padding: 23px; margin: 0 0 17px 0px; width="90%" ">
            <div class="row">

                <div class="col-md-12">
                        <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                <span class="input-group-text" id="addon-wrapping">Idioma</span>
                            </div>
                            <select  name="idiomas_id[]" class="estados_select" placeholder="Escolar">
                                    <option value="">Idioma</option>
                                    @foreach ($idiomas as $item)
                                    <option value="{{ $item->id }}">{{ $item->nombre_idioma }}</option>
                                    @endforeach
                            </select>
                        </div>
                </div>
            </div>

            <h5 style="margin: 23px 0 0 -79%;">Dominio del Idioma</h5>
                <div class="row">
                    <div class="col-md-2">

                        <div class="form-check">
                                <input class="form-check-inputce" style="margin: 0 0 0 -28px;" type="radio" name="nivel_ingles[]" id="nivel_ingles1" value="option1">
                                <label class="form-check-label" for="nivel_ingles">
                                0%
                                </label>
                        </div>

                        <div class="form-check">
                                <input class="form-check-input" type="radio" name="nivel_ingles[]" id="nivel_ingles1" value="option1">
                                <label class="form-check-label" for="nivel_ingles">
                                25%
                                </label>
                        </div>

                        <div class="form-check">
                                <input class="form-check-input" type="radio" name="nivel_ingles[]" id="nivel_ingles" value="option1">
                                <label class="form-check-label" for="nivel_ingles">
                                50%
                                </label>
                        </div>

                        <div class="form-check">
                                <input class="form-check-input" type="radio" name="nivel_ingles[]" id="nivel_ingles" value="option1" checked>
                                <label class="form-check-label" for="nivel_ingles">
                                75%
                                </label>
                        </div>

                        <div class="form-check">
                                <input class="form-check-inputc" style="margin: 0 0 0 -13px;" type="radio" name="nivel_ingles[]" id="nivel_ingles" value="option1">
                                <label class="form-check-label" for="nivel_ingles">
                                100%
                                </label>
                        </div>
                    </div>
                </div>


                <div class="row" style="margin:20px 0 0 0">

                    <div class="col-md-7">
                            <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupFileAddon01">Certificados</span>
                                    </div>
                                    <div class="custom-file">
                                    <input type="file" class="custom-file-input" data-name="certificadosl" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="carga_certificado[]" >
                                    <label class="custom-file-label" id="certificadosl" for="inputGroupFile01">Choose file</label>
                                </div>
                            </div>
                    </div>
                </div>


        </div>{{-- -container --}}


        </div>{{-- Div importante contenedor --}}
    </div>{{-- wraper  idiomas--}}





<script type="text/javascript">
    $(document).ready(function(){
        var maxField = 10; //Input fields increment limitation
        var addButton = $('.add_button'); //Add button selector
        var wrapper = $('.field_wrapper'); //Input field wrapper
        var fieldHTML = '<div>'+
         '<div class="container" style=" border: 1px solid #00000036; padding: 23px; margin: 0 0 17px 0px;">'+
            '<div class="row">'+
            '<div class="col">'+
                    '<div class="input-group flex-nowrap">'+
                            '<div class="input-group-prepend">'+
                           ' <span class="input-group-text" id="addon-wrapping">Grado</span>'+
                       ' </div>'+
                        '<select  name="grados_id[]" class="estados_select" placeholder="Escolar">'+
                                '<option value="">Escolar</option>'+
                               ' @foreach ($grados as $item)'+
                               ' <option value="{{ $item->id }}">{{ $item->nom_gra }}</option>'+
                              '  @endforeach'+
                       ' </select>'+
                  '  </div>'+
            '</div>'+

            '<div class="col">'+
                    '<div class="input-group flex-nowrap">'+
                            '<div class="input-group-prepend">'+
                            '<span class="input-group-text" id="addon-wrapping">Carrera</span>'+
                        '</div>'+
                        '<select  name="carreras_id[]" class="estados_select" placeholder="Carrera">'+
                                '<option value="">Carrera</option>'+
                               ' @foreach ($carreras as $item)'+
                                '<option value="{{ $item->id }}">{{ $item->nom_car }}</option>'+
                                '@endforeach'+
                       ' </select>'+
                   ' </div>'+
           ' </div>'+

           '<div class="col">'+
                '<div class="input-group flex-nowrap">'+
                        '<div class="input-group-prepend">'+
                            '<span class="input-group-text" id="addon-wrapping">Cedula</span>'+
                       ' </div>'+
                    '<input type="text" class="form-control" name="cedula[]" id="cedula"    placeholder="Cedula profesional" aria-label="Nombre" aria-describedby="addon-wrapping">'+
               ' </div>'+
          '  </div>'+

            '<div class="col">'+
               ' <div class="input-group flex-nowrap">'+
                       ' <div class="input-group-prepend">'+
                        '<span class="input-group-text" id="addon-wrapping">Escuela</span>'+
                    '</div>'+
                    '<select  name="escuelas_id[]" class="estados_select" placeholder="Escuelas">'+
                           ' <option value="">Escuela</option>'+
                           ' @foreach ($escuelas as $item)'+
                            '<option value="{{ $item->id }}">{{ $item->nombre_escuela }}</option>'+
                            '@endforeach'+
                    '</select>'+
               ' </div>'+
            '</div>'+

            '<div class="col">'+
                '<div class="input-group flex-nowrap">'+
                        '<div class="input-group-prepend">'+
                       ' <span class="input-group-text" id="addon-wrapping">Título</span>'+
                   ' </div>'+
                    '<select  name="titulos_id[]" class="estados_select" placeholder="Profesional">'+
                            '<option value="">Título</option>'+
                           ' @foreach ($titulos as $item)'+
                           ' <option value="{{ $item->id }}">{{ $item->nombre_titulo }}</option>'+
                           ' @endforeach'+
                   ' </select>'+
                 '</div>'+
            '</div>'+



        '<div class="col">'+
                '<div class="input-group flex-nowrap">'+
                   '<div class="input-group-prepend">'+
                        '<span class="input-group-text" id="inputGroupFileAddon01">Título</span>'+
                        '</div>'+
                       ' <div class="custom-file">'+
                        '<input type="file" class="custom-file-input" data-name="titulol" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="carga_titulo[]" >'+
                       ' <label class="custom-file-label" id="titulol" for="inputGroupFile01">Choose file</label>'+
                   ' </div>'+
               ' </div>'+
        '</div>'+

        '<div class="col">'+
                '<div class="input-group flex-nowrap">'+
                    '<div class="input-group-prepend">'+
                       ' <span class="input-group-text" id="inputGroupFileAddon01">Cédula</span>'+
                        '</div>'+
                        '<div class="custom-file">'+
                        '<input type="file" class="custom-file-input" data-name="cedulal" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="carga_cedula[]" >'+
                        '<label class="custom-file-label" id="cedulal" for="inputGroupFile01">Choose file</label>'+
                    '</div>'+
               ' </div>'+
       ' </div>'+



       '</div>'+
        '<a href="#" class="btn btn-sm btn btn-danger remove_button" style="margin: 0 0 0 97%;" >X</a>'+
        '</div>'+

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

{{-- Idiomas --}}

<script>
        $(document).ready(function(){
            var maxField = 10; //Input fields increment limitation
            var addButton = $('.add_button2'); //Add button selector
            var wrapper = $('.field_wrapper2'); //Input field wrapper
            var fieldHTML = '<div>'+
             '<div class="container" style=" border: 1px solid #00000036; padding: 23px; margin: 0 0 17px 0px;">'+
               ' <div class="row">'+
                    '<div class="col-md-12">'+
                            '<div class="input-group flex-nowrap">'+
                                    '<div class="input-group-prepend">'+
                                    '<span class="input-group-text" id="addon-wrapping">Idioma</span>'+
                                '</div>'+
                                '<select  name="idiomas_id[]" class="estados_select" placeholder="Escolar">'+
                                        '<option value="">Idioma</option>'+
                                        '@foreach ($idiomas as $item)'+
                                       ' <option value="{{ $item->id }}">{{ $item->nombre_idioma }}</option>'+
                                       ' @endforeach'+
                               ' </select>'+
                           ' </div>'+
                    '</div>'+
              '  </div>'+


              '<h5 style="margin: 23px 0 0 -79%;">Dominio del Idioma</h5>'+
              '<div class="row">'+
                  '<div class="col-md-2">'+

                      '<div class="form-check">'+
                             ' <input class="form-check-inputce" style="margin: 0 0 0 -28px;" type="radio" name="nivel_ingles[]" id="nivel_ingles1" value="option1">'+
                            '  <label class="form-check-label" for="nivel_ingles">'+
                            '  0%'+
                             ' </label>'+
                      '</div>'+

                      '<div class="form-check">'+
                            '  <input class="form-check-input" type="radio" name="nivel_ingles[]" id="nivel_ingles1" value="option1">'+
                             ' <label class="form-check-label" for="nivel_ingles">'+
                             ' 25%'+
                             ' </label>'+
                     ' </div>'+

                     ' <div class="form-check">'+
                              '<input class="form-check-input" type="radio" name="nivel_ingles[]" id="nivel_ingles" value="option1">'+
                             ' <label class="form-check-label" for="nivel_ingles">'+
                              '50%'+
                             ' </label>'+
                     ' </div>'+

                      '<div class="form-check">'+
                             ' <input class="form-check-input" type="radio" name="nivel_ingles[]" id="nivel_ingles" value="option1" checked>'+
                             ' <label class="form-check-label" for="nivel_ingles">'+
                             ' 75%'+
                              '</label>'+
                      '</div>'+

                     ' <div class="form-check">'+
                             ' <input class="form-check-inputc" style="margin: 0 0 0 -13px;" type="radio" name="nivel_ingles[]" id="nivel_ingles" value="option1">'+
                             ' <label class="form-check-label" for="nivel_ingles">'+
                             ' 100%'+
                             ' </label>'+
                     ' </div>'+
                  '</div>'+
              '</div>'+


             ' <div class="row" style="margin:20px 0 0 0">'+

                    '<div class="col-md-7">'+
                            '<div class="input-group flex-nowrap">'+
                               ' <div class="input-group-prepend">'+
                                    '<span class="input-group-text" id="inputGroupFileAddon01">Certificados</span>'+
                                    '</div>'+
                                   ' <div class="custom-file">'+
                                   ' <input type="file" class="custom-file-input" data-name="certificadosl" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="carga_certificado[]" >'+
                                    '<label class="custom-file-label" id="certificadosl" for="inputGroupFile01">Choose file</label>'+
                               ' </div>'+
                            '</div>'+
                   ' </div>'+
               ' </div>'+


               '<a href="#" class="btn btn-sm btn btn-danger remove_button2" style="margin: 0 0 0 97%;" >X</a>'+

           '</div>'+

            '</div>'+

        '</div>';

            var x = 1; //Initial field counter is 1
            $(addButton).click(function(){ //Once add button is clicked
                if(x < maxField){ //Check maximum number of input fields
                    x++; //Increment field counter
                    $(wrapper).append(fieldHTML); // Add field html
                }
            });
            $(wrapper).on('click', '.remove_button2', function(e){ //Once remove button is clicked
                e.preventDefault();
                $(this).parent('div').remove(); //Remove field html
                x--; //Decrement field counter
            });
        });


</script>


{{-- -idiomas --}}



