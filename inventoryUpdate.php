<?php
    $title = "Update Inventory";

    include 'includes/header.php';
    include 'includes/sidebar.php';
?>
    <main>
    <h1>Inventory</h1>
        <hr>
        <div class="whole-category-container">
            
        <div class="cat-cont" id="categoryForm">
            <div class="form-container">
                <?php
                    include 'inventoryProcess.php';
                    $inventoryTable = displayInventory();
                    
                    foreach ($inventoryTable as $inventoryRows) 
                    {
                ?>
                <h1>UPDATE <?php echo $inventoryRows['inventoryID']; ?></h1>
                <form action="inventoryProcess.php" method="post" enctype="multipart/form-data">

                    <input type="hidden" name="updateID" value="<?php echo $inventoryRows['inventoryID']; ?>">
                    <input type="file" name="updateImage" accept=".jpg, .jpeg, .png">
                        <br><br>
                        <input type="text" name="updateName" value="<?php echo $inventoryRows['name']; ?>" placeholder="Enter name" required autofocus>
                        <br><br>
                        <input type="number" name="updatePrice" value="<?php echo $inventoryRows['price']; ?>" placeholder="Enter price" required>
                        <br><br>
                        <input type="number" name="updateStock" value="<?php echo $inventoryRows['stock_quantity']; ?>" placeholder="Enter stock" required>
                        <br><br>
                        <select name="updateCategory">
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
                        <select name="updateSize">
                            <option selected>---Size---</option>
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                            <option value="XL">XL</option>
                        </select>

                    <button type="submit" name="update-inventory-button">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </button>
                </form>
                <?php
                    };
                ?>
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