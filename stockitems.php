<?php
    $title = "Stock Items";

    include 'includes/head.php';
?>
<body>
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
        <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Action</th>
            <!-- <th>GenderID</th> -->
            <!-- <th>Category</th> -->
        </tr>
        <?php
            include_once "functions/myFunction.php";
            // $insertStockItems = querySelectingAll('stockitems');
            $stockitemsTable = selectAllTable('stockitems');

            foreach ($stockitemsTable as $itemsRows) 
            {
        ?>
                <tr>
                    <td style="padding: 25px"><?php echo $itemsRows['stockitemsID']; ?></td>
                    <td>
                        <img src="image/<?php echo $itemsRows['stockitemsImage']; ?>" width="200" title="<?php echo $itemsRows['stockitemsImage']; ?>">
                    </td>
                    <td><?php echo $itemsRows['stockitemsName']; ?></td>
                    <td><?php echo $itemsRows['gender']; ?></td>
                    <td>
                        <a href="stockitemsUpdate.php?updateID=<?php echo $itemsRows['stockitemsID']; ?>">
                            Update
                        </a>
                        <a href="stockitemsProcess.php?deleteID=<?php echo $itemsRows['stockitemsID']; ?>">
                            Delete
                        </a>
                    </td>
                </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>

        <!-- <select name="inputCategoryID"> -->
            <!-- <option selected>Select Categories</option> -->
            <?php
                // Displaying the Foriegn key CategoryID on my Stock Items table 
                // include_once "functions/querySelectingAll.php";
                // $category = querySelectingAll('category');

                // foreach ($category as $categoryRows) 
                // {
            ?>
                    <!-- <option value="<?php echo $categoryRows['categoryID']; ?>"><?php echo $categoryRows['categoryName']; ?></option> -->
            <?php
                // }
            ?>
        <!-- </select> -->


<!-- 
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

-->