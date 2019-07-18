<?php

class viewsController {
    
    public function __construct() {
        $this->view=new View();
    }//contructor
    public function showError(){
        $this->view->show('Error.php',null);
    }
    public function showMain(){
        $this->view->show('Main.php',null);
    }
    public function showHome(){
        $this->view->show('Home.php',null);
    }
    public function showIndexView(){
        $this->view->show('indexView.php',null);
    }
    public function showProfile(){
        require 'model/APIconnection.php';
        $usuario = $_GET["nombre"];
        $items = new APIconnection();
        $data['registro'] = $items->getGuerrilla($usuario);
        $this->view->show('profile.php',$data);
    }
    public function showRank(){
        $this->view->show('rank.php',null);
    }
    public function showResult(){
        $this->view->show('result.php',null);
    }
    public function showSettings(){
        $this->view->show('settings.php',null);
    }
    public function showLogin(){
        $this->view->show('login.php',null);
    }
    public function showSignUp(){
        $this->view->show('signup.php',null);
    }



}//fin de clase



?>