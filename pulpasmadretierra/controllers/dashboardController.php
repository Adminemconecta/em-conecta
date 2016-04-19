<?php

	/**
	* 
	*/
	class dashboardController extends Controller
	{
		private $_dashboard;

		public function __construct(){
			parent::__construct();
			$this->_dashboard = $this->loadModel('dashboard');
		}

		public function index()
		{
			if (!Session::get('autenticado')) {
				$this->redireccionar();
			}
			$this->_view->mensaje = $this->_dashboard->getMensajes();
			$this->_view->usuarios = $this->_dashboard->getUsuarios();
			$this->_view->redsocial = $this->_dashboard->getRedSocial();
			$this->_view->portafolio = $this->_dashboard->getPortafolio();

			$this->_view->titulo = 'Dashboard';
			$this->_view->setCss(array('index'));
			$this->_view->setJs(array('index'));
			$this->_view->renderizar('index'); 
			
		}

		public function ajaxnuevousuario()
		{
			if (!Session::get('autenticado')) {
				$this->redireccionar();
			}

			if ($this->getUsuarioParam('nombre') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta nombre');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('apellido') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta apellido');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('usuario') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta nombre de usuario');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('pass') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta contraseña');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('validar_pass') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Valida la contraseña');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('pass') != $this->getUsuarioParam('validar_pass')) {
				$answerJson = array("answer" => false,
									"respuesta" => 'Las contraseñas no coinciden');
            	echo json_encode($answerJson);
            	exit;
			}else{

				$this->_dashboard->registrarUsuario(
						$this->getUsuarioParam('nombre'),
						$this->getUsuarioParam('apellido'),
						$this->getUsuarioParam('usuario'),
						$this->getUsuarioParam('pass'),
						1
					);

				$answerJson = array("answer" => true,
									"respuesta" => 'Se ha registrado un nuevo usuario');
            	echo json_encode($answerJson);
            	exit;
			}
		}

		public function ajaxeditarusuario()
		{
			if (!Session::get('autenticado')) {
				$this->redireccionar();
			}

			if ($this->getUsuarioParam('usuario') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta nombre de usuario');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('pass') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta contraseña');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('validar_pass') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Valida la contraseña');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('pass') != $this->getUsuarioParam('validar_pass')) {
				$answerJson = array("answer" => false,
									"respuesta" => 'Las contraseñas no coinciden');
            	echo json_encode($answerJson);
            	exit;
			}else{

				$this->_dashboard->editarUsuario(
						$this->getUsuarioParam('idusuario'),
						$this->getUsuarioParam('usuario'),
						$this->getUsuarioParam('pass')
					);

				$answerJson = array("answer" => true,
									"respuesta" => 'Se ha editado el usuario');
            	echo json_encode($answerJson);
            	exit;
			}
		}

		public function ajaxsocialred()
		{
			if (!Session::get('autenticado')) {
				$this->redireccionar();
			}

			if ($this->getUsuarioParam('nuevo_red_social') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Elije una opcion');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('url_redsocial') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta url red social');
            	echo json_encode($answerJson);
            	exit;
			}else{

				$this->_dashboard->insertarRedSocial(
						$this->getUsuarioParam('nuevo_red_social'),
						$this->getUsuarioParam('url_redsocial')
					);

				$answerJson = array("answer" => true,
									"respuesta" => 'Se guardo una url');
            	echo json_encode($answerJson);
            	exit;
			}
		}

		public function ajaximg()
		{
			if (isset($_FILES["img_Logo"]))
			{
			    $file = $_FILES["img_Logo"];
			    $nombre = $file["name"];
			    $tipo = $file["type"];
			    $ruta_provisional = $file["tmp_name"];
			    $carpeta = ROOT.'public/img/carpeta/';
			    $ruta_img = BASE_URL.'public/img/carpeta/'.$nombre;
			    
			    if ($tipo != 'image/jpg' && $tipo != 'image/jpeg' && $tipo != 'image/png' && $tipo != 'image/gif')
			    {
			      echo "Error, el archivo no es una imagen"; 
			    }else{
			        $src = $carpeta.$nombre;
			        move_uploaded_file($ruta_provisional, $src);
			        echo '<div class="logo"><img class="img-logo" src="'.$ruta_img.'"></div>';
			    }
			}
		}

		public function ajaxportafolio()
		{
			if ($this->getUsuarioParam('nombre_logo') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta logo');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('telefono') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta telefono');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('direccion') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta direccion');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('bienvenido') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta bienvenido');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('innovacion') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta innovacion');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('integracion') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta integracion');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('integridad') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta integridad');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('historia') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta historia');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('mision') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta mision');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('vision') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta vision');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('marca') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta marca');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('trabajo') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta trabajo');
            	echo json_encode($answerJson);
            	exit;
			}else{

				$this->_dashboard->registrarPortafolio(
						$this->getUsuarioParam('telefono'),
						$this->getUsuarioParam('nombre_logo'),
						$this->getUsuarioParam('bienvenido'),
						$this->getUsuarioParam('innovacion'),
						$this->getUsuarioParam('integracion'),
						$this->getUsuarioParam('integridad'),
						$this->getUsuarioParam('historia'),
						$this->getUsuarioParam('mision'),
						$this->getUsuarioParam('vision'),
						$this->getUsuarioParam('marca'),
						$this->getUsuarioParam('trabajo'),
						$this->getUsuarioParam('direccion')

					);
				$answerJson = array("answer" => true,
									"respuesta" => 'Se inserto la configuracion inicial');
            	echo json_encode($answerJson);
            	exit;

			}
		}

		public function ajaxeditarimg()
		{
			if (isset($_FILES["editar_img_Logo"]))
			{
			    $file = $_FILES["editar_img_Logo"];
			    $nombre = $file["name"];
			    $tipo = $file["type"];
			    $ruta_provisional = $file["tmp_name"];
			    $carpeta = ROOT.'public/img/carpeta/';
			    $ruta_img = BASE_URL.'public/img/carpeta/'.$nombre;
			    
			    if ($tipo != 'image/jpg' && $tipo != 'image/jpeg' && $tipo != 'image/png' && $tipo != 'image/gif')
			    {
			      echo "Error, el archivo no es una imagen"; 
			    }else{
			        $src = $carpeta.$nombre;
			        move_uploaded_file($ruta_provisional, $src);
			        echo '<div class="logo"><img class="img-logo" src="'.$ruta_img.'"></div>';
			    }
			}
		}


		public function ajaxeditarportafolio()
		{
			if ($this->getUsuarioParam('nombre_logo') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta logo');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('telefono') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta telefono');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('direccion') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta direccion');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('bienvenido') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta bienvenido');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('innovacion') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta innovacion');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('integracion') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta integracion');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('integridad') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta integridad');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('historia') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta historia');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('mision') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta mision');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('vision') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta vision');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('marca') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta marca');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('trabajo') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta trabajo');
            	echo json_encode($answerJson);
            	exit;
			}else{

				$this->_dashboard->editarPortafolio(
						$this->getUsuarioParam('telefono'),
						$this->getUsuarioParam('nombre_logo'),
						$this->getUsuarioParam('bienvenido'),
						$this->getUsuarioParam('innovacion'),
						$this->getUsuarioParam('integracion'),
						$this->getUsuarioParam('integridad'),
						$this->getUsuarioParam('historia'),
						$this->getUsuarioParam('mision'),
						$this->getUsuarioParam('vision'),
						$this->getUsuarioParam('marca'),
						$this->getUsuarioParam('trabajo'),
						$this->getUsuarioParam('direccion')

					);
				$answerJson = array("answer" => true,
									"respuesta" => 'Se inserto la configuracion inicial');
            	echo json_encode($answerJson);
            	exit;

			}
		}
	}

?>