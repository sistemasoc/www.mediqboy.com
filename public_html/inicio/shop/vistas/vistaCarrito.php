<?php
	session_start();
	include('../../dao/conexion.php');
	include('../controladores/seguridadControlador.php');	
	include('../modelos/productosModelo.php');	
	if(!$_SESSION['ip']){
		//consultas BD pagina web para identificar IP Activa
		$consultaIpActiva = modeloProductos::mdlActivaIps();
		$_SESSION['ip']  = $consultaIpActiva[0]['direccionIp'];
	}

	if(!$_SESSION['numeroPedido']){
?>
		<script>
			location.href="http://www.mediqboy.com/inicio/shop/?categoria=principalShop&men=8";
		</script>
<?php
	}else{
		$idPedido = $_SESSION['numeroPedido'];
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
		
		<link rel="icon" type="image/png" href="../../images/favicon.ico">

		<!--zoom-->
		<link rel="stylesheet" type="text/css" href="../../css/cssImagenZoom.css">
		
	    <!--main file-->
		<link href="../../css/medical-guide.css" rel="stylesheet" type="text/css">
	    
	    <!--Medical Guide Icons-->
	    <link rel="stylesheet" type="text/css" href="../../librerias/font-awesome/css/font-awesome.min.css">
		<link href="../../fonts/medical-guide-icons.css" rel="stylesheet" type="text/css">
		
		<!-- Default Color-->
		<link href="../../css/default-color.css" rel="stylesheet" id="color"  type="text/css">
	    
	    <!--bootstrap-->
		
		<link href="../../css/bootstrap.css" rel="stylesheet" type="text/css">
	    
	    <!--Dropmenu-->
		<link href="../../css/dropmenu.css" rel="stylesheet" type="text/css">
	    
		<!--Sticky Header-->
		<link href="../../css/sticky-header.css" rel="stylesheet" type="text/css">
			<!--FancyBox-->
	    <link rel="stylesheet" type="text/css" href="../../css/jquery.fancybox.css">
		
		<!--revolution-->
		<link href="../../css/style.css" rel="stylesheet" type="text/css">    
	    <link href="../../css/settings.css" rel="stylesheet" type="text/css">    
	    <link href="../../css/extralayers.css" rel="stylesheet" type="text/css">    
	   
	    <!--Accordion-->
	    <link href="../../css/accordion.css" rel="stylesheet" type="text/css">
	     
	    <!--tabs-->
		<link href="../../css/tabs.css" rel="stylesheet" type="text/css">    
	   
	    <!--Owl Carousel-->
		<link href="../../css/owl.carousel.css" rel="stylesheet" type="text/css">    
		
	    <!-- Mobile Menu -->
		<link rel="stylesheet" type="text/css" href="../../css/jquery.mmenu.all.css" />
		<link rel="stylesheet" type="text/css" href="../../css/demo.css" />
		
		<!--PreLoader-->
		<link href="../../css/loader.css" rel="stylesheet" type="text/css">    

		<link href="../../css/loader.css" rel="stylesheet" type="text/css">  

		<!--switcher-->
		<link href="../../css/switcher.css" rel="stylesheet" type="text/css">	
		<script type="text/javascript" src="../../js/jquery.js"></script>
		<script type="text/javascript" src="../../librerias/bootstrap/dist/js/bootstrap.min.js"></script>
		
		<!--alertas-->
	    <script type="text/javascript" src="../../librerias/package/dist/sweetalert2.all.min.js"></script>
	    <link rel="stylesheet" type="text/css" href="../../librerias/package/dist/sweetalert2.css"/>	    
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
		//Barra superior
		include '../../vistas/barraSuperior.php';
		//cabezote
		include '../../vistas/cabezote.php';
		//menu movil
		include '../../vistas/movilMenuInicio.php';

		if(isset($_REQUEST['men'])){
		    $men=$_REQUEST['men'];
		}else $men=1;
		
	?>  
	    <!-- BEGIN JIVOSITE CODE {literal} chat jivo -->
		<script type='text/javascript'>
			(function(){ var widget_id = 'q2O1NVyPBt';var d=document;var w=window;function l(){
			  var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true;
			  s.src = '//code.jivosite.com/script/widget/'+widget_id
			    ; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}
			  if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}
			  else{w.addEventListener('load',l,false);}}})();
		</script>

	<?php
		$producto = 1;		
    ?>
    	<input type="hidden" name="idPedido" id="idPedido" value="<?php echo $idPedido; ?>">
	 	<div class="container" id="contenedorPagar">   
	  		<?php	  			
	  			include('vistaContenidoCarrito.php');
	  		?>	   
	   	</div>
	   	<!--End Content-->   
	   	<!--Start Footer-->
	    <?php	    	
  			include('vistaModalProducto.php');
            if ($menu == 8) { 
                include 'modalClienteLogin.php';
            } 
	       include 'vistaFooter.php';
	    ?>
	  	</div>
	  	<div id="jsP">
			
		</div>
		<a href="#0" class="cd-top"></a>		
		<!-- SMOOTH SCROLL -->	
		<script type="text/javascript" src="../../js/scroll-desktop.js"></script>
		<script type="text/javascript" src="../../js/scroll-desktop-smooth.js"></script>
		<!-- Date Picker and input hover -->
		<script type="text/javascript" src="../../js/classie.js"></script> 
		<script type="text/javascript" src="../../js/jquery-ui-1.10.3.custom.js"></script>
		<!-- Welcome Tabs -->	
		<script type="text/javascript" src="../../js/tabs.js"></script>
		<!-- All Carousel -->
		<script type="text/javascript" src="../../js/owl.carousel.js"></script>
		<!-- All Scripts -->
		<script type="text/javascript" src="../../js/price-slider.js"></script> 
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
		<script type="text/javascript" src="../../js/jquery.mmenu.min.all.js"></script>	
		<!-- All Scripts -->
		<script type="text/javascript" src="../../js/custom.js"></script>
		<script src="../js/mainFunciones.js?v4"></script>
		<script type="text/javascript" src="../js/mainCarrito.js?v=7"></script>
	</body>
</html>           