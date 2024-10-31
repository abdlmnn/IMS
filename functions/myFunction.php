<?php
    include 'connection/connect.php';

    // This is for All Table 
    // Selecting all the Table to display the value
    function selectAllTable($tableName)
    {
        $selectTable = "
            SELECT * 
            FROM $tableName 
        ";  

        include_once 'queryExecute.php';
        return queryExecute($selectTable);
    }

    // This is for Category Table
    // Selecting all Category Table with exact ID
    function selectCategoryID($id)
    {
        $selectCategory = "
            SELECT *
            FROM category 
            WHERE categoryID = '$id'
        ";

        include_once 'queryExecute.php';
        return queryExecute($selectCategory);
    }

    // This is for Stock Items Table
    // Selecting all Stock Items Table with exact ID
    function selectStockItemsID($id)
    {
        $selectStockItems = "
            SELECT *
            FROM stockitems
            WHERE stockitemsID = '$id'
        ";

        include_once 'functions/queryExecute.php';
        return queryExecute($selectStockItems);
    }

    // This is for Category Table
    // Inserting the values through the Category Table
    function insertCategoryValues($name)
    {
        $insertCategory = "
            INSERT INTO 
            category (categoryName)
            VALUES ('$name')
        ";

        include_once 'queryExecute.php';
        return queryExecute($insertCategory);
    }

    // This is for Stock Items Table
    // Inserting the values through the Stock Items Table
    function insertStockItemsValues($image,$name,$gender)
    {   
        $insertStockItems = "
            INSERT INTO
            stockitems (stockitemsImage,stockitemsName,gender)
            VALUES ('$image','$name','$gender')
        ";

        include_once 'queryExecute.php';
        return queryExecute($insertStockItems);
    }

    // This for Category Table
    // Updating the values through the Category Table
    function updateCategorySetID($name,$id)
    {
        $updateCategory = "
            UPDATE category 
            SET categoryName = '$name'
            WHERE categoryID = '$id'
        ";

        include_once 'queryExecute.php';
        return queryExecute($updateCategory);
    }

    // This for Stock Items Table
    // Updating the values through the Stock Items Table
    function updateStockItemsSetID($image,$name,$gender,$id)
    {
        $updateStockItems = "
            UPDATE stockitems
            SET stockitemsImage = '$image',stockitemsName = '$name', gender = '$gender'
            WHERE stockitemsID = '$id'
        ";

        include_once 'functions/queryExecute.php';
        return queryExecute($updateStockItems);
    }

    // This is for Category Table
    // Deleteing the values through the Category Table with exact ID
    function deleteCategoryID($id)
    {
        $deleteCategory = "
            DELETE FROM category
            WHERE categoryID = '$id'
        ";

        include_once 'queryExecute.php';
        return queryExecute($deleteCategory);
    }
    
    // This is for Stock Items Table
    // Deleteing the values through the Stock Items Table with exact ID
    function deleteStockItemsID($id)
    {
        $deleteStockItems = "
            DELETE FROM stockitems
            WHERE stockitemsID = '$id'
        ";

        include_once 'queryExecute.php';
        return queryExecute($deleteStockItems);
    }
?>