<?php
session_start();
if(!isset($_SESSION['nit_usuario'])){
  header('location: http://www.mediqboy.com/sistemas/logout/'); 
}
?>


<!DOCTYPE html>
<html>
  <head>
    <title>Servicios Clientes</title>
    <meta name="description" content="Mediqboy, comercializadora en Colombia de Medicamentos Calle 58 # 2-80 Barrio Santa Ana Tunja, Boyaca,  Correo:  oc.ventas@mediqboy.com" />

<meta name="keywords" content="Mediqboy, distribución de productos farmacéuticos, compra de productos farmaceuticos, farmaceuticos,  equipo médico, quirúrgico hospitalario, odontológico y laboratorio clínico, Boyaca, tunja, Boyacá" />
  <meta name="description" content="Distribuidor de Medicamentos, Odontologico y Laboratorio, Material Médico  " />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	



	<?php include('librerias/libreriasEstilos.php');?> 
<link href="../frameWorks/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  
  <style type="text/css">
    .colorIcono :hover{   background-color: #FE7776;}/*Color de botones al subir mouse */
    .colorIconoAyuda :hover{   background-color: #4A8BC8;}/*Color de botones al subir mouse */

  </style>

   
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
	
	<div class="container">
		<div class="time-table-sec">
			<ul id="accordion2" class="accordion2">
				<li>
					<ul class="submenu time-table">
						<li class="tit"><h5>Horario de trabajo</h5></li>
						<li><span class="day">Lunes - Viernes</span> <span class="divider">-</span> <span class="time">8 am - 6 pm</span></li>
						<li><span class="day">Sábado</span> <span class="divider">-</span> <span class="time">8 am - 1 pm</span></li>
					</ul>
					<div class="link"><img class="time-tab" src="images/timetable-menu-red.png" alt=""></div>
				</li>
			</ul>
		</div>
	</div>

	<?php 
		//Baner Contenedor
		//include 'vistas/bannerContenedor.php';	
  	?>  
	  
   
   <!--Start Make Appointment-->
   <div class="make-appointment">
   <div class="container">
   
    <ul id="accordion" class="accordion">
 
  
</ul>
    </div>
    </div>
   <!--End Make Appointment-->  
    
    
   
   <!--Start Content-->
   <div class="content">
   
   	<?php
   		//Servicios
		//include 'vistas/servicios.php';

		//Bienvenida
		//include 'vistas/bienvenida.php';


   	?>
   
<div class="contact-us">
  

   <div class="services-one dark-back">
      <div class="container">
      
                                    
        <div class="col-md-9">
          <div class="main-title">
            <h2><span>Servicios,  </span> Zona Clientes</h2>
            <p><h7>Bienvenido: <?php echo $_SESSION['nombre_usuario']; ?></h7> <br> Accede a lo servicios online que te ofrecemos.</p>
          </div>
        </div>

        <div class="col-md-3 text-right">                      
            <button class="btn" style="background-color: #2D73B5" title="Cambio de clave" data-toggle="modal" data-target="#modalNewPass"><i class="fa fa-key " style="background-color: #FFFFFF;"></i></button>
            <a href="../../sistemas/logout/">
              <button class="btn btn-danger" title="Salida segura" ><i class="fa fa-window-close"></i></button>
            </a>  
        </div>

        <div class="services-one">
          <div class="container">
              <div class="row">
                  <div class="col-md-6 "  data-toggle="modal" data-target="#myModalTipoPedido">
                      <div class="service-sec " >
                                                    
                            <div class="icon colorIcono" style=" cursor: pointer;">
                              <i class="icon-shopping-cart"></i>
                            </div>                          
                            
                            <div class="detail">                              
                              <h5>Pedidos Online</h5>
                                <p>Realiza pedidos online, desde la comodidad de su casa u oficina. Ya sea para contratos ó productos varios. </p>
                            </div>
                            
                        </div>
                    </div>
                    
                    <div class="col-md-6" >
                      <div class="service-sec">
                          
                            <a href="<?php echo "http://".$_SESSION['ip']; ?>/oc/cartera/cartera_c.php" target="_blank">
                              <div class="icon colorIcono" style=" cursor: pointer;">
                                <i class="fa fa-suitcase"></i>
                              </div>
                            </a>
                            
                              <div class="detail">
                                <h5>Cartera</h5>
                                  <p>Consulte desde acá el estado de su cartera. para que siempre estes al día y así facilitar despachos oportunos.</p>
                              </div>

                        </div>
                    </div>
                    
                    
                    
                    <div class="col-md-6" >
                      <div class="service-sec">
                          
                          <a href="<?php echo "http://".$_SESSION['ip']; ?>/qyr/info.php" target="_blank">
                            <div class="icon colorIcono" style=" cursor: pointer;">                              
                                <i class="fa fa-hand-o-up"></i>
                            </div>
                          </a>  
                            
                            <div class="detail">                              
                              <h5>PQR</h5>
                                <p>Peticiones quejas y reclamos, no dudes en contactarnos para cualquier sugerencia.</p>
                            </div>
                            
                        </div>
                    </div>
                    
                    <div class="col-md-6"  data-toggle="modal" data-target="#myModal" >
                      <div class="service-sec">
                          
                            <div class="icon colorIconoAyuda" style="background-color: #2D73B5; cursor: pointer;">                              
                                <i class="fa fa-question-circle "></i>                            
                            </div>
                            
                            <div class="detail">
                              <h5>Ayuda</h5>
                                <p>Utiliza cualquiera de nuestros canales para comunicarte con nosotros..</p>
                            </div>
                            
                        </div>
                    </div>

                    
                    
                    
                </div>
            </div>
        </div>

                  
       
                                  

                </div> 
            </div>


          
        
        
   

    </div>
   

  </div> 
   

   
   
    <?php 
      include 'vistas/newPassword.php';

      //footer
       include 'vistas/footer.php';
    ?> 
   


<a href="#0" class="cd-top"></a>
  </div>



<?php include('librerias/libreriasScripts.php');?>





<!-- Modal -->
<div id="myModalTipoPedido" class="modal fade" role="dialog"  style=" z-index:999999 !important;">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background-color:#F15B5A;  color:#FFFFFF">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Mediqboy -  Tipo de Pedido</h4>
      </div>
      <div class="modal-body">
        
        <table class="table table-striped table-hover">
          <caption>Seleccione el tipo de pedido</caption>
          <tbody>
            <tr>
              <th>1.</th>
              <th>Pedido a contratos</th>
              <th>
                <a href="http://www.mediqboy.com/inicio/contratosList.php?men=4">
                  <button type="button" class="btn btn-success">A Contratos. <i class="fa fa-shopping-cart"></i></button>
                </a>
              </th>
            </tr>          

            <tr>
              <th>2.</th>
              <th>Pedido Libre</th>
              <th>
                <a href="<?php echo "http://".$_SESSION['ip'].'/virtualmax/ventaonline/vista/pedido_directa.php'?>">
                  <button type="button" class="btn btn-success">Pedido Libre <i class="fa fa-shopping-cart"></i></button>                
                </a>
              </th>
            </tr>          

            <tr>
              <th>3.</th>
              <th>Seguimiento a pedidos</th>
              <th>
                <a href="<?php echo "http://".$_SESSION['ip'].'/virtualmax/ventaonline/vista/seguimiento.php'?>">
                  <button type="button" class="btn btn-success">Seguir Pedidos</button>                  
                </a>
              </th>
            </tr>          
          </tbody>
        </table>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"> Salir</button>
      </div>
    </div>

  </div>
</div>






<script type="text/javascript" src="js/inicioclientes.js?v=4"></script>
<script src=" js/mainNewPass.js?v=4"></script>  


</body>
</html>