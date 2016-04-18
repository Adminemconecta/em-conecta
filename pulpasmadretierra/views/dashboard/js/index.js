//backstretch
$(document).ready(function() {
	jQuery.backstretch(_BASE_URL+"public/img/fruits-market-colors-compressor.jpg");
	$("#conf_inicial").click(function(){
	    $(".social_user_mail").toggle("fade");
	    $(".portafolio_card").hide("fade");
	    $(".productos_cad").hide("fade");
	    $(".blog_cad").hide("fade");
	    $(".card_mail").hide("fade");
	});
	$("#portafolio").click(function(){
	    $(".portafolio_card").toggle("fade");
	    $(".social_user_mail").hide("fade");
	    $(".productos_cad").hide("fade");
	    $(".blog_cad").hide("fade");
	    $(".card_mail").hide("fade");
	});

	$("#tienda").click(function(){
	    $(".productos_cad").toggle("fade");
	    $(".social_user_mail").hide("fade");
	    $(".social_user_mail").hide("fade");
	    $(".portafolio_card").hide("fade");
	    $(".blog_cad").hide("fade");
	    $(".card_mail").hide("fade");
	});

	$("#blog").click(function(){
	    $(".blog_cad").toggle("fade");
	    $(".productos_cad").hide("fade");
	    $(".social_user_mail").hide("fade");
	    $(".social_user_mail").hide("fade");
	    $(".portafolio_card").hide("fade");
	    $(".card_mail").hide("fade");
	});

	$("#mail").click(function(){
	    $(".card_mail").toggle("fade");
	    $(".blog_cad").hide("fade");
	    $(".productos_cad").hide("fade");
	    $(".social_user_mail").hide("fade");
	    $(".social_user_mail").hide("fade");
	    $(".portafolio_card").hide("fade");
	});
});

$(document).ready(function(){
      $('#form_nuevo_usuario').submit(function(e) {
        e.preventDefault();

        var data = $(this).serializeArray();

        $.ajax({
            url: _BASE_URL+'dashboard/ajaxnuevousuario',
            type: 'post',
            dataType: 'JSON',
            data: data,
            beforeSend: function() {
                $('.progresbar').fadeIn('fast');
            },
            success: function(response){

               if (response.answer) {
                    $(".mensajeAjax").fadeIn("clip");
                    $('.msnAjax').html(response.respuesta);
                    $('.progresbar').fadeOut('fast');
                    $("#mensajeAjax").fadeAjax();
                    $("#form_nuevo_usuario").resetear();
               }else{
                    $(".mensajeAjax").fadeIn("clip");
                    $('.msnAjax').html(response.respuesta);
                    $('.progresbar').fadeOut('fast');
                    $("#mensajeAjax").fadeAjax();

               };
                
            },
            error: function(){
                if (jqXHR.status === 0) {

                alert('Not connect: Verify Network.');

                } else if (jqXHR.status == 404) {

                    alert('Requested page not found [404]');

                } else if (jqXHR.status == 500) {

                    alert('Internal Server Error [500].');

                } else if (textStatus === 'parsererror') {

                    alert('Requested JSON parse failed.');

                } else if (textStatus === 'timeout') {

                    alert('Time out error.');

                } else if (textStatus === 'abort') {

                    alert('Ajax request aborted.');

                } else {

                    alert('Uncaught Error: ' + jqXHR.responseText);

               }
            }
        })
        
    })
});

$(document).ready(function(){
      $('#form_editar_usuario').submit(function(e) {
        e.preventDefault();

        var data = $(this).serializeArray();

        $.ajax({
            url: _BASE_URL+'dashboard/ajaxeditarusuario',
            type: 'post',
            dataType: 'JSON',
            data: data,
            beforeSend: function() {
                $('.progresbar').fadeIn('fast');
            },
            success: function(response){

               if (response.answer) {
                    $(".mensajeAjax").fadeIn("clip");
                    $('.msnAjax').html(response.respuesta);
                    $('.progresbar').fadeOut('fast');
                    $("#mensajeAjax").fadeAjax();
                    $("#form_editar_usuario").resetear();
                    window.location.href = _BASE_URL+"login/cerrar";
               }else{
                    $(".mensajeAjax").fadeIn("clip");
                    $('.msnAjax').html(response.respuesta);
                    $('.progresbar').fadeOut('fast');
                    $("#mensajeAjax").fadeAjax();

               };
                
            },
            error: function(){
                if (jqXHR.status === 0) {

                alert('Not connect: Verify Network.');

                } else if (jqXHR.status == 404) {

                    alert('Requested page not found [404]');

                } else if (jqXHR.status == 500) {

                    alert('Internal Server Error [500].');

                } else if (textStatus === 'parsererror') {

                    alert('Requested JSON parse failed.');

                } else if (textStatus === 'timeout') {

                    alert('Time out error.');

                } else if (textStatus === 'abort') {

                    alert('Ajax request aborted.');

                } else {

                    alert('Uncaught Error: ' + jqXHR.responseText);

               }
            }
        })
        
    })
});

$(document).ready(function(){
      $('#nueva_red_social').submit(function(e) {
        e.preventDefault();

        var data = $(this).serializeArray();

        $.ajax({
            url: _BASE_URL+'dashboard/ajaxsocialred',
            type: 'post',
            dataType: 'JSON',
            data: data,
            beforeSend: function() {
                $('.progresbar').fadeIn('fast');
            },
            success: function(response){

               if (response.answer) {
                    $(".mensajeAjax").fadeIn("clip");
                    $('.msnAjax').html(response.respuesta);
                    $('.progresbar').fadeOut('fast');
                    $("#mensajeAjax").fadeAjax();
                    $("#nueva_red_social").resetear();
               }else{
                    $(".mensajeAjax").fadeIn("clip");
                    $('.msnAjax').html(response.respuesta);
                    $('.progresbar').fadeOut('fast');
                    $("#mensajeAjax").fadeAjax();

               };
                
            },
            error: function(){
                if (jqXHR.status === 0) {

                alert('Not connect: Verify Network.');

                } else if (jqXHR.status == 404) {

                    alert('Requested page not found [404]');

                } else if (jqXHR.status == 500) {

                    alert('Internal Server Error [500].');

                } else if (textStatus === 'parsererror') {

                    alert('Requested JSON parse failed.');

                } else if (textStatus === 'timeout') {

                    alert('Time out error.');

                } else if (textStatus === 'abort') {

                    alert('Ajax request aborted.');

                } else {

                    alert('Uncaught Error: ' + jqXHR.responseText);

               }
            }
        })
        
    })
});



$(document).ready(function(){

        $("input[name='img_Logo']").on("change", function(){

            var formData = new FormData($("#form_portafolio")[0]);
            var ruta = _BASE_URL+'dashboard/ajaximg';

            $.ajax({
                url: ruta,
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                success: function(datos)
                {
                    $("#respuesta").html(datos);
                }
            });
        });

});

$(document).ready(function(){
      $('#form_portafolio').submit(function(e) {
        e.preventDefault();

        var data = $(this).serializeArray();

        $.ajax({
            url: _BASE_URL+'dashboard/ajaxportafolio',
            type: 'post',
            dataType: 'JSON',
            data: data,
            beforeSend: function() {
                $('.progresbar').fadeIn('fast');
            },
            success: function(response){

               if (response.answer) {
                    $(".mensajeAjax").fadeIn("clip");
                    $('.msnAjax').html(response.respuesta);
                    $('.progresbar').fadeOut('fast');
                    $("#mensajeAjax").fadeAjax();
                    $("#form_portafolio").resetear();
               }else{
                    $(".mensajeAjax").fadeIn("clip");
                    $('.msnAjax').html(response.respuesta);
                    $('.progresbar').fadeOut('fast');
                    $("#mensajeAjax").fadeAjax();

               };
                
            },
            error: function(){
                if (jqXHR.status === 0) {

                alert('Not connect: Verify Network.');

                } else if (jqXHR.status == 404) {

                    alert('Requested page not found [404]');

                } else if (jqXHR.status == 500) {

                    alert('Internal Server Error [500].');

                } else if (textStatus === 'parsererror') {

                    alert('Requested JSON parse failed.');

                } else if (textStatus === 'timeout') {

                    alert('Time out error.');

                } else if (textStatus === 'abort') {

                    alert('Ajax request aborted.');

                } else {

                    alert('Uncaught Error: ' + jqXHR.responseText);

               }
            }
        })
        
    })
});