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
                <button class="addCart font-museo" onclick="orderItem('Grilled Chicken', 78, 'img/ChickenItem.jpg')">Order</button>    

            </div>


            <div class="item">
                <img src="img/CocoChickenItem.jpg" alt="Chicken Coco Picture">
                
                <h2 class = "font-museo">Chicken Coco</h2>
                <br>
                <br>
                <div class="price font-museo">₱125</div>
                
                <button class="addCart font-museo" onclick="orderItem('Chicken Coco', 125, 'img/CocoChickenItem.jpg')">Order</button>    

            </div>

            <div class="item">
                <img src="img/SpaghettiClamItem.jpg" alt="Spaghetti Clam Picture">
                
                <h2 class = "font-museo">Spaghetti Clam Parmesan Garlic</h2>
                <br>
                <div class="price font-museo">₱95</div>
                <button class="addCart font-museo" onclick="orderItem('Spaghetti Clam Parmesan Garlic', 95, 'img/SpaghettiClamItem.jpg')">Order</button>     

            </div>

            <div class="item">
                <img src="img/MeatballsItem.jpg" alt="Vegan Meatballs??? Picture">
                
                <h2 class = "font-museo">Vegan Meatballs</h2>
                <br>
                <br>
                <div class="price font-museo">₱128</div>
                <button class="addCart font-museo" onclick="orderItem('Vegan Meatballs', 128, 'img/MeatballsItem.jpg')">Order</button>    

            </div>

            <div class="item">
                <img src="img/SinigangItem.jpg" alt="Sinigang Picture">
                
                <h2 class = "font-museo">Pork Sinigang</h2>
                <br>
                <br>
                <div class="price font-museo">₱128</div>
                <button class="addCart font-museo" onclick="orderItem('Pork Sinigang', 128, 'img/SinigangItem.jpg')">Order</button>    

            </div>

            <div class="item">
                <img src="img/MangoSouffleItem.jpg" alt="Mango Souffle Picture">
                
                <h2 class = "font-museo">Mango Souffle</h2>
                <br>
                <br>
                <div class="price font-museo">₱128</div>
                <button class="addCart font-museo" onclick="orderItem('Mango Souffle', 128, 'img/MangoSouffleItem.jpg')">Order</button>    

            </div>

            <div class="item">
                <img src="img/PancakeSouffleItem.jpg" alt="Pancake Souffle Picture">
                
                <h2 class = "font-museo">Pancake Souffle</h2>
                <br>
                <br>
                <br>
                <br>
                <div class="price font-museo">₱128</div>
                <button class="addCart font-museo" onclick="orderItem('PancakeSouffle', 128, 'img/PancakeSouffleItem.jpg')">Order</button>    

            </div>

            <div class="item">
                <img src="img/OnionRingsItem.jpg" alt="Onion Rings Picture">
                
                <h2 class = "font-museo">Onion Rings</h2>
                <br>
                <br>
                <div class="price font-museo">₱128</div>
                <button class="addCart font-museo" onclick="orderItem('Onion Rings', 128, 'img/OnionRingsItem.jpg')">Order</button>    

            </div>
        </div>

</div>
        
</section>


<section id="Drinks" class = "bg-blue-100">
       
       <div class="container">
        <header class="design">
            <div class="title font-museo font-bold text-3xl">Drinks</div>
            <div class="icon-cart">
        </header>


        <div class="listProduct">
            <div class="item">
                <img src="img/LatteItem.jpg" alt="Latte Picture">
                <br>
                <br>
                <h2 class = "font-museo">Latte</h2>
        
                <div class="price font-museo">₱65</div>
                <button class="addCart font-museo" onclick="orderItem('Latte', 65, 'img/LatteItem.jpg')">Order</button>         

            </div>

            <div class="item">
                <img src="img/IceCreamDrinkItem.jpg" alt="Vanilla Latte Picture">
                <br>
                <br>
                <h2 class = "font-museo">Vanilla Latte</h2>
        
                <div class="price font-museo">₱50</div>
                <button class="addCart font-museo" onclick="orderItem('Vanilla Latte', 50, 'img/IceCreamDrinkItem.jpg')">Order</button>             


            </div>

            <div class="item">
                <img src="img/IcedCoffeeItem.jpg" alt="Iced Coffe Picture" class = "py-2">
                
                <h2 class = "font-museo">Iced Latte</h2>
        
                <div class="price font-museo">₱90</div>
                <button class="addCart font-museo" onclick="orderItem('Iced Latte', 90, 'img/IcedCoffeeItem.jpg')">Order</button>     
                
                </div>
                
            </div>
                
                </div>
                
                <div class="flex justify-center mt-4">
                    <button onclick="window.location.href='/list'" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full flex items-center">
                        <span class="mr-1">View Orders</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </button>
                </div>

                </section>
<footer>
    <div class="innerItem">
        <h2 class="font-museo">Descansa</h2>
    </div>
    <hr>
    <p>© 2024 Descansa. All rights reserved</p>
</footer>

<script>
function orderItem(itemName, itemPrice, imageUrl) {
    const quantity = prompt("Enter quantity for " + itemName + ":");
    if (quantity !== null) {
        const data = {
            itemName: itemName,
            itemPrice: itemPrice,
            quantity: quantity,
            totalPrice: itemPrice * quantity,
            imageUrl: imageUrl
        };

        // Send the order data to the backend
        fetch('/order', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(data),
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Failed to place order');
            }
            return response.json();
        })
        .then(data => {
            console.log('Order placed successfully:', data);
        })
        .catch(error => {
            console.error('Error placing order:', error);
        });
    }
}
</script>

</body>
</html>

                        