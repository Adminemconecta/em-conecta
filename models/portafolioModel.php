<?php
	/**
	* 
	*/
	class portafolioModel extends Model
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function getPortafolio()
		{
			$portafolio = $this->_db->query("SELECT * FROM portafolio");
			return $portafolio->fetch();
		}

		public function getOtros()
		{
			$otros = $this->_db->query("SELECT * FROM otros");
			return $otros->fetch();
		}


		public function getPlanes()
		{
			$otros = $this->_db->query("SELECT * FROM planes ORDER BY idplanes ASC");
			return $otros->fetchall();
		}
	}
?>