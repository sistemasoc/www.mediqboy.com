<!DOCTYPE html>
<html>
  <head>
    <title>Mediqboy-Contáctenos</title>
    <meta name="keywords" content="">
	<meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<?php include("librerias/libreriasEstilos.php"); ?>
</head>
  <body>
    
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
    //Cabezote
    include 'vistas/cabezote.php';  
    //menu movil inicio
    include 'vistas/movilMenuInicio.php';
  ?>

	
   <!--Start Banner-->
   
   <div class="sub-banner">
   
   	<img class="banner-img" src="images/sub-banner.jpg" alt="">
    <div class="detail">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-12">
                	
                    <div class="paging">
                		<h2>Contáctenos</h2>
						<ul>
						<li><a href="index.html">Inicio</a></li>
						<li><a>Contáctenos</a></li>
						</ul>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
   
   </div>	
        
  <div class="contact-us">
   		<div class="container">
        	
            <div class="row">
            	<div class="col-md-12">
				
				<div class="our-location">
                    <div class="main-title">
                        <h2><span>Tunja, </span> Boyacá</h2>
                        <p>Nos ubicamos hacia el norte de la ciudad de Tunja, al frente de la Plaza de mercado del norte. </p>
                     </div>
				<div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4722.374490930111!2d-73.34719498060643!3d5.562900453004433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e6a7c72e8d9fe81%3A0xd198d775af40ab2e!2scompany+mediqboy+sas!5e0!3m2!1ses!2sco!4v1552571688671" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                    	<div class="get-directions">
                        	<form action="http://maps.google.com/maps" method="get" target="_blank">
                               <input type="text" name="saddr" placeholder="Ingrese su dirección" />
                               <input type="hidden" name="daddr" value="" />
                               <input type="submit" value="Get directions" class="direction-btn" />
                            </form>
                        </div>
                </div>
				
				</div>
            </div>
            
        </div>
		
		

   </div>
   <!--End Banner-->
   
    <?php
        //Directorio
        include 'vistas/directorio.php';
    ?>
   
   <!--Start Content-->
   <div class="content">
   

  
   
   </div>
   <!--End Content-->
   <?php include("librerias/libreriasScripts.php"); ?>
   
     <?php 
        //footer
        include 'vistas/footer.php';
    ?> 



  </div>
  
<a href="#0" class="cd-top"></a>





</body>
</html>