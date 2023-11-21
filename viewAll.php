<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="Normalice.css">
    <link rel="stylesheet" href="./assets/custom.css">
    
    <title>Trendy commerce</title>
</head>
<body>
    <!--Navbar-->
<div class="nav container-fluid d-flex justify-content-between align-items-center">
    <div><img src="img/Logo.png" alt="" width="168px"></div>
    <div class="d-flex align-items-center search-bar w-50 justify-content-end">
        <div id="shop-cart" class="shop-cart position-relative">
            <img src="img/Nav-bar/Recurso 16-8.png" alt="" height="30px">
            <div class="count-products">
						<span id="contador-productos">0</span>
					</div>
            </div>
                                <!----------------------------------Cart dropdown------------------------------------>
<div id="container-cart-products" class="container-cart-products hidden flex-column justify-content-between position-absolute align-items-center">
    <div class="container-javascript d-flex flex-column" id="container-javascript">
    </div>
<div class="d-flex flex-column h-auto w-auto justify-content-center align-items-center">
    <p class="text-cart-dropdown">Empty</p>
    <a class="shop-cart-dropdown d-flex justify-content-center align-items-center" href="">Shop now</a>
</div>
</div>
    </div>
    <div class="sign-and-menu-container d-flex align-items-center justify-content-end">
        <div>
            <a href="" class="btn btn-light rounded-pill login-singup border border-light-subtle">Sign up</a>
        </div>
            <div>
                <a href="./admin/login.html" class="btn btn-light rounded-pill d-flex flex-row-reverse login-singup align-items-center border border-light-subtle"><img src="img/Nav-bar/Recurso 2-8.png" alt="" width="16px" height="22px"> Log in</a>
            </div>
                <div class="main-menu">
                    <img src="img/Nav-bar/Recurso 3-8 1.png" width="28.543px" alt="">
                </div>
    </div>
</div>
<!--------------Cards container-------------------->
<div  class="cards-container-main container-fluid d-flex flex-column align-items-center flex-wrap">
    <!--OUR PRODUCTS buttons and range-->
<div class="our_products container-fluid d-flex align-items-start align-content-start flex-column">
    <!--tittle-->
    <div class="d-flex flex-column justify-content-center">
        <h1 class="title_our-products">Our products</h1>
    </div>
    <!--buttons and range container-->
    <!--buttons-->
    <div class="buttond_and-range w-100 d-flex align-items-center">
        <div class="best_sellers d-flex rounded-pill align-items-center">
            <div class="option1 d-flex justify-content-center align-items-center"><p class="b-sellers">Best sellers</p></div>
            <div class="option2 d-flex flex-fill justify-content-center align-items-center"><p class="newest">Newest</p></div>
        </div>
          <!--range-->
    <div class="range-container d-flex justify-content-start align-items-center">
    <p class="price_range">Price range</p>
    <div class="range_amount d-flex justify-content-center align-items-center">
    <p class="amount_r">$100</p>
    <input class="w-100" type="range" min="100" max="1000" value="100" style="color: #14AAD6;">
    </div>
    </div>
    <div class="flex-fill position-relative">
        <form action="" method="GET" action="">
            <input type="text" class="form-control rounded-pill seacrh-input-allProducts" id="formGroupExampleInput" name="search" placeholder="Search">
            <!-- <input class="form-control rounded-pill seacrh-input-allProducts" type="text" id="searchInput" placeholder="Buscar productos"> -->
            <button type="submit" class="boton-con-imagen"><img class="search-icon-allProducts" src="img/Nav-bar/lupa (1) 1.png" alt="" width="25px"></button>
        </form>
        </div>
    </div>
</div>
    <!--cards container rows-->
 <div class="container_cards_rows d-flex flex-column container-fluid justify-content-center align-items-center align-self-stretch" id="result">
<!-- <div class="card-columns grid-allProducts container-fluid justify-content-center align-items-center align-self-stretch" id="result"> -->
<?php
        $server_name = "localhost";
        $nombre_BD = "trendy _commce";
        $user_name = "root";
        $contraseña = "12345";

        $conexion = mysqli_connect($server_name, $user_name, $contraseña, $nombre_BD);

        if (isset($_GET['search'])) {
            $searchTerm = mysqli_real_escape_string($conexion, $_GET['search']);
            $consulta = "SELECT * FROM products WHERE product_name LIKE '%$searchTerm%'";
        } else {
            $consulta = "select * from products";
        }

        $resultado = mysqli_query($conexion, $consulta);

        echo "<div class='card-columns grid-allProducts container-fluid justify-content-center align-items-center align-self-stretch'> ";

        while ($row = mysqli_fetch_array($resultado)) {
            echo "
            <div class='cards_t overflow-hidden d-flex flex-column align-items-center'>
                <div class='content_img'><img class='flex-fill' id='image-card' src='admin/products/" . $row['dir'] . "' alt='product'></div>
                <div class='cards_content d-flex flex-column align-items-start align-self-stretch'>
                    <div class='card_text d-flex flex-column align-items-start align-self-stretch'>
                        <p class='card_text_profuct-name'>" . $row['product_name'] . "</p>
                        <p class='card_text_type'>" . $row['id_type_product'] . "</p>
                    </div>
                    <div class='cards_container-buttons d-flex align-items-center align-self-stretch'>
                        <a class='buy_card_button align-self-stretch justify-content-center align-items-center d-flex' href=''>Buy $" . $row['price'] . "</a>
                        <div class='container_counter-cards d-flex align-items-center'>
                            <button class='count-m d-flex align-items-center justify-content-center'>-</button>
                            <span class='counter_cards d-flex align-items-center justify-content-center'>0</span>
                            <button class='count-m add-this-product d-flex align-items-center justify-content-center' data-id='" . $row['id_product'] . "'>+</button>
                        </div>
                    </div>
                    <div class='view-product d-flex align-items-center justify-content-center align-self-stretch'>
                        <a href='' class='t-view-product'>View Product</a>
                        <img class='arrow-view' src='./img/Recurso 10-8.png' width='35px' alt=''>
                    </div>
                </div>
            </div>";
        }
        echo "</div>";
        ?> 
    </div>
</div>
<div class="d-flex flex-row justify-content-center align-items-center gap-2">
            <a class="back_home" href="Home.html">Back Home</a>
            <img class="arrow-view" width="35px" src="./img/Recurso 10-8.png" alt="">
        </div>
</div>
<!-----------------------------------footer---------------------------------->
<footer class="d-flex flex-column align-items-center container-fluid">
    <!--main container-->
    <div class="main_container-footer d-flex justify-content-between align-items-start align-self-stretch">
        <div class="first-container-footer w-100 d-flex flex-row justify-content-start align-self-stretch">
            <!--logo and subscribe to the newsletter-->
            <div class="logo-and_subscribe-content d-flex flex-column align-items-start align-self-stretch">
                <img src="img/Logo.png" width="231px" alt="">
                <div class="subscribe_content d-flex flex-column align-items-start">
                    <div class="d-flex align-items-end subscribe_content">
                        <img src="img/Recurso 6-8.png" width="44px" alt="">
                        <p class="subscribe-text">SUBSCIBE TO THE NEWSLETTER</p>
                    </div>
                    <div class="send-email-social flex-column d-flex align-tems-start align-self-stretch">
                        <div class="position-relative"><input class="enter-your-email rounded-pil" type="email" placeholder="Enter your email">
                        <svg class="position-absolute top-50 translate-middle" style="right: 10px; cursor: pointer;" xmlns="http://www.w3.org/2000/svg" width="30" height="28" viewBox="0 0 30 28" fill="none">
                        <ellipse cx="15.3211" cy="13.5391" rx="14.45" ry="13.5" fill="#3C89A2"/>
                        <path d="M13.1035 6.51933C13.2394 6.51933 13.3746 6.53605 13.4981 6.57181C13.8153 6.66317 14.0723 6.80933 14.3212 6.96833C17.3516 8.90464 20.3857 10.8382 23.4204 12.7718C23.7633 12.9903 23.992 13.2356 23.9914 13.5555C23.9902 13.87 23.7726 14.1149 23.432 14.3283C21.3618 15.6263 19.2928 16.9247 17.2231 18.2231C16.1628 18.8883 15.1037 19.5546 14.0415 20.2185C13.492 20.5622 12.8011 20.65 12.1803 20.4607C11.1703 20.1528 10.9693 19.3695 11.7623 18.8299C11.8164 18.793 11.8742 18.7588 11.9307 18.7234C14.6101 17.0429 17.2895 15.3624 19.9689 13.6815C20.1099 13.5931 20.1119 13.5052 19.9751 13.4179C17.292 11.7071 14.6101 9.99622 11.9258 8.28654C11.5828 8.06807 11.3492 7.82239 11.3529 7.50284C11.3584 7.06688 11.7693 6.70198 12.4252 6.5584C12.4258 6.55827 12.4262 6.55821 12.4268 6.55821C12.4274 6.55821 12.4283 6.55814 12.4289 6.558C12.5411 6.53286 12.6582 6.51855 12.7771 6.51855L13.1035 6.51933Z" fill="#D1D1D1"/>
                        </svg>
                    </div>
                        <div class="social-media-container d-flex align-tems-start">
                            <img class="img-social" src="img/social media/facebook (3).png" alt="">
                            <img class="img-social" src="img/social media/instagram (1).png" alt="">
                            <img class="img-social" src="img/social media/gorjeo.png" alt="">
                            <img class="img-social" src="img/social media/linkedin.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!--Menu footer-->
            <div class="menu-footer-container d-flex flex-row align-tems-start align-self-stretch">
                <div class="menu-footer d-flex flex-column align-items-start align-self-stretch">
                    <h5 class="tittle-footer">Main</h5>
                    <ul class="d-flex flex-column">
                        <li><a class="link-footer" href="viewAll.php">Search</a></li>
                        <li><a class="link-footer" href="./contact us/contact.html">contact us</a></li>
                        <li><a class="link-footer" href="./admin/login.html">Log in</a></li>
                        <li><a class="link-footer" href="">Order online</a></li>
                    </ul>
                </div>
                <div class="menu-footer d-flex align-items-start align-self-stretch">
                <div class="menu-footer d-flex flex-column align-items-start align-self-stretch">
                    <h5 class="tittle-footer">Categories</h5>
                    <ul class="d-flex flex-column">
                        <li><a class="link-footer" href="">Classics</a></li>
                        <li><a class="link-footer" href="">Luxury</a></li>
                        <li><a class="link-footer" href="">Smart watch</a></li>
                    </ul>
                </div>
                </div>
                <div class="menu-footer d-flex align-items-start align-self-stretch">
                <div class="menu-footer d-flex flex-column align-items-start align-self-stretch">
                    <h5 class="tittle-footer">Help</h5>
                    <ul class="d-flex flex-column">
                        <li><a class="link-footer" href="">FAQs</a></li>
                        <li><a class="link-footer" href="">Virtual assistance</a></li>
                        <li><a class="link-footer" href="">infotrend@mail.com</a></li>
                    </ul>
                </div>
                </div>
            </div>
        </div>
    </div>
    <div class="termns-policies d-flex justify-content-between align-items-center align-self-stretch">
        <p class="copy_right">© 2023 TrendyCommerce</p>
        <div class="container_termns d-flex align-items-start">
            <a class="termns_text link-offset-3-hover" href="" target="bl" class="termns_text">Terms of use</a>
            <a href="" target="bl" class="termns_text link-offset-3-hover">Privacy policy</a>
        </div>
    </div>
</footer>
<!-- <script src="search.js"></script> -->
<script src="cart.js"></script>
</body>
</html>