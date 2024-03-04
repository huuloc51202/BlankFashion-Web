<?php
    session_start();
    include "model/pdo.php";
    if(isset($_POST['submit'])) {
        $namePro = $_POST['name-pro'];
        $soluongSp =$_POST['soluong-sp'];
        $price = $_POST['price'];
        $gender = $_POST['gender'];
        $fullname = $_POST['fullname'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $payment = $_POST['payment'];
        $paydate = date('h:i:sa d/m/Y');
        
        
        echo "<pre>";
        print_r($_POST);

    }
?>