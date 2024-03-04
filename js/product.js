// search
function checksearch (){

    if(document.formtim.tukhoa.value=='Tìm kiếm'){
        alert("Bạn chưa nhập từ khóa tìm kiếm…");	
        document.formtim.tukhoa.focus();		
        return false;	// Chặn form không cho submit
    }
    return true; // Cho submit form khi đã kiểm tra xong
}


// slideshow 
var imgSlider = document.querySelector('.slider-pro__img')
var listImg = document.querySelectorAll('.list-image img')
var prevBtn = document.querySelector('.prev')
var nextBtn = document.querySelector('.next')

var currentIndex = 0;
function updateImageByIndex(index){

    // remove class image-sm_border

    document.querySelectorAll('.list-image_sm').forEach(item=>{
        item.classList.remove('image-sm_border')
    })

    currentIndex = index
    imgSlider.src = listImg[index].getAttribute('src')
    listImg[index].classList.add('image-sm_border')
}

listImg.forEach((imgElement , index) => {
    imgElement.addEventListener('click' , e=> {
        updateImageByIndex(index)
    })
})


prevBtn.addEventListener('click' , e=> {
    if(currentIndex == 0) {
        currentIndex = listImg.length - 1
    }else {
        currentIndex--
    }

    updateImageByIndex(currentIndex)
})

nextBtn.addEventListener('click' , e=> {
    if(currentIndex == listImg.length - 1)  {
        currentIndex = 0
    }else {
        currentIndex++
    }

    updateImageByIndex(currentIndex)
})

// updateImageByIndex(0)


// Tăng gỉam số lượng

let amountElement = document.getElementById('amount');
let amount = amountElement.value;

let render = (amount) => {
    amountElement.value = amount;
}

// Handle Plus

let handlePlus = () => {
    amount++
    render(amount);
}

//Handl Minuss
let handleMinus = () => {
    if (amount > 1)
    amount--
    render(amount);
}

amountElement.addEventListener('input',() => {
    amount = amountElement.value;
    amount = parseInt(amount); //chuyển đổi  một  chuỗi  thành  số  nguyên
    amount = (isNaN(amount) || amount == 0 )? 1 : amount;
    render(amount);
});



// add product in cart

// lay ve
var cart =JSON.parse(localStorage.getItem("cart"));
if (cart!=null){
   mang = cart ;

}else {
    var mang = [];
}


var btn = document.getElementsByClassName("add-cart"); 
for (let i = 0; i < btn.length; i++) {
    btn[i].addEventListener("click" , function(){
        
        var proImg = btn[i].parentElement.parentElement.parentElement.parentElement.parentElement.childNodes[1].childNodes[1].childNodes[1].childNodes[1].childNodes[1].src;
        var proName = btn[i].parentElement.parentElement.parentElement.childNodes[1].childNodes[1].childNodes[1].text;
        var proPrice = btn[i].parentElement.parentElement.parentElement.childNodes[1].childNodes[3].childNodes[3].value;
        var proQuantity = parseInt(btn[i].parentElement.parentElement.parentElement.childNodes[3].childNodes[1].childNodes[1].childNodes[1].childNodes[3].value);
        var checkbox = document.getElementsByName("gender");
        var size = [];
        for (let i = 0; i < checkbox.length; i++) {
            if (checkbox[i].checked === true) size.push(checkbox[i].value);
            
        }
        var ktTrung = 0 ;

        
        // kiểm tra trùng tên
        for (let j = 0; j <mang.length; j++) {
            if (mang[j]["proName"] == proName) {
                mang[j]["proQuantity"] += proQuantity
                ktTrung = 1 ;
                alert(`Sản phẩm `+ proName+` đã tăng trong giỏ hàng`)
                break;
            }
            
        }

        
        // nếu ktTrung==0 nghĩa là khong tìm được trong giỏ hàng
        if (ktTrung==0){
            alert(`Sản phẩm `+ proName +`  đươc thêm vào giỏ hàng`)
            var pro = {
                "proImg" : proImg ,
                "proName" : proName,
                "size" : size,
                "proPrice" : proPrice,  
                "proQuantity" : proQuantity,
                
            } ;
           mang.push(pro);
        }


        // đẩy giỏ hàng lên localstorage
        localStorage.setItem("cart" , JSON.stringify(mang));
        // lấy về đê show bên cart
        getsoluongsp();
        
    })
    
}

// home page
function loadslsp() {
    getsoluongsp();
    showproductnew();
    
}

function showproductnew() {

}



// cart page
function loaddatacart () {
    getsoluongsp ();
    showcart();
    cartTotal();
}

function tang(x,i){
    var td = x.parentElement;
    
    var sl = parseInt(td.childNodes[3].value);
    
    var slm = sl + 1;
    td.childNodes[3].value = slm ;
    var cart =JSON.parse(localStorage.getItem("cart"));
    if (cart!=null){
        mang = cart ;

    }else {
        var mang = [];
    }
    mang[i].proQuantity == slm ;
    localStorage.setItem("cart" , JSON.stringify(mang));
    cartTotal();
    
}

function giam(x,i){
    var td = x.parentElement;
    
    var sl = parseInt(td.childNodes[3].value);
    if(sl>1){
        var slm = sl - 1;
    }else if(sl=1){
        var slm = 1;
    }
    
    td.childNodes[3].value = slm ;

    var cart =JSON.parse(localStorage.getItem("cart"));
    if (cart!=null){
        mang = cart ;

    }else {
        var mang = [];
    }
    mang[i].proQuantity == slm ;
    localStorage.setItem("cart" , JSON.stringify(mang));
    cartTotal();
    
}


function cartTotal() {
    var cart =JSON.parse(localStorage.getItem("cart"));
    // var cart = mang;
    if (cart != null){
        var cartTotal = 0;
        for (let i = 0; i < cart.length; i++) {
            var proTotal = parseInt( cart[i]["proQuantity"] * cart[i]["proPrice"]);
            cartTotal  += proTotal ;
            
            
        }

        document.getElementById("total-cate").innerHTML= " "+ cartTotal +"₫";
        
    }
    
}   


function showcart() {
    var cart =JSON.parse(localStorage.getItem("cart"));
    if (cart!=null){
        var kq = "";
        for (let i = 0; i < cart.length; i++) {
            var proTotal = parseInt( (cart[i]["proQuantity"]) * (cart[i]["proPrice"]) );
            kq  += `<div class="table-heading">
                        <input type="hidden" name="" value="`+ cart[i]["proName"] +`">
                        <div class="table-share table-product">
                            <a href="" style="text-decoration:none;">
                                <div class="thumb-cart">
                                    <img src=" `+ cart[i]["proImg"] +` " alt="" style="width : 150px; margin-right: 15px;">
                                    <div class="thumb-cart__item">
                                        <h4> `+ cart[i]["proName"] +` </h4>
                                        <span class="variant-title" > `+ cart[i]["size"]+` </span>
                                        <span>`+ cart[i]["proPrice"] +`₫</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="table-share table-qty">
                            <div class="qty-number">
                                <button onclick="giam(this , `+ i +`)" class="qtyminus">-</button>
                                                            
                                <input type=""   name="quantity" min="1" id="amount" value="`+ cart[i]["proQuantity"] +`" class="item-quantity " aria-label="quantity">
                                <button onclick="tang(this , `+i+`)"  class="qtyplus">+</button>
                            </div>
                        </div>
                        <b class="table-share table-linePrice"><span> `+ proTotal +`</span>₫</b>
                        <div class="table-share table-remove">
                            
                            <i class="remove__icon  fa-solid fa-trash"  onclick="removePro(this)"></i>
                        </div>
                    </div> ` ;
            
            
        }

        document.getElementById("pro-table").innerHTML=kq;
    }
}





//pay

function loaddatapay(){
    showpay();
    payTotal();
}

function showpay() {
    var cart =JSON.parse(localStorage.getItem("cart"));
    if (cart!=null){
        var kq = "";
        for (let i = 0; i < cart.length; i++) {
            var proTotal = parseInt( (cart[i]["proQuantity"]) * (cart[i]["proPrice"]) );
            kq  += `
                
                <div class="product" >
                    <div class="product-image">
                        <div class="product-thumbnail">
                            <div class="product-thumbnail-wrapper">
                                <img class="product-thumbnail-image" name="img" alt="`+ cart[i]["proName"] +`" src=" `+ cart[i]["proImg"] +`">
                            </div>
                            <span class="product-thumbnail-quantity" name="soluong-sp">`+ cart[i]["proQuantity"] +`</span>
                        </div>
                    </div>
                    <div class="product-description">
                        <span class="product-description-name order-summary-emphasis" name="name-pro">`+ cart[i]["proName"] +`</span>
                        
                        <span class="product-description-variant order-summary-small-text" name="size">
                            `+ cart[i]["size"]+`
                        </span>
                        
                    </div>
                    
                    <div class="product-price">
                        <span class="order-summary-emphasis" name="price">`+ cart[i]["proPrice"] +`</span>
                    </div>
                </div>
            ` ;
            
            
        }

        document.getElementById("pay-table").innerHTML=kq;
    }
}

function payTotal() {
    var cart =JSON.parse(localStorage.getItem("cart"));
    if (cart!=null){
        var cartTotal = 0;
        for (let i = 0; i < cart.length; i++) {
            var proTotal = parseInt( (cart[i]["proQuantity"]) * (cart[i]["proPrice"]) );
            cartTotal  += proTotal ;
            
            
        }

        document.getElementById("payment-due-price").innerHTML= " "+ cartTotal +"₫";
    }
}



function getsoluongsp (){
    var cart =JSON.parse(localStorage.getItem("cart"));
    if (cart!=null){
        document.getElementById("cart-quantity").innerHTML=cart.length;
    

    }
}   

function del() {
    localStorage.removeItem("cart");
    window.location="index.php"
}

