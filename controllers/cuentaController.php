<?php

	/**
	* 
	*/
	class cuentaController extends Controller
	{
		private $_cuenta;

		public function __construct(){
			parent::__construct();
			$this->_cuenta = $this->loadModel('cuenta');
		}

		public function index()
		{

			$this->_view->mensaje = $this->_cuenta->getMensajes();
			$this->_view->empresa = $this->_cuenta->getEmpresa();

			$this->_view->titulo = 'Cuenta';
			$this->_view->setCss(array('index'));
			$this->_view->setJs(array('index'));
			$this->_view->renderizar('index'); 
			
		}

		public function ajaxpumensaje()
		{
			if ($this->getUsuarioParam('mensaje') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Seleccione un mensaje');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('mensaje') != '') {

				$row = $this->_cuenta->getMensaje(
						$this->getUsuarioParam('mensaje')
					);


				$answerJson = array("answer" => true,
									"respuesta" => "Mensaje de ".$row['mensaje_nombre'].' '.$row['mensaje_apellido'],
									"asunto" => $row['mensaje_asunto'],
									"email" => $row['mensaje_email'],
									"mensaje" => $row['mensaje_mensaje']);
            	echo json_encode($answerJson);
            	exit;
			}
		}
		
	}

?>