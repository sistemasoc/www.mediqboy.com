<?php
	$email = $_GET['correo'];
	$correos = '';
	$mail_correcto = 0;	  
  	if ((strlen($email) >= 6) && (substr_count($email,"@") == 1) && (substr($email,0,1) != "@") && (substr($email,strlen($email)-1,1) != "@")) {
	    if ((!strstr($email,"'")) && (!strstr($email,"\"")) && (!strstr($email,"\\")) && (!strstr($email,"\$")) && (!strstr($email," "))) {	    
    		if (substr_count($email,".")>= 1) {	    
    			$term_dom = substr(strrchr ($email, '.'),1);	    
		    	if (strlen($term_dom)>1 && strlen($term_dom)<5 && (!strstr($term_dom,"@")) ) {
		       		$antes_dom = substr($email,0,strlen($email) - strlen($term_dom) - 1);
		       		$caracter_ult = substr($antes_dom,strlen($antes_dom)-1,1);
		     	  	if ($caracter_ult != "@" && $caracter_ult != ".") {
		       			$mail_correcto = 1;
			       }
	 			}
    		}
    	}
    }
   	if ($mail_correcto)	{
    	if($correos=='') {
    		$correos = $email;
    	}else{
    		$correos = $correos.",".$email;
  		}
   	}   
	
	header('Content-type: application/json; charset=utf-8');	
	echo json_encode(['correo'=>$correos]);
?>