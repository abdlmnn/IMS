<?php
    include 'includes/head.php';

    // Adding or Inserting the input field to Stock Items table
    if (isset($_POST['add-stockitems-button']))
    {
        $inputName = $_POST['inputName'];
        $inputGenderID = $_POST['inputGenderID'];
        $inputCategoryID = $_POST['inputCategoryID'];
        $image_path = basename($_FILES['inputImage']['name']);

        $insertStockItems = "INSERT INTO stockitems (stockitemsImage,stockitemsName,genderID,categoryID) VALUES ('$image_path','$inputName','$inputGenderID','$inputCategoryID')";

        include "functions/queryExecute.php";
        queryExecute($insertStockItems);

        // Upload image file
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES['inputImage']['inputName']);
        move_uploaded_file($_FILES['inputImage']['inputName'], $target_file);

        header('location: stockitems.php');
    }
    $mysqli->close();
?>