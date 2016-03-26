<?php
	/**
	* 
	*/
	class mensajeModel extends Model
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function registrarEmpresa($nombre, 
										$oficina_central, 
										$fundacion, 
										$presidente, 
										$numero_de_empleados, 
										$principales_operaciones, 
										$plantas_industriales, 
										$oficinas_de_contacto, 
										$tipo_sociedad,
										$rut,
										$domicilio_legal,
										$domicilio_comercial,
										$telefonos,
										$fax,
										$e_mail,
										$municipio_idmunicipio,
										$tipo_empresa_idtipo_empresa,
										$logo)
		{
			$this->_db->prepare("INSERT INTO empresa VALUES  (null, 
																:nombre, 
																:oficina_central, 
																:fundacion, 
																:presidente, 
																:numero_de_empleados, 
																:principales_operaciones, 
																:plantas_industriales, 
																:oficinas_de_contacto, 
																:tipo_sociedad,
																:rut,
																:domicilio_legal,
																:domicilio_comercial,
																:telefonos,
																:fax,
																:e_mail,
																:municipio_idmunicipio,
																:tipo_empresa_idtipo_empresa,
																:logo
																)")
			->execute(
					array(
							':nombre'=> $nombre,
							':oficina_central'=> $oficina_central,
							':fundacion'=> $fundacion,
							':presidente'=> $presidente,
							':numero_de_empleados'=> $numero_de_empleados,
							':principales_operaciones'=> $principales_operaciones,
							':plantas_industriales'=> $plantas_industriales,
							':oficinas_de_contacto'=> $oficinas_de_contacto,
							':tipo_sociedad'=> $tipo_sociedad,
							':rut'=> $rut,
							':domicilio_legal'=> $domicilio_legal,
							':domicilio_comercial'=> $domicilio_comercial,
							':telefonos'=> $telefonos,
							':fax'=> $fax,
							':e_mail'=> $e_mail,
							':municipio_idmunicipio'=> $municipio_idmunicipio,
							':tipo_empresa_idtipo_empresa'=> $tipo_empresa_idtipo_empresa,
							':logo'=> $logo
						)
				);
		}
	}
?>