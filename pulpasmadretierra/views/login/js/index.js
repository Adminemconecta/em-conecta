//backstretch
$(document).ready(function() {
	jQuery.backstretch(_BASE_URL+"public/img/nature-red-bush-young-compressor.jpg");
});

$(document).ready(function(){

    $('#formlogin').submit(function(e) {
        e.preventDefault();

        var data = $(this).serializeArray();
        
        $.ajax({
            url: _BASE_URL+'login/ajaxlogin',
            type: 'post',
            dataType: 'json',
            data: data,
            cache: false,
            beforeSend: function() {
                $('.progresbar').fadeIn('fast');
            },
            success: function(response){
               if (response.answer) {
                    location.reload();
               }else{
                    $('.msnAjax').html(response.msnAjax);
                    $(".mensajeAjax").fadeIn("clip");
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