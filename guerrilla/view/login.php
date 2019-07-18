<?php
include_once 'public/header.php';
?>
<section id="login" class="login-block">
    <div class="container">
        <div class="row">
            <div class="col login-sec">
                <h2 class="text-center">Log In</h2>
                <form method="post" action="?controlador=MethodsGet&accion=inspectGuerrillaParam" id="p" class="login-form">
                    <div class="form-group">
                        <label id="usuario" name="usuario" for="exampleInputEmail1" class="text-uppercase">User name</label>
                        <input id="usuario" name="usuario" type="text" class="form-control" placeholder="your user name here">

                    </div>
                    <div class="form-group">
                        <label id="correo" name="correo" for="exampleInputPassword1" class="text-uppercase">Email</label>
                        <input id="correo" name="correo" type="text" class="form-control" placeholder="youremail@dominio">
                    </div>
                    	
                    <input class="btn btn-dark" type="submit" id="Log In" name="sig in" value="Log In" />
                </form>
            </div>
        </div>
    </div>
</section>