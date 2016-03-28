<?php
	/**
	* 
	*/
	class controlpanelModel extends Model
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function configInicial($otros_conecta_al_mundo, 
										$otros_efectividad, 
										$otros_productividad, 
										$otros_marketing, 
										$otros_datos, 
										$otros_nosotros, 
										$otros_mision, 
										$otros_vision, 
										$otros_en_que_creemos
										)
		{
			$this->_db->prepare("INSERT INTO otros VALUES  (null, 
																:otros_conecta_al_mundo, 
																:otros_efectividad, 
																:otros_productividad, 
																:otros_marketing, 
																:otros_datos, 
																:otros_nosotros, 
																:otros_mision, 
																:otros_vision, 
																:otros_en_que_creemos
																)")
			->execute(
					array(
							':otros_conecta_al_mundo'=> $otros_conecta_al_mundo,
							':otros_efectividad'=> $otros_efectividad,
							':otros_productividad'=> $otros_productividad,
							':otros_marketing'=> $otros_marketing,
							':otros_datos'=> $otros_datos,
							':otros_nosotros'=> $otros_nosotros,
							':otros_mision'=> $otros_mision,
							':otros_vision'=> $otros_vision,
							':otros_en_que_creemos'=> $otros_en_que_creemos
						)
				);
		}

		public function registrarPlanes($planes_titulo, 
										$contenido, 
										$planes_title_inf
										)
		{
			$this->_db->prepare("INSERT INTO planes VALUES  (null, 
																:planes_titulo, 
																:contenido, 
																:planes_title_inf
																)")
			->execute(
					array(
							':planes_titulo'=> $planes_titulo,
							':contenido'=> $contenido,
							':planes_title_inf'=> $planes_title_inf
						)
				);
		}

		public function registrarBeneficio($beneficios_lista_beneficios, 
										$planes_idplanes
										)
		{
			$this->_db->prepare("INSERT INTO beneficios VALUES  (null, 
																:beneficios_lista_beneficios, 
																:planes_idplanes
																)")
			->execute(
					array(
							':beneficios_lista_beneficios'=> $beneficios_lista_beneficios,
							':planes_idplanes'=> $planes_idplanes
						)
				);
		}

		public function registrarPortafolio($portafolio_bienvenida, 
										$portafolio_marca, 
										$portafolio_historia_cultura, 
										$portafolio_inovation, 
										$portafolio_integration, 
										$portafolio_integrrity, 
										$portafolio_lista_servicios, 
										$portafolio_como_trabajamos, 
										$portafolio_nuestro_cerebro
										)
		{
			$this->_db->prepare("INSERT INTO portafolio VALUES  (null, 
																:portafolio_bienvenida, 
																:portafolio_marca, 
																:portafolio_historia_cultura, 
																:portafolio_inovation, 
																:portafolio_integration, 
																:portafolio_integrrity, 
																:portafolio_lista_servicios, 
																:portafolio_como_trabajamos, 
																:portafolio_nuestro_cerebro
																)")
			->execute(
					array(
							':portafolio_bienvenida'=> $portafolio_bienvenida,
							':portafolio_marca'=> $portafolio_marca,
							':portafolio_historia_cultura'=> $portafolio_historia_cultura,
							':portafolio_inovation'=> $portafolio_inovation,
							':portafolio_integration'=> $portafolio_integration,
							':portafolio_integrrity'=> $portafolio_integrrity,
							':portafolio_lista_servicios'=> $portafolio_lista_servicios,
							':portafolio_como_trabajamos'=> $portafolio_como_trabajamos,
							':portafolio_nuestro_cerebro'=> $portafolio_nuestro_cerebro
						)
				);
		}

		public function getConfigInicial()
		{
			$config = $this->_db->query("SELECT * FROM otros ORDER BY idotros DESC");
			return $config->fetch();
		}

		public function getPlanes()
		{
			$clientes = $this->_db->query("SELECT * FROM planes ORDER BY idplanes ASC");
			return $clientes->fetchall();
		}

		public function getBeneficio()
		{
			$clientes = $this->_db->query("SELECT idplanes, planes_idplanes, beneficios_lista_beneficios  FROM beneficios
											INNER JOIN planes
											ON beneficios.planes_idplanes = planes.idplanes
											ORDER BY idbeneficios ASC");
			return $clientes->fetchall();
		}

		public function getPortafolio()
		{
			$clientes = $this->_db->query("SELECT * FROM portafolio ORDER BY portafolio DESC");
			return $clientes->fetchall();
		}
	}
?>