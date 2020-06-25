<?php
session_start();
if(!isset($_SESSION['nit_usuario'])){
  header('location: http://www.mediqboy.com/sistemas/logout/'); 
}
?>

 
<!DOCTYPE html>
<html>
  <head>
    <title>Contratos</title>
    <meta name="description" content="Mediqboy, comercializadora en Colombia de Medicamentos Calle 58 # 2-80 Barrio Santa Ana Tunja, Boyaca,  Correo:  oc.ventas@mediqboy.com" />

    <meta name="keywords" content="Mediqboy, distribución de productos farmacéuticos, compra de productos farmaceuticos, farmaceuticos,  equipo médico, quirúrgico hospitalario, odontológico y laboratorio clínico, Boyaca, tunja, Boyacá" />
    <meta name="description" content="Distribuidor de Medicamentos, Odontologico y Laboratorio, Material Médico  " />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	  <?php include('librerias/libreriasEstilos.php');?> 
    <link href="../frameWorks/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  
    <style type="text/css">
      .colorIcono :hover{   background-color: #8EDA91;}/*Color de botones al subir mouse */
      .colorIconoAyuda :hover{   background-color: #4A8BC8;}/*Color de botones al subir mouse */
    </style>

    
</head>
  <body>
  
    <input type="hidden" name="nombre_usuario" id="nombre_usuario" value="<?php echo $_SESSION['nombre_usuario']; ?>">
    <input type="hidden" name="nit_usuario" id="nit_usuario" value="<?php echo $_SESSION['nit_usuario']; ?>">
    <input type="hidden" name="ip" id="ip" value="<?php echo $_SESSION['ip']; ?>">

    
  <div id="wrap">
   
  <?php 
  include 'vistas/loader.php';
	//Barra superior
	include 'vistas/barraSuperior.php';
	//Cabezote
  	include 'vistas/cabezote.php';	
	//menu movil inicio
	include 'vistas/movilMenuInicio.php';
  ?>
  
   
<!--Start Content-->
<div class="content">
     
 <!-- <div class="sub-banner">   
    <img class="banner-img" src="images/sub-banner.jpg" alt="">       
  </div>
-->
  <div class="dark-back">
      <div class="container">      
                                    
        <div class="col-md-11">
          <div class="main-title">
            <img class="banner-img" src="images/sub-bannerListContratos1.png" alt="">
          </div>
        </div>

        <div class="col-md-1 text-right">                                  
            <a href="../../sistemas/logout/">
              <button class="btn btn-danger" title="Salida segura" ><i class="fa fa-window-close"></i></button>

            </a>  

              
        </div>


        <div class="services-one">
          
          <div class="container">

            <div class="table table-responsive ">
              
              <div id="resultContratos"></div> <!--CArga resultados contratos-->
              
              <a href="http://www.mediqboy.com/inicio/services.php?men=4">
                <button class="btn fa fa-backward btn-danger"> Regresar</button>
              </a>

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
      <div class="modal-header" style="background-color: #4CAF50; color:#FFFFFF">
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
                <a href="<?php echo "http://".$_SESSION['ip'].'/virtualmax/ventaonline/vista/contratos.php'?>">
                  <button type="button" class="btn btn-success">A Contratos.</button>
                </a>
              </th>
            </tr>          

            <tr>
              <th>2.</th>
              <th>Pedido Libre</th>
              <th>
                <a href="<?php echo "http://".$_SESSION['ip'].'/virtualmax/ventaonline/vista/pedido_directa.php'?>">
                  <button type="button" class="btn btn-success">Pedido Libre</button>                
                </a>
              </th>
            </tr>          

            <tr>
              <th>3.</th>
              <th>Seguimiento a pedidos</th>
              <th>
                <a href="<?php echo "http://".$_SESSION['ip'].'/virtualmax/ventaonline/vista/seguimiento.php'?>">
                  <button type="button" class="btn btn-success">Seguimiento</button>                  
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






<script type="text/javascript" src="js/contratosList.js"></script>


</body>
</html>