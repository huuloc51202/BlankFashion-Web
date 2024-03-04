<?php
    session_start();
    include "./model/pdo.php";
    if(!isset($_SESSION['mycart'])) $_SESSION['mycart']=[];
    if(isset($_POST['addcart'])){
        $id = $_POST['id'];
        $img = $_POST['img'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        $gender = $_POST['gender'];
        $total = $quantity * $price;
        $spadd = [$id,$img,$name,$price,$quantity,$gender,$total];
        
        
        array_push($_SESSION['mycart'],$spadd);
        $message = "Đã thêm sản phẩm vào giỏ hàng";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header("Location:../gio-hang.php");
    }
?>


