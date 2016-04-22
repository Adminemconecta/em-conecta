<?php 
	/**
	* 
	*/
	class portafolioController extends Controller
	{
		private $_pdf;
		private $_portafolio;

		function __construct()
		{
			parent::__construct();
			$this->getLibrary('fpdf');
			$this->_pdf = new FPDF('L','cm', array(17.59,27.94));
			$this->_portafolio = $this->loadModel('portafolio');
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
			date_default_timezone_set('America/Bogota');
			$dataimg = $this->_portafolio->getPortafolio();
			$dataproducto = $this->_portafolio->getProductos();
			$this->_pdf->AddPage();
			$this->_pdf->Image(BASE_URL.'public/img/'.$dataimg['portafolio_logo_name'],0.5,0.5,1);
			$this->_pdf->SetFillColor(133, 171, 0);
			$this->_pdf->Rect(18, 0, 8 , 18, 'F');
			$this->_pdf->SetFont('Arial','B',10);
			$this->_pdf->SetTextColor(133, 171, 0);
			$this->_pdf->Ln(6);
			$this->_pdf->Cell(9.2);
			$this->_pdf->Cell(5.2 ,2, utf8_decode(APP_NAME),0,0,'L');
			$this->_pdf->SetFont('Arial','B',39);
			$this->_pdf->SetTextColor(133, 171, 0);
			$this->_pdf->Ln(1);
			$this->_pdf->Cell(9.2);
			$this->_pdf->Cell(7.7 ,2, utf8_decode( 'PORTAFOL'),0,0,'L');
			$this->_pdf->SetTextColor(0, 0, 0);
			$this->_pdf->Cell(4.8,2, utf8_decode( 'IO '. date('Y') ),0,0,'L');
			$this->_pdf->Ln(1);
			$this->_pdf->Cell(20.2);
			$this->_pdf->SetFont('Arial','B',10);
			$this->_pdf->SetTextColor(0, 0, 0);
			$this->_pdf->Cell(5.2 ,2, utf8_decode(date("F-d")),0,0,'L');
			$this->_pdf->SetFont('Arial','B',11);
			$this->_pdf->SetTextColor(133, 171, 0);
			$this->_pdf->Ln(5);
			$this->_pdf->MultiCell(15,0.6, utf8_decode( $dataimg['portafolio_marca'] ),0,'L');

			$this->_pdf->AddPage();
			$this->_pdf->SetFillColor(133, 171, 0);
			$this->_pdf->Rect(9.5, 7, 10 , 0.1, 'F');
			$this->_pdf->Rect(9.5, 11.5, 10 , 0.1, 'F');
			$this->_pdf->SetFont('Arial','B',10);
			$this->_pdf->SetTextColor(133, 171, 0);
			$this->_pdf->Ln(5.5);
			$this->_pdf->Cell(11.2);
			$this->_pdf->Cell(5.2 ,2, utf8_decode(APP_NAME),0,0,'L');
			$this->_pdf->Image(BASE_URL.'public/img/'.$dataimg['portafolio_logo_name'],13.2,8,3);

			$this->_pdf->AddPage();
			$this->_pdf->Image(BASE_URL.'public/img/'.$dataimg['portafolio_logo_name'],0.5,0.5,1);
			$this->_pdf->Image(BASE_URL.'public/img/portafolio/girl-pretty-beautiful-young-47215-compressor.jpeg',1.2,7,6);
			$this->_pdf->SetFont('Arial','B',30);
			$this->_pdf->Ln(4.5);
			$this->_pdf->Cell(7.2);
			$this->_pdf->Cell(5.2 ,2, utf8_decode('Bienvenido'),0,0,'L');
			$this->_pdf->Ln(3);
			$this->_pdf->Cell(7.2);
			$this->_pdf->SetFont('Arial','',11);
			$this->_pdf->SetTextColor(0, 0, 0);
			$this->_pdf->MultiCell(17,0.6, utf8_decode( $dataimg['portafolio_bienvenido'] ),0,'L');

			$this->_pdf->AddPage();
			$this->_pdf->Image(BASE_URL.'public/img/'.$dataimg['portafolio_logo_name'],0.5,0.5,1);
			$this->_pdf->Image(BASE_URL.'public/img/portafolio/pexels-photo-28201-compressor.jpg',0,0,32);
			$this->_pdf->SetTextColor(133, 171, 0);
			$this->_pdf->SetFont('Arial','B',30);
			$this->_pdf->SetFillColor(133, 171, 0);
			$this->_pdf->Rect(1, 7, 7 , 0.1, 'F');
			$this->_pdf->Ln(4.5);
			$this->_pdf->Cell(5.2 ,2, utf8_decode('Nosotros'),0,0,'L');
			$this->_pdf->Ln(3);
			$this->_pdf->Cell(1.2);
			$this->_pdf->SetFont('Arial','',11);
			$this->_pdf->SetTextColor(255, 255, 255);
			$this->_pdf->MultiCell(15,0.6, utf8_decode( $dataimg['portafolio_historia_cultura'] ),0,'L');

			$this->_pdf->AddPage();
			$this->_pdf->Image(BASE_URL.'public/img/'.$dataimg['portafolio_logo_name'],0.5,0.5,1);
			$this->_pdf->SetTextColor(133, 171, 0);
			$this->_pdf->SetFont('Arial','B',30);
			$this->_pdf->SetFillColor(133, 171, 0);
			$this->_pdf->Rect(3, 7, 7 , 0.1, 'F');
			$this->_pdf->Ln(4.5);
			$this->_pdf->Cell(5.2 ,2, utf8_decode('Mision'),0,0,'L');
			$this->_pdf->Ln(3);
			$this->_pdf->Cell(4.2);
			$this->_pdf->SetFont('Arial','',11);
			$this->_pdf->SetTextColor(0, 0, 0);
			$this->_pdf->MultiCell(20,0.6, utf8_decode( $dataimg['portafolio_mision'] ),0,'L');

			$this->_pdf->AddPage();
			$this->_pdf->Image(BASE_URL.'public/img/'.$dataimg['portafolio_logo_name'],0.5,0.5,1);
			$this->_pdf->SetTextColor(133, 171, 0);
			$this->_pdf->SetFont('Arial','B',30);
			$this->_pdf->SetFillColor(133, 171, 0);
			$this->_pdf->Rect(3, 7, 7 , 0.1, 'F');
			$this->_pdf->Ln(4.5);
			$this->_pdf->Cell(5.2 ,2, utf8_decode('Vision'),0,0,'L');
			$this->_pdf->Ln(3);
			$this->_pdf->Cell(4.2);
			$this->_pdf->SetFont('Arial','',11);
			$this->_pdf->SetTextColor(0, 0, 0);
			$this->_pdf->MultiCell(20,0.6, utf8_decode( $dataimg['portafolio_vision'] ),0,'L');

			$this->_pdf->AddPage();
			$this->_pdf->Image(BASE_URL.'public/img/'.$dataimg['portafolio_logo_name'],0.5,0.5,1);
			$this->_pdf->SetTextColor(133, 171, 0);
			$this->_pdf->SetFont('Arial','B',30);
			$this->_pdf->SetFillColor(133, 171, 0);
			$this->_pdf->Rect(15, 7, 7 , 0.1, 'F');
			$this->_pdf->Ln(4.5);
			$this->_pdf->Cell(19.2);
			$this->_pdf->Cell(5.2 ,2, utf8_decode('Innovacion'),0,0,'L');
			$this->_pdf->Ln(3);
			$this->_pdf->Cell(4.2);
			$this->_pdf->SetFont('Arial','',11);
			$this->_pdf->SetTextColor(0, 0, 0);
			$this->_pdf->MultiCell(20,0.6, utf8_decode( $dataimg['portafolio_innovacion'] ),0,'L');

			if ($dataimg['portafolio_integracion'] != '') {
				$this->_pdf->AddPage();
				$this->_pdf->Image(BASE_URL.'public/img/'.$dataimg['portafolio_logo_name'],0.5,0.5,1);
				$this->_pdf->SetTextColor(133, 171, 0);
				$this->_pdf->SetFont('Arial','B',30);
				$this->_pdf->SetFillColor(133, 171, 0);
				$this->_pdf->Rect(8, 7, 12 , 0.1, 'F');
				$this->_pdf->Ln(3.8);
				$this->_pdf->Cell(10.2);
				$this->_pdf->Cell(5.2 ,2, utf8_decode('Integracion'),0,0,'L');
				$this->_pdf->Ln(3);
				$this->_pdf->Cell(4.2);
				$this->_pdf->SetFont('Arial','',11);
				$this->_pdf->SetTextColor(0, 0, 0);
				$this->_pdf->MultiCell(20,0.6, utf8_decode( $dataimg['portafolio_integracion'] ),0,'L');
			}
			
			if ($dataimg['portafolio_integridad'] != '') {
				$this->_pdf->AddPage();
				$this->_pdf->Image(BASE_URL.'public/img/'.$dataimg['portafolio_logo_name'],0.5,0.5,3);
				$this->_pdf->Image(BASE_URL.'public/img/portafolio/pexels-photo-62330-compressor.jpeg',0,0,32);
				$this->_pdf->SetTextColor(133, 171, 0);
				$this->_pdf->SetFont('Arial','B',30);
				$this->_pdf->SetFillColor(133, 171, 0);
				$this->_pdf->Rect(1, 7, 7 , 0.1, 'F');
				$this->_pdf->Ln(4.5);
				$this->_pdf->Cell(5.2 ,2, utf8_decode('Integridad'),0,0,'L');
				$this->_pdf->Ln(3);
				$this->_pdf->Cell(4.2);
				$this->_pdf->SetFont('Arial','',11);
				$this->_pdf->SetTextColor(255, 255, 255);
				$this->_pdf->MultiCell(20,0.6, utf8_decode( $dataimg['portafolio_integridad'] ),0,'L');
			}

			

			$this->_pdf->AddPage();
			$this->_pdf->Image(BASE_URL.'public/img/'.$dataimg['portafolio_logo_name'],0.5,0.5,1);
			$this->_pdf->SetTextColor(133, 171, 0);
			$this->_pdf->SetFont('Arial','B',30);
			$this->_pdf->SetFillColor(133, 171, 0);
			$this->_pdf->Rect(15, 7, 7 , 0.1, 'F');
			$this->_pdf->Ln(4.5);
			$this->_pdf->Cell(16.2);
			$this->_pdf->Cell(5.2 ,2, utf8_decode('Como trabajamos'),0,0,'L');
			$this->_pdf->Ln(3);
			$this->_pdf->Cell(4.2);
			$this->_pdf->SetFont('Arial','',11);
			$this->_pdf->SetTextColor(0, 0, 0);
			$this->_pdf->MultiCell(20,0.6, utf8_decode( $dataimg['portafolio_como_trabajamos'] ),0,'L');

			for ($i=0; $i < count($dataproducto) ; $i++) { 
				$this->_pdf->AddPage();
				$this->_pdf->Image(BASE_URL.'public/img/'.$dataimg['portafolio_logo_name'],0.5,0.5,1);
				$this->_pdf->Image(BASE_URL.'public/img/productos/'.$dataproducto[$i]['fotos_name'],1.2,4,12);
				$this->_pdf->SetFont('Arial','B',20);
				$this->_pdf->Ln(4);
				$this->_pdf->Cell(13.2);
				$this->_pdf->SetTextColor(133, 171, 0);
				$this->_pdf->Cell(5.2 ,2, utf8_decode($dataproducto[$i]['producto_nombre']),0,0,'L');
				$this->_pdf->Ln(2);
				$this->_pdf->Cell(13.2);
				$this->_pdf->SetFont('Arial','',11);
				$this->_pdf->SetTextColor(0, 0, 0);
				$this->_pdf->MultiCell(11,0.6, utf8_decode( $dataproducto[$i]['producto_descripcion'] ),0,'L');
			}

			$this->_pdf->AddPage();
			$this->_pdf->Image(BASE_URL.'public/img/'.$dataimg['portafolio_logo_name'],0.5,0.5,1);
			$this->_pdf->SetTextColor(255, 255, 255);
			$this->_pdf->SetFont('Arial','B',10);
			$this->_pdf->SetFillColor(133, 171, 0);
			$this->_pdf->Rect(0, 0, 28 , 21, 'F');
			$this->_pdf->Ln(12);
			$this->_pdf->Cell(16.2);
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