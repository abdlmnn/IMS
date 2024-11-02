<?php
    include 'connection.php';

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
            
        include 'functions/queryFunction.php';
        insertStockItemsValues($image_path,$inputName,$gender);

        header('location: stockitems.php');
    };
    
    // Updating all the value from Stock Items table with exact ID
    if (isset($_POST['update-stockitems-button']))
    {
        $updateID = $_POST['updateID'];
        $updateName= $_POST['updateName'];
        $updateGender= $_POST['updateGender'];
        $image_path = basename($_FILES['updateImage']['name']);

        // Upload image file from directory which is image
        // $target_dir = "image/";
        // $target_file = $target_dir . basename($_FILES['updateImage']['name']);
        // move_uploaded_file($_FILES['updateImage']['name'], $target_file);
    
        include 'functions/queryFunction.php';
        updateStockItemsSetID($image_path,$updateName,$updateGender,$updateID);

        header('location: stockitems.php');
    };
    
    // For the updateID, deleteID and search box statement
    if (isset($_GET['updateID']))
    {
        function displayStockItems()
        {   
            // Selecting the exact ID of Stock Items that i want to update it and display the same value
            $updateID = $_GET['updateID'];
    
            include 'functions/queryFunction.php';
            return selectStockItemsID(id: $updateID);
        }
    }
    elseif (isset($_GET['deleteID']))
    {
        // Deleting the exact Stock Items ID that i want to delete it
        $deleteID = $_GET['deleteID'];

        include 'functions/queryFunction.php';
        deleteStockItemsID($deleteID);

        header('location: stockitems.php');
    };
?>