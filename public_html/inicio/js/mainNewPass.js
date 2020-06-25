$(function(){
	$('#guardar').on('click', function(){
		var nit=$('#nit').val();
		var newPass=$('#newPass').val();
		var confiNewPass=$('#confiNewPass').val();
		if (newPass==confiNewPass && newPass!='' && confiNewPass!=''){
			$.ajax({
		        type: "GET",
		        url: 'http://181.225.100.118/mediqboy/ajax/actualizarPassAjax.php',
		        data: {newPass: newPass,nit: nit},
		        success: function(data){		            
		            $('#msg').show();
		            $('#msg').html(data);
		    },

		    }).fail( function( jqXHR, textStatus, errorThrown ) {
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
			});	
		}else{
			alert('Porfavor verifique las contraseñas');
		}
	});

	$('#cerrar').on('click', function(){
		$('#msg').hide();
		$('#newPass').val('');
		$('#confiNewPass').val('');
		$('#guardar').show();
	});


	
});