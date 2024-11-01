<?php 
    $title = 'Categories'; 
    
    include 'includes/head.php'; 
?>

    <h1>Categories</h1>
    <form action="categoryProcess.php" method="post">

       <input type="text" name="inputName" placeholder="Enter category name" required>

       <button type="submit" name="add-category-button">ADD Category</button>

    </form>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Actions</th>
        </tr>
        <?php
            // Displaying and Selecting all Table Rows which is category
            include 'functions/queryFunction.php';
            $categoryTable = selectAllTable('category');
        
            foreach ($categoryTable as $categoryRows)
            {
        ?>      
                <tr>
                    <td><?php echo $categoryRows['categoryID']; ?></td>
                    <td><?php echo $categoryRows['categoryName']; ?></td>
                    <td>
                        <a href="categoryUpdate.php?updateID=<?php echo $categoryRows['categoryID'];?>">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        <a href="categoryProcess.php?deleteID=<?php echo $categoryRows['categoryID'];?>">
                            <i class="fa-solid fa-trash"></i>
                        </a>
                    </td>
                </tr>
        <?php
            };
        ?>
    </table>

<?php include 'includes/foot.php' ?>