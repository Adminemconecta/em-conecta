<footer class="page-footer blue darken-3">
  <div class="container">
    <div class="row">
      <div class="col l6 s12">
        <h5 title="Empresa em-conecta" class="white-text"><strong>Em-Conecta</strong></h5>
        <p class="white-text">Conecta tu empresa al mundo a travez de la web</p>
      </div>
      <div class="col l4 offset-l2 s12">
        <h5 class="white-text"><strong>Enlaces frecuentes</strong></h5>
        <ul>
          <li><a title="Nuestra empresa" class="white-text footer-text" href="<?php echo BASE_URL ?>nosotros">Nosotros</a></li>
          <li><a title="Trabaja con nosotros" class="white-text footer-text" href="<?php echo BASE_URL ?>trabaja">Trabaja con nosotros</a></li>
          <li><a title="Contactanos" class="white-text footer-text" href="<?php echo BASE_URL ?>contacto">Contactanos</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container white-text">
    © 2016 Copyright <?php echo COMPANY ?>
    <a title="url <?php echo APP_COMPANY ?>" class="white-text right" href="<?php echo BASE_URL ?>"><?php echo APP_COMPANY ?></a>
    </div>
  </div>
</footer>
</body>
    <link rel="stylesheet" type="text/css" href="<?php echo $_layoutParams['ruta_css'];?>normalize.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $_layoutParams['ruta_css'];?>materialize.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $_layoutParams['ruta_css'];?>style.css">
    <link href='https://fonts.googleapis.com/css?family=Sansita+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <?php if(isset($_layoutParams['css']) && count($_layoutParams['css'])){ ?>
        <?php for($i=0; $i < count($_layoutParams['css']); $i++){ ?>
        <link rel="stylesheet" type="text/css" href="<?php echo $_layoutParams['css'][$i] ?>">
        <?php } ?>
    <?php } ?>
    <script src="<?php echo BASE_URL; ?>public/js/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="<?php echo BASE_URL; ?>public/js/jquery-ui.min.js" type="text/javascript"></script>
    <script src="<?php echo BASE_URL; ?>public/js/materialize.min.js" type="text/javascript"></script>
    <script src="http://maps.googleapis.com/maps/api/js?v3" type="text/javascript"></script>
    
    <?php if(isset($_layoutParams['js']) && count($_layoutParams['js'])){ ?>

        <?php for($i=0; $i < count($_layoutParams['js']); $i++){ ?>
        <script src="<?php echo $_layoutParams['js'][$i] ?>" type="text/javascript"></script>
        <?php } ?>

    <?php } ?>
    <script type="text/javascript">
          $(document).ready(function() {
            $(".button-collapse").sideNav();
            $('select').material_select();
            $('.parallax').parallax();
            $('.slider').slider({
              indicators: false,
              height: 800
            });
            $('.collapsible').collapsible({
              accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
            });
            $('ul.tabs').tabs();
          });
        
          $(document).ready(function() {
            $(".session-fade").click(function(){
                $(".iniciar-session").fadeIn("clip");
            });
            $(".close").click(function(){
                $(".iniciar-session").fadeOut("clip");
            });
            $(".google-show-api").click(function(){
                $(".google-api").fadeIn("clip");
            });
            $(".google-close").click(function(){
                $(".google-api").fadeOut("clip");
            });
            $(".google-nav  .icon-menu").click(function(){
                $(".google-menu").toggle("drop");
                $(".google-menu-close").toggle("drop");
            });
            $(".google-menu-close").click(function(){
                $(".google-menu").toggle("drop");
                $(".google-menu-close").toggle("drop");
            });
            $(".data-admin").click(function(){
                $(".data-menu").show("drop");
              $(".data-menu-close").fadeIn("drop");
            });
            $(".data-admin_menu, .data-menu-close").click(function(){
                $(".data-menu").hide("drop");
                $(".data-menu-close").fadeOut("drop");
            });
            $(".close_content_tab").click(function(){
                $(".content_tabs_").fadeOut("drop");
            });
          });

          jQuery.fn.resetear = function () {
            $(this).each (function() { this.reset(); });
          }

          jQuery.fn.fadeAjax = function () {
            setTimeout(function() {
                  $(".mensajeAjax").fadeOut('clip');
              },3000);
          }
          
          var  _BASE_URL = '<?php echo BASE_URL ?>';

          $('#google_map_depato').on('change', function(e) {
            e.preventDefault();

            var data = $(this).val();
            $("#google_name_mun").find('option').remove();
            
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
                        $("#google_name_mun").append(response.respuesta);
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
    </script>
</html>