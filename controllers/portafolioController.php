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
			$this->_pdf = new FPDF('L','mm', array(431.9,279.4));
			$this->_pdf->SetMargins(15, 15 , 15);
			$this->_pdf->SetAutoPageBreak(true,15);
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
			$portafolio = $this->_portafolio->getPortafolio();
			$otros = $this->_portafolio->getOtros();
			$planes = $this->_portafolio->getPlanes();
			$this->_pdf->SetTextColor(255, 255, 255);
			$this->_pdf->AddPage();
			$this->_pdf->Image(BASE_URL.'public/img/formasdocument.jpg',0,0,550);
			$this->_pdf->SetFont('Arial','B',10);
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
			$this->_pdf->SetTextColor(0, 0, 0);
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
			$this->_pdf->SetFont('Arial','',11);
			$this->_pdf->Cell(150,7, utf8_decode( '310-539-9849 Servicio tecnico em-conecta' ),0,0,'L');

			$this->_pdf->AddPage();
			$this->_pdf->Image(BASE_URL.'public/img/formasdocument.jpg',0,0,550);
			$this->_pdf->SetTextColor(255, 255, 255);
			$this->_pdf->SetFont('Arial','B',10);
			$this->_pdf->Cell(280);
			$this->_pdf->Cell(150,7, utf8_decode( 'Portafolio de negocios '.COMPANY ),0,0,'L');
			$this->_pdf->Ln(160);
			$this->_pdf->Cell(265);
			$this->_pdf->SetFont('Arial','B',15);
			$this->_pdf->Cell(150,7, utf8_decode( 'Conectamos tu ideas con el mundo' ),0,0,'L');

			$this->_pdf->Ln(20);

			$this->_pdf->Cell(10);
			$this->_pdf->Cell(150,3, utf8_decode( 'Portafolio Productos y servicios' ),0,0,'L');
			$this->_pdf->Ln(5);
			$this->_pdf->Cell(10);
			$this->_pdf->Cell(150,7, utf8_decode( 'Portafolio generado por Em-conecta-sas' ),0,0,'L');

			$this->_pdf->Image(BASE_URL.'public/img/link2.png',315,135,25);

			$this->_pdf->AddPage();
			$this->_pdf->Image(BASE_URL.'public/img/formasdocument.jpg',0,0,550);
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

			$cadena_bienvenida = $portafolio['portafolio_bienvenida'];

			$num_cadena_bienvenida = strlen($cadena_bienvenida);

			$cadena_innovacion = $portafolio['portafolio_inovation'];

			$cadena_integracion = $portafolio['portafolio_integration'];

			$num_innovacion = strlen($cadena_innovacion);

			$num_integracion = strlen($cadena_integracion);

			$this->_pdf->Ln(0);
			$this->_pdf->Cell(10);
			$this->_pdf->SetFont('Arial','',13);
			$this->_pdf->MultiCell(80,7, utf8_decode( substr($cadena_bienvenida, 0, 450) ),0,'L');
			$this->_pdf->Ln(-105);
			$this->_pdf->Cell(100);
			$this->_pdf->MultiCell(80,7, utf8_decode( substr($cadena_bienvenida, 450, $num_cadena_bienvenida) ),0,'L');

			$this->_pdf->Ln(-42);
			$this->_pdf->Cell(230);
			$this->_pdf->MultiCell(70,7, utf8_decode( $cadena_innovacion ),0,'L');

			$this->_pdf->Ln(-100);
			$this->_pdf->Cell(310);
			$this->_pdf->MultiCell(70,7, utf8_decode( $cadena_integracion ),0,'L');

			
			$cadena_integridad = $portafolio['portafolio_integrrity'];

			$this->_pdf->AddPage();
			$this->_pdf->Image(BASE_URL.'public/img/formasdocument.jpg',0,0,550);
			$this->_pdf->SetFillColor(21, 101, 192);
			$this->_pdf->Rect(0, 0, 450 , 280, 'F');
			$this->_pdf->SetTextColor(255, 255, 255);
			$this->_pdf->SetFont('Arial','B',9);
			$this->_pdf->Cell(280);
			$this->_pdf->Cell(150,7, utf8_decode( 'Portafolio de negocios '.COMPANY ),0,0,'L');
			$this->_pdf->Image(BASE_URL.'public/img/link2.png',10,10,15);
			$this->_pdf->SetFont('Arial','B',35);
			$this->_pdf->Ln(90);
			$this->_pdf->MultiCell(400,12, utf8_decode( 'Integridad' ),0,'C');
			$this->_pdf->SetFont('Arial','',11);
			$this->_pdf->Ln(10);
			$this->_pdf->Cell(60);
			$this->_pdf->MultiCell(300,10, utf8_decode( $cadena_integridad ),0,'C');

			$this->_pdf->AddPage();
			$this->_pdf->Image(BASE_URL.'public/img/formasdocument.jpg',0,0,550);
			$this->_pdf->SetTextColor(255, 255, 255);
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

			$cadena = $portafolio['portafolio_historia_cultura'];

			$num_cadena = strlen($cadena);

			$cadena_mision = $otros['otros_mision'];

			$cadena_vision = $otros['otros_vision'];

			$num_mision = strlen($cadena_mision);

			$num_vision = strlen($cadena_vision);

			$this->_pdf->Ln(10);
			$this->_pdf->Cell(10);
			$this->_pdf->SetFont('Arial','',13);
			$this->_pdf->MultiCell(80,7, utf8_decode( substr($cadena, 0, 450) ),0,'L');
			$this->_pdf->Ln(-98);
			$this->_pdf->Cell(100);
			$this->_pdf->MultiCell(80,7, utf8_decode( substr($cadena, 450, $num_cadena) ),0,'L');

			$this->_pdf->Ln(-80);
			$this->_pdf->Cell(230);
			$this->_pdf->MultiCell(70,7, utf8_decode( $cadena_mision ),0,'L');

			$this->_pdf->Ln(-35);
			$this->_pdf->Cell(310);
			$this->_pdf->MultiCell(70,7, utf8_decode( $cadena_vision ),0,'L');


			$this->_pdf->AddPage();
			$this->_pdf->Image(BASE_URL.'public/img/formasdocument.jpg',0,0,550);
			$this->_pdf->SetFillColor(21, 101, 192);
			$this->_pdf->Rect(0, 0, 450 , 280, 'F');
			$this->_pdf->SetTextColor(255, 255, 255);
			$this->_pdf->SetFont('Arial','B',10);
			$this->_pdf->Cell(280);
			$this->_pdf->Cell(150,7, utf8_decode( 'Portafolio de negocios '.COMPANY ),0,0,'L');
			$this->_pdf->Image(BASE_URL.'public/img/link2.png',10,10,15);
			$this->_pdf->Ln(100);
			$this->_pdf->SetFont('Arial','B',15);

			$cadena__pensamos = $portafolio['portafolio_nuestro_cerebro'];

			$this->_pdf->MultiCell(400,10, utf8_decode( $cadena__pensamos ),0,'C');

			$this->_pdf->AddPage();
			$this->_pdf->Image(BASE_URL.'public/img/formasdocument.jpg',0,0,550);
			$this->_pdf->Image(BASE_URL.'public/img/ipad-tablet-technology-touch.jpg',0,0,450);
			$this->_pdf->SetTextColor(255, 255, 255);
			$this->_pdf->SetFont('Arial','B',10);
			$this->_pdf->Cell(280);
			$this->_pdf->Cell(150,7, utf8_decode( 'Portafolio de negocios '.COMPANY ),0,0,'L');
			$this->_pdf->Image(BASE_URL.'public/img/link2.png',10,10,15);
			$this->_pdf->Ln(240);
			$this->_pdf->SetFont('Arial','B',35);
			$this->_pdf->Cell(150,7, utf8_decode( 'Servicios' ),0,0,'L');

			

			$this->_pdf->AddPage();
			$this->_pdf->Image(BASE_URL.'public/img/formasdocument.jpg',0,0,550);
			$this->_pdf->SetTextColor(255, 255, 255);
			$this->_pdf->SetFont('Arial','B',10);
			$this->_pdf->Cell(280);
			$this->_pdf->Cell(150,7, utf8_decode( 'Portafolio de negocios '.COMPANY ),0,0,'L');
			$this->_pdf->Image(BASE_URL.'public/img/link2.png',10,10,15);

			$this->_pdf->Ln(50);


			$this->_pdf->SetFont('Arial','B',32);
			$this->_pdf->Cell(400,10, utf8_decode( 'Marketing' ),0,0,'C');
			$this->_pdf->Cell(80);
				
			$this->_pdf->Ln(90);


			$cadena_servicio =  $otros['otros_marketing'];


			$this->_pdf->Image(BASE_URL.'public/img/pexels-photo_pdf.jpg',230,120,150);

			$this->_pdf->SetFont('Arial','',15);	
			$this->_pdf->MultiCell(200,10, utf8_decode( $cadena_servicio ),0,'L');

			$this->_pdf->AddPage();
			$this->_pdf->Image(BASE_URL.'public/img/formasdocument.jpg',0,0,550);
			$this->_pdf->SetTextColor(255, 255, 255);
			$this->_pdf->SetFont('Arial','B',10);
			$this->_pdf->Cell(280);
			$this->_pdf->Cell(150,7, utf8_decode( 'Portafolio de negocios '.COMPANY ),0,0,'L');
			$this->_pdf->Image(BASE_URL.'public/img/link2.png',10,10,15);

			$this->_pdf->Ln(50);


			$this->_pdf->SetFont('Arial','B',32);
			$this->_pdf->Cell(400,10, utf8_decode( 'Produtividad' ),0,0,'C');
			$this->_pdf->Cell(80);
				
			$this->_pdf->Ln(90);


			$cadena_servicio_prod =  $otros['otros_productividad'];


			$this->_pdf->Image(BASE_URL.'public/img/hands-people-woman-working.jpg',230,120,150);

			$this->_pdf->SetFont('Arial','',15);	
			$this->_pdf->MultiCell(200,10, utf8_decode( $cadena_servicio_prod ),0,'L');

			$this->_pdf->AddPage();
			$this->_pdf->Image(BASE_URL.'public/img/formasdocument.jpg',0,0,550);
			$this->_pdf->SetTextColor(255, 255, 255);
			$this->_pdf->SetFont('Arial','B',10);
			$this->_pdf->Cell(280);
			$this->_pdf->Cell(150,7, utf8_decode( 'Portafolio de negocios '.COMPANY ),0,0,'L');
			$this->_pdf->Image(BASE_URL.'public/img/link2.png',10,10,15);

			$this->_pdf->Ln(50);


			$this->_pdf->SetFont('Arial','B',32);
			$this->_pdf->Cell(400,10, utf8_decode( 'Datos' ),0,0,'C');
			$this->_pdf->Cell(80);
				
			$this->_pdf->Ln(90);


			$cadena_servicio_datos =  $otros['otros_datos'];


			$this->_pdf->Image(BASE_URL.'public/img/pexels-photo.jpg',230,120,150);

			$this->_pdf->SetFont('Arial','',15);	
			$this->_pdf->MultiCell(200,10, utf8_decode( $cadena_servicio_datos ),0,'L');

			$this->_pdf->AddPage();
			$this->_pdf->Image(BASE_URL.'public/img/formasdocument.jpg',0,0,550);
			$this->_pdf->SetTextColor(255, 255, 255);
			$this->_pdf->SetFont('Arial','B',10);
			$this->_pdf->Cell(280);
			$this->_pdf->Cell(150,7, utf8_decode( 'Portafolio de negocios '.COMPANY ),0,0,'L');
			$this->_pdf->Image(BASE_URL.'public/img/link2.png',10,10,15);

			$this->_pdf->Ln(80);


			$this->_pdf->SetFont('Arial','B',35);
			$this->_pdf->MultiCell(70,12, utf8_decode( 'Como trabajamos' ),0,'L');


			$cadena_como_trabajamos = $portafolio['portafolio_como_trabajamos'];

			$num_cadena_como_trabajamos = strlen($cadena_como_trabajamos);

			$this->_pdf->Ln(10);
			$this->_pdf->Cell(10);
			$this->_pdf->SetFont('Arial','',13);
			$this->_pdf->MultiCell(80,7, utf8_decode( substr($cadena_como_trabajamos, 0, 450) ),0,'L');
			$this->_pdf->Ln(-120);
			$this->_pdf->Cell(100);
			$this->_pdf->MultiCell(80,7, utf8_decode( substr($cadena_como_trabajamos, 450, $num_cadena_como_trabajamos) ),0,'L');


			$this->_pdf->Image(BASE_URL.'public/img/people-coffee-tea-meeting.jpg',240,130,150);

			$this->_pdf->AddPage();
			$this->_pdf->Image(BASE_URL.'public/img/formasdocument.jpg',0,0,550);
			$this->_pdf->SetFillColor(21, 101, 192);
			$this->_pdf->Rect(0, 0, 450 , 280, 'F');
			$this->_pdf->SetTextColor(255, 255, 255);
			$this->_pdf->SetFont('Arial','B',10);
			$this->_pdf->Cell(280);
			$this->_pdf->Cell(150,7, utf8_decode( 'Portafolio de negocios '.COMPANY ),0,0,'L');
			$this->_pdf->Image(BASE_URL.'public/img/link2.png',10,10,15);
			$this->_pdf->Ln(100);
			$this->_pdf->SetFont('Arial','B',15);

			$cadena_branding = $portafolio['portafolio_como_trabajamos'];

			$this->_pdf->MultiCell(400,10, utf8_decode( $cadena_branding ),0,'C');

			$this->_pdf->AddPage();
			$this->_pdf->Image(BASE_URL.'public/img/formasdocument.jpg',0,0,550);
			$this->_pdf->Image(BASE_URL.'public/img/pexels-photo-57750.jpeg',0,0,450);
			$this->_pdf->SetTextColor(255, 255, 255);
			$this->_pdf->SetFont('Arial','B',10);
			$this->_pdf->Cell(280);
			$this->_pdf->Cell(150,7, utf8_decode( 'Portafolio de negocios '.COMPANY ),0,0,'L');
			$this->_pdf->Image(BASE_URL.'public/img/link2.png',10,10,15);
			$this->_pdf->Ln(240);
			$this->_pdf->SetFont('Arial','B',35);
			$this->_pdf->Cell(150,7, utf8_decode( 'Planes' ),0,0,'L');


			$array_img = array('railway-40066.jpeg','pexels-photo-65775.jpeg','pexels-photo-27865.jpg');

			for ($i=0; $i < count($planes) ; $i++) { 

				$this->_pdf->AddPage();
				$this->_pdf->Image(BASE_URL.'public/img/formasdocument.jpg',0,0,550);
				$this->_pdf->SetTextColor(255, 255, 255);
				$this->_pdf->SetFont('Arial','B',10);
				$this->_pdf->Cell(280);
				$this->_pdf->Cell(150,7, utf8_decode( 'Portafolio de negocios '.COMPANY ),0,0,'L');
				$this->_pdf->Image(BASE_URL.'public/img/link2.png',10,10,15);

				$this->_pdf->Ln(50);


				$this->_pdf->SetFont('Arial','B',32);
				$this->_pdf->Cell(400,10, utf8_decode( $planes[$i]['planes_titulo'] ),0,0,'C');
				$this->_pdf->Cell(80);
					
				$this->_pdf->Ln(90);


				$cadena_servicio =  $planes[$i]['contenido'];


				$this->_pdf->Image(BASE_URL.'public/img/'.$array_img[$i],50,120,150);

				$this->_pdf->SetFont('Arial','',15);
				$this->_pdf->Cell(200);	
				$this->_pdf->MultiCell(200,10, utf8_decode( $cadena_servicio ),0,'L');

			}

			$this->_pdf->Output('Portafolio '. date('Y').'.pdf','I');

		}
	}
?>