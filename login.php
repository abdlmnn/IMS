<?php
    $title = 'Login';
    
    include "includes/head.php";
?>
<div class="body-login">

    <div class="box-login">

        <div class="box-title">
            <span class="title">Stuart Boutique</span>
        </div>

        <form action="" method="post" class="login-form">

            <div class="row">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Username" class="input" name="inputUsername" required/>
            </div>

            <div class="row">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Password"  class="input" name="inputPassword" required/>
            </div>

            <div class="pass">
                <a href="#">Forgot password?</a>
            </div>

            <div class="row button">
                <input type="submit" value="Login" class="input"/>
            </div>

        </form>

    </div>
</div>
<?php include 'includes/foot.php'; ?>