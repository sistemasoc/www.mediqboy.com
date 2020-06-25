<!-- Modal -->
<div class="modal fade " id="modalNewPass" style=" z-index:999999 !important;" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" >
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span></button>
        <h4 class="modal-title text-left">Cambio de contraseña</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12 text-left">
              <form action="" method="get"> 
                  <input type="hidden" name="nit" id="nit" value="<?php echo $_SESSION['nit_usuario'];?>">
                  <label for="newPass">Nueva Contraseña</label>
                  <div class="input-group">
                      <input type="password" class="form-control" name="newPass" id="newPass" required>
                      <span class="input-group-addon" style="cursor:pointer;" name="ver1" id="ver1" onclick="ver()">
                        <i class="glyphicon glyphicon-eye-open" aria-hidden="true"></i>
                      </span>
                  </div>
                  <label for="confiNewPass">Confirmar Contraseña</label>
                  <div class="input-group">
                      <input type="password" class="form-control" name="confiNewPass" id="confiNewPass" required>
                      <span class="input-group-addon" style="cursor:pointer;" name="ver2" id="ver2" onclick="ver1()">
                        <i class="glyphicon glyphicon-eye-close" aria-hidden="true"></i>
                      </span>
                  </div>
              </form><br>
              <div id="msg" hidden>
                
              </div>              
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal" id="cerrar">Cerrar</button>
        <button type="button" class="btn btn-success" id="guardar">Guardar</button>
      </div>
    </div>
  </div>
</div>


<script>
  function ver(){
    var x = document.getElementById("newPass");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
  function ver1(){
    var x = document.getElementById("confiNewPass");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
</script>

