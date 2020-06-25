$(function(){
	var ip =  $('#ipServidor').val();


	$('#btnCambioClave').on("click",function(){
		$('#formClave').show();
		$('#tablaDatos').hide();
		$('#btnCambioClave').hide();		
	});

	
	$('#btnModalUser').on("click",function(){
		$('#formClave').hide();
		$('#tablaDatos').show();		
		$('#btnCambioClave').show();		
		//$('#myModalLoginUser').modal('show');		
	});

	$('#btnNuevaclave').on('click', function(){//cklic boton guardar nueva contraseña
		var nit=$('#nit').val();
		var newPass=$('#newPass').val();
		var confiNewPass=$('#confiNewPass').val();

		if (newPass==confiNewPass && newPass!='' && confiNewPass!=''){
			$.ajax({
		        type: "GET",
		        url: 'http://'+ip+'/mediqboy/ajax/actualizarPassAjax.php',
		        data: {newPass: newPass,nit: nit},
		        success: function(data){		            
		            $('#msg').show();
		            $('#msg').html(data);
		            alerta("success","Clave Actualizada con éxito","bottom-end",3000);
		    },

		    }).fail( function( jqXHR, textStatus, errorThrown ) {
				fallo(jqXHR, textStatus, errorThrown);
				alerta("error","Error al cambio de contraseña","bottom-end",3000);
			});	
		}else{
			alerta("error","Diligenciar datos del formulario","top-end",3000);
		}
	});
	


});