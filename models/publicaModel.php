<?php
	/**
	* 
	*/
	class publicaModel extends Model
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
										$empresa_peticion_tipo_producto,
										$empresa_peticion_departamento,
										$empresa_peticion_user)
		{
			$this->_db->prepare("INSERT INTO empresa_peticion VALUES  (null, 
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
																:empresa_peticion_tipo_producto,
																:empresa_peticion_departamento,
																:empresa_peticion_user)")
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
							':empresa_peticion_tipo_producto'=> $empresa_peticion_tipo_producto,
							':empresa_peticion_departamento'=> $empresa_peticion_departamento,
							':empresa_peticion_user'=> $empresa_peticion_user
						)
				);
		}

		public function getDepartamento()
		{
			$depto = $this->_db->query("SELECT * FROM departamento ORDER BY iddepartamento ASC");
			return $depto->fetchall();
		}

		public function getMunicipo()
		{
			$mun = $this->_db->query("SELECT * FROM municipio ORDER BY idmunicipio ASC");
			return $mun->fetchall();
		}

		public function getMunicipioId($departamento_iddepartamento)
		{
			$mun = $this->_db->query("SELECT * FROM municipio WHERE departamento_iddepartamento = $departamento_iddepartamento;");
			return $mun->fetchall();
		}

		public function getRut($rut)
		{
			$rut = $this->_db->query("SELECT idempresa FROM empresa_peticion WHERE rut = '$rut'");
			return $rut->fetch();
		}
	}
?>