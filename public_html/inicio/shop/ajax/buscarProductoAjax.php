<?php
	include('../controladores/conexion.php');
	include('../modelos/productosModelo.php');
	$producto = $_GET['textBuscar'];
	$consultaProductos = modeloProductos::mdlConsultaProductosBusacador($producto);
	if(count($consultaProductos) > 0){
		$contador = 0;
		foreach ($consultaProductos as $key => $value) {
			$item = $value['ITEM'];
			$nombreProducto = $value['DESCRIPCION'];
			$valor = $value['PRICE'];
			$contador++;
			include('../vistas/vistaCajaProducto.php');
		}
	}else{
?>
	<div class="col-md-12">
		<div class="alert alert-danger alert-dismissible">
	    <h4><i class="icon fa fa-ban"></i> Alert!</h4>
	    <h6>No se encontraron coincidencias. Intente con otro producto.</h6>
	  </div>
	</div>
<?php
	}
?>

<script src="js/mainAgregarProducC.js"></script>
