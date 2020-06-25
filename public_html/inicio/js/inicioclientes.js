$(document).ready(function() {

	

	/*$('#pass_cliente').type = 'password';

	$('#pass_cliente').removeAttr('type');//eliminas el type que es "password"
	$('#pass_cliente').attr('type','password');//y agregar el type que es tipo text 
	*/

	$('#idRecuperar').on("click",function(){
		$('#divLogin').hide();
		$('#divRecuperar').show();
		$("#recuperar_form").show(); 
		$("#btnContinuar").hide(); 
		$("#id_clienteRecuperar").focus(); 
		
	});


	$('#btnContinuar').on("click",function(){//
		$('#divLogin').show();
		$('#divRecuperar').hide();
	});

	$("#notificacionNoticia").modal("show");
	$("#enlNoticia").on("click",function(){
		$("#notificacionNoticia").modal("hide");
	});

});