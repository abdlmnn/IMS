<?php
    include 'includes/head.php';

    // Deleting the exact gender ID 
    $deleteID = $_GET['deleteID'];

    $deleteGender = "DELETE FROM gender WHERE genderID='$deleteID'";

    include 'functions/queryExecute.php';
    queryExecute($deleteGender);

    header('location: gender.php');

    $mysqli->close();
?>