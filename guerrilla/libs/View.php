<?php

class View {

    public function __construct() {
        ;
    }

//contructor

    public function show($nombreVista, $vars = array()) {
        $config = Config::singleton();
        $path = $config->get('viewFolder') . $nombreVista;
        if(is_file($path)==FALSE){
            trigger_error('Page '.$path.' not exist',E_USER_NOTICE);
            return FALSE;
        }//if(is_file($path)==FALSE)
        
        if(is_array($vars)){
            foreach ($vars as $key => $value) {
                $key=$value;
            }
        }//if(is_array($vars))
        include $path;
    }//show
}//fin clase
?>