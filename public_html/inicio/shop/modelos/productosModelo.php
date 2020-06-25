<?php
	/**
	 *
	 */
	class modeloProductos{

	static public function mdlListarBanner($fechaActual){
		$sql = "SELECT id, posicion, imagen, validez, estado, codigoItem
		        FROM bannerPromocional
		        WHERE estado=1 AND fechaDesde <= '".$fechaActual."' AND validez >= '".$fechaActual."'
		        ORDER BY posicion ASC ";
		$stmt = conexionPDO::conectarIpActiva('mediqboy_oclaeconomia')->prepare($sql);
		$stmt -> execute();
		return	$stmt -> fetchAll();
	}

	static public function mdlCambiarEstado($id){		
		$sql = "UPDATE bannerPromocional 
				SET estado = 0
		       	WHERE id = ".$id." ";
		$stmt = conexionPDO::conectarIpActiva('mediqboy_oclaeconomia')->prepare($sql);				
		$stmt -> execute();			
	}
		static public function mdlActivaIps(){
			$sql = "SELECT *
					FROM direccionesIP
					WHERE estado=1";
			$stmt = conexionPDO::conectarIpActiva('mediqboy_oclaeconomia')->prepare($sql);
			$stmt -> execute();
			return	$stmt -> fetchAll();			
		}

		static public function mdlConsultaProducMasV(){
			$oc = 'oc';
			$db = new MyODBC_DB($oc);
		    $sql = "SELECT item.ITEM,item.DESCRIPCION,item.PRICE
					FROM ITEM item
					WHERE item.estado = 'True'
					ORDER BY item.DESCRIPCION ASC
					ROWS 1 TO 15";
			$consulta=$db->sentenciaodbc($sql);
			$arreglo=array();
			while($conteo = odbc_fetch_array($consulta)){
		  	$arreglo[] = $conteo;
		  }
			return $arreglo;
		}

		static public function mdlConsultaProductos(){
			$oc = 'oc';
			$db = new MyODBC_DB($oc);
	    $sql = "SELECT item.ITEM,item.DESCRIPCION,item.PRICE
				FROM ITEM item
				WHERE item.estado = 'True'
				ORDER BY item.DESCRIPCION ASC
				ROWS 1 TO 50";
			$consulta=$db->sentenciaodbc($sql);
			$arreglo=array();
			while($conteo = odbc_fetch_array($consulta)){
		  	$arreglo[] = $conteo;
		  }
			return $arreglo;
		}

		static public function mdlConsultaProductosBusacador($producto){
			$oc = 'oc';
			$db = new MyODBC_DB($oc);
	    	$sql = "SELECT item.ITEM,item.DESCRIPCION,item.PRICE
					FROM ITEM item
					WHERE item.DESCRIPCION LIKE '%".$producto."%' AND item.estado = 'True'
					ORDER BY item.DESCRIPCION ASC";
			$consulta=$db->sentenciaodbc($sql);
			$arreglo=array();
			while($conteo = odbc_fetch_array($consulta)){
		  	$arreglo[] = $conteo;
		  }
			return $arreglo;
		}

		static public function mdlConsultaInfoProduc($idItem){
			$oc = 'oc';
			$db = new MyODBC_DB($oc);
	    	$sql = "SELECT item.ITEM,item.DESCRIPCION,item.PRICE, item.descripcion2, item.itemmstr, item.impoventa, item.price1,  item.price2, item.price3,
			 								item.price4, item.factor, item.unidad_embalaje, itemdet.disponible, item.modelo, item.despiece2, item.num_unidades_por_caja,
											item.familia, item.unidades_caja, item.descripcion_prf, item.notas, item.modelo, item.fecha_creacion, item.indate
					FROM ITEM item
					LEFT JOIN itemdet itemdet ON(itemdet.item=item.item AND itemdet.location='1')
					WHERE item.estado = 'True' AND item.ITEM = '".$idItem."' ";
			$consulta=$db->sentenciaodbc($sql);
			$arreglo=array();
			while($conteo = odbc_fetch_array($consulta)){
		  	$arreglo[] = $conteo;
		  }
			return $arreglo;
		}

		static public function mdlConsultaDisponibles($item){
			$db = new MyODBC();
			$sql = "SELECT sum(disponible) AS disponible
					FROM itemdet i
					WHERE i.e=1 AND i.s=1 AND i.location = '1' AND i.item='".$item."' ";
			$consulta = $db->sentenciaodbc($sql);
			$arreglo=array();
			while($conteo = odbc_fetch_array($consulta)){
		  	$arreglo[] = $conteo;
		  }
			return $arreglo;
		}

		static public function mdlConsultaOrdenes($item){
			$db = new MyODBC();
			$hoy  = date('m/d/Y',time()-21600);//fecha hoy
			$fecha = date("m/d/Y", strtotime("$hoy -60 days"));//2 meses atras
			$sql = "SELECT sum(recibido) recibido, sum(qty) qty
					FROM ipocd, ipoce
					WHERE ipoce.e=1 AND ipoce.s=1	AND ipocd.e=1 AND ipocd.s=1	AND ipoce.e = ipocd.e	AND ipoce.s = ipocd.s	AND ipocd.item = '".$item."'
										AND ipoce.tipo = ipocd.tipo AND ipoce.number = ipocd.number AND ipoce.estado <> 'CERRADO' AND ipoce.fecha > '".$fecha."' ";
			$consulta = $db->sentenciaodbc($sql);
			$arreglo=array();
			while($conteo = odbc_fetch_array($consulta)){
				$arreglo[] = $conteo;
			}
			return $arreglo;
		}

		static public function  mdlVistaPagina($arrayDatosUsuarios){					
			$sql = "INSERT INTO visitas_pagina(fechaIngreso,ipCliente,nitCliente,paisCliente,ciudadCliente)
							VALUES(:fechaIngreso, :ipUsuario, :nitCliente, :paisUsuario, :ciudadUsuario)";
			$stmt = conexionPDO::conectarIpActiva('mediqboy_oclaeconomia')->prepare($sql);
			$stmt -> bindParam(":ipUsuario",$arrayDatosUsuarios[0]['ipUsuario'], PDO::PARAM_STR); //Enlazar parametro
			$stmt -> bindParam(":fechaIngreso",$arrayDatosUsuarios[0]['fechaIngreso'], PDO::PARAM_STR); //Enlazar parametro
			$stmt -> bindParam(":paisUsuario",$arrayDatosUsuarios[0]['paisUsuario'], PDO::PARAM_STR); //Enlazar parametro
			$stmt -> bindParam(":ciudadUsuario",$arrayDatosUsuarios[0]['ciudadUsuario'], PDO::PARAM_STR); //Enlazar parametro
			$stmt -> bindParam(":nitCliente",$arrayDatosUsuarios[0]['nitCliente'], PDO::PARAM_STR); //Enlazar parametro			
			if($stmt -> execute()){
				return 1;
			}else{
				return 0;
			}
			
		}
		
	}