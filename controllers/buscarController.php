<?php

	/**
	* 
	*/
	class buscarController extends Controller
	{
		
		public function __construct(){
			parent::__construct();
		}

		public function index()
		{
			
			$this->_view->titulo = 'Colombia';
			$this->_view->setCss(array('index'));
			$this->_view->setJs(array('index'));
			$this->_view->renderizar('index'); 
			
		}
		public function colombia($ciudad = false, $tipo_empresa = false, $search = false)
		{
			if ($tipo_empresa != false) {
				$titulo_empresa = '-'.$tipo_empresa;
			}else{
				$titulo_empresa = $tipo_empresa;
			}
			if ($search != false) {
				$titulo_search = '-'.$search;
			}else{
				$titulo_search = $search;
			}
			if ($ciudad != false) {
				$titulo_ciudad = '-'.$ciudad; 
			}else{
				$titulo_ciudad = $ciudad;
			}

			if(!$this->filtrarInt($pagina)){
				$pagina = false;
			}else{
				$pagina = (int) $pagina;
			}

			$this->getLibrary('paginador');
			$paginador = new Paginador();
			
			$this->_view->titulo = 'Buscar'.$titulo_ciudad.$titulo_empresa.$titulo_search;
			
			$this->_view->setCss(array('index'));
			$this->_view->setJs(array('index'));
			$this->_view->renderizar('index'); 
			
		}
	}

?>