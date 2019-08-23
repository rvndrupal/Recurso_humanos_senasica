@foreach ($use[0]->DetalleEscolaridades as $item=>$v)

<div class="field_wrapper">

            <div class="col-md-12">
                <a href="#" class="add_button btn btn-success" style="margin: -96px 0 7px 926px;;" title="Add field">Agregar Carrera</a>
            </div>
              <div class="container" style=" border: 1px solid #00000036; padding: 23px; margin: 0 0 17px 0px;">
                 <div class="row">

                        <div class="col">
                                <div class="input-group flex-nowrap">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text" id="addon-wrapping">Grado</span>
                                    </div>
                                    <select  name="grados_id[]" class="estados_select" placeholder="Escolar">
                                            <option value="">Escolar</option>
                                            @foreach ($gradoss as $item)
                                            <option value="{{ $item->id }}"
                                            @if($item->id === $s_grados)
                                            selected
                                            @endif
                                            >
                                            {{ $item->nom_gra }}
                                            </option>
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
                                            @foreach ($carrerass as $item)
                                            <option value="{{ $item->id }}"
                                            @if($item->id === $s_carreras)
                                            selected
                                            @endif
                                            >
                                            {{ $item->nom_car }}
                                            </option>
                                            @endforeach
                                    </select>
                                </div>

                        </div>

                        <div class="col-md-4">
                            <div class="input-group flex-nowrap">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="addon-wrapping">Cedula</span>
                                    </div>

                                <input type="text" class="form-control" name="cedula[]" id="cedula"    placeholder="Cedula profesional"
                                aria-label="Nombre" aria-describedby="addon-wrapping" value="{{ $use[0]->DetalleEscolaridades[0]->cedula }}">

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-group flex-nowrap">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text" id="addon-wrapping">Escuela</span>
                                </div>
                                <select  name="escuelas_id[]" class="estados_select" placeholder="Escuelas">
                                        <option value="">Escuela</option>
                                        @foreach ($escuelass as $item)
                                        <option value="{{ $item->id }}"
                                        @if($item->id === $s_escuelas)
                                        selected
                                        @endif
                                        >{{ $item->nombre_escuela }}</option>
                                        @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-group flex-nowrap">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text" id="addon-wrapping">Título</span>
                                </div>
                                <select  name="titulos_id[]" class="estados_select" placeholder="Profesional">
                                        <option value="">Título</option>
                                        @foreach ($tituloss as $item)
                                        <option value="{{ $item->id }}"
                                        @if($item->id === $s_tt)
                                        selected
                                        @endif
                                        >{{ $item->nombre_titulo }}</option>
                                        @endforeach
                                </select>
                            </div>
                        </div>


                            <div class="col-md-1">
                                <h6 class="foto_tex2">TÍTULO</h6>
                            </div>
                            <div class="col-md-2 hijos_index">
                                <div class="image-upload-carga-titulo">
                                    <label for="file-input-carga-titulo">
                                        <img src="{{ asset('img/subir2.jpg') }}" alt ="Click aquí para subir tu foto" title ="Click aquí para subir tu foto" >
                                    </label>
                                    <input id="file-input-carga-titulo" class="cur_hijo" type="file"   class="form-control" name="carga_titulo[]"/>
                                </div>
                            </div>
                            <div class="col-md-3">

                                    <div id="previa-carga-titulo">
                                    <img src="http://localhost/recursos/public/{{ $v->carga_titulo }}" width="100px" height="70px" alt="">
                                    {{--  <input type="file" class="form-control"  id="carga_rfc"  name="carga_rfc">  --}}
                                    </div>
                                    <div class="img_pre-carga-titulo" id="img_pre-carga-titulo">

                                    </div>

                            </div>

                            <div class="col-md-1">
                                    <h6 class="foto_tex2">CÉDULA</h6>
                                </div>
                                <div class="col-md-2 hijos_index">
                                    <div class="image-upload-carga-cedula">
                                        <label for="file-input-carga-cedula">
                                            <img src="{{ asset('img/subir2.jpg') }}" alt ="Click aquí para subir tu foto" title ="Click aquí para subir tu foto" >
                                        </label>
                                        <input id="file-input-carga-cedula" class="cur_hijo" type="file"   class="form-control" name="carga_cedula[]"/>
                                    </div>
                                </div>
                                <div class="col-md-3">

                                        <div id="previa-carga-cedula">
                                        <img src="http://localhost/recursos/public/{{ $v->carga_cedula }}" width="100px" height="70px" alt="">
                                        {{--  <input type="file" class="form-control"  id="carga_rfc"  name="carga_rfc">  --}}
                                        </div>
                                        <div class="img_pre-carga-cedula" id="img_pre-carga-cedula">

                                        </div>

                                </div>






                            {{-- <div class="col">
                                    <div class="input-group flex-nowrap">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupFileAddon01">Cédula</span>
                                            </div>
                                            <div class="custom-file">
                                            <input type="file" class="custom-file-input" data-name="cedulal" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="carga_cedula[]" >
                                            <label class="custom-file-label" id="cedulal" for="inputGroupFile01">Choose file</label>
                                        </div>
                                    </div>
                            </div> --}}


            </div>
        </div>
</div>
@endforeach






{{-- Alta Escolaridad --}}
<script type="text/javascript">

    $(document).ready(function(){

        var i=0;
        var maxField = 10; //Input fields increment limitation
        var addButton = $('.add_button'); //Add button selector
        var wrapper = $('.field_wrapper'); //Input field wrapper
        var fieldHTML = '<div class="destino">'+

         '<div class="container escolaridad" style=" border: 1px solid #00000036; padding: 23px; margin: 0 0 17px 0px;">'+
            '<div class="row">'+
            '<div class="col-md-4">'+
                    '<div class="input-group flex-nowrap">'+
                            '<div class="input-group-prepend">'+
                           ' <span class="input-group-text" id="addon-wrapping">Grado</span>'+
                       ' </div>'+
                        '<select  name="grados_id[]" class="form-control"  id="grados" placeholder="Escolar">'+
                                '<option value="">Grado</option>'+
                               ' @foreach ($gradoss as $item)'+
                               ' <option value="{{ $item->id }}">{{ $item->nom_gra }}</option>'+
                              '  @endforeach'+
                       ' </select>'+
                  '  </div>'+
            '</div>'+

            '<div class="col-md-4">'+
                    '<div class="input-group flex-nowrap">'+
                            '<div class="input-group-prepend">'+
                            '<span class="input-group-text" id="addon-wrapping">Carrera</span>'+
                        '</div>'+
                        '<select  name="carreras_id[]" class="form-control"  id="carreras" placeholder="Carrera">'+
                                '<option value="">Carrera</option>'+
                               ' @foreach ($carrerass as $item)'+
                                '<option value="{{ $item->id }}">{{ $item->nom_car }}</option>'+
                                '@endforeach'+
                       ' </select>'+
                   ' </div>'+
           ' </div>'+

           '<div class="col-md-4">'+
                '<div class="input-group flex-nowrap">'+
                        '<div class="input-group-prepend">'+
                            '<span class="input-group-text" id="addon-wrapping">Cedula</span>'+
                       ' </div>'+
                    '<input type="text" class="form-control" name="cedula[]" id="cedula"    placeholder="Cedula profesional" aria-label="Nombre" aria-describedby="addon-wrapping">'+
               ' </div>'+
          '  </div>'+

            '<div class="col-md-6">'+
               ' <div class="input-group flex-nowrap">'+
                       ' <div class="input-group-prepend">'+
                        '<span class="input-group-text" id="addon-wrapping">Escuela</span>'+
                    '</div>'+
                    '<select  name="escuelas_id[]" class="form-control" id="escuelas" placeholder="Escuelas">'+
                           ' <option value="">Escuela</option>'+
                           ' @foreach ($escuelass as $item)'+
                            '<option value="{{ $item->id }}">{{ $item->nombre_escuela }}</option>'+
                            '@endforeach'+
                    '</select>'+
               ' </div>'+
            '</div>'+

            '<div class="col-md-6">'+
                '<div class="input-group flex-nowrap">'+
                        '<div class="input-group-prepend">'+
                       ' <span class="input-group-text" id="addon-wrapping">Título</span>'+
                   ' </div>'+
                    '<select  name="titulos_id[]" class="form-control" id="titulos" placeholder="Profesional">'+
                            '<option value="">Título</option>'+
                           ' @foreach ($tituloss as $item)'+
                           ' <option value="{{ $item->id }}">{{ $item->nombre_titulo }}</option>'+
                           ' @endforeach'+
                   ' </select>'+
                 '</div>'+
            '</div>'+



               '<div class="col-md-2">'+
                      '  <label class="tit">Título</label>'+
               '</div>'+

                '<div class="col-md-10">'+
                   ' <input type="file" class="form-control"  id="titulo_pro"  name="carga_titulo[]" >'+
               '</div>'+


       '<div class="col-md-2">'+
            '  <label class="ced">Cédula</label>'+
        '</div>'+

        '<div class="col-md-10">'+
            ' <input type="file" class="form-control"  id="cedula"  name="carga_cedula[]" >'+
        '</div>'+




       '</div>'+
        '<a href="#" class="btn btn-sm btn btn-danger remove_button" style="margin: 0 0 0 97%;" >X</a>'+
        '</div>'+

</script>
