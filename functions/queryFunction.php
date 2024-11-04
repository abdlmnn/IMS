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
    // Selecting Username and Password on User Table to login
    function selectUser($username,$password)
    {
        $selectUser = "
            SELECT *
            FROM user
            WHERE username = '$username', password = '$password'
        ";

        include_once 'queryExecute.php';
        return queryExecute($selectUser);
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
    function insertItemsValues($image,$name,$gender)
    {   
        $insertItems = "
            INSERT INTO
            items (itemsImage,itemsName,gender)
            VALUES ('$image','$name','$gender')
        ";

        include_once 'queryExecute.php';
        return queryExecute($insertItems);
    }

    // Selecting all  Items Table with exact ID
    function selectItemsID($id)
    {
        $selectItems = "
            SELECT *
            FROM items
            WHERE itemsID = '$id'
        ";

        include_once 'queryExecute.php';
        return queryExecute($selectItems);
    }

    // Updating the values through the  Items Table
    function updateItemsSetID($image,$name,$gender,$id)
    {
        $updateItems = "
            UPDATE items
            SET itemsImage = '$image',itemsName = '$name', gender = '$gender'
            WHERE itemsID = '$id'
        ";

        include_once 'queryExecute.php';
        return queryExecute($updateItems);
    }

    // Deleteing the values through the  Items Table with exact ID
    function deleteItemsID($id)
    {
        $deleteItems = "
            DELETE FROM items
            WHERE itemsID = '$id'
        ";

        include_once 'queryExecute.php';
        return queryExecute($deleteItems);
    }
?>
<!--  ITEMS FUNCTIONS QUERY -->





<!--  -->