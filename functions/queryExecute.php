<?php
    include 'includes/head.php';

    // Execute the result queryName in a short way using function
    function queryExecute($queryName)
    {
        global $mysqli;
        
        $resultQuery = $mysqli->query($queryName);

        if (!$resultQuery)
        {
            die ('Error: ' . $mysqli->error);
        }

        return $resultQuery;
    }
?>