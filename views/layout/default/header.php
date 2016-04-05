<!DOCTYPE html>
<html>
<head>
    <title><?php  if(isset($this->titulo)) echo $this->titulo; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="<?php echo BASE_URL ?>public/img/link2.png" />
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
</head>
<body>

<div class="progresbar">
  <div class="progress blue lighten-2">
      <div class="indeterminate blue lighten-4"></div>
  </div>
</div>

<div class="z-depth-2 mensajeAjax">
  <div class='msnAjax center-align'></div>
</div>

<section class="google-api">
  <div class="google-close"></div>
  <div class="content-google-api z-depth-3">
    <nav class="google-nav  red darken-2">
      <span class="icon-menu"></span>
    </nav>
    <div class="google-menu-close"></div>
    <div class="google-menu">
      <figure class="img-user">
        <img class="circle img-perfil center-perfil" src="<?php echo BASE_URL ?>public/img/chloe-grace-moretz1.png">
      </figure>
      <form id="form-serach" class="container row">
          <div class="input-field col s12 m12 l12">
            <select  class="browser-default" id="google_name_depato" name="departamento">
              <option value="" disabled selected>Elija una departamento</option>
            <?php for ($h=0; $h < count($this->dpts) ; $h++) { ?>
              <option value="<?php echo $this->dpts[$h]['iddepartamento']; ?>"><?php echo $this->dpts[$h]['nombre']; ?></option>
            <?php } ?>
            </select>
          </div>
            <div class="input-field col s12 m12 l12">
            <select class="browser-default" id="google_name_mun" name="municipio">
              <option value="" disabled selected>Elija un Municipio</option>
            </select>
          </div>
        <div class="input-field col s12 m12 l12">
          <select class="browser-default" name="tipo_empresa">
            <option value="" disabled selected>Tipo empresa</option>
            <?php for ($i=0; $i < 50 ; $i++) { ?>
              <option value="1">Ferreteria</option>
              <option value="2">Option 2</option>
              <option value="3">Option 3</option>
            <?php } ?>
          </select>
        </div>
        <button class="btn waves-effect teal darken-3 col s12 m12 l12" type="submit" name="action">Buscar</button>
      </form>
    </div>
    <div class="google-maps">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d31818.297411256186!2d-75.67420729999999!3d4.5422408999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sco!4v1458067983918" width="800" height="600" class="map" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </div>
</section>
<div class="toas-results center-align">
  Se encontraron 100 resultados para tu busqueda
</div>
<nav class="options transparent">
    <div class="nav-wrapper">
      <span class="brand-logo hide-on-med-and-down">
      <?php 
        if (Session::get('autenticado')) { ?>
        <figure class="img-user data-admin">
          <img class="circle img-perfil" src="<?php echo BASE_URL ?>public/img/chloe-grace-moretz1.png">
        </figure>
         <h6 class="alias-menu-mav"> <?php echo $_SESSION['nombre'].' '.$_SESSION['apellido']; ?> </h6>
      <?php } ?>
      </span>
      <div class="data-menu-close"></div>
      <?php if (Session::get('autenticado')){ ?>
        <div class="data-menu z-depth-2 blue darken-3">
          <div class="content-figure-menu">
            <figure class="img-user-menu data-admin_menu">
              <img class="circle img-perfil" src="<?php echo BASE_URL ?>public/img/chloe-grace-moretz1.png">
            </figure>
            <h6 class="alias">_____</h6>
            <h6 class="nombre"><?php echo $_SESSION['nombre'].' '.$_SESSION['apellido']; ?></h6>
          </div>
          <div>
          <hr size="1" style="color: white;" class="hr" />
            <a href="<?php echo BASE_URL?>cuenta"><div class="cuenta"><span class="icon-menu-admin icon-account_box"></span>Cuenta</div></a>
            <div class="tareas"><span class="icon-menu-admin icon-check"></span>Tareas</div>
            <div class="eventos"><span class="icon-menu-admin icon-collections_bookmark"></span>Eventos</div>
            <a href="<?php BASE_URL ?>portafolio"><div class="eventos"><span class="icon-import_contacts icon-collections_bookmark"></span>Portafolio</div></a>
          </div>
          <div>
          <hr size="1" style="color: white;"/>
            <a href="<?php echo BASE_URL?>controlpanel"><div class="configuracion"><span class="icon-menu-admin icon-cog2"></span>Panel de conrtol</div></a>
            <a href="<?php echo BASE_URL?>login/cerrar"><div class="cerrar_sesion"><span class="icon-menu-admin icon-log-out"></span>Cerrar sesion</div></a>
          </div>
        </div>
      <?php } ?>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="icon-menu"></i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="<?php echo BASE_URL ?>">Inicio</a></li>
        <li class="google-show-api"><a href="#">Mapa</a></li>
        <li><a href="<?php echo BASE_URL ?>publica">Publica con nosotros</a></li>
      </ul>
      <!-- menu lateral -->
      <ul class="side-nav" id="mobile-demo">
      <?php if (Session::get('autenticado')) { ?>
        <div class="img-menu-perfil">
          <figure class="img-user data-admin">
            <img class="circle img-perfil" src="<?php echo BASE_URL ?>public/img/chloe-grace-moretz1.png">
          </figure>
        </div>
      <?php } ?>
        <li><a href="<?php echo BASE_URL ?>">Inicio</a></li>
        <li class="google-show-api"><a href="#">Mapa</a></li>
        <li><a href="<?php echo BASE_URL ?>publica">Publica con nosotros</a></li>
      </ul>
      <!-- menu lateral -->
    </div>
</nav>
<section class="titulo-publica">
  <h2 class="center-align"><span class="icon-link blue-text text-darken-1"></span>Colombia en linea</h2>
</section>