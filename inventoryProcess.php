<?php
    include 'connection.php';

    //  Adding or Inserting the inputfield to stock items tables
    if (isset($_POST['add-inventory-button']))
    {
        $inputName = $_POST['inputName'];
        $inputSize = $_POST['inputSize'];
        $inputPrice = $_POST['inputPrice'];
        $inputStock = $_POST['inputStock'];
        $categoryID = $_POST['category'];
        $image_path = basename($_FILES['inputImage']['name']);

        // Upload image file from directory which is image
        $target_dir = "image/";
        $target_file = $target_dir . basename($_FILES['inputImage']['name']);
        move_uploaded_file($_FILES['inputImage']['name'], $target_file);
            
        include 'functions/queryFunction.php';
        insertItemsValues($categoryID,$image_path,$inputName,$inputSize,$inputPrice,$inputStock);

        header('location: inventory.php');
    };

     // Updating all the value from Stock Items table with exact ID
    if (isset($_POST['update-inventory-button']))
    {
        $updateID = $_POST['updateID'];
        $updateName = $_POST['updateName'];
        $updateSize = $_POST['updateSize'];
        $updatePrice = $_POST['updatePrice'];
        $updateStock = $_POST['updateStock'];
        $updateCategory = $_POST['updateCategory'];
        $image_path = basename($_FILES['updateImage']['name']);
 
        // Upload image file from directory which is image
        $target_dir = "image/";
        $target_file = $target_dir . basename($_FILES['updateImage']['name']);
        move_uploaded_file($_FILES['updateImage']['name'], $target_file);
     
        include 'functions/queryFunction.php';
        updateInventorySetID($updateCategory,$image_path,$updateName,$updateSize,$updatePrice,$updateStock,$updateID);
  
        header('location: inventory.php');
    };
    
    // For the updateID, deleteID statement
    if (isset($_GET['updateID']))
    {
        function displayInventory()
        {   
            // Selecting the exact ID of Inventory that i want to update it and display the same value
            $updateID = $_GET['updateID'];
    
            include 'functions/queryFunction.php';
            return selectInventoryID(id: $updateID);
        }
    }
    elseif (isset($_GET['deleteID']))
    {
        // Deleting the exact Stock Items ID that i want to delete it
        $deleteID = $_GET['deleteID'];

        include 'functions/queryFunction.php';
        deleteInventoryID($deleteID);

        header('location: inventory.php');
    };
?>