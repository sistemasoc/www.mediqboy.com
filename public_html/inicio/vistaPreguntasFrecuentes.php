<!DOCTYPE html>
<html>
    <head>
        <title>Mediqboy-Preguntas-Frecuentes</title>
        <meta name="keywords" content="">
	    <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<?php include("librerias/libreriasEstilos.php"); ?>
		<link rel="stylesheet" href="librerias/AdminLTE.css" />
        <link rel="stylesheet" href="librerias/font-awesome/css/font-awesome.min.css" />        
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
                                    <h2>Preguntas Frecuentes</h2>
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
                            
            <!--End Banner-->
        
            <?php
                //Preguntas Frecuentes
				include('vistas/vistaPreguntas.php');
            ?>
        
            <?php 
                //footer
                include 'vistas/footer.php';
            ?> 

        </div>
    
        <a href="#0" class="cd-top"></a>

        <!--End Content-->
	   <?php include("librerias/libreriasScripts.php"); ?>
	   <script src="librerias/adminlte.min.js"></script>

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

    </body>
</html>