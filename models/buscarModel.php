<?php
	/**
	* 
	*/
	class buscarModel extends Model
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function getTiposEmpresa()
		{
			$tipos = $this->_db->query("SELECT * FROM tipo_empresa ORDER BY tipo_empresa_nombre ASC ");
			return $tipos->fetchall();
		}

		public function getEmpresa()
		{
			$empresa = $this->_db->query("SELECT * FROM vista_empresa");
			return $empresa->fetchall();
		}

		public function getTienda()
		{
			$empresa = $this->_db->query("SELECT idempresa, empresaname FROM vista_empresa");
			return $empresa->fetchall();
		}

		public function getEmpresas()
		{
			$empresa = $this->_db->query("SELECT * FROM vista_empresa");
			return $empresa->fetchall();
		}

	}
?>