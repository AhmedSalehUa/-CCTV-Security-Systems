var removeItemButtons = document.getElementsByClassName("remove-item");

for (var i = 0; i < removeItemButtons.length; i++) {

    var button = removeItemButtons[i];

    button.addEventListener('click', removeItem)

}





function removeItem(event) {

    var clicked = event.target;

    clicked.parentElement.remove();

}





var addToCartButtons = document.getElementsByClassName('addToCart')

for (var i = 0; i < addToCartButtons.length; i++) {

    var button = addToCartButtons[i];

    button.addEventListener('click', addClicked);

}



function addClicked(event) {
    if (sessionStorage.getItem("user_id") == null) {
        alert('Please Login To Buy');
    } else {
        var button = event.target;
        var shopItem = button.parentElement.parentElement;
        var brand = shopItem.getElementsByClassName('brand-name')[0].innerText;
        var model = shopItem.getElementsByClassName('brand-model')[0].innerText;
        addItemToCart(brand, model);
    }
}

function addItemToCart(brand, model) {
    var cartRow = document.createElement('div');
    cartRow.classList.add('item');
    var cartItems = document.getElementsByClassName('content-of-cart')[0];
    var cartItemBrand = cartItems.getElementsByClassName('item-brand')
    var cartItemmodel = cartItems.getElementsByClassName('item-model')
    for (var i = 0; i < cartItemBrand.length; i++) {
        if (cartItemBrand[i].value == brand) {
            for (var x = 0; x < cartItemmodel.length; x++) {
                if (cartItemmodel[x].value == model) {
                    alert('This item is already added to the cart')
                    return
                }
            }
        }
    }
    var cartRowContents = "<input type='text' name='brand' value='" + brand + "' class='item-brand col-lg-6 col-md-6 col-sm-6 col-xs-6' readonly>" +
        "<input name='model' value='" + model + "' class='item-model col-lg-3 col-md-3 col-sm-3 col-xs-3' readonly>" +
        "<input class='item-quantity col-lg-4 col-md-4 col-sm-4 col-xs-4' name='quantity' type='number' min='1' value='1' title='Quantity'>" +
        " <button class='remove-item col-lg-2 col-md-2 col-sm-2 col-xs-2' type='button'>x</button>";
    cartRow.innerHTML += cartRowContents;
    cartItems.append(cartRow);
    cartRow.getElementsByClassName('remove-item')[0].addEventListener('click', removeItem);
}