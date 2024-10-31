<?php
    include 'includes/head.php';

        //  Adding or Inserting the inputfield to stock items tables
        if (isset($_POST['add-stockitems-button']))
        {
            $inputName = $_POST['inputName'];
            $gender = $_POST['gender'];
            $image_path = basename($_FILES['inputImage']['name']);

            // Upload image file from directory which is image
            $target_dir = "image/";
            $target_file = $target_dir . basename($_FILES['inputImage']['name']);
            move_uploaded_file($_FILES['inputImage']['name'], $target_file);
            
            include_once 'functions/myFunction.php';
            insertStockItemsValues($image_path,$inputName,$gender);

            header('location: stockitems.php');
        };
    
        // Updating all the value from Stock Items table with exact ID
        if (isset($_POST['update-stockitems-button']))
        {
            $inputID = $_POST['inputID'];
            $inputName= $_POST['inputName'];
            $image_path = basename($_FILES['inputImage']['name']);

            // Upload image file from directory which is image
            // $target_dir = "image/";
            // $target_file = $target_dir . basename($_FILES['inputImage']['name']);
            // move_uploaded_file($_FILES['inputImage']['name'], $target_file);
    
            include 'functions/myFunction.php';
            updateStockItemsSetID($image_path,$inputName,$gender,$inputID);

            header('location: stockitems.php');
        };
    
        // For the updateID and deleteID statement
        if (isset($_GET['updateID']))
        {
            function displayStockItems()
            {   
                // Selecting the exact ID of Stock Items that i want to update it and display the same value
                $updateID = $_GET['updateID'];
    
                include 'functions/myFunction.php';
                return selectStockItemsID(id: $updateID);
            }
        }
        else
        {
            // Deleting the exact Stock Items ID that i want to delete it
            $deleteID = $_GET['deleteID'];

            include 'functions/myFunction.php';
            deleteStockItemsID($deleteID);

            header('location: stockitems.php');
        };
        
?>