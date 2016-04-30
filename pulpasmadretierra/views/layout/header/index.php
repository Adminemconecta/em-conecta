<div class="progresbar">
  <div class="progress green lighten-2">
      <div class="indeterminate green lighten-4"></div>
  </div>
</div>

<div class="z-depth-2 mensajeAjax">
  <div class='msnAjax center-align'></div>
</div>

<nav class="options transparent">
  <div class="nav-wrapper">
    <a id="fadeIn-menu" class="text-heder-menu text-header"><span class="icon-menu5"></span><?php echo " "; ?>Menu</a>
    <?php if (!Session::get('autenticado')) { ?>
        <a href="<?php echo BASE_URL ?>login" class="right text-header"><h5>Iniciar sesion</h5></a>
    <?php } else { ?>
        <a href="<?php echo BASE_URL ?>login/cerrar" class="right text-header"><h5>Cerrar sesion</h5></a>
    <?php }?>
    
  </div>
</nav>

<section class="titulo-publica">
  <div class="logo">
    <img alt="APP_COMPANY" class="img-logo" src="<?php if( count($this->logoname) != 0){echo BASE_URL.'public/img/'.$this->logoname[0]['portafolio_logo_name'];}else{echo BASE_URL.'public/img/food-healthy-meal-grain-compressor.jpg';}  ?>">
  </div>
  <h2 title="Pulpas Madre Tierra" class="white-text text-header center-align"><span>Pulpas Madre Tierra</span></h2>
  <h3 class="title_inferior" title="<?php  if(isset($this->titulo)) echo $this->titulo; ?>"><?php  if(isset($this->titulo)) echo $this->titulo; ?></h3>
</section>

<div class="back-menu">
  <div id="icon-close-menu" class="icon-close black-text"></div>
  <div class="collection center-menu">
    <a title="Productos" href="<?php echo BASE_URL ?>" class="collection-item">Productos</a>
    <a title="Portafolio" href="<?php echo BASE_URL ?>portafolio" class="collection-item">Portafolio</a>
    <a title="Blog" href="<?php echo BASE_URL ?>blog" class="collection-item">Blog</a>
    <a title="Nosotros" href="<?php echo BASE_URL ?>nosotros" class="collection-item">Nosotros</a>
    <a title="Revista" href="<?php echo BASE_URL ?>revista" class="collection-item">Revista</a>
    <a title="Contactanos" href="<?php echo BASE_URL ?>contacto" class="collection-item">Contactanos</a>
  </div>
</div>
<div class="social_red">

  <?php 
      if ($this->_redsocial[4]['social_url'] != '') { ?>
      <a target="_blank" title="Facebook" href="<?php echo $this->_redsocial[4]['social_url'] ?>"><span class="icon-menu-social-facebook icon-facebook-with-circle"></span></a><br>
    <?php  }  ?>

    <?php
      if ($this->_redsocial[3]['social_url'] != '') { ?>
        <a target="_blank" title="Twitter" href="<?php echo $this->_redsocial[3]['social_url'] ?>"><span class="icon-menu-social-twitter icon-twitter-with-circle"></span></a><br>
    <?php  }
    ?>

    <?php
      if ($this->_redsocial[2]['social_url'] != '') { ?>
        <a target="_blank" title="Google plus" href="<?php echo $this->_redsocial[2]['social_url'] ?>"><span class="icon-menu-social-google icon-google-with-circle"></span></a><br>
    <?php  } ?>

    <?php
      if ($this->_redsocial[1]['social_url'] != '') { ?>
        <a target="_blank" title="Instagram" href="<?php echo $this->_redsocial[1]['social_url'] ?>"><span class="icon-menu-social-instagram icon-instagram-with-circle"></span></a><br>
    <?php  }  ?>

    <?php
      if ($this->_redsocial[0]['social_url'] != '') { ?>
        <a target="_blank" title="Youtube" href="<?php echo $this->_redsocial[0]['social_url'] ?>"><span class="icon-menu-social-youtube icon-youtube-with-circle"></span></a><br>
    <?php  }  ?>

</div>
