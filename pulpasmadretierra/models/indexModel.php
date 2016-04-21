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


		public function getProductos()
		{
			$datos = $this->_db->query("SELECT * FROM producto_view ORDER BY idproducto DESC");
			return $datos->fetchall();
		}
	}
?>