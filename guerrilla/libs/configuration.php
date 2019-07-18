<?php

require 'libs/Config.php';
$config = Config::singleton();
$config->set('controllerFolder', 'controller/');
$config->set('modelFolder', 'model/');
$config->set('viewFolder', 'view/');

$config->set('dbhost','localhost');
$config->set('dbname','id9806008_lenguajes');
$config->set('dbuser','id9806008_root');
$config->set('dbpass','12345');
//$config->set('dbname','lenguajes');
//$config->set('dbuser','root');
//$config->set('dbpass','');
?>

