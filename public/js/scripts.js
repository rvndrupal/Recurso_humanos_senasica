//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches




$(".next").click(function(){



    var form= $("#msform");



    jQuery.validator.addMethod("texto", function(value, element) {
    return this.optional(element) ||  /^[a-záéóóúàèìòùäëïöüñ\s]+$/i.test(value);
    }, "Solo se permite texto");

    jQuery.validator.addMethod("email", function(value, element) {
    return this.optional(element) ||  /^[a-zA-Z0-9\._-]+@[a-zA-Z0-9-]{2,}[.][a-zA-Z]{2,4}$/.test(value);
    }, "Introduce un correo Valido");

    jQuery.validator.addMethod("numeros", function(value, element) {
    return this.optional(element) ||  /^[0-9]+$/.test(value);
    }, "Solo números");

    jQuery.validator.addMethod("imagen", function(value, element) {
    return this.optional(element) ||  /(.jpg|.jpeg|.png)$/i.test(value);
    }, "Formato no valido solo jpg,jpeg,png");

    jQuery.validator.addMethod("pdf", function(value, element) {
    return this.optional(element) ||  /(.pdf)$/i.test(value);
    }, "Formato no valido solo (PDF)");




    form.validate({



        rules:{
            // nom:{required:true,minlength:3,maxlength:20,texto: true},
            // ap:{required:true,minlength:3,maxlength:20,texto: true},
            // am:{required:true,minlength:3,maxlength:20,texto: true},
            // paises_id:{required:true},
            // rfc:{required:true,minlength:12,maxlength:13},
            // curp:{required:true,minlength:18,maxlength:18},
            // correo_per:{required:true,email:true},
            // correo_ins:{required:true,email:true},
            // tel_casa:{required:true,minlength:8,maxlength:30,numeros:true},
            // tel_movil:{required:true,minlength:8,maxlength:30,numeros:true},
            // fecha_nacimiento:{required:true},
            // foto:{required:true,imagen:true},
            // carga_rfc:{required:true,imagen:true},
            // carga_curp:{required:true,imagen:true},
            // carga_ife:{required:true,imagen:true},
            // estados_id:{required:true},
            // municipios_id:{required:true},
            // colonias_id:{required:true},
            // calle:{required:true,minlength:5,maxlength:100},
            // numero:{required:true,minlength:2,maxlength:5,numeros:true},
            // carga_domicilio:{required:true,imagen:true},
            // fecha_domicilio:{required:true},
            // estado_civils_id:{required:true},
            // nombres_coy:{required:true,minlength:3,maxlength:20,texto: true},
            // primero_coy:{required:true,minlength:3,maxlength:20,texto: true},
            // segundo_coy:{required:true,minlength:3,maxlength:20,texto: true},
            // curp_coy:{required:true,minlength:18,maxlength:18},
            // carga_curp_coy:{required:true,imagen:true},
            // 'nombre_hijo_coy[]':{required:true,minlength:3,maxlength:20,texto: true},


        },

        messages:{
            nom:{required:"Es obligatorio",minlength:"Minimo 3 caracteres",maxlength:"Máximo de 20 caracteres"},
            ap:{required:"Es obligatorio",minlength:"Minimo 3 caracteres",maxlength:"Máximo de 20 caracteres"},
            am:{required:"Es obligatorio",minlength:"Minimo 3 caracteres",maxlength:"Máximo de 20 caracteres"},
            paises_id:{required:"Es obligatorio"},
            rfc:{required:"Es obligatorio",minlength:"Mínimo 12 caracteres",maxlength:"Máximo 13 caracteres"},
            curp:{required:"Es obligatorio",minlength:"Mínimo 18 caracteres",maxlength:"Máximo 18 caracteres"},
            correo_per:{required:"Es obligatorio"},
            correo_ins:{required:"Es obligatorio"},
            tel_casa:{required:"Es obligatorio",minlength:"Mínimo 8 caracteres",maxlength:"Máximo 30 caracteres"},
            tel_movil:{required:"Es obligatorio",minlength:"Mínimo 10 caracteres",maxlength:"Máximo 30 caracteres"},
            fecha_nacimiento:{required:"Es obligatorio"},
            foto:{required:"Es obligatorio"},
            carga_rfc:{required:"Es obligatorio"},
            carga_curp:{required:"Es obligatorio"},
            carga_ife:{required:"Es obligatorio"},
            estados_id:{required:"Es obligatorio"},
            municipios_id:{required:"Es obligatorio"},
            colonias_id:{required:"Es obligatorio"},
            calle:{required:"Es obligatorio",minlength:"Mínimo 5 caracteres",maxlength:"Máximo 100 caracteres"},
            numero:{required:"Es obligatorio",minlength:"Mínimo 2 caracteres",maxlength:"Máximo 5 caracteres"},
            carga_domicilio:{required:"Es obligatorio"},
            fecha_domicilio:{required:"Es obligatorio"},
            nombres_coy:{required:"Es obligatorio",minlength:"Minimo 3 caracteres",maxlength:"Máximo de 20 caracteres"},
            primero_coy:{required:"Es obligatorio",minlength:"Minimo 3 caracteres",maxlength:"Máximo de 20 caracteres"},
            segundo_coy:{required:"Es obligatorio",minlength:"Minimo 3 caracteres",maxlength:"Máximo de 20 caracteres"},
            estado_civils_id:{required:"Es obligatorio"},
            curp_coy:{required:"Es obligatorio",minlength:"Mínimo 18 caracteres",maxlength:"Máximo 18 caracteres"},
            carga_curp_coy:{required:"Es obligatorio"},
            // 'nombre_hijo_coy[]':{required:"Es obligatorio",minlength:"Minimo 3 caracteres",maxlength:"Máximo de 20 caracteres"},



        },


    });//validación de los campos


    var id;
    var cla;
    var res=new Array();
    var r;
    var edad;
    var edad_array=new Array();
    var data;
    var idm;
    var clam;
    var rm;
    var resm=new Array();
    var idsol;
    var clasol;
    var rsol;
    var resol=new Array();
    var edsol=new Array();



    $('.recorrer input').each(function() {
        // alert($(this).attr('class'));
         id=$(this).attr('id');
         cla=$(this).attr('class');//par el error
         r = cla.substring(13,24); //deja la pura palabra is-invalid
         data=$(this).attr('data-valor');//el numero

        $('#hijoc'+data).rules("add",
            {
                required: true,texto:true,minlength:4,maxlength:20,

                messages: {
                    required: "Es obligatorio",minlength:"Minimo 4 caracteres",maxlength:"Máximo de 20 caracteres"
                }
        });

        $('#edadc'+data).rules("add",
        {
            required: true,numeros:true,minlength:1,maxlength:2,
            messages: {
                required: "Es obligatorio",minlength:"Minimo 4 caracteres",maxlength:"Máximo de 3 caracteres"
            }
    });

        res.push(r);//la magia ponerlo en un arreglo
        edad_array.push(r);

    });


    $(res).each(function(i){
        //alert(res + i);
        if(res[i] == "is-invalid")
        {
           // alert("dentro: "+res);
            form.valid=false;
        }
    });

    $(edad_array).each(function(i){
        //alert(res + i);
        if(edad_array[i] == "is-invalid")
        {
           // alert("dentro: "+res);
            form.valid=false;
        }
    });

    //descendientes conyuges
    $('.muertos input').each(function() {
        // alert($(this).attr('class'));
         idm=$(this).attr('id');
         clam=$(this).attr('class');//par el error
         rm = clam.substring(13,24); //deja la pura palabra is-invalid
         data=$(this).attr('data-valor');


        $('#des_nom'+data).rules("add",
            {
                required: true,texto:true,minlength:4,maxlength:20,
                messages: {
                    required: "Es obligatorio",minlength:"Minimo 4 caracteres",maxlength:"Máximo de 20 caracteres"
                }
        });

        $('#des_ap'+data).rules("add",
        {
            required: true,texto:true,minlength:4,maxlength:20,
            messages: {
                required: "Es obligatorio",minlength:"Minimo 4 caracteres",maxlength:"Máximo de 20 caracteres"
            }
         });

         $('#des_am'+data).rules("add",
         {
             required: true,texto:true,minlength:4,maxlength:20,
             messages: {
                 required: "Es obligatorio",minlength:"Minimo 4 caracteres",maxlength:"Máximo de 20 caracteres"
             }
        });

        resm.push(rm);//la magia ponerlo en un arreglo

    });

    $(resm).each(function(i){
        //alert(res + i);
        if(resm[i] == "is-invalid")
        {
           // alert("dentro: "+res);
            form.valid=false;
        }
    });

    //soltero con hijos
    $('.soltero_hijos input').each(function() {
        // alert($(this).attr('class'));
         idsol=$(this).attr('id');
         clasol=$(this).attr('class');//par el error
         rsol = clasol.substring(13,24); //deja la pura palabra is-invalid
         data=$(this).attr('data-valor');//el numero



        $('#sol_hijo'+data).rules("add",
            {
                required: true,texto:true,minlength:4,maxlength:20,
                messages: {
                    required: "Es obligatorio",minlength:"Minimo 4 caracteres",maxlength:"Máximo de 20 caracteres"
                }
        });

        $('#sol_edad'+data).rules("add",
        {
            required: true,numeros:true,minlength:1,maxlength:2,
            messages: {
                required: "Es obligatorio",minlength:"Minimo 4 caracteres",maxlength:"Máximo de 2 caracteres"
            }
        });

        resol.push(rsol);//la magia ponerlo en un arreglo
        edsol.push(rsol);
    });

    $(resol).each(function(i){
        //alert(res + i);

        if(resol[i] == "is-invalid")
        {
           // alert("dentro: "+res);
            form.valid=false;
        }
    });

    $(edsol).each(function(i){
        //alert(res + i);
        if(edsol[i] == "is-invalid")
        {
           // alert("dentro: "+res);
            form.valid=false;
        }
    });




        if (form.valid() == true){

                if(animating) return false;
                animating = true;

                current_fs = $(this).parent();
                next_fs = $(this).parent().next();

                //activate next step on progressbar using the index of next_fs
                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                //show the next fieldset
                next_fs.show();
                //hide the current fieldset with style
                current_fs.animate({opacity: 0}, {
                    step: function(now, mx) {
                        //as the opacity of current_fs reduces to 0 - stored in "now"
                        //1. scale current_fs down to 80%
                        scale = 1 - (1 - now) * 0.2;
                        //2. bring next_fs from the right(50%)
                        left = (now * 50)+"%";
                        //3. increase opacity of next_fs to 1 as it moves in
                        opacity = 1 - now;
                        current_fs.css({'transform': 'scale('+scale+')'});
                        next_fs.css({'left': left, 'opacity': opacity});
                    },
                    duration: 1200,
                    complete: function(){
                        current_fs.hide();
                        animating = false;
                    },
                    //this comes from the custom easing plugin
                    easing: 'easeInOutBack'
                });

        }






});

$(".previous").click(function(){
	if(animating) return false;
	animating = true;

	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();

	//de-activate current step on progressbar
	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

	//show the previous fieldset
	previous_fs.show();
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 50)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		},
		duration: 1200,
		complete: function(){
			current_fs.hide();
			animating = false;
		},
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".submit").click(function(){


	return true;
})
