$(function(){
	$('.registrarCorreo').hide();//oculta div de registrar correo en favoritos
	
	$("#contenidoProductoC").on("click",".less-item",function(){//para disminuir cantidad de producto		
		var cantidadT = $('#total-items').val();
		var blister = $('#blister').val();
		var cantidadDisponible = $('#cantidadDisponible').val();
		var totalPagar = $('#valorItem').val();
		var valor = $('#total-items').val();
		var cantidadTv2 = $('#total-items').val();
		console.log(blister);
		if (valor != valorInicial){
			if (cantidadTv2 != 0){
				if (blister > 1 ){
					var cantTotal = (parseInt(cantidadTv2) - parseInt(blister));
				}else{
					cantidadT--;
					var cantTotal =  cantidadT;
				}
				$('#total-items').val(cantTotal);
				//codigo q le resta al valor actual
				var valorActual = $('#valorActual').val();
				var valorInicial = $('#valorInicial').val();
				var totalP = (parseInt(valorInicial) * parseInt(cantTotal));
				$('#totalPagarItem').html('Total a Pagar: '+ new Intl.NumberFormat().format(totalP));
				$('#valorActual').val(totalP);
			}
		}
	});
	
	$("#contenidoProductoC").on("click",".pluss-item", function(){//para aumentar cantidad de producto 2
		var cantidadT = $('#total-items').val();	
		var blister = $('#blister').val();
		var cantidadDisponible = $('#cantidadDisponible').val();
		var totalPagar = $('#valorItem').val();		
		var cantidadTv2 = $('#total-items').val();
		console.log(blister);
		if (blister > 1 ){
			var cantTotal = (parseInt(cantidadTv2) + parseInt(blister));
		}else{
			cantidadT++;
			var cantTotal =  cantidadT;
		}

		$('#total-items').val(cantTotal);
		//codigo que aumenta el valor a medida que suma su cantidad		
		var valorInicial = $('#valorInicial').val();
		var totalPagarItem = $('#totalPagarItem').val();
		var totalP = (parseInt(valorInicial) * parseInt(cantTotal));
		$('#totalPagarItem').html('Total a Pagar: '+ new Intl.NumberFormat().format(totalP));
		$('#valorActual').val(totalP);
	});

	$("#contenidoProductoC").on("change","#total-items", function(){	
		var cantidaProducto = $('#total-items').val();
		var blister = $('#blister').val();
		var respDiviBlis = (cantidaProducto / blister);		
		if (Number.isInteger(respDiviBlis) != true) {
			alerta('error','Error factor de despacho por '+blister,'top-end',3000);
			$('#total-items').val(0);
		}
	});

	/*$('#btnAgregarFavoritos').click(function(){//agregar a favoritos
		$('#btnAgregarFavoritos').hide();
		$('.registrarCorreo').show();
	});

	$('#enviar').click(function(){//para guardar favoritos
		if ($('#E-mail').val() != ''){
			$('#btnAgregarFavoritos').show();
			$('.registrarCorreo').hide();
			$('#E-mail').val('');
		}
	});*/
});