$(document).ready(function(){
      $('#publica').submit(function(e) {
        e.preventDefault();

        var data = $(this).serializeArray();

        $.ajax({
            url: _BASE_URL+'publica/ajaxpublica',
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
                    $("#publica").resetear();
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

      $('#name_depato').on('change', function(e) {
        e.preventDefault();

        var data = $(this).val();
        $("#name_mun").find('option').remove();

        $.ajax({
            type: 'post',
            dataType: 'JSON',
            data: data,
            url: _BASE_URL+'publica/ajaxmunicipio/'+data,
            beforeSend: function() {
                $('.progresbar').fadeIn('fast');
            },
            success: function(response){

               if (response.answer) {
                    $('.progresbar').fadeOut('fast');
                    $("#name_mun").append(response.respuesta);
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

      $('#icon-file-rut').on('blur', function(e) {
        e.preventDefault();

        var data = $(this).val();

        $.ajax({
            type: 'post',
            dataType: 'JSON',
            data: data,
            url: _BASE_URL+'publica/ajaxrut/'+data,
            beforeSend: function() {
                $('.progresbar').fadeIn('fast');
            },
            success: function(response){

               if (response.answer) {
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