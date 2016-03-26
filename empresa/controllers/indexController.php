<?php

	/**
	* 
	*/
	class indexController extends Controller
	{
		
		public function __construct(){
			parent::__construct();
		}

		public function index($tipo_empresa = false, $search = false)
		{
			
			$this->_view->titulo = 'inicio';
			$this->_view->setCss(array('index'));
			$this->_view->setJs(array('index'));
			$this->_view->renderizar('index'); 
			
		}
	}

?>