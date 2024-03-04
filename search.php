<?php
    include "./model/pdo.php";
    if (isset($_POST['tukhoa'])&&($_POST['tukhoa']!="")) {
        $kw = $_POST['tukhoa'];
        if($id>0){

            $sql = "SELECT * FROM `san-pham` WHERE id=".$id;
            $tk = pdo_query_one($sql);
            extract($tk);
            return ($name);
        }else{
            return "";
        }
    }else{
        $kw ="";
    }
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
    <title>Sản phẩm mới - BLANKSOUL</title>
    <link rel="icon" href="./assect/img/logo-header/favicon.jpg" type="image/x-icon" >
    

</head>
<body onload="loadslsp()">
    <div class="app">
        <header class="header">
            <div class="grid wide">
                <!-- logo-img -->
                <div class="header__logo col">
                    <a href="index.php" class="header__logo-img ">
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
                            </li>
                             -->
                            
    
                            
                            
                            
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
                        <!-- header-body  -->
                        <div class="l-12">
                            <div class="home-filter ">
                                <span class="home-filter__label">Sắp xếp theo :</span>
                                <label class="home-filter__btn btn ">
                                    <input onchange="chonPro()" type="checkbox"  value="low-500" class="sell-price">
                                    <span class="home-filter__name" >Dưới 500k</span>
                                </label>
                                <label class="home-filter__btn btn " >
                                    <input onchange="chonPro()" type="checkbox"  value="low-1000" class="sell-price">
                                    <span class="home-filter__name" >Từ 500K đến 1 triệu</span> 
                                </label>
                                <label class="home-filter__btn btn" >
                                    <input onchange="chonPro()" type="checkbox"  value="up-1000" class="sell-price">
                                    <span class="home-filter__name" >Trên 1 triệu</span>
                                </label>
    
                                
                            </div>


                        </div>     
                        
                        <!-- body -->
                        <div class="product-list">
                            <div class="row " id="pro-list">
                                <!-- product-item -->

                                

                            </div>
                            
                        </div>

                        <!-- footer-body -->

                        <div class="product-paginition">
                            <ul class="pagination ">
                                <li class="pagination-item  pagination-item--active">
                                    <a href="" class="pagination-item__link ">1</a>
                                </li>
                                <li class="pagination-item  ">
                                    <a href="" class="pagination-item__link">2</a>
                                </li>
                                <li class="pagination-item  ">
                                    <a href="" class="pagination-item__link">3</a>
                                </li>
                                <li class="pagination-item  ">
                                    <a href="" class="pagination-item__link">
                                        <i class="pagination-item__icon fa-solid fa-angles-right"></i>
                                    </a>
                                </li>
                            </ul>
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
    <script>
        var arrPro = [
            {
                tenSP : 'Áo BCOOL' ,
                giaSP : 520000 ,
                imgSP : './assect/img/lookbook/bcool.webp',
                imgSP2 : './assect/img/lookbook/bcool-2.webp',
                linkSP : './products/bcool.php'
            },

            {
                tenSP : 'Áo ARIZONA' ,
                giaSP : 420000 ,
                imgSP : './assect/img/lookbook/arizona.webp',
                imgSP2 : './assect/img/lookbook/arizona-2.webp',
                linkSP : './products/arizona.php'
            },

            {
                tenSP : 'Áo AURORA' ,
                giaSP : 350000 ,
                imgSP : './assect/img/lookbook/aurora.webp',
                imgSP2 : './assect/img/lookbook/aurora2.webp',
                linkSP : './products/aurora.php'
            },

            {
                tenSP : 'Quần BARTIN' ,
                giaSP : 400000 ,
                imgSP : './assect/img/lookbook/bartin.webp',
                imgSP2 : './assect/img/lookbook/bartin-2.webp',
                linkSP : './products/bartin.php'
            },

            {
                tenSP : 'Quần AE' ,
                giaSP : 350000 ,
                imgSP : './assect/img/product/quần/AE-1.webp',
                imgSP2 : './assect/img/product/quần/AE-2.webp',
                linkSP : './products/ae.php'
            },

            {
                tenSP : 'Quần FS ' ,
                giaSP : 5200000 ,
                imgSP : './assect/img/product/quần/FS-1.webp',
                imgSP2 : './assect/img/product/quần/FS-2.webp',
                linkSP : './products/fs.php'
            },

            {
                tenSP : 'Túi JEANY' ,
                giaSP : 720000 ,
                imgSP : './assect/img/product/túi/jeany-1.webp',
                imgSP2 : './assect/img/product/túi/jeany-2.jpeg',
                linkSP : './products/jeany.php'
            },

            {
                tenSP : 'Túi POUCH' ,
                giaSP : 1520000 ,
                imgSP : './assect/img/product/túi/pouch-1.webp',
                imgSP2 : './assect/img/product/túi/pouch-2.webp',
                linkSP : './products/pouch.php'
            },
        ];

        
    </script>

    <script>
        function hienPro(price_arr=[]){
            var proList = document.getElementById("pro-list");
            proList.innerHTML = ' ' ;
            for (i=0 ; i < arrPro.length ; i++) {
                tenPro = arrPro[i].tenSP;
                giaPro = arrPro[i].giaSP;
                imgPro = arrPro[i].imgSP;
                imgPro2 = arrPro[i].imgSP2;
                linkPro = arrPro[i].linkSP;

                // loc price

                if(price_arr.length>0){
                    if (giaPro<500000 && price_arr.includes('low-500')==false) continue;
                    if (giaPro>=500000 && giaPro<1000000 && price_arr.includes('low-1000')==false) continue;
                    if (giaPro>=1000000 && price_arr.includes('up-1000')==false) continue;

                }

                proList.innerHTML+=`
                    <div class="col l-3" id="lookbook-product">
                        <div class="lookbook-product__owl " ><div class="single-product">
                            <div class="product-img " >
                                <a href="${linkPro}">
                                    <img src=" ${imgPro} " alt="" class="lookbook-product__img visible-xs">
                                    <img src="${imgPro} " alt="" class="lookbook-product__img">
                                    <img src=" ${imgPro2} " alt="" class="ookbook-product__img lookbook-product__img">
                                </a>

                                <div class="product-action">
                                
                                    
                                    <div class="product-action_item">

                                        <a href="${linkPro}" class=" " data-handle="/products/tuixach-chain">
                                            <ul>
                                                <li>XEM NHANH</li>
                                                
                                            </ul>
                                        </a>
                                    </div>
                                </div>

                            </div>

                            <div class="product-content">
                                <h2><a href="/product/tuixach-chain.php"> ${tenPro} </a></h2>
                                <div class="product-price">
                                    <div class="price-box">
                        
                                        
                                        <span class="regular-price" data-price="420000"> ${giaPro} ₫</span>
                                    </div>
                        
                                </div>
                            </div>
                        </div></div>
                    </div>
                `;
                
            }
        }
        hienPro()

    </script>
    <script>
        function chonPro(){
            var arr1 = document.getElementsByClassName("sell-price");
            var price_arr = [];
            for (let i = 0; i < arr1.length; i++) {
                if (arr1[i].checked == true) price_arr.push(arr1[i].value);
                
            }
            hienPro(price_arr);
            console.log(price_arr)
        }
        
    </script>
    <script src="./js/product.js"></script>
</body>
</html>