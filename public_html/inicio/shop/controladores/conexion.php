<?php
///clase conexion MySQL
class MySQL{
 //propiedades
  	private $conexion;

//metodos
  public function MySQL($base_datos){
	  if(!isset($this->conexion)){
			$this->conexion = (mysql_connect("192.168.1.11:33206","root","3edcft6")) or die(mysql_error());
			mysql_set_charset('utf8', $this->conexion);
			mysql_select_db($base_datos,$this->conexion) or die(mysql_error());
		 }
	  }
  public function MySQL1($base_datos){
	  if(!isset($this->conexion)){
			$this->conexion = (mysql_connect("192.168.1.11","root","3edcft6")) or die(mysql_error());
			mysql_set_charset('utf8', $this->conexion);
			mysql_select_db($base_datos,$this->conexion) or die(mysql_error());
		 }
	  }

 public function sentencia($sentencia){
	  $resultado = mysql_query($sentencia,$this->conexion);
	  return $resultado;
	 }


 public function sentenciasql($sentencia){
	  $resultado = mysql_query($sentencia,$this->conexion);
	  return $resultado;
	 }


 static public function conectar(){

      //los datos en variables
      $usuario="root";
      $contraseña="3edcft6";
      $servidor="192.168.1.11:33206";
      $baseDatos="formatos";

         //1. Conexion al servidor, se pasan los parametros de
         //Servidor, usuario y password

         if(!$conectID=@mysql_connect($servidor, $usuario, $contraseña)){
		echo "No se logró conexión al servidor MySQL";
         }else{

                //2. Si la conexión salió bien, se procede a conectar en la
                //base de datos usando la conexión anterior con el servidor
                //a la base de datos llamada db

		if(!@mysql_select_db($baseDatos,$conectID)){
			echo "No se logró la conexion a la base de datos";
                }else{
                	//3. En este paso ya hay conexión total
                    //y la función podrá regresar un valor para empezar a
                    //Ejecutar query's
					//echo "Conexión  establecida";
			return $conectID;
		}
	  }
  }

}


////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///clase conexion MySQLi
class DbMySqli{
 //propiedades
  	private $conexion;
	//metodos
	public function MySqli($base_datos){
		if(!isset($this->conexion)){
			$this->conexion = new mysqli("192.168.1.11:33206", "root", "3edcft6", $base_datos);
			if ($this->conexion->connect_errno or $this->conexion->connect_error) {
    				echo "Fallo al conectar a MySQLi: (" . $this->conexion->connect_errno . ") " . $this->conexion->connect_error;
				exit();
			}
			/* cambiar el conjunto de caracteres a utf8 */
			if (!$this->conexion->set_charset("utf8")) {
    				printf("Error cargando el conjunto de caracteres utf8: %s\n", $mysqli->error);
    				exit();
			}
		}
	}

	public function selectMySqli($sentencia){//Para SELECT
		$this->conexion->autocommit(FALSE);//Activa o desactiva las modificaciones de la base de datos autoconsignadas
		$this->conexion->begin_transaction(MYSQLI_TRANS_START_READ_ONLY);//Inicia una transacción
		if($resultado = $this->conexion->query($sentencia)){//Realiza una consulta a la base de datos
			if($this->conexion->commit()){// Consigna la transacción actual
			}else{
				echo "Error en el Commit:".$sentencia;
			}
		}else{
			echo "Error en la consulta: ".$sentencia;
		}
		$resultado = $this->conexion->query($sentencia);
		return $resultado;
    	$resultado->close(); //liberar el conjunto de resultados
		$this->conexion->close();// cerrar la conexión
	}

	public function iudMysqli($sentencia){//Para INSERT, UPDATE, DELETE
		$this->conexion->autocommit(FALSE);//Activa o desactiva las modificaciones de la base de datos autoconsignadas
		/*
		MYSQLI_TRANS_START_READ_ONLY: Inicia la transacción como "START TRANSACTION READ ONLY".
		MYSQLI_TRANS_START_READ_WRITE: Inicia la transacción como "START TRANSACTION READ WRITE".
		MYSQLI_TRANS_START_WITH_CONSISTENT_SNAPSHOT: Inicia como"START TRANSACTION WITH CONSISTENT SNAPSHOT".
		*/
		$this->conexion->begin_transaction(MYSQLI_TRANS_START_READ_WRITE);//Inicia una transacción
		if($resultado = $this->conexion->query($sentencia)){//Realiza una consulta a la base de datos
			if($this->conexion->commit()){// Consigna la transacción actual
			}else{
				echo "Error en el Commit:".$sentencia;
			}
		}else{
			echo "Error en la consulta: ".$sentencia;
		}
		$resultado = $this->conexion->query($sentencia);
		return $this->conexion->affected_rows; //Retorna numero de filas afectadas:
		//-1: genero error...
		//0:  no afecto filas
		//mayor a 0, es el numero de filas afectadas
    	$resultado->close(); //Liberar el conjunto de resultados
		$this->conexion->close();// cerrar la conexión
	}

	public function iudMysqliMysqliInsertId($sentencia){//Para INSERT, UPDATE, DELETE
		$this->conexion->autocommit(FALSE);//Activa o desactiva las modificaciones de la base de datos autoconsignadas
		/*
		MYSQLI_TRANS_START_READ_ONLY: Inicia la transacción como "START TRANSACTION READ ONLY".
		MYSQLI_TRANS_START_READ_WRITE: Inicia la transacción como "START TRANSACTION READ WRITE".
		MYSQLI_TRANS_START_WITH_CONSISTENT_SNAPSHOT: Inicia como"START TRANSACTION WITH CONSISTENT SNAPSHOT".
		*/
		$this->conexion->begin_transaction(MYSQLI_TRANS_START_READ_WRITE);//Inicia una transacción
		if($resultado = $this->conexion->query($sentencia)){//Realiza una consulta a la base de datos
			$resultado = mysqli_insert_id($this->conexion);
			if($this->conexion->commit()){// Consigna la transacción actual
			}else{
				echo "Error en el Commit:".$sentencia;
			}
		}else{
			echo "Error en la consulta: ".$sentencia;
		}


		return $resultado;	//$this->conexion->affected_rows; //Retorna numero de filas afectadas:
		//-1: genero error...
		//0:  no afecto filas
		//mayor a 0, es el numero de filas afectadas
    	$resultado->close(); //Liberar el conjunto de resultados
		$this->conexion->close();// cerrar la conexión
	}
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////


///clase conexion ODBC
class MyODBC{
 private $conexion;

 public function MyODBC(){
	  if(!isset($this->conexion)){
			$this->conexion = (odbc_connect("oc","SYSDBA","masterkey")) or die(mysql_error());
			//mysql_select_db("prueba",$this->conexion) or die(mysql_error());
			//$cid=odbc_connect($dsn, $usuario, $clave);
		 }
	  }
	  	////////conexion ODBC con diferenteBD
		//oplaeconomia2014.fdb		dns = oc
		//edith.fdb					dns = edith
		//mediqboy.fdb				dns = mediqboy
		//juliocesar.fdb			dns = jc
	public function MyODBCi($bd){
	  if(!isset($this->conexion)){
			$this->conexion = (odbc_connect($bd,"SYSDBA","masterkey")) or die(mysql_error());

			/* cambiar el conjunto de caracteres a utf8 */
			if (!$this->conexion->set_charset("utf8")) {
    				printf("Error cargando el conjunto de caracteres utf8: %s\n");
    				exit();
			}

			//mysql_select_db("prueba",$this->conexion) or die(mysql_error());
			//$cid=odbc_connect($dsn, $usuario, $clave);
		 }
	  }


 public function sentenciaodbc($sentencia){
 	//echo $sentencia;
	  $resultado = odbc_exec($this->conexion,$sentencia)or die (odbc_error());
	  return $resultado;
	 }


}


///clase conexion ODBC
class MySQLServer{
	private $conexion;

	public function SQLServer($servidor, $bd, $usuario, $password){
  	$varconexion="Driver={SQL Server};Server=$servidor;Database=$bd;Integrated Security=SSPI;Persist Security Info=False;";
  	$this->conexion = odbc_connect($varconexion,$usuario,$password);
		//return($conn);


	  /*if(!isset($this->conexion)){
			$this->conexion = (mysql_connect("192.168.1.11","root","3edcft6")) or die(mysql_error());
			mysql_set_charset('utf8', $this->conexion);
			mysql_select_db($base_datos,$this->conexion) or die(mysql_error());
		 }  */
	  }

 public function sentenciaSQLSERVER($sentencia){
	 $resultado = odbc_exec($this->conexion,$sentencia)or die (odbc_error());
	  return $resultado;
}




}



///clase conexion ODBC
class MyODBC_DB{
 private $conexion;

////////conexion ODBC con diferenteBD
//oplaeconomia2014.fdb		dns = oc
//edith.fdb					dns = edith
//mediqboy.fdb				dns = mediqboy
//juliocesar.fdb			dns = jc

 public function MyODBC_DB($bd){
	  if(!isset($this->conexion)){      
			$this->conexion = (odbc_connect($bd,"SYSDBA","masterkey")) or die(mysql_error());
			//mysql_select_db("prueba",$this->conexion) or die(mysql_error());
			//$cid=odbc_connect($dsn, $usuario, $clave);
		 }
	  }

 public function sentenciaodbc($sentencia){
	  $resultado = odbc_exec($this->conexion,$sentencia)or die (odbc_error());
	  return $resultado;
	 }


}
class Conectar{

    public static function conexionMysqli($bdMysql){
        $conexion=new mysqli("192.168.1.11","root","3edcft6",$bdMysql);
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;
    }

}



class conexionPDO{

	static public function conectar($base){

		$usuario="root";
		$contraseña="3edcft6";
		$dbName=$base;
		try {
			$bd = new PDO('mysql:host=181.225.100.118;port=33206;dbname='.$dbName, $usuario, $contraseña);
			$bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$bd ->exec("set names utf8");//cartabetres, Ñ tildes, se puedan recibir sin problemas
			return $bd;
		} catch(PDOException $e) {
		  echo 'Error conectando con la base de datos: ' . $e->getMessage();
		}
	}

	static public function conectarIpActiva($dbName){		//realiza la conexion al hosting del dominion: www.mediqboy.com

		$usuario="mediqboy_Economi";
		$contraseña="789123oc";
		//$dbName="mediqboy_oclaeconomia";
		$host=	"192.185.174.237";
		try {
			$bd = new PDO('mysql:host='.$host.';dbname='.$dbName, $usuario, $contraseña);
			$bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$bd ->exec("set names utf8");//cartabetres, Ñ tildes, se puedan recibir sin problemas
			return $bd;
		} catch(PDOException $e) {
		  return "0";
		}
	}

}


class conexionPDOFirebird{

	static public function conectar($odbc){

		$usuario="SYSDBA";
		$contraseña="masterkey";
		switch ($odbc) {
			case 'oc':
				$base='company2018.fdb';
			break;
			case 'edith':
				$base='oclaeconomia2018.fdb';
			break;
			case 'edith':
				$base='company2018.fdb';
			break;
			case 'oc':
				$base='company2018.fdb';
			break;
		}
			$base=$odbc;

		$dsn = "firebird:dbname=d:\wxdb\'".$base."';host=localhost;charset=utf8;";
		try {
			$bd = new PDO($dsn, $usuario, $contraseña);
			$bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $bd;
		} catch(PDOException $e) {
		  echo 'Error conectando con la base de datos: ' . $e->getMessage();
		}
	}
}
