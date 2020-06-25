<?php 

/**
 * 
 */
class controladorSeguridad{
	
	static public function decode_get2($string){
		$string = base64_decode($string); //decodifico la cadena
		$control = "3edcft6@yhnji9"; //defino la llave con la que fue encriptada la cadena,, cambiarla por la que deseamos usar
		$string = str_replace($control, "", "$string"); //quito la llave de la cadena
		return $string;
	}

	static public function encode_this($string) {
		$string = utf8_encode($string);
		$control = "3edcft6@yhnji9"; //defino la llave para encriptar la cadena, cambiarla por la que deseamos usar
		$string = $control.$string.$control; //concateno la llave para encriptar la cadena
		$string = base64_encode($string);//codifico la cadena
		return($string);
	}


}