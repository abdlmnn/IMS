<?php 
    $title = 'Categories'; 
    
    include 'includes/header.php'; 
    include 'includes/sidebar.php';

    session_start();
?>
<main>
    <div class="cat-cont">
        <div class="form-container">
            <h1>Categories</h1>

            <form action="categoryProcess.php" method="post">

            <input type="text" name="inputName" placeholder="Enter category name" required>

            <button type="submit" name="add-category-button">ADD Category</button>

            </form>
        </div>
    </div>

    <div class="table-container">
        <table class="cat-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <?php
                // Displaying and Selecting all Table Rows which is category
                include 'functions/queryFunction.php';
                $categoryTable = selectAllTable('category');
            
                foreach ($categoryTable as $categoryRows)
                {
            ?>      
                <tbody>
                    <tr>
                        <td><?php echo $categoryRows['categoryID']; ?></td>
                        <td><?php echo $categoryRows['categoryName']; ?></td>
                        <td>
                            <a href="categoryUpdate.php?updateID=<?php echo $categoryRows['categoryID'];?>">
                                <i class="fa-solid fa-pen-to-square"></i>
                                <!-- <span><ion-icon name="create-outline" class="crud-icon"></ion-icon></span> -->
                            </a>
                            <a href="categoryProcess.php?deleteID=<?php echo $categoryRows['categoryID'];?>">
                                <i class="fa-solid fa-trash"></i>
                                <!-- <span><ion-icon name="trash-bin-outline" class="crud-icon"></ion-icon></span> -->
                            </a>
                        </td>
                    </tr>
                </tbody>
            <?php
                };
            ?>
        </table>
    </div>
</main>
<?php include 'includes/footer.php' ?>