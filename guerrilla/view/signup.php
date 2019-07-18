<?php
    include_once 'public/header.php';
?>
<section id="login" class="login-block">

    <div class="container">
        <div class="row">
            <div class="col login-sec">
                <h2 class="text-center">Sign Up</h2>
                <form method="post" action="?controlador=MethodsPost&accion=createGuerrilla" id="p" class="login-form">
                    <div class="form-group">
                        <label id="usuario" name="usuario" for="exampleInputEmail1" class="text-uppercase">User name</label>
                        <input id="usuario" name="usuario" type="text" class="form-control" placeholder="your user name here" required>

                    </div>
                    <div class="form-group">
                        <label id="correo" name="correo" for="exampleInputPassword1" class="text-uppercase">Email</label>
                        <input id="correo" name="correo" type="text" class="form-control" placeholder="youremail@dominio" required>
                    </div>
                    
                     <div class="form-group">  
                         <label id="etiqueta" name="faction" class="text-uppercase">Faction:</label>
                        <select name="faction"  class="browser-default custom-select" required>
                            <option value="" disabled selected>Select faction</option>
                            <option value="c" >China</option>
                            <option value="m" >MEC</option>
                            <option value="u" >USMC</option> 
                       </select>
                        
                       </div> 
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" value=""> I agree to <a href="Javascript:showForms('view/Error.php')" required>WebGuerrilla terms</a>
                        </label>
                    </div>
                    <br>
                    
                    <input class="btn btn-dark" type="submit" id="Sign up" name="sig in" value="Sign up" />
                </form>
            </div>
        </div>
    </div>
</section>