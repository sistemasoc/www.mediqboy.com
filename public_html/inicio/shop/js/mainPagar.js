$(function(){

	$('.pagarPedioCa').click(function(){		
		$('#ventanaCarrito').hide();
		var totalProduc = $('#totalProduc').val();
/*
		$.ajax({
	        type: "GET",
	        url: 'vistas/vistaCarrito.php',
	        data: {totalProduc},
	        success: function(data){		            	            	        
	           $('#contenedorPrincipal').html(data);
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
		});*/
	});
});