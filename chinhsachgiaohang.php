<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assect/css/main.css">
    <link rel="stylesheet" href="./assect/css/base.css">
    <link rel="stylesheet" href="./assect/css/grid.css">
    <link rel="stylesheet" href="./assect/css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <title>Chính sách giao hàng - BLANKSOUL</title>
    <link rel="icon" href="./assect/img/logo-header/favicon.jpg" type="image/x-icon" />

    <style>
        .content-page p{
            font-size: 1.4rem;
            font-weight: 500;
            color: #484848;
        }
        .content-page ul li{
            font-size: 1.4rem;
            font-weight: 500;
            color: #484848;
        }
    </style>
</head>
<body onload="loadslsp()">
    <div class="app">
        <header class="header">
            <div class="grid wide">
                <!-- logo-img -->
                <div class="header__logo col">
                    <a href="/index.php" class="header__logo-img ">
                        <img src="./assect/img/logo-header/logo.webp" alt="lộc"  class="header__logo-img">
                    </a>
                </div>

                
                <div class="header__menu">
                    <nav class="main-nav">
                        <ul id="menu-main-menu">
                            
                            
                            
                            
                            <li class="menu-item  ">
                                <a href="index.php" class="header__menu-item" >Trang chủ</a>
                            </li>
                            
    
                            
                            
                            
                            <li class="menu-item  ">
                                <a href="sanphammoi.php" class="header__menu-item">Sản phẩm mới</a>
                                <ul class="sub-menu">
                                    
                                    
                                    <li class="sub-menu-item ">
                                        <a href="blanksoul">Blanksoul</a>
                                    </li>
                                    
                                    
                                    
                                    <li class="sub-menu-item ">
                                        <a href="lookbook-17-feast-of-jungle">LOOKBOOK 17 - FEAST OF JUNGLE</a>
                                    </li>
                                    
                                    
                                    
                                    <li class="sub-menu-item ">
                                        <a href="lookbook-16-saigon-saigon">LOOKBOOK 16 - SAIGON SAIGON</a>
                                    </li>
                                    
                                    
                                    
                                    <!-- <li class="sub-menu-item ">
                                        <a href="lookbook-15-naturalism">LOOKBOOK 15 - NATURALISM</a>
                                    </li>
                                    
                                    
                                    
                                    <li class="sub-menu-item ">
                                        <a href="lookbook-18-blankexonon-adolescence">LOOKBOOK 18 - BLANKExONON ADOLESCENCE</a>
                                    </li>
                                    
                                    
                                    
                                    <li class="sub-menu-item ">
                                        <a href="lb19-philocaly">LB19 - PHILOCALY</a>
                                    </li>
                                    
                                    
                                    
                                    <li class="sub-menu-item ">
                                        <a href="lb20-future-reminiscence">LB20 - FUTURE REMINISCENCE</a>
                                    </li>
                                    
                                    
                                    
                                    <li class="sub-menu-item ">
                                        <a href="lb21-space-cowboy">LB21 - SPACE COWBOY</a>
                                    </li> -->
                                    
                                    
                                </ul>
                            </li>
                            
                            
    
                            
                            
                            
                            <li class="menu-item  ">
                                <a href="quan-ao-moi.php" class="header__menu-item">Quần áo</a>
                                <ul class="sub-menu">
                                    
                                    
                                    <li class="sub-menu-item  ">
                                        <a href="tanktop">Tank top</a>
                                    </li>
                                    
                                    
                                    
                                    <li class="sub-menu-item  ">
                                        <a href="somi">Somi</a>
                                    </li>
                                    
                                    
                                    
                                    <li class="sub-menu-item  ">
                                        <a href="sweater">Sweater</a>
                                    </li>
                                    
                                    
                                    
                                    <!-- <li class="sub-menu-item  ">
                                        <a href="quan">Áo khoác</a>
                                    </li>
                                    
                                    
                                    
                                    <li class="sub-menu-item  ">
                                        <a href="vest-blazer">Vest/Blazer</a>
                                    </li>
                                    
                                    
                                    
                                    <li class="sub-menu-item  ">
                                        <a href="t__shirt-ao-thun">T__shirt / Áo thun</a>
                                    </li>
                                    
                                    
                                    
                                    <li class="sub-menu-item  ">
                                        <a href="quan-1">Quần</a>
                                    </li>
                                    
                                    
                                    
                                    <li class="sub-menu-item  ">
                                        <a href="blanksoul">Blanksoul</a>
                                    </li> -->
                                    
                                    
                                </ul>
                            </li>
                            
                            
    
                            
                            
                            
                            <li class="menu-item   ">
                                <a href="tuixachmoi.php" class="header__menu-item">Túi xách</a>
                                <div class=" show-menu">
                                    <div class="row header__handbag">
                                        <div class="col header__handbag-list l-6">
                                            <ul class=" clearfix">
                                                
                                                <li class="col handbag-item  ">
                                                    <a href="balo-backpack">Túi đeo chéo / Messenger Bag</a>
                                                </li>
                                                
                                                <li class="col handbag-item ">
                                                    <a href="balo-backpack-1">Balo / Backpack</a>
                                                </li>
                                                
                                                <li class="col handbag-item  ">
                                                    <a href="mo-c-ga-n-chi-a-kho-a-keychain">Móc gắn chìa khóa / Keychain</a>
                                                </li>
                                                
                                                <li class="col handbag-item  ">
                                                    <a href="tu-i-deo-sling-bag">Túi đeo / Sling bag</a>
                                                </li>
                                                
                                                <li class="col handbag-item  ">
                                                    <a href="clutch">Túi hộp cầm tay / Clutch bag</a>
                                                </li>
                                                
                                                <li class="col handbag-item  ">
                                                    <a href="tu-i-bao-tu-fanny-bag">Túi bao tử / Fanny Bag</a>
                                                </li>
                                                
                                                <li class="col handbag-item  ">
                                                    <a href="tu-i-du-li-ch-weekender-bag">Túi du lịch / Weekender bag</a>
                                                </li>
                                                
                                                <li class="col handbag-item  ">
                                                    <a href="vi-wallet">Ví / Wallet</a>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                        <div class="col header__handbag-btn l-6">
                                            <div class="row">
                                                
                                                
                                                
                                                <div class="col l-6">
                                                    <a href="">
                                                        <img src="//theme.hstatic.net/1000348721/1000449307/14/image_menu_1_1.jpg?v=517" alt="Túi xách" class="handbag-img">
                                                    </a>
                                                </div>
                                                
                                                
                                                
                                                <div class="col l-6">
                                                    <a href="">
                                                        <img src="//theme.hstatic.net/1000348721/1000449307/14/image_menu_1_2.jpg?v=517" alt="Túi xách" class="handbag-img" >
                                                    </a>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            
                            
                            
    
                            
                            
                            <li class="menu-item  ">
                                <a href="sale.php" class="header__menu-item">Sale</a>
                            </li>
                            
    
                            
                            
                            
                            <!-- <li class="menu-item  ">
                                <a href="/" class="header__menu-item">Phụ kiện</a>
                                <ul class="sub-menu">
                                    
                                    
                                    <li class="sub-menu-item  ">
                                        <a href="giay">Giày</a>
                                    </li>
                                    
                                    
                                </ul>
                            </li> -->
                            
                            
    
                            
                            
                            
                            <!-- <li class="menu-item  ">
                                <a href="/pages/about-us" class="header__menu-item">Giới thiệu</a>
                                <ul class="sub-menu">
                                    
                                    
                                    <li class="sub-menu-item  ">
                                        <a href="/pages/chinh-sach-doi-tra">Chính sách đổi trả</a>
                                    </li>
                                    
                                    
                                    
                                    <li class="sub-menu-item  ">
                                        <a href="/pages/about-us">Giới thiệu về Blanke &amp; Ksoul</a>
                                    </li>
                                    
                                    
                                    
                                    <li class="sub-menu-item  ">
                                        <a href="/pages/lien-he-voi-chung-toi">Liên hệ với chúng tôi</a>
                                    </li>
                                    
                                    
                                    
                                    <li class="sub-menu-item  ">
                                        <a href="/pages/chinh-sach-giao-hang">Chính sách giao hàng</a>
                                    </li>
                                    
                                    
                                    
                                    <li class="sub-menu-item  ">
                                        <a href="/pages/chinh-sach-bao-mat">Chính sách bảo mật</a>
                                    </li>
                                    
                                    
                                    
                                    <li class="sub-menu-item  ">
                                        <a href="/pages/huong-dan-mua-hang">Hướng dẫn mua hàng</a>
                                    </li>
                                    
                                    
                                </ul>
                            </li>
                            
                            
    
                            
                            
                            <li class="menu-item  ">
                                <a href="/" class="header__menu-item">Blog</a>
                            </li> -->
                            
    
                            
                        
    
                        </ul>
                    </nav>
                    <div class="header__search">

                        <div class="search" id="sea">
                            <div type="button" data-show="#search" id="search-des">
                                <i class="search-des-menu fa-solid fa-magnifying-glass"></i>
                            </div>
                            <div class="search-input" >
        
        
                                <form class="search-fr" action="" name=formtim method="get" onclick="checksearch()">
                                    <div class="form-input">
                                        <input input onclick="if(this.value=='Tìm kiếm') this.value=''"onblur="if(this.value=='') this.value='Tìm kiếm'"   name="tukhoa"  placeholder="Tìm kiếm..." value="Tìm kiếm" type="text" required="required" class="search-input-btn">
                                        <button type="submit" class="form-input-btn" id="btntim" name="btntim" value=" TÌM ">
                                            <i class="form-input-btn-icon fa fa-search"></i>
                                        </button>							
                                    </div>
                                </form>
        
        
                            </div>
                        </div>
                        <div class="search-cart">
                            <a class="cart-head" href="gio-hang.php" >
                                <i class="brightness-img fa-solid fa-bag-shopping"></i>
                                <span id="cart-quantity" class="hd-cart-count">0</span>
                            </a>
        
                        </div>
                        <div class="search">
                            
                            
                            <div class="search__menu-item ">
                                <i class="account-menu fa-solid fa-circle-user"></i>
                                <?php
                                    if(isset($_SESSION['email'])){
                                        extract($_SESSION['email']);
                                    
                                ?>
                                    <a href="donhang.php" class="login-item"><?php echo $email?></a>
                                    
                                    
                                <?php
                                    }else{
                                ?>
                                <a href="login.php" class="login-item">
                                    Login
                                </a>
                                <?php }?>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="app_product">
            
            <div class="grid wide" >
                <div class="col">
                    <div class="new-product" > 
                        <div class="information-blocks main_article bg_w">
                            <div class="headingPage">
                                <h1 class="titlet">Chính sách giao hàng</h1>
                            </div>
                            <div class="content-page">
                                <h1>CHÍNH SÁCH GIAO HÀNG</h1><p><strong>Với mong muốn đem&nbsp;đến dịch vụ vận chuyển tốt nhất cho quý khách hàng, Blanke &amp; Ksoul đem đến chính sách giao hàng mới như sau:</strong></p><p><strong>GIAO SIÊU TỐC&nbsp;(nhận hàng chỉ trong 4h) phí giao hàng tuỳ thuộc vào đơn vị vận chuyển như Grab, Ahamove</strong></p><p><strong>GIAO NHANH ship từ 30,000đ - 50,000đ tuỳ khu vực&nbsp;</strong></p><p><strong>TP.HỒ CHÍ MINH&nbsp;</strong></p><p><strong>* GIAO SIÊU TỐC (nhận hàng chỉ trong 4h): Đặt trước 17:00 nhận hàng trong ngày, phí giao hàng tuỳ thuộc vào đơn vị vận chuyển như Grab, Ahamove</strong></p><p><strong>* GIAO NHANH 1-3 NGÀY:&nbsp;</strong></p><p>Quận nội thành: 30.000đ&nbsp;</p><p>Huyện, xã: 40.000đ</p><p><strong>TỈNH, THÀNH KHÁC</strong></p><p><strong>* GIAO NHANH 3-7&nbsp;NGÀY: 40.000đ - 50.000đ tuỳ vào cân nặng sản phẩm</strong></p><p>Một số khu vực còn ảnh hưởng bởi dịch, thời gian giao hàng dự kiến sẽ chậm hơn.</p><p>Các mốc thời gian trên đây là thời gian dự kiến, trong một số trường hợp đặc biệt do yếu tố khách quan, đơn hàng của quý khách có thể được giao chậm hơn tối đa 1 ngày so với thời gian dự kiến. Blanke &amp; Ksoul&nbsp;và các đối tác giao luôn cố gắng chuyển hàng&nbsp;tới tay khách hàng nhanh chóng, an toàn sớm nhất có thể.&nbsp;Mong quý khách hàng thông cảm và tiếp tục đồng hành cùng Blanke &amp; Ksoul<br><br>Mọi thắc mắc về đơn hàng và chính sách giao hàng xin vui lòng liên hệ Hotline phòng vận hành của chúng tôi 090.245.2521 để được giải đáp cụ thể.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="footer-policy">
                <div class="grid wide ">
                    <div class="row col">
                        <div class="footer_list-policy ">
                            <div class=" col l-2">
                                <ul class="footer-list">
                                    <li class="footer-item">
                                        <a href="chinhsachdoitra.php" class="footer-item__link">
                                            Chính sách đổi trả
                                        </a>
                                    </li>
        
                                </ul>
                            </div>
        
                            <div class="col l-2">
                                <ul class="footer-list">
                                    <li class="footer-item">
                                        <a href="gioithieu.php" class="footer-item__link">
                                            Giới thiệu về Blanke & Ksoul
                                        </a>
                                    </li>
        
                                </ul>
                            </div>
        
                            <div class="col l-2">
                                <ul class="footer-list">
                                    <li class="footer-item">
                                        <a href="contact.php" class="footer-item__link">
                                            Liên hệ với chúng tôi
                                        </a>
                                    </li>
        
                                </ul>
                            </div>
                            
                            <div class="col l-2">
                                <ul class="footer-list">
                                    <li class="footer-item">
                                        <a href="chinhsachgiaohang.php" class="footer-item__link">
                                            Chính sách giao hàng
                                        </a>
                                    </li>
        
                                </ul>
                            </div>
        
                            <div class="col l-2">
                                <ul class="footer-list">
                                    <li class="footer-item">
                                        <a href="chinhsachbaomat.php" class="footer-item__link">
                                            Chính sách bảo mật
                                        </a>
                                    </li>
        
                                </ul>
                            </div>
        
                            <div class="col l-2"> 
                                <ul class="footer-list">
                                    <li class="footer-item">
                                        <a href="huongdanmahang.php" class="footer-item__link">
                                            Hướng dẫn mua hàng
                                        </a>
                                    </li>
        
                                </ul>
                            </div>
                        </div>
    
                    </div>
                </div>
            </div>

            <div class="footer-register">
                <div class="register-input">
                    <div class="footer-register_input">
                        <input type="text" value="" required="required" class="footer-input" placeholder=" Nhập email của bạn..." >
                    </div>
                    <div class="footer-register_knot">
                        <p class="footer-register_item">Đăng kí</p>

                    </div>
                </div>
            </div>

            <div class="footer-address">
                <div class="grid wide col">
                    <p class="address-list">Địa chỉ: 218 Lê Văn Sỹ, P.10, Quận Phú Nhuận  | 183B Nguyễn Đình Chiểu, P5, Quận 3</p>
                    <div class="footer-address-icon">
                        <a href="">

                            <i class="address-icon__fb fa-brands fa-facebook"></i>
                        </a>
                        <a href="">

                            <i class="address-icon__ig fa-brands fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
            
        </footer>
    </div>
    
    <script src="./js/product.js"></script>
</body>
</html>