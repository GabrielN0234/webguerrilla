<?php

class MethodsPostController {
    
    public function __construct() {
        $this->view=new View();
    }//contructor
    public function createGuerrilla(){
        require 'model/APIconnection.php';
        $usuario = $_POST["usuario"];
        $correo = $_POST["correo"];
        $faction = $_POST["faction"];
        //instancia el modelo
        echo "tryng create guerrilla...";
        $items = new APIconnection();
        $items->createGuerrilla($usuario, $correo,$faction);
        $this->view->show('Main.php',null);
//        $data['registro'] = $items->getGuerrillas();
//        var_dump($data);
//       // $this->view->show("indexView.php",null);
//        $this->view->show('rank.php',$data);
//        //echo "done";    
    }
    public function attack(){
        require 'model/APIconnection.php';

        $guerrilla = $_GET["guerrilla"];
        $items = new APIconnection();

        
        $items->attack($guerrilla);
        $data['registro'] = $items->attack($guerrilla);
//        echo '<script>alert("SUCCESS!!!")</script>";';
//        $this->view->show('Main.php',$data);  
    }
    public function buyUnits(){
        require 'model/APIconnection.php';
        $id = $_POST["id"];
        $usuario = $_POST["usuario"];
        $engineer = $_POST["engineer"];
        $Assault = $_POST["Assault"];
        $tank = $_POST["tank"];
        $bunker = $_POST["bunker"];
        
        $items = new APIconnection();
        $items->buyUnits($id, $engineer,$Assault,$tank,$bunker);
        
        $data['registro'] = $items->getGuerrilla($usuario);
       // $this->view->show("indexView.php",null);
       echo '<script>alert("SUCCESS!!!")</script>";';
       $this->view->show('Main.php',$data);  
    }

}//fin de clase



?>