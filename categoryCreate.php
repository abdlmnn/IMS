<?php
    include "includes/head.php";
    
    // Adding or Inserting the inputName to categoryName
    if (isset($_POST['add-category-button']))
    {
        $inputName = $_POST['inputName'];

        $insertCategory = "INSERT INTO category (categoryName) VALUES ('$inputName')";

        include 'functions/queryExecute.php';
        queryExecute($insertCategory);

        header('location: category.php');
    }
    $mysqli->close();
?>