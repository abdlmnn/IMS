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

                    <button type="submit" name="add-category-button">
                        <ion-icon name="add-outline" class="add-icon"></ion-icon>
                        <!-- <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><circle fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" cx="256" cy="56" r="40"/><path fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" d="M204.23 274.44c2.9-18.06 4.2-35.52-.5-47.59-4-10.38-12.7-16.19-23.2-20.15L88 176.76c-12-4-23.21-10.7-24-23.94-1-17 14-28 29-24 0 0 88 31.14 163 31.14s162-31 162-31c18-5 30 9 30 23.79 0 14.21-11 19.21-24 23.94l-88 31.91c-8 3-21 9-26 18.18-6 10.75-5 29.53-2.1 47.59l5.9 29.63 37.41 163.9c2.8 13.15-6.3 25.44-19.4 27.74S308 489 304.12 476.28l-37.56-115.93q-2.71-8.34-4.8-16.87L256 320l-5.3 21.65q-2.52 10.35-5.8 20.48L208 476.18c-4 12.85-14.5 21.75-27.6 19.46s-22.4-15.59-19.46-27.74l37.39-163.83z"/></svg> -->
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
                            include 'functions/queryFunction.php';
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
<?php include 'includes/footer.php' ?>