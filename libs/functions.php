<?php

function resultToArray ($db_result)
{
    $rowList = array();

    while ($row = $db_result->fetch_assoc())
    {
        $rowList[] =$row;
    }
    return $rowList;
}

?>