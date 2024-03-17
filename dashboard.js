const cartItems = [];

const addToCartButtons = document.querySelectorAll('.add-to-cart');
const cartItemsList = document.getElementById('cart-items');
const cartTotal = document.getElementById('cart-total');

addToCartButtons.forEach(button => {
    button.addEventListener('click', () => {
        const productName = button.dataset.name;
        const productPrice = Number(button.dataset.price);
        const productImage = button.dataset.image;
        const existingItem = cartItems.find(item => item.name === productName);

        if (existingItem) {
            existingItem.quantity++;
        } else {
            cartItems.push({ name: productName, price: productPrice, quantity: 1, image: productImage });
        }

        updateCart();
    });
});
addToCartButtons.forEach(button => {
    button.addEventListener('click', () => {
        displayNotification();
    });
});


function displayNotification() {
   
    const notification = document.createElement('div');
    notification.textContent = 'Item added to cart!';
    notification.classList.add('notification');

  
    document.body.appendChild(notification);

   
    setTimeout(() => {
        notification.remove();
    }, 3000);
}

function updateCart() {
    cartItemsList.innerHTML = '';
    let total = 0;

    cartItems.forEach(item => {
        const listItem = document.createElement('div');
        listItem.classList.add('shadow');
       
        listItem.style.width = "100%"
        const imgElement = document.createElement('img');
       imgElement.style.width = "40px"
       imgElement.style.height = "40px"
        imgElement.src = item.image;
        imgElement.alt = item.name;
        
        listItem.appendChild(imgElement);
        listItem.innerHTML += `${item.name} x ${item.quantity}<br>$${item.price * item.quantity}`;

        cartItemsList.appendChild(listItem);
        total += item.price * item.quantity;
    });

    cartTotal.textContent = total;
}

let clickCount = 0
const bgMain = document.querySelector('.bg-main')
const line = document.querySelectorAll('.line')

const lines = document.querySelector('.lines').addEventListener('click',()=>{
    
    clickCount ++;


    if(clickCount == 1){
        bgMain.style.left = '0px'
        bgMain.style.transition = ".9s"
    }else if(clickCount === 2){
        bgMain.style.left = '-630px'
        bgMain.style.transition = ".9s"
    }
  
  
   console.log("Clicked");
})
