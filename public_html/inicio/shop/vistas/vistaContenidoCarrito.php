<?php	
	$nitCliente = controladorSeguridad::encode_this($_SESSION['nit_usuario']);
	//$nitCliente = $_SESSION['nit_usuario'];
?>
<input type="hidden" name="nitCliente" id="nitCliente" value="<?php echo $nitCliente;?>">
<div class="col-md-12">
	<div class="col-md-12">
		<h1 id="cart-title" style="display: block;">
			<i class="fa fa-shopping-basket" aria-hidden="true"></i>&nbsp;Confirmar Solicitud
		</h1>
	</div>

	<div class="col-md-12" id="productosCarrito">
		
		<!-- contenido de carrito -->

	</div>			

</div>

<div class="col-md-7"></div>
<div class="col-md-5 col-sm-12 col-xs-12">
	<input type="checkbox" name="terminosCondiciones" id="terminosCondiciones" value="">
	<a href="../PoliticasComerciales.pdf" target="_blank" style="font-size:15px;color: black;">&nbsp;He leído y acepto <u>términos y condiciones y política comerciales</u>.</a>
</div>
<div class="col-md-12 text-right" style="margin-top: 20px; margin-bottom: 20px;">	
	<button type="button" class="btn btn-danger" id="finalizarCompra" name="finalizarCompra">Confirmar Solicitud</button>	
</div>