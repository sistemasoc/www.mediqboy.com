<!DOCTYPE html>
<html>
  <head>
    <title>Mediqboy: página principal</title>
    <meta name="description" content="Mediqboy, comercializadora en Colombia de Medicamentos Calle 58 # 2-80 Barrio Santa Ana Tunja, Boyaca,  Correo:  oc.ventas@mediqboy.com" />
    <meta name="keywords" content="Mediqboy, distribución de productos farmacéuticos, compra de productos farmaceuticos, farmaceuticos,  equipo médico, quirúrgico hospitalario, odontológico y laboratorio clínico, Boyaca, tunja, Boyacá" />
    <meta name="description" content="Distribuidor de Medicamentos, Odontologico y Laboratorio, Material Médico  " />

    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <?php include('librerias/libreriasEstilos.php');?>    
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <!--
      <script src="js/jquery.snow.js?v4"></script>
    -->
  </head>
  <body>
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
  					<div class="link"><img class="time-tab" src="images/" alt=""></div>
  				</li>
  			</ul>
  		</div>
  	</div>

  	<?php
  		//Baner Contenedor
  		include 'vistas/bannerContenedor.php';
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
  		include 'vistas/servicios.php';

  		//Bienvenida
  		include 'vistas/bienvenida.php';


     	?>





     <!--Start Doctor Quote-->
     <div class="dr-quote">
     		<div class="container">
          	<div class="row">
              	<div class="col-md-12"  >
                  	<span class="quote">"Donde la medicina no llega, nadie puede. Pero la esperanza puede ser terapéutica."</span>
                      <span class="name">- (Francis Castel)</span>
                  </div>
              </div>
          </div>
     </div>
     <!--End Doctor Quote-->



     <!--Start Latest News-->
     <div class="latest-news dark-back" id="noticias">
     		<div class="container">

              <div class="row">
  	        <div class="col-md-12">
              <div class="main-title">
                  <h2><span>Ultimas noticias de: </span> Mediqboy</h2>
                  <p>Estarémos siempre informándote de las novedades.</p>
              </div>
              </div>
              </div>




              <div id="latest-news">
          <div class="container">
            <div class="row">
              <div class="span12">
                <div id="owl-demo" class="owl-carousel">


                  <div class="post item">
                      <a href="images/catalogo7.pdf" target="_blank">
                        <img class="lazyOwl" src="images/ctalogoJunio2020.png" alt="">
                      </a>

                      <div class="detail">
                          <img src="images/news-dr2.png" alt="">

                          <h4><a href="images/catalogo7.pdf" target="_blank">Descuentos Junio</a></h4>
                          <p>Oportunidad única de descuentos en productos para Hospitales y Clínicas, no la dejes pasar. . </p>
                          <span><i class="icon-clock3"></i> Jun 2, 2020</span>
                      </div>
                  </div>


                   <div class="post item">
                      <a href="images/catalogo-05.pdf" target="_blank">
                        <img class="lazyOwl" src="images/noticiasCatalogo.png" alt="">
                      </a>

                      <div class="detail">
                          <img src="images/news-dr2.png" alt="">

                          <h4><a href="images/catalogo-05.pdf" target="_blank">Descuentos Mayo</a></h4>
                          <p>Oportunidad única de descuentos en productos para Hospitales y Clínicas, no la dejes pasar. . </p>
                          <span><i class="icon-clock3"></i> May 4, 2020</span>
                      </div>
                  </div>

                  <div class="post item">
                      <a href="images/catalogo6.pdf" target="_blank">
                        <img class="lazyOwl" src="images/ctalogoAbril2020.png" alt="">
                      </a>

                      <div class="detail">
                          <img src="images/news-dr2.png" alt="">

                          <h4><a href="images/catalogo6.pdf" target="_blank">Descuentos Abril</a></h4>
                          <p>Oportunidad única de descuentos en productos para Hospitales y Clínicas, no la dejes pasar. . </p>
                          <span><i class="icon-clock3"></i> Abr 2, 2020</span>
                      </div>
                  </div>
                  
                  <div class="post item">
                      <a href="images/noticiaCovid19.jpg" target="_blank">
                        <img class="lazyOwl" src="images/slides/banner-img31.png" alt="">
                      </a>

                      <div class="detail">
                          <img src="images/news-dr2.png" alt="">

                          <h4><a href="images/noticiaCovid19.jpg" target="_blank">Medidas de prevención contra COVID-19</a></h4>
                          <p>Frente al Coronavirus lo que se puede hacer es mantener la calma, buscar información en fuente confiables y aplicar las siguientes medidas de prevención para protegerte a ti y a tu familia. </p>
                          <p>#yomequedoecasa #mediqboy</p>
                          <span><i class="icon-clock3"></i> Mar 17, 2020</span>
                      </div>
                  </div>

                  <div class="post item">
                      <a href="images/catalogo5.pdf" target="_blank">
                        <img class="lazyOwl" src="images/ctalogoMarzo2020.jpg" alt="">
                      </a>

                      <div class="detail">
                          <img src="images/news-dr2.png" alt="">

                          <h4><a href="images/catalogo5.pdf" target="_blank">Descuentos Marzo</a></h4>
                          <p>Oportunidad única de descuentos en productos para Hospitales y Clínicas, no la dejes pasar. . </p>
                          <span><i class="icon-clock3"></i> Mar 4, 2020</span>
                      </div>
                  </div>

                  <div class="post item">
                      <a href="images/catalogo4.pdf" target="_blank">
                        <img class="lazyOwl" src="images/ctalogoFebrero2020.jpg" alt="">
                      </a>

                      <div class="detail">
                          <img src="images/news-dr2.png" alt="">

                          <h4><a href="images/catalogo4.pdf" target="_blank">Descuentos Febrero</a></h4>
                          <p>Oportunidad única de descuentos en productos para Hospitales y Clínicas, no la dejes pasar. . </p>
                          <span><i class="icon-clock3"></i> Feb 3, 2020</span>
                      </div>
                  </div>


                  <div class="post item">
                      <a href="images/catalogo3.pdf" target="_blank">
                        <img class="lazyOwl" src="images/noticiaCatalogo3.jpg" alt="">
                      </a>

                      <div class="detail">
                          <img src="images/news-dr2.png" alt="">

                          <h4><a href="images/catalogo3.pdf" target="_blank">Descuentos Enero</a></h4>
                          <p>Oportunidad única de descuentos en productos para Hospitales y Clínicas, no la dejes pasar. . </p>
                          <span><i class="icon-clock3"></i> Ene 2, 2020</span>
                      </div>
                  </div>

                  <div class="post item">
                        <img class="lazyOwl" src="images/miniatura-premio-reciclaje.jpg" alt="">                      

                      <div class="detail">
                          <img src="images/news-dr2.png" alt="">

                          <h4>Compromiso Ambiental</h4>
                          <p>
                            Tenemos un compromiso no solo con nuestros clientes... 
                            <a id="verMas2">Leer más...</a>
                          </p>
                          
                          <p class="text-justify" id="ver2" hidden="">
                             El cuidado de nuestro medio ambiente es un aspecto esencial de las políticas institucionales, creamos cultura desde la empresa para conservar y poder soñar con un futuro mejor. Agradecemos a Ideo, la Alcaldía de Tunja y a Servitunja por hacer reconocimiento de nuestra labor ambiental.
                          </p>
                          <span><i class="icon-clock3"></i> Dic 23, 2019</span>
                      </div>
                  </div>

                  <div class="post item">
                      <a href="images/catalogo2.pdf" target="_blank">
                        <img class="lazyOwl" src="images/banner-img11.jpg" alt="">
                      </a>

                      <div class="detail">
                          <img src="images/news-dr2.png" alt="">

                          <h4><a href="images/catalogo2.pdf" target="_blank">Descuentos Diciembre</a></h4>
                          <p>Oportunidad única de descuentos en productos para Hospitales y Clínicas, no la dejes pasar. . </p>
                          <span><i class="icon-clock3"></i> Dic 3, 2019</span>
                      </div>
                  </div>

                  <div class="post item">                      
                        <img class="lazyOwl" src="images/diabetesNoticia.jpg" alt="">                      

                      <div class="detail">
                          <img src="images/news-dr2.png" alt="">

                          <h4>Día Mundial de la Diabetes</h4>
                          <p>
                            De acuerdo con la Asociación                        
                            <a id="verMas">Leer más...</a>
                          </p>
                          
                          <p class="text-justify" id="ver" hidden="">
                             Colombiana de Endocrinología, Diabetes y Metabolismo, existen otros factores de riesgo que aumentan las posibilidades de tener un nivel elevado de glucosa en la sangre, entre estos se destacan la edad (más de 45 años); el exceso de peso; tener padres, hermanos o hijos con la enfermedad; diabetes gestacional (diabetes que ocurre durante el embarazo) o tener un bebé
                            que pese más de 4 kilos; presión arterial alta; nivel bajo de colesterol bueno; nivel elevado de triglicéridos y síndrome de ovario poliquístico.
                          </p>
                          <span><i class="icon-clock3"></i> Nov 14, 2019</span>
                      </div>
                  </div>


                    <div class="post item">
                      <a href="images/catalogo1.pdf" target="_blank">
                        <img class="lazyOwl" src="images/descuentos3.jpg" alt="">
                      </a>

                      <div class="detail">
                          <img src="images/news-dr2.png" alt="">

                          <h4><a href="images/catalogo1.pdf" target="_blank">Descuentos Noviembre</a></h4>
                          <p>Oportunidad única de descuentos en productos para Hospitales y Clínicas, no la dejes pasar. . </p>
                          <span><i class="icon-clock3"></i> Nov 1, 2019</span>
                      </div>
                  </div>



                    <div class="post item">
                      <a href="#" target="_blank">
                        <img class="lazyOwl" src="images/Octubre19.jpg" alt="">
                      </a>
                      <div class="detail">
                          <img src="images/news-dr2.png" alt="">
                          <h4><a href="#">Lucha contra el cancer...</a></h4>
                          <p>
  El ministerio de Salud explicó que los tipos de cáncer que más afectan <a id="leemas2">Leer más...</a></p><p id="mostrar2" hidden=""> a las mujeres es el cáncer de mama, seguido de cuello uterino, colón y recto, estómago y tiroides. Por su parte, a los hombres los aqueja principalmente el cáncer de próstata, estómago, pulmón, colón y recto, y leucemia.
  Asimismo, el informe ‘Situación del cáncer en la población adulta atendida en el Sistema de Seguridad Social en salud 2017’, evidenció que en los últimos años se han reportado 229.473 casos de cáncer en el país, de los cuales el 67,7 % fue atendido en el régimen contributivo y el 28,1 % en el subsidiado.</p>
                          <span><i class="icon-clock3"></i> Oct 16, 2019</span>
                      </div>
                  </div>






                  <div class="post item">
                      <a href="#" target="_blank">
                        <img class="lazyOwl" src="images/pantallas.jpg" alt="">
                      </a>
                      <div class="detail">
                          <img src="images/news-dr2.png" alt="">
                          <h4><a href="#">Feliz día Bodegueros</a></h4>
                          <p>
  Gracias a quienes con su labor, pasión y trabajo apoyan a nuestros clientes <a id="leemas">Leer más...</a></p><p id="mostrarL" hidden="">en el almacenamiento de mercancía de una manera segura y confiable. Una gran labor que exige las mejores cualidades de la persona que la ejerza. Gracias a nuestros bodegueros, podemos garantizar a toda nuestra clientela un servicio de la más alta calidad.
  Es por esto que en esta fecha tan especial, queremos desearle a nuestro personal de bodega un feliz día y expresarles nuestro más sincero agradecimiento porque todos los días hacen que esta empresa crezca positivamente. Son ustedes los que hacen de la familia MEDIQBOY OC S.A.S una de las mejores proveedoras y distribuidora de medicamentos; sus capacidades profesionales y personales se ven reflejadas en el servicio ofrecido al cliente y por eso les agradecemos.</p>
                          <span><i class="icon-clock3"></i> Julio 19, 2019</span>
                      </div>
                  </div>




                  <div class="post item">
                      <a href="../empleo/index.php?company=1" target="_blank">
                        <img class="lazyOwl" src="images/empleo2.png" alt="">
                      </a>

                      <div class="detail">
                          <img src="images/news-dr2.png" alt="">

                          <h4><a href="../empleo/index.php?company=1" target="_blank">Oferta Laboral</a></h4>
                          <p>Vendedor externo, formación académica en área de la salud y perfil comercial. </p>
                          <span><i class="icon-clock3"></i> Jun 12, 2019</span>
                      </div>
                  </div>

                   <div class="post item">
                      <img class="lazyOwl" src="images/ANIVERSARIO.jpg" alt="">
                      <div class="detail">
                          <img src="images/news-dr2.png" alt="">
                          <h4><a href="">De aniversario</a></h4>
                          <p>En el 2019 cumplimos 17 años de experiencia.</p>
                          <span><i class="icon-clock3"></i> Mar 15, 2019</span>

                      </div>
                  </div>


                  <div class="post item">

                    <img class="lazyOwl" src="images/news-img3.jpg" alt="">
                     </br>
                          </br>
                          </br>
                      <div class="detail">
                          <img src="images/news-dr2.png" alt="">

                          <h4><a href="">Marcando grátis</a></h4>
                          <p>Ahora es más fácil que nos contáctes desde su celular. </p>
                          <span><i class="icon-clock3"></i> Feb 10, 2019</span>

                      </div>
                  </div>




                  <div class="post item">
                      	<img class="lazyOwl" src="images/news-img1.png" alt="">
                          <div class="detail">
                          	<img src="images/news-dr2.png" alt="">
                              <h4><a href="">Call center de Mediqboy</a></h4>
                              <p>Para mejor comodidad y comunicación, hemos amplicado nuestro Call Center.</p>
                              <span><i class="icon-clock3"></i> Marz 01, 2018</span>

                          </div>
                      </div>

                  <div class="post item">
                      <img class="lazyOwl" src="images/news-img2.jpg" alt="">
                      <div class="detail">
                          <img src="images/news-dr2.png" alt="">
                          <h4><a href="">Servicios Online</a></h4>
                          <p>Realice: Consultas, Pqr, Pedidos a través de nuestra página web. </p>
                          <span><i class="icon-clock3"></i> Abr 09, 2017</span>

                      </div>
                  </div>





                  <div class="post item">
                      <img class="lazyOwl" src="images/news-img5.jpg" alt="">
                      <div class="detail">
                          <img src="images/news-dr2.png" alt="">
                          <h4><a href="news-detail.html">Premio Chibchacum</a></h4>
                          <p>Por ser la mejor empresa de medicamentos en Boyacá. </p>
                          <span><i class="icon-clock3"></i> Oct 17, 2016</span>
                      </div>
                  </div>

                </div>

              </div>
            </div>
          </div>

      </div>



          </div>
     </div>
     <!--End Latest News-->


     <!--Start Testimonials-->
     <div class="patients-testi dark-testi">
     	<div class="container">

          <div class="row">
          <div class="col-md-12">
          <div class="main-title main-title2">
              <h2><span>Esto opinan </span> De nosotros</h2>
          </div>
          </div>
          </div>

          <div id="testimonials">
        <div class="container">
          <div class="row">

            <div class="col-md-12">
            <div class="span12">

              <div id="owl-demo2" class="owl-carousel">

                <div class="testi-sec">


  				<img src="images/logo.jpg" alt="">
                  <div class="height10"></div>
  				<span class="name">Alberto Fuquene</span>
                  <span class="patient">Usuario entidad</span>
                  <div class="height30"></div>
                  <p>Gracias por toda su atención y servicio.</p>						  				<div class="height35"></div>


                </div>
                <div class="testi-sec">


  				<img src="images/logo.jpg" alt="">
                  <div class="height10"></div>
  				<span class="name">Entidad Publica </span>
                  <span class="patient">Hospital</span>
  				<div class="height30"></div>
                  <p>Presente alguna novedad en la facturación, pero, solicite a través de la pagina web una PQR y me solucionaron como yo lo necesitaba.</p>




                </div>
                <div class="testi-sec">
                	<img src="images/logo.jpg" alt="">
                  <div class="height10"></div>
  				<span class="name">Entidad Privada</span>
                  <span class="patient">Entidad Privada</span>
  				<div class="height30"></div>

                  <p>Me han colaborado con el pago de facturas, se me presento un caso fortuito en mi empresa y con gusto aceptaron mi solicitud.</p>						  				<div class="height35"></div>



                </div>


              </div>

            </div>
            </div>

          </div>
        </div>
      </div>

      </div>
     </div>


     <!--End Testimonials-->

     </div>
     <!--End Content-->
     <!--====================================================================================
     =            en este archivo se encuentran todos los frameworks o librerias            =
     =====================================================================================-->
    
     <!--====================================================================================
     =            en este archivo se encuentran todos los frameworks o librerias            =
     =====================================================================================-->
     <!--========================================================
     =            archivo que carga el pie de pagina            =
     =========================================================-->

      <?php
          //footer
          include 'vistas/footer.php';
      ?>
    <!--========================================================
     =            archivo que carga el pie de pagina            =
     =========================================================-->


  <a href="#0" class="cd-top"></a>
    </div>
    
    <?php include("librerias/libreriasScripts.php"); ?>

    <script>
      $('#verMas').on('click',function(){       
        if($("#ver").is(":hidden")){
          $("#ver").show();
        }else{
           $("#ver").hide();
        }
      });
    </script>

    <script>
      $('#verMas2').on('click',function(){       
        if($("#ver2").is(":hidden")){
          $("#ver2").show();
        }else{
           $("#ver2").hide();
        }
      });
    </script>

  <script type="text/javascript">
    $(function(){
      $("#leemas").on("click",function(){
        if($("#mostrarL").is(":hidden")){
          $("#mostrarL").show();
        }else{
           $("#mostrarL").hide();
        }
      });

      $("#leemas2").on("click",function(){
        if($("#mostrar2").is(":hidden")){
          $("#mostrar2").show();
        }else{
           $("#mostrar2").hide();
        }
      });
    });
  </script>
</body>
</html>
