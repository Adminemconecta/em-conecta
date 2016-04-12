<div class="footer-copyright green darken-3">
  <div class="container white-text">
  © 2016 Copyright <?php echo COMPANY ?>
  <a title="url <?php echo APP_COMPANY ?>" class="white-text hide-on-small-only right" href="<?php echo BASE_URL ?>"><?php echo APP_COMPANY ?></a>
  </div>
</div>
</body>
    <link rel="stylesheet" type="text/css" href="<?php echo $_layoutParams['ruta_css'];?>normalize.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $_layoutParams['ruta_css'];?>materialize.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $_layoutParams['ruta_css'];?>style.css">
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <?php if(isset($_layoutParams['css']) && count($_layoutParams['css'])){ ?>
        <?php for($i=0; $i < count($_layoutParams['css']); $i++){ ?>
        <link rel="stylesheet" type="text/css" href="<?php echo $_layoutParams['css'][$i] ?>">
        <?php } ?>
    <?php } ?>
    <script src="<?php echo BASE_URL; ?>public/js/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="<?php echo BASE_URL; ?>public/js/jquery-ui.min.js" type="text/javascript"></script>
    <script src="<?php echo BASE_URL; ?>public/js/materialize.min.js" type="text/javascript"></script>
    <script src="<?php echo BASE_URL; ?>public/js/backstretch.min.js" type="text/javascript"></script>
    <script src="http://maps.googleapis.com/maps/api/js?v3" type="text/javascript"></script>
    
    <?php if(isset($_layoutParams['js']) && count($_layoutParams['js'])){ ?>

        <?php for($i=0; $i < count($_layoutParams['js']); $i++){ ?>
        <script src="<?php echo $_layoutParams['js'][$i] ?>" type="text/javascript"></script>
        <?php } ?>

    <?php } ?>
    <script type="text/javascript">

    //materializecss
          $(document).ready(function() {
            $(".button-collapse").sideNav();
            $('select').material_select();
            $('.parallax').parallax();
            $('.slider').slider({
              indicators: false,
              height: 300
            });
            $('.collapsible').collapsible({
              accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
            });
            $('ul.tabs').tabs();
          });
    //jquery
          $(document).ready(function() {
            $("#icon-close-menu").click(function(){
                $(".back-menu").fadeOut("clip");
            });
             $("#fadeIn-menu").click(function(){
                $(".back-menu").fadeIn("clip");
            });
          });
        // funciones reset form ajax y ocultar ajax

          jQuery.fn.resetear = function () {
            $(this).each (function() { this.reset(); });
          }

          jQuery.fn.fadeAjax = function () {
            setTimeout(function() {
                  $(".mensajeAjax").fadeOut('clip');
              },3000);
          }
          
          var  _BASE_URL = '<?php echo BASE_URL ?>';          
    </script>
</html>