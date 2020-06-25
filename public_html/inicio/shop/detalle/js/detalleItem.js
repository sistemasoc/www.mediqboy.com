$(function(){
	
	$('#iconCarritoPrincipal').hide();//oculta icono del carrito
	$('#iconCarritoPrincipalMenuM').hide();//oculta icono del carrito menu movil
	$('#cantidadProductos').hide();
	$('#cantidadProductosMenuM').hide();
	$('.dropdownMenu3').hide();
	$('#ventanaCarrito').hide();
	$('#ventanaCarritoMenuM').hide();
	var codigoProducto = $('#codigoProducto').val();	
	var nitUsuario = $('#nitUsuario').val();	
	var ipServidor = $('#ipServidor').val();		
	if (codigoProducto != '' && ipServidor != '') {
		//Consultas informacion del item
		$.ajax({
	        type: "GET",
	        url: 'http://'+ipServidor+'/virtualmax/ventaOnlineV2/detalleItem/index.php',
	        data: {codigoProducto: codigoProducto, nitUsuario: nitUsuario,  ipServidor:ipServidor},
	        success: function(data){	           
	           $('#contenedorProductos').empty();
	           $('#contenedorProductos').html(data);
	    },

	    }).fail( function( jqXHR, textStatus, errorThrown ) {
			fallo(jqXHR, textStatus, errorThrown);
		});
	    
	}

});