<?php
	/**
	* 
	*/
	class registroModel extends Model
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function getMsnContratos()
		{
			$contratos = $this->_db->query("SELECT * FROM cliente_contrato");
			return $contratos->fetchall();
		}
	}
?>