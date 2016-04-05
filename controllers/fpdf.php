
      <ul class="collapsible popout" data-collapsible="accordion">
        <?php for ($w=0; $w < count($this->empresa); $w++) { ?>
          <li class="">
            <div class="white-text brown darken-4 collapsible-header center-align"><i class="icon-contact_mail"></i><?php echo $this->empresa[$w]['nombre']?></div>
            <div class="collapsible-body container_empresa row">
              <div class="margin-msn col s12 m6 l4">
                <div><strong>Dir. Oficina central</strong></div>
                <span><?php echo $this->empresa[$w]['oficina_central']?></span>
              </div>
              <div class="margin-msn col s12 m6 l4">
                <div><strong>Fundacion</strong></div>
                <span><?php echo $this->empresa[$w]['fundacion']?></span>
              </div>
              <div class="margin-msn col s12 m6 l4">
                <div><strong>Presidente</strong></div>
                <span><?php echo $this->empresa[$w]['presidente']?></span>
              </div>
              <div class="margin-msn col s12 m6 l4">
                <div><strong>No. empleados</strong></div>
                <span><?php echo $this->empresa[$w]['numero_de_empleados']?></span>
              </div>
              <div class="margin-msn col s12 m6 l4">
                <div><strong>Dir. Plantas industriales</strong></div>
                <span><?php echo $this->empresa[$w]['plantas_industriales']?></span>
              </div>
              <div class="margin-msn col s12 m6 l4">
                <div><strong>Principales operaciones</strong></div>
                <span><?php echo $this->empresa[$w]['principales_operaciones']?></span>
              </div>
              <div class="margin-msn col s12 m6 l4">
                <div><strong>Dir. Oficina de contacto</strong></div>
                <span><?php echo $this->empresa[$w]['oficinas_de_contacto']?></span>
              </div>
              <div class="margin-msn col s12 m6 l4">
                <div><strong>Tipo de sociedad</strong></div>
                <span><?php echo $this->empresa[$w]['tipo_sociedad']?></span>
              </div>
              <div class="margin-msn col s12 m6 l4">
                <div><strong>Rut</strong></div>
                <span><?php echo $this->empresa[$w]['rut']?></span>
              </div>
              <div class="margin-msn col s12 m6 l4">
                <div><strong>Tipos de producto</strong></div>
                <span><?php ?><?php echo $this->empresa[$w]['empresa_peticion_tipo_producto']?></span>
              </div>
              <div class="margin-msn col s12 m6 l4">
                <div><strong>Dir. domicilio legal</strong></div>
                <span><?php echo $this->empresa[$w]['domicilio_legal']?></span>
              </div>
              <div class="margin-msn col s12 m6 l4">
                <div><strong>Dir. Domicilio comercial</strong></div>
                <span><?php echo $this->empresa[$w]['domicilio_comercial']?></span>
              </div>
              <div class="margin-msn col s12 m6 l4">
                <div><strong>Telefonos</strong></div>
                <span><?php echo $this->empresa[$w]['telefonos']?></span>
              </div>
              <div class="margin-msn col s12 m6 l4">
                <div><strong>Fax</strong></div>
                <span><?php echo $this->empresa[$w]['fax']?></span>
              </div>
              <div class="margin-msn col s12 m6 l4">
                <div><strong>E-mail</strong></div>
                <span><?php echo $this->empresa[$w]['e_mail']?></span>
              </div>
              <div class="margin-msn col s12 m6 l4">
                <div><strong>Departamento</strong></div>
                <span><?php echo $this->empresa[$w]['empresa_peticion_departamento'] ?></span>
              </div>
              <div class="margin-msn col s12 m6 l4">
                <div><strong>Municipio</strong></div>
                <span><?php echo $this->empresa[$w]['municipio_nombre']?></span>
              </div>
              <div class="margin-msn col s12 m6 l4">
                <div><strong>Tipo de empresa</strong></div>
                <span><?php echo $this->empresa[$w]['tipo_empresa_idtipo_empresa']?></span>
              </div>
              <div class="row">
                <form id="registro_legal">
                  <input name="idempresa" type="hidden" value="<?php echo $this->empresa[$w]['idempresa']?>">
                  <button id="btn-solicitudes" class="col s12 m12 l12 btn waves-effect transparent btn-contacto">Aceptar solicitud</button>
                </form>
              </div>
            </div>
          </li>
        <?php } ?>
      </ul>




      <ul class="collapsible popout" data-collapsible="accordion">
        <?php for ($i=0; $i < count($this->mensaje); $i++) { ?>
          <li class="">
            <div class="white-text brown darken-4 collapsible-header center-align"><i class="icon-contact_mail"></i><?php echo $this->mensaje[$i]['mensaje_nombre'].' '.$this->mensaje[$i]['mensaje_apellido'] ; ?></div>
            <div class="collapsible-body container">
              <div class="margin-msn">
                <div><strong>Asunto</strong></div>
                <span><?php echo $this->mensaje[$i]['mensaje_asunto']?></span>
              </div>
              <div class="margin-msn">
                <div><strong>E-mail</strong></div>
                <span><?php echo $this->mensaje[$i]['mensaje_email']?></span>
              </div>
              <div class="margin-msn">
                <div><strong>Mensaje</strong></div>
                <span><?php echo $this->mensaje[$i]['mensaje_mensaje']?></span>
              </div>
            </div>
          </li>
        <?php } ?>
      </ul>