<?php

	/**
	* 
	*/
	class contactoController extends Controller
	{
		
		private $_contacto;

		public function __construct(){
			parent::__construct();
			$this->_contacto = $this->loadModel('contacto');
		}

		public function index()
		{
			
			$this->_view->titulo = 'Contactanos';
			$this->_view->setCss(array('index'));
			$this->_view->setJs(array('index'));
			$this->_view->renderizar('index'); 
			
		}

		public function ajaxcontacto()
		{
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
			}elseif ($this->getUsuarioParam('asunto') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta un asunto');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('email') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta un email');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('mensaje') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Por favor escribe un mensaje');
            	echo json_encode($answerJson);
            	exit;
			}else{

				$this->_contacto->registrarMensaje(
						$this->getUsuarioParam('nombre'),
						$this->getUsuarioParam('apellido'),
						$this->getUsuarioParam('asunto'),
						$this->getUsuarioParam('email'),
						$this->getUsuarioParam('mensaje')
					);
				$answerJson = array("answer" => true,
									"respuesta" => 'Gracias por tu mensaje');
            	echo json_encode($answerJson);
            	exit;

			}
		}
		
	}

?>