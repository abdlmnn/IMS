<?php
    $title = "Update Gender";

    include 'includes/head.php';
?>
<body>
    <form action="genderUpdate.php" method="post">

        <?php
            // Selecting the exact ID of gender that i want to update it and display the same value
            $updateID = $_GET['updateID'];

            $selectGender = "SELECT * FROM gender WHERE genderID='$updateID'";
        
            include "functions/queryExecute.php";
            $gender = queryExecute($selectGender);
        
            foreach ($gender as $genderRows)
            {
        ?>
                <input type="hidden" name="inputID" value="<?php echo $genderRows['genderID'] ?>">
                <input type="text" name="inputName" value="<?php echo $genderRows['genderName'] ?>" required>
        <?php
            }
        ?>

        <button type="submit" name="update-gender-button">Enter</button>
        <button onclick="cancelUpdate">Cancel</button>
        
    </form>

    <?php
        // Updating all the value from gender table with exact ID 
        if (isset($_POST['update-gender-button']))
        {
            $inputID = $_POST['inpitID'];
            $inputName = $_POST['inputName'];

            $updateGender = "UPDATE gender SET genderName='$inputName' WHERE genderID='$inputID'";

            include "functions/queryExecute.php";
            queryExecute($updateGender);
        }
    ?>
</body>
</html>