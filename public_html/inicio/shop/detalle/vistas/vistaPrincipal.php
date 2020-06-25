<?php
	session_start();
	include('../../dao/conexion.php');
	include('../modelos/productosModelo.php');	

	if(!$_SESSION['ip']){
		//consultas BD pagina web para identificar IP Activa
		$consultaIpActiva = modeloProductos::mdlActivaIps();
		$_SESSION['ip']  = $consultaIpActiva[0]['direccionIp'];
	}

	$nitUsuario = '';
	if(!$_SESSION['nitUsuario']){
		$nitUsuario=$_SESSION['nitUsuario'];
	}

	$codigoProducto = $_POST['codigoProducto'];
	$migaPan = $_POST['migaPan'];
		
?>
<!DOCTYPE html>
<html>
	
  <head>
    <title>Compra - Detalle</title>
    <meta name="keywords" content="">
	<meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
	<link rel="icon" type="image/png" href="../../images/favicon.ico">
	
    <!--main file-->
	<link href="../../css/medical-guide.css" rel="stylesheet" type="text/css">
	<!--zoom-->
	<link rel="stylesheet" type="text/css" href="../../css/cssImagenZoom.css">
    
	<!--Medical Guide Icons-->
	<link rel="stylesheet" type="text/css" href="../../librerias/font-awesome/css/font-awesome.min.css">
	<link href="../../fonts/medical-guide-icons.css" rel="stylesheet" type="text/css">
    
	<!-- Default Color-->
	<link href="../../css/default-color.css" rel="stylesheet" id="color"  type="text/css">

    <!--bootstrap-->
	<link href="../../css/bootstrap.css" rel="stylesheet" type="text/css">
    
    <!--Dropmenu-->
	<link href="../../css/dropmenu.css" rel="stylesheet" type="text/css">
	<!--FancyBox-->
	<link rel="stylesheet" type="text/css" href="../../css/jquery.fancybox.css">
    
	<!--Sticky Header-->
	<link href="../../css/sticky-header.css" rel="stylesheet" type="text/css">
	
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
	
	<!--alertas-->
	<script type="text/javascript" src="../../librerias/package/dist/sweetalert2.all.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../../librerias/package/dist/sweetalert2.css"/>	    
	<!--Fin alertas-->
	
	<link href="../../css/switcher.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="../../js/jquery.js"></script>
	<script type="text/javascript" src="../../librerias/bootstrap/dist/js/bootstrap.min.js"></script>
  
</head>
<body>
  	<input type="hidden" id="ipServidor" value="<?php echo $_SESSION['ip'] ?>">
  	<input type="hidden" id="nitUsuario" value="<?php echo $nitUsuario; ?>">
  	<input type="hidden" id="codigoProducto" value="<?php echo $codigoProducto; ?>">

  	<div id="wrap">
   
   	<!--Start PreLoader-->
   	<div id="preloader">
		<div id="status">&nbsp;</div>
		<div class="loader">
			<h1>Mediqboy, Cargando...</h1>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<!--End PreLoader-->


	<?php
		//Barra superior
		include '../../vistas/barraSuperior.php';
		include '../../vistas/cabezote.php';
		//menu movil
		include '../../vistas/movilMenuInicio.php';
	?>		
	

	
   <!--Start Banner-->   
   <div class="sub-banner">
   
   	<img class="banner-img" src="../../images/sub-banner.jpg" alt="">
    <div class="detail">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-12">
                	
                    <div class="paging">
                		<h2>Detalle Producto</h2>
						<ul>
						<li><a href="index.html">Inicio</a></li>
						<li><a href="../?categoria=<?php echo $migaPan;?>&men=8">Compra</a></li>
						<li><a>Detalle Producto</a></li>
						</ul>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
   
   </div>	
   
   <!--End Banner-->
   
    
   
   
   <div class="content">
   		<input type="hidden" id="ipServidor" value="<?php echo $_SESSION['ip'] ?>">
		<input type="hidden" name="llaveUnica" id="llaveUnica" value="<?php echo $_SESSION['numeroPedido'];?>">
		<input type="hidden" name="nitUsuario" id="nitUsuario" value="<?php echo $nitUsuario;?>">
  		<input type="hidden" id="codigoProducto" value="<?php echo $codigoProducto; ?>">
        
	  	<div class="services-content">
	   		<div class="container">
	        	
	        	<!--CArga Informacion detalle del item-->       
				<div id="contenedorProductos"></div>


				<!--Carga Familias del item-->       
				<div id="productoFamilias"></div>
		
				                        
	        </div>
	   	</div>
   
   </div>
   
      
	<?php	    
		
		include('../vistas/vistaModalProducto.php');
	    include '../vistas/vistaFooter.php';
	
	?>


	<a href="#0" class="cd-top"></a>
  </div>





<script type="text/javascript" src="../../js/jquery.js"></script>

<!-- SMOOTH SCROLL -->	
<script type="text/javascript" src="../../js/scroll-desktop.js"></script>
<script type="text/javascript" src="../../js/scroll-desktop-smooth.js"></script>

<!-- START REVOLUTION SLIDER -->	
<script type="text/javascript" src="../../js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="../../js/jquery.themepunch.tools.min.js"></script>


<!-- Date Picker and input hover -->
<script type="text/javascript" src="../../js/classie.js"></script> 
<script type="text/javascript" src="../../js/jquery-ui-1.10.3.custom.js"></script>


<!-- Welcome Tabs -->	
<script type="text/javascript" src="../../js/tabs.js"></script>


<!-- All Carousel -->
<script type="text/javascript" src="../../js/owl.carousel.js"></script>


<!-- Easy responsive tabs -->
<script type="text/javascript" src="../../js/easy-responsive-tabs.js"></script> 


<!-- RS slides -->
<script type="text/javascript" src="../../js/rs-slides.js"></script> 


<script>
(function () {
			"use strict";

			
			
			/* ------------------------------------------------------------------------ 
			   ADD REVIEW CUSTOM SCRIPT [open/close]
			------------------------------------------------------------------------ */
			jQuery("#add-review-btn").click(function(){
				jQuery("#add-review-form").slideDown();
			});
			jQuery("#review-form-close").click(function(){
				jQuery("#add-review-form").slideUp();
			});
			
			
			
			/* ------------------------------------------------------------------------ 
			   PRODUCT DETAIL
			------------------------------------------------------------------------ */
			jQuery("#product-detail-slider").responsiveSlides({
				maxwidth: 1000,
				timeout: 3E3,
				pager: true,
				speed: 700
			});
			/* ------------------------------------------------------------------------ 
			   VERTICAL TABS [with bordered nav]
			------------------------------------------------------------------------ */
			jQuery('.verticalTab').easyResponsiveTabs({
				type: 'vertical',
				width: 'auto',
				fit: true
			});
			
			
			/* ------------------------------------------------------------------------ 
			   ITEM COUNTER CUSTOM SCRIPT
			------------------------------------------------------------------------ */
			var itemcount= 0;

			$('#pluss-item').on("click", function() { 
				itemcount++;
				$('#total-items').val(itemcount);
				return false;
			});

			$('#less-item').on("click", function() { 
				itemcount--;
				$('#total-items').val(itemcount);
				return false;
			});
			
			$('.verticalTab').easyResponsiveTabs({
				type: 'vertical',
				width: 'auto',
				fit: true
			});
			
	
	
			})(jQuery);
</script>

<!-- Mobile Menu -->
<script type="text/javascript" src="../../js/jquery.mmenu.min.all.js"></script>

<!-- All Scripts -->
<script type="text/javascript" src="../../js/custom.js"></script>

<script src="../js/mainFunciones.js?v3"></script>
<script type="text/javascript" src="js/detalleItem.js?v=3"></script>
<script src="../js/mainAgregarProducC.js?v=10"></script>		
<script src="../js/mainPagar.js?v3"></script>
<script src="../js/mainEliminaPC.js?v4"></script>
<script src="../js/mainCajaProduc.js?v5"></script>

</body>
</html>