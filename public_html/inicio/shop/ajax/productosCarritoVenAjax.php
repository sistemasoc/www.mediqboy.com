<div class="col-md-12" style="overflow-y: scroll; height:370px; width: auto;">
	<?php
		$cantidadProduc = $_GET['cantidadProduc'];
		for ($i=0; $i < $cantidadProduc ; $i++) { 			
	?>
			<div class="col-md-12">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" style="margin-top: 5%;">
		            <img class="imagen" src="../images/130001.jpg" style="width: 100%; height: 100%;">
		        </div>
		        <div class="col-md-9" style="margin-top: 7px;">
		            CARBONATO DE CALCIO 1500MG (OROCAL TAB MASTICABLE) TAB CJA X 300/UND *EPS
		        </div>
		<!--
		        <div class="item-counter clearfix col-md-5" style="margin-top: 7px; margin-left: 15px; height: 40px; border-radius: 15px;">
		            <span class="pull-left" id="less-item1">-</span>             
		            <input type="text" class="items-total input-sm" id="total-items1" value="0" style="height: 40px;">              
		            <span class="pull-right" id="pluss-item1">+</span>
		        </div>-->
				<div class="col-md-9">
		            Cantidad: 3
		        </div>	

		        <div class="col-md-9">
		            Total a Pagar: $ 20.000
		        </div>	        
			</div>
			<div class="col-md-12"><hr></div>
	<?php
		}
	?>
</div>
<input type="hidden" name="totalProduc" id="totalProduc" value="<?php echo $cantidadProduc;?>">
<div class="col-md-12 bg-info" style="margin: 2px;">
	<div class="col-md-6">
		<p>SUBTOTAL</p>
	</div>
	<div class="col-md-6">
		<p> $ 20.000</p>
	</div>
</div>
<div class="col-md-12 bg-info" style="margin: 2px;">
	<div class="col-md-6">
		<p>VALOR ENVIO</p>
	</div>
	<div class="col-md-6">
		<p> $ 20.000</p>
	</div>
</div>
<div class="col-md-12 bg-info" style="margin: 2px;">
	<div class="col-md-6">
		<p>TOTAL</p>
	</div>
	<div class="col-md-6">
		<p> $ 40.000</p>
	</div>
</div>
<div class="col-md-12 bg-info" style="margin: 2px;">
	<a href="vistas/vistaCarrito.php?cantidadProduc=<?php echo $cantidadProduc;?>">	
		<button type="button" class="btn btn-success col-md-12 pagarPedioCa" id="pagarPedioCa">IR A PAGAR</button>
	</a>
</div>

<script src="js/mainPagar.js"></script>
