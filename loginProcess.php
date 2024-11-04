<?php
    session_start();
    
    include 'connection.php';
    

    if ($_POST['login-button'])
    {
        // fetching all input field and Compare the inputfield on my Admin Table Data
        $inputUsername = $_POST['inputUsername'];
        $inputPassword = $_POST['inputPassword'];

        include 'functions/queryFunction.php';
        $userTable = selectUser(username: $inputUsername,password: $inputPassword);

        
    };

?>