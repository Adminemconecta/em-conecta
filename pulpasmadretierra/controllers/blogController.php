<?php

	/**
	* 
	*/
	class blogController extends Controller
	{
		private $_blog;

		public function __construct(){
			parent::__construct();
			$this->_blog = $this->loadModel('blog');
		}

		public function index()
		{
			$this->_view->blogfoto = $this->_blog->getBlogArticulos();
			
			$this->_view->titulo = 'Blog';
			$this->_view->amp = '';
			$this->_view->setCss(array('index'));
			$this->_view->setJs(array('index'));
			$this->_view->renderizar('index'); 
			
		}

		public function articulo($idblog)
		{
			$this->_view->articulo = $this->_blog->getBlogArticulo($idblog);
			
			$this->_view->titulo = 'Articulo';
			$this->_view->amp = '';
			$this->_view->setCss(array('articulo'));
			$this->_view->setJs(array('articulo'));
			$this->_view->renderizar('articulo'); 
		}
	}

?>