<?php
	session_start();
	$pedido = $_GET['ped'];
	if ($pedido == 'fin') {
		unset($_SESSION['numeroPedido']);
	}else{		
		echo $_SESSION['numeroPedido'] = $pedido;
	}
?>