<?php

	/**
	* 
	*/
	class publicaController extends Controller
	{
		
		private $_publica;

		public function __construct(){
			parent::__construct();
			$this->_publica = $this->loadModel('publica');
		}

		public function index()
		{
			$this->_view->depto = $this->_publica->getDepartamento();
			$this->_view->mun = $this->_publica->getMunicipo();
			$this->_view->titulo = 'Publica';
			$this->_view->setCss(array('index'));
			$this->_view->setJs(array('index'));
			$this->_view->renderizar('index');
			
		}
		public function ajaxpublica(){

			if ($this->getUsuarioParam('nombre_empresa') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta el nombre de la empresa');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('dir_ofi_central') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta la direccion de la oficina central');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('fundacion') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta el nombre de la fundacion');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('presidente') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta el nombre del presidente');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('no_empleados') == 0) {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta el numero de empleados');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('dir_plan_indus') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta la direccion de la planta industrial');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('princ_operacion') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta las operaciones que ejerce su empresa');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('dir_ofi_contacto') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta la direccion de contacto de su empresa');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('tipo_sociedad') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta el tipo de sociedad');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('rut') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta su rut');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('tipo_productos') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta el tipo de productos que comercializa');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('dir_domicilio') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta la direccion del domicilio legal');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('dir_domicilio_comercial') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta la direccion del domicilio comercial');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('tel') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta los numeros de telefono de su empresa');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('e_mail') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta el e-mail de su empresa');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('fax') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta el fax de su empresa');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('departamento') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta un departamento');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('municipio') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta un municipio');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('tipo_de_empresa') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Falta el tipo de su empresa');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('tipo_de_empresa') != '') {

				$this->_publica->registrarEmpresa(
						$this->getUsuarioParam('nombre_empresa'),
						$this->getUsuarioParam('dir_ofi_central'),
						$this->getUsuarioParam('fundacion'),
						$this->getUsuarioParam('presidente'),
						$this->getUsuarioParam('no_empleados'),
						$this->getUsuarioParam('princ_operacion'),
						$this->getUsuarioParam('dir_plan_indus'),
						$this->getUsuarioParam('dir_ofi_contacto'),
						$this->getUsuarioParam('tipo_sociedad'),
						$this->getUsuarioParam('rut'),
						$this->getUsuarioParam('dir_domicilio'),
						$this->getUsuarioParam('dir_domicilio_comercial'),
						$this->getUsuarioParam('tel'),
						$this->getUsuarioParam('fax'),
						$this->getUsuarioParam('e_mail'),
						$this->getUsuarioParam('municipio'),
						$this->getUsuarioParam('tipo_de_empresa'),
						$this->getUsuarioParam('tipo_productos'),
						$this->getUsuarioParam('departamento'),
						$this->getUsuarioParam('nombre_usuario')					
					);

				$answerJson = array("answer" => true,
									"respuesta" => 'Se registro su empresa correctamente');
            	echo json_encode($answerJson);
            	exit;
			}
		}

		public function ajaxmunicipio($id_departamento)
		{

			$row_option = '<option value="" disabled selected>Elija un Municipio</option>';

			$row = $this->_publica->getMunicipioId(
					$id_departamento
				);

			for ($i=0; $i < count($row) ; $i++) { 
				$idmunicipio = $row[$i]['idmunicipio'];
				$nombre = $row[$i]['nombre'];
				$row_option = $row_option ."<option". ' value='.$idmunicipio.">".$nombre."</option>";
			}

			$answerJson = array("answer" => true,
								"respuesta" => $row_option);
        	echo json_encode($answerJson);
        	exit;
		}

		public function ajaxrut($rut)
		{
			$row = $this->_publica->getRut(
						$rut
					);

				if ($row) {
            		$answerJson = array("answer" => false,
									"respuesta" => 'Este rut ya esta registrado');
	            	echo json_encode($answerJson);
	            	exit;
				}else{
					$answerJson = array("answer" => true,
									"respuesta" => 'Bienvenido nuevo rut');
	            	echo json_encode($answerJson);
	            	exit;
				}
		}
		
	}

?>