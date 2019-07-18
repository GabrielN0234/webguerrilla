<?php
include_once 'public/header.php';
?>
<section id="login" class="login-block">
    <div class="container">
        <div class="row">
            <div class="col login-sec">
                <h2 class="text-center">Settings</h2>
                <form method="post" action="" id="p" class="login-form">
                    <div class="form-group">
                        <label id="ip" name="ip"  class="text-uppercase">Ip Adress</label>
                        <input id="ip" name="ip" type="text" class="form-control" placeholder="000.000.000.000">

                    </div>


                    <input class="btn btn-dark" type="button" id="connect" name="sig in" value="Connect" onclick="message('No database connection :v')" />
                </form>
            </div>
        </div>
        <br>
        
    </div>
</section>