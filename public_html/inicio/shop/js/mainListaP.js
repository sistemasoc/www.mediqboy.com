$(function(){
	var categoriaP = $('#pagina').val();
	var ip = $('#ipServidor').val();
	var nitUsuario = $('#nitUsuario').val();

	if (categoriaP != '') {
		$.ajax({
	        type: "GET",
	        url: 'http://'+ip+'/virtualmax/ventaOnlineV2/ajax/listaProductosAjax.php',
	        data: {categoriaP: categoriaP, nitUsuario: nitUsuario, ip: ip},
	        success: function(data){
	           $('#contenedorProductos').html(data);	           
	    },

	    }).fail( function(jqXHR, textStatus, errorThrown){
	    	fallo(jqXHR, textStatus, errorThrown);
	    });
	}

});