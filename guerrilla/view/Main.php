<?php
include_once 'public/header.php';
?>

<?php 
$guerrillaArray = json_decode($vars['registro'],true);
var_dump($guerrillaArray);
echo $guerrillaArray["nombre"];?>

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
     <div class="col-md-3">
        <a href="?controlador=views&accion=showProfile&nombre=<?php echo $guerrillaArray['nombre']; ?>" class="btn btn-block btn-lg btn-success" id="b1">
            <i class="fa fa-user" id="icone_grande"></i> <br><br>
            <span class="texto_grande">My Profile</span></a>
      </div>
    
      <div class="col-md-3">
        <a  href="?controlador=MethodsGet&accion=getRank&user="<?php echo $guerrillaArray["nombre"];?> class="btn btn-block btn-lg btn-success" id="b2">
             <i class="fa fa-users" id="icone_grande"></i> <br><br>
            <span class="texto_grande">Ranking</span></a>
        </div>
    
    
      <div class="col-md-3">
        <a href="?controlador=views&accion=showSettings" class="btn btn-block btn-lg btn-primary" id="b3">
            <i class="fas fa-cogs" id="icone_grande"></i> <br><br>
            <span class="texto_grande">Settings</span></a>
            
      </div>
      <div class="col-md-3">
          <a href="index.php" class="btn btn-block btn-lg btn-warning" id="b4">
           <i class="fas fa-sign-out-alt" id="icone_grande"></i> <br><br>
            <span class="texto_grande">Log out</span></a>
      </div> 
    <br>
    
</div>