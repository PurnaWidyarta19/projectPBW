//Cart working
document.querySelector("#cart-icon").onclick = () => {
    document.querySelector(".cart").classList.add("active");
}

document.querySelector("#close-icon").onclick = () => {
    document.querySelector(".cart").classList.remove("active");
}

if (document.readyState == 'loading') {
    document.addEventListener("DOMContentLoaded", ready);
} else {
    ready();
}

function ready() {

    //remove items from cart
    var removeCartButtons = document.querySelectorAll(".cart-remove");
    for (var i = 0; i < removeCartButtons.length; i++) {
        removeCartButtons[i].addEventListener("click", removeCartItem);
    }

    // quantity changes
    var quantityInputs = document.getElementsByClassName("cart-quantity");
    for (var i= 0; i < quantityInputs.length; i++){
        var input = quantityInputs[i];
        input.addEventListener("change", quantityChanged);
    }

    //add to cart
    var addCart = document.getElementsByClassName("add-cart");
    for (var i= 0; i < addCart.length; i++){
        var button = addCart[i];
        button.addEventListener("click", addCartClicked);
    }

    //checkout button work
    // document.getElementsByClassName("btn-buy")[0].addEventListener("click", checkoutButtonClicked);
}

// //checkout button 
// function checkoutButtonClicked(){
//     alert('Your Order is Placed');
//     var cartContent =  document.getElementsByClassName('cart-content')[0];
//     while (cartContent.hasChildNodes()){
//         cartContent.removeChild(cartContent.firstChild);
//     }
//     updateCartTotal();
// }

//remove items from cart
function removeCartItem(event) {
    var buttonClicked = event.target;
    buttonClicked.parentElement.remove();
    updateCartTotal();
}

//function quantity changes
function quantityChanged(event){
    var button = event.target;
    if (isNaN(button.value) || button.value <= 0){
        button.value = 1;
    }
    updateCartTotal();
}

//function add to cart
function addCartClicked(event){
    var button = event.target;
    var title = button.parentElement.parentElement.parentElement.getElementsByClassName("product-title")[0].innerText;
    var price = button.parentElement.parentElement.getElementsByClassName("price")[0].innerText;
    var productImg = button.parentElement.parentElement.parentElement.parentElement.getElementsByClassName("box-img")[0].querySelector('img').getAttribute("src");
    addProducttoCart(title, price, productImg);
    updateCartTotal();
}


//function addProducttoCart
function addProducttoCart(title, price, productImg){
    var cartShopBox = document.createElement("div");
    cartShopBox.classList.add("cart-box");
    var cartItems = document.getElementsByClassName("cart-content")[0];
    var cartItemsNames = cartItems.getElementsByClassName("cart-product-title");
    for (var i = 0; i < cartItemsNames.length; i++){
        if(cartItemsNames[i].innerText == title){
            alert("You have already add this item to cart");
            return;    
        }
    }

    var cartBoxContent = `  <img src="${productImg}" alt="" class="cart-img">
                            <div class="detail-box">
                                <div class="cart-product-title">${title}</div>
                                <span class="cart-price">${price}</span>
                                <input type="number" value="1" class="cart-quantity">
                            </div>
                            <!-- remove -->
                            <i class="fas fa-trash cart-remove" id="trash-box"></i>
                        `;
    cartShopBox.innerHTML = cartBoxContent;
    cartItems.append(cartShopBox)
    cartShopBox.getElementsByClassName('cart-remove')[0].addEventListener('click',removeCartItem);
    cartShopBox.getElementsByClassName('cart-quantity')[0].addEventListener('change',quantityChanged);
}  

//update total
function updateCartTotal() {
    var cartContent = document.getElementsByClassName("cart-content")[0];
    var cartBoxes = cartContent.getElementsByClassName("cart-box");
    var total = 0;
    for (var i = 0; i < cartBoxes.length; i++){
        var cartBox = cartBoxes[i];
        var priceElement = cartBox.getElementsByClassName("cart-price")[0];
        var quantityElement = cartBox.getElementsByClassName("cart-quantity")[0];   
        var price = parseFloat(priceElement.innerText.replace("Rp ", ""));
        var quantity = quantityElement.value;
        total += (price * quantity); 
    }     
        document.getElementsByClassName("total-price")[0].innerText = "Rp "+ total;
}


var checkoutButton = document.querySelector('.btn-buy');
checkoutButton.addEventListener('click', function() {
  // Get the product details from the cart
  var cartItems = document.querySelectorAll('.cart-content .detail-box');
  var products = [];
  cartItems.forEach(function(item) {
    var productImgElement = item.querySelector('.cart-img');
    var productImg = productImgElement ? productImgElement.getAttribute('src') : '';
    var title = item.querySelector('.cart-product-title').textContent;
    var price = item.querySelector('.cart-price').textContent;
    products.push({
      productImg: productImg,
      title: title,
      price: price
    });
  });

  // Create a data object to send in the AJAX request
  var data = {
    products: products
  };

  // Send an AJAX request to the server
  var xhr = new XMLHttpRequest();
  xhr.open('POST', 'checkout.php', true);
  xhr.setRequestHeader('Content-Type', 'application/json');
  xhr.onreadystatechange = function() {
    if (xhr.readyState === 4 && xhr.status === 200) {
      // Handle the response from the server
      var response = JSON.parse(xhr.responseText);
      if (response.success) {
        // Success message or redirect to a success page
        alert('Checkout successful!');
      } else {
        // Error message or handle the error case
        alert('Checkout failed!');
      }
    }
  };
  xhr.send(JSON.stringify(data));
});