<div class="center-align pagination-home">
	<ul class="pagination">
		<?php if (isset($this->_paginacion)) { ?>

				<?php if ($this->_paginacion['primero']) { ?>
					<li class="active">
						<a href="<?php echo $link . $this->_paginacion['primero']; ?>"><<</a>
					</li>
				<?php }else{ ?>
					<li class="disabled"><i class="icon-chevron-left"></i><i class="icon-chevron-left"></i></li>
				<?php } ?>

		&nbsp;

				<?php if ($this->_paginacion['anterior']) { ?>
				<li class="active">
					<a href="<?php echo $link . $this->_paginacion['anterior']; ?>"><</a>
				</li>
				<?php }else{ ?>
					<li class="disabled"><i class="icon-chevron-left"></i></li>
				<?php } ?>

		&nbsp;

				<?php for ($i = 0; $i < count($this->_paginacion['rango']); $i++) { ?>

					<?php if ($this->_paginacion['actual'] == $this->_paginacion['rango'][$i]) { ?>
						<li class="disabled">
							<?php echo $this->_paginacion['rango'][$i]; ?>
						</li>
					<?php }else{ ?>
						<li class="active">
							<a href="<?php echo $link . $this->_paginacion['rango'][$i]; ?>">
								<?php echo $this->_paginacion['rango'][$i];; ?>
							</a>
						</li>
					<?php } ?>
					
				<?php } ?>

		&nbsp;

				<?php if ($this->_paginacion['siguiente']) { ?>
				<li class="active">
					<a href="<?php echo $link . $this->_paginacion['siguiente']; ?>">></a>
				</li>
				<?php }else{ ?>
					<li class="disabled"><i class="icon-chevron-right"></i></li>
				<?php } ?>


		&nbsp;

				<?php if ($this->_paginacion['ultimo']) { ?>
				<li class="active">
					<a href="<?php echo $link . $this->_paginacion['ultimo']; ?>">>></a>
				</li>
				<?php }else{ ?>
					<li class="disabled"><i class="icon-chevron-right"></i><i class="icon-chevron-right"></i></li>
				<?php } ?>

		<?php } ?>
	</ul>
</div>