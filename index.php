<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STARSBAKS</title>
    <link rel="icon" href="logo.png" type="image/x-icon">
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lemon&display=swap" rel="stylesheet">

</head>
<body>
    <section id="nav-bar">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <img src="logo.png" alt="" class="navbar-logo">
                <a class="navbar-brand" href="#"><strong>STARSBAKS</strong></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav" style="margin-left: auto;">
                    <ul class="navbar-nav">
                    <li class="nav-item">
                            <a class="nav-link home-link active" aria-current="page" href="index.php">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#videoModal">ABOUT US</a>
                        </li>
                        <li class="nav-item"> 
                            <!-- Updated link to open the new modal for Coffee and Pastry -->
                            <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#menuModal">COFFEE AND PASTRY</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#orderModal">ORDER NOW</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>

    <div class="top-content">
      <h1>NOW YOU CAN FEEL THE ENERGY</h1>
      <p>Start your day</p>
      <p>with a Black</p>
      <p>Coffee</p>
    </div>

  <div class="bottom-content">
      <h1 style="font-size: 45px; font-weight: bold; font-family: 'Yanone Kaffeesatz', sans-serif;">
          "Great Attitude Is Like A Perfect Cup Of Coffee."
      </h1>
  </div>

    <!-- Video Modal -->
    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="videoModalLabel" style="font-weight: bold; text-align: center;">
                    The STARSBAKS launched in 2023, in the heart of Pinoy.
                    Our mission is simple. We want to teach coffee drinkers all
                    over the world how to make the perfect blend! Our Coffee experts have a lifelong passion for coffee. 
                    They are internationally traveled and have experienced many varieties.
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                <div class="modal-body">
                    <video controls autoplay loop muted width="100%">
                        <source src="starsbaks.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
    </div>


    <!-- Coffee and Pastry Modal -->
    <div class="modal fade" id="menuModal" tabindex="-1" aria-labelledby="menuModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="background-color:#E1B995;">
            <div class="modal-header">
            <h2 class="modal-title" id="menuModalLabel" style="text-align: center; margin: 0 auto; margin-right: 50px; margin-left: 185px;">COFFEE AND PASTRY MENU</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                        <div class="modal-body text-center">
                        <section id="coffee-menu">
    <h3>COFFEE MENU</h3>
    <ul class="list-group">
        <!-- Americano -->
        <li class="list-group-item" onmouseover="showProductImage('americano')" onmouseout="hideProductImage('americano')">
            <strong>AMERICANO</strong><br>
            <span>The Americano is a classic espresso-based beverage known for its simplicity. Made by diluting a shot of espresso with hot water, it maintains a bold flavor profile, offering a smooth and rich coffee experience.</span><br>
            <span>  <b>Price: ₱85</b></span>
            <img src="1.png" alt="Americano" class="product-image" id="americano_image" style="display: block; margin: 0 auto;">
        </li>

        <!-- Affogato -->
        <li class="list-group-item" onmouseover="showProductImage('affogato')" onmouseout="hideProductImage('affogato')">
            <strong>AFFOGATO</strong><br>
            <span>An Affogato is a delightful dessert-like coffee creation. It features a scoop of vanilla ice cream or gelato "drowned" or "affogato" with a shot of hot espresso, resulting in a heavenly blend of warm and cold, bitter and sweet flavors.</span><br>
            <span><b>Price: ₱85</b></span>
            <img src="2.png" alt="Affogato" class="product-image" id="affogato_image" style="display: block; margin: 0 auto;">
        </li>

        <!-- Latte -->
        <li class="list-group-item" onmouseover="showProductImage('latte')" onmouseout="hideProductImage('latte')">
            <strong>LATTE</strong><br>
            <span>A Latte is a creamy and comforting coffee option. Comprising a shot of espresso mixed with steamed milk and a thin layer of foam, it strikes a perfect balance, delivering a mellow and velvety taste.</span><br>
            <span><b>Price: ₱70</b></span>
            <img src="3.png" alt="Latte" class="product-image" id="latte_image" style="display: block; margin: 0 auto;">
        </li>

        <!-- Cappuccino -->
        <li class="list-group-item" onmouseover="showProductImage('cappuccino')" onmouseout="hideProductImage('cappuccino')">
            <strong>CAPPUCCINO</strong><br>
            <span>The Cappuccino is a popular Italian coffee characterized by its equal parts of espresso, steamed milk, and foam. This well-balanced combination creates a luxurious and frothy texture, making it a favorite among coffee enthusiasts.</span><br>
            <span><b>Price: ₱70</b></span>
            <img src="4.png" alt="Cappuccino" class="product-image" id="cappuccino_image" style="display: block; margin: 0 auto;">
        </li>

        <!-- Dopio -->
        <li class="list-group-item" onmouseover="showProductImage('dopio')" onmouseout="hideProductImage('dopio')">
            <strong>DOPIO</strong><br>
            <span>For those seeking an extra kick, the Dopio is a double shot of espresso. It's a strong and concentrated coffee experience, highlighting the pure and robust essence of finely ground coffee beans.</span><br>
            <span><b>Price: ₱95</b></span>
            <img src="5.png" alt="Dopio" class="product-image" id="dopio_image" style="display: block; margin: 0 auto;">
        </li>

        <!-- Long Black -->
        <li class="list-group-item" onmouseover="showProductImage('long_black')" onmouseout="hideProductImage('long_black')">
            <strong>LONG BLACK</strong><br>
            <span>The Long Black is a strong and bold coffee option. Made by pouring a double shot of espresso over hot water, it maintains the rich flavors of espresso while providing a larger and more sippable beverage.</span><br>
            <span><b>Price: ₱80</b></span>
            <img src="6.png" alt="Long Black" class="product-image" id="long_black_image" style="display: block; margin: 0 auto;">
        </li>

        <!-- Irish Coffee -->
        <li class="list-group-item" onmouseover="showProductImage('irish_coffee')" onmouseout="hideProductImage('irish_coffee')">
            <strong>IRISH COFFEE</strong><br>
            <span>Irish Coffee is a delightful blend of hot coffee, Irish whiskey, and a layer of cream on top. This warming and spirited concoction offers a perfect marriage of coffee and alcohol, making it a cozy and indulgent choice.</span><br>
            <span><b>Price: ₱95</b></span>
            <img src="7.png" alt="Irish Coffee" class="product-image" id="irish_coffee_image" style="display: block; margin: 0 auto;">
        </li>

        <!-- Mocha -->
        <li class="list-group-item" onmouseover="showProductImage('mocha')" onmouseout="hideProductImage('mocha')">
            <strong>MOCHA</strong><br>
            <span>The Mocha is a decadent treat that combines espresso, steamed milk, and chocolate syrup, topped with whipped cream. This delightful fusion of coffee and chocolate creates a luscious and satisfying beverage with a hint of sweetness.</span><br>
            <span><b>Price: ₱85</b></span>
            <img src="8.png" alt="Mocha" class="product-image" id="mocha_image" style="display: block; margin: 0 auto;">
        </li>
    </ul>
</section>

<!-- Pastry Section -->
<section id="pastry-menu">
    <h3>PASTRY MENU</h3>
    <ul class="list-group">
        <!-- Bagel -->
        <li class="list-group-item" onmouseover="showProductImage('bagel')" onmouseout="hideProductImage('bagel')">
            <strong>BAGEL</strong><br>
            <span>Bagel, a chewy delight, is a freshly baked treat with various toppings that elevate its taste. Each bite offers a satisfying combination of textures and flavors, making it a popular choice for breakfast or a quick snack./span><br>
            <span><b>Price: ₱65</b></span>
            <img src="9.png" alt="Bagel" class="product-image" id="bagel_image" style="display: block; margin: 0 auto;">
        </li>

        <!-- Banana Nut Bread -->
        <li class="list-group-item" onmouseover="showProductImage('banana_nut_bread')" onmouseout="hideProductImage('banana_nut_bread')">
            <strong>BANANA NUT BREAD</strong><br>
            <span>Indulge in the moist and flavorful Banana Nut Bread, a classic treat infused with chopped nuts. The sweet aroma and rich taste of ripe bananas make this bread a comforting and delightful option for any time of the day.
        </span><br>
            <span><b>Price: ₱65</b></span>
            <img src="10.png" alt="Banana Nut Bread" class="product-image" id="banana_nut_bread_image" style="display: block; margin: 0 auto;">
        </li>

        <!-- Blueberry Muffin -->
        <li class="list-group-item" onmouseover="showProductImage('blueberry_muffin')" onmouseout="hideProductImage('blueberry_muffin')">
            <strong>BLUEBERRY MUFFIN</strong><br>
            <span>The Blueberry Muffin is a soft and moist pastry filled with bursts of juicy blueberries, creating a harmonious blend of sweetness and tartness. With its tender texture and fruity goodness, this muffin is a perfect accompaniment to your morning coffee or afternoon tea.

        </span><br>
            <span><b>Price: ₱75</b></span>
            <img src="11.png" alt="Blueberry Muffin" class="product-image" id="blueberry_muffin_image" style="display: block; margin: 0 auto;">
        </li>

        <!-- Blueberry Scone -->
        <li class="list-group-item" onmouseover="showProductImage('blueberry_scone')" onmouseout="hideProductImage('blueberry_scone')">
            <strong>BLUEBERRY SCONE</strong><br>
            <span>The Blueberry Scone is a buttery delight with a crumbly texture, complemented by sweet blueberries. This pastry offers a delightful contrast of rich butteriness and bursts of fruity goodness, making it a delightful choice for scone enthusiasts.</span><br>
            <span><b>Price: ₱75</b></span>
            <img src="12.png" alt="Blueberry Scone" class="product-image" id="blueberry_scone_image" style="display: block; margin: 0 auto;">
        </li>

        <!-- Butter Croissant -->
        <li class="list-group-item" onmouseover="showProductImage('butter_croissant')" onmouseout="hideProductImage('butter_croissant')">
            <strong>BUTTER CROISSANT</strong><br>
            <span>Indulge in the flaky and light Butter Croissant, a classic French pastry known for its delicate layers and buttery flavor. With a golden-brown crust and soft interior, this croissant is a timeless treat that pairs perfectly with your favorite hot beverage.</span><br>
            <span><b>Price: ₱95</b></span>
            <img src="13.png" alt="Butter Croissant" class="product-image" id="butter_croissant_image" style="display: block; margin: 0 auto;">
        </li>

        <!-- Oatmeal Cookie -->
        <li class="list-group-item" onmouseover="showProductImage('oatmeal_cookie')" onmouseout="hideProductImage('oatmeal_cookie')">
            <strong>OATMEAL COOKIE</strong><br>
            <span>The Oatmeal Cookie is a chewy and wholesome delight, combining hearty oats with a perfect blend of flavors. Packed with raisins, nuts, and a hint of cinnamon, this cookie offers a comforting and satisfying treat for those seeking a balance of sweetness and texture.</span><br>
            <span><b>Price: ₱85</b></span>
            <img src="14.png" alt="Oatmeal Cookie" class="product-image" id="oatmeal_cookie_image" style="display: block; margin: 0 auto;">
        </li>

        <!-- Ensaymada -->
        <li class="list-group-item" onmouseover="showProductImage('ensaymada')" onmouseout="hideProductImage('ensaymada')">
            <strong>ENSAYMADA</strong><br>
            <span>Ensaymada is a soft and sweet Filipino pastry, topped with butter and sugar, creating a heavenly combination. Its fluffy texture and rich, buttery taste make it a beloved treat often enjoyed during special occasions or as a delightful snack.</span><br>
            <span><b>Price: ₱65</b></span>
            <img src="15.png" alt="Ensaymada" class="product-image" id="ensaymada_image" style="display: block; margin: 0 auto;">
        </li>

        <!-- Donut -->
        <li class="list-group-item" onmouseover="showProductImage('donut')" onmouseout="hideProductImage('donut')">
            <strong>DONUT</strong><br>
            <span>The classic Donut is a fried or baked ring of dough, coated in various glazes or toppings for a burst of flavor. With its endless possibilities for customization, the Donut is a timeless and beloved dessert that satisfies sweet cravings with every bite.</span><br>
            <span><b>Price: ₱85</b></span>
            <img src="16.png" alt="Donut" class="product-image" id="donut_image" style="display: block; margin: 0 auto;">
        </li>
    </ul>
</section>
                </div>
            </div>
        </div>
    </div>

    


    <!-- order now -->
    <div class="modal fade" id="orderModal" tabindex="-1" aria-labelledby="orderModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="background-color:#E1B995;">
            <div class="modal-header">
            <h2 class="modal-title" id="menuModalLabel" style="text-align: center; margin: 0 auto; margin-right: 50px; margin-left: 185px;">COFFEE AND PASTRY MENU</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                        <div class="modal-body text-center">
                        <div id="menu-container">
                        <section id="coffee-menu"  class="menu-section">
    <h3>COFFEE MENU</h3>
    <ul class="list-group">
        <!-- Americano -->
        <li class="list-group-item" onmouseover="showProductImage('americano')" onmouseout="hideProductImage('americano')">
            <strong>AMERICANO</strong><br>
            <span>
                <b>Price: ₱85</b>
            </span>
            <img src="1.png" alt="Americano" class="product-image" id="americano_image" style="display: block; margin: 0 auto;">
            <div class="quantity-container">
                <button class="quantity-btn" onclick="decrementQuantity('americano')">-</button>
                <span id="quantity-americano">0</span>
                <button class="quantity-btn" onclick="incrementQuantity('americano')">+</button>
            </div>
        </li>                

        <!-- Affogato -->
        <li class="list-group-item" onmouseover="showProductImage('affogato')" onmouseout="hideProductImage('affogato')">
            <strong>AFFOGATO</strong><br>
            <span><b>Price: ₱85</b></span>
            <img src="2.png" alt="Affogato" class="product-image" id="affogato_image" style="display: block; margin: 0 auto;">
            <div class="quantity-container">
                <button class="quantity-btn" onclick="decrementQuantity('affogato')">-</button>
                <span id="quantity-affogato">0</span>
                <button class="quantity-btn" onclick="incrementQuantity('affogato')">+</button>
            </div>
        </li>

        <!-- Latte -->
        <li class="list-group-item" onmouseover="showProductImage('latte')" onmouseout="hideProductImage('latte')">
            <strong>LATTE</strong><br>
            <span><b>Price: ₱70</b></span>
            <img src="3.png" alt="Latte" class="product-image" id="latte_image" style="display: block; margin: 0 auto;">
            <div class="quantity-container">
                <button class="quantity-btn" onclick="decrementQuantity('latte')">-</button>
                <span id="quantity-latte">0</span>
                <button class="quantity-btn" onclick="incrementQuantity('latte')">+</button>
            </div>
        </li>

        <!-- Cappuccino -->
        <li class="list-group-item" onmouseover="showProductImage('cappuccino')" onmouseout="hideProductImage('cappuccino')">
            <strong>CAPPUCCINO</strong><br>
            <span><b>Price: ₱70</b></span>
            <img src="4.png" alt="Cappuccino" class="product-image" id="cappuccino_image" style="display: block; margin: 0 auto;">
            <div class="quantity-container">
                <button class="quantity-btn" onclick="decrementQuantity('cappuccino')">-</button>
                <span id="quantity-cappuccino">0</span>
                <button class="quantity-btn" onclick="incrementQuantity('cappuccino')">+</button>
            </div>
        </li>

        <!-- Dopio -->
        <li class="list-group-item" onmouseover="showProductImage('dopio')" onmouseout="hideProductImage('dopio')">
            <strong>DOPIO</strong><br>
            <span><b>Price: ₱95</b></span>
            <img src="5.png" alt="Dopio" class="product-image" id="dopio_image" style="display: block; margin: 0 auto;">
            <div class="quantity-container">
                <button class="quantity-btn" onclick="decrementQuantity('dopio')">-</button>
                <span id="quantity-dopio">0</span>
                <button class="quantity-btn" onclick="incrementQuantity('dopio')">+</button>
            </div>
        </li>

        <!-- Long Black -->
        <li class="list-group-item" onmouseover="showProductImage('long_black')" onmouseout="hideProductImage('long_black')">
            <strong>LONG BLACK</strong><br>
            <span><b>Price: ₱80</b></span>
            <img src="6.png" alt="Long Black" class="product-image" id="long_black_image" style="display: block; margin: 0 auto;">
            <div class="quantity-container">
                <button class="quantity-btn" onclick="decrementQuantity('long_black')">-</button>
                <span id="quantity-long_black">0</span>
                <button class="quantity-btn" onclick="incrementQuantity('long_black')">+</button>
            </div>
        </li>

        <!-- Irish Coffee -->
        <li class="list-group-item" onmouseover="showProductImage('irish_coffee')" onmouseout="hideProductImage('irish_coffee')">
            <strong>IRISH COFFEE</strong><br>
            <span><b>Price: ₱95</b></span>
            <img src="7.png" alt="Irish Coffee" class="product-image" id="irish_coffee_image" style="display: block; margin: 0 auto;">
            <div class="quantity-container">
                <button class="quantity-btn" onclick="decrementQuantity('irish_coffee')">-</button>
                <span id="quantity-irish_coffee">0</span>
                <button class="quantity-btn" onclick="incrementQuantity('irish_coffee')">+</button>
            </div>
        </li>

        <!-- Mocha -->
        <li class="list-group-item" onmouseover="showProductImage('mocha')" onmouseout="hideProductImage('mocha')">
            <strong>MOCHA</strong><br>
            <span><b>Price: ₱85</b></span>
            <img src="8.png" alt="Mocha" class="product-image" id="mocha_image" style="display: block; margin: 0 auto;">
            <div class="quantity-container">
                <button class="quantity-btn" onclick="decrementQuantity('mocha')">-</button>
                <span id="quantity-mocha">0</span>
                <button class="quantity-btn" onclick="incrementQuantity('mocha')">+</button>
            </div>
        </li>
    </ul>
</section>

<!-- Pastry Section -->
<section id="pastry-menu" class="menu-section">
    <h3>PASTRY MENU</h3>
    <ul class="list-group">
        <!-- Bagel -->
        <li class="list-group-item" onmouseover="showProductImage('bagel')" onmouseout="hideProductImage('bagel')">
            <strong>BAGEL</strong><br>
            <span><b>Price: ₱65</b></span>
            <img src="9.png" alt="Bagel" class="product-image" id="bagel_image" style="display: block; margin: 0 auto;">
            <div class="quantity-container">
                <button class="quantity-btn" onclick="decrementQuantity('bagel')">-</button>
                <span id="quantity-bagel">0</span>
                <button class="quantity-btn" onclick="incrementQuantity('bagel')">+</button>
            </div>
        </li>

        <!-- Banana Nut Bread -->
        <li class="list-group-item" onmouseover="showProductImage('banana_nut_bread')" onmouseout="hideProductImage('banana_nut_bread')">
            <strong>BANANA NUT BREAD</strong><br>
            <span><b>Price: ₱65</b></span>
            <img src="10.png" alt="Banana Nut Bread" class="product-image" id="banana_nut_bread_image" style="display: block; margin: 0 auto;">
            <div class="quantity-container">
                <button class="quantity-btn" onclick="decrementQuantity('banana_nut_bread')">-</button>
                <span id="quantity-banana_nut_bread">0</span>
                <button class="quantity-btn" onclick="incrementQuantity('banana_nut_bread')">+</button>
            </div>
        </li>

        <!-- Blueberry Muffin -->
        <li class="list-group-item" onmouseover="showProductImage('blueberry_muffin')" onmouseout="hideProductImage('blueberry_muffin')">
            <strong>BLUEBERRY MUFFIN</strong><br>
            <span><b>Price: ₱75</b></span>
            <img src="11.png" alt="Blueberry Muffin" class="product-image" id="blueberry_muffin_image" style="display: block; margin: 0 auto;">
            <div class="quantity-container">
                <button class="quantity-btn" onclick="decrementQuantity('blueberry_muffin')">-</button>
                <span id="quantity-blueberry_muffin">0</span>
                <button class="quantity-btn" onclick="incrementQuantity('blueberry_muffin')">+</button>
            </div>
        </li>

        <!-- Blueberry Scone -->
        <li class="list-group-item" onmouseover="showProductImage('blueberry_scone')" onmouseout="hideProductImage('blueberry_scone')">
            <strong>BLUEBERRY SCONE</strong><br>
            <span><b>Price: ₱75</b></span>
            <img src="12.png" alt="Blueberry Scone" class="product-image" id="blueberry_scone_image" style="display: block; margin: 0 auto;">
            <div class="quantity-container">
                <button class="quantity-btn" onclick="decrementQuantity('blueberry_scone')">-</button>
                <span id="quantity-blueberry_scone">0</span>
                <button class="quantity-btn" onclick="incrementQuantity('blueberry_scone')">+</button>
            </div>
        </li>

        <!-- Butter Croissant -->
        <li class="list-group-item" onmouseover="showProductImage('butter_croissant')" onmouseout="hideProductImage('butter_croissant')">
            <strong>BUTTER CROISSANT</strong><br>
            <span><b>Price: ₱95</b></span>
            <img src="13.png" alt="Butter Croissant" class="product-image" id="butter_croissant_image" style="display: block; margin: 0 auto;">
            <div class="quantity-container">
                <button class="quantity-btn" onclick="decrementQuantity('butter_croissant')">-</button>
                <span id="quantity-butter_croissant">0</span>
                <button class="quantity-btn" onclick="incrementQuantity('butter_croissant')">+</button>
            </div>
        </li>

        <!-- Oatmeal Cookie -->
        <li class="list-group-item" onmouseover="showProductImage('oatmeal_cookie')" onmouseout="hideProductImage('oatmeal_cookie')">
            <strong>OATMEAL COOKIE</strong><br>
            <span><b>Price: ₱85</b></span>
            <img src="14.png" alt="Oatmeal Cookie" class="product-image" id="oatmeal_cookie_image" style="display: block; margin: 0 auto;">
            <div class="quantity-container">
                <button class="quantity-btn" onclick="decrementQuantity('oatmeal_cookie_image')">-</button>
                <span id="quantity-oatmeal_cookie">0</span>
                <button class="quantity-btn" onclick="incrementQuantity('oatmeal_cookie')">+</button>
            </div>
        </li>

        <!-- Ensaymada -->
        <li class="list-group-item" onmouseover="showProductImage('ensaymada')" onmouseout="hideProductImage('ensaymada')">
            <strong>ENSAYMADA</strong><br>
            <span><b>Price: ₱65</b></span>
            <img src="15.png" alt="Ensaymada" class="product-image" id="ensaymada_image" style="display: block; margin: 0 auto;">
            <div class="quantity-container">
                <button class="quantity-btn" onclick="decrementQuantity('ensaymada')">-</button>
                <span id="quantity-ensaymada">0</span>
                <button class="quantity-btn" onclick="incrementQuantity('ensaymada')">+</button>
            </div>
        </li>

        <!-- Donut -->
        <li class="list-group-item" onmouseover="showProductImage('donut')" onmouseout="hideProductImage('donut')">
            <strong>DONUT</strong><br>
            <span><b>Price: ₱85</b></span>
            <img src="16.png" alt="Donut" class="product-image" id="donut_image" style="display: block; margin: 0 auto;">
            <div class="quantity-container">
                <button class="quantity-btn" onclick="decrementQuantity('donut')">-</button>
                <span id="quantity-donut">0</span>
                <button class="quantity-btn" onclick="incrementQuantity('donut')">+</button>
            </div>
        </li>
    </ul>
</section>
</div>

    <div id="receipt-container" class="order-summary-container">
        <h2 class="order-summary-title">ORDER SUMMARY</h2>
        <ul id="receipt-list" class="order-summary-list"></ul>
        <p id="total-cost" class="total-cost">TOTAL COST: ₱0</p>
    </div>
    


    <div class="container mt-5">
        <h2 class="text-center mb-4">PLACEORDER FORM</h2>

        <form action="submit_order.php" method="post" oninput="calculateChange()">
    <label for="email">EMAIL:</label>
    <input type="email" id="email" name="email" class="form-control" required>

    <label for="name">NAME:</label>
    <input type="text" id="name" name="name" class="form-control" required>

    <label for="address">ADDRESS:</label>
    <input type="text" id="address" name="address" class="form-control" required>

    <div class="col-12 mt-3">
        <label for="amountToPay" class="form-label">AMOUNT TO PAY:</label>
        <input type="number" id="amountToPay" name="amountToPay" min="0" step="0.01" class="form-control">
        <input type="hidden" id="dynamicAmountToPay" name="dynamicAmountToPay">
    </div>

    <div class="col-12 mt-3">
        <label for="cashAmount" class="form-label">CASH AMOUNT:</label>
        <input type="number" id="cashAmount" name="cashAmount" min="0" step="0.01" class="form-control" required>
    </div>

    <div class="col-12 mt-3">
        <label for="change" class="form-label">CHANGE:</label>
        <input type="number" id="change" name="change" min="0" step="0.01" class="form-control" readonly>
    </div>

    <div class="col-12 mt-3">
        <button type="submit" class="btn btn-primary">PLACEORDER</button>
    </div>
</form>


    </div>

</section>
                </div>
            </div>
        </div>
    </div>

    <script>
    function adjustQuantity(itemID, increment) {
        var quantityElement = document.getElementById(itemID + 'Quantity');
        var currentQuantity = parseInt(quantityElement.innerText);

        if (currentQuantity + increment >= 0) {
            quantityElement.innerText = currentQuantity + increment;
        }
    }

    function printReceipt() {
        alert('Receipt will be printed here. Add your logic.');
    }
</script>
<script>
    var prices = {
        'americano': 85,
        'affogato': 85,
        'latte': 70,
        'cappuccino': 70,
        'dopio': 95,
        'long_black': 80,
        'irish_coffee': 95,
        'mocha': 85,
        'bagel': 65,
        'banana_nut_bread': 65,
        'blueberry_muffin': 75,
        'blueberry_scone': 75,
        'butter_croissant': 95,
        'oatmeal_cookie': 85,
        'ensaymada': 65,
        'donut': 85
    };

    function incrementQuantity(product) {
        var quantityElement = document.getElementById('quantity-' + product);
        var quantity = parseInt(quantityElement.innerText);
        quantityElement.innerText = quantity + 1;

        updateReceipt(product, quantity + 1);
    }

    function decrementQuantity(product) {
        var quantityElement = document.getElementById('quantity-' + product);
        var quantity = parseInt(quantityElement.innerText);

        if (quantity > 0) {
            quantityElement.innerText = quantity - 1;
            updateReceipt(product, quantity - 1);
        }
    }

    function updateReceipt(product, quantity) {
    var receiptList = document.getElementById('receipt-list');
    var totalCostElement = document.getElementById('total-cost');
    var amountToPayInput = document.getElementById('amountToPay');

    var existingEntry = document.getElementById('receipt-' + product);
    if (existingEntry) {
        receiptList.removeChild(existingEntry);
    }

    if (quantity > 0) {
        var listItem = document.createElement('li');
        listItem.id = 'receipt-' + product;
        listItem.innerHTML = '<span style="margin-right: 5px;">' + product + '</span>' +
            '<span id="receipt-quantity-' + product + '">' + quantity + 'x </span>' +
            ' ₱' + (quantity * prices[product]); // Added colon after 'x'
        receiptList.appendChild(listItem);
    }

    var totalCost = calculateTotalCost();
    totalCostElement.textContent = 'Total Cost: ₱' + totalCost;

    // Set the total cost as the amount to pay
    amountToPayInput.value = totalCost.toFixed(2);

    var orderDisplay = document.getElementById('order-display');
    orderDisplay.innerHTML = '<strong>ITEM</strong> | <strong>QUANTITY</strong> | <strong>TOTAL</strong><br>';
    for (var product in prices) {
        var quantity = parseInt(document.getElementById('quantity-' + product).innerText);
        if (quantity > 0) {
            var total = quantity * prices[product];
            orderDisplay.innerHTML += product + ' ' + quantity + ' x : ₱ ' + total + '<br>';  // Added colon after 'x'
        }
    }
}

    function calculateTotalCost() {
        var totalCost = 0;

        for (var product in prices) {
            var quantity = parseInt(document.getElementById('quantity-' + product).innerText);
            totalCost += quantity * prices[product];
        }

        return totalCost;
    }

    // cahnge

    function calculateChange() {
    const amountToPay = parseFloat(document.getElementById('amountToPay').value) || 0;
    const cashAmountInput = document.getElementById('cashAmount');
    const cashAmount = parseFloat(cashAmountInput.value) || 0;

    // Check if the cash amount exceeds the limit
    if (cashAmount > 5000) {
        alert('Cash amount cannot exceed 5000.');
        cashAmountInput.value = 0; // Optionally, reset the value to the maximum allowed
        return;
    }

    const change = cashAmount - amountToPay;

    // Update the change input field
    document.getElementById('change').value = change.toFixed(2);
    }
    
</script>


</body>
</html>