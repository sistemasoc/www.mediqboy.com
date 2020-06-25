<?php
	include('../controladores/conexion.php');
	include('../modelos/productosModelo.php');
	$idItem = $_GET['idItem'];
	$nombreItem = $_GET['nombreItem'];
	$consultaInfoProduc = modeloProductos::mdlConsultaInfoProduc($idItem);

	$item = $consultaInfoProduc[0]['ITEM'];
	$nombreProducto = $consultaInfoProduc[0]['DESCRIPCION'];
	$precio = $consultaInfoProduc[0]['PRICE'];

	$eps = $consultaInfoProduc[0]['MODELO'];
	$fechaCreacion = $consultaInfoProduc[0]['FECHA_CREACION'];
	$ultimaCompra = $consultaInfoProduc[0]['INDATE'];
	$iva = $consultaInfoProduc[0]['IMPOVENTA'];
	$notas = $consultaInfoProduc[0]['NOTAS'];
	$familia = trim($consultaInfoProduc[0]['FAMILIA']);
	$descripcion2 = trim($consultaInfoProduc[0]['DESCRIPCION2']);
	$factor = trim($consultaInfoProduc[0]['FACTOR']);
	$unidadesCaja = trim($consultaInfoProduc[0]['UNIDADES_CAJA']);
	$cantidad1 = $cantidad = trim($consultaInfoProduc[0]['DISPONIBLE']);
	$blister = trim($consultaInfoProduc[0]['DESCRIPCION_PRF']);
	$unidades_caja = trim($consultaInfoProduc[0]['UNIDADES_CAJA']);

	if($eps==002){$eps='EPS';}else $eps='';
	//solo se permite comprar por blister completo
	$blister='';
	if($blister==''){$blister=1;}
	if($factor==1){$blister=$unidades_caja;}

	if($unidades_caja==''){$unidades_caja=1;}
	if($factor==1){
		$precio = $precio/$unidades_caja;
	}
	$precio_iva = 0;
	if($iva <> 0){//precio del iva
		$precio_iva = $precio+(($precio*$iva)/100);
	}else $precio_iva = $precio;

	if($factor==1){ //cantidad por caja
		$cantidad = $cantidad*$unidades_caja;
	}

	$consultaDisponibles = modeloProductos::mdlConsultaDisponibles($item);//disponible en wx
	$disponible = $consultaDisponibles[0]['DISPONIBLE'];
	if($factor==1){
		$disponible = $cantidad*$unidades_caja;
	}
	//En transito (Orden de compra) en wx
	$cantidad_en_ordenes = $cantidad_recibida = 0;
	$consultaOrdenes = modeloProductos::mdlConsultaOrdenes($item);//OJO --> Revisar el DAO...
	$cantidad_recibida = $consultaOrdenes[0]['RECIBIDO'];//OJO --> Revisar el DAO...
	$cantidad_en_ordenes = $consultaOrdenes[0]['QTY'];//En WX esta en cajas este valor
	if($factor > 1){//producto creado en unidades
		$cantidad_recibida = $cantidad_recibida / $unidades_caja;
	}
	$cantidades_en_ordenes = $cantidad_en_ordenes - $cantidad_recibida;	//resta lo ya legalizado

	$cantidad_pedida = '';
	$numero_items = 0;
	if($numero_items > 0){
		while($obj = mysql_fetch_array($result_2)){
			if($obj['itemWx']==$item){
				$cantidad_pedida = $obj['cantSolicitada'];
			}
		}
		mysql_data_seek($result_2, 0);
	}
	/* saltar a la fila número 0 */
	//echo $conteos."--";

	//Solo muestra productos con ordenes de compra o con inventario


  if($item=='150200'){
     echo  $ultimaCompra;
  }
	$nit = 1002587752;
	if($cantidades_en_ordenes>0 or $disponible>0 or $nit==901153500 or  $ultimaCompra>'2018-04-04' or  $fechaCreacion>'2018-01-01' ){
?>
		<input type="hidden" name="blister" id="blister" value="<?php echo $blister;?>">
		<div class="row">
			<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12" style="margin-top: 10%;">
				<img class="imagen col-lg-12 col-md-12 col-sm-12 col-xs-12" src="../images/<?php echo $imgProduc;?>">
			</div>
			<div class="col-md-7">
				<div class="col-md-12">
					<div class="col-md-12">
						<h6 class="text-left">Laboratorio: <?php echo $descripcion2; ?></h6>
						<br>
						<input type="hidden" name="valorItem" id="valorItem" value="<?php echo $precio_iva; ?>">
						<h6 class="text-left">$ <?php echo number_format($precio); ?></h6>
					</div>

					<div class="col-md-12 text-justify" style="margin-top: 25px;">
						<span><strong>Contiene: </strong> <?php echo $notas; ?></span><br>
						<span><strong>Vlr unitario sin iva: </strong><?php echo number_format($precio); ?></span><br>
						<span><strong>Iva: </strong><?php echo $iva; ?></span><br>
						<span><strong>Vlr unitario mas iva: </strong><?php echo number_format($precio_iva); ?></span><br>
						<span>
							<strong>Inventario: </strong>
							<?php
                if($disponible<=0 and $cantidades_en_ordenes<=0){$d='Por llegar';}
                if($disponible>0){$d='SI';}
                if($disponible<=0 and $cantidades_en_ordenes>0){$d='Transito';}
                echo $d; //echo number_format($disponible+$cantidades_en_ordenes);}
              ?>
						</span><br>
					</div>

			        <div class="col-md-12">
			        	<p><strong>Categorias:</strong> Medicamentos</p>
			        </div>

			        <div class="col-md-12">
						<input type="hidden" name="cantidadDisponible" id="cantidadDisponible" value="<?php echo $disponible; ?>">
			        	<input type="hidden" name="valorInicial" id="valorInicial" value="<?php echo $precio_iva; ?>">
			        	<input type="hidden" name="valorActual" id="valorActual" value="">
			        	<h6 id="totalPagarItem">Total a Pagar: $ <?php echo number_format($precio); ?></h6>
			        </div>

					<div class="item-counter clearfix col-lg-5 col-md-5 col-sm-6 col-xs-8" style="margin-top: 25px; margin-left: 15px; border-radius: 15px;">
			        	<span class="pull-left" id="less-item">-</span>
			        	<input type="text" class="items-total" id="total-items" value="0">
			        	<span class="pull-right" id="pluss-item">+</span>
			        </div>

			        <div class="col-md-12" style="margin-top: 25px;">
			        	<button type="button" class="btn btn-info" id="btnAgregarFavoritos"><i class="fa fa-heart-o"></i>&nbsp;Agregar a Favoritos</button>

		        		<div class="text-center col-lg-12 registrarCorreo">
		        			Para agregar este producto a tus favoritos debes ingresar tu correo electronico
		        		</div>
			        	<div class="input-group input-group-sm registrarCorreo">
		                	<input type="email" class="form-control" id="E-mail" placeholder="E-mail">
		                    <span class="input-group-btn">
		                     	<button type="button" class="btn btn-success btn-flat" id="enviar">Enviar</button>
		                    </span>
		              	</div>
			        </div>

			   	</div>
			</div>
		</div>
<?php
	}
?>

<script src="js/mainCarrito.js?v2"></script>
