//backstretch
$(document).ready(function() {
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
                    $('body').load(_BASE_URL+"dashboard");
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
                    $('body').load(_BASE_URL+"dashboard");
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
                dataType: 'JSON',
                data: formData,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    $('.progresbar').fadeIn('fast');
                },
                success: function(response)
                {
                    if (response.answer) {
                        $("#respuesta").html(response.respuesta);
                        $("#input_new_file_name").html(response.datainput);
                        $('.progresbar').fadeOut('fast');
                    }
                   
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
                    $('body').load(_BASE_URL+"dashboard");
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

        $("input[name='editar_img_Logo']").on("change", function(){

            var formData = new FormData($("#editar_form_portafolio")[0]);
            var ruta = _BASE_URL+'dashboard/ajaxeditarimg';

            $.ajax({
                url: ruta,
                type: "POST",
                dataType: 'JSON',
                data: formData,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    $('.progresbar').fadeIn('fast');
                },
                success: function(response)
                {
                    if (response.answer) {
                        $("#respuesta").html(response.respuesta);
                        $("#edtar_input_new_file_name").html(response.datainput);
                        $('.progresbar').fadeOut('fast');
                    }
                   
                }
            });
        });

});

$(document).ready(function(){
      $('#editar_form_portafolio').submit(function(e) {
        e.preventDefault();

        var data = $(this).serializeArray();

        $.ajax({
            url: _BASE_URL+'dashboard/ajaxeditarportafolio',
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
                    $("#editar_form_portafolio").resetear();
                    $('body').load(_BASE_URL+"dashboard");
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

        $("input[name='img_favi_icon']").on("change", function(){

            var formData = new FormData($("#form_favi_icon")[0]);
            var ruta = _BASE_URL+'dashboard/faviicon';

            $.ajax({
                url: ruta,
                type: "POST",
                dataType: 'JSON',
                data: formData,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    $('.progresbar').fadeIn('fast');
                },
                success: function(response)
                {
                    if (response.answer) {
                        $(".mensajeAjax").fadeIn("clip");
                        $(".msnAjax").html(response.respuesta);
                        $('.progresbar').fadeOut('fast');
                        $("#mensajeAjax").fadeAjax();
                        $("#editar_form_portafolio").resetear();
                    }
                   
                }
            });
           
        });

});

$(document).ready(function(){
      $('#form_tipo_producto').submit(function(e) {
        e.preventDefault();

        var data = $(this).serializeArray();

        $.ajax({
            url: _BASE_URL+'dashboard/ajaxnuevotipoproducto',
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
                    $("#form_tipo_producto").resetear();
                    $('body').load(_BASE_URL+"dashboard");
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
      $('#form_editar_tipo').submit(function(e) {
        e.preventDefault();

        var data = $(this).serializeArray();

        $.ajax({
            url: _BASE_URL+'dashboard/ajaxeditartipoproducto',
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
                    $("#form_editar_tipo").resetear();
                    $('body').load(_BASE_URL+"dashboard");
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
      $('#form_eliminar_tipo').submit(function(e) {
        e.preventDefault();

        var data = $(this).serializeArray();

        $.ajax({
            url: _BASE_URL+'dashboard/ajaxdeletetipoproducto',
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
                    $("#form_eliminar_tipo").resetear();
                    $('body').load(_BASE_URL+"dashboard");
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

//producto

$(document).ready(function(){
      $('#form_nuevo_producto').submit(function(e) {
        e.preventDefault();

        var data = $(this).serializeArray();

        $.ajax({
            url: _BASE_URL+'dashboard/ajaxnuevoproducto',
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
                    $("#form_nuevo_producto").resetear();
                    $('body').load(_BASE_URL+"dashboard");
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

//cargar producto
$(document).ready(function(){

      $('#producto_select_editar_producto').on('change', function(e) {
        e.preventDefault();

        var data = $(this).val();

        $.ajax({
            type: 'post',
            dataType: 'JSON',
            data: data,
            url: _BASE_URL+'dashboard/ajaxgetProducto/'+data,
            beforeSend: function() {
                $('.progresbar').fadeIn('fast');
            },
            success: function(response){

               if (response.answer) {
                    $('.progresbar').fadeOut('fast');
                    $('#editar_nombre_producto').html(response.nombre)
                    $('#editar_valor_producto').html(response.valor)
                    $('#editar_descripcion_producto').html(response.descripcion)
               }else{
                    alert("a ocurrido un error contacte al administrador");
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

//editar producto

$(document).ready(function(){
      $('#form_editar_producto').submit(function(e) {
        e.preventDefault();

        var data = $(this).serializeArray();

        $.ajax({
            url: _BASE_URL+'dashboard/ajaxeditarproducto',
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
                    $("#form_editar_producto").resetear();
                    $('body').load(_BASE_URL+"dashboard");
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

//eliminar producto

$(document).ready(function(){
      $('#form_eliminar_producto').submit(function(e) {
        e.preventDefault();

        var data = $(this).serializeArray();
        //var data = $("#producto_select_eliminar_producto").val();

        $.ajax({
            url: _BASE_URL+'dashboard/ajaxeliminarproducto',
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
                    $("#form_eliminar_producto").resetear();
                    $('body').load(_BASE_URL+"dashboard");
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

//nuevo tag

$(document).ready(function(){
      $('#nuevo_list_tags').submit(function(e) {
        e.preventDefault();

        var data = $(this).serializeArray();

        $.ajax({
            url: _BASE_URL+'dashboard/ajaxnuevotag',
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
                    $("#nuevo_list_tags").resetear();
                    $('body').load(_BASE_URL+"dashboard");
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

//editar tag
$(document).ready(function(){

      $('#editar_producto_select_tag').on('change', function(e) {
        e.preventDefault();

        var data = $(this).val();

        $.ajax({
            type: 'post',
            dataType: 'JSON',
            data: data,
            url: _BASE_URL+'dashboard/ajaxEditartags/'+data,
            beforeSend: function() {
                $('.progresbar').fadeIn('fast');
            },
            success: function(response){

               if (response.answer) {
                    $('.progresbar').fadeOut('fast');
                    $('#editar_tags_').html(response.tags)
               }else{
                    alert("a ocurrido un error contacte al administrador");
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

//editar lista tag

$(document).ready(function(){
      $('#editar_list_tags').submit(function(e) {
        e.preventDefault();

        var data = $(this).serializeArray();

        $.ajax({
            url: _BASE_URL+'dashboard/agregartags',
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
                    $("#editar_list_tags").resetear();
                    $('body').load(_BASE_URL+"dashboard");
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

//foto producto

$(document).ready(function(){

        $("input[name='input_img_producto']").on("change", function(){

            var formData = new FormData($("#form_fotos_producto")[0]);
            var ruta = _BASE_URL+'dashboard/registrarimagen';

            $.ajax({
                url: ruta,
                type: "POST",
                dataType: 'JSON',
                data: formData,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    $('.progresbar').fadeIn('fast');
                },
                success: function(response)
                {
                    if (response.answer) {
                        $(".mensajeAjax").fadeIn("clip");
                        $(".msnAjax").html(response.respuesta);
                        $("#new_input_fille").html(response.responseinput)
                        $('.progresbar').fadeOut('fast');
                        $("#mensajeAjax").fadeAjax();
                        $("#editar_form_portafolio").resetear();
                    }
                   
                }
            });
           
        });

});

//imagen asociacion producto

$(document).ready(function(){
      $('#form_fotos_producto').submit(function(e) {
        e.preventDefault();

        var data = $(this).serializeArray();

        $.ajax({
            url: _BASE_URL+'dashboard/registrarnameimg',
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
                    $("#form_fotos_producto").resetear();
                    $('body').load(_BASE_URL+"dashboard");
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

//editar foto
$(document).ready(function(){

        $("input[name='input_img_producto_editar']").on("change", function(){

            var formData = new FormData($("#form_editar_img_producto")[0]);
            var ruta = _BASE_URL+'dashboard/registrarimagenproducto';

            $.ajax({
                url: ruta,
                type: "POST",
                dataType: 'JSON',
                data: formData,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    $('.progresbar').fadeIn('fast');
                },
                success: function(response)
                {
                    if (response.answer) {
                        $(".mensajeAjax").fadeIn("clip");
                        $(".msnAjax").html(response.respuesta);
                        $("#newinput_fille").html(response.responseinput);
                        $('.progresbar').fadeOut('fast');
                        $("#mensajeAjax").fadeAjax();
                        $("#editar_form_portafolio").resetear();
                    }
                   
                }
            });
           
        });

});

$(document).ready(function(){
      $('#form_editar_img_producto').submit(function(e) {
        e.preventDefault();

        var data = $(this).serializeArray();

        $.ajax({
            url: _BASE_URL+'dashboard/editarfotoproducto',
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
                    $("#form_editar_img_producto").resetear();
                    $('body').load(_BASE_URL+"dashboard");
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

//blog

$(document).ready(function(){
      $('#form_nuevo_blog').submit(function(e) {
        e.preventDefault();

        var data = $(this).serializeArray();

        $.ajax({
            url: _BASE_URL+'dashboard/registrararticulo',
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
                    $("#form_nuevo_blog").resetear();
                    $('body').load(_BASE_URL+"dashboard");
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

      $('#select_editar_blog').on('change', function(e) {
        e.preventDefault();

        var data = $(this).val();
        $.ajax({
            type: 'post',
            dataType: 'JSON',
            data: data,
            url: _BASE_URL+'dashboard/cargararticulo/'+data,
            beforeSend: function() {
                $('.progresbar').fadeIn('fast');
            },
            success: function(response){

               if (response.answer) {
                    $('.progresbar').fadeOut('fast');
                    $('#blog_editar_tema').html(response.tema);
                    $('#blog_editar_autor').html(response.autor);
                    $('#blog_editar_titulo').html(response.titulo);
                    $('#blog_editar_contenido').html(response.contenido);
               }else{
                    alert("a ocurrido un error contacte al administrador");
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
      $('#form_editar_blog').submit(function(e) {
        e.preventDefault();

        var data = $(this).serializeArray();

        $.ajax({
            url: _BASE_URL+'dashboard/editararticulo',
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
                    $("#form_editar_blog").resetear();
                    $('body').load(_BASE_URL+"dashboard");
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
      $('#form_asociacion_producto_blog').submit(function(e) {
        e.preventDefault();

        var data = $(this).serializeArray();

        $.ajax({
            url: _BASE_URL+'dashboard/asocialprodutoarticulo',
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
                    $("#form_asociacion_producto_blog").resetear();
                    $('body').load(_BASE_URL+"dashboard");
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
      $('#form_eliminar').submit(function(e) {
        e.preventDefault();

        var data = $(this).serializeArray();

        $.ajax({
            url: _BASE_URL+'dashboard/eliminararticulo',
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
                    $("#form_eliminar").resetear();
                    $('body').load(_BASE_URL+"dashboard");
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

        $("input[name='fille_foto_articulo']").on("change", function(){

            var formData = new FormData($("#form_foto_articulo")[0]);
            var ruta = _BASE_URL+'dashboard/fotoarticulonuevo';

            $.ajax({
                url: ruta,
                type: "POST",
                dataType: 'JSON',
                data: formData,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    $('.progresbar').fadeIn('fast');
                },
                success: function(response)
                {
                    if (response.answer) {
                        $(".mensajeAjax").fadeIn("clip");
                        $(".msnAjax").html(response.respuesta);
                        $("#input_file_article_js").html(response.responseinput);
                        $('.progresbar').fadeOut('fast');
                        $("#mensajeAjax").fadeAjax();
                        $("#editar_form_portafolio").resetear();
                    }
                   
                }
            });
           
        });

});


$(document).ready(function(){
      $('#form_foto_articulo').submit(function(e) {
        e.preventDefault();

        var data = $(this).serializeArray();

        $.ajax({
            url: _BASE_URL+'dashboard/registrarnameimagenes',
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
                    $("#form_foto_articulo").resetear();
                    $('body').load(_BASE_URL+"dashboard");
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

        $("input[name='editar_foto_artiulo']").on("change", function(){

            var formData = new FormData($("#form_editar_foto_articulo")[0]);
            var ruta = _BASE_URL+'dashboard/fotoarticuloeditar';

            $.ajax({
                url: ruta,
                type: "POST",
                dataType: 'JSON',
                data: formData,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    $('.progresbar').fadeIn('fast');
                },
                success: function(response)
                {
                    if (response.answer) {
                        $(".mensajeAjax").fadeIn("clip");
                        $(".msnAjax").html(response.respuesta);
                        $("#input_file_path_foto_blog").html(response.responseinput);
                        $('.progresbar').fadeOut('fast');
                        $("#mensajeAjax").fadeAjax();
                        $("#editar_form_portafolio").resetear();
                    }
                   
                }
            });
           
        });

});
$(document).ready(function(){
      $('#form_editar_foto_articulo').submit(function(e) {
        e.preventDefault();

        var data = $(this).serializeArray();

        $.ajax({
            url: _BASE_URL+'dashboard/editarnameimagenes',
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
                    $("#form_editar_foto_articulo").resetear();
                    $('body').load(_BASE_URL+"dashboard");
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