<?php
    include "../model/pdo.php";
    $id = $_GET['id'];
    $sql = "SELECT * FROM `list` WHERE id='$id'";
    $editlist=pdo_query_one($sql);
    
?>