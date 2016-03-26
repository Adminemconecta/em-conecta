    <script src="<?php echo BASE_URL; ?>public/js/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="<?php echo BASE_URL; ?>public/js/materialize.min.js" type="text/javascript"></script>
    
    <?php if(isset($_layoutParams['js']) && count($_layoutParams['js'])){ ?>

        <?php for($i=0; $i < count($_layoutParams['js']); $i++){ ?>
        <script src="<?php echo $_layoutParams['js'][$i] ?>" type="text/javascript"></script>
        <?php } ?>

    <?php } ?>
    <script type="text/javascript">
          $(document).ready(function() {
             $(".button-collapse").sideNav();
          });
    </script>
</body>
</html>