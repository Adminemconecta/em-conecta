<?php

	/**
	* 
	*/
	class cuentaController extends Controller
	{
		private $_cuenta;

		public function __construct(){
			parent::__construct();
			$this->_cuenta = $this->loadModel('cuenta');
		}

		public function index()
		{

			$this->_view->mensaje = $this->_cuenta->getMensajes();
			$this->_view->empresa = $this->_cuenta->getEmpresa();

			$this->_view->titulo = 'Cuenta';
			$this->_view->setCss(array('index'));
			$this->_view->setJs(array('index'));
			$this->_view->renderizar('index'); 
			
		}

		public function ajaxpumensaje()
		{
			if ($this->getUsuarioParam('mensaje') == '') {
				$answerJson = array("answer" => false,
									"respuesta" => 'Seleccione un mensaje');
            	echo json_encode($answerJson);
            	exit;
			}elseif ($this->getUsuarioParam('mensaje') != '') {

				$row = $this->_cuenta->getMensaje(
						$this->getUsuarioParam('mensaje')
					);


				$answerJson = array("answer" => true,
									"respuesta" => "Mensaje de ".$row['mensaje_nombre'].' '.$row['mensaje_apellido'],
									"asunto" => $row['mensaje_asunto'],
									"email" => $row['mensaje_email'],
									"mensaje" => $row['mensaje_mensaje']);
            	echo json_encode($answerJson);
            	exit;
			}
		}

		public function ajax_info_empresa($id_empresa)
		{
			$row_info = $this->_cuenta->getInfoEmpresa(
					$id_empresa
				);

			$answerJson = array("answer" => true, 
								"nombre" => '<strong>Empresa: </strong>'.$row_info["nombre"],
								"oficina_central" => '<strong>Oficina central: </strong>'.$row_info["oficina_central"],
								"plantas_industriales" => '<strong>Direccion plantas industriales: </strong>'.$row_info["plantas_industriales"],
								"oficinas_de_contacto" => '<strong>Direccion ofi. contacto: </strong>'.$row_info["oficinas_de_contacto"],
								"tipo_sociedad" => '<strong>Tipo de sociedad: </strong>'.$row_info["tipo_sociedad"],
								"domicilio_legal" => '<strong>Direccion dom. legal: </strong>'.$row_info["domicilio_legal"],
								"domicilio_comercial" => '<strong>Direccion dom. comercial: </strong>'.$row_info["domicilio_comercial"],
								"presidente" => '<strong>Presidente: </strong>'.$row_info["presidente"],
								"fundacion" => '<strong>Año de fundacion: </strong>'.$row_info["fundacion"],
								"numero_de_empleados" => '<strong>No. de empleados: </strong>'.$row_info["numero_de_empleados"],
								"rut" => '<strong>Rut: </strong>'.$row_info["rut"],
								"fax" => '<strong>Fax: </strong>'.$row_info["fax"],
								"telefonos" => '<strong>Telefonos: </strong>'.$row_info["telefonos"],
								"e_mail" => '<strong>E-mail: </strong>'.$row_info["e_mail"],
								"principales_operaciones" => '<strong>Principales operaciones: </strong>'.$row_info["principales_operaciones"],
								"empresa_tipo_productos" => '<strong>Tipo de productos: </strong>'.$row_info["empresa_tipo_productos"]
								);
			echo json_encode($answerJson);
            exit;
		}
		
	}

?>