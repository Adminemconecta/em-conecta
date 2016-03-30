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
			$this->_pdf = new FPDF('P','mm','Letter');
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
			$this->_pdf->SetFont('Arial','',12);
			$this->_pdf->Cell(150,7, utf8_decode( 'Portafolio de servicios' ),0,0,'L');

		    $this->_pdf->Image(BASE_URL.'public/img/black-and-white-city-man-people.jpg',0,80,350);

		    //borde fotografia
			$this->_pdf->SetFillColor(254, 254, 254);
			$this->_pdf->Rect(0, 271.5, 220 , 8, 'F');
			$this->_pdf->SetFillColor(254, 254, 254);
			$this->_pdf->Rect(209, 20, 8 , 270, 'F');

			//cuadro interior
			$this->_pdf->SetFillColor(230, 230, 230);
			$this->_pdf->Ln(40);
			$this->_pdf->Cell(10);
			$this->_pdf->SetFont('Arial','B',27);
			$this->_pdf->SetTextColor(255, 152, 0);
			$this->_pdf->Cell(70,7, utf8_decode( APP_COMPANY ),0,0,'L');
			$this->_pdf->Ln(182.5);
			$this->_pdf->Cell(15);
			$this->_pdf->SetFont('Arial','',10);
			$this->_pdf->SetTextColor(0, 0, 0);
			$this->_pdf->Rect(0, 230, 150 , 10, 'F');
			$this->_pdf->MultiCell(120,6, utf8_decode( 'Conectamos al mundo' ),0,'R');

			//pagina uno

			$this->_pdf->AddPage();

			$this->_pdf->Ln(190);
			$this->_pdf->Cell(10);
			$this->_pdf->SetFont('Arial','B',12);
			$this->_pdf->SetTextColor(255, 152, 0);
			$this->_pdf->MultiCell(95,6, utf8_decode( 'aviso legal del producto que no se que tiene de en este lugar' ),0,'L');

			//pagina dos

			$this->_pdf->AddPage();

			$this->_pdf->Ln(175);
			$this->_pdf->SetFont('Arial','',12);
			$this->_pdf->SetTextColor(0, 0, 0);
			$this->_pdf->Cell(50);
			$this->_pdf->MultiCell(90,6, utf8_decode( 'Un nuevo estilo para tu empresa en la web' ),0,'C');
			$this->_pdf->Image(BASE_URL.'public/img/pexels-photo_pdf.jpg',45,115,120);

			//pagina tres

			$this->_pdf->AddPage();

			$this->_pdf->SetFillColor(0, 77, 64);
			$this->_pdf->Rect(0, 0, 220 , 280, 'F');

			//pagina cuatro

			$this->_pdf->AddPage();
			$this->_pdf->Ln(20);
			$this->_pdf->SetFillColor(0, 77, 64);
			$this->_pdf->Rect(0, 0, 220 , 280, 'F');
			$this->_pdf->SetFont('Arial','',52);
			$this->_pdf->SetTextColor(255, 255, 255);
			$this->_pdf->MultiCell(90,20, utf8_decode( 'esto es la frase del branding empresarial' ),0,'C');


			$this->_pdf->AddPage();
			$this->_pdf->SetFont('Arial','B',12);
			$this->_pdf->SetTextColor(0, 0, 0);
			$this->_pdf->Cell(90,20, utf8_decode( 'em-conecta' ),0,0,'L');
			$this->_pdf->Ln(140);
			$this->_pdf->SetFont('Arial','B',15);
			$this->_pdf->Cell(90,20, utf8_decode( 'Historia y Cultura' ),0,0,'J');
			$this->_pdf->Ln(20);
			$this->_pdf->SetFont('Arial','',11);
			$this->_pdf->MultiCell(193,7, utf8_decode( 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.' ),0,'J');

			$this->_pdf->AddPage();
			$this->_pdf->SetFont('Arial','B',12);
			$this->_pdf->SetTextColor(0, 0, 0);
			$this->_pdf->Cell(90,20, utf8_decode( 'em-conecta' ),0,0,'L');
			$this->_pdf->Ln(110);
			$this->_pdf->SetFont('Arial','B',15);
			$this->_pdf->Cell(90,20, utf8_decode( 'Mision' ),0,0,'J');
			$this->_pdf->Ln(20);
			$this->_pdf->SetFont('Arial','',11);
			$this->_pdf->MultiCell(193,7, utf8_decode( 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.' ),0,'J');


			$this->_pdf->SetFont('Arial','B',15);
			$this->_pdf->Cell(90,20, utf8_decode( 'Vision' ),0,0,'J');
			$this->_pdf->Ln(20);
			$this->_pdf->SetFont('Arial','',11);
			$this->_pdf->MultiCell(193,7, utf8_decode( 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.' ),0,'J');

			$this->_pdf->AddPage();
			$this->_pdf->SetFont('Arial','B',12);
			$this->_pdf->SetTextColor(0, 0, 0);
			$this->_pdf->Cell(90,20, utf8_decode( 'em-conecta' ),0,0,'L');
			$this->_pdf->Ln(140);
			$this->_pdf->SetFont('Arial','B',15);
			$this->_pdf->Cell(90,20, utf8_decode( 'Innovación' ),0,0,'J');
			$this->_pdf->Ln(20);
			$this->_pdf->SetFont('Arial','',11);
			$this->_pdf->MultiCell(193,7, utf8_decode( 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.' ),0,'J');


			$this->_pdf->AddPage();
			$this->_pdf->SetFont('Arial','B',12);
			$this->_pdf->SetTextColor(0, 0, 0);
			$this->_pdf->Cell(90,20, utf8_decode( 'em-conecta' ),0,0,'L');
			$this->_pdf->Ln(110);
			$this->_pdf->SetFont('Arial','B',15);
			$this->_pdf->Cell(90,20, utf8_decode( 'Integracion' ),0,0,'J');
			$this->_pdf->Ln(20);
			$this->_pdf->SetFont('Arial','',11);
			$this->_pdf->MultiCell(193,7, utf8_decode( 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.' ),0,'J');


			$this->_pdf->SetFont('Arial','B',15);
			$this->_pdf->Cell(90,20, utf8_decode( 'Integridad' ),0,0,'J');
			$this->_pdf->Ln(20);
			$this->_pdf->SetFont('Arial','',11);
			$this->_pdf->MultiCell(193,7, utf8_decode( 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.' ),0,'J');

			$this->_pdf->AddPage();
			$this->_pdf->SetFillColor(0, 77, 64);
			$this->_pdf->Rect(0, 0, 220 , 280, 'F');

			$this->_pdf->SetFont('Arial','',42);
			$this->_pdf->Ln(220);
			$this->_pdf->SetTextColor(255, 255, 255);
			$this->_pdf->MultiCell(193,10, utf8_decode( 'Servicios' ),0,'J');

			$this->_pdf->AddPage();
			$this->_pdf->SetFillColor(0, 77, 64);
			$this->_pdf->Rect(0, 0, 220 , 280, 'F');


			$this->_pdf->AddPage();
			$this->_pdf->SetFont('Arial','B',12);
			$this->_pdf->SetTextColor(0, 0, 0);
			$this->_pdf->Cell(90,20, utf8_decode( 'em-conecta' ),0,0,'L');
			$this->_pdf->Ln(10);
			$this->_pdf->SetFont('Arial','B',15);
			$this->_pdf->Cell(90,20, utf8_decode( 'Productividad' ),0,0,'J');
			$this->_pdf->Ln(20);
			$this->_pdf->SetFont('Arial','',11);
			$this->_pdf->MultiCell(93,7, utf8_decode( 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.' ),0,'J');


			$this->_pdf->SetFont('Arial','B',15);
			$this->_pdf->Cell(90,20, utf8_decode( 'Marketing' ),0,0,'J');
			$this->_pdf->Ln(20);
			$this->_pdf->SetFont('Arial','',11);			
			$this->_pdf->Cell(90,7, utf8_decode( '' ),0,0,'J');
			$this->_pdf->MultiCell(93,7, utf8_decode( 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.' ),0,'J');

			$this->_pdf->SetFont('Arial','B',15);
			$this->_pdf->Cell(90,20, utf8_decode( 'Datos' ),0,0,'J');
			$this->_pdf->Ln(20);
			$this->_pdf->SetFont('Arial','',11);
			$this->_pdf->MultiCell(93,7, utf8_decode( 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.' ),0,'J');

			$this->_pdf->Output();
		}
	}
?>