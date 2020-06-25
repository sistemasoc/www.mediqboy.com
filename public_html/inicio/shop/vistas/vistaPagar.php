<?php
	$nitCliente  = $_GET['nitCliente'];
	$idPedido  = $_GET['idPedido'];
?>
<div class="col-md-12">
	<div class="col-md-12">
		<h1 id="cart-title" style="display: block;">
			<i class="fa fa-shopping-basket" aria-hidden="true"></i>&nbsp;Finalizar la Compra
		</h1>
	</div>
	<div class="col-md-12">
		<!--informacion personal-->
		<div class="col-md-4 bg-info" style="margin: 2px; border-radius:15px;">
			<i class="fa fa-user-circle-o fa-2x col-md-1" aria-hidden="true"></i>
			<h6 class="col-md-11">&nbsp;Identificacion</h6>			
			<div class="col-md-12">
				<span style="font-size: 13px;">
					Solicitamos únicamente la información esencial para la finalización de la compra.					
				</span>
			</div>
			<div class="col-md-12">
				<div class="form-group col-md-12">
					<label for="correoCliente" style="font-size: 13px;">Correo:</label>
					<input class="form-control input-md" type="mail" name="correoCliente" id="correoCliente" placeholder="Dijite su correo electronico" value=" " required>
				</div>
				<div class="form-group col-md-6">
					<label for="nombreCliente" style="font-size: 13px;">Nombre:</label>
					<input class="form-control input-md" type="text" name="nombreCliente" id="nombreCliente" placeholder="Dijite su nombre" value=" " required>
				</div>
				<div class="form-group col-md-6">
					<label for="apellidoCliente" style="font-size: 13px;">Apellidos:</label>
					<input class="form-control input-md" type="text" name="apellidoCliente" id="apellidoCliente" placeholder="Dijite su apellido" value=" " required>
				</div>
				<div class="form-group col-md-6">
					<label for="documentoCliente" style="font-size: 13px;">Documento:</label>
					<input class="form-control input-md" type="number" name="documentoCliente" id="documentoCliente" placeholder="Dijite su documento" value=" " required>
				</div>
				<div class="form-group col-md-6">
					<label for="telefonoCliente" style="font-size: 13px;">Teléfono / Móvil:</label>
					<input class="form-control input-md" type="number" name="telefonoCliente" id="telefonoCliente" placeholder="Dijite su numero de teléfono / movil" value=" " required>
				</div>
				<div class="form-group col-md-12">						
					<input type="checkbox" name="autorizaDatos" id="autorizaDatos" value="">
					<span style="font-size: 13px;">
						Autorizo el uso y tratamiento de mis datos personales de acuerdo a la política que se encuentra aqui y el envio de información promocional.
					</span>
				</div>
			</div>
		</div>
		<!-- fin de informacio personal-->
		
		<!--informacion de entrega-->
		<div class="col-md-3 bg-info" style="margin: 2px; border-radius:15px;">
			<i class="fa fa-home fa-2x col-md-1" aria-hidden="true"></i>
			<h6 class="col-md-1">&nbsp;Entrega</h6>			
						
				<div class="form-group col-md-12">
					<label for="departamento" style="font-size: 13px;">Departamento:</label>
					<select class="form-control input-md" name="departamento" id="departamento" required>						
						<option value=""></option>
						<option value="boyaca">Boyaca</option>
						
					</select>

					<label for="municipio" style="font-size: 13px;">Municipio:</label>
					<select class="form-control input-md" name="municipio" id="municipio" required>
						<option value=""></option>
						<option value="Almeida___15022">Almeida</option>
						<option value="Aquitania___15047">Aquitania</option>
						<option value="Arcabuco___15051">Arcabuco</option>
						<option value="Belén___15087">Belén</option>
						<option value="Berbeo___15090">Berbeo</option>					
						<option value="Tenza___15798">Tenza</option>
						<option value="Tibaná___15804">Tibaná</option>
						<option value="Tibasosa___15806">Tibasosa</option>
						<option value="Tinjacá___15808">Tinjacá</option>
						<option value="Tipacoque___15810">Tipacoque</option>
						<option value="Toca___15814">Toca</option>
						<option value="Togüí___15816">Togüí</option>
						<option value="Tópaga___15820">Tópaga</option>
						<option value="Tota___15822">Tota</option>
						<option value="Tunja___15001">Tunja</option>
						<option value="Tununguá___15832">Tununguá</option>
						<option value="Turmequé___15835">Turmequé</option>
						<option value="Tuta___15837">Tuta</option>
						<option value="Tutazá___15839">Tutazá</option>
						<option value="Úmbita___15842">Úmbita</option>
						<option value="Ventaquemada___15861">Ventaquemada</option>
						<option value="Villa De Leyva___15407">Villa De Leyva</option>
						<option value="Viracachá___15879">Viracachá</option>
						<option value="Zetaquira___15897">Zetaquira</option>
					</select>								
				
				<label style="font-size: 13px;">Completa tu dirección de entrega</label>
			
			
				<label for="Calle" style="font-size: 13px;">Calle:</label>
				<input class="form-control input-md" type="text" name="Calle" id="Calle" placeholder="Dijite su direccion" value=" " required>
			
			
				<label for="pisoApartamento" style="font-size: 13px;">Piso o apartamento:</label>
				<input class="form-control input-md" type="text" name="pisoApartamento" id="pisoApartamento" placeholder="Opcional" value=" ">
			
			
				<label for="barrio" style="font-size: 13px;">Barrio:</label>
				<input class="form-control input-md" type="text" name="barrio" id="barrio" placeholder="Opcional" value=" ">
			
			
				<label for="nombreRecibe" style="font-size: 13px;">Nombre de la Persona que va a recibir:</label>
				<input class="form-control input-md" type="text" name="nombreRecibe" id="nombreRecibe" placeholder="Opcional" value=" ">
				
			</div>
		</div>
		<!--fin de informacion de entrega-->
		
		<!--resumen de pedido-->
		<div class="col-md-4 bg-info" style="margin: 2px; border-radius:15px;">
			<div class="col-md-12 bg-danger">
				<h6>Resumen de Compra</h6>
			</div>
			<div class="col-md-12" style="overflow-y: scroll; height:370px; width: auto;">
				<?php
					$cantidadProduc = $_GET['cantidadProduc'];
					for ($i=0; $i < $cantidadProduc ; $i++) { 			
				?>						
						<div class="col-lg-4 col-md-3 col-sm-6 col-xs-6" style="margin-top: 5%;">
				            <img class="imagen" src="../../images/130001.jpg" style="width: 100%; height: 100%;">
				        </div>
				        <div class="col-md-8 text-justify" style="margin-top: 7px; font-size: 12px;">
				            CARBONATO DE CALCIO 1500MG (OROCAL TAB MASTICABLE) TAB CJA X 300/UND *EPS
				        </div>
						<div class="col-md-8 text-justify" style="font-size: 12px;">
				            Cantidad: 3
				        </div>

				        <div class="col-md-7 text-justify" style="font-size: 12px;">
				            <span>$ 20.000</span>
				        </div>
						<div class="col-md-12">
							<hr style="border-top: 2px solid white">
						</div>
				<?php
					}
				?>
			</div>
			<div class="col-md-12" style="margin: 2px;">
				<div class="col-md-6 col-sm-6">
					<span>SUBTOTAL</span>
				</div>
				<div class="col-md-6 col-sm-6">
					<span> $ 20.000</span>					
				</div>
			</div>
			<div class="col-md-12" style="margin: 2px;">
				<div class="col-md-6 col-sm-6">
					<span>VALOR ENVIO</span>
				</div>
				<div class="col-md-6 col-sm-6">
					<span> $ 20.000</span>					
				</div>
			</div>
			<div class="col-md-12" style="margin: 2px;">
				<div class="col-md-6 col-sm-6">
					<span>TOTAL</span>
				</div>
				<div class="col-md-6 col-sm-6">
					<span> $ 40.000</span>					
				</div>
			</div>
			<div class="col-md-12 bg-info" style="margin: 2px;">
				<a href="vistas/vistaCarrito.php?cantidadProduc=<?php echo $cantidadProduc;?>">	
					<button type="button" class="btn btn-success col-md-12 pagarPedioCa" id="pagarPedioCa">
						<i class="fa fa-lock" aria-hidden="true"></i>Comprar ahora
					</button>
				</a>
			</div>
		</div>
		<!-- fin de resumen-->

	</div>
</div>