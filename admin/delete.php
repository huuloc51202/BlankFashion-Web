<!-- Xoá sản phẩm  -->
<?php   
    include "../model/pdo.php";
    $id = $_GET['id'];
    
    // xoá
    $sql = "DELETE FROM `san-pham` WHERE id=$id ;" ;
    pdo_execute($sql);
    
    // trả về
    $sql = "SELECT * FROM `san-pham` ";
    $listsp = pdo_query($sql);
    header('location:quan-ly-san-pham.php');
?>