<?php

    class controladorCiudadCliente{	    

        static public function construct($apiKey){
            if (!preg_match('/^[0-9a-z]{64}$/', $apiKey)) {
                throw new exception('Invalid IPInfoDB API key.');
            }

            return $apiKey;
        }	

        static public function ctrInfoUbicaCliente($ip, $apiKey){
            //envia datos a la pagina para averiguar ciudad           
            $response = file_get_contents('http://api.ipinfodb.com/v3/ip-city?key='.$apiKey.'&ip='.$ip);
            //divido el resultado por el ; y lo almaceno en un array
            $array = explode(';',$response);            
            //tomo el dato numero 6 que es la ciudad
            $pais = $array[4];
            $ciudad = $array[6];
            //valido si la ciudad no es null
            if ($ciudad === null) {
                $ciudad = 'Desconocida';
            }
            if ($pais === null) {
                $pais = 'Desconocido';
            }
            $arrayInfoUbicaCliente[] = array('pais'=>$pais,
                                             'ciudad'=>$ciudad);

            return $arrayInfoUbicaCliente;
        }
    }