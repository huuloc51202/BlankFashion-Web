<!-- insert sản phẩm vào database  -->
<?php
    include "../model/pdo.php";
    $sql = "SELECT * FROM `list`";
    $listsp = pdo_query($sql);
    

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quản Trị - Danh mục</title>
    <link rel="icon" href="../assect/img/logo-header/favicon.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="../assect/css/style-admin.css">
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
                        <a href="index.php" title="Trang chủ"><img src="../assect/img/logo-header/favicon.jpg" alt="logo"></a>
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

        <div class=" grid wide" style="height : 469px;">  
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
                        <div class="danh-sach-san-pham l-7" style="padding-bottom: 30px;">
                            <h1>Danh mục các loại sản phẩm</h1>
                            <a href="them-danh-muc.php"><button> + Thêm Mới</button></a>
                            <table>
                                <tr>
                                    <th style="width: 300px;">Mã Loại</th>
                                    <th style="width: 300px;">Tên Loại  Sản Phẩm</th>
                                    <th style="width: 207px;">Chỉnh Sửa</th>
                                </tr>
                                
                                <?php
                                    foreach ($listsp as $cate) {
                                        extract($cate);
                                        $editsp = "editlist.php?id=".$id;
                                        $deletesp = "deletelist.php?id=".$id;
                                        echo '
                                            <tr>
                                                <td>'. $id .'</td>
                                                <td> 
                                                    '. $catename .'
                                                </td>
                                                <td>
                                                <a href="'.$editsp.'"><i class="fa fa-edit"></i> Sửa</a><br><br>
                                                <a href="'.$deletesp.'"><i class="fa fa-remove"></i> Xoá</a>
                                                
                                                </td>
                                            </tr>
                                        ';
                                    }
                                ?> 
                                
                               
                                
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