<?php
    $title = 'Inventory';

    include 'includes/header.php';
    include 'includes/sidebar.php';
?>
    <main>
        <h1>Inventory</h1>
        <hr>
        <div class="whole-category-container">
            
            <div class="cat-cont" id="categoryForm">
                <div class="form-container">
                    <h1>ADD Inventory</h1>
                    
                    <form action="inventoryProcess.php" method="post" enctype="multipart/form-data">
                        
                        <input type="file" name="inputImage" accept=".jpg, .jpeg, .png">
                        <br><br>
                        <input type="text" name="inputName" placeholder="Enter name" required autofocus>
                        <br><br>
                        <input type="number" name="inputPrice" placeholder="Enter price" required>
                        <br><br>
                        <input type="number" name="inputStock" placeholder="Enter stock" required>
                        <br><br>
                        <select name="category">
                            <option selected>---Categories---</option>
                            <?php
                                include_once 'functions/queryFunction.php';
                                $categoryTable = selectAllTable('category');

                                while($categoryRows = $categoryTable->fetch_assoc())
                                {
                            ?>  
                                <option value="<?php echo $categoryRows['id']; ?>"><?php echo $categoryRows['name']; ?></option>
                            <?php
                                }
                            ?>
                        </select>
                        <br><br>
                        <select name="size">
                            <option selected>---Size---</option>
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                            <option value="XL">XL</option>
                        </select>

                    <button type="submit" name="add-inventory-button">
                        <ion-icon name="add-outline" class="add-icon"></ion-icon>
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
                                <th>Category</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Size</th>
                                <th>Price</th>
                                <th>Stock</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <?php
                            // Displaying and Selecting all Table Rows which is category
                            include_once 'functions/queryFunction.php';
                            $inventoryTable = selectAllTable(tableName: 'inventory');                            
                        
                            foreach ($inventoryTable as $inventoryRows)
                            {
                        ?>      
                            <tbody>
                                <tr>
                                    <td><?php echo $inventoryRows['inventoryID']; ?></td>
                                    <td><?php echo $inventoryRows['categoryID']; ?></td>
                                    <td>
                                        <img src="image/<?php echo $inventoryRows['image']; ?>" width="100" title="<?php echo $inventoryRows['image']; ?>">
                                    </td>
                                    <td><?php echo $inventoryRows['name']; ?></td>
                                    <td><?php echo $inventoryRows['size']; ?></td>
                                    <td><?php echo $inventoryRows['price']; ?></td>
                                    <td><?php echo $inventoryRows['stock_quantity']; ?></td>
                                    <td>
                                        <a href="inventoryUpdate.php?updateID=<?php echo $inventoryRows['inventoryID'];?>">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                            <!-- <span><ion-icon name="create-outline" class="crud-icon"></ion-icon></span> -->
                                        </a>
                                        <a href="inventoryProcess.php?deleteID=<?php echo $inventoryRows['inventoryID'];?>">
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