<?php 
	/**
	* 
	*/
	class portafolioController extends Controller
	{
		private $_pdf;
		function __construct()
		{
			parent::__construct();
			$this->getLibrary('fpdf');
			$this->_pdf = new FPDF('L','mm', array(431.9,279.4));
			$this->_pdf->SetMargins(15, 15 , 15);
			$this->_pdf->SetAutoPageBreak(true,15);
		}

		public function index(){
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
			if (!Session::get('autenticado')) {
				$this->redireccionar();
			}

			$this->_pdf->AddPage();
			$this->_pdf->SetFont('Arial','B',9);
			$this->_pdf->Cell(280);
			$this->_pdf->Cell(150,7, utf8_decode( 'Portafolio de negocios '.COMPANY ),0,0,'L');
			$this->_pdf->Ln(50);

		    $this->_pdf->Image(BASE_URL.'public/img/delicate-arch-night-stars-landscape.jpg',0,40,400);

			$this->_pdf->SetFillColor(255, 255, 255);
			$this->_pdf->Rect(0, 35, 520 , 70, 'F');

			$this->_pdf->SetFillColor(255, 255, 255);
			$this->_pdf->Rect(0, 255, 520 , 70, 'F');

			$this->_pdf->Cell(250);
			$this->_pdf->SetFont('Arial','',50);
			$this->_pdf->Cell(150,7, utf8_decode( 'Portafolio '. date('Y') ),0,0,'L');
			$this->_pdf->Ln(14);

			$this->_pdf->Cell(250);
			$this->_pdf->SetFont('Arial','B',15);
			$this->_pdf->Cell(150,7, utf8_decode( 'Conectamos tu ideas con el mundo' ),0,0,'L');

			$this->_pdf->Ln(63);

			$this->_pdf->Cell(20);
			$this->_pdf->SetFont('Arial','',15);
			$this->_pdf->SetTextColor(255, 255, 255);
			$this->_pdf->Cell(150,7, utf8_decode( APP_COMPANY ),0,0,'L');

			$this->_pdf->Ln(7);
			$this->_pdf->Cell(20);
			$this->_pdf->SetFont('Arial','',10);
			$this->_pdf->Cell(150,7, utf8_decode( 'Telefonos de contacto' ),0,0,'L');

			$this->_pdf->AddPage();
			$this->_pdf->SetTextColor(0, 0, 0);
			$this->_pdf->SetFont('Arial','B',9);
			$this->_pdf->Cell(280);
			$this->_pdf->Cell(150,7, utf8_decode( 'Portafolio de negocios '.COMPANY ),0,0,'L');
			$this->_pdf->Ln(180);
			$this->_pdf->Cell(10);
			$this->_pdf->Cell(150,7, utf8_decode( 'Portafolio Productos y servicios' ),0,0,'L');
			$this->_pdf->Ln(5);
			$this->_pdf->Cell(10);
			$this->_pdf->Cell(150,7, utf8_decode( 'Portafolio generado por Em-conecta-sas' ),0,0,'L');

			$this->_pdf->Image(BASE_URL.'public/img/delicate-arch-night-stars-landscape.jpg',0,40,70);

			$this->_pdf->Output();
		}
	}
?>