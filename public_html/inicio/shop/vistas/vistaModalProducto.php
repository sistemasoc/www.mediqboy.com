<!--modal de agragar a carrito -->
<div id="modalProductos" class="modal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header text-center" style="background: #00B32E; color: #FFFFFF;">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
  					<span aria-hidden="true">×</span>
  				</button>
				<h5 id="myModalLabel">Añadir a Carrito</h5>
			</div>
			<div class="modal-body" id="contenidoProductoC" style="background: #F2F2F2;">

			</div>
			<div class="modal-footer">
				<?php					
					if ($_SERVER['REMOTE_ADDR'] == '181.225.100.117') {
				?>
						<button type="button" class="btn btn-success" id="btnAgregar">
							<i class=""></i>Agregar
						</button>
				<?php
					}
				?>
        		<button type="button" class="btn btn-warning" id="cargando">
        			<i class="fa fa-spinner fa-spin fa-fw"></i>Cargando
        		</button>
		    	<button type="button" class="btn btn-danger btn-default" data-dismiss="modal">Cerrar</button>
		  	</div>
		</div>
	</div>
</div>
<!--fin de  modal-->


<!--modal -->
<div id="modalFinPedido" class="modal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header text-center" style="background: #00B32E; color: #FFFFFF;">				
				<h5 id="headerModalPeFin"></h5>
			</div>
			<div class="modal-body" id="contenidoInfoPeFin" style="background: #F2F2F2;">
				<div class="text-center">
					<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
				</div>
			</div>
			<div class="modal-footer">								
		    	<button type="button" class="btn btn-danger btn-default" data-dismiss="modal" id="cerrarModalConfirmacion">Cerrar</button>
		  	</div>
		</div>
	</div>
</div>
<!--fin de  modal-->
