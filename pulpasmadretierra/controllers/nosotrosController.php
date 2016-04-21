<?php

	/**
	* 
	*/
	class nosotrosController extends Controller
	{
		private $_nosotros;

		public function __construct(){
			parent::__construct();
			$this->_nosotros = $this->loadModel('nosotros');
		}

		public function index()
		{
			$this->_view->nosotros = $this->_nosotros->getPortafolio();

			$this->_view->titulo = 'Nosotros';
			$this->_view->amp = '';
			$this->_view->setCss(array('index'));
			$this->_view->setJs(array('index'));
			$this->_view->renderizar('index'); 
			
		}
	}

?>