CREATE DATABASE  IF NOT EXISTS `em_conecta` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `em_conecta`;
-- MySQL dump 10.13  Distrib 5.7.9, for Win64 (x86_64)
--
-- Host: 160.153.162.8    Database: em_conecta
-- ------------------------------------------------------
-- Server version	5.5.45-cll-lve

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin_em_connecta`
--

DROP TABLE IF EXISTS `admin_em_connecta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_em_connecta` (
  `idadmin` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `cedula` varchar(20) NOT NULL,
  `cod_act` varchar(100) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `activate` tinyint(1) NOT NULL,
  `level` varchar(1) NOT NULL,
  PRIMARY KEY (`idadmin`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_em_connecta`
--

LOCK TABLES `admin_em_connecta` WRITE;
/*!40000 ALTER TABLE `admin_em_connecta` DISABLE KEYS */;
INSERT INTO `admin_em_connecta` VALUES (1,'Christian','Portilla','1085250898','1','Christopher','Clshiorzf',1,'3'),(2,'Alverto','Sandoval Vargas','9777740','2','Alverto','Asvlaavnr',1,'3'),(3,'Mario Alverto','Sandoval Leal','18398856','3','Mario','Maslalaerna',1,'3'),(4,'Esteban Andres','Sandoval Leal','1097389656','4','Esteban','Easltdna',1,'3'),(5,'Jhon Fredy','Cardenas','18397566','5','Jhon','Jfchraoer',1,'3'),(6,'Maria Eugenia','Rodriguez','33816435','6','Maria','Meraudrgd',1,'3');
/*!40000 ALTER TABLE `admin_em_connecta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `beneficios`
--

DROP TABLE IF EXISTS `beneficios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `beneficios` (
  `idbeneficios` int(11) NOT NULL AUTO_INCREMENT,
  `beneficios_lista_beneficios` text NOT NULL,
  `planes_idplanes` int(11) NOT NULL,
  PRIMARY KEY (`idbeneficios`),
  KEY `fk_beneficios_planes1_idx` (`planes_idplanes`),
  CONSTRAINT `fk_beneficios_planes1` FOREIGN KEY (`planes_idplanes`) REFERENCES `planes` (`idplanes`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `beneficios`
--

LOCK TABLES `beneficios` WRITE;
/*!40000 ALTER TABLE `beneficios` DISABLE KEYS */;
/*!40000 ALTER TABLE `beneficios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `departamento`
--

DROP TABLE IF EXISTS `departamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `departamento` (
  `iddepartamento` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  PRIMARY KEY (`iddepartamento`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departamento`
--

LOCK TABLES `departamento` WRITE;
/*!40000 ALTER TABLE `departamento` DISABLE KEYS */;
INSERT INTO `departamento` VALUES (1,'Amazonas'),(2,'Antioquia'),(3,'Arauca'),(4,'Atlántico'),(5,'Bolívar'),(6,'Boyacá'),(7,'Caldas'),(8,'Caquetá'),(9,'Casanare'),(10,'Cauca'),(11,'Cesar'),(12,'Chocó'),(13,'Córdoba'),(14,'Cundinamarca'),(15,'Guainía'),(16,'Guaviare'),(17,'Huila'),(18,'La guajira'),(19,'Magdalena'),(20,'Meta'),(21,'Nariño'),(22,'Norte Santander'),(23,'Putumayo'),(24,'Quindío'),(25,'Risaralda'),(26,'San Andres y Providencia'),(27,'Santander'),(28,'Sucre'),(29,'Tolima'),(30,'Valle del Cauca'),(31,'Vaupés'),(32,'Vichada');
/*!40000 ALTER TABLE `departamento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empresa`
--

DROP TABLE IF EXISTS `empresa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `empresa` (
  `idempresa` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) NOT NULL,
  `oficina_central` varchar(200) NOT NULL,
  `fundacion` varchar(200) NOT NULL,
  `presidente` varchar(200) NOT NULL,
  `numero_de_empleados` varchar(200) NOT NULL,
  `principales_operaciones` varchar(500) NOT NULL,
  `plantas_industriales` varchar(200) NOT NULL,
  `oficinas_de_contacto` varchar(200) NOT NULL,
  `tipo_sociedad` varchar(200) NOT NULL,
  `rut` varchar(20) NOT NULL,
  `domicilio_legal` varchar(200) NOT NULL,
  `domicilio_comercial` varchar(200) NOT NULL,
  `telefonos` varchar(200) NOT NULL,
  `fax` varchar(200) NOT NULL,
  `e_mail` varchar(200) NOT NULL,
  `municipio_idmunicipio` int(11) NOT NULL,
  `tipo_empresa_idtipo_empresa` int(11) NOT NULL,
  PRIMARY KEY (`idempresa`),
  UNIQUE KEY `rut_UNIQUE` (`rut`),
  KEY `fk_empresa_municipio1_idx` (`municipio_idmunicipio`),
  KEY `fk_empresa_tipo_empresa1_idx` (`tipo_empresa_idtipo_empresa`),
  CONSTRAINT `fk_empresa_municipio1` FOREIGN KEY (`municipio_idmunicipio`) REFERENCES `municipio` (`idmunicipio`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_empresa_tipo_empresa1` FOREIGN KEY (`tipo_empresa_idtipo_empresa`) REFERENCES `tipo_empresa` (`idtipo_empresa`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empresa`
--

LOCK TABLES `empresa` WRITE;
/*!40000 ALTER TABLE `empresa` DISABLE KEYS */;
/*!40000 ALTER TABLE `empresa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empresa_peticion`
--

DROP TABLE IF EXISTS `empresa_peticion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `empresa_peticion` (
  `idempresa` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) NOT NULL,
  `oficina_central` varchar(200) NOT NULL,
  `fundacion` varchar(200) NOT NULL,
  `presidente` varchar(200) NOT NULL,
  `numero_de_empleados` varchar(200) NOT NULL,
  `principales_operaciones` varchar(500) NOT NULL,
  `plantas_industriales` varchar(200) NOT NULL,
  `oficinas_de_contacto` varchar(200) NOT NULL,
  `tipo_sociedad` varchar(200) NOT NULL,
  `rut` varchar(20) NOT NULL,
  `domicilio_legal` varchar(200) NOT NULL,
  `domicilio_comercial` varchar(200) NOT NULL,
  `telefonos` varchar(200) NOT NULL,
  `fax` varchar(200) NOT NULL,
  `e_mail` varchar(200) NOT NULL,
  `municipio_nombre` varchar(200) NOT NULL,
  `tipo_empresa_idtipo_empresa` varchar(200) NOT NULL,
  `empresa_peticion_tipo_producto` text NOT NULL,
  `empresa_peticion_departamento` varchar(200) NOT NULL,
  `empresa_peticion_user` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idempresa`),
  UNIQUE KEY `rut_UNIQUE` (`rut`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empresa_peticion`
--

LOCK TABLES `empresa_peticion` WRITE;
/*!40000 ALTER TABLE `empresa_peticion` DISABLE KEYS */;
INSERT INTO `empresa_peticion` VALUES (1,'pulpas madre tierra','galeria de calarca puesto 287','no','maria eugenia rodriguez','1','elaboracion de pulpas funcionales nutraceuticas','galeria de calarca puesto 287','galeria de calarca puesto 287','sas','900947135-0','galeria de calarca puesto 287','galeria de calarca puesto 287','315-660-20-49, 317-615-9425, 310-621-2350','no','comercializadorageasas@gmail.com','126','comercializadora','pulpas quema grasa, pulpas antioxidante, pulpas extreñimiento','Quindío','Maria Eugenia Rodriguez'),(2,'COMERCIALIZADORA SEICO','INTERIOR GALERIA CALARCA LOCAL 287','NO','ALBERTO SANDOVAL VARGAS','1','Comercialización y consultorías empresariales','INTERIOR GALERIA CALARCA LOCAL 287','INTERIOR GALERIA CALARCA LOCAL 287','S.A.S','9777740-1','INTERIOR GALERIA CALARCA LOCAL 287','INTERIOR GALERIA CALARCA LOCAL 287','316-368-2979','no','asvquindio@hotmail.com','126','comercializadora','productos alimenticios  y asesorías en la construcción de planes de negocios y planes de ventas','Quindío','user');
/*!40000 ALTER TABLE `empresa_peticion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mapa`
--

DROP TABLE IF EXISTS `mapa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mapa` (
  `idmapa` int(11) NOT NULL AUTO_INCREMENT,
  `mapa_lat` varchar(300) NOT NULL,
  `mapa_long` varchar(300) NOT NULL,
  `empresa_idempresa` int(11) NOT NULL,
  PRIMARY KEY (`idmapa`),
  KEY `fk_mapa_empresa1_idx` (`empresa_idempresa`),
  CONSTRAINT `fk_mapa_empresa1` FOREIGN KEY (`empresa_idempresa`) REFERENCES `empresa` (`idempresa`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mapa`
--

LOCK TABLES `mapa` WRITE;
/*!40000 ALTER TABLE `mapa` DISABLE KEYS */;
/*!40000 ALTER TABLE `mapa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mensaje`
--

DROP TABLE IF EXISTS `mensaje`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mensaje` (
  `idmensaje` int(11) NOT NULL AUTO_INCREMENT,
  `mensaje_nombre` varchar(100) NOT NULL,
  `mensaje_apellido` varchar(100) NOT NULL,
  `mensaje_asunto` varchar(300) NOT NULL,
  `mensaje_email` varchar(200) NOT NULL,
  `mensaje_mensaje` text NOT NULL,
  PRIMARY KEY (`idmensaje`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mensaje`
--

LOCK TABLES `mensaje` WRITE;
/*!40000 ALTER TABLE `mensaje` DISABLE KEYS */;
/*!40000 ALTER TABLE `mensaje` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `municipio`
--

DROP TABLE IF EXISTS `municipio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `municipio` (
  `idmunicipio` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `departamento_iddepartamento` int(11) NOT NULL,
  PRIMARY KEY (`idmunicipio`),
  KEY `fk_municipio_departamento_idx` (`departamento_iddepartamento`),
  CONSTRAINT `fk_municipio_departamento` FOREIGN KEY (`departamento_iddepartamento`) REFERENCES `departamento` (`iddepartamento`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=164 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `municipio`
--

LOCK TABLES `municipio` WRITE;
/*!40000 ALTER TABLE `municipio` DISABLE KEYS */;
INSERT INTO `municipio` VALUES (1,'Leticia',1),(2,'Puerto Nariño',1),(3,'Barbosa',2),(4,'Bello',2),(5,'Caldas',2),(6,'Caucasia',2),(7,'Copacabana',2),(8,'El Retiro',2),(9,'Envigado',2),(10,'Girardota',2),(11,'Guarne',2),(12,'Itaquí',2),(13,'La Ceja',2),(14,'La Estrella',2),(15,'Medellín',2),(16,'Rionegro',2),(17,'Sabaneta',2),(18,'Santa Fé de Antioquia',2),(19,'Arauca',3),(20,'Barranquilla',4),(21,'Candelaria',4),(22,'Luruaco',4),(23,'Ponedera',4),(24,'Sabanalarga',4),(25,'Soledad',4),(26,'Cartagena',5),(27,'El Carmen de Bolívar',5),(28,'Magangué',5),(29,'Mompós',5),(30,'Simití',5),(31,'Turbaco',5),(32,'Chiquinquirá',6),(33,'Duitama',6),(34,'Moniquirá',6),(35,'Paipa',6),(36,'Puerto Boyacá',6),(37,'Sogamoso',6),(38,'Tunja',6),(39,'Villa de Leyva',6),(40,'Anserma',7),(41,'Chinchiná',7),(42,'La Dorada',7),(43,'Manizales',7),(44,'Neira',7),(45,'Salamina',7),(46,'Florencia',8),(47,'Yopal',9),(48,'Corinto',10),(49,'Patía',10),(50,'Piendamó',10),(51,'Popayán',10),(52,'Puerto Tejada',10),(53,'Santander de Quilichao',10),(54,'Aguachica',11),(55,'La Jagua de Iberico',11),(56,'Valledupar',11),(57,'Quibdó',12),(58,'Cereté',13),(59,'Lorica',13),(60,'Montería',13),(61,'Planeta Rica',13),(62,'Sahagún',13),(63,'Anapoima',14),(64,'Bogotá',14),(65,'Bojacá',14),(66,'Cajicá',14),(67,'Chía',14),(68,'Cota',14),(69,'El Colegio',14),(70,'Facatativa',14),(71,'Funza',14),(72,'Fusagasugá',14),(73,'Gachancipá',14),(74,'Girardot',11),(75,'La Calera',14),(76,'La Mesa',14),(77,'La Vega',14),(78,'Madrid',14),(79,'Mosquera',14),(80,'Soacha',14),(81,'Sopó',14),(82,'Tenjo',14),(83,'Tocaima',14),(84,'Tocancipá',14),(85,'Ubate',14),(86,'Villeta',14),(87,'Zipaquirá',14),(88,'Inírida',15),(89,'San José del Guaviare',16),(90,'Campoalegre',17),(91,'Garzón',17),(92,'La Plata',17),(93,'Neiva',17),(94,'Pitalito',17),(95,'Riohacha',18),(96,'San Juan del Cesar',18),(97,'Ciénaga',19),(98,'El Banco',19),(99,'Fundación',19),(100,'Plato',19),(101,'Santa Marta',19),(102,'Acacías',20),(103,'Granada',20),(104,'Puerto López',20),(105,'San Martín',20),(106,'Villavicencio',20),(107,'Ipiales',21),(108,'Pasto',21),(109,'Tumaco',21),(110,'Túquerres',21),(111,'Barbosa',22),(112,'Barichara ',22),(113,'Barrancabermeja',22),(114,'Bucaramanga',22),(115,'Floridablanca',22),(116,'Lebrija',22),(117,'Girón',22),(118,'Los Santos',22),(119,'Piedecuesta',22),(120,'Ruitoque',22),(121,'San Gil',22),(122,'Socorro',22),(123,'Vélez',22),(124,'Mocoa',23),(125,'Armenia',24),(126,'Calarcá',25),(127,'Circasia',25),(128,'Montenegro',25),(129,'Quimbaya',25),(130,'Salento',25),(131,'Dosquebradas',25),(132,'La Virginia',26),(133,'Marsella',26),(134,'Pereira',26),(135,'Santa Rosa de CabalSanta Rosa de Cabal',26),(136,'San Andres y Providencia',26),(137,'Corozal',27),(138,'San Marcos',27),(139,'Sincelejo',27),(140,'Tolú',27),(141,'Carmen de Apicalá',28),(142,'Chaparral',28),(143,'Espinal',28),(144,'Flandes',28),(145,'Guamo',28),(146,'Honda',28),(147,'Ibagué',28),(148,'Mariquita',28),(149,'Melgar',28),(150,'Purificación',28),(151,'Buenaventura',29),(152,'Buga',29),(153,'Cali',29),(154,'Candelaria',29),(155,'Cartago',29),(156,'Palmira',29),(157,'Tuluá',29),(158,'Yumbo',29),(159,'Mitú',30),(160,'Puerto Carreño',31),(161,'Cúcuta',32),(162,'Ocaña',32),(163,'Pamplona',32);
/*!40000 ALTER TABLE `municipio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `otros`
--

DROP TABLE IF EXISTS `otros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `otros` (
  `idotros` int(11) NOT NULL AUTO_INCREMENT,
  `otros_conecta_al_mundo` text NOT NULL,
  `otros_efectividad` text NOT NULL,
  `otros_productividad` text NOT NULL,
  `otros_marketing` text NOT NULL,
  `otros_datos` text NOT NULL,
  `otros_nosotros` text NOT NULL,
  `otros_mision` text NOT NULL,
  `otros_vision` text NOT NULL,
  `otros_en_que_creemos` text NOT NULL,
  PRIMARY KEY (`idotros`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `otros`
--

LOCK TABLES `otros` WRITE;
/*!40000 ALTER TABLE `otros` DISABLE KEYS */;
INSERT INTO `otros` VALUES (1,'Conéctate con toda Colombia sin esfuerzo, posiciónate en la web, haz que tus clientes encuentren lo que buscan, crea nuevas opciones de negocio con el análisis de mercado que te proporciona MI COLOMBIA EN  LINEA.  !Tu futuro en la web¡','En todas las empresas se constituye un sistema social, este sistema está fundado por grupos de discorde naturaleza dado este concepto podemos decir que los grupos son dinámicos porque cambian todo el tiempo. Para que estos grupos funcionen es necesario asignarles roles para realizar todas las actividades de la empresa. En la actualidad la tecnología se suma a los recursos con los que cuentan estos grupos de trabajo para desarrollar estas actividades,  dado este aspecto es imposible negar que el comportamiento social se separe de esta herramienta. Un método concluyente en el cual una empresa alcance la efectividad no existe dado que esta se puntualiza al logro de objetivos y se relaciona con un resultado, de acuerdo a esto podemos decir que cada empresa debe buscar un equilibrio entre al alcance de sus objetivos, satisfacción de los integrantes y el funcionamiento.\r\nEl diccionario de administración y finanzas nos dice que la efectividad es la organización óptima entre cinco elementos: producción, eficiencia, satisfacción, adaptabilidad y desarrollo. Modificar las estructuras organizativas al igual que el comportamiento organizacional y los sistemas de trabajo para que los empleados tengan mayor autonomía en la resolución de problemas y toma de decisiones mejora la efectividad de las empresas.\r\nLas empresas son entes vivos, ya que en su funcionamiento tiene incrustado la conducta de las personas que la forman, la efectividad se logra mediante una conducta motivada, buena comunicación y el trabajo en equipo para el logro de objetivos.\r\n','En MI COLOMBIA EN LINEA nos preocupamos por la utilización del tiempo por esta razón implementamos un servicio que te permite conectar los datos de tu sitio WEB a nosotros con un solo click','Presenta la oferta de tu firma, difunde información precisa y constituye una herramienta comercial de marketing muy valiosa para aumentar tus ventas','Genera gráficos, reportes, facturas para tu empresa, analiza datos para la toma de decisiones acertadas.','MI COLOMBIA EN LINEA  es una empresa pensada para prestar la mayor cantidad de servicios tecnológicos y de información tanto a las empresas, profesionales independientes como al consumidor en general, brindando información de alta calidad, oportuna y completa para que la interacción entre compradores y vendedores se realice de manera fácil y eficiente.  Nuestro gran valor es la comodidad, facilidad y bajo costo a la hora de adquirir nuestros servicios.','Incorporamos la alta tecnología para que las personas y empresas, accedan de manera fácil y económica a un mundo de oportunidades. ','Consolidarnos en el mercado nacional como proveedor de servicios orientados a los sistemas de información que satisfaga las necesidades de nuestros clientes.','Colocar los sistemas de información al servicio de las empresas acorde a las nuevas formas de mercadeo. El mercado actual funciona rápidamente, las empresas deben tener la información en tiempo real para interactuar en él.');
/*!40000 ALTER TABLE `otros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `planes`
--

DROP TABLE IF EXISTS `planes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `planes` (
  `idplanes` int(11) NOT NULL AUTO_INCREMENT,
  `planes_titulo` varchar(100) NOT NULL,
  `contenido` text NOT NULL,
  `planes_title_inf` varchar(100) NOT NULL,
  PRIMARY KEY (`idplanes`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `planes`
--

LOCK TABLES `planes` WRITE;
/*!40000 ALTER TABLE `planes` DISABLE KEYS */;
/*!40000 ALTER TABLE `planes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `portafolio`
--

DROP TABLE IF EXISTS `portafolio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `portafolio` (
  `idportafolio` int(11) NOT NULL AUTO_INCREMENT,
  `portafolio_bienvenida` text NOT NULL,
  `portafolio_marca` text NOT NULL,
  `portafolio_historia_cultura` text NOT NULL,
  `portafolio_inovation` text NOT NULL,
  `portafolio_integration` text NOT NULL,
  `portafolio_integrrity` text NOT NULL,
  `portafolio_lista_servicios` text NOT NULL,
  `portafolio_como_trabajamos` text NOT NULL,
  `portafolio_nuestro_cerebro` text NOT NULL,
  PRIMARY KEY (`idportafolio`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='		';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `portafolio`
--

LOCK TABLES `portafolio` WRITE;
/*!40000 ALTER TABLE `portafolio` DISABLE KEYS */;
INSERT INTO `portafolio` VALUES (1,'Bienvenidos a MI COLOMBIA EN LINEA el primer buscador de empresas on line, un sitio que le permite conectar su empresa al mercado mundial, en nuestra plataforma los clientes podrán encontrar no solo sus productos, sino toda la información que quiera compartir de su empresa. El marketing digital es una herramienta fundamental  en los procesos de comercialización de cualquier empresa, por lo tanto MI COLOMBIA EN LINEA es una nueva forma fácil, rápida y accesible para que además de darse a conocer, realice transacciones comerciales y tenga análisis de datos en tiempo real que le permitirán tomar las mejores decisiones.','conectamos sus ideas','MI COLOMBIA EN LÍNEA es una plataforma pensada para el sector empresarial que demanda innovación, rapidez en la transmisión de la información y seguridad en los procesos, obedeciendo a tendencias como la globalización del mercado y una economía basada en el conocimiento generando con ello eficiencia y competitividad.\r\nUn extenso y juicioso análisis del mercado nos permitió comprender las necesidades reales de las empresas entendiendo además la dinámica del mercado y las herramientas tecnológicas que se deben  utilizar para una mayor productividad y alcance en sus operaciones. A partir de esta información nace MI COLOMBIA EN LÍNEA  con el propósito de ofrecer al empresario la mejor herramienta para dar a conocer su empresa y conectarse con el mundo.\r\n','MI COLOMBIA EN LINEA propone una plataforma innovadora no solo por la tecnología que utiliza para desarrollar sus procesos, sino por la concentración de servicios en un solo lugar; permitiendo con esto no simplemente que su empresa sea más visible, sino que obtenga información de calidad en tiempo real que le permita participar en la  dinámica del mercado de una manera eficaz y eficiente.','MI COLOMBIA EN LÍNEA es una empresa que está integrada por un equipo de trabajo interdisciplinario comprometido con desarrollar los mejores procesos con la mejor tecnología para prestar un excelente servicio. Las diferentes disciplinas se integran y complementan para el desarrollo de una herramienta útil para todas las empresas que formen parte de esta plataforma, los más eficientes y actualizados desarrollos tecnológicos realizados por profesionales altamente calificados.','VALORES CORPORATIVOS\r\n\r\nSeguridad: Garantizar que el servicio que presta la empresa se ejecute con altos modelos reconocidos.\r\n\r\nCalidad: Ser eficientes y eficaces en la provisión y acceso a los servicios que se prestan, aplicando procesos con los más altos estándares.\r\n\r\nCalidez: Ofrecer al cliente  de la empresa y a sus servidores a través de la aplicación de procesos de capacitación, reconocimiento y mejora continua.\r\n\r\nIntegridad y Transparencia: Guiar el accionar de la empresa y sus servidores dentro del marco de la ética, honestidad, confianza y transparencia.\r\n\r\nCompromiso: Actuar con lealtad protegiendo los intereses de la empresa contribuyendo al logro de los objetivos empresariales.\r\n','Nuestra plataforma ofrece los siguientes servicios: conectar los datos de su empres a nosotros presentando la propuesta de su firma con un solo click para ser conocido en el mercado nacional y mundial, difunde la información precisa constituyendo una herramienta de marketing efectiva, generación del portafolio de su empresa para que lo conozcan mucho mejor, generación de gráficos, reportes, facturas, análisis de datos de su empresa para la tomar decisiones de manera precisa.','Prestamos un servicio de calidad y eficiente, pensando en nuestros clientes con el compromiso de generar confianza por la compenetración y apoyo que brindamos a cada una de las empresas pertenecientes a MI COLOMBIA EN LÍNEA.  Nuestro objetivo siempre es el mejoramiento continuo de nuestras empresas afiliadas, que encuentren las herramientas suficientes para que desarrollen un buen marketing que les permita aumentar sus ventas.','Para MI COLOMBIA EN LINEA es importante la calidad, la rapidez y la facilidad en el manejo de la información y los procesos, características fundamentales para que la experiencia de cada uno de nuestros clientes en nuestra plataforma sea exitosa y con resultados óptimos; pues nuestro mayor objetivo es el desarrollo empresarial de nuestros clientes y  su entera satisfacción.');
/*!40000 ALTER TABLE `portafolio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `producto`
--

DROP TABLE IF EXISTS `producto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `producto` (
  `idproducto` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(300) NOT NULL,
  `valor` varchar(50) NOT NULL,
  `empresa_idempresa` int(11) NOT NULL,
  PRIMARY KEY (`idproducto`),
  KEY `fk_producto_empresa1_idx` (`empresa_idempresa`),
  CONSTRAINT `fk_producto_empresa1` FOREIGN KEY (`empresa_idempresa`) REFERENCES `empresa` (`idempresa`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `producto`
--

LOCK TABLES `producto` WRITE;
/*!40000 ALTER TABLE `producto` DISABLE KEYS */;
/*!40000 ALTER TABLE `producto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tags` (
  `idtags` int(11) NOT NULL AUTO_INCREMENT,
  `name_tags` text NOT NULL,
  `producto_idproducto` int(11) NOT NULL,
  PRIMARY KEY (`idtags`),
  KEY `fk_tags_producto1_idx` (`producto_idproducto`),
  CONSTRAINT `fk_tags_producto1` FOREIGN KEY (`producto_idproducto`) REFERENCES `producto` (`idproducto`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tags`
--

LOCK TABLES `tags` WRITE;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `times_data_user`
--

DROP TABLE IF EXISTS `times_data_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `times_data_user` (
  `idtimes` int(11) NOT NULL AUTO_INCREMENT,
  `times_data_user_fecha_inicio` date NOT NULL,
  `times_data_user_fecha_fin` date NOT NULL,
  `empresa_idempresa` int(11) NOT NULL,
  PRIMARY KEY (`idtimes`),
  KEY `fk_times_data_user_empresa1_idx` (`empresa_idempresa`),
  CONSTRAINT `fk_times_data_user_empresa1` FOREIGN KEY (`empresa_idempresa`) REFERENCES `empresa` (`idempresa`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `times_data_user`
--

LOCK TABLES `times_data_user` WRITE;
/*!40000 ALTER TABLE `times_data_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `times_data_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_empresa`
--

DROP TABLE IF EXISTS `tipo_empresa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_empresa` (
  `idtipo_empresa` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_empresa_nombre` varchar(200) NOT NULL,
  PRIMARY KEY (`idtipo_empresa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_empresa`
--

LOCK TABLES `tipo_empresa` WRITE;
/*!40000 ALTER TABLE `tipo_empresa` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipo_empresa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_producto`
--

DROP TABLE IF EXISTS `tipo_producto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_producto` (
  `idtipo_producto` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_producto__listado_nombres` text NOT NULL,
  `empresa_idempresa` int(11) NOT NULL,
  PRIMARY KEY (`idtipo_producto`),
  KEY `fk_tipo_producto_empresa1_idx` (`empresa_idempresa`),
  CONSTRAINT `fk_tipo_producto_empresa1` FOREIGN KEY (`empresa_idempresa`) REFERENCES `empresa` (`idempresa`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_producto`
--

LOCK TABLES `tipo_producto` WRITE;
/*!40000 ALTER TABLE `tipo_producto` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipo_producto` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-04-01 11:49:56
