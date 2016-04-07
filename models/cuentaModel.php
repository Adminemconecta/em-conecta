<?php
	/**
	* 
	*/
	class cuentaModel extends Model
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function getMensajes()
		{
			$mensaje = $this->_db->query("SELECT * FROM mensaje ORDER BY idmensaje DESC");
			return $mensaje->fetchall();
		}

		public function getEmpresa()
		{
			$empresa = $this->_db->query("SELECT * FROM empresa ORDER BY idempresa DESC");
			return $empresa->fetchall();
		}

		public function getMensaje($idmensaje)
		{
			$mensaje = $this->_db->query("SELECT * FROM mensaje WHERE idmensaje = $idmensaje");
			return $mensaje->fetch();
		}

	}
?>