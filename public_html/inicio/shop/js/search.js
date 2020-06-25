$(function(){
	var ip = $('#ipServidor').val();
	var nitUsuario = $('#nitUsuario').val();
	var categoria = $('#pagina').val();
	$('#spinner').hide();

	$('#itemBuscar').click(function(){//limpia el campo de busqueda
		$('#itemBuscar').val('');
	});
	
	$('#itemBuscar').keypress(function(e){//si consulñta con la tecla enter
        if(e.which == 13){      
          buscarProductos();
        }
    });

	$('#buscar').click(function(){//si consulta dando click en boton
		buscarProductos();
	});

	function buscarProductos(){
		var textBuscar = $('#itemBuscar').val();		
		if(textBuscar != '' && textBuscar.length > 2){
			$('#myCarousel').hide();
			$('#buscar').hide();
			$('#spinner').show();
			$.ajax({
		        type: "GET",
		        url: 'http://'+ip+'/virtualmax/ventaOnlineV2/ajax/buscarProductoAjax.php',		        
		        data: {textBuscar: textBuscar, nitUsuario: nitUsuario, ip: ip, categoria: categoria},
		        success: function(data){
					$('#spinner').hide();
					$('#buscar').show();
		          	$('#contenedorProductos').html(data);
		    },

		    }).fail( function(jqXHR, textStatus, errorThrown){
		    	fallo(jqXHR, textStatus, errorThrown);
		    });
		}
	}
});
