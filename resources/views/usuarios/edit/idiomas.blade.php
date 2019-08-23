

{{-- -Idiomas --}}
<div class="field_wrapper2" style="width:100%" ">


        <h2 class="fs-title" style="margin: 81px 0px 0 0;">IDIOMAS</h2>

        <a href='#' class="add_button2 btn btn-success" style="margin: 0 0 7px 932px;" title="Add field">Agregar Idiomas</a>
        @foreach ($use[0]->DetalleIdiomas as $item=>$v)
        <div class="container idiomas">

                  <div class="col-md-12">
                        <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                <span class="input-group-text" id="addon-wrapping">Idioma</span>
                                </div>
                            <select  name="idiomas_id[]" class="estados_select" placeholder="Escolar">
                                    <option value="">Idioma</option>
                                    @foreach ($idiomass as $item)
                                    <option value="{{ $item->id }}"
                                    @if($item->id === $s_idioma)
                                    selected
                                    @endif
                                    >{{ $item->nombre_idioma }}</option>
                                    @endforeach
                            </select>
                        </div>
                </div>


            <h5 style=" margin: 5px 0 0 -82%;">Dominio del Idioma</h5>
                <div class="row">
                    <div class="col-md-2">

                        <div class="form-check">
                                @if($s_ni === "0%")
                                <input class="form-check-inputce" style="margin: 0 0 0 -28px;" type="checkbox" name="nivel_ingles[]" id="nivel_ingles1" value="0%" checked>
                                @else
                                <input class="form-check-inputce" style="margin: 0 0 0 -28px;" type="checkbox" name="nivel_ingles[]" id="nivel_ingles1" value="0%">
                                @endif
                                <label class="form-check-label" for="nivel_ingles">
                                0%
                                </label>
                        </div>

                        <div class="form-check">
                                @if($s_ni === "25%")
                                <input class="form-check-input" type="checkbox" name="nivel_ingles[]" id="nivel_ingles1" value="25%" checked>
                                @else
                                <input class="form-check-input" type="checkbox" name="nivel_ingles[]" id="nivel_ingles1" value="25%">
                                @endif
                                <label class="form-check-label" for="nivel_ingles">
                                25%
                                </label>
                        </div>

                        <div class="form-check">
                                @if($s_ni === "50%")
                                <input class="form-check-input" type="checkbox" name="nivel_ingles[]" id="nivel_ingles" value="50%" checked>
                                @else
                                <input class="form-check-input" type="checkbox" name="nivel_ingles[]" id="nivel_ingles" value="50%">
                                @endif
                                <label class="form-check-label" for="nivel_ingles">
                                50%
                                </label>
                        </div>

                        <div class="form-check">
                                @if($s_ni === "75%")
                                <input class="form-check-input" type="checkbox" name="nivel_ingles[]" id="nivel_ingles" value="75%" checked>
                                @else
                                <input class="form-check-input" type="checkbox" name="nivel_ingles[]" id="nivel_ingles" value="75%">
                                @endif

                                <label class="form-check-label" for="nivel_ingles">
                                75%
                                </label>
                        </div>

                        <div class="form-check">
                                @if($s_ni === "100%")
                                <input class="form-check-inputc" style="margin: 0 0 0 -13px;" type="checkbox" name="nivel_ingles[]" id="nivel_ingles" value="100%" checked>
                                @else
                                <input class="form-check-inputc" style="margin: 0 0 0 -13px;" type="checkbox" name="nivel_ingles[]" id="nivel_ingles" value="100%">
                                @endif
                                <label class="form-check-label" for="nivel_ingles">
                                100%
                                </label>
                        </div>
                    </div>
                </div>

                <div class="row cer_idioma">
                    <div class="col-md-1">
                            <h6 class="foto_tex2">CERTIFICADOS</h6>
                    </div>
                    <div class="col-md-2 hijos_index">
                        <div class="image-upload-certificado">
                            <label for="file-input-certificado">
                                <img src="{{ asset('img/subir2.jpg') }}" alt ="Click aquí para subir tu foto" title ="Click aquí para subir tu foto" >
                            </label>
                            <input id="file-input-certificado" class="cur_hijo" type="file"   class="form-control" name="carga_certificado[]"/>
                        </div>
                    </div>

                    <div class="col-md-3">

                            <div id="previa-certificado">
                            <img src='http://localhost/recursos/public/{{ $v->carga_certificado }}' width="100px" height="70px" alt="">
                            </div>
                            <div class="img_pre-certificado" id="img_pre-certificado">

                            </div>

                    </div>
                </div>

        </div>
        @endforeach
    </div>


