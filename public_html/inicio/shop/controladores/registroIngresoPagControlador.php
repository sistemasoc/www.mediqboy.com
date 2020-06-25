<?php
    class controladorIngresoPagina{        

        static public function ctrPrincipalIngrePag(){            
            $arrayDatosUsuarios = controladorIngresoPagina::ctrInfoCliente();
            controladorIngresoPagina::ctrInsertaDatos($arrayDatosUsuarios);
        }        

        /*********** controla la consulta de la info del cliente ************/   
        static public function ctrInfoCliente(){

            $ipCliente = $_SERVER['REMOTE_ADDR'];//ipCliente 'provedor de servicios'
            $fechaIngreso = date('Y-m-d H:i:s');//fecha Actual
            //consulta la info del cliente ciudad pais
            $arrayInfoUbicaCliente = controladorIngresoPagina::obtener_ciudad($ipCliente);
            $paisIngreso = $arrayInfoUbicaCliente[0]['pais'];//pais cliente
            $ciudadCliente = $arrayInfoUbicaCliente[0]['ciudad'];//ciudad donde esta registrada la ip
            if ($_SESSION['nit_usuario'] == '') {
                $nitCliente = 1;
            }else $nitCliente = $_SESSION['nit_usuario'];

            $arrayDatosUsuarios[] = array('ipUsuario'=>$ipCliente,
                                            'fechaIngreso'=>$fechaIngreso,
                                            'paisUsuario'=>$paisIngreso,
                                            'ciudadUsuario'=>$ciudadCliente,
                                            'nitCliente'=>$nitCliente);

            return $arrayDatosUsuarios;
        }
        
        /*********** controla la consulta de la info del cliente ciudad pais ************/
        static public function obtener_ciudad($ip){
                               
            $apiKey = controladorCiudadCliente::construct('c0415dc55d58fc4104b9f472e790e7e8cdf7f0b79278da2b0b0fe6e0a355fbe0');
            $arrayInfoUbicaCliente = controladorCiudadCliente::ctrInfoUbicaCliente($ip, $apiKey);            
            
            return $arrayInfoUbicaCliente;
        }           



        /*********** controla guarda registro de visita ************/
        static public function ctrInsertaDatos($arrayDatosUsuarios){
            if (count($arrayDatosUsuarios) > 0) {                
                modeloProductos::mdlVistaPagina($arrayDatosUsuarios);
            }
        }

    }