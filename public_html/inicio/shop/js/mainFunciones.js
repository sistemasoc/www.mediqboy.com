//$(function(){

	function fallo(jqXHR, textStatus, errorThrown){
		if (jqXHR.status === 0) {
		    $("#btnSpinerConsultaUsuario").hide();
			$("#btnConsultaUsuario").show();
			alert('Verifique la red.');
		} else if (jqXHR.status == 404) {
			alert('Requested page not found [404]');
		} else if (jqXHR.status == 500) {
		    alert('Internal Server Error [500].');
		} else if (textStatus === 'parsererror') {
		    alert('Requested JSON parse failed.');
		} else if (textStatus === 'timeout') {
		    alert('Time out error.');
		} else if (textStatus === 'abort') {
		    alert('Ajax request aborted.');
		} else {
		    alert('Uncaught Error: ' + jqXHR.responseText);
		}
	}

	function alerta(tipo,mensaje,posicion,tiempo){
		const Toast = Swal.mixin({
		  toast: true,
		  position: posicion,
		  showConfirmButton: false,
		  timer: tiempo,
		  onOpen: (toast) => {
		    toast.addEventListener('mouseenter', Swal.stopTimer)
		    toast.addEventListener('mouseleave', Swal.resumeTimer)
		  }
		});

		Toast.fire({
		  icon: tipo,
		  title: mensaje
		});
	}

	function alertaConfirmarEliminacion(titulo, mensajeOk, mensajeError, url, botonMostar,datosEnviar,campoEliminar,idPedido){
		Swal.fire({
			title: titulo,
		  	text: "No podrás revertir esto!",
		  	icon: 'warning',
		  	showCancelButton: true,
		  	confirmButtonColor: '#3085d6',
		  	cancelButtonColor: '#d33',
		  	confirmButtonText: 'Confirmar',
		  	cancelButtonText: 'Cancelar'
		}).then((result) => {
			if (result.value) {
				$.ajax({
			        type: "GET",
			        url: url,
			        data: {datosEnviar: datosEnviar, idPedido: idPedido},
			        dataType: "json",
			        success: function(data){
					  	var resultado = data.respuesta;
						var	eliminaProductoPedido = resultado['eliminaProductoPedido'];
						var	eliminaPedido = resultado['eliminaPedido'];
						var	cantidadProductos = resultado['cantidadProductos'];
						
			           	if (eliminaProductoPedido == 0) {
			           		alerta('error',mensajeError,'top-end',3000);
			           	}else{			           		
							if (eliminaPedido == 1) {//pedido eliminado
								var ped = 'fin';
								$.ajax({
									type: "GET",
									url: '../ajax/creaSessionesVariablesGAjax.php',
									data: {ped: ped},									
									success: function(data){
										location.reload();
									},

								}).fail( function( jqXHR, textStatus, errorThrown ) {
									fallo(jqXHR, textStatus, errorThrown);
								});
							}else{
								alerta('success',mensajeOk,'top-end',3000);
								$('#cantidadProductos').html(cantidadProductos);
								$('#cantidadProductosMenuM').html(cantidadProductos);
								$(campoEliminar).remove();
							}
			           	}
			    	},

			    }).fail( function( jqXHR, textStatus, errorThrown ) {
					fallo(jqXHR, textStatus, errorThrown);
				});
			}else{
				alerta('error','Oprimio cancelar','top-end',3000);
				$(botonMostar).show();
			}
		});
	}

	function alertaN(mensaje){
		Swal.fire({
		  title: mensaje,
		  showClass: {
		    popup: 'animated fadeInDown faster'
		  },
		  hideClass: {
		    popup: 'animated fadeOutUp faster'
		  }
		})
	}
//})