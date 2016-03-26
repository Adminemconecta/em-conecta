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
			$datos = $this->_db->query(
					"SELECT * FROM admin_em_connecta WHERE usuario = '$usuario_user' AND pass = '$usuario_pass'"
				);
			return $datos->fetch();
		}
	}
	
?>