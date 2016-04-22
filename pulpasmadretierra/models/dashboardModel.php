<?php 
	/**
	* 
	*/
	class dashboardModel extends Model
	{
		
		public function __construct()
		{
			parent::__construct();
		}

		public function getMensajes()
		{
			$datos = $this->_db->query("SELECT * FROM mensaje ORDER BY idmensaje DESC");
			return $datos->fetchall();
		}

		public function getUsuarios()
		{
			$datos = $this->_db->query("SELECT * FROM usuario ORDER BY idusuario DESC");
			return $datos->fetchall();
		}

		public function registrarUsuario($usuario_nombre, $usuario_apellido, $usuario_usuario, $usuario_pass, $usuario_activate)
		{
			
			$this->_db->prepare("INSERT INTO usuario VALUES  (null, 
																:usuario_nombre, 
																:usuario_apellido, 
																:usuario_usuario, 
																:usuario_pass,
																0, 
																:usuario_activate
																)")
			->execute(
					array(
							':usuario_nombre'=> $usuario_nombre,
							':usuario_apellido'=> $usuario_apellido,
							':usuario_usuario'=> $usuario_usuario,
							':usuario_pass'=> $usuario_pass,
							':usuario_activate'=> $usuario_activate
						)
				);
		
		}

		public function editarUsuario($idusuario, $usuario_usuario, $usuario_pass)
		{

			$this->_db->prepare("UPDATE  usuario SET  usuario_usuario = :usuario_usuario, usuario_pass = :usuario_pass	WHERE idusuario = :idusuario")

			->execute(
					array(
							':idusuario' => $idusuario,
							':usuario_usuario'=> $usuario_usuario,
							':usuario_pass'=> $usuario_pass
						)
				);		
		
		}

		public function getRedSocial()
		{
			$datos = $this->_db->query("SELECT * FROM social ORDER BY idsocial DESC");
			return $datos->fetchall();
		}


		public function insertarRedSocial($idsocial, $social_url)
		{

			$this->_db->prepare("UPDATE social SET  social_url = :social_url WHERE idsocial = :idsocial")

			->execute(
					array(
							':idsocial' => $idsocial,
							':social_url' => $social_url
						)
				);	
		}

		public function registrarPortafolio($portafolio_telefonos, 
										$portafolio_logo_name, 
										$portafolio_bienvenido, 
										$portafolio_innovacion, 
										$portafolio_integracion,
										$portafolio_integridad,
										$portafolio_historia_cultura,
										$portafolio_mision,
										$portafolio_vision,
										$portafolio_marca,
										$portafolio_como_trabajamos,
										$portafolio_direccion
										)
		{
			
			$this->_db->prepare("INSERT INTO portafolio VALUES  (null, 
																:portafolio_telefonos, 
																:portafolio_logo_name, 
																:portafolio_bienvenido, 
																:portafolio_innovacion,
																:portafolio_integracion,
																:portafolio_integridad,
																:portafolio_historia_cultura,
																:portafolio_mision,
																:portafolio_vision,
																:portafolio_marca,
																:portafolio_como_trabajamos,
																:portafolio_direccion,
																null,
																null
																)")
			->execute(
					array(
							':portafolio_telefonos' => $portafolio_telefonos,
							':portafolio_logo_name' => $portafolio_logo_name,
							':portafolio_bienvenido' => $portafolio_bienvenido,
							':portafolio_innovacion' => $portafolio_innovacion,
							':portafolio_integracion' => $portafolio_integracion,
							':portafolio_integridad' => $portafolio_integridad,
							':portafolio_historia_cultura' => $portafolio_historia_cultura,
							':portafolio_mision' => $portafolio_mision,
							':portafolio_vision' => $portafolio_vision,
							':portafolio_marca' => $portafolio_marca,
							':portafolio_como_trabajamos' => $portafolio_como_trabajamos,
							':portafolio_direccion' => $portafolio_direccion
						)
				);
		
		}

		public function getPortafolio()
		{
			$datos = $this->_db->query("SELECT * FROM portafolio");
			return $datos->fetchall();
		}


		public function editarPortafolio(
										$portafolio_telefonos,
										$portafolio_logo_name,
										$portafolio_bienvenido,
										$portafolio_innovacion,
										$portafolio_integracion,
										$portafolio_integridad,
										$portafolio_historia_cultura,
										$portafolio_mision,
										$portafolio_vision,
										$portafolio_marca,
										$portafolio_como_trabajamos,
										$portafolio_direccion,
										$idportafolio

			)
		{
			$this->_db->prepare("UPDATE portafolio 
									SET portafolio_telefonos = :portafolio_telefonos, 
										portafolio_logo_name = :portafolio_logo_name, 
										portafolio_bienvenido = :portafolio_bienvenido, 
										portafolio_innovacion = :portafolio_innovacion,
										portafolio_integracion = :portafolio_integracion,
										portafolio_integridad = :portafolio_integridad,
										portafolio_historia_cultura = :portafolio_historia_cultura,
										portafolio_mision = :portafolio_mision,
										portafolio_vision = :portafolio_vision,
										portafolio_marca = :portafolio_marca,
										portafolio_como_trabajamos = :portafolio_como_trabajamos,
										portafolio_direccion = :portafolio_direccion
									WHERE idportafolio = :idportafolio")

			->execute(
					array(
							':portafolio_telefonos' => $portafolio_telefonos,
							':portafolio_logo_name' => $portafolio_logo_name,
							':portafolio_bienvenido' => $portafolio_bienvenido,
							':portafolio_innovacion' => $portafolio_innovacion,
							':portafolio_integracion' => $portafolio_integracion,
							':portafolio_integridad' => $portafolio_integridad,
							':portafolio_historia_cultura' => $portafolio_historia_cultura,
							':portafolio_mision' => $portafolio_mision,
							':portafolio_vision' => $portafolio_vision,
							':portafolio_marca' => $portafolio_marca,
							':portafolio_como_trabajamos' => $portafolio_como_trabajamos,
							':portafolio_direccion' => $portafolio_direccion,
							':idportafolio' => $idportafolio
						)
				);	
		}

		public function registrarTipoProducto($productos_tipo_nombre)
		{
			$this->_db->prepare("INSERT INTO productos_tipo VALUES  (null, 
																:productos_tipo_nombre
																)")
			->execute(
					array(
							':productos_tipo_nombre' => $productos_tipo_nombre
						)
				);
		}
		public function getTipoProducto()
		{
			$datos = $this->_db->query("SELECT * FROM productos_tipo ORDER BY idproductos_tipo DESC");
			return $datos->fetchall();
		}

		public function editarTipoProducto($idproductos_tipo, $productos_tipo_nombre)
		{
			$this->_db->prepare("UPDATE productos_tipo SET  productos_tipo_nombre = :productos_tipo_nombre WHERE idproductos_tipo = :idproductos_tipo")

			->execute(
					array(
							':idproductos_tipo' => $idproductos_tipo,
							':productos_tipo_nombre' => $productos_tipo_nombre
						)
				);	
		}

		public function deleteTipoProducto($idproductos_tipo)
		{
			$this->_db->query("DELETE FROM productos_tipo WHERE idproductos_tipo = $idproductos_tipo");
		}


		public function productoNuevoProducto($producto_descripcion, 
										$producto_valor, 
										$producto_nombre, 
										$productos_tipo_idproductos_tipo
										)
		{
			
			$this->_db->prepare("INSERT INTO producto VALUES  (null, 
																:producto_descripcion, 
																:producto_valor, 
																:producto_nombre, 
																:productos_tipo_idproductos_tipo
																)")
			->execute(
					array(
							':producto_descripcion' => $producto_descripcion,
							':producto_valor' => $producto_valor,
							':producto_nombre' => $producto_nombre,
							':productos_tipo_idproductos_tipo' => $productos_tipo_idproductos_tipo
						)
				);

		}

		public function getProductos()
		{
			$datos = $this->_db->query("SELECT * FROM producto ORDER BY idproducto DESC");
			return $datos->fetchall();
		}

		public function getProducto($idproducto)
		{
			$datos = $this->_db->query("SELECT * FROM producto WHERE idproducto = $idproducto");
			return $datos->fetch();
		}


		public function productoEditarProducto($producto_descripcion, 
										$producto_valor, 
										$producto_nombre, 
										$productos_tipo_idproductos_tipo,
										$idproducto

			)
		{
			$this->_db->prepare("UPDATE producto 
									SET producto_descripcion = :producto_descripcion, 
										producto_valor = :producto_valor, 
										producto_nombre = :producto_nombre, 
										productos_tipo_idproductos_tipo = :productos_tipo_idproductos_tipo
									WHERE idproducto = :idproducto")

			->execute(
					array(
							':producto_descripcion' => $producto_descripcion,
							':producto_valor' => $producto_valor,
							':producto_nombre' => $producto_nombre,
							':productos_tipo_idproductos_tipo' => $productos_tipo_idproductos_tipo,
							':idproducto' => $idproducto
						)
				);	
		}


		public function productoEliminar($idproducto)
		{
			$this->_db->query("DELETE FROM producto WHERE idproducto = $idproducto");
		}

		public function registrarTag($tags_lsitado_tags, $producto_idproducto)
		{
			$this->_db->prepare("INSERT INTO tags VALUES  (null, 
																:tags_lsitado_tags, 
																:producto_idproducto
																)")
			->execute(
					array(
							':tags_lsitado_tags' => $tags_lsitado_tags,
							':producto_idproducto' => $producto_idproducto
						)
				);
		}

		public function getTag($idtags)
		{
			$datos = $this->_db->query("SELECT * FROM tags WHERE idtags = $idtags");
			return $datos->fetch();
		}

		public function registrarFaviIcon($logo_nombre)
		{
			$this->_db->prepare("INSERT INTO favi_icon VALUES  (null, 
																:logo_nombre
																)")
			->execute(
					array(
							':logo_nombre' => $logo_nombre
						)
				);
		}


		public function editarListaTags($tags_lsitado_tags, $producto_idproducto)
		{
			$this->_db->prepare("UPDATE tags 
									SET tags_lsitado_tags = :tags_lsitado_tags
									WHERE producto_idproducto = :producto_idproducto")

			->execute(
					array(
							':tags_lsitado_tags' => $tags_lsitado_tags,
							':producto_idproducto' => $producto_idproducto
						)
				);	
		}

		public function registrarNameProducto($fotos_name, $producto_idproducto)
		{
			$this->_db->prepare("INSERT INTO fotos VALUES  (null, 
																:fotos_name,
																:producto_idproducto
																)")
			->execute(
					array(
							':fotos_name' => $fotos_name,
							':producto_idproducto' => $producto_idproducto
						)
				);
		}

		public function editarNameProducto($fotos_name, $producto_idproducto)
		{
			$this->_db->prepare("UPDATE fotos 
									SET fotos_name = :fotos_name
									WHERE producto_idproducto = :producto_idproducto")
			
			->execute(
					array(
							':fotos_name' => $fotos_name,
							':producto_idproducto' => $producto_idproducto
						)
				);
		}

		public function registrarBlog($blog_titlulo, 
										$blog_contenido, 
										$blog_autor, 
										$blog_tema
										)
		{

			date_default_timezone_set('America/Bogota');
			$blog_fecha_pub = date("Y-m-d");
			
			$this->_db->prepare("INSERT INTO blog VALUES  (null, 
																:blog_titlulo, 
																:blog_contenido,
																:blog_fecha_pub,
																:blog_autor, 
																:blog_tema,
																null
																)")
			->execute(
					array(
							':blog_titlulo' => $blog_titlulo,
							':blog_contenido' => $blog_contenido,
							':blog_fecha_pub'=> $blog_fecha_pub,
							':blog_autor' => $blog_autor,
							':blog_tema' => $blog_tema
						)
				);
		}

		public function getArticulos()
		{
			$datos = $this->_db->query("SELECT * FROM blog");
			return $datos->fetchall();
		}

		public function getarticulo($idblog)
		{
			$datos = $this->_db->query("SELECT * FROM blog WHERE idblog = $idblog");
			return $datos->fetch();
		}

		public function editarArticulo($blog_titlulo,
										$blog_contenido,
										$blog_autor,
										$blog_tema,
										$idblog
			)
		{
			date_default_timezone_set('America/Bogota');
			$blog_fecha_pub = date("Y-m-d");

			$this->_db->prepare("UPDATE blog 
									SET blog_titlulo = :blog_titlulo,
										blog_contenido = :blog_contenido,
										blog_fecha_pub = :blog_fecha_pub,
										blog_autor = :blog_autor,
										blog_tema = :blog_tema
									WHERE idblog = :idblog")
			
			->execute(
					array(
							':blog_titlulo' => $blog_titlulo,
							':blog_contenido' => $blog_contenido,
							':blog_fecha_pub' => $blog_fecha_pub,
							':blog_autor' => $blog_autor,
							':blog_tema' => $blog_tema,
							':idblog' => $idblog
						)
				);
		}

		public function asociarBlogProducto($idblog,
											$producto_idproducto
				)
		{
			$this->_db->prepare("UPDATE blog 
									SET producto_idproducto = :producto_idproducto
									WHERE idblog = :idblog")
			->execute(
					array(
							':producto_idproducto' => $producto_idproducto,
							':idblog' => $idblog
						)
				);
		}

		public function deletearticulo($idblog)
		{
			$this->_db->query("DELETE FROM blog WHERE idblog = $idblog");
		}

		public function registrarFotoArticulo($fotos_blog_nombre, $blog_idblog)
		{
			$this->_db->prepare("INSERT INTO fotos_blog VALUES  (null, 
																:fotos_blog_nombre,
																:blog_idblog
																)")
			->execute(
					array(
							':fotos_blog_nombre' => $fotos_blog_nombre,
							':blog_idblog' => $blog_idblog
						)
				);
		}

		public function editarFotoArticulo($fotos_blog_nombre, $blog_idblog)
		{

			$this->_db->prepare("UPDATE fotos_blog 
									SET fotos_blog_nombre = :fotos_blog_nombre
									WHERE blog_idblog = :blog_idblog")
			->execute(
					array(
							':fotos_blog_nombre' => $fotos_blog_nombre,
							':blog_idblog' => $blog_idblog
						)
				);
			
		}

	}
	
?>