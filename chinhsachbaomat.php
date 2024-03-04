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
    <title>Chính sách bảo mật - BLANKSOUL</title>
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
                                <h1 class="titlet">Chính sách bảo mật</h1>
                            </div>
                            <div class="content-page">
                                <h1>Chính sách bảo mật</h1><p><strong>NỘI DUNG CHI TIẾT CHÍNH SÁCH BẢO MẬT</strong></p><p>&nbsp;</p><p><strong>I.&nbsp;Chính sách bảo mật và chia sẻ thông tin</strong></p><p>&nbsp;</p><p><strong>1. Mục đích</strong></p><p><em>BLANKSOUL.vn tôn trọng sự riêng tư, muốn bảo vệ thông tin cá nhân và thông tin thanh toán của bạn. "Chính sách bảo mật" dưới đây là những cam kết mà chúng tôi thực hiện, nhằm tôn trọng và bảo vệ quyền lợi của người truy cập.</em></p><p>&nbsp;</p><p><strong>2.&nbsp;</strong><strong>Quy định cụ thể</strong></p><p>&nbsp;</p><p><strong>2.1/&nbsp;Thu thập thông tin</strong></p><p>- Khi khách hàng thực hiện giao dịch/ đăng ký mở tài khoản tại <em>BLANKSOUL.vn </em> khách hàng phải cung cấp một số thông tin cần thiết. Khách hàng tự nhiên cung cấp thông tin để phía Blanke &amp; Ksoul hỗ trợ đổi trả/bảo hành cũng như thông báo đến khách hàng các ưu đãi.</p><p>- Khách hàng có trách nhiệm bảo đảm thông tin đúng và luôn cập nhật đầy đủ và chính xác nhất.</p><p>- Nếu khách hàng có nhu cầu muốn thay đổi thông tin cung cấp trước đó thì có 2 cách: Gặp trực tiếp nhân viên bán hàng tại cửa hàng hoặc gọi điện thoại đến hotline CSKH của công ty: 090.245.2521 . Cung cấp thông tin cũ để chỉnh sửa và thông tin mới để được cập nhật trên hệ thống thông tin.</p><p><strong>2.2/&nbsp;Lưu trữ và bảo mật thông tin riêng</strong></p><p>&nbsp;</p><p>- Thông tin khách hàng, cũng như các trao đổi giữa khách hàng và Blanke &amp; Ksoul, đều được lưu trữ và bảo mật bởi hệ thống của Blanke &amp; Ksoul,.</p><p>- Thông tin sẽ được lưu trữ từ khi khách hàng cung cấp trên hệ thống của Blanke &amp; Ksoul&nbsp;và không bị mất đi( lưu trữ vĩnh viễn).</p><p>- Blanke &amp; Ksoul,&nbsp;có các biện pháp thích hợp về kỹ thuật và an ninh để ngăn chặn việc truy cập , sử dụng trái phép thông tin khách hàng.</p><p>&nbsp;</p><p><strong>2.3/&nbsp;Sử dụng thông tin khách hàng</strong></p><p>- Chỉ những bộ phận nội bộ được sử dụng thông tin lưu trữ của khách hàng bao gồm: Bộ phận Marketing, Bộ Phận Chăm Sóc Khách Hàng, Bộ Phận Nhân viên bán hàng tại cái cửa hàng và đội ngũ bán hàng online, vận chuyển.</p><p>* Blanke &amp; Ksoul, có quyền sử dụng thông tin khách hàng cung cấp để:</p><p>- Giao hàng theo địa chỉ mà quý khách cung cấp.</p><p>- Cung cấp thông tin liên quan đến sản phẩm, lợi ích, ưu đãi hay các thư từ khác.</p><p>- Xử lý đơn đặt hàng và cung cấp dịch vụ, thông tin qua trang web <em>BLANKSOUL.vn </em> theo yêu cầu của quý khách.</p><p>- Sử dụng thông tin đã thu thập được từ các cookies nhằm cải thiện trải nghiệm người dùng và chất lượng các dịch vụ của <em>BLANKSOUL.vn </em>.</p><p>- Blanke &amp; Ksoul dùng thông tin số điện thoại của khách hàng để tạo tài khoản thành viên. Từ đó tạo ra "Chương Trình Khách Hàng Thân Thiết" mang đến những ưu đãi và những quyền lợi đặc biêt dành riêng cho khách hàng thân thiết của Blanke &amp; Ksoul.</p><p><strong>3.&nbsp;Liên kết với website khác</strong></p><p>&nbsp;</p><p>&nbsp;-&nbsp;Khách hàng có trách nhiệm bảo vệ thông tin tài khoản của mình và không cung cấp bất kỳ thông tin nào liên quan đến tài khoản và mật khẩu truy cập trên <em>BLANKSOUL.vn </em> trên các website khác.</p><p>&nbsp;</p><p><strong>4.&nbsp;Chia sẻ thông tin khách hàng</strong></p><p>&nbsp;</p><p>Blanke &amp; Ksoul&nbsp;cam kết sẽ không chia sẻ thông tin của khách hàng cho bất kỳ một công ty nào khác ngoại trừ những công ty và các bên thứ ba có liên quan trực tiếp đến việc giao hàng. Chúng tôi có thể tiết lộ hoặc cung cấp thông tin cá nhân của quý khách trong các trường hợp thật sự cần thiết như sau:</p><p>- Khi có yêu cầu của các cơ quan pháp luật.</p><p>- Chia sẻ thông tin khách hàng với đối tác chạy quảng cáo như Google ví dụ như tiếp thị lại khách hàng dựa theo hành vi của khách hàng.</p><p>- Nghiên cứu thị trường và các báo cáo phân tích và tuyệt đối không chuyển cho bên thứ ba.</p><p>&nbsp;</p><p><strong>5.&nbsp;Sử dụng Cookie</strong></p><p>&nbsp;</p><p>Khi khách hàng sử dụng dịch vụ hoặc xem nội dung do Blanke &amp; Ksoul&nbsp;cung cấp, chúng tôi tự động thu thập và lưu trữ một số thông tin trong nhật ký máy chủ. Những thông tin này bao gồm:</p><p>- Các chi tiết về cách khách hàng sử dụng dịch vụ của Blanke &amp; Ksoul&nbsp;chẳng hạn như truy vấn tìm kiếm.</p><p>- Địa chỉ giao thức Internet.</p><p>- Thông tin sự cố thiết bị như lỗi, hoạt động của hệ thống, cài đặt phần cứng, loại trình duyệt, ngôn ngữ trình duyệt, ngày và thời gian bạn yêu cầu và URL giới thiệu.</p><p>- Cookie có thể nhận dạng duy nhất trình duyệt hoặc Tài khoản của khách hàng</p><p>&nbsp;</p><p><strong>6. Liên hệ, giải đáp, thắc mắc.</strong></p><p>&nbsp;</p><p>Bất kỳ khi nào khách hàng cần hỗ trợ, xin vui lòng liên hệ với Blanke &amp; Ksoul tại Emai: blanke.ksoul@gmail.com&nbsp;- ĐT: 090 245 2521</p><p>&nbsp;</p><p><strong>II.&nbsp;Chính sách bảo mật thanh toán</strong></p><p>&nbsp;</p><p>- Hệ thống thanh toán thẻ trên <em>BLANKSOUL.vn</em> được cung cấp bởi các đối tác cổng thanh toán đã được cấp phép hoạt động hợp pháp tại Việt Nam. Do đó, các tiêu chuẩn bảo mật thanh toán thẻ của <em>BLANKSOUL.vn</em> đảm bảo tuân thủ theo các tiêu chuẩn bảo mật của Đối tác cộng thanh toán.</p><p>- Ngoài ra, <em>BLANKSOUL.vn</em> còn có các tiêu chuẩn bảo mật giao dịch thanh toán riêng để đảm bảo an toàn các thông tin thanh toán của khách hàng.</p><p>&nbsp;</p><ul><li><strong><em>Mọi thắc mắc về chương trình, vui lòng liên hệ:</em></strong></li><li>Hotline chăm sóc khách hàng: 090 245 2521</li><li>Website: Blanksoul.vn</li><li>Email:&nbsp;blanke.ksoul@gmail.com</li><li>Fanpage:&nbsp;<a title="facebook.com/giayjuno" href="https://www.facebook.com/giayjuno">https://www.facebook.com/blanke.store</a></li></ul><div id="gtx-trans" style="position: absolute; left: 293px; top: 2361.41px;"><div class="gtx-trans-icon">&nbsp;</div></div>
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