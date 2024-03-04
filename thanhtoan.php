<?php
    session_start();
    include "./products/addcart.php";   
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
    <title>Giỏ hàng - BLANKSOUL</title>
    <link rel="icon" href="./assect/img/logo-header/favicon.jpg" type="image/x-icon" />
</head>
<body onload="loaddatapay()">
    <div class="app">
        

        <div class="app_product">
            
        </div>
        <div class="grid wide" >
            <div class="col">
                <form action="payconfirm.php" method="post">

                    <div class="paybill">
                        <div class="sidebar ">
                            <div class="sidebar-content">
                                <div class="order-summary order-summary-is-collapsed">
                                    <!-- <h2 class="visually-hidden">Thông tin đơn hàng</h2> -->
                                    <div class="order-summary-sections">
                                        
                                        <div class="order-summary-section order-summary-section-product-list" data-order-summary-section="line-items">
                                            <table class="product-table">

                                                
                                                
                                                <tbody>
                                                    
                                                    <div id="pay-table">
                                                        <?php
                                                            foreach ($_SESSION['mycart'] as $cart) {
                                                                echo '
                                                                    
                                                                    <input type="hidden" name="name-pro" value="'. $cart[2] .'">
                                                                    <input type="hidden" name="soluong-sp" value="'. $cart[4] .'">
                                                                    <input type="hidden" name="gender" value="'. $cart[5] .'">
                                                                    <input type="hidden" name="price" value="'. $cart[6] .'">

                                                                    <div class="product" >
                                                                        <div class="product-image">
                                                                            <div class="product-thumbnail">
                                                                                <div class="product-thumbnail-wrapper">
                                                                                    <img class="product-thumbnail-image" name="img" alt="" src="./assect/img/product/'.$cart[1].'">
                                                                                </div>
                                                                                <span class="product-thumbnail-quantity" name="soluong-sp">'. $cart[4] .'</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <span class="product-description-name order-summary-emphasis" name="name-pro">'. $cart[2] .'</span>
                                                                            
                                                                            <span class="product-description-variant order-summary-small-text" name="gender">
                                                                                '. $cart[5] .'
                                                                            </span>
                                                                            
                                                                        </div>
                                                                        
                                                                        <div class="product-price">
                                                                            <span class="order-summary-emphasis" name="price">'. $cart[6] .'</span>
                                                                        </div>
                                                                    </div>
                                                                ';
                                                            }
                                                        ?>
                                                        
                                                        
                                                    </div>
    
    
    
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                        
                                        <div class="order-summary-section order-summary-section-discount" data-order-summary-section="discount">
                                           
                                            
                                            <div class="fieldset">
                                                <div class="field  ">
                                                    <div class="field-input-btn-wrapper">
                                                        <div class="field_input">
                                                            
                                                            <input placeholder="Mã giảm giá" class="field_input-wrapper" data-discount-field="true" autocomplete="false" autocapitalize="off" spellcheck="false" size="30" type="text" id="discount.code" name="discount.code" value="">
                                                        </div>
                                                        <button type="" class="field-input-btn btn--primary">
                                                            <span class="btn-content">Sử dụng</span>
                                                            <i class="btn-spinner icon icon-button-spinner"></i>
                                                        </button>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
    
                                            
                                        
                                        <div class="order-summary-section order-summary-section-total-lines payment-lines" data-order-summary-section="payment-lines">
                                            <table class="total-line-table">
                                                
                                                
                                                <tfoot class="total-line-table-footer">
                                                    <tr class="total-line">
                                                        <td class="total-line-name payment-due-label">
                                                            <span class="payment-due-label-total">Tổng cộng</span>
                                                        </td>
                                                        <td class="total-line-name payment-due">
                                                        <?php
                                                            $totalcart = 0;
                                                            foreach ($_SESSION['mycart'] as $cart) {
                                                                $totalcart = $totalcart + $cart[6];
                                                            }
                                                            echo '
                                                                <span class="payment-due-price" id="payment-due-price" >
                                                                    '.$totalcart.'đ
                                                                </span>
                                                            ';
                                                        ?>
                                                            
                                                            <span class="checkout_version" display:none="" data_checkout_version="0">
                                                            </span>
                                                        </td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
    
                                    
                                </div>
                            </div>
                        </div>
    
    
                        <div class="main">
    
                            <div class="main-header">
                            
                                <a href="/" class="logo">
                                    
                                    <h1 class="logo-text">BLANKSOUL</h1>   
                                        
                                </a>
                            
                                <style>
                                    a.logo{display: block;}
                                    .logo-cus{ 
                                        width: 100%; padding: 15px 0; 
                                        text-align: center; 
                                    }
                                    .logo-cus img{ max-height: 4.2857142857em  }
                                    
                                    
                                    
                                    @media (max-width: 767px){
                                        .banner a{ display: block; }
                                    }
                                </style>
    
                                
                                <ul class="breadcrumb">
                                    <a href="gio-hang.php">
    
                                        <li class="breadcrumb-item">
                                            
                                            Giỏ hàng
                                        </li>
                                    </a>
                                    >
                                    <li class="breadcrumb-item breadcrumb-item-current">
                                        thông tin giao hàng
                                    </li>
                                        
                                </ul>
                                
                            </div>
                            <div class="main-content">
                                
                                       
                            
    
                                <div class="step">
                                        
                                    <div class="step-sections steps-onepage" step="1">
                                        
                                            
                                        
                                        <div class="section">
                                            <div class="section-header">
                                                <h2 class="section-title">Thông tin giao hàng</h2>
                                            </div>
                                            <div class="section-content section-customer-information no-mb">
                                                
                                                <?php
                                                    if(isset($_SESSION['email'])){
                                                        extract($_SESSION['email']);
                                                    
                                                ?>
                                                    
                                                    
                                                    
                                                <?php
                                                    }else{
                                                ?>
                                                <p class="section-content-text">
                                                    Bạn đã có tài khoản?
                                                    <a href="login.php " style="color: #afdff6;"> Đăng nhập</a>
                                                </p>
                                                </a>
                                                <?php }?>
                                                
                                                
                                                <?php
                                                    if(isset($_SESSION['email'])){
                                                        $fullname = $_SESSION['email']['fullname'];
                                                        $email = $_SESSION['email']['email'];
                                                        $phone = $_SESSION['email']['phone'];
                                                    }else{
                                                        $fullname ="";
                                                        $email ="";
                                                        $phone ="";
                                                    }
                                                ?>
                                                
                                                
                                                <div class="fieldset">
                                                    
                                                    <div class="field field-required">
                                                        <div class="field-input-wrapper">
                                                            
                                                            <input placeholder="Họ và tên" autocapitalize="off" spellcheck="false" class="field-input" size="30" type="text" id="billing_address_full_name" name="fullname" value="<?php echo $fullname;?>" autocomplete="false">
                                                        </div>
                                                        
                                                    </div>
                                                
                                                
                                                    
                                                    <div class="field field-required field-two-thirds  ">
                                                        <div class="field-input-wrapper">
                                                                
                                                            <input autocomplete="false" placeholder="Email" autocapitalize="off" spellcheck="false" class="field-input" size="30" type="email" id="checkout_user_email" name="email" value="<?php echo $email;?>">
                                                        </div>
                                                            
                                                    </div>
                                                    
                                                
                                                
                                                    <div class="field field-required field-third  ">
                                                        <div class="field-input-wrapper">
                                                            
                                                            <input autocomplete="false" placeholder="Số điện thoại" autocapitalize="off" spellcheck="false" class="field-input" size="30" maxlength="15" type="tel" id="billing_address_phone" name="phone" value="<?php echo $phone;?>">
                                                        </div>
                                                        
                                                    </div>
                                                    
                                                    <div class="field field-required  ">
                                                        <div class="field-input-wrapper">
                                                            
                                                            <input placeholder="Địa chỉ" autocapitalize="off" spellcheck="false" class="field-input" size="30" type="text" id="billing_address_address1" name="address" value="">
                                                        </div>
                                                        
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                            <!-- ADDRESS -->


                                            <!-- <div class="section-content">
                                                <div class="fieldset">
                                                    
                                                    <form class="field default"  method="post">
                                                        <input name="utf8" type="hidden" value="✓">
                                                        <div class="content-box ">
                                                                        
                                                            <div id="form_update_location_customer_shipping" class="order-checkout__loading radio-wrapper  content-box-row-padding content-box-row-secondary " for="customer_pick_at_location_false">
                                                                
                                                                
                                                                <div class="order-checkout__loading--circle"></div>
                                                                                                                
                                                            
                                                                <div class="field field-required  ">
                                                                    <div class="field-input-wrapper">
                                                                        
                                                                        <input placeholder="Địa chỉ" autocapitalize="off" spellcheck="false" class="field-input" size="30" type="text" id="billing_address_address1" name="address" value="">
                                                                    </div>
                                                                    
                                                                </div>
                                                            
    
    
                                                                
                                                                
                                                                <div class="field field-show-floating-label field-required field-third ">
                                                                    <div class="field-input-wrapper field-input-wrapper-select">
                                                                        
                                                                        
                                                                        <select class="form-select field-input  form-select-sm mb-3" id="city" aria-label=".form-select-sm"  name="city">
                                                                            <option value=""  selected="">Chọn tỉnh thành</option>           
                                                                        </select>
                                                                    </div>
                                                                        
                                                                    
                                                                </div>
                                                                
                                                                    
                                                                <div class="field field-show-floating-label field-required field-third ">
                                                                    <div class="field-input-wrapper field-input-wrapper-select">
                                                                        
                                                                    
    
                                                                        <select class="form-select field-input  form-select-sm mb-3" id="district" name="district" >
                                                                            <option value="" selected>Chọn quận huyện</option>
                                                                        </select>
                                                                    </div>
                                                                            
                                                                </div>
                                                                        
                                                                <div class="field field-show-floating-label field-required  field-third  ">
                                                                    <div class="field-input-wrapper field-input-wrapper-select">
                                                                        
                                    
                                                                        <select class="form-select field-input form-select-sm" id="ward" name="ward" >
                                                                            <option value="" selected>Chọn phường / xã</option>
                                                                        </select>
                                                                    </div>
                                                                                
                                                                </div>
                                                                        
                                                                    
                                                                
                                                                
                                                            </div>
                                                                
                                                        </div>
                                                    </form>
                                                    
                                                </div>
                                                    
                                            </div> -->

                                                
                                            <div id="change_pick_location_or_shipping">
                            
                                                    
                                                <div id="section-payment-method" class="section">
                                                    <div class="order-checkout__loading--box">
                                                        <div class="order-checkout__loading--circle"></div>  
                                                    </div>
                                                    <div class="section-header">
                                                        <h2 class="section-title">Phương thức thanh toán</h2>
                                                    </div>
                                                    <div class="section-content">
                                                        <div class="contentbox">
                                                        
                                                            
                                                            <div class="radio-wrapper content-box-row">
                                                                
                                                                <div class="radio-input payment-method-checkbox">
                                                                    <input type-id="4" id="cod" class="input-radio" name="payment" type="radio" value="1" checked="">
                                                                </div>
                                                                <div class="radio-content-input">
                                                                    <img class="main-img" src="https://hstatic.net/0/0/global/design/seller/image/payment/other.svg?v=6"  style="min-width: 10%; margin-right: 9px;">
                                                                    <div>
                                                                        <br class="radio-label-primary">Thanh toán sau khi nhận được hàng </span>
                                                                        <span class="quick-tagline hidden"></span>
                                                                    
                                                                
                                                                    </div>
                                                                </div>
                                                                
                                                            </div>
                                                            
                                                            
                                                            
                                                            <div class="radio-wrapper content-box-row">
                                                                
                                                                <div class="radio-input payment-method-checkbox">
                                                                    <input type-id="21" id="momo" class="input-radio" name="payment" type="radio" value="2">
                                                                </div>
                                                                <div class="radio-content-input">
                                                                    <img class="main-img" src="https://hstatic.net/0/0/global/design/seller/image/payment/momo.svg?v=6" style="min-width: 33px; margin-right: 9px;">
                                                                    <div>
                                                                        <span class="radio-label-primary">Ví MoMo </span>
                                                                        <span class="quick-tagline hidden"></span>
                                                                
                                                            
                                                                    </div>
                                                                </div>
                                                                
                                                            </div>
                                                            
    
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                                        
                                        
                                        
                                    </div>
                                    <div class="step-footer" id="step-footer-checkout">
                                        
                                            
                                        
                                        <input name="utf8" type="hidden" value="✓">
                                        <button type="submit" name="submit" class="step-footer-continue-btn btn btn--primary">
                                            <span class="btn-content">Hoàn tất đơn hàng</span>
                                            <i class="btn-spinner icon icon-button-spinner"></i>
                                        </button>
                                        <a class="step-footer-previous-link" href="gio-hang.php">
                                            Giỏ hàng
                                        </a>
                                            
                                            
                                        
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
    
                    </div>
                </form>

                
           
            </div>
        </div>

        
    </div>
    <script src="./js/product.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
    <!-- tỉnh thành -->
    <script>
        var citis = document.getElementById("city");
        var districts = document.getElementById("district");
        var wards = document.getElementById("ward");
        var Parameter = {
            url: "https://raw.githubusercontent.com/kenzouno1/DiaGioiHanhChinhVN/master/data.json", 
            method: "GET", 
            responseType: "application/json", 
        };
        var promise = axios(Parameter);
        promise.then(function (result) {
            renderCity(result.data);
        });

        function renderCity(data) {
            for (const x of data) {
                citis.options[citis.options.length] = new Option(x.Name, x.Id);
            }
            citis.onchange = function () {
                district.length = 1;
                ward.length = 1;
                if(this.value != ""){
                    const result = data.filter(n => n.Id === this.value);

                    for (const k of result[0].Districts) {
                        district.options[district.options.length] = new Option(k.Name, k.Id);
                    }
                }
            };
            district.onchange = function () {
                ward.length = 1;
                const dataCity = data.filter((n) => n.Id === citis.value);
                if (this.value != "") {
                    const dataWards = dataCity[0].Districts.filter(n => n.Id === this.value)[0].Wards;

                    for (const w of dataWards) {
                        wards.options[wards.options.length] = new Option(w.Name, w.Id);
                    }
                }
            };
        }
	</script>
</body>

<!-- <script src="./js/main.js"></script>     -->
</html> 