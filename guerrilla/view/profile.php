<?php
include_once 'public/header.php';
//   $JsonGuerrilla = '[
//  {
//    "name": "dia mas bello",
//    "email": "string",
//    "faction": "string",
//    "timestamp": 0,
//    "rank": 0,
//    "resources": {
//      "oil": 100,
//      "money": 300,
//      "people": 250
//    },
//    "buildings": {
//      "bunker": 0
//    },
//    "army": {
//      "assault": 0,
//      "engineer": 0,
//      "tank": 0
//    }
//  }
//]';
    $guerrillaArray = json_decode($vars['registro'],true);
    var_dump($guerrillaArray)
?>

<section id="login" class="login-block">
    <div class="container">
        <div class="row">
            <div class="col login-sec">
                <h2 class="text-center"><?php echo $guerrillaArray["nombre"]; ?></h2>
                <div class="container">
                    <div class="col-md-6">
                    <div class="form-group">
                        <label id="oil" name="Oil" >Oil</label>

                    </div>
                    <div class="form-group">
                        <label id="money" name="Oil" >Money</label>
                    </div>
                    <div class="form-group">
                        <label id="people" name="people" >People</label>
                    </div>
                    	
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <label id="oil" name="Oil" ><?php echo $guerrillaArray["oil"]; ?></label>
                    </div>
                    <div class="form-group">
                        <label id="money" name="Oil" ><?php echo $guerrillaArray["money_"]; ?></label>
                    </div>
                    <div class="form-group">
                        <label id="people" name="people" ><?php echo $guerrillaArray["people"]; ?></label>
                    </div>
                    	

                    </div>

                </div>
                <br>
            </div>
        </div>
        <div class="row">
               
                   <div class="col login-sec">
                    <h2 class="text-center">Buy Units</h2>
                    <form method="post" action="?controlador=MethodsPost&accion=buyUnits" id="p" class="login-form">
                        <input id="id" name="id" type="hidden" value="<?php echo $guerrillaArray["guerrillaID"]; ?>">
                        <input id="usuario" name="usuario" type="hidden" value="<?php echo $guerrillaArray["nombre"]; ?>">
                        <div class="form-group">
                            <label id="engineer" name="engineer"  class="text-uppercase">engineers</label>
                            <input id="engineer" name="engineer" type="number" class="form-control" required>

                        </div>
                        <div class="form-group">
                            <label id="Assault" name="Assault"  class="text-uppercase">Assault</label>
                            <input id="Assault" name="Assault" type="number" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label id="tank" name="tank"  class="text-uppercase">tank</label>
                            <input id="tank" name="tank" type="number" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label id="bunker" name="bunker"  class="text-uppercase">bunker</label>
                            <input id="bunker" name="bunker" type="number" class="form-control" required>
                        </div>

                        <input class="btn btn-dark" type="submit" id="Log In" name="sig in" value="purchase" />
                    </form>   
                </div> 
               
        </div>
    </div>
</section>