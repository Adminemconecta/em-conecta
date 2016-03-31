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
			$this->_pdf->Ln(160);
			$this->_pdf->Cell(265);
			$this->_pdf->SetFont('Arial','B',15);
			$this->_pdf->Cell(150,7, utf8_decode( 'Conectamos tu ideas con el mundo' ),0,0,'L');

			$this->_pdf->Ln(20);

			$this->_pdf->Cell(10);
			$this->_pdf->Cell(150,7, utf8_decode( 'Portafolio Productos y servicios' ),0,0,'L');
			$this->_pdf->Ln(5);
			$this->_pdf->Cell(10);
			$this->_pdf->Cell(150,7, utf8_decode( 'Portafolio generado por Em-conecta-sas' ),0,0,'L');

			$this->_pdf->Image(BASE_URL.'public/img/link2.png',315,135,25);

			$this->_pdf->AddPage();
			$this->_pdf->Cell(280);
			$this->_pdf->Cell(150,7, utf8_decode( 'Portafolio de negocios '.COMPANY ),0,0,'L');
			$this->_pdf->Image(BASE_URL.'public/img/link2.png',10,10,15);
			$this->_pdf->Ln(90);
			$this->_pdf->Cell(10);
			$this->_pdf->SetFont('Arial','B',35);
			$this->_pdf->MultiCell(70,12, utf8_decode( 'Bienvenido' ),0,'L');
			$this->_pdf->Ln(-13);
			$this->_pdf->Cell(230);
			$this->_pdf->MultiCell(70,12, utf8_decode( 'Innovacion' ),0,'L');
			$this->_pdf->Ln(-13);
			$this->_pdf->Cell(310);
			$this->_pdf->MultiCell(70,12, utf8_decode( 'Integracion' ),0,'L');
			$this->_pdf->Ln(10);

			$cadena_bienvenida = 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.';

			$num_cadena_bienvenida = strlen($cadena_bienvenida);

			$cadena_innovacion = 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor ';

			$cadena_integracion = 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor ';

			$num_innovacion = strlen($cadena_innovacion);

			$num_integracion = strlen($cadena_integracion);

			$this->_pdf->Ln(0);
			$this->_pdf->Cell(10);
			$this->_pdf->SetFont('Arial','',10);
			$this->_pdf->MultiCell(80,10, utf8_decode( substr($cadena_bienvenida, 0, 550) ),0,'L');
			$this->_pdf->Ln(-120);
			$this->_pdf->Cell(100);
			$this->_pdf->MultiCell(80,10, utf8_decode( substr($cadena_bienvenida, 550, $num_cadena_bienvenida) ),0,'L');

			$this->_pdf->Ln(-52);
			$this->_pdf->Cell(230);
			$this->_pdf->MultiCell(70,10, utf8_decode( $cadena_innovacion ),0,'L');

			$this->_pdf->Ln(-51);
			$this->_pdf->Cell(310);
			$this->_pdf->MultiCell(70,10, utf8_decode( $cadena_integracion ),0,'L');

			$cadena_integridad = 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor ';

			$this->_pdf->SetFont('Arial','B',35);
			$this->_pdf->Ln(7);
			$this->_pdf->Cell(230);
			$this->_pdf->MultiCell(70,12, utf8_decode( 'Integridad' ),0,'L');

			$this->_pdf->SetFont('Arial','',10);
			$this->_pdf->Ln(5);
			$this->_pdf->Cell(230);
			$this->_pdf->MultiCell(70,10, utf8_decode( $cadena_integridad ),0,'L');

			$this->_pdf->AddPage();
			$this->_pdf->Cell(280);
			$this->_pdf->Cell(150,7, utf8_decode( 'Portafolio de negocios '.COMPANY ),0,0,'L');
			$this->_pdf->Image(BASE_URL.'public/img/link2.png',10,10,15);
			$this->_pdf->Ln(90);
			$this->_pdf->Cell(10);
			$this->_pdf->SetFont('Arial','B',35);
			$this->_pdf->MultiCell(60,12, utf8_decode( 'Historia y Cultura' ),0,'L');
			$this->_pdf->Ln(-23);
			$this->_pdf->Cell(230);
			$this->_pdf->MultiCell(60,12, utf8_decode( 'Vision' ),0,'L');
			$this->_pdf->Ln(-13);
			$this->_pdf->Cell(310);
			$this->_pdf->MultiCell(60,12, utf8_decode( 'Mision' ),0,'L');
			$this->_pdf->Ln(10);

			$cadena = 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.';

			$num_cadena = strlen($cadena);

			$cadena_mision = 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen.';

			$cadena_vision = 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen.';

			$num_mision = strlen($cadena_mision);

			$num_vision = strlen($cadena_vision);

			$this->_pdf->Ln(10);
			$this->_pdf->Cell(10);
			$this->_pdf->SetFont('Arial','',10);
			$this->_pdf->MultiCell(80,10, utf8_decode( substr($cadena, 0, 550) ),0,'L');
			$this->_pdf->Ln(-120);
			$this->_pdf->Cell(100);
			$this->_pdf->MultiCell(80,10, utf8_decode( substr($cadena, 550, $num_cadena) ),0,'L');

			$this->_pdf->Ln(-52);
			$this->_pdf->Cell(230);
			$this->_pdf->MultiCell(70,10, utf8_decode( $cadena_mision ),0,'L');

			$this->_pdf->Ln(-91);
			$this->_pdf->Cell(310);
			$this->_pdf->MultiCell(70,10, utf8_decode( $cadena_vision ),0,'L');

			$this->_pdf->AddPage();
			$this->_pdf->Image(BASE_URL.'public/img/ipad-tablet-technology-touch.jpg',0,0,450);
			$this->_pdf->SetTextColor(255, 255, 255);
			$this->_pdf->SetFont('Arial','B',9);
			$this->_pdf->Cell(280);
			$this->_pdf->Cell(150,7, utf8_decode( 'Portafolio de negocios '.COMPANY ),0,0,'L');
			$this->_pdf->Image(BASE_URL.'public/img/link2.png',10,10,15);
			$this->_pdf->Ln(240);
			$this->_pdf->SetFont('Arial','B',35);
			$this->_pdf->Cell(150,7, utf8_decode( 'Servicios' ),0,0,'L');

			for ($i=0; $i < 3 ; $i++) { 

				$this->_pdf->AddPage();
				$this->_pdf->SetTextColor(0, 0, 0);
				$this->_pdf->SetFont('Arial','B',9);
				$this->_pdf->Cell(280);
				$this->_pdf->Cell(150,7, utf8_decode( 'Portafolio de negocios '.COMPANY ),0,0,'L');
				$this->_pdf->Image(BASE_URL.'public/img/link2.png',10,10,15);

				$this->_pdf->Ln(50);


				$this->_pdf->SetFont('Arial','B',32);
				$this->_pdf->Cell(400,10, utf8_decode( 'marketing' ),0,0,'C');
				$this->_pdf->Cell(80);
					
				$this->_pdf->Ln(160);


				$cadena_servicio =  'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó.';


				$this->_pdf->Image(BASE_URL.'public/img/ipad-tablet-technology-touch.jpg',150,100,150);

				$this->_pdf->SetFont('Arial','',15);	
				$this->_pdf->MultiCell(400,10, utf8_decode( $cadena_servicio ),0,'L');

			}

			$this->_pdf->AddPage();
			$this->_pdf->SetTextColor(0, 0, 0);
			$this->_pdf->SetFont('Arial','B',9);
			$this->_pdf->Cell(280);
			$this->_pdf->Cell(150,7, utf8_decode( 'Portafolio de negocios '.COMPANY ),0,0,'L');
			$this->_pdf->Image(BASE_URL.'public/img/link2.png',10,10,15);

			$this->_pdf->Ln(80);


			$this->_pdf->SetFont('Arial','B',35);
			$this->_pdf->MultiCell(70,12, utf8_decode( 'Como trabajamos' ),0,'L');


			$cadena_como_trabajamos = 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.';

			$num_cadena_como_trabajamos = strlen($cadena_como_trabajamos);

			$this->_pdf->Ln(10);
			$this->_pdf->Cell(10);
			$this->_pdf->SetFont('Arial','',10);
			$this->_pdf->MultiCell(80,10, utf8_decode( substr($cadena_como_trabajamos, 0, 550) ),0,'L');
			$this->_pdf->Ln(-120);
			$this->_pdf->Cell(100);
			$this->_pdf->MultiCell(80,10, utf8_decode( substr($cadena_como_trabajamos, 550, $num_cadena_como_trabajamos) ),0,'L');


			$this->_pdf->Image(BASE_URL.'public/img/ipad-tablet-technology-touch.jpg',240,130,150);

			$this->_pdf->AddPage();
			$this->_pdf->SetFillColor(0, 77, 64);
			$this->_pdf->Rect(0, 0, 450 , 280, 'F');
			$this->_pdf->SetTextColor(255, 255, 255);
			$this->_pdf->SetFont('Arial','B',9);
			$this->_pdf->Cell(280);
			$this->_pdf->Cell(150,7, utf8_decode( 'Portafolio de negocios '.COMPANY ),0,0,'L');
			$this->_pdf->Image(BASE_URL.'public/img/link2.png',10,10,15);
			$this->_pdf->Ln(100);
			$this->_pdf->SetFont('Arial','B',28);

			$cadena_branding = 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que ';

			$this->_pdf->MultiCell(400,10, utf8_decode( $cadena_branding ),0,'C');

			$this->_pdf->AddPage();
			$this->_pdf->Image(BASE_URL.'public/img/pexels-photo-57750.jpeg',0,0,450);
			$this->_pdf->SetTextColor(255, 255, 255);
			$this->_pdf->SetFont('Arial','B',9);
			$this->_pdf->Cell(280);
			$this->_pdf->Cell(150,7, utf8_decode( 'Portafolio de negocios '.COMPANY ),0,0,'L');
			$this->_pdf->Image(BASE_URL.'public/img/link2.png',10,10,15);
			$this->_pdf->Ln(240);
			$this->_pdf->SetFont('Arial','B',35);
			$this->_pdf->Cell(150,7, utf8_decode( 'Productos' ),0,0,'L');

			for ($i=0; $i < 3 ; $i++) { 

				$this->_pdf->AddPage();
				$this->_pdf->SetTextColor(0, 0, 0);
				$this->_pdf->SetFont('Arial','B',9);
				$this->_pdf->Cell(280);
				$this->_pdf->Cell(150,7, utf8_decode( 'Portafolio de negocios '.COMPANY ),0,0,'L');
				$this->_pdf->Image(BASE_URL.'public/img/link2.png',10,10,15);

				$this->_pdf->Ln(50);


				$this->_pdf->SetFont('Arial','B',32);
				$this->_pdf->Cell(400,10, utf8_decode( 'Producto No-' ),0,0,'C');
				$this->_pdf->Cell(80);
					
				$this->_pdf->Ln(160);


				$cadena_servicio =  'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó.';


				$this->_pdf->Image(BASE_URL.'public/img/ipad-tablet-technology-touch.jpg',150,100,150);

				$this->_pdf->SetFont('Arial','',15);	
				$this->_pdf->MultiCell(400,10, utf8_decode( $cadena_servicio ),0,'L');

			}

			$this->_pdf->Output();
		}
	}
?>