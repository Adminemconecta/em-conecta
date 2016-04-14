<?php

	/**
	* 
	*/
	class revistaController extends Controller
	{
		
		private $_pdf;
		private $_portafolio;

		function __construct()
		{
			parent::__construct();
			$this->getLibrary('fpdf');
			$this->_pdf = new FPDF('L','mm', array(431.9,279.4));
			$this->_pdf->SetMargins(15, 15 , 15);
			$this->_pdf->SetAutoPageBreak(true,15);
		}

		public function index()
		{
			self::pdf();
		}
		
		public function header()
		{
			
		}

		public function footer()
		{
			
		}

		public function pdf()
		{
			$this->_pdf->AddPage();
			$this->_pdf->Output('Portafolio '. date('Y').'.pdf','I');
		}
	}

?>