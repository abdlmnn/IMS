<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'testing';

    $mysqli = new mysqli($hostname,$username,$password,$database);

    $resultMysqli = $mysqli->connect_error;

    if ($resultMysqli)
    {
        die('Connection failed: ' . $mysqli->connect_error);
    }
    // else
    // {
    //     echo "Connection successfully";
    // }
?>  