// Toggle cart visibility
let iconCart = document.querySelector('.icon-cart');
let closeCart = document.querySelector('.close');
let body = document.querySelector('body');

iconCart.addEventListener('click', () => {
  body.classList.toggle('showCart');
});

closeCart.addEventListener('click', () => {
  body.classList.toggle('showCart');
});

// Add items to cart
document.addEventListener('DOMContentLoaded', () => {
  const containers = document.querySelectorAll('.listProduct');

  containers.forEach(container => {
    container.addEventListener('click', (event) => {
      if (event.target.classList.contains('addCart')) {
        const button = event.target;
        const item = {
          name: button.parentElement.querySelector('h2').innerText,
          price: button.parentElement.querySelector('.price').innerText,
          image: button.parentElement.querySelector('img').src,
        };

        updateCart(item);
      }
    });
  });
});

// Update cart count
function updateCartCount() {
  const cartCount = document.querySelectorAll('.listCart .item').length;
  document.querySelector('.icon-cart span').innerText = cartCount;
}

// Update total price text
function updateTotalPriceText() {
  const cartItems = document.querySelectorAll('.listCart .item');
  let total = 0;

  cartItems.forEach(cartItem => {
    const priceText = cartItem.querySelector('.totalPrice').innerText;
    const price = parseFloat(priceText.replace('₱', ''));
    total += price;
  });

  document.querySelector('.totalText').innerText = `Total ₱ ${total.toFixed(2)}`;
}

// Update cart
function updateCart(item) {
  const cartItem = document.createElement('div');
  cartItem.classList.add('item');
  cartItem.innerHTML = `
     <div class="image">
        <img src="${item.image}" alt="">
     </div>
     <div class="name">${item.name}</div>
     <div class="totalPrice">${item.price}</div>
     <div class="quantity">
        <span class="minus">-</span>
        <span>1</span>
        <span class="plus">+</span>
     </div>
     <button class="deleteItem">Delete</button>
  `;

  document.querySelector('.listCart').appendChild(cartItem);

  updateCartCount();

  const deleteButton = cartItem.querySelector('.deleteItem');
  deleteButton.addEventListener('click', () => {
    cartItem.remove();
    updateCartCount();
    updateTotalPriceText();
  });

  const quantitySelector = cartItem.querySelector('.quantity');
  const quantitySpan = cartItem.querySelector('.quantity span:nth-child(2)');
  const totalPrice = cartItem.querySelector('.totalPrice');

  quantitySelector.querySelector('.minus').addEventListener('click', () => {
    let currentQuantity = parseInt(quantitySpan.innerText);
    if (currentQuantity > 1) {
      currentQuantity--;
      quantitySpan.innerText = currentQuantity;
      updateTotalPrice(item, currentQuantity, totalPrice);
    }
  });

  quantitySelector.querySelector('.plus').addEventListener('click', () => {
    let currentQuantity = parseInt(quantitySpan.innerText);
    currentQuantity++;
    quantitySpan.innerText = currentQuantity;
    updateTotalPrice(item, currentQuantity, totalPrice);
  });

  updateTotalPriceText();
}

// Update total price
function updateTotalPrice(item, quantity, totalPriceElement) {
  const price = parseFloat(item.price.replace('₱', ''));
  const total = price * quantity;
  totalPriceElement.innerText = `₱${total.toFixed(2)}`;
  updateTotalPriceText();
}

// Checkout
document.querySelector('.checkOut').addEventListener('click', () => {
  body.classList.remove('showCart');
  document.getElementById('checkoutModal').style.display = 'block';

  const cartItems = document.querySelectorAll('.listCart .item');
  const checkoutItemsContainer = document.getElementById('checkoutItems');
  const totalPriceElement = document.getElementById('totalPrice');
  let totalPrice = 0;

  checkoutItemsContainer.innerHTML = '';

  cartItems.forEach(cartItem => {
    const itemName = cartItem.querySelector('.name').innerText;
    const itemQuantity = cartItem.querySelector('.quantity span:nth-child(2)').innerText;
    const itemTotalPrice = parseFloat(cartItem.querySelector('.totalPrice').innerText.replace('₱', ''));
    const itemImageSrc = cartItem.querySelector('.image img').src;

    const checkoutItem = document.createElement('div');
    checkoutItem.innerHTML = `
      <div class="checkout-item">
        <img src="${itemImageSrc}" alt="${itemName}" class="checkout-item-img">
        <div class="checkout-item-details">
          <p>${itemName} x${itemQuantity}</p>
          <p>₱${itemTotalPrice.toFixed(2)}</p>
        </div>
      </div>
    `;
    checkoutItemsContainer.appendChild(checkoutItem);

    totalPrice += itemTotalPrice;
  });

  totalPriceElement.innerText = `Total: ₱${totalPrice.toFixed(2)}`;
});

// Close checkout modal
function closeCheckoutModal() {
  document.getElementById('checkoutModal').style.display = 'none';
}

// Place order
function placeOrder() {
  const cartItems = document.querySelectorAll('.listCart .item');
  const orderItems = [];

  cartItems.forEach(cartItem => {
    const itemName = cartItem.querySelector('.name').innerText;
    const itemQuantity = cartItem.querySelector('.quantity span:nth-child(2)').innerText;
    const itemTotalPrice = parseFloat(cartItem.querySelector('.totalPrice').innerText.replace('₱', ''));
    const itemImageSrc = cartItem.querySelector('.image img').src;
    const itemPrice = parseFloat(cartItem.querySelector('.totalPrice').innerText.replace('₱', '')) / itemQuantity;

    orderItems.push({
      name: itemName,
      price: itemPrice,
      quantity: itemQuantity,
      total_price: itemTotalPrice,
      image: itemImageSrc
    });
  });

  const orderData = {
    total_price: parseFloat(document.querySelector('.totalText').innerText.replace('Total ₱ ', '')),
    items: orderItems
  };

  fetch('/place_order.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify(orderData)
  })
    .then(response => response.json())
    .then(data => {
      if (data.success) {
        alert('Order placed successfully!');
        // Optionally clear the cart here
      } else {
        alert('Failed to place order.');
      }
      closeCheckoutModal();
    })
    .catch(error => {
      console.error('Error:', error);
      alert('Error placing order.');
      closeCheckoutModal();
    });
}

// Scroll and navigation
let section = document.querySelectorAll('section');
let navlink = document.querySelectorAll('.navbar a');

window.onscroll = () => {
  section.forEach(sec => {
    let top = window.scrollY;
    let offset = sec.offsetTop - 150;
    let height = sec.offsetHeight;
    let id = sec.getAttribute('id');
    if (top > offset && top < offset + height) {
      navlink.forEach(links => {
        links.classList.remove('active');
      });
      document.querySelector('header nav a[href*=' + id + ']').classList.add('active');
    }
  });
};