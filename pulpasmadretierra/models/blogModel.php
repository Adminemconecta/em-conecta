<?php
	/**
	* 
	*/
	class blogModel extends Model
	{
		
		function __construct()
		{
			parent::__construct();
		}


		public function getBlogArticulos()
		{
			$datos = $this->_db->query("SELECT * FROM blogfoto ORDER BY idblog DESC");
			return $datos->fetchall();
		}

		public function getBlogArticulo($idblog)
		{
			$datos = $this->_db->query("SELECT * FROM blogfoto WHERE idblog = $idblog");
			return $datos->fetch();
		}
	}
?>