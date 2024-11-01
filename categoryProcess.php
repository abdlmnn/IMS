<?php
    include "includes/head.php";
    
    // Adding or Inserting the inputName to categoryName
    if (isset($_POST['add-category-button']))
    {
        $inputName = $_POST['inputName'];

        include 'functions/queryFunction.php';
        insertCategoryValues($inputName);

        header('location: category.php');
    };

    // Updating all the value from category table with exact ID
    if (isset($_POST['update-category-button']))
    {
        $inputID = $_POST['inputID'];
        $inputName= $_POST['inputName'];

        include 'functions/queryFunction.php';
        updateCategorySetID($inputName,$inputID);

        header('location: category.php');
    };

    // For the updateID and DeleteID statement
    if (isset($_GET['updateID']))
    {
        function displayCategory()
        {   
            // Selecting the exact ID of category that i want to update it and display the same value
            $updateID = $_GET['updateID'];

            include 'functions/queryFunction.php';
            return selectCategoryID(id: $updateID);
        }
    }
    else
    {
        // Deleting the exact category ID that i want to delete it
        $deleteID = $_GET['deleteID'];

        include 'functions/queryFunction.php';
        deleteCategoryID($deleteID);

        header('location: category.php');
    };
?>