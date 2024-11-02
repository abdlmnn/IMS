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





<!-- LOGIN FUNCTIONS QUERY -->
<?php
    // Selecting Username and Password on Admin Table to login
    function selectAdminUserPass($username,$password)
    {
        $selectAdmin = "
            SELECT *
            FROM admin
            WHERE username = '$username', password = '$password'
        ";

        include_once 'queryExecute.php';
        return queryExecute($selectAdmin);
    }
?>
<!-- LOGIN FUNCTIONS QUERY -->





<!-- CATEGORY FUNCTIONS QUERY -->
 <?php
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
 ?>
<!-- CATEGORY FUNCTIONS QUERY -->





<!-- STOCK ITEMS FUNCTIONS QUERY -->
<?php
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

    // Selecting all Stock Items Table with exact ID
    function selectStockItemsID($id)
    {
        $selectStockItems = "
            SELECT *
            FROM stockitems
            WHERE stockitemsID = '$id'
        ";

        include_once 'queryExecute.php';
        return queryExecute($selectStockItems);
    }

    // Updating the values through the Stock Items Table
    function updateStockItemsSetID($image,$name,$gender,$id)
    {
        $updateStockItems = "
            UPDATE stockitems
            SET stockitemsImage = '$image',stockitemsName = '$name', gender = '$gender'
            WHERE stockitemsID = '$id'
        ";

        include_once 'queryExecute.php';
        return queryExecute($updateStockItems);
    }

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
<!-- STOCK ITEMS FUNCTIONS QUERY -->





<!--  -->