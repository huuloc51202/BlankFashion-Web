<?php
    include "../model/pdo.php";
    if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
        
        $id = $_POST['id'];
        $fullname = $_POST['fullname'];
        $phone = $_POST['phone'];
        
    
        $sql = "UPDATE `res-user` 
        SET `fullname`='$fullname' , `phone`='$phone'
        WHERE id=".$id;
        pdo_execute($sql);
    }

    $sql = "SELECT * FROM `res-user`  ";
    $listuser = pdo_query($sql);
    header('location:quan-ly-user.php');
?>