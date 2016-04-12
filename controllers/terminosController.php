<?php

	/**
	* 
	*/
	class terminosController extends Controller
	{

		public function __construct(){
			parent::__construct();
		}

		public function index()
		{
			$this->_view->configuracion = $this->_controlpanel->getConfigInicial();
			$this->_view->titulo = 'Unete';
			$this->_view->setCss(array('index'));
			$this->_view->setJs(array('index'));
			$this->_view->renderizar('index'); 
			
		}
		
	}

?>