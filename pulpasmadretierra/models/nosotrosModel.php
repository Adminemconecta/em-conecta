<?php
	/**
	* 
	*/
	class nosotrosModel extends Model
	{
		
		function __construct()
		{
			parent::__construct();
		}


		public function getPortafolio()
		{
			$datos = $this->_db->query("SELECT * FROM portafolio ORDER BY idportafolio DESC");
			return $datos->fetchall();
		}
	}
?>