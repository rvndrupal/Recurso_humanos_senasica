{{--  @extends('layouts.admin')  --}}

@section('content')
    {{--  <div class="box">
        <div class="box-header">
            <h3 class="box-title">{{ __('Formulario Carnet') }}</h3>
        </div>

        <div class="box-body">
            @if($usuarios->exists)
                {{ Form::model($usuarios, ['url' => route('usuarios.update', ['id' => $usuarios->id]), 'method' => 'put']) }}
            @else
                {{ Form::model($usuarios, ['url' => route('usuarios.store')]) }}
            @endif

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                {{ Form::label('nom', __('Nombre'), ['class' => 'control-label']) }}
                {{ Form::text('nom', null, ['class' => ['form-control'], 'id' => 'name']) }}
                @if($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('nom') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="box-footer">
            <a href="{{ route('categories.index') }}" class="btn btn-default">{{ __('Volver') }}</a>
            {{ Form::submit($title, ['class' => 'btn btn-info pull-right']) }}
            {{ Form::close() }}
        </div>

    </div>  --}}


    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
        <link rel="icon" type="image/png" href="assets/img/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>Senasica</title>

        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />

        <!--     Fonts and icons     -->
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">

        <!-- CSS Files -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/css/gsdk-bootstrap-wizard.css') }}" rel="stylesheet" />

        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link href="{{ asset('assets/css/demo.css') }}" rel="stylesheet" />
    </head>

    <?php //dd($pais) ?>
    <body>
    <div class="image-container set-full-height">
        <div class="image-container set-full-height" style="background-image: url('{{ asset('assets/img/fondo_tres.jpeg') }}')">
        <!--   Creative Tim Branding   -->
        <a href="http://creative-tim.com">
             <div class="logo-container">
                <div class="logo">
                    <img src="{{ asset('assets/img/senasica.jpg') }}">
                </div>
                <div class="brand">
                    Senasica
                </div>
            </div>
        </a>

        <!--  Made With Get Shit Done Kit  -->
            <!-- <a href="http://demos.creative-tim.com/get-shit-done/index.html?ref=get-shit-done-bootstrap-wizard" class="made-with-mk">
                <div class="brand">GK</div>
                <div class="made-with">Made with <strong>GSDK</strong></div>
            </a> -->

        <!--   Big container   -->
        <div class="container">
            <div class="row">
            <div class="col-sm-8 col-sm-offset-2">

                <!--      Wizard container        -->
                <div class="wizard-container">

                    <div class="card wizard-card" data-color="orange" id="wizardProfile">
                        <form action="" method="">
                    <!--        You can switch ' data-color="orange" '  with one of the next bright colors: "blue", "green", "orange", "red"          -->

                            <div class="wizard-header">
                                <h3>
                                   <b>ADMINISTRACIÓN </b> DE USUARIOS <br>
                                   <small>Registro de loa datos del Carnet</small>
                                </h3>
                            </div>

                            <div class="wizard-navigation">
                                <ul>
                                    <li><a href="#about" data-toggle="tab">Datos Personales</a></li>
                                    <li><a href="#trabajo" data-toggle="tab">Trabajo</a></li>
                                    <li><a href="#address" data-toggle="tab">Dirección</a></li>
                                </ul>

                            </div>

                            <div class="tab-content">
                            {{--  PASO UNO  --}}
                                <div class="tab-pane" id="about">
                                  <div class="row">
                                      <h4 class="info-text"> Datos Personales (Datos Validos)</h4>
                                      <div class="col-sm-2 col-sm-offset-1">
                                         <div class="picture-container">
                                              <div class="picture">
                                                  <img src="{{ asset('assets/img/default-avatar.png') }}" class="picture-src" id="wizardPicturePreview" title=""/>
                                                  <input type="file" id="wizard-picture">
                                              </div>
                                              <h6>Foto</h6>
                                          </div>
                                      </div>
                                      <div class="col-sm-4">
                                          <div class="form-group">
                                            <label>Nombre <small>( * )</small></label>
                                            <input name="nom" type="text" class="form-control" placeholder="Nombre...">
                                          </div>
                                      </div>
                                      <div class="col-sm-4">
                                          <div class="form-group">
                                            <label>Apellido Paterno <small>( * )</small></label>
                                            <input name="ap" type="text" class="form-control" placeholder="Perez...">
                                          </div>
                                      </div>

                                      <div class="col-sm-4">
                                        <div class="form-group">
                                          <label>Apellido materno <small>( * )</small></label>
                                          <input name="am" type="text" class="form-control" placeholder="Chavez...">
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                          <label>Tel Movil <small>( * )</small></label>
                                          <input name="tel_cel" type="text" class="form-control" placeholder="Perez...">
                                        </div>
                                    </div>

                                      <div class="col-sm-10 col-sm-offset-1">
                                        <div class="form-group">
                                            <label>Email trabajo<small>( * )</small></label>
                                            <input name="correo_inst" type="email" class="form-control" placeholder="demo@senasica.com">
                                        </div>
                                    </div>


                                  </div>
                                </div>





                                <div class="tab-pane" id="trabajo">
                                    <h4 class="info-text"> Información del (Trabajo) </h4>
                                    <div class="row">

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                              <label>Correo personal <small>( * )</small></label>
                                              <input name="correo_per" type="email" class="form-control" placeholder="Nombre...">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                              <label>Tel Casa <small>( * )</small></label>
                                              <input name="tel_casa" type="text" class="form-control" placeholder="Perez...">
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                          <div class="form-group">
                                            <label>RFC <small>( * )</small></label>
                                            <input name="rfc" type="text" class="form-control" placeholder="Chavez...">
                                          </div>
                                      </div>

                                      <div class="col-sm-10">
                                            <div class="form-group">
                                              <label>CURP <small>( * )</small></label>
                                              <input name="curp" type="text" class="form-control" placeholder="Chavez...">
                                            </div>
                                        </div>

                                    </div>
                                </div>


                                <div class="tab-pane" id="address">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h4 class="info-text"> Dirección </h4>
                                        </div>
                                        <div class="col-sm-7">
                                             <div class="form-group">
                                                <label>Calle</label>
                                                <input type="text" name="calle" class="form-control" placeholder="5h Avenida">
                                              </div>
                                        </div>
                                        <div class="col-sm-4">
                                             <div class="form-group">
                                                <label>Numero</label>
                                                <input type="text" name="numero" class="form-control" placeholder="# 242">
                                              </div>
                                        </div>

                                        <div class="col-sm-3">
                                                <div class="form-group">
                                                   <label>País</label><br>
                                                    <select name="pais" class="form-control" id="pais">
                                                    @foreach($pais as $p)
                                                     <option value="{{ $p->id }}">{{ $p->nombre_pais }}</option>
                                                    @endforeach
                                                   </select>
                                                 </div>
                                           </div>


                                           <div class="col-sm-3">
                                                <div class="form-group">
                                                   <label>Estado</label><br>
                                                    <select name="estado" class="form-control" id="estado">
                                                        <option value="">Selecciona un estado</option>

                                                   </select>
                                                 </div>
                                           </div>

                                    </div>
                                </div>
                            </div>
                            <div class="wizard-footer height-wizard">
                                <div class="pull-right">
                                    <input type='button' class='btn btn-next btn-fill btn-warning btn-wd btn-sm' name='next' value='Siguiente' />
                                    <input type='button' class='btn btn-finish btn-fill btn-warning btn-wd btn-sm' name='finish' value='Guardar' />

                                </div>

                                <div class="pull-left">
                                    <input type='button' class='btn btn-previous btn-fill btn-default btn-wd btn-sm' name='previous' value='Atras' />
                                </div>
                                <div class="clearfix"></div>
                            </div>

                        </form>
                    </div>
                </div> <!-- wizard container -->
            </div>
            </div><!-- end row -->
        </div> <!--  big container -->

        <div class="footer">
            <div class="container">
                 <!-- M <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">Creative Tim</a>. Free download <a href="http://www.creative-tim.com/product/bootstrap-wizard">here.</a> -->
            </div>
        </div>

    </div>

    </body>

        <!--   Core JS Files   -->
        <script src="{{ asset('assets/js/jquery-2.2.4.min.js') }}" type="text/javascript"></script>

        <script src="{{ asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/js/jquery.bootstrap.wizard.js') }}" type="text/javascript"></script>

        <!--  Plugin for the Wizard -->
        {{--  <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>  --}}
        <script src="{{ asset('assets/js/gsdk-bootstrap-wizard.js') }}"></script>

        <!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->

        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.js"></script>

        <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/localization/messages_es.js"></script>






{{--  @stop  --}}


<script>
    $(document).ready(function(){

        $("#pais").change(function(e){

            var id=e.target.value;
            console.log(id);

            if(id=="selected"){
                $("#estado").append("<option value=''>Selecciona un estado</option>");
                console.log("nada");
            }
            else{

                $.get("estados/" + id, function(data){

                    $("#estado").empty();

                    for(i=0; i<data.length ;i++)
                        {
                            $("#estado").append("<option value='" +data[i].id+"'>"+data[i].nombre_estado+"</option>");
                        }

                });
            }




        });


    });


    </script>
