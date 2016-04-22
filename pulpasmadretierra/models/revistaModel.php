<?php
	/**
	* 
	*/
	class revistaModel extends Model
	{
		
		function __construct()
		{
			parent::__construct();
		}


		public function getPortafolio()
		{
			$datos = $this->_db->query("SELECT * FROM portafolio ORDER BY idportafolio DESC");
			return $datos->fetch();
		}

		public function getProductos()
		{
			$datos = $this->_db->query("SELECT * FROM producto_view LIMIT 0,10 ORDER BY idproducto DESC ");
			return $datos->fetchall();
		}
	}
?>