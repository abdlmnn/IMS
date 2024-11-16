<?php
    include 'connection.php';

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
?>





<!-- SIGN UP FUNCTIONS QUERY -->
<?php
    // Selecting Username and Password on User Table to login
    function insertUserValues($fullname,$address,$phoneNumber,$postal,$location,$email,$password,$cPassword)
    {
        $insertUser = "
            INSERT INTO
            user (fullname,address,phoneNumber,postal,location,email,password,cPassword)
            VALUES ('$fullname','$address','$phoneNumber','$postal','$location','$email','$password','$cPassword')
        ";

        include_once 'queryExecute.php';
        return queryExecute($insertUser);
    }
?>
<!-- SIGN UP FUNCTIONS QUERY -->





<!-- CATEGORY FUNCTIONS QUERY -->
 <?php
    // Inserting the values through the Category Table
    function insertCategoryValues($name)
    {
        $insertCategory = "
            INSERT INTO 
            category (name)
            VALUES ('$name')
        ";

        include_once 'functions/queryExecute.php';
        return queryExecute($insertCategory);
    }

     // Selecting all Category Table with exact ID
    function selectCategoryID($id)
    {
        $selectCategory = "
            SELECT *
            FROM category 
            WHERE id = '$id'
        ";
 
        include_once 'functions/queryExecute.php';
        return queryExecute($selectCategory);
    }

     // Updating the values through the Category Table
     function updateCategorySetID($name,$id)
     {
         $updateCategory = "
             UPDATE category 
             SET name = '$name'
             WHERE id = '$id'
         ";
 
         include_once 'functions/queryExecute.php';
         return queryExecute($updateCategory);
     }
 
     // Deleteing the values through the Category Table with exact ID
     function deleteCategoryID($id)
     {
         $deleteCategory = "
             DELETE FROM category
             WHERE id = '$id'
         ";
 
         include_once 'functions/queryExecute.php';
         return queryExecute($deleteCategory);
     }
 ?>
<!-- CATEGORY FUNCTIONS QUERY -->







<!-- STOCK ITEMS FUNCTIONS QUERY -->
<?php
    // Inserting the values through the Inventory Table
    function insertItemsValues($category,$image,$name,$size,$price,$stock_quantity)
    {   
        $insertItems = "
            INSERT INTO
            inventory (categoryID,image,name,size,price,stock_quantity)
            VALUES ('$category','$image','$name','$size','$price','$stock_quantity')
        ";

        include_once 'functions/queryExecute.php';
        return queryExecute($insertItems);
    }

    // Selecting all Inventory Table with exact ID
    function selectInventoryID($id)
    {
        $selectInventory = "
            SELECT *
            FROM inventory
            WHERE inventoryID = '$id'
        ";

        include_once 'queryExecute.php';
        return queryExecute($selectInventory);
    }

    // Updating the values through the Inventory Table
    function updateInventorySetID($category,$image,$name,$size,$price,$stock_quantity,$id)
    {
        $updateInventory = "
            UPDATE inventory
            SET categoryID = '$category',image = '$image',name = '$name',size = '$size',price = '$price', stock_quantity = '$stock_quantity'
            WHERE inventoryID = '$id'
        ";

        include_once 'queryExecute.php';
        return queryExecute($updateInventory);
    }

    // Deleteing the values through the Inventory Table with exact ID
    function deleteInventoryID($id)
    {
        $deleteInventory = "
            DELETE FROM inventory
            WHERE inventoryID = '$id'
        ";

        include_once 'queryExecute.php';
        return queryExecute($deleteInventory);
    }
?>
<!--  ITEMS FUNCTIONS QUERY -->





<!--  -->