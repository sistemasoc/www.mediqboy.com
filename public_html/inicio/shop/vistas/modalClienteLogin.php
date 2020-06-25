

<!-- Modal -->
<div id="myModalLoginUser" class="modal fade" role="dialog" style=" z-index:999999 !important;">
  <div class="modal-dialog ">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background: #00B32E; color: #FFFFFF;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Cliente Online Mediqboy:</h4>
      </div>
      <div class="modal-body">
        
        <table class="table table-condensed table-hover" id="tablaDatos">         
          <caption><h6><?php  echo $_SESSION['nombre_usuario']; ?> </h6>
        </caption>
          <div class="text-right">
            <button type="button" class="btn btn-info fa fa-key" title="Cambiar la clave" id="btnCambioClave"> </button>
            <a href="../../sistemas/logout/">
              <button type="button" class="btn btn-danger fa fa-close" title="Salida segura" id="btnSalir"></button>
            </a>
            
          </div>
          <tr>              
            <th class="text-left">Departamento:</th>
            <th class="text-left">Boyacá</th>              
           </tr>            
           <tr>              
            <th class="text-left">Ciudad:</th>
            <th class="text-left">Tunja</th>              
           </tr>            
           <tr>              
            <th class="text-left">Dirección:</th>
            <th class="text-left">Calle 58 # 2- 80</th>              
           </tr>            

           <tr hidden="">              
            <th class="text-left">Cambio clave:</th>
            <th class="text-left">
              <button type="button" class="btn btn-info fa fa-key"> Clave</button>
            </th>              
           </tr>            

           <tr hidden="">              
            <th class="text-left">Cerrar sesión:</th>
            <th class="text-left">
              <button type="button" class="btn btn-danger fa fa-close"> Salir</button>
            </th>              
           </tr>            
                    
        </table>

        <br>

        <form action="" method="get" id="formClave" hidden="" class="form-horizontal">           
          
          <div class="form-group">
              <label for="newPass" class="col-sm-4 control-label">* Nueva Clave:</label>
              <div class="col-sm-8">
                <input type="password" class="form-control" name="newPass" id="newPass" required="">              
              </div>  
          </div>
          
          <div class="form-group">
              <label for="confiNewPass"  class="col-sm-4 control-label">* Confirmar Clave:</label>
              <div class="col-sm-8">
                <input type="password" class="form-control" name="confiNewPass" id="confiNewPass" required="">              
              </div>  
          </div>
          
          <div class="form-group">
            <label for="lblMensaje" class="col-sm-4 control-label"></label>
            <div class="col-sm-8">
              <button type="button" class="btn btn-info fa fa-key form-control" title="Cambiar la clave" id="btnNuevaclave"> Cambiar</button> 
            </div>
          </div>  

          

        </form>

      </div>
      <div class="modal-footer">        
        <button type="button" class="btn btn-default" data-dismiss="modal"> Continuar</button>
      </div>
    </div>

  </div>
</div>
  

<script type="text/javascript" src="js/modalClienteLoginJs.js"></script>