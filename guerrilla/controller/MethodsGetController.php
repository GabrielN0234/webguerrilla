<?php
class MethodsGetController {
    public function __construct() {
        $this->view=new View();
    }//contructor

    public function inspectGuerrillaParam(){
        require 'model/APIconnection.php';
        $usuario = $_POST["usuario"];
        $items = new APIconnection();
        $data['registro'] = $items->getGuerrilla($usuario);
       // $this->view->show("indexView.php",null);
       $this->view->show('Main.php',$data);
        //echo "done";    
    }
    public function inspectGuerrilla(){
        
    }
    public function getRank(){
        
        $user = $_GET["user"];
        require 'model/APIconnection.php';
        $items = new APIconnection();
        $data['registro'] = $items->getGuerrillas($user);
        var_dump($data);
        
       // $this->view->show("indexView.php",null);
       $this->view->show('rank.php',$data);
        //echo "done";   
    }

}//fin de clase
?>