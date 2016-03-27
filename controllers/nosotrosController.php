<?php

	/**
	* 
	*/
	class nosotrosController extends Controller
	{
		private $_controlpanel;

		public function __construct(){
			parent::__construct();
			$this->_controlpanel = $this->loadModel('controlpanel');
		}

		public function index()
		{
			$this->_view->configuracion = $this->_controlpanel->getConfigInicial();
			$this->_view->titulo = 'Nosotros';
			$this->_view->setCss(array('index'));
			$this->_view->setJs(array('index'));
			$this->_view->renderizar('index'); 
			
		}
		
	}

?>