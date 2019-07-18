<?php

class APIconnection {


    public function __construct() {

    }
    public function createGuerrilla($usuario, $correo,$faction) {
            $data = array(
                "usuario" => $usuario,
                "correo" => $correo,
                "faction"   => $faction,
                "timestamp"  => "1",
                "rank"  => "1",
                "resurcesID"  => "1",
                "buildingsID"  => "1",
                "armyID"  => "1",
            );
            $ch = curl_init("http://localhost/rest/api.php");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST"); //establecemos el verbo http que queremos utilizar para la petición
            curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($data));//enviamos el array data
            $response = curl_exec($ch);//obtenemos la respuesta
            curl_close($ch);// Se cierra el recurso CURL y se liberan los recursos del sistema
            if(!$response) {
                //return false;
                echo 'false';
            }else{
                echo $response;
                //return $response;
            }
    }
    public function attack($guerrilla) {
            $data = array(
                "guerrilla" => $guerrilla
                
            );
            $ch = curl_init("http://localhost/rest/api.php?attack=a");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST"); //establecemos el verbo http que queremos utilizar para la petición
            curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($data));//enviamos el array data
            $response = curl_exec($ch);//obtenemos la respuesta
            curl_close($ch);// Se cierra el recurso CURL y se liberan los recursos del sistema
            if(!$response) {
                //return false;
                echo 'false';
            }else{
                echo $response;
                //return $response;
            }
    }
    public function getGuerrilla($usuario){

            $data = array("usuario" => $usuario);//datos a enviar
            
            $ch = curl_init("http://localhost/rest/api.php?inspectGuerrilla=".$usuario);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);//true si es correcto, false si no lo es
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");//establecemos el verbo http que queremos utilizar para la petición
            curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($data));//enviamos el array data
            $response = curl_exec($ch);//obtenemos la respuesta
            curl_close($ch);// Se cierra el recurso CURL y se liberan los recursos del sistema
            if(!$response) {
                echo 'error';
                //return false;
            }else{
                return($response);
            }
    }
    public function getGuerrillas($usuario){
            $data = array("usuario" => $usuario);//datos a enviar
            
            $ch = curl_init("http://localhost/rest/api.php?ranking=".$usuario);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);//true si es correcto, false si no lo es
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");//establecemos el verbo http que queremos utilizar para la petición
            curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($data));//enviamos el array data
            $response = curl_exec($ch);//obtenemos la respuesta
            curl_close($ch);// Se cierra el recurso CURL y se liberan los recursos del sistema
            if(!$response) {
                echo 'error';
                //return false;
            }else{
                return($response);
            }
        }
    public function buyUnits($id, $engineer,$Assault,$tank,$bunker){
        $data = array(
                "id" => $id,
                "assault" => $Assault,
                "engineer"   => $engineer,
                "tank"  => $tank,
                "bunker"  => $bunker);
        
            $ch = curl_init("http://localhost/rest/api.php?buy=a");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST"); //establecemos el verbo http que queremos utilizar para la petición
            curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($data));//enviamos el array data
            $response = curl_exec($ch);//obtenemos la respuesta
            curl_close($ch);// Se cierra el recurso CURL y se liberan los recursos del sistema
            if(!$response) {
                //return false;
                echo 'false';
            }else{
                echo $response;
                //return $response;
            }
    }
}

// fin de clase
?>
