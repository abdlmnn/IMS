<?php 
    $title = "Stock Items"; 

    include 'includes/header.php'; 
    include 'includes/sidebar.php';
?>
<main>
    <h1>Stock Items</h1>
    <form action="stockitemsProcess.php" method="post" enctype="multipart/form-data">

        <input type="text" name="inputName" placeholder="Enter item name" required>

        <input type="file" name="inputImage" accept=".jpg, .jpeg, .png">

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
            include "functions/queryFunction.php";
            $stockitemsTable = selectAllTable('stockitems');

            foreach ($stockitemsTable as $itemsRows) 
            {
        ?>
            <tbody>
                <tr>
                    <td style="padding: 25px"><?php echo $itemsRows['stockitemsID']; ?></td>
                    <td>
                        <img src="image/<?php echo $itemsRows['stockitemsImage']; ?>" width="100" title="<?php echo $itemsRows['stockitemsImage']; ?>">
                    </td>
                    <td><?php echo $itemsRows['stockitemsName']; ?></td>
                    <td><?php echo $itemsRows['gender']; ?></td>
                    <td>
                        <a href="stockitemsUpdate.php?updateID=<?php echo $itemsRows['stockitemsID']; ?>">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        <a href="stockitemsProcess.php?deleteID=<?php echo $itemsRows['stockitemsID']; ?>">
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