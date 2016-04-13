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
										$plantas_industriales, 
										$principales_operaciones,
										$oficinas_de_contacto, 
										$tipo_sociedad,
										$rut,
										$empresa_tipo_productos,
										$domicilio_legal,
										$domicilio_comercial,
										$telefonos,
										$fax,
										$e_mail,
										$municipio_idmunicipio,
										$tipo_empresa_idtipo_empresas,
										$empresa_peticion_user,
										$empresa_acepto_terminos
										)
		{
			$this->_db->prepare("INSERT INTO empresa VALUES  (null, 
																:nombre, 
																:oficina_central, 
																:fundacion, 
																:presidente, 
																:numero_de_empleados, 
																:plantas_industriales, 
																:principales_operaciones, 
																:oficinas_de_contacto, 
																:tipo_sociedad,
																:rut,
																:empresa_tipo_productos,
																:domicilio_legal,
																:domicilio_comercial,
																:telefonos,
																:fax,
																:e_mail,
																:municipio_idmunicipio,
																:tipo_empresa_idtipo_empresas,
																:empresa_peticion_user,
																0,
																:empresa_acepto_terminos)")
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
							':empresa_tipo_productos' => $empresa_tipo_productos,
							':domicilio_legal'=> $domicilio_legal,
							':domicilio_comercial'=> $domicilio_comercial,
							':telefonos'=> $telefonos,
							':fax'=> $fax,
							':e_mail'=> $e_mail,
							':municipio_idmunicipio'=> $municipio_idmunicipio,
							':tipo_empresa_idtipo_empresas'=> $tipo_empresa_idtipo_empresas,
							':empresa_peticion_user'=> $empresa_peticion_user,
							':empresa_acepto_terminos' => $empresa_acepto_terminos
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
			$munid = $this->_db->query("SELECT * FROM municipio WHERE departamento_iddepartamento = $departamento_iddepartamento;");
			return $munid->fetchall();
		}

		public function getRut($rut)
		{
			$rut = $this->_db->query("SELECT idempresa FROM empresa WHERE rut = '$rut'");
			return $rut->fetch();
		}
		
		public function getTipo_empresa()
		{
			$empresa = $this->_db->query("SELECT * FROM tipo_empresa ORDER BY idtipo_empresa ASC");
			return $empresa->fetchall();
		}
	}
?>