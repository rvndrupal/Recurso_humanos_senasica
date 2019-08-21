{{-- EDITAR ESCOLARIDAD --}}
<div class="field_wrapper">
    <div>{{-- div principal --}}
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
                                >{{ $item->nom_gra }}
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
                                >{{ $item->nom_car }}
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
                    @foreach ($use[0]->DetalleEscolaridades as $item)
                    <input type="text" class="form-control" name="cedula[]" id="cedula"    placeholder="Cedula profesional" aria-label="Nombre"
                    aria-describedby="addon-wrapping" value="{{ $item->cedula }}">
                    @endforeach
                </div>
            </div>



            <div class="col-md-4">
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
                            >
                            {{ $item->nombre_escuela }}
                            </option>
                            @endforeach
                    </select>
                </div>
            </div>

             <div class="col-md-4">
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
                            >
                            {{ $item->nombre_titulo }}
                            </option>
                            @endforeach
                    </select>
                </div>
            </div>
</div>


            <div class="row rfc">
                    <div class="col-md-1">
                            <label class="foto_tex">TÍTULO</label>
                    </div>

                  <div class="col-md-5">
                        <div class="image-upload-titulo">
                            <label for="file-input-titulo">
                                <img src="{{ asset('img/subir2.jpg') }}" alt ="Click aquí para subir tu foto" title ="Click aquí para subir tu foto" >
                            </label>
                            <input id="file-input-titulo" type="file"  class="form-control" name="carga_titulo[]"/>
                        </div>
                  </div>
                  <div class="col-md-6">
                        @foreach ($use[0]->DetalleEscolaridades as $item)
                        <div id="previa_titulo">
                        <img src="http://localhost/recursos/public/{{ $item->carga_titulo }}" width="200px" alt="">
                        {{--  <input type="file" class="form-control"  id="carga_rfc"  name="carga_rfc">  --}}
                        </div>
                        <div id="img_pre_titulo">

                        </div>
                        @endforeach
                  </div>
            </div>

            <div class="row rfc">
                    <div class="col-md-1">
                            <label class="foto_tex">CÉDULA</label>
                    </div>

                  <div class="col-md-5">
                        <div class="image-upload-cedula">
                            <label for="file-input-cedula">
                                <img src="{{ asset('img/subir2.jpg') }}" alt ="Click aquí para subir tu foto" title ="Click aquí para subir tu foto" >
                            </label>
                            <input id="file-input-cedula" type="file"  class="form-control" name="carga_cedula[]"/>
                        </div>
                  </div>
                  <div class="col-md-6">
                        @foreach ($use[0]->DetalleEscolaridades as $item)
                        <div id="previa_cedula">
                        <img src="http://localhost/recursos/public/{{ $item->carga_cedula }}" width="200px" alt="">
                        {{--  <input type="file" class="form-control"  id="carga_rfc"  name="carga_rfc">  --}}
                        </div>
                        <div id="img_pre_cedula">

                        </div>
                        @endforeach
                  </div>
            </div>






    {{--
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
            </div> --}}

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


        {{-- </div>  --}}
               {{-- row --}}
    {{-- </div> --}}
    {{-- -container --}}


    </div>{{-- Div importante contenedor --}}
</div>{{-- wraper --}}






{{-- -Idiomas --}}
<div class="field_wrapper2" style="width:100%" ">
        <div>{{-- div principal --}}

        <h2 class="fs-title" style="margin: 81px 0px 0 0;">IDIOMAS</h2>

        <a href="#" class="add_button2 btn btn-success" style="margin: 0 0 7px 932px;" title="Add field">Agregar Idiomas</a>


                {{--  <div class="col-md-12">
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

            <h5 style=" margin: 5px 0 0 -82%;">Dominio del Idioma</h5>
                <div class="row">
                    <div class="col-md-2">

                        <div class="form-check">
                                <input class="form-check-inputce" style="margin: 0 0 0 -28px;" type="checkbox" name="nivel_ingles[]" id="nivel_ingles1" value="0%">
                                <label class="form-check-label" for="nivel_ingles">
                                0%
                                </label>
                        </div>

                        <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="nivel_ingles[]" id="nivel_ingles1" value="25%">
                                <label class="form-check-label" for="nivel_ingles">
                                25%
                                </label>
                        </div>

                        <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="nivel_ingles[]" id="nivel_ingles" value="50%">
                                <label class="form-check-label" for="nivel_ingles">
                                50%
                                </label>
                        </div>

                        <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="nivel_ingles[]" id="nivel_ingles" value="75%">
                                <label class="form-check-label" for="nivel_ingles">
                                75%
                                </label>
                        </div>

                        <div class="form-check">
                                <input class="form-check-inputc" style="margin: 0 0 0 -13px;" type="checkbox" name="nivel_ingles[]" id="nivel_ingles" value="100%">
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
                </div>  --}}





        </div>{{-- Div importante contenedor --}}
    </div>{{-- wraper  idiomas--}}



<script>
    $(document).ready(function(){





    });
    {{-- ready --}}
</script>
