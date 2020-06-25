<?php
  $url =  $_SERVER["REQUEST_URI"];
  $datos = parse_url($url);  
  $trozos = explode("=", $datos['query'], 5);
  $trozos = explode("&", "&".$trozos[1], 5);
  $migaPan = $trozos[1];
  /*
      se consulta en la BD de la pagina web las imagenes para mostrae el banner
      se inactivan las imagenes que por fecha ya estan vencidas
  */
  $fechaActual = date('Y-m-d');
  $resulListaBanner =modeloProductos::mdlListarBanner($fechaActual);
  foreach ($resulListaBanner as $key => $value) {
    $id = $value['id'];
    $fecha = $value['validez'].' 23:58:58';
    $fechaActual = date('Y-m-d H:i:s');
    if ($fecha <= $fechaActual) {
      echo $fecha .'--'. $fechaActual;
      modeloProductos::mdlCambiarEstado($id);
    }
  }
?>


<!--carrusel de productos en promecion-->
  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top: 15px; margin-bottom: 15px;">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <?php     
        for ($i=0; $i < count($resulListaBanner); $i++) { 
          if ($i==0) {
      ?>
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <?php   
          }else{
        ?>
            <li data-target="#myCarousel" data-slide-to="<?php echo $i;?>"></li>
      <?php
          }        
        }
      ?>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <?php       
        for ($i=0; $i < count($resulListaBanner); $i++) {        
          $imagen = $resulListaBanner[$i]['imagen'];
          $codigoItem = $resulListaBanner[$i]['codigoItem'];       
          if ($i==0) {
      ?>
            <div class="item active">
              <?php
                if($codigoItem > 0){
              ?>
                  <form action="../shop/detalle/" method="post">
              <?php
                }else echo "<a href='?categoria=promocion&men=8'>";
              ?>
                    <input type="image" class="d-block w-100" src="http://<?php echo $_SESSION['ip']; ?>/files/imgBannerShop/<?php echo $imagen;?>"  style="width: 100%; height: 500px auto;">
              <?php
                if($codigoItem > 0){
              ?>
                    <input type="hidden" name="codigoProducto" value="<?php echo $codigoItem;?>">
                    <input type="hidden" name="migaPan" value="<?php echo $migaPan;?>">
                    <input type="hidden" name="men" id="men_<?php echo $contador;?>" value="8">
                  </form>
              <?php
                }else echo "</a>";
              ?>
            </div>
        <?php   
          }else{
        ?>
          <div class="item">
            <?php
              if($codigoItem > 0){
            ?>
                <form action="../shop/detalle/" method="post">
            <?php
              }else echo "<a href='?categoria=promocion&men=8'>";
            ?>
                  <input type="image" class="d-block w-100" src="http://<?php echo $_SESSION['ip']; ?>/files/imgBannerShop/<?php echo $imagen;?>"  style="width: 100%; height: 500px auto;">
            <?php
              if($codigoItem > 0){
            ?>
                  <input type="hidden" name="codigoProducto" value="<?php echo $codigoItem;?>">
                </form>
            <?php
              }else echo "</a>";
            ?>
          </div>
      <?php
          }
        }
      ?>
    </div>    

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span style="position: relative; top: 190px; margin-top: -34px; left: -60px;">
        <i class="fa fa-chevron-left" aria-hidden="true"></i>
      </span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span style="position: relative; top: 190px; margin-top: -34px; left: 60px;">
        <i class="fa fa-chevron-right" aria-hidden="true"></i>
      </span>
      <span class="sr-only">Next</span>
    </a>
  </div>
<!--fin de carrusel-->