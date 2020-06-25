<!DOCTYPE html>
<html>
  <head>
    <title>Compra Online</title>
    <meta name="keywords" content="">
	<meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<?php include('librerias/libreriasEstilos.php');?> 

</head>
  <body>

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

	include 'vistas/barraSuperior.php';
	include 'shop/vistas/vistaRegistro.php';



?>
<?php 


if(isset($_REQUEST['men'])){
    $men=$_REQUEST['men'];
}else $men=1;

?>
   
   <header class="header">

		<div class="container">
   		
   		
        <div class="row">
        	
            <div class="col-md-3">

            	<a href="index.html" class="logo"><img src="images/logo.png" alt=""></a>
            </div>
            
            <div class="col-md-9">
            	
                
                <nav class="menu-2">
            	<ul class="nav wtf-menu">

                	<!--<li class="<?php //if($men==1){echo 'item-select'; } ?> parent"><a href="../">Inicio</a></li>-->
                	
					<div class="btn-carrito" data-toggle="modal" data-target="#myModal">

                          <i class="icon-shopping-cart" ></i>
                         <!-- <span class="label label-warning">10</span> -->
                    </div>
                    <li class="<?php if($men==2){echo 'item-select'; } ?> parent"><a href="#.">Nosotros</a>
    					<ul class="submenu">
                            <li> <a href="about-us2.php?men=2">Misión</a> </li>
                            <li> <a href="about-us2.php?men=2">Visión</a> </li>
                            <li> <a href="about-us2.php?men=2">Objetivo social</a> </li>
    					</ul>
					</li>
					 <li class="<?php if($men==7){echo 'item-select';} ?>"><a href="#shop.php?men=7" >Productos</a>
                        
                        <ul class="submenu">
                        <li class="parent"> <a href="#">Promoción</a>
                        <li class="parent"> <a href="#">Medicamentos</a> <i class="icon-chevron-small-right"></i> 
                             <ul class="submenu">
                                    <li> <a href="#gallery-simple-two.html">Controlados</a> </li>
                                    <li> <a href="#gallery-simple-three.html">Genericos</a> </li>
                                    <li> <a href="#gallery-simple-four.html">Liquidos</a> </li>
                                    <li> <a href="#gallery-simple-four.html">Marca Registrada</a></li>
                             </ul>  
                        </li>
                        
                        <li class="parent"> <a href="#">Dispositivos M.Quirurgicos</a> <i class="icon-chevron-small-right"></i> 
                             <ul class="submenu">
                                    <li> <a href="#gallery-nimble-two.html">Medicoquirurgicos</a> </li>
                                    <li> <a href="#gallery-nimble-three.html">Otros M.Q</a> </li>
                                    <li> <a href="#gallery-nimble-four.html">Suturas</a> </li>
                             </ul>  
                        </li>
                         <li class="parent"> <a href="#">Resolucion</a> <i class="icon-chevron-small-right"></i> 
                             <ul class="submenu">
                                    <li> <a href="#gallery-nimble-two.html">Controlados Resolucion</a> </li>
                                    <li> <a href="#gallery-nimble-three.html">Genericos Resolucion</a> </li>
                                    <li> <a href="#gallery-nimble-four.html">Marca Resolucion</a> </li>
                             </ul>  
                        </li>
                         <li class="parent"> <a href="#">Odontologicos</a>
                         </li>
                        <li class="parent"> <a href="#">Laboratorio</a>
                         </li>
                         </li>
                     </ul>
                    					                    					                                									
                    <li class="<?php if($men==4){echo 'item-select'; } ?> parent"><a href="inicioClientes.php?men=4" rel="noopener">Clientes</a></li>
                    <li class="<?php if($men==6){echo 'item-select'; } ?> parent"><a href="inicioProveedores.php?men=6" rel="noopener">Proveedores</a></li>
                    
                    <li class="parent"><a href="#.">Empleo</a>
                        <ul class="submenu">
                            <li> <a href="../../empleo/index.php?company=1" target="_blank" rel="noopener">Mediqboy</a> </li>
                            <li> <a href="../../empleo/index.php?company=2" target="_blank" rel="noopener">Mi Farmacia</a> </li>
                            <li> <a href="../../empleo/index.php?company=3" target="_blank" rel="noopener">Club el Llano</a> </li>                            
                        </ul>
                    </li>

					<li class="<?php if($men==3){echo 'item-select'; } ?>  parent"><a href="#.">Contacto</a>
					<ul class="submenu">
                        <li> <a href="contact-us2.php?men=3">Contáctenos</a> </li>                        
                        <li> <a href="contact-us2.php?men=3">Directorio</a> </li>                        
					</ul>
					</li>
                    <li class="<?php if($men==5){echo 'item-select'; } ?>"><a href="gallery-simple-two.php?men=5" >Galería</a></li>                                                              
                 </li>                                                      
                        </ul>                                                        	              
                </nav>
                	
            </div>
            
        </div>
        
        
		</div>	
   
</header>


    <!-- BEGIN JIVOSITE CODE {literal} chat jivo -->
<script type='text/javascript'>
(function(){ var widget_id = 'q2O1NVyPBt';var d=document;var w=window;function l(){
  var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true;
  s.src = '//code.jivosite.com/script/widget/'+widget_id
    ; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}
  if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}
  else{w.addEventListener('load',l,false);}}})();
</script>
<!-- {/literal} END JIVOSITE CODE  chat jivo--> 
   


	


 <!--main file-->

    <?php
	//Cabezote
  	//include 'vistas/cabezote.php';	
	//menu movil inicio
	include 'vistas/movilMenuInicio.php';
    ?>

 
    
   
	
 <div class="container">   
  
   <!--Start Content-->
   <div class="content"> 

  <div class="services-content">
   		     	        		         
            <div class="row">
					<div class="col-md-12">
						<ul class="shop clearfix list-unstyled">
							<li>
								<div class="product">
									<div class="product-thumb">
										<a><img class="imagen" src="images/1.jpg" alt=""></a>
									</div>
									<div  class="caja product-description clearfix">
										<h3><a href="shop-detail.html">CARBONATO DE CALCIO 1500MG (OROCAL TAB MASTICABLE) TAB CJA X 300/UND *EPS 
										</a></h3>
										<div class="carro">
											<a  href="#." class="product-cart-btn pull-left"><i class="icon-shopping-cart"></i>Añadir al carro</a>
										</div>																
									</div>
								</div>
							</li>
							<li>
								<div class="product">
									<div class="product-thumb">										
										<a><img class="imagen" src="images/prueba.jpg" alt=""></a>
									</div>
									<div class=" caja product-description clearfix">
										<h3><a href="shop-detail.html">CARBONATO DE CALCIO 1500MG (OROCAL TAB MASTICABLE) TAB CJA X 300/UND *EPS  </a></h3>
										<a href="#." class="carro product-cart-btn pull-left"><i class="icon-shopping-cart"></i>Añadir al carro</a>										
									</div>
								</div>
							</li>
							<li>
								<div class="product">
									<div class="product-thumb">
										<a><img class="imagen" src="images/130001.jpg" alt=""></a>
									</div>
									<div class="caja product-description clearfix">
										<h3><a href="shop-detail.html">CARBONATO DE CALCIO 1500MG (OROCAL TAB MASTICABLE) TAB CJA X 300/UND *EPS</a></h3>						
										<a href="#." class="carro product-cart-btn pull-left"><i class="icon-shopping-cart"></i>Añadir al carro</a>
										
									</div>
								</div>
							</li>
							<li>
								<div class="product">
									<div class="product-thumb">
										<a><img class="imagen" src="images/133008.jpg" alt=""></a>
									</div>
									<div class="caja product-description clearfix">
										<h3><a href="shop-detail.html">CARBONATO DE CALCIO 1500MG (OROCAL TAB MASTICABLE) TAB CJA X 300/UND *EPS</a></h3>
										
										<a href="#." class="carro product-cart-btn pull-left"><i class="icon-shopping-cart"></i> Añadir al carro</a>
										
									</div>
								</div>
							</li>
							<li>
								<div class="product">
									<div class="product-thumb">
										<a><img class="imagen" src="images/133015.jpg" alt=""></a>
									</div>
									<div class="caja product-description clearfix">
										<h3><a href="shop-detail.html">CARBONATO DE CALCIO 1500MG (OROCAL TAB MASTICABLE) TAB CJA X 300/UND *EPS</a></h3>
										
										<a href="#." class="carro product-cart-btn pull-left"><i class="icon-shopping-cart"></i> Añadir al carro</a>
										
									</div>
								</div>
							</li>
							<li>
								<div class="product">
									<div class="product-thumb">
										<a><img class="imagen" src="images/133015.jpg" alt=""></a>
									</div>
									<div class="caja product-description clearfix">
										<h3><a href="shop-detail.html">CARBONATO DE CALCIO 1500MG (OROCAL TAB MASTICABLE) TAB CJA X 300/UND *EPS</a></h3>
										
										<a href="#." class="carro product-cart-btn pull-left"><i class="icon-shopping-cart"></i> Añadir al carro</a>
										
									</div>
								</div>
							</li>
							<li>
								<div class="product">
									<div class="product-thumb">
										<a><img class="imagen" src="images/133015.jpg" alt=""></a>
									</div>
									<div class="caja product-description clearfix">
										<h3><a href="shop-detail.html">CARBONATO DE CALCIO 1500MG (OROCAL TAB MASTICABLE) TAB CJA X 300/UND *EPS</a></h3>
										
										<a href="#." class="carro product-cart-btn pull-left"><i class="icon-shopping-cart"></i> Añadir al carro</a>
										
									</div>
								</div>
							</li>
							<li>
								<div class="product">
									<div class="product-thumb">
										<a><img class="imagen" src="images/133015.jpg" alt=""></a>
									</div>
									<div class="caja product-description clearfix">
										<h3><a href="shop-detail.html">CARBONATO DE CALCIO 1500MG (OROCAL TAB MASTICABLE) TAB CJA X 300/UND *EPS</a></h3>
										
										<a href="#." class="carro product-cart-btn pull-left"><i class="icon-shopping-cart"></i> Añadir al carro</a>
										
									</div>
								</div>
							</li>
							<li>
								<div class="product">
									<div class="product-thumb">
										<a><img class="imagen" src="images/133015.jpg" alt=""></a>
									</div>
									<div class="caja product-description clearfix">
										<h3><a href="shop-detail.html">CARBONATO DE CALCIO 1500MG (OROCAL TAB MASTICABLE) TAB CJA X 300/UND *EPS</a></h3>
										
										<a href="#." class="carro product-cart-btn pull-left"><i class="icon-shopping-cart"></i> Añadir al carro</a>
										
									</div>
								</div>
							</li>
							<li>
								<div class="product">
									<div class="product-thumb">
										<a><img class="imagen" src="images/133015.jpg" alt=""></a>
									</div>
									<div class="caja product-description clearfix">
										<h3><a href="shop-detail.html">CARBONATO DE CALCIO 1500MG (OROCAL TAB MASTICABLE) TAB CJA X 300/UND *EPS</a></h3>
										
										<a href="#." class="carro product-cart-btn pull-left"><i class="icon-shopping-cart"></i> Añadir al carro</a>
										
									</div>
								</div>
							</li>
							<li>
								<div class="product">
									<div class="product-thumb">
										<a><img class="imagen" src="images/133015.jpg" alt=""></a>
									</div>
									<div class="caja product-description clearfix">
										<h3><a href="shop-detail.html">CARBONATO DE CALCIO 1500MG (OROCAL TAB MASTICABLE) TAB CJA X 300/UND *EPS</a></h3>
										
										<a href="#." class="carro product-cart-btn pull-left"><i class="icon-shopping-cart"></i> Añadir al carro</a>
										
									</div>
								</div>
							</li>
							<li>
								<div class="product">
									<div class="product-thumb">
										<a><img class="imagen" src="images/133015.jpg" alt=""></a>
									</div>
									<div class="caja product-description clearfix">
										<h3><a href="shop-detail.html">CARBONATO DE CALCIO 1500MG (OROCAL TAB MASTICABLE) TAB CJA X 300/UND *EPS</a></h3>
										
										<a href="#." class="carro product-cart-btn pull-left"><i class="icon-shopping-cart"></i> Añadir al carro</a>
										
									</div>
								</div>
							</li>
							<li>
								<div class="product">
									<div class="product-thumb">
										<a><img class="imagen" src="images/133015.jpg" alt=""></a>
									</div>
									<div class="caja product-description clearfix">
										<h3><a href="shop-detail.html">CARBONATO DE CALCIO 1500MG (OROCAL TAB MASTICABLE) TAB CJA X 300/UND *EPS</a></h3>
										
										<a href="#." class="carro product-cart-btn pull-left"><i class="icon-shopping-cart"></i> Añadir al carro</a>
										
									</div>
								</div>
							</li>
							<li>
								<div class="product">
									<div class="product-thumb">
										<a><img class="imagen" src="images/prueba.jpg" alt=""></a>
									</div>
									<div class="caja product-description clearfix">
										<h3><a href="shop-detail.html">CARBONATO DE CALCIO 1500MG (OROCAL TAB MASTICABLE) TAB CJA X 300/UND *EPS</a></h3>
										
										<a href="#." class="carro product-cart-btn pull-left"><i class="icon-shopping-cart"></i> Añadir al carro</a>
										
									</div>
								</div>
							</li>
							<li>
								<div class="product">
									<div class="product-thumb">
										
										<a><img class="imagen" src="images/130001.jpg" alt=""></a>
									</div>
									<div class="caja product-description clearfix">
										<h3><a href="shop-detail.html">CARBONATO DE CALCIO 1500MG (OROCAL TAB MASTICABLE) TAB CJA X 300/UND *EPS</a></h3>
										
										<a href="#." class="carro product-cart-btn pull-left"><i class="icon-shopping-cart"></i> Añadir al carro</a>
										
									</div>
								</div>
							</li>
							<li>
								<div class="product">
									<div class="product-thumb">
										<a><img class="imagen" src="images/prueba.jpg" alt=""></a>
									</div>
									<div class="caja product-description clearfix">
										<h3><a href="shop-detail.html">CARBONATO DE CALCIO 1500MG (OROCAL TAB MASTICABLE) TAB CJA X 300/UND *EPS</a></h3>
										
										<a href="#." class=" carro product-cart-btn pull-left"><i class="icon-shopping-cart"></i> Añadir al carro</a>
										
									</div>
								</div>
							</li>
							<li>
								<div class="product">
									<div class="product-thumb">
										<a><img class="imagen" src="images/prueba.jpg" alt=""></a>
									</div>
									<div class="caja product-description clearfix">
										<h3><a href="shop-detail.html">CARBONATO DE CALCIO 1500MG (OROCAL TAB MASTICABLE) TAB CJA X 300/UND *EPS 8</a></h3>
										
										<a href="#." class="carro product-cart-btn pull-left"><i class="icon-shopping-cart"></i>AÑADIR</a>
										
									</div>
									<li>
								<div class="product">
									<div class="product-thumb">
										<a><img class="imagen" src="images/133015.jpg" alt=""></a>
									</div>
									<div class="caja product-description clearfix">
										<h3><a href="shop-detail.html">CARBONATO DE CALCIO 1500MG (OROCAL TAB MASTICABLE) TAB CJA X 300/UND *EPS</a></h3>
										
										<a href="#." class="carro product-cart-btn pull-left"><i class="icon-shopping-cart"></i> Añadir al carro</a>
										
									</div>
								</div>
							</li>
							<li>
								<div class="product">
									<div class="product-thumb">
										<a><img class="imagen" src="images/133015.jpg" alt=""></a>
									</div>
									<div class="caja product-description clearfix">
										<h3><a href="shop-detail.html">CARBONATO DE CALCIO 1500MG (OROCAL TAB MASTICABLE) TAB CJA X 300/UND *EPS</a></h3>
										
										<a href="#." class="carro product-cart-btn pull-left"><i class="icon-shopping-cart"></i> Añadir al carro</a>
										
									</div>
								</div>
							</li>
							<li>
								<div class="product">
									<div class="product-thumb">
										<a><img class="imagen" src="images/133015.jpg" alt=""></a>
									</div>
									<div class="caja product-description clearfix">
										<h3><a href="shop-detail.html">CARBONATO DE CALCIO 1500MG (OROCAL TAB MASTICABLE) TAB CJA X 300/UND *EPS</a></h3>
										
										<a href="#." class="carro product-cart-btn pull-left"><i class="icon-shopping-cart"></i> Añadir al carro</a>
										
									</div>
								</div>
							</li>
							<li>
								<div class="product">
									<div class="product-thumb">
										<a><img class="imagen" src="images/133015.jpg" alt=""></a>
									</div>
									<div class="caja product-description clearfix">
										<h3><a href="shop-detail.html">CARBONATO DE CALCIO 1500MG (OROCAL TAB MASTICABLE) TAB CJA X 300/UND *EPS</a></h3>
										
										<a href="#." class="carro product-cart-btn pull-left"><i class="icon-shopping-cart"></i> Añadir al carro</a>
										
									</div>
								</div>
							</li>
							<li>
								<div class="product">
									<div class="product-thumb">
										<a><img class="imagen" src="images/133015.jpg" alt=""></a>
									</div>
									<div class="caja product-description clearfix">
										<h3><a href="shop-detail.html">CARBONATO DE CALCIO 1500MG (OROCAL TAB MASTICABLE) TAB CJA X 300/UND *EPS</a></h3>
										
										<a href="#." class="carro product-cart-btn pull-left"><i class="icon-shopping-cart"></i> Añadir al carro</a>
										
									</div>
								</div>
							</li>
							<li>
								<div class="product">
									<div class="product-thumb">
										<a><img class="imagen" src="images/133015.jpg" alt=""></a>
									</div>
									<div class="caja product-description clearfix">
										<h3><a href="shop-detail.html">CARBONATO DE CALCIO 1500MG (OROCAL TAB MASTICABLE) TAB CJA X 300/UND *EPS</a></h3>
										
										<a href="#." class="carro product-cart-btn pull-left"><i class="icon-shopping-cart"></i> Añadir al carro</a>
										
									</div>
								</div>
							</li>
							<li>
								<div class="product">
									<div class="product-thumb">
										<a><img class="imagen" src="images/133015.jpg" alt=""></a>
									</div>
									<div class="caja product-description clearfix">
										<h3><a href="shop-detail.html">CARBONATO DE CALCIO 1500MG (OROCAL TAB MASTICABLE) TAB CJA X 300/UND *EPS</a></h3>				
										<a href="#." class="carro product-cart-btn pull-left"><i class="icon-shopping-cart"></i> Añadir al carro</a>
										
									</div>
								</div>
							</li>
								<li>
								<div class="product">
									<div class="product-thumb">
										<a><img class="imagen" src="images/133015.jpg" alt=""></a>
									</div>
									<div class="caja product-description clearfix">
										<h3><a href="shop-detail.html">CARBONATO DE CALCIO 1500MG (OROCAL TAB MASTICABLE) TAB CJA X 300/UND *EPS</a></h3>				
										<a href="#." class="carro product-cart-btn pull-left"><i class="icon-shopping-cart"></i> Añadir al carro</a>
										
									</div>
								</div>
							</li>
								<li>
								<div class="product">
									<div class="product-thumb">
										<a><img class="imagen" src="images/133015.jpg" alt=""></a>
									</div>
									<div class="caja product-description clearfix">
										<h3><a href="shop-detail.html">CARBONATO DE CALCIO 1500MG (OROCAL TAB MASTICABLE) TAB CJA X 300/UND *EPS</a></h3>				
										<a href="#." class="carro product-cart-btn pull-left"><i class="icon-shopping-cart"></i> Añadir al carro</a>
										
									</div>
								</div>
							</li>
								<li>
								<div class="product">
									<div class="product-thumb">
										<a><img class="imagen" src="images/133015.jpg" alt=""></a>
									</div>
									<div class="caja product-description clearfix">
										<h3><a href="shop-detail.html">CARBONATO DE CALCIO 1500MG (OROCAL TAB MASTICABLE) TAB CJA X 300/UND *EPS</a></h3>				
										<a href="#." class="carro product-cart-btn pull-left"><i class="icon-shopping-cart"></i> Añadir al carro</a>
										
									</div>
								</div>
							</li>
								<li>
								<div class="product">
									<div class="product-thumb">
										<a><img class="imagen" src="images/133015.jpg" alt=""></a>
									</div>
									<div class="caja product-description clearfix">
										<h3><a href="shop-detail.html">CARBONATO DE CALCIO 1500MG (OROCAL TAB MASTICABLE) TAB CJA X 300/UND *EPS</a></h3>				
										<a href="#." class="carro product-cart-btn pull-left"><i class="icon-shopping-cart"></i> Añadir al carro</a>
										
									</div>
								</div>
							</li>
								<li>
								<div class="product">
									<div class="product-thumb">
										<a><img class="imagen" src="images/133015.jpg" alt=""></a>
									</div>
									<div class="caja product-description clearfix">
										<h3><a href="shop-detail.html">CARBONATO DE CALCIO 1500MG (OROCAL TAB MASTICABLE) TAB CJA X 300/UND *EPS</a></h3>				
										<a href="#." class="carro product-cart-btn pull-left"><i class="icon-shopping-cart"></i> Añadir al carro</a>
										
									</div>
								</div>
							</li>
								<li>
								<div class="product">
									<div class="product-thumb">
										<a><img class="imagen" src="images/133015.jpg" alt=""></a>
									</div>
									<div class="caja product-description clearfix">
										<h3><a href="shop-detail.html">CARBONATO DE CALCIO 1500MG (OROCAL TAB MASTICABLE) TAB CJA X 300/UND *EPS</a></h3>				
										<a href="#." class="carro product-cart-btn pull-left"><i class="icon-shopping-cart"></i> Añadir al carro</a>
										
									</div>
								</div>
							</li>
								<li>
								<div class="product">
									<div class="product-thumb">
										<a><img class="imagen" src="images/133015.jpg" alt=""></a>
									</div>
									<div class="caja product-description clearfix">
										<h3><a href="shop-detail.html">CARBONATO DE CALCIO 1500MG (OROCAL TAB MASTICABLE) TAB CJA X 300/UND *EPS</a></h3>				
										<a href="#." class="carro product-cart-btn pull-left"><i class="icon-shopping-cart"></i> Añadir al carro</a>
										
									</div>
								</div>
							</li>
								<li>
								<div class="product">
									<div class="product-thumb">
										<a><img class="imagen" src="images/133015.jpg" alt=""></a>
									</div>
									<div class="caja product-description clearfix">
										<h3><a href="shop-detail.html">CARBONATO DE CALCIO 1500MG (OROCAL TAB MASTICABLE) TAB CJA X 300/UND *EPS</a></h3>				
										<a href="#." class="carro product-cart-btn pull-left"><i class="icon-shopping-cart"></i> Añadir al carro</a>
										
									</div>
								</div>
							</li>
								<li>
								<div class="product">
									<div class="product-thumb">
										<a><img class="imagen" src="images/133015.jpg" alt=""></a>
									</div>
									<div class="caja product-description clearfix">
										<h3><a href="shop-detail.html">CARBONATO DE CALCIO 1500MG (OROCAL TAB MASTICABLE) TAB CJA X 300/UND *EPS</a></h3>				
										<a href="#." class="carro product-cart-btn pull-left"><i class="icon-shopping-cart"></i> Añadir al carro</a>
										
									</div>
								</div>
							</li>
								<li>
								<div class="product">
									<div class="product-thumb">
										<a><img class="imagen" src="images/133015.jpg" alt=""></a>
									</div>
									<div class="caja product-description clearfix">
										<h3><a href="shop-detail.html">CARBONATO DE CALCIO 1500MG (OROCAL TAB MASTICABLE) TAB CJA X 300/UND *EPS</a></h3>				
										<a href="#." class="carro product-cart-btn pull-left"><i class="icon-shopping-cart"></i> Añadir al carro</a>
										
									</div>
								</div>
							</li>
								<li>
								<div class="product">
									<div class="product-thumb">
										<a><img class="imagen" src="images/133015.jpg" alt=""></a>
									</div>
									<div class="caja product-description clearfix">
										<h3><a href="shop-detail.html">CARBONATO DE CALCIO 1500MG (OROCAL TAB MASTICABLE) TAB CJA X 300/UND *EPS</a></h3>				
										<a href="#." class="carro product-cart-btn pull-left"><i class="icon-shopping-cart"></i> Añadir al carro</a>
										
									</div>
								</div>
							</li>
								<li>
								<div class="product">
									<div class="product-thumb">
										<a><img class="imagen" src="images/133015.jpg" alt=""></a>
									</div>
									<div class="caja product-description clearfix">
										<h3><a href="shop-detail.html">CARBONATO DE CALCIO 1500MG (OROCAL TAB MASTICABLE) TAB CJA X 300/UND *EPS</a></h3>				
										<a href="#." class="carro product-cart-btn pull-left"><i class="icon-shopping-cart"></i> Añadir al carro</a>
										
									</div>
								</div>
							</li>
								<li>
								<div class="product">
									<div class="product-thumb">
										<a><img class="imagen" src="images/133015.jpg" alt=""></a>
									</div>
									<div class="caja product-description clearfix">
										<h3><a href="shop-detail.html">CARBONATO DE CALCIO 1500MG (OROCAL TAB MASTICABLE) TAB CJA X 300/UND *EPS</a></h3>				
										<a href="#." class="carro product-cart-btn pull-left"><i class="icon-shopping-cart"></i> Añadir al carro</a>
										
									</div>
								</div>
							</li>
								<li>
								<div class="product">
									<div class="product-thumb">
										<a><img class="imagen" src="images/133015.jpg" alt=""></a>
									</div>
									<div class="caja product-description clearfix">
										<h3><a href="shop-detail.html">CARBONATO DE CALCIO 1500MG (OROCAL TAB MASTICABLE) TAB CJA X 300/UND *EPS</a></h3>				
										<a href="#." class="carro product-cart-btn pull-left"><i class="icon-shopping-cart"></i> Añadir al carro</a>
										
									</div>
								</div>
							</li>
								<li>
								<div class="product">
									<div class="product-thumb">
										<a><img class="imagen" src="images/133015.jpg" alt=""></a>
									</div>
									<div class="caja product-description clearfix">
										<h3><a href="shop-detail.html">CARBONATO DE CALCIO 1500MG (OROCAL TAB MASTICABLE) TAB CJA X 300/UND *EPS</a></h3>				
										<a href="#." class="carro product-cart-btn pull-left"><i class="icon-shopping-cart"></i> Añadir al carro</a>
										
									</div>
								</div>
							</li>
								<li>
								<div class="product">
									<div class="product-thumb">
										<a><img class="imagen" src="images/133015.jpg" alt=""></a>
									</div>
									<div class="caja product-description clearfix">
										<h3><a href="shop-detail.html">CARBONATO DE CALCIO 1500MG (OROCAL TAB MASTICABLE) TAB CJA X 300/UND *EPS</a></h3>				
										<a href="#." class="carro product-cart-btn pull-left"><i class="icon-shopping-cart"></i> Añadir al carro</a>
										
									</div>
								</div>
							</li>
								<li>
								<div class="product">
									<div class="product-thumb">
										<a><img class="imagen" src="images/133015.jpg" alt=""></a>
									</div>
									<div class="caja product-description clearfix">
										<h3><a href="shop-detail.html">CARBONATO DE CALCIO 1500MG (OROCAL TAB MASTICABLE) TAB CJA X 300/UND *EPS</a></h3>				
										<a href="#." class="carro product-cart-btn pull-left"><i class="icon-shopping-cart"></i> Añadir al carro</a>
										
									</div>
								</div>
							</li>
								<li>
								<div class="product">
									<div class="product-thumb">
										<a><img class="imagen" src="images/133015.jpg" alt=""></a>
									</div>
									<div class="caja product-description clearfix">
										<h3><a href="shop-detail.html">CARBONATO DE CALCIO 1500MG (OROCAL TAB MASTICABLE) TAB CJA X 300/UND *EPS</a></h3>				
										<a href="#." class="carro product-cart-btn pull-left"><i class="icon-shopping-cart"></i> Añadir al carro</a>
										
									</div>
								</div>
							</li>
								<li>
								<div class="product">
									<div class="product-thumb">
										<a><img class="imagen" src="images/133015.jpg" alt=""></a>
									</div>
									<div class="caja product-description clearfix">
										<h3><a href="shop-detail.html">CARBONATO DE CALCIO 1500MG (OROCAL TAB MASTICABLE) TAB CJA X 300/UND *EPS</a></h3>				
										<a href="#." class="carro product-cart-btn pull-left"><i class="icon-shopping-cart"></i> Añadir al carro</a>
										
									</div>
								</div>
							</li>
								<li>
								<div class="product">
									<div class="product-thumb">
										<a><img class="imagen" src="images/133015.jpg" alt=""></a>
									</div>
									<div class="caja product-description clearfix">
										<h3><a href="shop-detail.html">CARBONATO DE CALCIO 1500MG (OROCAL TAB MASTICABLE) TAB CJA X 300/UND *EPS</a></h3>				
										<a href="#." class="carro product-cart-btn pull-left"><i class="icon-shopping-cart"></i> Añadir al carro</a>
										
									</div>
								</div>
							</li>
								<li>
								<div class="product">
									<div class="product-thumb">
										<a><img class="imagen" src="images/133015.jpg" alt=""></a>
									</div>
									<div class="caja product-description clearfix">
										<h3><a href="shop-detail.html">CARBONATO DE CALCIO 1500MG (OROCAL TAB MASTICABLE) TAB CJA X 300/UND *EPS</a></h3>				
										<a href="#." class="carro product-cart-btn pull-left"><i class="icon-shopping-cart"></i> Añadir al carro</a>
										
									</div>
								</div>
							</li>
								<li>
								<div class="product">
									<div class="product-thumb">
										<a><img class="imagen" src="images/133015.jpg" alt=""></a>
									</div>
									<div class="caja product-description clearfix">
										<h3><a href="shop-detail.html">CARBONATO DE CALCIO 1500MG (OROCAL TAB MASTICABLE) TAB CJA X 300/UND *EPS</a></h3>				
										<a href="#." class="carro product-cart-btn pull-left"><i class="icon-shopping-cart"></i> Añadir al carro</a>
										
									</div>
								</div>
							</li>
								<li>
								<div class="product">
									<div class="product-thumb">
										<a><img class="imagen" src="images/133015.jpg" alt=""></a>
									</div>
									<div class="caja product-description clearfix">
										<h3><a href="shop-detail.html">CARBONATO DE CALCIO 1500MG (OROCAL TAB MASTICABLE) TAB CJA X 300/UND *EPS</a></h3>				
										<a href="#." class="carro product-cart-btn pull-left"><i class="icon-shopping-cart"></i> Añadir al carro</a>
										
									</div>
								</div>
							</li>
								<li>
								<div class="product">
									<div class="product-thumb">
										<a><img class="imagen" src="images/133015.jpg" alt=""></a>
									</div>
									<div class="caja product-description clearfix">
										<h3><a href="shop-detail.html">CARBONATO DE CALCIO 1500MG (OROCAL TAB MASTICABLE) TAB CJA X 300/UND *EPS</a></h3>				
										<a href="#." class="carro product-cart-btn pull-left"><i class="icon-shopping-cart"></i> Añadir al carro</a>
										
									</div>
								</div>
							</li>
								<li>
								<div class="product">
									<div class="product-thumb">
										<a><img class="imagen" src="images/133015.jpg" alt=""></a>
									</div>
									<div class="caja product-description clearfix">
										<h3><a href="shop-detail.html">CARBONATO DE CALCIO 1500MG (OROCAL TAB MASTICABLE) TAB CJA X 300/UND *EPS</a></h3>				
										<a href="#." class="carro product-cart-btn pull-left"><i class="icon-shopping-cart"></i> Añadir al carro</a>
										
									</div>
								</div>	
							</li>
								<li>
								<div class="product">
									<div class="product-thumb">
										<a><img class="imagen" src="images/133015.jpg" alt=""></a>
									</div>
									<div class="caja product-description clearfix">
										<h3><a href="shop-detail.html">CARBONATO DE CALCIO 1500MG (OROCAL TAB MASTICABLE) TAB CJA X 300/UND *EPS</a></h3>				
										<a href="#." class="carro product-cart-btn pull-left"><i class="icon-shopping-cart"></i> Añadir al carro</a>
										
									</div>
								</div>
							</li>
								</div>
							</li>
							
							</li>
						</ul>
					</div>

					
				</div>
				
				
				
             
            
        </div>
   </div>
  
   
   </div>
   <!--End Content-->
   
   
   
   
   <!--Start Footer-->
    <?php 
        //footer
       include 'vistas/footer.php';
    ?> 




  </div>
<a href="#0" class="cd-top"></a>



<script type="text/javascript" src="js/jquery.js"></script>

<!-- SMOOTH SCROLL -->	
<script type="text/javascript" src="js/scroll-desktop.js"></script>
<script type="text/javascript" src="js/scroll-desktop-smooth.js"></script>

<!-- Date Picker and input hover -->
<script type="text/javascript" src="js/classie.js"></script> 
<script type="text/javascript" src="js/jquery-ui-1.10.3.custom.js"></script>


<!-- Welcome Tabs -->	
<script type="text/javascript" src="js/tabs.js"></script>

<!-- All Carousel -->
<script type="text/javascript" src="js/owl.carousel.js"></script>

<!-- All Scripts -->
<script type="text/javascript" src="js/price-slider.js"></script> 

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
<script type="text/javascript" src="js/jquery.mmenu.min.all.js"></script>

<!-- All Scripts -->
<script type="text/javascript" src="js/custom.js"></script> 

</body>
</html>