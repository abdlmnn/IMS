<?php
    $title = 'Update Stock Item';

    include 'includes/header.php';
    include 'includes/sidebar.php';

     // Using Function Selecting the exact ID of Stock Items that i want to update it and display the same value
    include 'stockitemsProcess.php';
    $stockitemsTable = displayStockItems();

    foreach ($stockitemsTable as $itemsRows) 
    {
?>
<main>
    <form action="stockitemsProcess.php" method="post" enctype="multipart/form-data">

        <input type="hidden" name="updateID" value="<?php echo $itemsRows['id']; ?>">
        <input type="text" name="updateName" placeholder="Enter item name" value="<?php echo $itemsRows['name']; ?>" required>

        <input type="file" name="updateImage" accept=".jpg, .jpeg, .png">

        <select name="updateGender">
            <option value="Men" >Men</option>
            <option value="Women" >Women</option>
        </select>

        <button type="submit" name="update-stockitems-button">UPDATE Item</button>
    </form>
</main>
<?php
    };

    include 'includes/footer.php'; 
?>