<!doctype html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="x-icon" href="/img/descansa_logo.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Menu</title>
    <link rel="stylesheet" href="resources/css/design.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    @vite('resources/css/app.css')
</head>
<body class="">

    @include('navbar')



<section id="Meals" class ="bg-blue-100">
    <div class="font-museo font-bold text-5xl text-center">Menu</div>
       <div class="container">
        <header class="design">
            <div class="title font-museo font-bold text-3xl">Food Items</div>
            <div class="icon-cart"></div>
        </header>

        <div class="listProduct">
            <div class="item">
                <img src="img/ChickenItem.jpg" alt="Grilled Chicken Picture">
                
                <h2 class = "font-museo">Grilled Chicken</h2>
                <br>
                <br>
                <div class="price font-museo">₱78</div>
                <button class="addCart font-museo">Add to Cart</button>

            </div>


            <div class="item">
                <img src="img/CocoChickenItem.jpg" alt="Chicken Coco Picture">
                
                <h2 class = "font-museo">Chicken Coco</h2>
                <br>
                <br>
                <div class="price font-museo">₱125</div>
                
                <button class="addCart font-museo">Add to Cart</button>

            </div>

            <div class="item">
                <img src="img/SpaghettiClamItem.jpg" alt="Spaghetti Clam Picture">
                
                <h2 class = "font-museo">Spaghetti Clam Parmesan Garlic</h2>
                <br>
                <div class="price font-museo">₱95</div>
                <button class="addCart font-museo">Add to Cart</button>           

            </div>

            <div class="item">
                <img src="img/MeatballsItem.jpg" alt="Vegan Meatballs??? Picture">
                
                <h2 class = "font-museo">Vegan Meatballs</h2>
                <br>
                <br>
                <div class="price font-museo">₱128</div>
                <button class="addCart font-museo">Add to Cart</button>

            </div>

            <div class="item">
                <img src="img/SinigangItem.jpg" alt="Vegan Meatballs??? Picture">
                
                <h2 class = "font-museo">Pork Sinigang</h2>
                <br>
                <br>
                <div class="price font-museo">₱128</div>
                <button class="addCart font-museo">Add to Cart</button>

            </div>

            <div class="item">
                <img src="img/MangoSouffleItem.jpg" alt="Vegan Meatballs??? Picture">
                
                <h2 class = "font-museo">Mango Souffle</h2>
                <br>
                <br>
                <div class="price font-museo">₱128</div>
                <button class="addCart font-museo">Add to Cart</button>

            </div>

            <div class="item">
                <img src="img/PancakeSouffleItem.jpg" alt="Vegan Meatballs??? Picture">
                
                <h2 class = "font-museo">Pancake Souffle</h2>
                <br>
                <br>
                <br>
                <br>
                <div class="price font-museo">₱128</div>
                <button class="addCart font-museo">Add to Cart</button>

            </div>

            <div class="item">
                <img src="img/OnionRingsItem.jpg" alt="Vegan Meatballs??? Picture">
                
                <h2 class = "font-museo">Onion Rings</h2>
                <br>
                <br>
                <div class="price font-museo">₱128</div>
                <button class="addCart font-museo">Add to Cart</button>

            </div>
        </div>

</div>
        
</section>



<section id="Drinks" class = "bg-blue-100">
       
       <div class="container">
        <header class="design">
            <div class="title font-museo font-bold text-3xl">Drinks</div>
            <div class="icon-cart">
           
            </div>
        </header>


        <div class="listProduct">
            <div class="item">
                <img src="img/LatteItem.jpg" alt="Pic 1">
                <br>
                <br>
                <h2 class = "font-museo">Latte</h2>
        
                <div class="price font-museo">₱65</div>
                <button class="addCart font-museo">Add to Cart</button>              

            </div>

            <div class="item">
                <img src="img/IceCreamDrinkItem.jpg" alt="Pic 1">
                <br>
                <br>
                <h2 class = "font-museo">Vanilla Latte</h2>
        
                <div class="price font-museo">₱50</div>
                <button class="addCart font-museo">Add to Cart</button>                


            </div>

            <div class="item">
                <img src="img/IcedCoffeeItem.jpg" alt="Pic 1" class = "py-2">
                
                <h2 class = "font-museo">Iced Latte</h2>
        
                <div class="price font-museo">₱90</div>
                <button class="addCart font-museo">Add to Cart</button>
                
                </div>
                
            </div>
                
                </div>
                
                </section>
                
                
                <div class="cartTab">
                <h2 class="heading">Food<span>Cart</span></h2>
                
                <div class="listCart">
                
                 <!-- The cart items will be dynamically added here by JScript -->
                </div>
                
                <div class="btns">
                
                 <button class="close">CLOSE</button>
                 <button class="checkOut">CHECK OUT</button>
                 <div class="totalText">Total ₱ 0</div>
                </div>
                </div>
                
                
                
                <div id="checkoutModal" class="modal">
                <div class="modal-content">
                <span class="close" onclick="closeCheckoutModal()">&times;</span>
                <h2>Checkout</h2>
                
                <!-- Display selected items and total price -->
                <div id="checkoutItems"></div>
                <p id="totalPrice"></p>
                
                <!-- Place order button -->
                <button onclick="placeOrder()">Place Order</button>
                </div>
                </div>
                
                
                
                </body>
                
                <footer>
                    <div class="innerItem">                              <!-- Footer sa site -->
                        <h2 class = "font-museo">Descansa</span></h2>
                        
                        </div>
                        <hr>
                        <p>© 2024 Descansa.All rights reserved</p>
                        
                </footer>
                        
                        
                <script src="https://cdnjs.cloudflare.com/ajax/libs/firebase/7.14.1-0/firebase.js"></script>
                <script src="JS/log.js"></script>
                <script src="JS/cart.js"></script>
                        
    </html>
                        