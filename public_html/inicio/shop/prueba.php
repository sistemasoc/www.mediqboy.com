<?php
	include('controladores/conexion.php');
	/*$sql="SELECT nombreFuncionario
		  FROM funcionarios";*/
	$stmt = conexionPDO::conectar('oclaeconomia')->prepare($sql);
	//$stmt -> execute();
	//print_r($stmt -> fetchAll());
?>