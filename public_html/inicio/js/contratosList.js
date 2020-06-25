$(function(){
	
	var nombre_usuario = encodeURIComponent($("#nombre_usuario").val());
	var ip = $("#ip").val();
	var nit_usuario = $("#nit_usuario").val();
    var estado=1;
	var url="http://"+ip+"/virtualmax/ventaonline/ajax/listaContratosAjax.php?nombre_usuario="+nombre_usuario+"&nit_usuario="+nit_usuario+"&estado="+estado;	
	$("#resultContratos").load(url);

});