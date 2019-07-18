<?php

class DefaultController{
    
    private $view;
    
    public function __construct() {
        $this->view=new View();
    }//fin constructor
    
    public function acciondefault(){
        //llamar al modelo para traer datos
        
        $this->view->show("indexView.php",null);
    }//aciondefault
    public function mostrarRegistrarAdm(){  
        $this->view->show("registraradmView.php",null);
    }
    public function mostrarRegistraRol(){  
        
        //$this->view->show("registrarRolView.php",null);
    }
    public function mostrarRegistraArticulo(){  
        $this->view->show("registrarArticuloView.php",null);
    }
    
}//fin de clase

?>