<?php
    $title = 'Login';
    
    include "includes/header.php";

    session_start();
?>
<body>

    <div class="body-login">

        <div class="box-login">

        <div class="box-title">
            <span class="title">Stuart Boutique</span>
        </div>

        <form action="loginProcess.php" method="post" class="login-form">

            <div class="row">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Username" class="input" name="inputUsername" required/>
            </div>

            <div class="row">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Password"  class="input" name="inputPassword" required/>
            </div>

            <div class="row button">
                <button type="submit" name="login-button" class="input">Login</button>
            </div>

        </form>

        </div>
        
    </div>
</body>
</html>