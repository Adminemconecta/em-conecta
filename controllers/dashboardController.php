<?php

	/**
	* 
	*/
	class dashboardController extends Controller
	{
		private $_controlpanel;

		public function __construct(){
			parent::__construct();
			$this->_controlpanel = $this->loadModel('controlpanel');
		}

		public function index()
		{

			if (!Session::get('autenticado')) {
				$this->redireccionar();
			}

			$this->_view->configuracion = $this->_controlpanel->getPlanes();
			$this->_view->titulo = 'Panel de control';
			$this->_view->setCss(array('index'));
			$this->_view->setJs(array('index'));
			$this->_view->renderizar('index'); 
			
		}

		public function ajaxotro()
		{
			if ($this->getUsuarioParam('conecta') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta conecta la mundo');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('efectividad') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta efectividad');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('productividad') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta productividad');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('marketin') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta marketin');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('datos') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta datos');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('nosotros') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta nosotros');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('mision') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta mision');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('vision') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta vision');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('creemos') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta en que creemos');
            	echo json_encode($answerJson);
            	exit;
			}else{

				$this->_controlpanel->configInicial(
						$this->getUsuarioParam('conecta'),
						$this->getUsuarioParam('efectividad'),
						$this->getUsuarioParam('productividad'),
						$this->getUsuarioParam('marketin'),
						$this->getUsuarioParam('datos'),
						$this->getUsuarioParam('nosotros'),
						$this->getUsuarioParam('mision'),
						$this->getUsuarioParam('vision'),
						$this->getUsuarioParam('creemos')
					);
				$answerJson = array("answer" => true,
									"respuesta" => 'Se inserto la configuracion inicial');
            	echo json_encode($answerJson);
            	exit;

			}
		}

		public function ajaxplanes()
		{
			if ($this->getUsuarioParam('titulo') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta titulo');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('contenido') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta contenido');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('titulos_inf') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta el titulo inferior');
            	echo json_encode($answerJson);
            	exit;
			}else{

				$this->_controlpanel->registrarPlanes(
						$this->getUsuarioParam('titulo'),
						$this->getUsuarioParam('contenido'),
						$this->getUsuarioParam('titulos_inf')
					);
				$answerJson = array("answer" => true,
									"respuesta" => 'Se inserto el plan');
            	echo json_encode($answerJson);
            	exit;

			}
		}

		public function ajaxbeneficios()
		{
			if ($this->getUsuarioParam('select_plan') == 'Plan') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Seleccione un plan');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('beneficio') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta el beneficio');
            	echo json_encode($answerJson);
            	exit;
			}else{
				
				$this->_controlpanel->registrarBeneficio(
						$this->getUsuarioParam('beneficio'),
						$this->getUsuarioParam('select_plan')
					);

				$answerJson = array("answer" => true,
									"respuesta" => 'Se insertoaron los beneficios');
            	echo json_encode($answerJson);
            	exit;

			}
		}

		public function ajaxportafolio()
		{
			if ($this->getUsuarioParam('bienvenida') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta bienvenida');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('marca') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta marca');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('historia') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta historia');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('innovacion') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta innovacion');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('integracion') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta integracion');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('integridad') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta integridad');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('lista_serv') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta lista de servicios');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('como_trabajamos') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta como trabajamos');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('como_pensamos') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta como pensamos');
            	echo json_encode($answerJson);
            	exit;
			}else{

				$this->_controlpanel->registrarPortafolio(
						$this->getUsuarioParam('bienvenida'),
						$this->getUsuarioParam('marca'),
						$this->getUsuarioParam('historia'),
						$this->getUsuarioParam('innovacion'),
						$this->getUsuarioParam('integracion'),
						$this->getUsuarioParam('integridad'),
						$this->getUsuarioParam('lista_serv'),
						$this->getUsuarioParam('como_trabajamos'),
						$this->getUsuarioParam('como_pensamos')
    
					);
				$answerJson = array("answer" => true,
									"respuesta" => 'Se inserto el portafolio');
            	echo json_encode($answerJson);
            	exit;

			}
		}
		
	}

?>