<?php
	session_start();
	$pedido = $_GET['ped'];
	if ($pedido == 'fin') {
		unset($_SESSION['numeroPedido']);
	}else{		
		$_SESSION['numeroPedido'] = $pedido;
	}
?>