<?php

	/**
	* 
	*/
	class buscarController extends Controller
	{
		private $_buscar;

		public function __construct(){
			parent::__construct();
			$this->_buscar = $this->loadModel('buscar');
		}

		public function index($pagina = false)
		{
			$this->_view->tipo = $this->_buscar->getTiposEmpresa();
			$this->_view->tienda = $this->_buscar->getTienda();

			if(!$this->filtrarInt($pagina)){
				$pagina = false;
			}else{
				$pagina = (int) $pagina;
			}

			$this->getLibrary('paginador');
			$paginador = new Paginador();

			$this->_view->empresa = $paginador->paginar($this->_buscar->getEmpresas(), $pagina, 10);
			$this->_view->paginacion = $paginador->getView('paginas_view', 'buscar/index');


			$this->_view->titulo = 'Colombia';
			$this->_view->setCss(array('index'));
			$this->_view->setJs(array('index'));
			$this->_view->renderizar('index'); 
			
		}
		public function colombia($ciudad = false, $tipo_empresa = false, $search = false, $pagina = false)
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