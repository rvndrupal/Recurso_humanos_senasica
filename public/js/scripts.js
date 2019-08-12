//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches




$(".next").click(function(){


  var pasa=false;


  var nom=$("#nom");
  var sol_hijo=$('#sol_hijo');
  var solh;
  var sol_A=new Array();
  var esc;
  var esc_A=new Array();

        if(nom.val()=="" || nom.val().length < 1)
        {
            nom.addClass("is-invalid");
            pasa=false;
        }
        else{
            nom.removeClass("is-invalid");
            pasa=true;
        }

        $('.soltero_hijos input').each(function(i){

            data=$(this).attr('data-valor');//el numero
            var solh=$(this).attr('id');

            sol_A.push(solh);

        });

        $(sol_A).each(function(i){
        //var validar=$("#"+sol_A[i]);
            if($("#sol_hijo"+(i+2)).val()=="")
            {
            $("#sol_hijo"+(i+2)).addClass('is-invalid');
            pasa=false;
            }
            else{
                $("#sol_hijo"+(i+2)).removeClass('is-invalid');
               // pasa=true;
            }
            if($("#sol_edad"+(i+1)).val()=="")
            {
            $("#sol_edad"+(i+1)).addClass('is-invalid');
            pasa=false;
            }
            else{
                $("#sol_edad"+(i+1)).removeClass('is-invalid');
            }
        });

        //ESCOLARIDAD
        $('.escolaridad select').each(function(i){
            data=$(this).attr('data-valor');//el numero
            var esc=$(this).attr('id');
            esc_A.push(esc);
            //alert(esc_A);
        });

         $(esc_A).each(function(i){
            //grado
            if($("#grados"+(i+2)).val()=="")
            {
            $("#grados"+(i+2)).addClass('is-invalid');
            pasa=false;
            }
            else{
                $("#grados"+(i+2)).removeClass('is-invalid');
            }
            //carrera
            if($("#carreras"+(i+2)).val()=="")
            {
            $("#carreras"+(i+2)).addClass('is-invalid');
            pasa=false;
            }
            else{
                $("#carreras"+(i+2)).removeClass('is-invalid');
            }



         });



        if(pasa==true)
        {






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
