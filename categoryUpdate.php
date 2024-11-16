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
    <h1>Categories</h1>
        <hr>
        <div class="whole-category-container">
            
        <div class="cat-cont" id="categoryForm">
            <div class="form-container">
                <h1>UPDATE Category</h1>
                <form action="categoryProcess.php" method="post">

                    <input type="hidden" name="updateID" value="<?php echo $categoryRows['id']; ?>">
                    <input type="text" name="updateName" value="<?php echo $categoryRows['name']; ?>" required>

                    <button type="submit" name="update-category-button">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </button>

                </form>
            </div>
        </div>

            <div class="table-container">

                <button type="submit" class="add-category" onclick="showForm()">
                    <ion-icon name="add-circle-outline" class="circle-icon"></ion-icon>
                </button>
                <button type="submit" class="add-category" onclick="closeForm()">
                    <ion-icon name="close-circle-outline" class="circle-icon"></ion-icon>
                </button>

                <div class="scroll-table">
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
                            include_once 'functions/queryFunction.php';
                            $categoryTable = selectAllTable(tableName: 'category');
                        
                            foreach ($categoryTable as $categoryRows)
                            {
                        ?>      
                            <tbody>
                                <tr>
                                    <td><?php echo $categoryRows['id']; ?></td>
                                    <td><?php echo $categoryRows['name']; ?></td>
                                    <td>
                                        <a href="categoryUpdate.php?updateID=<?php echo $categoryRows['id'];?>">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                            <!-- <span><ion-icon name="create-outline" class="crud-icon"></ion-icon></span> -->
                                        </a>
                                        <a href="categoryProcess.php?deleteID=<?php echo $categoryRows['id'];?>">
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
            </div>
        </div>
</main>
<?php
    };

    include 'includes/footer.php';
?>