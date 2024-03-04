<?php 
    include "../model/pdo.php";
    
    if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
        
        $id = $_POST['id']; 
        $catename = $_POST['catename'];
        $sql = "UPDATE `list` 
        SET `catename`='$catename'
        WHERE id=".$id;
        pdo_execute($sql);
        
    }
    
    $sql = "SELECT * FROM `list`  ";
    $listsp = pdo_query($sql);
    header('location:list.php');
?>