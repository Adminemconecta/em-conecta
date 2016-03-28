<?php

	/**
	* 
	*/
	class planesController extends Controller
	{
		private $_controlpanel;

		public function __construct(){
			parent::__construct();
			$this->_controlpanel = $this->loadModel('controlpanel');
		}

		public function index()
		{
			$this->_view->configuracion = $this->_controlpanel->getPlanes();
			$this->_view->beneficios = $this->_controlpanel->getBeneficio();
			$this->_view->titulo = 'Planes';
			$this->_view->setCss(array('index'));
			$this->_view->setJs(array('index'));
			$this->_view->renderizar('index'); 
			
		}
		
	}

?>