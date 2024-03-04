<?php
    include "../model/pdo.php";
    // include "../db/connect.php";
    if (isset($_POST['submit'])&&($_POST['submit'])) {
        $iddm =$_POST['iddm'];
        $namesp = $_POST['namesp'];
        $motasp = $_POST['motasp'];
        $giasp = $_POST['giasp'];
        $img = $_POST['anhsp'];
        


        $sql = "INSERT INTO `san-pham` (`name` ,`mota` , `price` ,`img` , `iddm`)     
        VALUES ('$namesp' , '$motasp' , '$giasp' , '$img' , '$iddm') " ;

        
        pdo_execute($sql);

        header('location:quan-ly-san-pham.php');
        
        
    }

?>