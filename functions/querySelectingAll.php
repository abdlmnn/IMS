<?php
    include "connection/connect.php";

    // Selecting the table (gender,category,sizes,item,levels,report) in order to display
    function querySelectingAll($tableName)
    {
        global $mysqli;

        $queryName = "SELECT * FROM $tableName";

        include_once "queryExecute.php";
        return queryExecute($queryName);
    }
?>