<?php 
	/**
	* 
	*/
	class loginModel extends Model
	{
		
		public function __construct()
		{
			parent::__construct();
		}

		public function getUsuario($usuario_user, $usuario_pass)
		{
			$datos = $this->_db->query("SELECT * FROM usuario WHERE (usuario_usuario = '$usuario_user') AND (usuario_pass = '$usuario_pass')");
			return $datos->fetch();
		}
	}
	
?>