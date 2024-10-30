<?php
    $title = 'Update Category';

    include 'includes/head.php';
?>
<body>
    <?php
        // Selecting the exact ID of category that i want to update it and display the same value
        $updateID = $_GET['updateID'];

        $selectCategory = "SELECT * FROM category WHERE categoryID='$updateID'";

        include_once 'functions/queryExecute.php';
        $category = queryExecute($selectCategory);

        foreach ($category as $categoryRows)
        {
    ?>
    <form action="categoryUpdate.php" method="post">

        <input type="hidden" name="inputID" value="<?php echo $categoryRows['categoryID']; ?>">
        <input type="text" name="inputName" value="<?php echo $categoryRows['categoryName']; ?>" required>

        <button type="submit" name="update-category-button">UPDATE Category</button>

    </form>
    <?php
        }

        // Updating all the value from category table with exact ID
        if (isset($_POST['update-category-button']))
        {
            $inputID = $_POST['inputID'];
            $inputName= $_POST['inputName'];

            $updateCategory = "UPDATE category SET categoryName='$inputName' WHERE categoryID='$inputID'";

            include_once 'functions/queryExecute.php';
            queryExecute($updateCategory);

            header('location: category.php');
        }
        $mysqli->close();
    ?>
</body>
</html>