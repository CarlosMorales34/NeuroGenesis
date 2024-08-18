<?php

include('connection.php');

$conn = new DB();

function getNotice($id){
    global $conn;
    $result = $conn->query("SELECT * FROM notice WHERE id = '$id'");
    return $result;
}
?>