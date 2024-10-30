<?php
    $title = 'Categories';

    include 'includes/head.php';
?>
<body>
    <h1>Categories</h1>
    <form action="categoryCreate.php" method="post">

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
            include_once 'functions/querySelectingAll.php';
            $category = querySelectingAll('category');
        
            foreach ($category as $categoryRows)
            {
        ?>      <tr>
                    <td><?php echo $categoryRows['categoryID']; ?></td>
                    <td><?php echo $categoryRows['categoryName']; ?></td>
                    <td>
                        <a href="categoryUpdate.php?updateID=<?php echo $categoryRows['categoryID'];?>">
                            Update
                        </a>
                        <a href="categoryDelete.php?deleteID=<?php echo $categoryRows['categoryID'];?>">
                            Delete
                        </a>
                    </td>
                </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>