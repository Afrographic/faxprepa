<?php
include_once dirname(__FILE__) . '/../db.php';

function getTypeEpreuve()
{
    global $con;
    $typeEpreuve = [];
    $query = "select * from typeepreuve";
    $res =  mysqli_query($con, $query);
    while ($row = mysqli_fetch_assoc($res)) {
        $typeEpreuve[] = $row;
    }
    return $typeEpreuve;
}
