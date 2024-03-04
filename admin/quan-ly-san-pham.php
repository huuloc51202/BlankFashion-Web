<!-- Lấy  dữ liệu được thêm vào database về -->
<?php
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    if(isset($_POST['submit'])){
        $kyw = $_POST['kyw'];
        $iddm = $_POST['iddm'];
    }else{
        $kyw = '';
        $iddm = 0 ;
    }
    $loaddm = load_dm();
    $loadsp = load_sp($kyw,$iddm);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quản Lý Sản Phẩm</title>
    <link rel="icon" href="../assect/img/logo-header/favicon.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assect/css/style-admin.css">
    <link rel="stylesheet" href="../assect/css/base.css">
    <link rel="stylesheet" href="../assect/css/grid.css">
    <link rel="stylesheet" href="../assect/css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="app">
        <header class="header-admin">
            <nav class="header-navbar">
                <ul class="header-navbar_list">
                    <li>
                        <a href="thong-ke.php" title="Trang chủ"><img src="../assect/img/logo-header/favicon.jpg" alt="logo"></a>
                    </li>
                    <li>
                        <a href="#" class="text-admin">Xin chào Quản Trị Viên</a>
                    </li>
                </ul>
                <ul class="header-navbar_list">
                    
                    <li>
                        <a class="dang-xuat" href="index.php">&nbsp;Đăng xuất</a>
                        <i class="fa fa-sign-out"></i>
                    </li>
                    <li>
                        <a class="trang-chu" href="thong-ke.php">&nbsp;Trang chủ</a>
                        <i class="fa fa-home"></i>
                    </li>
                </ul>
            </nav>
        </header>

        <div class=" grid wide" >  
            <div class="main-content">
                <div class="container ">
                    <div class="container-row ">
    
                        <div class="admin-menu  l-3 m-12 c-12">
                            <h1>Admin Menu</h1>
                            <ul>
                                <li><a href="list.php"><i class="fa fa-list-ul"></i> Danh mục</a></li>
                                <li><a href="quan-ly-san-pham.php"><i class="fa fa-list-ul"></i> Sản phẩm</a></li>
            
                                <li><a href="quan-ly-don-hang.php"><i class="fa fa-envelope"></i> Đơn hàng</a></li>
                                <li>
                                    <a href="quan-ly-user.php"> <i class="fa fa-cog"></i> Quản lý người dùng</a>
                                </li>
                               
                            </ul>
                        </div>

                        <div class="danh-sach-san-pham l-8" style="padding-bottom: 30px;">
                            <h1>Danh Sách Sản Phẩm</h1>
                            <a href="them-san-pham.php"><button> + Thêm Mới</button></a>
                            <form action="quan-ly-san-pham.php" method="post">
                                <input type="text" name="kyw">
                                <select name="iddm" id="name-sp" class="input-add">
                                    <option value="0">Tất cả</option>
                                    <?php
                                        foreach ($loaddm as $cate) {
                                            extract($cate);
                                            echo'
                                                <option value="'.$id.'">'.$catename.' </option>;
                                            ';
                                        }
                                    ?>
                                        
                                </select>
                                <button type="submit" name="submit">Go</button>
                            </form>
                            <table>
                                <tbody>
                                    <tr>
                                        <th style="width: 160px;">Ảnh</th>
                                        <th style="width: 160px;">Tên Sản Phẩm</th>
                                        <th style="width: 160px;">Mô Tả</th>
                                        <th style="width: 160px;">Giá</th>
                                        <th style="width: 87px;">Chỉnh Sửa</th>
                                    </tr>

                                    
                                    <?php
                                        
                                        foreach ($loadsp as $sanpham) {
                                            extract($sanpham);
                                            $editsp = "edit.php?id=".$id;
                                            $deletesp = "delete.php?id=".$id;
                                            echo '
                                                <tr>
                                                    <td><img src="../assect/img/product/'. $img .' " alt="product-img1"></td>
                                                    <td>'. $name .'</td>
                                                    <td> 
                                                        '. $mota .'
                                                    </td>
                                                    <td> '. $price .' VNĐ</td>
                                                    <td>
                                                    <a href="'.$editsp.'"><i class="fa fa-edit"></i> Sửa</a><br><br>
                                                    <a href="'.$deletesp.'"><i class="fa fa-remove"></i> Xoá</a>
                                                    
                                                    </td>
                                                </tr>
                                            ';
                                        }
                                    ?> 
                                </tbody>
                                
                               
                                
                            </table>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fuid">
            <div class="grid ">

                <div class="copyrights">
                    <p> <br> &copy; 2023  Nguyễn Hữu Lộc <br></p>
                </div>
            </div>
        </div>
    </div>
    
    
    <script src="./js/admin.js"></script>
</body>

</html>