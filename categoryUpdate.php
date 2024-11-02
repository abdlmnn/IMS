<?php 
    $title = 'Update Category'; 
    
    include 'includes/header.php'; 
    include 'includes/sidebar.php';

    // Using Function Selecting the exact ID of category that i want to update it and display the same value
    include 'categoryProcess.php';
    $categoryTable = displayCategory();

    foreach ($categoryTable as $categoryRows)
    {
?>
<main>
    <form action="categoryProcess.php" method="post">

        <input type="hidden" name="updateID" value="<?php echo $categoryRows['categoryID']; ?>">
        <input type="text" name="updateName" value="<?php echo $categoryRows['categoryName']; ?>" required>

        <button type="submit" name="update-category-button">UPDATE Category</button>

    </form>
</main>
<?php
    };

    include 'includes/footer.php';
?>