$(function(){
	var ip = $('#ipServidor').val();
	var idPedido = $('#llaveUnica').val();
	$('#contenidoVentanaCarrito').on('click',".elimina", function() {//eliminar producto ventana carrito 
		var n=$(this).attr('id');
		n=n.split('_');
		n=n[1];
		$('#eliminaP_'+n).hide();
		var idProducto = $('#idProducto_'+n).val();

		//inicio accion de confirmar
			var url = 'http://'+ip+'/virtualmax/ventaOnlineV2/ajax/eliminaProductoAjax.php';//url del ajax
  			var mensajeOk = 'Exito al eliminar producto';//mensaje de exito de ajax
  			var mensajeError = 'Error al eliminar el Producto';//mensaje de error de ajax
  			var botonMostar = '#eliminaP_'+n;//para mostrar el boton al que se le dio click
  			var datosEnviar = idProducto;//datos a enviar por ajax
			var campoEliminar ='#campoProduc_'+n;//campo a eliminar sin recargar pagina ya sea td o div			
			if (idPedido != '') {				
				alertaConfirmarEliminacion('¿Esta seguro de eliminar este producto?', mensajeOk, mensajeError, url, botonMostar, datosEnviar,campoEliminar,idPedido);
			}
		//fin de accion confirmar		
	});

	$('#contenidoVentanaCarritoMenuM').on('click',".elimina", function() {//eliminar producto ventana carrito menu movil
		var n=$(this).attr('id');
		n=n.split('_');
		n=n[1];
		$('#eliminaP_'+n).hide();
		var idProducto = $('#idProducto_'+n).val();

		//inicio accion de confirmar
			var url = 'http://'+ip+'/virtualmax/ventaOnlineV2/ajax/eliminaProductoAjax.php';//url del ajax
  			var mensajeOk = 'Exito al eliminar producto';//mensaje de exito de ajax
  			var mensajeError = 'Error al eliminar el Producto';//mensaje de error de ajax
  			var botonMostar = '#eliminaP_'+n;//para mostrar el boton al que se le dio click
  			var datosEnviar = idProducto;//datos a enviar por ajax
  			var campoEliminar ='#campoProduc_'+n;//campo a eliminar sin recargar pagina ya sea td o div
			if (idPedido != '') {				
				alertaConfirmarEliminacion('¿Esta seguro de eliminar este producto?', mensajeOk, mensajeError, url, botonMostar, datosEnviar,campoEliminar,idPedido);
			}
		//fin de accion confirmar		
	});
});