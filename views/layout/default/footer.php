<footer class="page-footer teal darken-4">
  <div class="container">
    <div class="row">
      <div class="col l6 s12">
        <h5 class="white-text">Em-Conecta</h5>
        <p class="grey-text text-lighten-4">Conecta tu empresa al mundo a travez de la web</p>
      </div>
      <div class="col l4 offset-l2 s12">
        <h5 class="white-text">Enlaces frecuentes</h5>
        <ul>
          <li><a class="grey-text text-lighten-3" href="<?php echo BASE_URL ?>trabaja">Trabaja con nosotros</a></li>
          <li><a class="grey-text text-lighten-3" href="<?php echo BASE_URL ?>servicios">Servicios</a></li>
          <li><a class="grey-text text-lighten-3" href="<?php echo BASE_URL ?>nosotros">Nosotros</a></li>
          <li><a class="grey-text text-lighten-3" href="<?php echo BASE_URL ?>planes">Planes</a></li>
          <li><a class="grey-text text-lighten-3" href="<?php echo BASE_URL ?>contacto">Contactanos</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container">
    © 2016 Copyright <?php echo COMPANY ?>
    <a class="grey-text text-lighten-3 right" href="<?php echo BASE_URL ?>"><?php echo APP_COMPANY ?></a>
    </div>
  </div>
</footer>
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
    </script>
</body>
</html>