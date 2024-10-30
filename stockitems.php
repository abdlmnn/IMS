<?php
    $title = "Stock Items";

    include 'includes/head.php';
?>
<body>
    <h1>Stock Items</h1>
    <form action="stockitemsCreate.php" method="post" enctype="multipart/form-data">

        <input type="text" name="inputName" placeholder="Enter item name" required>

        <select name="inputGenderID">
            <option selected>Select Gender</option>
            <?php
                // Displaying the Foriegn key GenderID on my Stock Items table 
                include_once "functions/querySelectingAll.php";
                $gender = querySelectingAll('gender');

                foreach ($gender as $genderRows) 
                {
            ?>
                    <option value="<?php echo $genderRows['genderID']; ?>"><?php echo $genderRows['genderName']; ?></option>
            <?php
                }
            ?>
        </select>

        <select name="inputCategoryID">
            <option selected>Select Categories</option>
            <?php
                // Displaying the Foriegn key CategoryID on my Stock Items table 
                include_once "functions/querySelectingAll.php";
                $category = querySelectingAll('category');

                foreach ($category as $categoryRows) 
                {
            ?>
                    <option value="<?php echo $categoryRows['categoryID']; ?>"><?php echo $categoryRows['categoryName']; ?></option>
            <?php
                }
            ?>
        </select>

        <input type="file" name="inputImage" accept="image/*" >
        
        <button type="submit" name="add-stockitems-button">ADD Item</button>
    </form>
    
    <table>
        <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Category</th>
        </tr>
        <?php
            include_once "functions/querySelectingAll.php";
            $insertStockItems = querySelectingAll('stockitems');

            foreach ($insertStockItems as $itemsRows) 
            {
        ?>
                
        <?php
            }
        ?>
    </table>
</body>
</html>