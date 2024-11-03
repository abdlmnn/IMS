<?php 
    session_start();

    $title = 'Categories'; 
    
    include 'includes/header.php'; 
    include 'includes/sidebar.php';
?>
    <main>
        <h1>Categories</h1>
        <hr>
        <div class="whole-category-container">
            <div class="cat-cont" id="categoryForm">
                <div class="form-container">
                    <h1>ADD Category</h1>

                    <form action="categoryProcess.php" method="post">

                    <input type="text" name="inputName" placeholder="Enter name" required autofocus>

                    <button type="submit" name="add-category-button"><ion-icon name="add-outline" class="add-icon"></ion-icon></button>

                    </form>
                </div>
            </div>

            <div class="table-container">

                <button type="submit" class="add-category" onclick="showForm()"><ion-icon name="add-circle-outline" class="circle-icon"></ion-icon></button>
                <button type="submit" class="add-category" onclick="closeForm()"><ion-icon name="close-circle-outline" class="circle-icon"></ion-icon></button>

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
                            include 'functions/queryFunction.php';
                            $categoryTable = selectAllTable(tableName: 'category');
                        
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
            </div>
        </div>
    </main>
<?php include 'includes/footer.php' ?>