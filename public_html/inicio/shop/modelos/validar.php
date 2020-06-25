<?php
    // Arrays para guardar mensajes y errores:
     $aErrores = array();
     $aMensajes = array();

 // Patrón para usar en expresiones regulares (admite letras acentuadas y espacios):
     $patron_texto = "/^[a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙ\s]+$/";
     $patron_correo = "/^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,4})+$/";
     $patron_clave = ^(?=.{10,}$)(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$;


// Comprobar si se ha enviado el formulario:
    if( !empty($_POST) )
    {
    	alert("el formulario no puede estar vacio");
        echo "FORMULARIO RECIBIDO:<br/>";
        echo "====================<p/>";
        // Mostrar la información recibida del formulario:
        print_r( $_POST );
        echo "<hr/>";

 // Comprobar si llegaron los campos requeridos:
         if( isset($_POST['usuario']) && isset($_POST['correo']) && isset($_POST['password']) && isset($_POST['telefono'])  )
        {
        	// Nombre:
             if( empty($_POST['usuario']) )
                $aErrores[] = "Debe especificar el nombre";
            else
            {
                // Comprobar mediante una expresión regular, que sólo contiene letras y espacios:
                 if( preg_match($patron_texto, $_POST['usuario']) )
                    $aMensajes[] = "Nombre: [".$_POST['usuario']."]";
                else
                    $aErrores[] = "El nombre sólo puede contener letras y espacios";
            }

            // Correo:
            if( empty($_POST['correo']) )
                $aErrores[] = "Debe especificar un correo";
            else
            {
                // Comprobar mediante una expresión regular, que sólo contienen letras y espacios:
                if( preg_match($patron_correo, $_POST['correo']) )
                    $aMensajes[] = "Correo: [".$_POST['correo']."]";
                else
                    $aErrores[] = "debe ser el formato correcto de un correo electronico";
            }

               // Contraseña:
            if( empty($_POST['password']) )
                $aErrores[] = "Debe especificar una contraseña";
            else
            {
                // Comprobar mediante una expresión regular, que sólo contienen letras y espacios:
                if( preg_match($patron_clave, $_POST['password']) )
                    $aMensajes[] = "Contraseña: [".$_POST['password']."]";
                else
                    $aErrores[] = "La contraseña debe contener al menos 1 mayúscula, 1 minúscula, 1 dígito, 1 carácter especial y una longitud de al menos 10 caracteres";
            }

            // Telefono:
            if( (isset($_POST['telefono']) ) && (!empty($_POST['telefono'])) )
            {
                if( is_numeric($_POST['telefono']) )
                    $aMensajes[] ="Telefono: [".$_POST['telefono']."]";
                else
                    $aErrores[] = "El numero de telefono debe contener 10 números.";
            }

            else
        {
            echo "<p>No se han especificado todos los datos requeridos.</p>";
        }





?>