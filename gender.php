<?php
    $title = 'Gender';

    include "includes/head.php";
?>
<!-- <body>
    <h1>Gender</h1>
    <form action="genderCreate.php" method="post">

        <input type="text" name="inputName" placeholder="Enter gender name" required>
        
        <button type="submit" name="add-gender-button">Enter</button>
    </form>
    
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th> 
            <th>Action</th> 
        </tr>
        <?php
            // Displaying and Selecting all Table Rows which is gender
            include 'functions/querySelectingAll.php';
            $gender = querySelectingAll('gender');

            foreach ($gender as $genderRows) 
            {
        ?>
                <tr>
                    <td><?php echo $genderRows['genderID']; ?></td>
                    <td><?php echo $genderRows['genderName']; ?></td>
                    <td>
                        <a href="genderUpdate.php?updateID=<?php echo $genderRows['genderID']; ?>">
                            Update
                        </a>
                        <a href="genderDelete.php?deleteID=<?php echo $genderRows['genderID']; ?>">
                            Delete
                        </a>
                    </td>
                </tr>
        <?php
            }
            $mysqli->close();
        ?>
    </table>
</body>
</html> -->