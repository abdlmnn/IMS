<?php 
    $title = 'Update Category'; 

    include 'includes/head.php'; 

    // Using Function Selecting the exact ID of category that i want to update it and display the same value
    include 'categoryProcess.php';
    $categoryTable = displayCategory();

    foreach ($categoryTable as $categoryRows)
    {
?>
    <form action="categoryProcess.php" method="post">

        <input type="hidden" name="inputID" value="<?php echo $categoryRows['categoryID']; ?>">
        <input type="text" name="inputName" value="<?php echo $categoryRows['categoryName']; ?>" required>

        <button type="submit" name="update-category-button">UPDATE Category</button>

    </form>
<?php
    };

    include 'includes/foot.php';
?>