
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quản Lý Đơn Hàng</title>
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
                    <div class="container_row ">
    
                        <div class="admin-menu menu-admin l-3 m-12 c-12">
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

                        <div class="danh-sach-don-hang l-12 m-12 c-12" style="padding-bottom: 30px;">
                            <h1>Quản Lý Đơn Hàng</h1>
                            <div class="loc-don-hang">
                                Từ&emsp;<input type="date" name="bday">&emsp;Đến&emsp;
                                <input type="date" name="bday" min="2019-01-01">&emsp;
                                <input type="button" class="loc-ngay" name="loc-ngay" value="Tìm kiếm">
                            </div>
                            <table>
                                <tr>
                                    <th style="width: 50px;">Mã Đơn Hàng</th>
                                    <th style="width: 160px;">Sản phẩm</th>
                                    <th style="width: 65px;">Giá</th>
                                    <th style="width: 110px;">Ngày Đặt</th>
                                    <th style="width: 130px;">Người Đặt</th>
                                    <th style="width: 160ppx;">email</th>
                                    <th style="width: 80px;">Số điện thoại</th>
                                    <th style="width: 210px;">Địa chỉ</th>
                                    <th style="width: 50px;">Thanh Toán</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        
                                        <span>Áo 4-PIECE </span><br>
                                        <span>M</span><br>
                                        <span>1</span>

                                    </td>
                                    <td>400000</td>
                                    <td>20/10/2023 15:33</td>
                                    <td>Lê Đăng Huân</td>
                                    <td>huan113@gmail.com</td>
                                    <td>091111111</td>
                                    <td> Tô Ký - Phường 1 - Quận 12 - TP.Hồ Chí Minh</td>
                                    <td>COD </td>

                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>
                                        
                                        <span>Áo BCOOL </span><br>
                                        <span>M</span><br>
                                        <span>2</span>

                                    </td>
                                    <td>800000</td>
                                    <td>20/10/2023 15:33</td>
                                    <td>Nguyễn Tấn Khôi</td>
                                    <td>khoi113@gmail.com</td>
                                    <td>091111111</td>
                                    <td> Tô Ký - Phường 1 - Quận 12 - TP.Hồ Chí Minh</td>
                                    <td>MOMO </td>

                                </tr>

                                
                               
                            </table>
                        </div>
                        
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
    
    
    <script src="./js/admin.js"></script>
</body>

</html>