<?php
    include "includes/head.php";

    // Adding or Inserting the inputName to genderName
    if (isset($_POST['add-gender-button']))
    {
        $inputName = $_POST['inputName'];
            
        $insertGender = "INSERT INTO gender (genderName) VALUES ('$inputName')";
            
        include "functions/queryExecute.php";
        queryExecute(queryName: $insertGender);

        header('location: gender.php');
    }
    $mysqli->close();
?>