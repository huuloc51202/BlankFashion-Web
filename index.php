<?php
    session_start();
    include "./model/pdo.php";
    include "./model/danhmuc.php";
    include "./model/sanpham.php";

    $spm = load_spm();
    $list = load_dm();
    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- owl carousel -->
    <link rel="stylesheet" href="./assect/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./assect/css/owl.theme.default.css">
    <link rel="stylesheet" href="./assect/css/main.css">
    <link rel="stylesheet" href="./assect/css/list.css">
    <link rel="stylesheet" href="./assect/css/base.css">
    <link rel="stylesheet" href="./assect/css/grid.css">
    <link rel="stylesheet" href="./assect/css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <title>-BLANKSOUL</title>
    <link rel="icon" href="./assect/img/logo-header/favicon.jpg" type="image/x-icon" />
    
</head>
<body onload="loadslsp()">
    <div class="app">
        <header class="header ">
            <div class="grid wide">
                <!-- logo-img -->
                <div class="header__logo col ">
                    <a href="index.php" class="header__logo-img ">
                        <img src="./assect/img/logo-header/logo.webp" alt="lộc"  class="header__logo-img">
                    </a>
                </div>

                
                <div class="header__menu hide-on-mobile-tablet hide-on-mobile">
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
                                <a href="/" class="header__menu-item">Giới thiệu</a>
                                <ul class="sub-menu">
                                    
                                    
                                    <li class="sub-menu-item  ">
                                        <a href="/">Chính sách đổi trả</a>
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
                            </li>
                             -->
    
                            
                        
    
                        </ul>
                    </nav>
                    <div class="header__search">

                        <div class="search" id="sea">
                            <div type="button" data-show="#search" id="search-des">
                                <i class="search-des-menu fa-solid fa-magnifying-glass"></i>
                            </div>
                            <div class="search-input" >
        
        
                                <form class="search-fr" action="search.php" name=formtim method="post" onclick="checksearch()">
                                    <div class="form-input">
                                        <input  onclick="if(this.value=='Tìm kiếm') this.value=''"onblur="if(this.value=='') this.value='Tìm kiếm'"   name="tukhoa"  placeholder="Tìm kiếm..." value="Tìm kiếm" type="text" required="required" class="search-input-btn">
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

        <div class="app_container">
            <!-- <div class="grid">

                <div class="app_slidebar" >
                    <div class="app_sliderbar-btn">
                        <div class="slidebar-btn l-12 m-12 c-12" >
                            <a href="">
        
                                <img class="slidebar-btn__img l-12 m-12 c-12" src="./assect/img/slide/slideshow_1.webp"  alt="">
                            </a>
                        
                        </div>
        
                        <div class="slidebar-btn l-12 m-12 c-12" >
                            <a href="">
        
                                <img class="slidebar-btn__img l-12 m-12 c-12" src="./assect/img/slide/slideshow_2.webp"  alt="">
                            </a>
                        
                        </div>
        
                        <div class="slidebar-btn l-12 m-12 c-12" >
                            <a href="">
        
                                <img class="slidebar-btn__img l-12 m-12 c-12" src="./assect/img/slide/slideshow_3.webp"  alt="">
                            </a>
                        
                        </div>
                        <div class="slider-pro__item  ">
                            <div class="slider-pro__link "></div>
                                
                                <img src="./assect/img/slide/slideshow_1.webp" alt=""
                                    class="slider-pro__img "
                                >


                            </div>

                            <div class="control-btn prev">
                                <i class="lookbook-product__icon fa-solid fa-angle-left "></i>
                            </div>
                            <div class="control-btn next">
                                <i class="lookbook-product__icon fa-solid fa-angle-right owl-next"></i>
                            </div>


                        </div>

                        <div class="list-image " style="display: none;" >
                            <div class="l-3 ">
                                <img src="./assect/img/slide/slideshow_1.webp" alt="" class="list-image_sm">
                            </div>
                            
                            <div class="l-3 ">
                                <img src="./assect/img/slide/slideshow_2.webp" alt="" class="list-image_sm">
                            </div>

                            <div class="l-3 ">
                                <img src="./assect/img/slide/slideshow_3.webp" alt="" class="list-image_sm">
                            </div>

                            

                            
                        </div>
                    </div>
                    
    
                </div>
            </div> -->

            <div class="grid wide"> 
                <div class="row">
                    <div class="col l-4 m-0 c-0">
                        <nav class="category">
                            <h3 class="category__heading">
                                Danh mục
                            </h3>
                            <ul class="category-list">
                                <?php
                                    foreach ($list as $cate) {
                                        extract($cate);
                                        $linkcate = "cate.php?danhmuc&iddm=".$id;
                                        echo '
                                            <li class="category-item ">
                                                <a href="'.$linkcate.'" class="category-item__link">'.$catename.' </a>
                                            </li>
                                            
                                        ';
                                    }
                                ?>
                                
                            </ul>
                        </nav>
                    </div>

                    <div class="col l-8 m-12 c-12">

                    <div class="grid">

                        <div class="app_slidebar" >
                            <div class="app_sliderbar-btn">
                                <div class="slidebar-btn l-12 m-12 c-12" >
                                    <a href="">

                                        <img class="slidebar-btn__img l-12 m-12 c-12" src="./assect/img/slide/slideshow_1.webp"  alt="">
                                    </a>
                                
                                </div>

                                <div class="slidebar-btn l-12 m-12 c-12" >
                                    <a href="">

                                        <img class="slidebar-btn__img l-12 m-12 c-12" src="./assect/img/slide/slideshow_2.webp"  alt="">
                                    </a>
                                
                                </div>

                                <div class="slidebar-btn l-12 m-12 c-12" >
                                    <a href="">

                                        <img class="slidebar-btn__img l-12 m-12 c-12" src="./assect/img/slide/slideshow_3.webp"  alt="">
                                    </a>
                                
                                </div>
                                <!-- <div class="slider-pro__item  ">
                                    <div class="slider-pro__link "></div>
                                        
                                        <img src="./assect/img/slide/slideshow_1.webp" alt=""
                                            class="slider-pro__img "
                                        >


                                    </div>

                                    <div class="control-btn prev">
                                        <i class="lookbook-product__icon fa-solid fa-angle-left "></i>
                                    </div>
                                    <div class="control-btn next">
                                        <i class="lookbook-product__icon fa-solid fa-angle-right owl-next"></i>
                                    </div>


                                </div>

                                <div class="list-image " style="display: none;" >
                                    <div class="l-3 ">
                                        <img src="./assect/img/slide/slideshow_1.webp" alt="" class="list-image_sm">
                                    </div>
                                    
                                    <div class="l-3 ">
                                        <img src="./assect/img/slide/slideshow_2.webp" alt="" class="list-image_sm">
                                    </div>

                                    <div class="l-3 ">
                                        <img src="./assect/img/slide/slideshow_3.webp" alt="" class="list-image_sm">
                                    </div>

                                    

                                    
                                </div> -->
                            </div>
                            

                        </div>
                    </div>
                                                
    
                        <div class="home_product">
                            <div class="row sm-gutter">
                                <?php
                                    foreach ($spm as $sp) {
                                        extract($sp);
                                        $linksp =  "./products/spct.php?id=".$id;
                                        echo '
                                            <div class="col l-4 m-4 c-6">
                                                <a class="home_product-item" href="'.$linksp.'">
                                                    <img src="./assect/img/product/'.$img.'" alt="" class="home_product-item__img">
                                                    <h4 class="home_product-item__name">'.$name.' </h4>
                                                    <div class="home_product-item__price">
                                                        
                                                        <span class="home_product-item__price-current">'.$price.'đ</span>
                                                    </div>
                                                    <div class="home_product-item__action">
                                                        <span class="home_product-item__like home_product-item__like--liked">
                                                            <i class="home_product-item__like-icon-empty fa-regular fa-heart"></i>
                                                            <i class="home_product-item__like-icon-fill fa-solid fa-heart"></i>
                                                        </span>
                                                        <div class="home_product-item__rating">
                                                            <i class="home_product-item__star--gold fa-solid fa-star"></i>
                                                            <i class="home_product-item__star--gold fa-solid fa-star"></i>
                                                            <i class="home_product-item__star--gold fa-solid fa-star"></i>
                                                            <i class="home_product-item__star--gold fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                        </div>
                                                        <span class="home_product-item__sold">88 đã bán</span>
                                                    </div>
                                                    <div class="home_product-item__origin">
                                                        <span class="home_product-item__brand">Blank Soul</span>
                                                        <span class="home_product-item__origin-name">Việt Nam</span>
                                                    </div>
                                                    
                                                    
                                                </a>
                                            </div>

                                        ';
                                    }
                                ?>
    
    
                                
    
                                
    
                            </div>
                        </div>
    
                        
                    </div>
    
                    
                </div>

                
                
            </div>

            <div class="grid wide">
                <div class="col">
                    <div class="app_container-btn">
                        <div class="home-product">
                            <div class="home-product-item ">
                                <div class="home-product-zoom">

                                    <a href="sanphammoi.php">
                                        <img src="./assect/img/home-product-item/xxx_4.webp" alt="" class="home-product-img ">
    
                                    </a>
                                </div>
                                <div class="home-product-zoom">

                                    <a href="sanphammoi.php">
                                        <img src="./assect/img/home-product-item/xxx_5.webp" alt="" class="home-product-img ">
    
                                    </a>
                                </div>
                            </div>

                            <div class="home-product__lookbook l-12">
                                <div class="lookbook-product row">
                                    <h3>
                                        NEW LOOKBOOK
                                    </h3>
                                </div>

                                <div class="lookbook-product__item ">
                                    <div class="lookbook-product__list ">
                                        <div class="lookbook-product__seller owl-prev">
                                            <i class="lookbook-product__icon fa-solid fa-angle-left"></i>
                                        </div>

                                        <div class="lookbook__owl   owlDesign  owl-carousel  owl-theme owl-loaded l-12 " >
                                            <?php
                                                foreach ($spm as $sp) {
                                                    extract($sp);
                                                    $linksp =  "./products/spct.php?id=".$id;
                                                    echo '
                                                            <div class="lookbook-product__owl   owl-stage-outer" ><div class="single-product">
                                                            <div class="product-img " >
                                                                <a href="'.$linksp.'">
                                                                    <img src="./assect/img/product/'.$img.'" alt="" class="lookbook-product__img visible-xs">
                                                                    <img src="./assect/img/product/'.$img.'" alt="" class="lookbook-product__img">
                                                                    <img src="./assect/img/product/'.$img.'" alt="" class="ookbook-product__img lookbook-product__img">
                                                                </a>
                
                                                                <div class="product-action">
                                                                    <!-- <img src="./assect/img/lookbook/new1.webp" alt="" class="ookbook-product__img lookbook-product__img"> -->
                                                                    
                                                                    <div class="product-action_item">
                
                                                                        <a href="'.$linksp.'" class=" " data-handle="/products/aefit-shirt">
                                                                            <ul>
                                                                                <li>XEM NHANH</li>
                                                                                
                                                                            </ul>
                                                                        </a>
                                                                    </div>
                                                                </div>
                
                                                            </div>
                
                                                            <div class="product-content">
                                                                <h2><a href="'.$linksp.'">'.$name.'</a></h2>
                                                                <div class="product-price">
                                                                    <div class="price-box">
                                                        
                                                                        
                                                                        <span class="regular-price">'.$price.'₫</span>
                                                                    </div>
                                                        
                                                                </div>
                                                            </div>
                                                        </div></div>
                                                    ';
                                                }
                                            ?>
                                        </div>
                                        
                                        

                                        <div class="lookbook-product__seller owl-next">
                                            <i class="lookbook-product__icon fa-solid fa-angle-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="home-product">
                            <div class="home-product-item ">
                                <div class="home-product-zoom">

                                    <a href="sanphammoi.php">
                                        <img src="./assect/img/home-product-item/xxx_6.webp" alt="" class="home-product-img ">
    
                                    </a>
                                </div>
                                <div class="home-product-zoom">

                                    <a href="sanphammoi.php">
                                        <img src="./assect/img/home-product-item/xxx_7.webp" alt="" class="home-product-img ">
    
                                    </a>
                                </div>
                            </div>

                            <div class="home-product__lookbook l-12">
                                <div class="lookbook-product row">
                                    <h3>
                                        BEST SELLER
                                    </h3>
                                </div>

                                <div class="lookbook-product__item ">
                                    <div class="lookbook-product__list  ">
                                        <div class="lookbook-product__seller owl-prev">
                                            <i class="lookbook-product__icon fa-solid fa-angle-left "></i>
                                        </div>

                                        

                                        <div class="lookbook__owl owlDesign  owl-carousel  owl-theme owl-loaded l-12" >

                                            
                                        <?php
                                                foreach ($spm as $sp) {
                                                    extract($sp);
                                                    $linksp =  "./products/spct.php?id=".$id;
                                                    echo '
                                                            <div class="lookbook-product__owl   owl-stage-outer" ><div class="single-product">
                                                            <div class="product-img " >
                                                                <a href="'.$linksp.'">
                                                                    <img src="./assect/img/product/'.$img.'" alt="" class="lookbook-product__img visible-xs">
                                                                    <img src="./assect/img/product/'.$img.'" alt="" class="lookbook-product__img">
                                                                    <img src="./assect/img/product/'.$img.'" alt="" class="ookbook-product__img lookbook-product__img">
                                                                </a>
                
                                                                <div class="product-action">
                                                                    <!-- <img src="./assect/img/lookbook/new1.webp" alt="" class="ookbook-product__img lookbook-product__img"> -->
                                                                    
                                                                    <div class="product-action_item">
                
                                                                        <a href="'.$linksp.'" class=" " data-handle="/products/aefit-shirt">
                                                                            <ul>
                                                                                <li>XEM NHANH</li>
                                                                                
                                                                            </ul>
                                                                        </a>
                                                                    </div>
                                                                </div>
                
                                                            </div>
                
                                                            <div class="product-content">
                                                                <h2><a href="'.$linksp.'">'.$name.'</a></h2>
                                                                <div class="product-price">
                                                                    <div class="price-box">
                                                        
                                                                        
                                                                        <span class="regular-price">'.$price.'₫</span>
                                                                    </div>
                                                        
                                                                </div>
                                                            </div>
                                                        </div></div>
                                                    ';
                                                }
                                            ?>
    
                                        </div>
                                        

                                        <div class="lookbook-product__seller owl-next">
                                            <i class="lookbook-product__icon fa-solid fa-angle-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
        </div>

        <div class="app_adv">
            <div class="grid wide col">
                <div class="video-wrapper " >
                    
                    
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/bzSirYhzJ7g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="video-adv"></iframe>
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
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" ></script>
    <!-- owl -->
    <script src="./js/owl.carousel.min.js"></script>
    <script>
        
        $(document).ready(function(){

            $('.owl-carousel').owlCarousel({
                 
                loop:true,
                margin:10,
                // nav:true,
                // navText: [ " <i class='lookbook-product__icon fa-solid fa-angle-left '></i>" , " <i class='lookbook-product__icon fa-solid fa-angle-right'></i>"],
                
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:3
                    },
                    1000:{
                        items:4
                    }
                }
            })

            $(".owl-next").click(function(){
                $(".owl-carousel").trigger('next.owl.carousel');
            });

            $(".owl-prev").click(function(){
                $(".owl-carousel").trigger('prev.owl.carousel');
            });
        });
    </script>
    <script src="./js/product.js"></script>
    <script src="./js/main.js"></script>
    
</body>
</html>