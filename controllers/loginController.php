<?php

	/**
	* 
	*/
	class loginController extends Controller
	{	
		private $_login;
		
		public function __construct(){
			parent::__construct();
			$this->_login = $this->loadModel('login');
		}

		public function index()
		{
			
			if (Session::get('autenticado')) {
				$this->redireccionar("controlpanel");
			}

			$row = $this->_login->getUsuario(
						$this->getAlphaNum('usuario_user'),
						$this->getSql('usuario_pass')
					);
			$this->_view->row = $row;

			$this->_view->titulo = 'Login';
			$this->_view->setCss(array('index'));
			$this->_view->setJs(array('index'));
			$this->_view->renderizar('index'); 
			
		}

		public function ajaxlogin()
		{
			if ($this->getUsuarioParam('usuario_user') == '') {
				$answerJson = array("answer" => false,
									"msnAjax" => 'Falta nombre de usuario');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('usuario_pass') == '') {
				$answerJson = array("answer" => false,
									"msnAjax" => 'Falta contraseña');
            	echo json_encode($answerJson);
            	exit;
			}else{
				$row = $this->_login->getUsuario(
						$this->getAlphaNum('usuario_user'),
						$this->getSql('usuario_pass')
					);

				if ($row) {
					Session::set('autenticado', true);
					Session::set('level', $row['level']);
					Session::set('activate', $row['activate']);
					Session::set('nombre', $row['nombre']);
					Session::set('apellido', $row['apellido']);
					Session::set('tiempo', time());
					$answerJson = array("answer" => true);
	            	echo json_encode($answerJson);
				}else{
					$answerJson = array("answer" => false,
										"msnAjax" => 'Usuario y/o contraseña incorrectos');
	            	echo json_encode($answerJson);
				}
			}		
                    
		}

		public function cerrar()
		{
			Session::destroy();
			$this->redireccionar('login');
		}
		
	}

?>