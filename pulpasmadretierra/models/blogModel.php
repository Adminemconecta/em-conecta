<?php
	/**
	* 
	*/
	class indexModel extends Model
	{
		
		function __construct()
		{
			parent::__construct();
		}


		public function registrarblog($mensaje_nombre, 
											$mensaje_apellido, 
											$mensaje_asunto, 
											$mensaje_email, 
											$mensaje_mensaje
										)
		{
			$this->_db->prepare("INSERT INTO mensaje VALUES  (null, 
																:mensaje_nombre, 
																:mensaje_apellido, 
																:mensaje_asunto, 
																:mensaje_email, 
																:mensaje_mensaje
																)")
			->execute(
					array(
							':mensaje_nombre'=> $mensaje_nombre,
							':mensaje_apellido'=> $mensaje_apellido,
							':mensaje_asunto'=> $mensaje_asunto,
							':mensaje_email'=> $mensaje_email,
							':mensaje_mensaje'=> $mensaje_mensaje
						)
				);
		}
			
	}
?>