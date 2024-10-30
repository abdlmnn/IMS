<?php
    include "includes/head.php";

    // Selecting the table (gender,category,sizes,item,levels,report) in order to display
    function querySelectingAll($tableName)
    {
        global $mysqli;

        $queryName = "SELECT * FROM $tableName";

        include "queryExecute.php";
        return queryExecute($queryName);
    }
?>