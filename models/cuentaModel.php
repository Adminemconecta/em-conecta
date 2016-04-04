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

		public function getMensaje()
		{
			$mensaje = $this->_db->query("SELECT * FROM mensaje ORDER BY idmensaje DESC");
			return $mensaje->fetchall();
		}

		public function getEmpresa()
		{
			$empresa = $this->_db->query("SELECT * FROM empresa_peticion ORDER BY idempresa DESC");
			return $empresa->fetchall();
		}

	}
?>