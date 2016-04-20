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
			$this->_view->tiposproductos = $this->_dashboard->getTipoProducto();
			$this->_view->productos = $this->_dashboard->getProductos();

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
			if (!Session::get('autenticado')) {
				$this->redireccionar();
			}
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
			    	$answerJson = array("answer" => false,
										"respuesta" => 'Error, el archivo no es una imagen');
	            	echo json_encode($answerJson);
			    }else{
			        $array_extension = explode('.', $nombre);
			    	$ext = array_pop($array_extension);
			    	$renames = time().'.'.$ext;
			        $src = $carpeta.$renames;
			        move_uploaded_file($ruta_provisional, $src);
			    	$ruta_img = BASE_URL.'public/img/carpeta/'.$renames;
			    	
			    	$answerJson = array("answer" => true,
										"respuesta" => '<div class="logo"><img class="img-logo" src="'.$ruta_img.'"></div>',
			    						"datainput" => '<input name="nombre_logo" class="file-path validate" type="text" value="'.$renames.'" placeholder="El logo debe aproximarse a ser cuadrado">');
	            	echo json_encode($answerJson);
	            	exit;
			    }
			}
		}

		public function ajaxportafolio()
		{
			if (!Session::get('autenticado')) {
				$this->redireccionar();
			}
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
									"respuesta" => 'Se insertaron los datos del portafolio');
            	echo json_encode($answerJson);
            	exit;

			}
		}

		public function ajaxeditarimg()
		{
			if (!Session::get('autenticado')) {
				$this->redireccionar();
			}
			$portafolio_img = $this->_dashboard->getPortafolio();

			$name_img = $portafolio_img[0]['portafolio_logo_name'];

			$ruta = ROOT.'public'.DS.'img'.DS.'carpeta'.DS;

			if (isset($_FILES["editar_img_Logo"]))
			{
			    $file = $_FILES["editar_img_Logo"];
			    $nombre = $file["name"];
			    $tipo = $file["type"];
			    $ruta_provisional = $file["tmp_name"];
			    $carpeta = ROOT.'public/img/carpeta/';
			    
			    if ($tipo != 'image/jpg' && $tipo != 'image/jpeg' && $tipo != 'image/png' && $tipo != 'image/gif')
			    {
			      	$answerJson = array("answer" => false,
										"respuesta" => 'Error, el archivo no es una imagen');
	            	echo json_encode($answerJson);

			    }elseif (file_exists($ruta.$name_img)) {
			    	$array_extension = explode('.', $nombre);
			    	$ext = array_pop($array_extension);
			    	$renames = time().'.'.$ext;
			    	$src = $carpeta.$renames;
			        move_uploaded_file($ruta_provisional, $src);
			        $ruta_img = BASE_URL.'public/img/carpeta/'.$renames;

			        $answerJson = array("answer" => true,
										"respuesta" => '<div class="logo"><img class="img-logo" src="'.$ruta_img.'"></div>',
			    						"datainput" => '<input name="editar_nombre_logo" class="file-path validate" type="text" value="'.$renames.'" placeholder="El logo debe aproximarse a ser cuadrado">');
	            	echo json_encode($answerJson);
	            	exit;

			    }else{
			    	$array_extension = explode('.', $nombre);
			    	$ext = array_pop($array_extension);
			    	$renames = time().'.'.$ext;
			        $src = $carpeta.$renames;
			        move_uploaded_file($ruta_provisional, $src);
			    	$ruta_img = BASE_URL.'public/img/carpeta/'.$renames;

			        $answerJson = array("answer" => true,
										"respuesta" => '<div class="logo"><img class="img-logo" src="'.$ruta_img.'"></div>',
			    						"datainput" => '<input name="editar_nombre_logo" class="file-path validate" type="text" value="'.$renames.'" placeholder="El logo debe aproximarse a ser cuadrado">');
	            	echo json_encode($answerJson);
	            	exit;
			    }
			}
		}


		public function ajaxeditarportafolio()
		{
			if (!Session::get('autenticado')) {
				$this->redireccionar();
			}

			if ($this->getUsuarioParam('editar_nombre_logo') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta logo');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('editar_telefono') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta telefono');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('editar_direccion') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta direccion');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('editar_bienvenido') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta bienvenido');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('editar_innovacion') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta innovacion');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('editar_integracion') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta integracion');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('editar_integridad') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta integridad');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('editar_historia') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta historia');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('editar_mision') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta mision');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('editar_vision') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta vision');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('editar_marca') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta marca');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('editar_trabajo') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta trabajo');
            	echo json_encode($answerJson);
            	exit;
			}else{

				$this->_dashboard->editarPortafolio(
						$this->getUsuarioParam('editar_telefono'),
						$this->getUsuarioParam('editar_nombre_logo'),
						$this->getUsuarioParam('editar_bienvenido'),
						$this->getUsuarioParam('editar_innovacion'),
						$this->getUsuarioParam('editar_integracion'),
						$this->getUsuarioParam('editar_integridad'),
						$this->getUsuarioParam('editar_historia'),
						$this->getUsuarioParam('editar_mision'),
						$this->getUsuarioParam('editar_vision'),
						$this->getUsuarioParam('editar_marca'),
						$this->getUsuarioParam('editar_trabajo'),
						$this->getUsuarioParam('editar_direccion'),
						$this->getUsuarioParam('portafolio_name')

					);
				$answerJson = array("answer" => true,
									"respuesta" => 'Se ha modificado el portafolio');
            	echo json_encode($answerJson);
            	exit;

			}
		}

		public function faviicon()
		{
			if (!Session::get('autenticado')) {
				$this->redireccionar();
			}

			if (isset($_FILES["img_favi_icon"]))
			{
			    $file = $_FILES["img_favi_icon"];
			    $nombre = $file["name"];
			    $tipo = $file["type"];
			    $ruta_provisional = $file["tmp_name"];
			    $carpeta = ROOT.'public/img/';
			    $ruta_img = BASE_URL.'public/img/'.$nombre;
			    
			    if ($tipo != 'image/jpg' && $tipo != 'image/jpeg' && $tipo != 'image/png' && $tipo != 'image/gif')
			    {
			    	$answerJson = array("answer" => false,
										"respuesta" => 'Error, el archivo no es una imagen');
	            	echo json_encode($answerJson);
			    }else{
			        $array_extension = explode('.', $nombre);
			    	$ext = array_pop($array_extension);
			    	$renames = time().'.'.$ext;
			        $src = $carpeta.$renames;
			        move_uploaded_file($ruta_provisional, $src);
			    	$ruta_img = BASE_URL.'public/img/'.$renames;
			    	
			    	$answerJson = array("answer" => true,
										"respuesta" => 'Se ha guardado la imagen correctamente');
	            	echo json_encode($answerJson);
	            	exit;
			    }
			}

		}

		public function ajaxnuevotipoproducto()
		{
			if (!Session::get('autenticado')) {
				$this->redireccionar();
			}

			if ($this->getUsuarioParam('name_tipo_poducto') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta titpo de producto');
            	echo json_encode($answerJson);
            	exit;
			}else{

				$this->_dashboard->registrarTipoProducto(
							$this->getUsuarioParam('name_tipo_poducto')
					);

				$answerJson = array("answer" => true,
									"respuesta" => 'Se inserto un tipo correctamente');

				echo json_encode($answerJson);
            	exit;
			}

		}

		public function ajaxeditartipoproducto()
		{
			if (!Session::get('autenticado')) {
				$this->redireccionar();
			}

			if ($this->getUsuarioParam('select_tipo_producto') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Selecciona un tipo');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('editar_name_tipo_producto') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta tipo');
            	echo json_encode($answerJson);
            	exit;
			}else{

				$this->_dashboard->editarTipoProducto(
							$this->getUsuarioParam('select_tipo_producto'),
							$this->getUsuarioParam('editar_name_tipo_producto')
					);

				$answerJson = array("answer" => true,
									"respuesta" => 'Se edito un tipo correctamente');

				echo json_encode($answerJson);
            	exit;
			}

		}

		public function ajaxdeletetipoproducto()
		{
			if (!Session::get('autenticado')) {
				$this->redireccionar();
			}

			if ($this->getUsuarioParam('select_delete_tipo_producto') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Elije un tipo de producto');
            	echo json_encode($answerJson);
            	exit;
			}else{

				$this->_dashboard->deleteTipoProducto(
							$this->getUsuarioParam('select_delete_tipo_producto')
					);

				$answerJson = array("answer" => true,
									"respuesta" => 'Se elimino un tipo correctamente');

				echo json_encode($answerJson);
            	exit;
			}

		}

		public function ajaxnuevoproducto()
		{
			if (!Session::get('autenticado')) {
				$this->redireccionar();
			}

			if ($this->getUsuarioParam('producto_select_tipo_producto') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Selecciona un tipo');
            	echo json_encode($answerJson);
            	exit;
			}elseif($this->getUsuarioParam('producto_nombre_producto') == ''){
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta nombre del producto');
            	echo json_encode($answerJson);
            	exit;
			}elseif($this->getUsuarioParam('producto_valor_producto') == ''){
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta el valor del producto');
            	echo json_encode($answerJson);
            	exit;
			}elseif($this->getUsuarioParam('producto_descripcion_producto') == ''){
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta la descripcion del producto');
            	echo json_encode($answerJson);
            	exit;
			}else{

				$this->_dashboard->productoNuevoProducto(
							$this->getUsuarioParam('producto_descripcion_producto'),
							$this->getUsuarioParam('producto_valor_producto'),
							$this->getUsuarioParam('producto_nombre_producto'),
							$this->getUsuarioParam('producto_select_tipo_producto')
					);

				$answerJson = array("answer" => true,
									"respuesta" => 'Se reistro un producto exitosamente');
            	echo json_encode($answerJson);
            	exit;
			}
		}

		public function ajaxeditarproducto()
		{
			if (!Session::get('autenticado')) {
				$this->redireccionar();
			}

			if ($this->getUsuarioParam('producto_select_tipo_producto') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Selecciona un tipo');
            	echo json_encode($answerJson);
            	exit;
			}elseif($this->getUsuarioParam('producto_nombre_producto') == ''){
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta nombre del producto');
            	echo json_encode($answerJson);
            	exit;
			}elseif($this->getUsuarioParam('producto_valor_producto') == ''){
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta el valor del producto');
            	echo json_encode($answerJson);
            	exit;
			}elseif($this->getUsuarioParam('producto_descripcion_producto') == ''){
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta la descripcion del producto');
            	echo json_encode($answerJson);
            	exit;
			}else{

				$this->_dashboard->productoEditarProducto(
							$this->getUsuarioParam('producto_descripcion_producto'),
							$this->getUsuarioParam('producto_valor_producto'),
							$this->getUsuarioParam('producto_nombre_producto'),
							$this->getUsuarioParam('producto_select_tipo_producto'),
							$this->getUsuarioParam('hiden_producto')
					);

				$answerJson = array("answer" => true,
									"respuesta" => 'Se reistro un producto exitosamente');
            	echo json_encode($answerJson);
            	exit;
			}
		}

		public function ajaxeliminarproducto()
		{
			
		}
	}

?>