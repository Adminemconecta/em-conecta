<?php 
	/**
	* 
	*/
	class dashboardModel extends Model
	{
		
		public function __construct()
		{
			parent::__construct();
		}

		public function getMensajes()
		{
			$datos = $this->_db->query("SELECT * FROM mensaje ORDER BY idmensaje DESC");
			return $datos->fetchall();
		}

		public function getUsuarios()
		{
			$datos = $this->_db->query("SELECT * FROM usuario ORDER BY idusuario DESC");
			return $datos->fetchall();
		}

		public function registrarUsuario($usuario_nombre, $usuario_apellido, $usuario_usuario, $usuario_pass, $usuario_activate)
		{
			
			$this->_db->prepare("INSERT INTO usuario VALUES  (null, 
																:usuario_nombre, 
																:usuario_apellido, 
																:usuario_usuario, 
																:usuario_pass,
																0, 
																:usuario_activate
																)")
			->execute(
					array(
							':usuario_nombre'=> $usuario_nombre,
							':usuario_apellido'=> $usuario_apellido,
							':usuario_usuario'=> $usuario_usuario,
							':usuario_pass'=> $usuario_pass,
							':usuario_activate'=> $usuario_activate
						)
				);
		
		}

		public function editarUsuario($idusuario, $usuario_usuario, $usuario_pass)
		{

			$this->_db->prepare("UPDATE  usuario SET  usuario_usuario = :usuario_usuario, usuario_pass = :usuario_pass	WHERE idusuario = :idusuario")

			->execute(
					array(
							':idusuario' => $idusuario,
							':usuario_usuario'=> $usuario_usuario,
							':usuario_pass'=> $usuario_pass
						)
				);		
		
		}

		public function getRedSocial()
		{
			$datos = $this->_db->query("SELECT * FROM social ORDER BY idsocial DESC");
			return $datos->fetchall();
		}


		public function insertarRedSocial($idsocial, $social_url)
		{

			$this->_db->prepare("UPDATE social SET  social_url = :social_url WHERE idsocial = :idsocial")

			->execute(
					array(
							':idsocial' => $idsocial,
							':social_url' => $social_url
						)
				);	
		}

		public function registrarPortafolio($portafolio_telefonos, 
										$portafolio_logo_name, 
										$portafolio_bienvenido, 
										$portafolio_innovacion, 
										$portafolio_integracion,
										$portafolio_integridad,
										$portafolio_historia_cultura,
										$portafolio_mision,
										$portafolio_vision,
										$portafolio_marca,
										$portafolio_como_trabajamos,
										$portafolio_direccion
										)
		{
			
			$this->_db->prepare("INSERT INTO portafolio VALUES  (null, 
																:portafolio_telefonos, 
																:portafolio_logo_name, 
																:portafolio_bienvenido, 
																:portafolio_innovacion,
																:portafolio_integracion,
																:portafolio_integridad,
																:portafolio_historia_cultura,
																:portafolio_mision,
																:portafolio_vision,
																:portafolio_marca,
																:portafolio_como_trabajamos,
																:portafolio_direccion,
																null,
																null
																)")
			->execute(
					array(
							':portafolio_telefonos' => $portafolio_telefonos,
							':portafolio_logo_name' => $portafolio_logo_name,
							':portafolio_bienvenido' => $portafolio_bienvenido,
							':portafolio_innovacion' => $portafolio_innovacion,
							':portafolio_integracion' => $portafolio_integracion,
							':portafolio_integridad' => $portafolio_integridad,
							':portafolio_historia_cultura' => $portafolio_historia_cultura,
							':portafolio_mision' => $portafolio_mision,
							':portafolio_vision' => $portafolio_vision,
							':portafolio_marca' => $portafolio_marca,
							':portafolio_como_trabajamos' => $portafolio_como_trabajamos,
							':portafolio_direccion' => $portafolio_direccion
						)
				);
		
		}

		public function getPortafolio()
		{
			$datos = $this->_db->query("SELECT * FROM portafolio");
			return $datos->fetchall();
		}


	}
	
?>