<?php
    include 'includes/head.php';

    // Deleting the exact category ID 
    $deleteID = $_GET['deleteID'];

    $deleteCategory = "DELETE FROM category WHERE categoryID='$deleteID'";

    include 'functions/queryExecute.php';
    queryExecute($deleteCategory);

    header('location: category.php');

    $mysqli->close();
?>