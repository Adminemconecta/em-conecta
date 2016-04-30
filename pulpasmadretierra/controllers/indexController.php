<?php

	/**
	* 
	*/
	class indexController extends Controller
	{
		private $_productos;

		public function __construct(){
			parent::__construct();
			$this->_productos = $this->loadModel('index');
		}

		public function index()
		{
			$this->_view->productos = $this->_productos->getProductos();
			$this->_view->titulo = 'Productos';
			$this->_view->setCss(array('index'));
			$this->_view->setJs(array('index'));
			$this->_view->renderizar('index', true); 
			
		}
	}

?>