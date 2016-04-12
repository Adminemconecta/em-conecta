<!DOCTYPE html>
<html>
<head>
    <title><?php  if(isset($this->titulo)) echo $this->titulo; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="l5b8JU-Aq-cTO5ugLLCMFomX5q23IryLaebaGjKD3Go" />
    <meta name="description" content="<?php  if(isset($this->description)) echo $this->description; ?>">
    <meta name="keywords" content="Micolombiaenlines publica facil">
    <link rel="canonical" href="http://www.pulpasmadretierra.com/"/>
    <link rel="alternate" hreflang="es" href="http://www.pulpasmadretierra.com/" />
    <?php  if(isset($this->amp)) echo $this->amp; ?>
    <link rel="icon" type="image/png" href="<?php echo BASE_URL ?>public/img/link2.png" />
</head>
<body>
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
    <a href="<?php echo BASE_URL ?>login" class="right text-header">Login</a>
  </div>
</nav>

<section class="titulo-publica">
  <div class="logo">
    <img class="img-logo" src="<?php echo BASE_URL.'public/img/madretierraTrans-compressor.png' ?>">
  </div>
  <h2 title="Pulpas Madre Tierra" class="white-text text-header center-align"></span>Pulpas Madre Tierra</h2>
</section>
<div class="back-menu">
  <div id="icon-close-menu" class="icon-close black-text"></div>
  <div class="collection center-menu">
    <a title="Productos" href="<?php echo BASE_URL ?>" class="collection-item">Productos</a>
    <a title="Portafolio" href="<?php echo BASE_URL ?>portafolio" class="collection-item">Portafolio</a>
    <a title="Blog" href="<?php echo BASE_URL ?>blog" class="collection-item">Blog</a>
    <a title="Nosotros" href="<?php echo BASE_URL ?>nosotros" class="collection-item">Nosotros</a>
    <a title="Servicios" href="<?php echo BASE_URL ?>servicios" class="collection-item">Servicios</a>
    <a title="Contactanos" href="<?php echo BASE_URL ?>contacto" class="collection-item">Contactanos</a>
    <div class="collection-item social-div">
      <a href=""><span class="icon-menu-social icon-facebook-with-circle"></span></a>
      <a href=""><span class="icon-menu-social icon-twitter-with-circle"></span></a>
      <a href=""><span class="icon-menu-social icon-google-with-circle"></span></a>
    </div>s
  </div>
</div>
