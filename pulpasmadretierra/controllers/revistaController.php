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
			$this->_pdf = new FPDF('P','cm', array(21.59,27.94));
			$this->_portafolio = $this->loadModel('portafolio');
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

			$dataimg = $this->_portafolio->getPortafolio();
			$dataproducto = $this->_portafolio->getProductos();
			$this->_pdf->AddPage();
			$this->_pdf->Image(BASE_URL.'public/img/revista/muesli-breakfast-food-cornflakes-40725-compressor.jpeg',0,0,45);
			$this->_pdf->Image(BASE_URL.'public/img/'.$dataimg['portafolio_logo_name'],0.5,20,5);
			
			$this->_pdf->Ln(1);
			$this->_pdf->SetFont('Arial','B',20);
			$this->_pdf->SetTextColor(133, 171, 0);
			$this->_pdf->MultiCell(20,0.5, utf8_decode( strtoupper(strtolower('pulpas madre tierra')) ),0,'C');
			$this->_pdf->Ln(6);

			for ($i=0; $i < count($dataproducto) ; $i++) { 
				
				$this->_pdf->SetFont('Arial','B',10);
				$this->_pdf->SetTextColor(0, 0, 0);
				$this->_pdf->Cell(1);
				$this->_pdf->Cell(11 ,1, utf8_decode(strtoupper(strtolower($dataproducto[$i]['blog_titlulo']))),0,0,'L');
				$this->_pdf->Ln(1);

			}

			$this->_pdf->AddPage();
			$this->_pdf->Image(BASE_URL.'public/img/'.$dataimg['portafolio_logo_name'],0.5,0.5,1);
			$this->_pdf->Image(BASE_URL.'public/img/portafolio/girl-pretty-beautiful-young-47215-compressor.jpeg',8,8,6);
			$this->_pdf->SetFont('Arial','B',30);
			$this->_pdf->SetTextColor(133, 171, 0);
			$this->_pdf->Ln(4.5);
			$this->_pdf->Cell(7.2);
			$this->_pdf->Cell(5.2 ,2, utf8_decode('Bienvenido'),0,0,'L');
			$this->_pdf->Ln(12);
			$this->_pdf->Cell(2);
			$this->_pdf->SetFont('Arial','',11);
			$this->_pdf->SetTextColor(0, 0, 0);
			$this->_pdf->MultiCell(15,0.6, utf8_decode( $dataimg['portafolio_bienvenido'] ),0,'J');

			for ($a=0; $a < count($dataproducto) ; $a++) { 

				$this->_pdf->AddPage();
				$this->_pdf->Image(BASE_URL.'public/img/'.$dataimg['portafolio_logo_name'],0.5,0.5,1);
				$this->_pdf->SetFont('Arial','B',20);
				$this->_pdf->SetTextColor(133, 171, 0);
				$this->_pdf->Ln(2.5);
				$this->_pdf->MultiCell(20,0.6, utf8_decode( $dataproducto[$a]['blog_titlulo'] ),0,'C');
				$this->_pdf->Ln(3);
				$this->_pdf->Cell(1);
				$this->_pdf->SetFont('Arial','',11);
				$this->_pdf->SetTextColor(0, 0, 0);
				$this->_pdf->MultiCell(18,0.6, utf8_decode( $dataproducto[$a]['blog_contenido'] ),0,'J');

				$this->_pdf->AddPage();
				$this->_pdf->Image(BASE_URL.'public/img/'.$dataimg['portafolio_logo_name'],0.5,0.5,1);
				$this->_pdf->SetFont('Arial','B',20);
				$this->_pdf->SetTextColor(133, 171, 0);
				$this->_pdf->Ln(2.5);
				$this->_pdf->Cell(20 ,2, utf8_decode($dataproducto[$a]['producto_nombre']),0,0,'C');
				$this->_pdf->Ln(3);
				$this->_pdf->Cell(1);
				$this->_pdf->SetFont('Arial','',11);
				$this->_pdf->SetTextColor(0, 0, 0);
				$this->_pdf->MultiCell(18,0.6, utf8_decode( $dataproducto[$a]['producto_descripcion'] ),0,'J');
				$this->_pdf->Ln(2.5);
				$this->_pdf->Cell(20 ,2, utf8_decode($dataproducto[$a]['producto_valor']),0,0,'C');
				$this->_pdf->Image(BASE_URL.'public/img/productos/'.$dataproducto[$a]['fotos_name'],8.5,16,5);

			}

			$this->_pdf->AddPage();
			$this->_pdf->Image(BASE_URL.'public/img/'.$dataimg['portafolio_logo_name'],0.5,0.5,1);
			$this->_pdf->SetTextColor(255, 255, 255);
			$this->_pdf->SetFont('Arial','B',10);
			$this->_pdf->SetFillColor(133, 171, 0);
			$this->_pdf->Rect(0, 0, 22 , 28, 'F');
			$this->_pdf->Ln(22);
			$this->_pdf->Cell(12);
			$this->_pdf->Cell(5.2 ,2, utf8_decode($dataimg['portafolio_direccion']),0,0,'L');
			$this->_pdf->Ln(0.8);
			$this->_pdf->Cell(4.2);
			$this->_pdf->SetFont('Arial','B',10);
			$this->_pdf->SetTextColor(0, 0, 0);
			$this->_pdf->MultiCell(20,0.6, utf8_decode( $dataimg['portafolio_telefonos'] ),0,'L');

			$this->_pdf->Output('Portafolio '. date('Y').'.pdf','I');
		}
	}

?>