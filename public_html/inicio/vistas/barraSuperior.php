<?php 
if(isset($_REQUEST['men'])){
    $menu=$_REQUEST['men'];
}else $menu=1;
?>

  <!--Start Top Bar-->
   <div class="top-bar">
   		<div class="container">
    		<div class="row">            	
          <div class="col-md-4 ">
          	<span >Compañía especializada en distribución de  medicamentos</span>
          </div>
                
          <div class="col-md-8">

            <div class="get-touch">
                      	
  						<ul>
                <li><a><i class="icon-phone4"></i>PBX: 316-527 1795 / <br> 098-745 3535</a></li>
                <li><a href="#."><i class="icon-mail"></i> oc.ventas@mediqboy.com</a><br>&nbsp;</li>
  						</ul>
  						
              <ul  class="social-icons">
                <li>
                  <a href="https://www.facebook.com/mediqboy/" target="_blank" class="fb" title="Facebook">
                    <i class="icon-euro"></i><br>&nbsp;
                  </a>
                </li>
              
                <li>
                  <a href="https://www.instagram.com/mediqboy/" target="_blank" class="tw" title="Instagram">
                    <i class="icon-instagram"></i><br>&nbsp;
                  </a>
                </li>
              
                <li>
                  <a href="#." class="gp" title="WhatsApp"  data-toggle="modal" data-target="#myModal">
                    <i class="icon-phone4"></i> <br>&nbsp;
                  </a>
                </li>
                
                <?php 
                  if ($menu == 8 and $_SESSION['nit_usuario'] ) { 
                    //include '../shop/vistas/modalClienteLogin.php';
                ?>
                <li class="text-center " style="background-color: #5CB85C">
                  <a href="#." class="gp" title="Mi cuenta"  data-toggle="modal" data-target="#myModalLoginUser" id="btnModalUser">
                    <i class="fa fa-user-circle"></i><br> <?php echo ucwords(strtolower(substr($_SESSION['nombre_usuario'],0,10)."..")); ?>
                  </a>
                </li>
                <?php } ?>
  						</ul>
                        
            </div>	
          </div>                
        </div>
    	</div>
   </div> 
   <!--Top Bar End-->   