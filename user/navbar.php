<?php
    include 'header.php';
?>
    <div class="header">
        <div class="company-name">
            <a href="registration.php">STUART BOUTIQUE</a>
        </div>

        <nav class="navbar">
            <a href="#" onclick="openModal('signupModal')">Sign Up</a>
            <a href="#" onclick="openModal('signinModal')">Sign In</a>
        </nav>
    </div>

    <div class="modal" id="signupModal">
        <?php 
            include 'signup.php';
        ?>
    </div>

    <div class="modal" id="signinModal">
        <?php
            include 'signin.php';
        ?>
    </div>
