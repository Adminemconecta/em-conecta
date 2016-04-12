$(document).ready(function(){
      $('#ver_mensaje').submit(function(e) {
        e.preventDefault();

        var data = $(this).serializeArray();

        $.ajax({
            url: _BASE_URL+'cuenta/ajaxpumensaje',
            type: 'post',
            dataType: 'JSON',
            data: data,
            beforeSend: function() {
                $('.progresbar').fadeIn('fast');
            },
            success: function(response){

               if (response.answer) {
                    $(".content_tabs_").fadeIn("fast");
                    $('.nombre_apellido').html(response.respuesta);
                    $('#asunto_mensaje').html(response.asunto);
                    $('#email_mensaje').html(response.email);
                    $('#mensaje_mensaje').html(response.mensaje);
                    $('.progresbar').fadeOut('fast');
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
        $(".colose_content_info").click(function(){
                $(".contat_tabs_info").fadeOut("clip");
            });

      $('#name_empresa').on('change', function(e) {
        e.preventDefault();

        var data = $(this).val();
        
        $.ajax({
            type: 'post',
            dataType: 'JSON',
            data: data,
            url: _BASE_URL+'cuenta/ajax_info_empresa/'+data,
            beforeSend: function() {
                $('.progresbar').fadeIn('fast');
            },
            success: function(response){

               if (response.answer) {
                    $('.contat_tabs_info').fadeIn('fast');
                    $('.progresbar').fadeOut('fast');
                    $("#nombre").html(response.nombre);
                    $("#dir_ofi_central").html(response.oficina_central);
                    $("#dir_plantas").html(response.plantas_industriales);
                    $("#dir_oficina_contacto").html(response.oficinas_de_contacto);
                    $("#sociedad").html(response.tipo_sociedad);
                    $("#dir_domicilio").html(response.domicilio_legal);
                    $("#dir_domi_comercial").html(response.domicilio_comercial);
                    $("#precidente").html(response.presidente);
                    $("#fundacion").html(response.fundacion);
                    $("#no_empleados").html(response.numero_de_empleados);
                    $("#rut").html(response.rut);
                    $("#fax").html(response.fax);
                    $("#telefono").html(response.telefonos);
                    $("#email").html(response.e_mail);
                    $("#operaciones").html(response.principales_operaciones);
                    $("#productos").html(response.empresa_tipo_productos);
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