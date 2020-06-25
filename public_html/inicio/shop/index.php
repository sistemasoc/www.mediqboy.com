<?php
	session_start();
	include('../dao/conexion.php');
	include('controladores/seguridadControlador.php');
	include('controladores/ciudadClienteControlador.php');
	include('controladores/registroIngresoPagControlador.php');
	include('modelos/productosModelo.php');		
	include("../php/config.php");
	
	if(!$_SESSION['ip']){
		//consultas BD pagina web para identificar IP Activa
		$consultaIpActiva = modeloProductos::mdlActivaIps();
		$_SESSION['ip']  = $consultaIpActiva[0]['direccionIp'];
	}
	
	$nitUsuario = controladorSeguridad::encode_this($_SESSION['nit_usuario']);	
	if ($_SERVER['REMOTE_ADDR'] != '181.225.100.117') {
		controladorIngresoPagina::ctrPrincipalIngrePag();
	}

	
?>
<!DOCTYPE html>
<html>
  	<head>
	    <title>Compra Online</title>
	    <meta name="keywords" content="">
		<meta name="description" content="">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

		<link rel="icon" type="image/png" href="../images/favicon.ico">

		<!--zoom-->
		<link rel="stylesheet" type="text/css" href="../css/cssImagenZoom.css">

		<!--Cintas-->
		<link rel="stylesheet" type="text/css" href="../css/cintasCss.css">

	    <!--main file-->
		<link href="../css/medical-guide.css?v=2" rel="stylesheet" type="text/css">

	    <!--Medical Guide Icons-->
	    <link rel="stylesheet" type="text/css" href="../librerias/font-awesome/css/font-awesome.min.css">
		<link href="../fonts/medical-guide-icons.css" rel="stylesheet" type="text/css">

		<!-- Default Color-->
		<link href="../css/default-color.css?v=2" rel="stylesheet" id="color"  type="text/css">

	    <!--bootstrap-->

		<link href="../css/bootstrap.css" rel="stylesheet" type="text/css">

	    <!--Dropmenu-->
		<link href="../css/dropmenu.css" rel="stylesheet" type="text/css">

		<!--Sticky Header-->
		<link href="../css/sticky-header.css" rel="stylesheet" type="text/css">
			<!--FancyBox-->
	    <link rel="stylesheet" type="text/css" href="../css/jquery.fancybox.css">

		<!--revolution-->
		<link href="../css/style.css" rel="stylesheet" type="text/css">
	    <link href="../css/settings.css" rel="stylesheet" type="text/css">
	    <link href="../css/extralayers.css" rel="stylesheet" type="text/css">

	    <!--Accordion-->
	    <link href="../css/accordion.css" rel="stylesheet" type="text/css">

	    <!--tabs-->
		<link href="../css/tabs.css" rel="stylesheet" type="text/css">

	    <!--Owl Carousel-->
		<link href="../css/owl.carousel.css" rel="stylesheet" type="text/css">

	    <!-- Mobile Menu -->
		<link rel="stylesheet" type="text/css" href="../css/jquery.mmenu.all.css" />
		<link rel="stylesheet" type="text/css" href="../css/demo.css" />

		<!--PreLoader-->
		<link href="../css/loader.css" rel="stylesheet" type="text/css">

		<link href="../css/loader.css" rel="stylesheet" type="text/css">

		<!--switcher-->
		<link href="../css/switcher.css" rel="stylesheet" type="text/css">
		<script type="text/javascript" src="../js/jquery.js"></script>
		<script type="text/javascript" src="../librerias/bootstrap/dist/js/bootstrap.min.js"></script>

		<!--alertas-->
	    <script type="text/javascript" src="../librerias/package/dist/sweetalert2.all.min.js"></script>
	    <link rel="stylesheet" type="text/css" href="../librerias/package/dist/sweetalert2.css"/>	    
		<!--Fin alertas-->
		
	</head>
  	<body>
  		<input type="hidden" id="ipServidor" value="<?php echo $_SESSION['ip'] ?>">
  	  	<div id="wrap">
	   	<!--Start PreLoader-->
	   	<div id="preloader">
			<div id="status">&nbsp;</div>
			<div class="loader">
				<h1>Cargando...</h1>
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
		<!--End PreLoader-->
	<?php
		if(isset($_REQUEST['men'])){
		    $men=$_REQUEST['men'];
		}else $men=1;
		//Barra superior
		include '../vistas/barraSuperior.php';
		//cabezote
		include '../vistas/cabezote.php';
		//menu movil
		include '../vistas/movilMenuInicio.php';


	?>

	<?php
		$producto = 1;
    ?>
	 	<input type="hidden" name="llaveUnica" id="llaveUnica" value="<?php echo $_SESSION['numeroPedido'];?>">
	 	<input type="hidden" name="nitUsuario" id="nitUsuario" value="<?php echo $nitUsuario;?>">
	 	<div class="container" id="contenedorPrincipal">
			 
			  <?php
			  
				$pagina = $_GET['categoria'];//para saber que categoria de producto escoje el cliente 
				include('vistas/buscar.php');//vista de cuadro de texto de buscar productos 
				
				if ($pagina  == 'principalShop' || $pagina == 'promocion') {
					include('vistas/vistaPrincipalShop.php');
				}else{  				
  					include('vistas/vistaContenidoP.php');
				}
				
				include('vistas/vistaModalProducto.php');
	  		?>
	 		<input type="hidden" name="pagina" id="pagina" value="<?php echo $pagina;?>">
	   	</div>
	   	<!--End Content-->
	   	<!--Start Footer-->
	    <?php	    
            if ($menu == 8) { 
                include 'vistas/modalClienteLogin.php';
            }        
                
	       include 'vistas/vistaFooter.php';
	    ?>
	  	</div>
	  	<div id="jsP">
			
		</div>
		<a href="#0" class="cd-top"></a>
		<!-- SMOOTH SCROLL -->
		<script type="text/javascript" src="../js/scroll-desktop.js"></script>
		<script type="text/javascript" src="../js/scroll-desktop-smooth.js"></script>
		<!-- Date Picker and input hover -->
		<script type="text/javascript" src="../js/classie.js"></script>
		<script type="text/javascript" src="../js/jquery-ui-1.10.3.custom.js"></script>
		<!-- Welcome Tabs -->
		<script type="text/javascript" src="../js/tabs.js"></script>
		<!-- All Carousel -->
		<script type="text/javascript" src="../js/owl.carousel.js"></script>
		<!-- All Scripts -->
		<script type="text/javascript" src="../js/price-slider.js"></script>
		<script>
			(function () {
				"use strict";
				/* ------------------------------------------------------------------------
									   RANGE SLIDER [price filter]
				------------------------------------------------------------------------ */
				jQuery( "#slider-range" ).slider({
				range: true,
				min: 24781,
				max: 50000,
				values: [ 28781,45000],
				slide: function( event, ui ) {
					jQuery( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
				},
				stop: function(event, ui) {
				   jQuery( "#sort_price_max" ).val(ui.values[ 1 ] );
				   jQuery( "#sort_price_min" ).val(ui.values[ 0 ] );
				}
				});
				jQuery( "#amount" ).val( "$" + jQuery( "#slider-range" ).slider( "values", 0 ) +
				" - $" + jQuery( "#slider-range" ).slider( "values", 1 ) );
			})(jQuery);
		</script>
		<!-- Mobile Menu -->
		<script type="text/javascript" src="../js/jquery.mmenu.min.all.js"></script>
		<!-- All Scripts -->
		<script type="text/javascript" src="../js/custom.js"></script>
		<script src="js/mainFunciones.js?v4"></script>
		<script src="js/mainAgregarProducC.js?v=10"></script>		
		<script src="js/mainListaP.js?v4"></script><!-- busca productos aleatorios de vistaPrincipalShop -->
		<script src="js/search.js?v7"></script>
		<script src="js/mainPagar.js?v3"></script>
		<script src="js/mainEliminaPC.js?v4"></script>
		<script src="js/mainCajaProduc.js?v4"></script>

	    <!-- BEGIN JIVOSITE CODE {//literal} chat jivo -->
		<script type='text/javascript'>
			(function(){ var widget_id = 'q2O1NVyPBt';var d=document;var w=window;function l(){
			  var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true;
			  s.src = '//code.jivosite.com/script/widget/'+widget_id
			    ; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}
			  if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}
			  else{w.addEventListener('load',l,false);}}})();
		</script>


	</body>
</html>
