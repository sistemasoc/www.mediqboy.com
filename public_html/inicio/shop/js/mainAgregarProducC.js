$(function(){
	var ip = $('#ipServidor').val();
	var nitUsuario = $('#nitUsuario').val();
	var ancho = window.outerWidth;
	
	$('#cargando').hide();//oculta boton cargando en modal producto
	$('#iconCarritoPrincipal').hide();//oculta icono del carrito
	$('#iconCarritoPrincipalMenuM').hide();//oculta icono del carrito menu movil
	$('#cantidadProductos').hide();
	//$('#cantidadProductosMenuM').hide();
	$('.dropdownMenu3').hide();
	$('#ventanaCarrito').hide();
	$('#ventanaCarritoMenuM').hide();

	$(window).scroll(function(event) {//para posicion de carrito dependiendo posicion de scroll 
	  var scrollTop = $(window).scrollTop();
	  if(scrollTop != 0){
	  	document.getElementById('iconCarritoPrincipalMenuM').style.marginTop='15px';//le cambia el margin-top al carrito	  	
	  	document.getElementById('ventanaCarritoMenuM').style.marginTop='12px';
	  }else{
	  	document.getElementById('iconCarritoPrincipalMenuM').style.marginTop='50px';	  
	  	document.getElementById('ventanaCarritoMenuM').style.marginTop='60px';
	  }
	});
	var cantTotal = 0;
	var valor = $('#llaveUnica').val();

	if (valor != ''){
		$.ajax({//consulta si el pedido exixte o si no se a finalizado
	        type: "GET",
	        url: 'http://'+ip+'/virtualmax/ventaOnlineV2/ajax/consultaInfoPedidoAjax.php',
	        data: {valor: valor},
	        dataType: "json",
	        success: function(data){
	        	var resultado = data.estado;
	        	var	estado = resultado['estado'];
	        	var	cantidadProduc = resultado['cantidadProduc'];
	        	if (estado == 'pendiente') {
					$('#llaveUnica').val(valor);									
					if (ancho <= 1007){
						$('#iconCarritoPrincipalMenuM').show();
						$('#cantidadProductosMenuM').show();
					}else{
						$('#iconCarritoPrincipal').show();
						$('#cantidadProductos').show();
					}
					$('#cantidadProductos').html(cantidadProduc);
					$('#cantidadProductosMenuM').html(cantidadProduc);
					$('#cantPro').val(cantidadProduc);
	        	}else{
	        		var ped = '';
					$.ajax({
				        type: "GET",
				        url: 'ajax/crearSessionAjax.php',
				        data: {ped: ped},
				        success: function(data){	        		
				        	$('#llaveUnica').val(ped);
				    },

				    }).fail( function( jqXHR, textStatus, errorThrown ) {
						fallo(jqXHR, textStatus, errorThrown);
					});
	        	}
	    },

	    }).fail(function(jqXHR, textStatus, errorThrown){
	    	fallo(jqXHR, textStatus, errorThrown);
	    });
	}


	
	$("#contenedorProductos").on("click",".carrito",function(){//modal para agregar producto
		event.preventDefault();
		var valor = $('#llaveUnica').val();
		$('#contenidoProductoC').html('');
		var n = $(this).attr('id');
		n = n.split('_');
		n = n[1];		
		var idItem = $('#idItem_'+n).val();
		var nombreItem = $('#nombreItem_'+n).val();
		$('#myModalLabel').html(nombreItem);
		

		$.ajax({
	        type: "GET",
	        url: 'http://'+ip+'/virtualmax/ventaOnlineV2/ajax/agregarProducCAjax.php',
	        data: {idItem: idItem, nombreItem: nombreItem, nitUsuario: nitUsuario, valor: valor, ip: ip},
	        success: function(data){
	           $('#contenidoProductoC').html(data);
	    },

	    }).fail( function(jqXHR, textStatus, errorThrown){
	    	fallo(jqXHR, textStatus, errorThrown);
	    });

	});

	

	$('#btnAgregar').click(function(){
		if($('#total-items').val() > 0){
			if (ancho <= 1007){
				$('#iconCarritoPrincipalMenuM').show();
				$('#cantidadProductosMenuM').show();
			}else{
				$('#iconCarritoPrincipal').show();
				$('#cantidadProductos').show();
			}

			$('#btnAgregar').hide();
			$('#cargando').show();
			var idItem = $('#idItem').val();
			var cantidadP = $('#total-items').val();
			var nombreProduc = $('#itemDescripcion').val();
			var laboratorio = $('#itemLaboratorio').val();
			var factor = $('#itemFactor').val();
			var unidadesCaja = $('#unidadesCaja').val();
			var blister = $('#blister').val();
			var disponible = $('#disponible').val();
			var llaveUnica = $('#llaveUnica').val();//toma el valor del campo de llave unica
			if (llaveUnica === ''){				

				$.ajax({//crea cotizacion y añade producto
			        type: "GET",
			        url: 'http://'+ip+'/virtualmax/ventaOnlineV2/ajax/creaCotizacionAjax.php',
			        data: {nitUsuario: nitUsuario, idItem: idItem, cantidadP: cantidadP, nombreProduc: nombreProduc, laboratorio: laboratorio, factor: factor, unidadesCaja: unidadesCaja, blister: blister, disponible: disponible},
			        dataType: "json",
			        success: function(data){
			        	var	mensaje = (data.mensaje1);
			        	if (mensaje == 'error'){//valida si la consulta se ejecuta exitosamente
			        		
			        		//inicio alerta			        		
			        		alerta('error','Error al guardar producto','top-end',3000);			        		
							//fin alerta
							
			        	}else{
			        		
			        		//inicio alerta
			        		alerta('success','Exito al guardar producto','top-end',3000);
							//fin alerta							
														
			       			$.ajax({
						        type: "GET",
						        url: 'http://www.mediqboy.com/inicio/shop/ajax/crearSessionAjax.php',
						        data: {ped: mensaje},
						        success: function(data){										        		
						        	$('#llaveUnica').val(mensaje);

						        	$.ajax({//consulta si el pedido exixte o si no se a finalizado
								        type: "GET",
								        url: 'http://'+ip+'/virtualmax/ventaOnlineV2/ajax/consultaInfoPedidoAjax.php',
								        data: {valor: mensaje},
								        dataType: "json",
								        success: function(data){
								        	var resultado = data.estado;						        
								        	var	cantidadProduc = resultado['cantidadProduc'];
											$('#cantPro').val(cantidadProduc);
											$('#cantidadProductos').html(cantidadProduc);
											$('#cantidadProductosMenuM').html(cantidadProduc);
								    	},

								    }).fail(function(jqXHR, textStatus, errorThrown){
								    	fallo(jqXHR, textStatus, errorThrown);
								    });
						    	},

						    }).fail( function( jqXHR, textStatus, errorThrown ) {
								fallo(jqXHR, textStatus, errorThrown);
							});
			        	}
			        	$('#cargando').hide();//oculta boton cargando en modal producto
						$('#btnAgregar').show();//muestra boton guardar
			    	},

			    }).fail( function(jqXHR, textStatus, errorThrown){
			    	fallo(jqXHR, textStatus, errorThrown);
			    });
			}else{

				$.ajax({//consulta si el producto ya existe dentro del pedido
			        type: "GET",
			        url: 'http://'+ip+'/virtualmax/ventaOnlineV2/ajax/consultaProductoExistePedidoAjax.php',
			        data: {valor: llaveUnica, idItem: idItem},
			        dataType: "json",
			        success: function(data){
			        	var resultado = (data.respuesta);
			        	if (resultado == 'Existe') {
			        		$.ajax({//actualiza cantidad de producto
						        type: "GET",
						        url: 'http://'+ip+'/virtualmax/ventaOnlineV2/ajax/actualizaCantidaProducAjax.php',
						        data: {valor: llaveUnica, idItem: idItem, cantidadP: cantidadP},
						        dataType: "json",
						        success: function(data){
						        	var resultadoUpdate = (data.respuesta);
						        	if (resultadoUpdate == 'Exito') {
						        		alerta('success','Exito al guardar producto','top-end',3000);
						        	}else{
						        		alerta('error','Error al guardar producto','top-end',3000);	
						        	}
						        	$('#cargando').hide();//oculta boton cargando en modal producto
									$('#btnAgregar').show();//muestra boton guardar
						    	},

						    }).fail(function(jqXHR, textStatus, errorThrown){
						    	fallo(jqXHR, textStatus, errorThrown);
						    });
			        	}else{
			        		$.ajax({//añade producto
						        type: "GET",
						        url: 'http://'+ip+'/virtualmax/ventaOnlineV2/ajax/insertaProductoPedidoAjax.php',
						        data: {idItem: idItem, cantidadP: cantidadP, nombreProduc: nombreProduc, laboratorio: laboratorio, factor: factor, unidadesCaja: unidadesCaja, blister: blister, disponible: disponible, llaveUnica: llaveUnica},
						        dataType: "json",
						        success: function(data){
						        	var	mensaje = (data.mensaje1);
						        	if (mensaje == 'error'){
						        		//inicio alerta
						        		alerta('error','Error al guardar producto','top-end',3000);			        		
										//fin alerta
						        	}else{			        		
						        		//inicio alerta
						        		alerta('success','Exito al guardar producto','top-end',3000);			        		
										//fin alerta
										$.ajax({//consulta cantidad productos
									        type: "GET",
									        url: 'http://'+ip+'/virtualmax/ventaOnlineV2/ajax/consultaInfoPedidoAjax.php',
									        data: {valor: llaveUnica},
									        dataType: "json",
									        success: function(data){
									        	var resultado = data.estado;						        
									        	var	cantidadProduc = resultado['cantidadProduc'];
												$('#cantPro').val(cantidadProduc);
												$('#cantidadProductos').html(cantidadProduc);
												$('#cantidadProductosMenuM').html(cantidadProduc);
									    	},

									    }).fail(function(jqXHR, textStatus, errorThrown){
									    	fallo(jqXHR, textStatus, errorThrown);
									    });
						        	}
						        	$('#cargando').hide();//oculta boton cargando en modal producto
									$('#btnAgregar').show();//muestra boton guardar
						    },

						    }).fail( function(jqXHR, textStatus, errorThrown){
						    	fallo(jqXHR, textStatus, errorThrown);
						    });
			        	}
			    	},

			    }).fail(function(jqXHR, textStatus, errorThrown){
			    	fallo(jqXHR, textStatus, errorThrown);
			    });
				
				
			}			
		}
	});	

	$('#iconCarritoPrincipal').hover(function(){//carrito con pantallas grandes
		$('#ventanaCarrito').show();		
		var idPedido = $('#llaveUnica').val();		

		$.ajax({
	        type: "GET",
	        url: 'http://'+ip+'/virtualmax/ventaOnlineV2/ajax/productosCarritoVenAjax.php',
	        data: {idPedido: idPedido, nitUsuario: nitUsuario, ip: ip},
	        success: function(data){
	           $('#contenidoVentanaCarrito').html(data);	           
	    	},

	    }).fail( function(jqXHR, textStatus, errorThrown){
	    	fallo(jqXHR, textStatus, errorThrown);
	    });
	});

	$('#iconCarritoPrincipalMenuM').hover(function(){//carrito para menu movil
		$('#ventanaCarritoMenuM').show();
		var idPedido = $('#llaveUnica').val();		

		$.ajax({
	        type: "GET",
	        url: 'http://'+ip+'/virtualmax/ventaOnlineV2/ajax/productosCarritoVenAjax.php',
	        data: {idPedido: idPedido, nitUsuario: nitUsuario, ip: ip},
	        success: function(data){
	           $('#contenidoVentanaCarritoMenuM').html(data);	           
	    	},

	    }).fail( function(jqXHR, textStatus, errorThrown){
	    	fallo(jqXHR, textStatus, errorThrown);
	    });
	});

	$('#cerrarVenta').click(function(){
		$('#ventanaCarrito').hide();
	});

	$('#cerrarVentaMenuM').click(function(){
		$('#ventanaCarritoMenuM').hide();
	});



	

});
