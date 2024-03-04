<?php
    include "../model/pdo.php";
    include "./model/danhmuc.php";
    include "./model/sanpham.php";
    if($_GET['id']){
        $id = $_GET["id"];
        $sql = "SELECT * FROM `san-pham` WHERE id='$id'";
        $spct=pdo_query_one($sql);
    }else{
        header('location:./index.php');
    };
?>