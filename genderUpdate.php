<?php
    $title = "Update Gender";

    include 'includes/head.php';
?>
<body>
    <?php
        // Selecting the exact ID of gender that i want to update it and display the same value
        $updateID = $_GET['updateID'];

        $selectGender = "SELECT * FROM gender WHERE genderID='$updateID'";
        
        include_once "functions/queryExecute.php";
        $gender = queryExecute($selectGender);
        
        foreach ($gender as $genderRows)
        {
    ?>
    <form action="" method="post">

        <input type="hidden" name="inputID" value="<?php echo $genderRows['genderID']; ?>">
        <input type="text" name="inputName" value="<?php echo $genderRows['genderName']; ?>" required>

        <button type="submit" name="update-gender-button">Enter</button>

    </form>
    <?php
        }

        // Updating all the value from gender table with exact ID 
        if (isset($_POST['update-gender-button']))
        {
            $inputID = $_POST['inputID'];
            $inputName = $_POST['inputName'];

            $updateGender = "UPDATE gender SET genderName='$inputName' WHERE genderID='$inputID'";

            include_once "functions/queryExecute.php";
            queryExecute($updateGender);

            header('location: gender.php');
        }
        $mysqli->close();
    ?>
</body>
</html>