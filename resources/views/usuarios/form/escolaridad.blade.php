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


