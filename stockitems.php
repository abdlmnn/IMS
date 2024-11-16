<?php 
    $title = "Stock Items"; 

    include 'includes/header.php'; 
    include 'includes/sidebar.php';
?>
<main>
    <h1>Stock Items</h1>
    <form action="stockitemsProcess.php" method="post" enctype="multipart/form-data">

        <input type="file" name="inputImage" accept=".jpg, .jpeg, .png">
        
        <input type="text" name="inputName" placeholder="Enter item name" required>

        <select name="category">
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

        <select name="gender">
            <option value="Men">Men</option>
            <option value="Women">Women</option>
        </select>
        
        <button type="submit" name="add-stockitems-button">ADD Item</button>
    </form>
    
    <table border="1" cellspacing="0" cellpadding="10">
        <thead>
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Action</th>
            </tr>
        </thead>
        <?php
            // Displaying and Selecting all Table Rows which is Stock Items
            include_once "functions/queryFunction.php";
            $itemsTable = selectAllTable('items');

            foreach ($itemsTable as $itemsRows) 
            {
        ?>
            <tbody>
                <tr>
                    <td style="padding: 25px"><?php echo $itemsRows['id']; ?></td>
                    <td>
                        <img src="image/<?php echo $itemsRows['image']; ?>" width="100" title="<?php echo $itemsRows['image']; ?>">
                    </td>
                    <td><?php echo $itemsRows['name']; ?></td>
                    <td><?php echo $itemsRows['gender']; ?></td>
                    <td>
                        <a href="itemsUpdate.php?updateID=<?php echo $itemsRows['id']; ?>">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        <a href="itemsProcess.php?deleteID=<?php echo $itemsRows['id']; ?>">
                            <i class="fa-solid fa-trash"></i>
                        </a>
                    </td>
                </tr>
            </tbody>
        <?php
            };
        ?>
    </table>
</main>
<?php include 'includes/footer.php'; ?>