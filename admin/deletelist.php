<?php 
    include "../model/pdo.php";
    $id = $_GET['id'];
    // Xoa 
    $sql = "DELETE FROM `list` WHERE id=$id ;";
    pdo_execute($sql);

    // Tra ve 

    $sql = "SELECT * FROM `list`";
    $listsp = pdo_query($sql);
    header("location:list.php");

?>