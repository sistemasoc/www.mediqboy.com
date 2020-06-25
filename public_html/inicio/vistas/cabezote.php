 <!--Start Header-->
<?php

if(isset($_REQUEST['men'])){
    $menu=$_REQUEST['men'];
}else $menu=1;

?>
   
   <header class="header">
		<div class="container">
   		
   		
        <div class="row">
        	<?php
                if ($menu == 8) {
            ?>
                    <div class="col-md-1">
                    	<a href="index.html" class="logo"><img src="<?php echo SERVERURLGLOBAL;?>images/logo.png" alt=""></a>
                        <?php
                            if ($menu == 8) {//carrito en menu movil
                        ?>                                                            
                                <input type="hidden" name="cantPro" id="cantPro" value="">
                                <i class="fa fa-shopping-cart fa-2x pulse-button dropdown-toggle text-danger" id="iconCarritoPrincipalMenuM" aria-hidden="true" style="float: right; margin-right: 55px; margin-top: 50px;"></i>

                                <div class="col-md-6 col-sm-10 col-xs-10 dropdown open iconCarrito">
                                  <button class="btn btn-secondary dropdown-toggle dropdownMenu3"
                                          type="button" data-toggle="dropdown"
                                          aria-haspopup="false" aria-expanded="false">
                                    Dropdown
                                  </button>
                                  
                                  <div class="col-md-12 dropdown-menu" id="ventanaCarritoMenuM" style="margin-top: 0px;">
                                    <h4 class="dropdown-header text-center col-sm-10 col-xs-10"><strong>Resumen de Compra</strong></h4>
                                    <i class="fa fa-window-close-o fa-2x text-danger  col-sm-1 col-xs-1" id="cerrarVentaMenuM" style="cursor: pointer; margin-left: 9px;" title="Click para cerrar ventana de carrito"></i>
                                    
                                    <div class="col-md-12 col-sm-12 col-xs-12" id="contenidoVentanaCarritoMenuM">

                                        

                                    </div>
                                  </div>
                                </div>                            
                        <?php
                            }
                        ?>                        
                    </div>
                    
                    <div class="col-md-11">                        
            <?php
                }else{
            ?>
                    <div class="col-md-3">
                        <a href="index.html" class="logo"><img src="../images/logo.png" alt=""></a>
                    </div>
                    
                    <div class="col-md-9">
            <?php
                }
            ?>
            	
                
                <nav class="menu-2">
            	<ul class="nav wtf-menu">
                	<li class="<?php if($menu==1){echo 'item-select'; } ?> parent"><a href="<?php echo SERVERURLGLOBAL;?>">Inicio</a></li>
					
                    <li class="<?php if($menu==2){echo 'item-select'; } ?> parent">
                        <a href="#.">Nosotros</a>
    					<ul class="submenu">
                            <li> <a href="<?php echo SERVERURLGLOBAL;?>about-us2.php?men=2">Misión</a> </li>
                            <li> <a href="<?php echo SERVERURLGLOBAL;?>about-us2.php?men=2">Visión</a> </li>
                            <li> <a href="<?php echo SERVERURLGLOBAL;?>about-us2.php?men=2">Objetivo social</a> </li>
    					</ul>
					</li>
					
                                        				
                    <li class="<?php if($menu==8){echo 'item-select';} ?> parent">
                        <a href="<?php echo SERVERURL;?>?categoria=principalShop&men=8" >
                            <i class="icon-price-tags"></i>&nbsp; Categorias
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo SERVERURL;?>?categoria=promocion&men=8">
                                    <i class="icon-price-tags"></i>&nbsp;&nbspPromoción
                                </a>
                            </li>  
                            
                            <?php
                                if ($_SESSION['nit_usuario'] != '') {                                            
                            ?>
                                    <li class="parent">
                                        <a href="#">Medicamentos</a> <i class="icon-chevron-small-right"></i>
                                        <ul class="submenu">
                                            <li> <a href="<?php echo SERVERURL;?>?categoria=controlados&men=8">Controlados</a> </li>
                                            <li> <a href="<?php echo SERVERURL;?>?categoria=genericos&men=8">Genericos</a> </li>
                                            <li> <a href="<?php echo SERVERURL;?>?categoria=liquidos&men=8">Liquidos</a> </li>
                                            <li> <a href="<?php echo SERVERURL;?>?categoria=maarcaRegistrada&men=8">Marca Registrada</a></li>
                                        </ul>
                                    </li>
                            <?php
                                }
                            ?>
                            
                            <li class="parent"> <a href="#">Dispositivos M.Quirurgicos</a> <i class="icon-chevron-small-right"></i>
                                <ul class="submenu">
                                    <li> <a href="<?php echo SERVERURL;?>?categoria=medicoquirurgicos&men=8">Medicoquirurgicos</a> </li>
                                    <li> <a href="<?php echo SERVERURL;?>?categoria=otrosMq&men=8">Otros M.Q</a> </li>
                                    <li> <a href="<?php echo SERVERURL;?>?categoria=suturas&men=8">Suturas</a> </li>
                                </ul>
                            </li>
                            
                            <?php
                                if ($_SESSION['nit_usuario'] != '') {                                            
                            ?>
                                    <li class="parent"> <a href="#">Resolucion</a> <i class="icon-chevron-small-right"></i>
                                        <ul class="submenu">
                                            <li> <a href="<?php echo SERVERURL;?>?categoria=controladosResolucion&men=8">Controlados Resolucion</a> </li>
                                            <li> <a href="<?php echo SERVERURL;?>?categoria=genericosResolucion&men=8">Genericos Resolucion</a> </li>
                                            <li> <a href="<?php echo SERVERURL;?>?categoria=marcaResolucion&men=8">Marca Resolucion</a> </li>
                                        </ul>
                                    </li>
                            <?php
                                }
                            ?>
                            
                            <li>
                                <a href="<?php echo SERVERURL;?>?categoria=odontologicos&men=8">Odontologicos</a>
                            </li>                            
                            
                            <li>
                                <a href="<?php echo SERVERURL;?>?categoria=laboratorio&men=8">Laboratorio</a>
                            </li>
                            
                        </ul>
                    </li>
					
                    <li class="<?php if($menu==4){echo 'item-select'; } ?> parent">
                        <a href="<?php echo SERVERURLGLOBAL;?>inicioClientes.php?men=4">Clientes</a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo SERVERURLGLOBAL;?>FORMATO DE CREACIÓN DE CLIENTES 2018.pdf" target="_blank" rel="noopener" title="Formato de privacidad de datos">Formato clientes</a>
                            </li>
                        </ul>
                    </li>

                   
                    
                    <li class="<?php if($menu==6){echo 'item-select'; } ?> parent <?php if ($menu==8){echo "hidden";} ?>" >
                        <a href="<?php echo SERVERURLGLOBAL;?>inicioProveedores.php?men=6" rel="noopener">Proveedores</a>
                    </li>
                    
                    <li class="parent"><a href="#.">Empleo</a>
                        <ul class="submenu">
                            <li> <a href="../../empleo/index.php?company=1" target="_blank" rel="noopener">Mediqboy</a> </li>
                            <li> <a href="../../empleo/index.php?company=2" target="_blank" rel="noopener">Mi Farmacia</a> </li>
                            <li> <a href="../../empleo/index.php?company=3" target="_blank" rel="noopener">Club el Llano</a> </li>                            
                        </ul>
                    </li>

					<li class="<?php if($menu==3){echo 'item-select'; } ?>  parent"><a href="#.">Contacto</a>
					<ul class="submenu">
                        <li> <a href="<?php echo SERVERURLGLOBAL;?>contact-us2.php?men=3">Contáctenos</a> </li>                        
                        <li> <a href="<?php echo SERVERURLGLOBAL;?>contact-us2.php?men=3">Directorio</a> </li>                        
					</ul>
					
                    </li>
                    
                    <li class="<?php if($menu==5){echo 'item-select'; } ?> <?php if ($menu==8){echo "hidden";} ?>">
                        <a href="<?php echo SERVERURLGLOBAL;?>gallery-simple-two.php?men=5" >Galeria</a>
                    </li>
                                            

                    <?php
                        if ($menu == 8) {
                    ?>
                            <li class="text-danger" id="iconCarritoPrincipal">
                                <i class="fa fa-shopping-cart fa-2x pulse-button dropdown-toggle" aria-hidden="true"></i>
                            </li>

                            <span class="label label-success pulse-button" id="cantidadProductos"></span>
                            <input type="hidden" name="cantPro" id="cantPro" value="">


                           <div class=" col-md-6 dropdown open iconCarrito" style="float: right;" >
                              <button class="btn btn-secondary dropdown-toggle dropdownMenu3"
                                      type="button" data-toggle="dropdown"
                                      aria-haspopup="false" aria-expanded="false">
                                Dropdown
                              </button>
                              
                              <div class="col-md-12 dropdown-menu" id="ventanaCarrito">
                                <h4 class="dropdown-header text-center col-sm-10"><strong>Resumen de Compra</strong></h4>
                                <i class="fa fa-window-close-o fa-2x text-danger  col-md-1" id="cerrarVenta" style="cursor: pointer; margin-left: 4px;" title="Click para cerrar ventana de carrito"></i>
                                
                                <div class="col-md-12" id="contenidoVentanaCarrito">

                                    

                                </div>
                              </div>
                            </div>
                                
                    <?php
                        }
                    ?>
                    
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
   
   <!--End Header-->


   <style type="text/css" media="screen">            
        .pulse-button {                
          -webkit-animation: pulse 1.25s infinite cubic-bezier(0.66, 0, 0, 1);
          -moz-animation: pulse 1.25s infinite cubic-bezier(0.66, 0, 0, 1);
          -ms-animation: pulse 1.25s infinite cubic-bezier(0.66, 0, 0, 1);
          animation: pulse 1.25s infinite cubic-bezier(0.66, 0, 0, 1);
        }
        .pulse-button:hover 
        {
          -webkit-animation: none;-moz-animation: none;-ms-animation: none;animation: none;
        }
    </style>