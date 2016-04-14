<?php

	/**
	* 
	*/
	class contactoController extends Controller
	{
		
		public function __construct(){
			parent::__construct();
		}

		public function index()
		{
			
			$this->_view->titulo = 'Contactanos';
			$this->_view->setCss(array('index'));
			$this->_view->setJs(array('index'));
			$this->_view->renderizar('index'); 
			
		}
	}

?>