<?php
    $title = 'Update Stock Item';
    
    include 'connection/connect.php';
    include 'includes/head.php';
    include 'includes/sidebar.php';

     // Using Function Selecting the exact ID of Stock Items that i want to update it and display the same value
    include 'stockitemsProcess.php';
    $stockitemsTable = displayStockItems();

    foreach ($stockitemsTable as $itemsRows) 
    {
?>
        <form action="stockitemsProcess.php" method="post" enctype="multipart/form-data">

            <input type="hidden" name="inputID" value="<?php echo $itemsRows['stockitemsID']; ?>">
            <input type="text" name="inputName" placeholder="Enter item name" value="<?php echo $itemsRows['stockitemsName']; ?>" required>

            <input type="file" name="inputImage" accept=".jpg, .jpeg, .png">

            <select name="gender" id="gender">
                <option value="<?php if ($itemsRows['gender'] == 'Men') echo 'selected'; ?>" >Men</option>
                <option value="<?php if ($itemsRows['gender'] == 'Women') echo 'selected'; ?>" >Women</option>
            </select>

            <button type="submit" name="update-stockitems-button">UPDATE Item</button>
        </form>
<?php
    };

    include 'includes/foot.php'; 
?>