$(function(){

	$('#finalizarCompra').hide();
	$('#finalizarPedioCa').hide();

	var ip = $('#ipServidor').val();
	var idPedido = $('#idPedido').val();
	var nitCliente = $('#nitCliente').val();
	$.ajax({//consulta productos del pedido
        type: "GET",
        url: 'http://'+ip+'/virtualmax/ventaOnlineV2/ajax/contenidoCarritoAjax.php',
        data: {idPedido: idPedido, nitCliente: nitCliente, ip: ip},
        success: function(data){
			$('#productosCarrito').html(data);
    	},

    }).fail( function(jqXHR, textStatus, errorThrown){
    	fallo(jqXHR, textStatus, errorThrown);
    });

  	$('#productosCarrito').on('click',".eliminaTr", function() {//para eliminar producto de pedido  		
  		var n=$(this).attr('id');
		n=n.split('_');
		n=n[1];
		$('#eliminaProduc_'+n).hide();
		var idProducto = $('#idProducto_'+n).val();
		//inicio accion de confirmar
			var url = 'http://'+ip+'/virtualmax/ventaOnlineV2/ajax/eliminaProductoAjax.php';//url del ajax
  			var mensajeOk = 'Exito al eliminar producto';//mensaje de exito de ajax
  			var mensajeError = 'Error al eliminar el Producto';//mensaje de error de ajax
  			var botonMostar = '#eliminaProduc_'+n;//para mostrar el boton al que se le dio click
  			var datosEnviar = idProducto;//datos a enviar por ajax
  			var campoEliminar ='#tr_'+n;//campo a eliminar sin recargar pagina ya sea td o div
			alertaConfirmarEliminacion('¿Esta seguro de eliminar este producto?', mensajeOk, mensajeError, url, botonMostar, datosEnviar,campoEliminar,idPedido);
		//fin de accion confirmar
  	});  	

	
	$('#productosCarrito').on('click',".restar", function() {//disminuir cantidad de producto
		var n=$(this).attr('id');
		n=n.split('_');
		n=n[1];		
  		var cantidadTv2 = $('#total-items_'+n).val();
  		var blister = $('#blister_'+n).val();
		if (cantidadTv2 != 0){
			if (blister > 1 ){
				var cantTotal = (cantidadTv2 - blister);
			}else{
				cantidadTv2--;
				var cantTotal =  cantidadTv2;
			}
			$('#total-items_'+n).val(cantTotal);
			//codigo q le resta al valor actual
			var valorActual = $('#valorActual_'+n).val();
			var valorInicial = $('#valorInicial_'+n).val();
			var totalP = (parseInt(valorInicial) * parseInt(cantTotal));
			$('#totalPagarItem_'+n).html('$ '+new Intl.NumberFormat().format(totalP));
			$('#valorActual_'+n).val(totalP);

			/******************************************
			 * calcula el valor total con los cambios *
			 ******************************************/
			var totalItemP = $('#totalItemP').val();
			var totalItems = 0;
			for (let i = 1; i <= totalItemP; i++) {
				var valTotalItem = $('#valorActual_'+i).val();
				totalItems = (parseInt(totalItems) + parseInt(valTotalItem));
			}
			$('#totalPagar').val(totalItems);
			$('#total').text('$ '+ new Intl.NumberFormat().format(totalItems));
		}
	});

	$('#productosCarrito').on('click',".sumar", function() {//agregar mas cantidad de producto
		var n=$(this).attr('id');
		n=n.split('_');
		n=n[1];
		var cantidadTv2 = $('#total-items_'+n).val();
		var blister = $('#blister_'+n).val();
		if (blister > 1 ){
			var cantTotal = (parseInt(cantidadTv2) + parseInt(blister));
		}else{
			cantidadTv2++;
			var cantTotal =  cantidadTv2;
		}
		$('#total-items_'+n).val(cantTotal);
		//codigo que aumenta el valor a medida que suma su cantidad
		var valorInicial = $('#valorInicial_'+n).val();		
		var totalPagarItem = $('#totalPagarItem_'+n).val();
		var totalP = (parseInt(valorInicial) * parseInt(cantTotal));		
		$('#totalPagarItem_'+n).html('$ '+new Intl.NumberFormat().format(totalP));
		$('#valorActual_'+n).val(totalP);

		/******************************************
		 * calcula el valor total con los cambios *
		 ******************************************/
		var totalItemP = $('#totalItemP').val();
		var totalItems = 0;
		for (let i = 1; i <= totalItemP; i++) {
			var valTotalItem = $('#valorActual_'+i).val();
			totalItems = (parseInt(totalItems) + parseInt(valTotalItem));
		}
		$('#totalPagar').val(totalItems);
		$('#total').text('$ '+ new Intl.NumberFormat().format(totalItems));
	});

	/**********************************************************************
	 * 			al modificar el input de la cantidad manualmente		  *
	**********************************************************************/

	$('#productosCarrito').on('click', '.items-total', function() {//almacenar cantidad anterior al querer cambiarla por el input
		var n=$(this).attr('id');
		n=n.split('_');
		n=n[1];
		cantidaAnterior = $('#total-items_'+n).val();
	});

	$('#productosCarrito').on('change', '.items-total', function() {//comprueba si la cantidad dijitada no rompe el blister del producto
		var n=$(this).attr('id');
		n=n.split('_');
		n=n[1];
		var cantidaProducto = $('#total-items_'+n).val();
		var blister = $('#blister_'+n).val();
		var respDiviBlis = (cantidaProducto / blister);
		if (Number.isInteger(respDiviBlis) != true) {
			alerta('error','Error factor de despacho por '+blister,'top-end',3000);
			$('#total-items_'+n).val(cantidaAnterior);
		}else{
			var valorInicial = $('#valorInicial_'+n).val();		
			var totalPagarItem = $('#totalPagarItem_'+n).val();
			var totalP = (parseInt(valorInicial) * parseInt(cantidaProducto));
			$('#totalPagarItem_'+n).html('$ '+new Intl.NumberFormat().format(totalP));
			$('#valorActual_'+n).val(totalP);

			/******************************************
			 * calcula el valor total con los cambios *
			 ******************************************/
			var totalItemP = $('#totalItemP').val();
			var totalItems = 0;
			for (let i = 1; i <= totalItemP; i++) {
				var valTotalItem = $('#valorActual_'+i).val();
				totalItems = (parseInt(totalItems) + parseInt(valTotalItem));
			}
			$('#totalPagar').val(totalItems);
			$('#total').text('$ '+ new Intl.NumberFormat().format(totalItems));
		}
	});


	$('#terminosCondiciones').click(function(){//muestra boton de finalizar compra al dar click en check de terminos y condiciones
		$('#finalizarCompra').show();
	});

	$('#productosCarrito').on('click', '#agregarMasProduc', function() {//guarda cantidades de los productos antes de redireccionar		
		location.href="http://www.mediqboy.com/inicio/shop/?categoria=principalShop&men=8";		 
	});

	/******** para actualizar las cantidades en la vista de confimar el pedido *********/
	$('#productosCarrito').on('click','.guardarCambio', function() {
		var n=$(this).attr('id');
		n=n.split('_');
		n=n[1];
		$('#guardarCambio_'+n).hide();
		$('#btnLoader_'+n).show();
		var item = $('#item_'+n).val();
		var cantidadItem = $('#total-items_'+n).val();		

		$.ajax({//actualiza las cantidades de los productos
	        type: "GET",
	        url: 'http://'+ip+'/virtualmax/ventaOnlineV2/ajax/actualizaCantidadProducAjax.php',
	        data: {item: item, cantidadItem: cantidadItem, idPedido: idPedido},
	        success: function(data){
	        	var	mensaje = (data.mensaje1);
	        	if (mensaje == 'error'){//valida si la consulta se ejecuta exitosamente		        			        		
	        		//inicio alerta			        		
	        		alerta('error','Error al actualizar producto','top-end',3000);			        		
					//fin alerta					
	        	}else{	        		
	        		//inicio alerta
	        		alerta('success','Exito al actualizar producto','top-end',3000);
	        		//fin alerta					
	        	}

	    	},
	    }).fail( function( jqXHR, textStatus, errorThrown ) {
			fallo(jqXHR, textStatus, errorThrown);
		});

		$('#guardarCambio_'+n).show();
		$('#btnLoader_'+n).hide();
		
	});

	$('#finalizarCompra').on('click', function() {	
		
		$.ajax({//cambia elñ contenido de la vista para actualizar info de cliente
	        type: "GET",
	        url: 'http://'+ip+'/virtualmax/ventaOnlineV2/ajax/finalizarPedidoAjax.php',
	        data: {idPedido: idPedido, nitCliente: nitCliente},
	        success: function(data){
	           $('#contenedorPagar').html(data);
	    },

	    }).fail( function( jqXHR, textStatus, errorThrown ) {
			fallo(jqXHR, textStatus, errorThrown);
		});
	});

	$('#contenedorPagar').on('change',"#departamento", function() {//al seleccionar departamento
		var departamento = $('#departamento').val();

		$.ajax({
	        type: "GET",
	        url: 'http://'+ip+'/virtualmax/ventaOnlineV2/ajax/municipioAjax.php',
	        data: {departamento: departamento},
	        success: function(data){
	           $('#municipio').html(data);
	    },

	    }).fail( function( jqXHR, textStatus, errorThrown ) {
			fallo(jqXHR, textStatus, errorThrown);
		});
	});


	$('#contenedorPagar').on('click',"#finalizarPedioCa", function() {//para guardar pedido y actualizar datos de cliente
		var idPedido = $('#idPedido').val();
		var documentoCliente = $('#documentoCliente').val();
		var correo = $('#correoCliente').val();
		var nombreCliente = $('#nombreCliente').val();
		var telefonoCliente = $('#telefonoCliente').val();
		var departamento = $('#departamento').val();
		var municipio = $('#municipio').val();
		var barrio = $('#barrio').val();
		var Calle = $('#Calle').val();				
		var comentario = $('#comentarioPedido').val();
		var nitCliente = $('#nitCliente').val();

		if (idPedido != '' && documentoCliente != '' && correo != '' && nombreCliente != '' && telefonoCliente != '' && departamento != '' && municipio != '' && comentario != ''){
			$('#modalFinPedido').modal('show');
			$.ajax({
		        type: "GET",
		        url: 'http://'+ip+'/virtualmax/ventaOnlineV2/ajax/validarCorreoAjax.php',
		        data: {correo: correo},
		        dataType: "json",
		        success: function(data){
		        	var	correoV = (data.correo);
		        	if (correoV != '') {		        		
			        	$.ajax({
					        type: "GET",
					        url: 'http://'+ip+'/virtualmax/ventaOnlineV2/ajax/solicitarPedidoAjax.php',
					        data: {idPedido: idPedido, documentoCliente: documentoCliente, correo: correo, nombreCliente: nombreCliente, telefonoCliente: telefonoCliente, departamento: departamento, municipio: municipio, Calle: Calle, barrio: barrio, comentario: comentario, nitCliente: nitCliente},
					        success: function(data){
					        	var mensaje = 'fin';
								$.ajax({
							        type: "GET",
							        url: '../ajax/crearSessionAjax.php',
							        data: {mensaje: mensaje},
							        success: function(data){							        	
							    	
							    	},
							    }).fail( function( jqXHR, textStatus, errorThrown ) {
									fallo(jqXHR, textStatus, errorThrown);
								});
			        			$('#contenidoInfoPeFin').html(data);
					    	},
					    }).fail( function( jqXHR, textStatus, errorThrown ) {
							fallo(jqXHR, textStatus, errorThrown);
						});
					        	
		        	}else{
		        		$('#modalFinPedido').modal('hide');
		        		 alertaN('Correo invalido intente con otro E-mail');
		        	}
		        	
		    },

		    }).fail( function( jqXHR, textStatus, errorThrown ) {
				fallo(jqXHR, textStatus, errorThrown);
			});
		}else{
			var mensaje = 'los siguientes datos son obligatorios';
			if (correo == '') {
				mensaje = mensaje+' Correo';
			}
			if (nombreCliente == '') {
				mensaje = mensaje+', Nombre';
			}
			if (telefonoCliente == '') {
				mensaje = mensaje+', Telefono';
			}
			if (departamento == '') {
				mensaje = mensaje+', Departamento';
			}
			if (municipio == '') {
				mensaje = mensaje+', Municipio';
			}

			alertaN(mensaje);
		}
	});

	$('#cerrarModalConfirmacion').on('click', function() {		
	   	location.href="http://www.mediqboy.com/inicio/shop/?categoria=principalShop&men=8";
	    
	});

	$('#contenedorPagar').on('click','#autorizaDatos', function() {		
		$('#finalizarPedioCa').show();
	});
});
