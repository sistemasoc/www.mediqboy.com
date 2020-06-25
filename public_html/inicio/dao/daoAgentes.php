<?php
class agentesDao{

	static public function agentesCallCenter(){
		$db = new DbMySqli();
	    $db->MySqli('oclaeconomia');
		$sql = "SELECT * FROM  funcionarios WHERE estadoPersona=1";
		$consulta=$db->selectMySqli($sql);
		return $consulta;
		//$stmt -> close(); // cerra la conexion
		//$stmt = null;
	}	
}
