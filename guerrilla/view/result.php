<?php
include_once 'public/header.php';
    $JsonResult=' [
    {
      "name": "1",
      "resources": {
        "oil": 22,
        "money": 40,
        "people": 10
      },
      "buildings": {
        "bunker": 2
      },
      "army": {
        "assault": 45,
        "engineer": 11,
        "tank": 3
      }
    }
  ]
';
    
    $resultArray = json_decode($JsonResult,true);
?>


<section id="login" class="login-block">
    <div class="container">
        <div class="row">
            <div class="col login-sec">
                <h2 class="text-center"><?php if($resultArray[0]["name"]==1){
                        echo 'You WIN!!!';
                }else{
                    echo 'You lose :(';
                }?></h2>

                <table id="tabla" class="table table-striped" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th class="th-sm">Resources
                            </th>


                        </tr>
                    </thead>
                        <tbody>
                            <tr>
                                <td id="fila"> Oil: <?php echo $resultArray[0]["resources"]["oil"]?></td>
                                <td id="fila"> Money: <?php echo $resultArray[0]["resources"]["money"]?></td>
                                <td id="fila">People: <?php echo $resultArray[0]["resources"]["people"]?></td>
                            </tr>
                            
                        </tbody>
                      
                </table>
                <table id="tabla" class="table table-striped" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th class="th-sm">Buildings
                            </th>


                        </tr>
                    </thead>
                        <tbody>
                            <tr>
                                <td id="fila"> Bunker: <?php echo $resultArray[0]["buildings"]["bunker"]?></td>

                            </tr>
                            
                        </tbody>
                      
                </table>
                <table id="tabla" class="table table-striped" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th class="th-sm">Army
                            </th>


                        </tr>
                    </thead>
                        <tbody>
                            <tr>
                                <td id="fila"> Asault: <?php echo $resultArray[0]["army"]["assault"]?></td>
                                <td id="fila"> Engeneer: <?php echo $resultArray[0]["army"]["engineer"]?></td>
                                <td id="fila">tank: <?php echo $resultArray[0]["army"]["tank"]?></td>

                            </tr>
                            
                        </tbody>
                      
                </table>
                
            </div>
        </div>
    
        
        
    </div>
</section>