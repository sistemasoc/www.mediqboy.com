<?php
$ip='181.225.100.118';
session_start();

('Access-Control-Allow-Origin: *');

include("../sistemas/conexion/conexion.php");
include("../sistemas/dao/consultasDao.php");
$consultas = new consultaDao();

function encode_this($string) {
  $string = utf8_encode($string);
  $control = "3edcft6"; //defino la llave para encriptar la cadena, cambiarla por la que deseamos usar
  $string = $control.$string.$control; //concateno la llave para encriptar la cadena
  $string = base64_encode($string);//codifico la cadena
  return($string);
} 

function decode_get2($string){
  $cad = split("[?]",$string); //separo la url desde el ?
  $string = $cad[1]; //capturo la url desde el separador ? en adelante
  $string = base64_decode($string); //decodifico la cadena
  $control = "3edcft6"; //defino la llave con la que fue encriptada la cadena,, cambiarla por la que deseamos usar
  $string = str_replace($control, "", "$string"); //quito la llave de la cadena
  
  //procedo a dejar cada variable en el $_GET
  $cad_get = split("[&]",$string); //separo la url por &
  foreach($cad_get as $value){
    $val_get = split("[=]",$value); //asigno los valosres al GET
    $_GET[$val_get[0]]=utf8_decode($val_get[1]);
  }
}


if($_GET){  
  //recibo la url la decodifico y la dejo en la variable $_GET
  decode_get2($_SERVER["REQUEST_URI"]); 
  //ya puedo hacer uso de la variable $_GET 
  //accedo a un valor de la variable  
  //$contrato =  $_GET['contrato'];
}


?>



<!DOCTYPE html>
<html>
  <head>
    <title>Mediqboy</title>
    <meta name="description" content="Mediqboy, comercializadora de Medicamentos en Boyacá" />

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
	include  'vistas/barraSuperior.php';
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
  

   <div class="leave-msg dark-back">
      <div class="container">
      
      <div class="rox">
        <div class="col-md-7">
          
          <div class="main-title">
            <h2><span>Inicia Sesión Clientes. </span> </h2>
            <p>Recuerda, nit sin el dígito de verificación </p>
           </div>
          
          <!-- formulario para recuperar contraseña-->
          <div class="form" id="divLogin">        
            <div class="row">
              <p class="success" id="success" style="display:none;"></p>
              <p class="error" id="error" style="display:none;"></p>
              <form name="contact_form" id="contact_form" method="post" action="#" onSubmit="return false">
                <div class="col-md-8"><input type="hidden" name="ip" id="ip" class="input"  value="<?php echo $ip; ?>"></div>
                <div class="col-md-8"><input type="text" data-delay="300" placeholder="Nit sin DV" name="id_cliente" id="id_cliente" class="input " autofocus="" autocomplete="false"></div>
                <div class="col-md-8"><input type="password" data-delay="300" placeholder="Contraseña" name="pass_cliente" id="pass_cliente" class="input" autocomplete="false"></div>
                <div class="col-md-8"><input name=" " type="submit" value="Ingresar" onClick="validateClientes();"></div>
              </form>                    
            </div>        
            <br>                        
            <a  style="color:red; cursor: pointer" id="idRecuperar">
              ¿Has olvidado la contraseña? 
            </a>                        
          </div>          

          <!-- formulario para recuperar contraseña-->
          <div class="form" id="divRecuperar" hidden="">        
            <div class="row">
              <p class="success" id="success" style="display:none;"></p>
              <p style="color:red">Se enviará un mensaje a los correos registrados.</p> 
              
              <form name="" id="" method="post" action="#" onSubmit="return false">  
                <div class="col-md-8"><input name="" id="btnContinuar" type="submit" value="Continuar ->" style="display:none;"></div>
              </form>
              

              <p class="success" id="success1" style="display:none;"></p>
              <form name="recuperar_form" id="recuperar_form" method="post" action="#" onSubmit="return false">                
                <br>
                <div class="col-md-8">
                  <div class="col-md-8"><input type="hidden" name="ip" id="ip" class="input" value="<?php echo $ip; ?>"></div>
                  <input type="text" data-delay="300" placeholder="Nit sin DV" name="id_clienteRecuperar" id="id_clienteRecuperar" class="input " autofocus="" autocomplete="false">
                  <br>
                  <p class="error" id="error1" style="display:none; color:red"></p>                  
                </div>                
                
                <div class="col-md-8"><input name=" " type="submit" value="Solicitar" onClick="validateRecuperar();" id="btnSolicitar"></div>
              </form>                    
            </div>        
            <br>                                    
          </div>          


        </div>
        
        <div class="col-md-5">
          
          <div class="contact-get">
          <div class="main-title">
            <h2><span>Necesitas </span> Ayuda:</h2>
            <p>Utilice cualquier medio de contácto, con gusto le colaboraremos.</p>
           </div>
          
          <div class="get-in-touch">
          <div class="detail">
            <span data-toggle="modal" data-target="#myModal"><a href="#." ><img src="images/btn_whatsapp.png" style="width: 25px"> <b>&nbsp;&nbsp;WhatsApp Web</b></a></span>
            <span data-toggle="modal" data-target="#myModal"><a href="#."><i class="icon-skype " style="color:#58D1DC"> </i><b>&nbsp;&nbsp;Skype</b></a></span>
            <span><a href="#."><i class="icon-chat2 "> </i><b>&nbsp;&nbsp;Chat Online</b></a></span>
            <span><a href="#."><i class="icon-phone4 "> </i><b>  &nbsp;&nbsp;PBX:</b> 316 527 1795 / 098 - 745 3535</a></span>
            <span><a href="#."><i class="icon-mail"> </i><b>  &nbsp;&nbsp;Email:</b> oc.ventas@mediqboy.com</a></span>                        
           </div>
           
           
           </div>
           </div>
           
        </div>
        
      </div>

      </div>
    </div>
   

  </div> 
   

   
   
    <?php 
        //footer
       include 'vistas/footer.php';
    ?> 
   


<a href="#0" class="cd-top"></a>
  </div>

  <!-- Modal -->

  <div class="modal fade" id="notificacionNoticia" role="dialog" style="z-index: 6700;">
    <div class="modal-dialog modal-lg" >
      <div class="modal-content" >
        <div class="modal-body" >
            <a href="images/catalogo-05.pdf" target="_blank" id="enlNoticia">
              <img src="images/slides/ternometro.png" class="img-thumbnail" alt="Cinque Terre">
             </a>
        </div>
      </div>
    </div>
  </div>


<?php include('librerias/libreriasScripts.php');?>

<script type="text/javascript" src="js/inicioclientes.js?v=4"></script>

</body>
</html>