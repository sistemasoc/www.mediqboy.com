<!DOCTYPE html>
<html>
  	<head>
	    <title>Compra Online</title>
	    <meta name="keywords" content="">
		<meta name="description" content="">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		
		<link rel="icon" type="image/png" href="../images/favicon.ico">
		
	    <!--main file-->
		<link href="../css/medical-guide.css" rel="stylesheet" type="text/css">
	    
	    <!--Medical Guide Icons-->
		<link href="../fonts/medical-guide-icons.css" rel="stylesheet" type="text/css">
		
		<!-- Default Color-->
		<link href="../css/default-color.css" rel="stylesheet" id="color"  type="text/css">
	    
	    <!--bootstrap-->
		
		<link href="../../librerias/libreriasEstilos.php
		" rel="stylesheet" type="text/css">
	    
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

	</head>


	

<body>

 <div class="container">
<?php
	  			#vista contenido de vista de productos 
	  			//include('../vistas/buscar.php');
	  			//include('vistas/vistaRegistro.php');
	  			//include('../vistas/vistaContenidoP.php');
                
	  		?>
	   
    <div class="signup-form-container">
    	<?php 
    		include('../modelos/validar.php');
    	 ?>
    
         <!-- form start -->
         <form name="frmPrueba" method="post" action="../modelos/validar.php">
         <!--<form role="form" id="register-form" autocomplete="off">-->
         
         <div class="form-header">
          <h3 class="form-title"><i class="fa fa-user"></i>Registrate</h3>
                      
         <div class="pull-right">
             <h3 class="form-title"><span class=""></span></h3>
         </div>
                      
         </div>
         
         <div class="form-body">
              <div class="row">                     
            <div class="form-group col-lg-6">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="icon icon-user-tie"></span></div>
                   <input type="text" name="usuario" id="usu" class="form-control" placeholder="Usuario">
                   </div>
                   
              </div>
                        
              <div class="form-group col-lg-6">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                   <input type="email" name="correo" id="correo" class="form-control" placeholder="Correo">
                   </div> 
                   <span class="help-block" id="error"></span>                     
              </div>
                     </div>   
              <div class="row">
                        
                   <div class="form-group col-lg-6">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="icon icon-key"></span></div>
                        <input type="text" name="password" id="pass" class="form-control" placeholder="Contraseña">
                        </div>  
                        <span class="help-block" id="error"></span>                    
                   </div>
                            
                   <div class="form-group col-lg-6">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="icon icon-phone"></span></div>
                        <input type="tel" name="telefono" id="tele" class="form-control" placeholder="Telefono">
                        </div>  
                        <span class="help-block" id="error"></span>                    
                   </div>
                            
             </div>
                        
                        
            </div>
            
            <div class="form-footer">
            	<span class="icon icon-paperplane">
                 <input type="submit" name="enviar" value="Enviar" class="btn btn-info">
                 
                 </input></span>
            </div>


            </form>
            
           </div>

 </div>
    
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="assets/jquery-1.11.2.min.js"></script>
<script src="assets/jquery.validate.min.js"></script>

<!-- javascript/jquery validations will be here  -->
<script src="../js/register.js"></script>
<script src="../../js/jquery-ui-1.10.3.custom.js"></script>

</body>


</div>





<!--
<div class="woocommerce-info"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
		¿Soy Cliente? </font></font><a href="" id="#registro" class="showlogin"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Haga clic aquí para ingresar</font></font></a>	</div>




<div id="registro">
	<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Si ya ha comprado con nosotros, ingrese sus datos a continuación. </font><font style="vertical-align: inherit;">Si es un cliente nuevo, vaya a la sección Facturación y envío.</font></font></p>
	
</div>

-->