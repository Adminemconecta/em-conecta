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

			$this->_view->mensaje = $this->_cuenta->getMensaje();
			$this->_view->empresa = $this->_cuenta->getEmpresa();
			$this->_view->titulo = 'Cuenta';
			$this->_view->setCss(array('index'));
			$this->_view->setJs(array('index'));
			$this->_view->renderizar('index'); 
			
		}

		public function registrarempresa()
		{
			
		}
		
	}

?>