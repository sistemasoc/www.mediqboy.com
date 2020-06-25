<?php
if(isset($_POST['input-29']) != ""){
			$to = "abc@gmail.com";
			$from =  $_POST["input-30"];
			$message = "&nbsp;&nbsp;&nbsp;&nbsp;<strong>Name: </strong>".$_POST["input-29"]."<br />";
			$message .= "&nbsp;&nbsp;&nbsp;&nbsp;<strong>Email Address: </strong>".$_POST["input-30"]."<br />";
			$message .= "&nbsp;&nbsp;&nbsp;&nbsp;<strong>Phone No: </strong>".$_POST["input-31"]."<br />";
			$message .= "&nbsp;&nbsp;&nbsp;&nbsp; <strong>Appointment Date: </strong>".$_POST["datepicker"]."<br />";
			$message .= "&nbsp;&nbsp;&nbsp;&nbsp; <strong>Message: </strong>".$_POST["textarea"]."<br />";
			$subject = 'Book Appointment';		
			$headers = "From: ".$_POST["input-30"]."\n";
			$headers .= "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
			
			$send =	mail($to,$subject,$message,$headers);
	
	
	
	if($send)
	{
		echo "success";
	}
	else
	{
		echo "error1";
	}
}

if(isset($_POST['contact_name']) != ""){
			$to = "abc@gmail.com";
			$from =  $_POST["contact_email"];
			$message = "&nbsp;&nbsp;&nbsp;&nbsp;<strong>Name: </strong>".$_POST["contact_name"]."<br />";
			$message .= "&nbsp;&nbsp;&nbsp;&nbsp;<strong>Email Address: </strong>".$_POST["contact_email"]."<br />";
			$message .= "&nbsp;&nbsp;&nbsp;&nbsp;<strong>Subject: </strong>".$_POST["contact_subject"]."<br />";
			$message .= "&nbsp;&nbsp;&nbsp;&nbsp; <strong>Message: </strong>".$_POST["message"]."<br />";
			$subject = 'Contact Enquiry';		
			$headers = "From: ".$_POST["contact_email"]."\n";
			$headers .= "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
			
			$send =	mail($to,$subject,$message,$headers);
	
	
	
	if($send)
	{
		echo "success";
	}
	else
	{
		echo "error2";
	}
}


if(isset($_POST['subscribe_name']) != ""){
			$to = "abc@gmail.com";
			$from =  $_POST["subscribe_email"];
			$message = "&nbsp;&nbsp;&nbsp;&nbsp;<strong>Name: </strong>".$_POST["subscribe_name"]."<br />";
			$message .= "&nbsp;&nbsp;&nbsp;&nbsp;<strong>Email Address: </strong>".$_POST["subscribe_email"]."<br />";
			$subject = 'Newsletter subscription';		
			$headers = "From: ".$_POST["subscribe_email"]."\n";
			$headers .= "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
			
			$send =	mail($to,$subject,$message,$headers);
	
			if($send)
			{
				echo "success";
			}
			else
			{
				echo "error3";
			}
}



if(isset($_POST['id_clienteRecuperar']) != ""){

	$nit=$_POST['id_clienteRecuperar'];
	$ip=$_POST['ip'];
	
	if($nit){
		//echo '<meta http-equiv="refresh" content="0;url=http://'.$ip.'/virtualmax/login/control/recuperar.php?nit='.$nit.'">';
		echo "success";
	}
	else{
		//echo "error".$nit;
		//echo '<meta http-equiv="refresh" content="0;url=http://'.$ip.'/virtualmax/login/control/recuperar.php?nit='.$nit.'">';
	}
}





if(isset($_POST['id_cliente']) != ""  && isset($_POST['pass_cliente']) != ""){

	$nit=$_POST['id_cliente'];
	$pass=$_POST['pass_cliente'];
	$ip=$_POST['ip'];
	
	if($pass<>'' and $ip<>'' and $pass <>''){
		//echo '<meta http-equiv="refresh" content="0;url=http://'.$ip.'/virtualmax/login/control/control_login.php?usuario='.$nit.'&clave='.$pass.'&ip='.$ip.'">';
		echo "success";
	}
	else{
		//echo '<meta http-equiv="refresh" content="0;url=http://'.$ip.'/virtualmax/login/control/control_login.php?usuario='.$nit.'&clave='.$pass.'&ip='.$ip.'">';		
	}
}
		



if(isset($_POST['id_proveedorRecuperar']) != ""){

	$nit=$_POST['id_proveedorRecuperar'];
	$ip=$_POST['ip'];
	
	if($nit){
		echo "success";
		/*echo '<meta http-equiv="refresh" content="0;url=http://'.$ip.'/proveedores/recuperar/control/index.php?nit='.$nit.'">';
		echo "<script>							
				window.location='http://www.mediqboy.com'; 			
				alert('ok');
			  </script>";*/

	}
	else{		
		//echo '<meta http-equiv="refresh" content="0;url=http://'.$ip.'/proveedores/recuperar/control/index.php?nit='.$nit.'">';
		/*echo "<script>							
				window.location='http://www.mediqboy.com'; 				
			  </script>";*/
	}
}


if(isset($_POST['id_proveedor']) != ""  && isset($_POST['pass_proveedor']) != ""){

	$nit=$_POST['id_proveedor'];
	$pass=$_POST['pass_proveedor'];
	$ip=$_POST['ip'];
	
	if($pass<>'' and $ip<>'' and $pass <>''){
		echo "success";
		//echo '<meta http-equiv="refresh" content="0;url=http://'.$ip.'/proveedores/login/control/login.php?usuario='.$nit.'&clave='.$pass.'&ip='.$ip.'">';
	}
	else{
		//echo '<meta http-equiv="refresh" content="0;url=http://'.$ip.'/proveedores/login/control/login.php?usuario='.$nit.'&clave='.$pass.'&ip='.$ip.'">';		
	}
}
		
	

	
?>