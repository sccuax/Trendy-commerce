<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="Normalice.css">
    <link rel="stylesheet" href="assets/custom.css">
    
    <title>Trendy commerce</title>
</head>
<body>
    
<!--Navbar-->
<div class="nav container-fluid d-flex justify-content-between align-items-center">
    <div><img src="img/Logo.png" alt="" width="168px"></div>
    <div class="d-flex align-items-center search-bar">
        <div class="w-auto flex-fill position-relative">
            <img class="search-icon" src="img/Nav-bar/lupa (1) 1.png" alt="" width="25px">
            <input type="text" class="form-control rounded-pill seacrh-input" id="formGroupExampleInput" placeholder="Search">
        </div>
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
            <a href="./Users/register.html" class="btn btn-light rounded-pill login-singup border border-light-subtle" id="btnLoggedOut">Sign up</a>
        </div>
            <div>
                <a href="./admin/login.html" class="btn btn-light rounded-pill d-flex flex-row-reverse login-singup align-items-center border border-light-subtle"><img src="img/Nav-bar/Recurso 2-8.png" id='btnLogin' alt="" width="16px" height="22px"> Log in</a>
            </div>
                <div class="main-menu">
                    <img src="img/Nav-bar/Recurso 3-8 1.png" width="28.543px" alt="">
                </div>
    </div>
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const visibleBtn = document.querySelector('#btnLoggedIn');
        const hiddenBtn = document.querySelector('#btnLogin');

        if (visibleBtn && visibleBtn.classList.contains('d-flex')) {
            hiddenBtn.style.display = 'none';
        } else {
            hiddenBtn.style.display = 'block';  // O el valor que prefieras, como 'inline', 'inline-block', etc.
        }
    });
</script>
</div>

<!--------aditional content of the user when they logged in--------------------->

<?php
    session_start();

    if (isset($_SESSION['user_logged_in'])) {
        echo "
        <div class='d-flex w-100 justify-content-end flex-row logged-user'> <p>Bienvenido, " . $_SESSION['name'] . "!</p>";

        // Verificar si el usuario tiene una imagen de perfil
        if (!empty($_SESSION['user_profile_image'])) {
            // Mostrar la imagen de perfil
            echo "<img src='{$_SESSION['user_profile_image']}' width='34px' alt='Perfil'>";
        } else {
            // Mostrar una imagen predeterminada si el usuario no tiene una imagen de perfil
            echo "<img src='./img/cat-5773481_1280.jpg' width='34px' alt='Perfil'>";
        }

        // Agrega un botón para cerrar sesión
        echo "<form action='logout.php' method='post'>";
        echo "<button class='btn btn-light rounded-pill d-flex flex-row-reverse 
        login-singup align-items-center border border-light-subtle' id='btnLoggedIn' type='submit'>Cerrar Sesión</button>";
        echo "</form>";
        echo "</div>";
    }
    ?>

<!--------First container, this contains the announcement and the categories---------->
<div class="first-container d-flex align-items-center universal_spacing container-fluid position-relative">
<!--container for the slider-->
<div class="img-slider align-self-stretch position-relative overflow-hidden">
        <!--first slide-->
<div class="slide_content active align-self-stretch announemennt  overflow-hidden">
        <div class="d-flex vertical_gap align-items-start flex-column announemennt-text">
            <div class="text-content d-flex flex-column align-items-start">
            <p class="over-fifty">Over 50 watches</p>
            <p class="best-watches">Best watches 
                waiting for you </p>
            </div>
                <div class="d-flex view-offers btn border rounded-pill flex-row align-items-center">
                    <a class=" btn-view" href="">View offers</a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none">
                    <path d="M13.5003 7.55063L0.706883 14.8361L0.794248 0.113885L13.5003 7.55063Z" fill="#FEFEFF" fill-opacity="0.8"/>
                    </svg>
                </div>
        </div>
        <div class="watch-announcement position-absolute">
        <img src="img/First-container/Group 15 1.png" alt="" height="425.833px">
        </div>
    </div>
            <!--second slide-->
<div class="slide_content align-self-stretch announemennt  overflow-hidden">
        <div class="d-flex vertical_gap align-items-start flex-column announemennt-text">
            <div class="text-content d-flex flex-column align-items-start">
            <p class="over-fifty">Over 50 watches</p>
            <p class="best-watches">Best watches 
                waiting for you </p>
            </div>
                <div class="d-flex view-offers btn border rounded-pill flex-row align-items-center">
                    <a class=" btn-view" href="">View offers</a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none">
                    <path d="M13.5003 7.55063L0.706883 14.8361L0.794248 0.113885L13.5003 7.55063Z" fill="#FEFEFF" fill-opacity="0.8"/>
                    </svg>
                </div>
        </div>
        <div class="watch-announcement position-absolute">
        <img src="./img/First-container/fosil-automatic.png" alt="" height="425.833px">
        </div>
    </div>

<!--third slide-->
<div class="slide_content align-self-stretch announemennt  overflow-hidden">
        <div class="d-flex vertical_gap align-items-start flex-column announemennt-text">
            <div class="text-content d-flex flex-column align-items-start">
            <p class="over-fifty">Over 50 watches</p>
            <p class="best-watches">Best watches 
                waiting for you </p>
            </div>
                <div class="d-flex view-offers btn border rounded-pill flex-row align-items-center">
                    <a class=" btn-view" href="">View offers</a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none">
                    <path d="M13.5003 7.55063L0.706883 14.8361L0.794248 0.113885L13.5003 7.55063Z" fill="#FEFEFF" fill-opacity="0.8"/>
                    </svg>
                </div>
        </div>
        <div class="watch-announcement position-absolute">
        <img src="./img/First-container/fosil-automatic.png" alt="" height="425.833px">
        </div>
    </div>

<!--fourth slide-->
<div class="slide_content align-self-stretch announemennt  overflow-hidden">
        <div class="d-flex vertical_gap align-items-start flex-column announemennt-text">
            <div class="text-content d-flex flex-column align-items-start">
            <p class="over-fifty">Over 50 watches</p>
            <p class="best-watches">Best watches 
                waiting for you </p>
            </div>
                <div class="d-flex view-offers btn border rounded-pill flex-row align-items-center">
                    <a class=" btn-view" href="">View offers</a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none">
                    <path d="M13.5003 7.55063L0.706883 14.8361L0.794248 0.113885L13.5003 7.55063Z" fill="#FEFEFF" fill-opacity="0.8"/>
                    </svg>
                </div>
        </div>
        <div class="watch-announcement position-absolute">
        <img src="./img/First-container/fosil-automatic.png" alt="" height="425.833px">
        </div>
    </div>
        <!--Navigation dots for the slider-->
        <div class="navigator">
            <div class="button_slider active"></div>
            <div class="button_slider"></div>
            <div class="button_slider"></div>
            <div class="button_slider"></div>
        </div>
    </div> 
<!------------Container of the categories---------------->
<div class="categories-container position-relative flex-fill d-flex flex-column justify-content-between align-items-center align-self-stretch align-content-center">
    <!--container of the first column-->
    <div class="container-firs_column position-relative align-self-stretch d-flex justify-content-end align-items-end">
        <!--first card-->
        <div class="category-cards d-flex flex-column align-items-center justify-content-end" style="background: #576C80;">
            <img class="img_category position-absolute" src="img/First-container/Categories/waiting-410328_1280.jpg" alt="">
            <div class="container_text-arrow d-flex w-100 justify-content-between align-items-start">
                <div class="containe_text-category d-flex flex-column justify-content-start align-items-start">
                    <p class="title_categories">Classics</p>
                    <p class="Num_products">30 producst</p>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" viewBox="0 0 29 29" fill="none">
  <g filter="url(#filter0_d_349_50)">
    <circle cx="12.5" cy="16.5" r="12.5" fill="white" fill-opacity="0.5"/>
    <path d="M10.5814 9.25072C10.6989 9.25072 10.8159 9.2662 10.9228 9.29931C11.1972 9.3839 11.4194 9.51924 11.6348 9.66646C14.2562 11.4593 16.8809 13.2497 19.506 15.0401C19.8027 15.2424 20.0005 15.4695 20 15.7657C19.9989 16.0569 19.8107 16.2837 19.5161 16.4813C17.7252 17.6831 15.9354 18.8853 14.1451 20.0876C13.2279 20.7034 12.3117 21.3204 11.3928 21.9352C10.9175 22.2533 10.3198 22.3347 9.78276 22.1594C8.90913 21.8743 8.73525 21.149 9.42119 20.6494C9.46798 20.6152 9.51796 20.5836 9.56688 20.5508C11.8847 18.9948 14.2025 17.4387 16.5203 15.8823C16.6423 15.8005 16.6441 15.7192 16.5257 15.6383C14.2046 14.0542 11.8847 12.4701 9.56263 10.887C9.26592 10.6847 9.06386 10.4573 9.06705 10.1614C9.07184 9.75752 9.42757 9.41953 9.99546 9.28671H9.99705C10.0944 9.26332 10.1959 9.25 10.2991 9.25L10.5814 9.25072Z" fill="#D0CFDB"/>
  </g>
  <defs>
    <filter id="filter0_d_349_50" x="0" y="0" width="29" height="29" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
      <feFlood flood-opacity="0" result="BackgroundImageFix"/>
      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
      <feOffset dx="2" dy="-2"/>
      <feGaussianBlur stdDeviation="1"/>
      <feComposite in2="hardAlpha" operator="out"/>
      <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
      <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_349_50"/>
      <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_349_50" result="shape"/>
    </filter>
  </defs>
</svg>
            </div>
        </div>
        <!--second card-->
        <div class="category-cards d-flex flex-column align-items-center justify-content-end" style="background: #FED37D;">
            <img class="img_category position-absolute" src="img/First-container/Categories/clockwork-4651185_1280.jpg" alt="">
            <div class="container_text-arrow d-flex w-100 justify-content-between align-items-start">
                <div class="containe_text-category d-flex flex-column justify-content-start align-items-start">
                    <p class="title_categories">Luxury</p>
                    <p class="Num_products">30 producst</p>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" viewBox="0 0 29 29" fill="none">
  <g filter="url(#filter0_d_349_50)">
    <circle cx="12.5" cy="16.5" r="12.5" fill="white" fill-opacity="0.5"/>
    <path d="M10.5814 9.25072C10.6989 9.25072 10.8159 9.2662 10.9228 9.29931C11.1972 9.3839 11.4194 9.51924 11.6348 9.66646C14.2562 11.4593 16.8809 13.2497 19.506 15.0401C19.8027 15.2424 20.0005 15.4695 20 15.7657C19.9989 16.0569 19.8107 16.2837 19.5161 16.4813C17.7252 17.6831 15.9354 18.8853 14.1451 20.0876C13.2279 20.7034 12.3117 21.3204 11.3928 21.9352C10.9175 22.2533 10.3198 22.3347 9.78276 22.1594C8.90913 21.8743 8.73525 21.149 9.42119 20.6494C9.46798 20.6152 9.51796 20.5836 9.56688 20.5508C11.8847 18.9948 14.2025 17.4387 16.5203 15.8823C16.6423 15.8005 16.6441 15.7192 16.5257 15.6383C14.2046 14.0542 11.8847 12.4701 9.56263 10.887C9.26592 10.6847 9.06386 10.4573 9.06705 10.1614C9.07184 9.75752 9.42757 9.41953 9.99546 9.28671H9.99705C10.0944 9.26332 10.1959 9.25 10.2991 9.25L10.5814 9.25072Z" fill="#D0CFDB"/>
  </g>
  <defs>
    <filter id="filter0_d_349_50" x="0" y="0" width="29" height="29" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
      <feFlood flood-opacity="0" result="BackgroundImageFix"/>
      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
      <feOffset dx="2" dy="-2"/>
      <feGaussianBlur stdDeviation="1"/>
      <feComposite in2="hardAlpha" operator="out"/>
      <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
      <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_349_50"/>
      <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_349_50" result="shape"/>
    </filter>
  </defs>
</svg>
            </div>
        </div>
    </div>
    <!--container of the second column of the categories-->
    <div class="container-firs_column position-relative align-self-stretch d-flex justify-content-end align-items-end">
        <!--first card-->
    <div class="category-cards d-flex flex-column align-items-center justify-content-end" style="background: #00DFF3;">
            <img class="img_category position-absolute" src="img/First-container/Categories/reloj-mano-alto-angulo.jpg" alt="">
            <div class="container_text-arrow d-flex w-100 justify-content-between align-items-start">
                <div class="containe_text-category d-flex flex-column justify-content-start align-items-start">
                    <p class="title_categories">Smart</p>
                    <p class="Num_products">30 producst</p>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" viewBox="0 0 29 29" fill="none">
  <g filter="url(#filter0_d_349_50)">
    <circle cx="12.5" cy="16.5" r="12.5" fill="white" fill-opacity="0.5"/>
    <path d="M10.5814 9.25072C10.6989 9.25072 10.8159 9.2662 10.9228 9.29931C11.1972 9.3839 11.4194 9.51924 11.6348 9.66646C14.2562 11.4593 16.8809 13.2497 19.506 15.0401C19.8027 15.2424 20.0005 15.4695 20 15.7657C19.9989 16.0569 19.8107 16.2837 19.5161 16.4813C17.7252 17.6831 15.9354 18.8853 14.1451 20.0876C13.2279 20.7034 12.3117 21.3204 11.3928 21.9352C10.9175 22.2533 10.3198 22.3347 9.78276 22.1594C8.90913 21.8743 8.73525 21.149 9.42119 20.6494C9.46798 20.6152 9.51796 20.5836 9.56688 20.5508C11.8847 18.9948 14.2025 17.4387 16.5203 15.8823C16.6423 15.8005 16.6441 15.7192 16.5257 15.6383C14.2046 14.0542 11.8847 12.4701 9.56263 10.887C9.26592 10.6847 9.06386 10.4573 9.06705 10.1614C9.07184 9.75752 9.42757 9.41953 9.99546 9.28671H9.99705C10.0944 9.26332 10.1959 9.25 10.2991 9.25L10.5814 9.25072Z" fill="#D0CFDB"/>
  </g>
  <defs>
    <filter id="filter0_d_349_50" x="0" y="0" width="29" height="29" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
      <feFlood flood-opacity="0" result="BackgroundImageFix"/>
      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
      <feOffset dx="2" dy="-2"/>
      <feGaussianBlur stdDeviation="1"/>
      <feComposite in2="hardAlpha" operator="out"/>
      <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
      <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_349_50"/>
      <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_349_50" result="shape"/>
    </filter>
  </defs>
</svg>
            </div>
        </div>
        <!--second card-->
    <div class="category-cards d-flex flex-column align-items-center justify-content-end" style="background: #BE67FF;">
            <img class="img_category position-absolute" src="img/First-container/Categories/smatwatch.png" alt="">
            <div class="container_text-arrow d-flex w-100 justify-content-between align-items-start">
                <div class="containe_text-category d-flex flex-column justify-content-start align-items-start">
                    <p class="title_categories show-product-arrow">Show all</p>
                    <p class="Num_products">30 producst</p>
                </div>
                <svg class="show-product-arrow" xmlns="http://www.w3.org/2000/svg" width="29" height="29" viewBox="0 0 29 29" fill="none">
  <g filter="url(#filter0_d_349_50)">
    <circle cx="12.5" cy="16.5" r="12.5" fill="white" fill-opacity="0.5"/>
    <path d="M10.5814 9.25072C10.6989 9.25072 10.8159 9.2662 10.9228 9.29931C11.1972 9.3839 11.4194 9.51924 11.6348 9.66646C14.2562 11.4593 16.8809 13.2497 19.506 15.0401C19.8027 15.2424 20.0005 15.4695 20 15.7657C19.9989 16.0569 19.8107 16.2837 19.5161 16.4813C17.7252 17.6831 15.9354 18.8853 14.1451 20.0876C13.2279 20.7034 12.3117 21.3204 11.3928 21.9352C10.9175 22.2533 10.3198 22.3347 9.78276 22.1594C8.90913 21.8743 8.73525 21.149 9.42119 20.6494C9.46798 20.6152 9.51796 20.5836 9.56688 20.5508C11.8847 18.9948 14.2025 17.4387 16.5203 15.8823C16.6423 15.8005 16.6441 15.7192 16.5257 15.6383C14.2046 14.0542 11.8847 12.4701 9.56263 10.887C9.26592 10.6847 9.06386 10.4573 9.06705 10.1614C9.07184 9.75752 9.42757 9.41953 9.99546 9.28671H9.99705C10.0944 9.26332 10.1959 9.25 10.2991 9.25L10.5814 9.25072Z" fill="#D0CFDB"/>
  </g>
  <defs>
    <filter id="filter0_d_349_50" x="0" y="0" width="29" height="29" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
      <feFlood flood-opacity="0" result="BackgroundImageFix"/>
      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
      <feOffset dx="2" dy="-2"/>
      <feGaussianBlur stdDeviation="1"/>
      <feComposite in2="hardAlpha" operator="out"/>
      <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
      <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_349_50"/>
      <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_349_50" result="shape"/>
    </filter>
  </defs>
</svg>
            </div>
        </div>
    </div>

<script>
   const arrows = document.querySelectorAll(".show-product-arrow");
arrows.forEach(arrow => {
    arrow.addEventListener('click', showMoreProduct);
});
function showMoreProduct() {
    window.location.href = "viewAll.php";
}
</script>

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
    <div class="buttond_and-range d-flex align-items-center">
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
    </div>
</div>
    <!--cards container first row-->
<div class="container_cards_rows d-flex flex-column container-fluid justify-content-center align-items-center align-self-stretch" id="courses-list">
    <!--first column-->
    <div class="card-columns d-flex container-fluid justify-content-center align-items-center align-self-stretch">
        <!--card-->
        <div class="cards_t overflow-hidden d-flex flex-column align-items-center ">
            <div class="content_img"><img class="flex-fill" id="image-card" src="./img/cards_products/fosil.jpg" alt="product"></div>
            <div class="cards_content d-flex flex-column align-items-count-m align-self-stretch">
                <div class="card_text d-flex flex-column align-items-start align-self-stretch">
                    <p class="card_text_profuct-name">Fosil Automtic</p>
                    <p class="card_text_type">Automatic watch</p>
                </div>
                <div class="cards_container-buttons d-flex align-items-center align-self-stretch">
                    <a class="buy_card_button align-self-stretch justify-content-center align-items-center d-flex" href="">Buy $100</a>
                    <div class="container_counter-cards d-flex align-items-center">
                    <button class="count-m d-flex align-items-center justify-content-center">-</button>
                    <span class="counter_cards d-flex align-items-center justify-content-center">0</span>
                    <button class="count-m add-this-product d-flex align-items-center justify-content-center" data-id="1">+</button>
                </div>
                </div>
                <div class="view-product d-flex align-items-center justify-content-center align-self-stretch">
                <a href="" class="t-view-product">View product</a>
                <img class="arrow-view" src="./img/Recurso 10-8.png" width="35px" alt="">
                </div>
            </div>
        </div>
        <!--card 2-->
        <div class="cards_t overflow-hidden d-flex flex-column align-items-center ">
            <div class="content_img"><img class="flex-fill" id="image-card" src="./img/cards_products/applewatch.jpg" alt="product"></div>
            <div class="cards_content d-flex flex-column align-items-start align-self-stretch">
                <div class="card_text d-flex flex-column align-items-start align-self-stretch">
                    <p class="card_text_profuct-name">Apple wacth series 7</p>
                    <p class="card_text_type">Smartwatch</p>
                </div>
                <div class="cards_container-buttons d-flex align-items-center align-self-stretch">
                    <a class="buy_card_button align-self-stretch justify-content-center align-items-center d-flex" href="">Buy $100</a>
                    <div class="container_counter-cards d-flex align-items-center">
                    <button class="count-m d-flex align-items-center justify-content-center">-</button>
                    <span class="counter_cards d-flex align-items-center justify-content-center">0</span>
                    <button class="count-m add-this-product d-flex align-items-center justify-content-center" data-id="2">+</button>
                </div>
                </div>
                <div class="view-product d-flex align-items-center justify-content-center align-self-stretch">
                <a href="" class="t-view-product">View product</a>
                <img class="arrow-view" src="./img/Recurso 10-8.png" width="35px" alt="">
                </div>
            </div>
        </div>
        <!--card 3-->
        <div class="cards_t overflow-hidden d-flex flex-column align-items-center ">
            <div class="content_img"><img class="flex-fill " id="image-card" src="./img/cards_products/cassioEdiffic.jpg" alt="product"></div>
            <div class="cards_content d-flex flex-column align-items-start align-self-stretch">
                <div class="card_text d-flex flex-column align-items-start align-self-stretch">
                    <p class="card_text_profuct-name">Casio Edifice</p>
                    <p class="card_text_type">Mecanic watch</p>
                </div>
                <div class="cards_container-buttons d-flex align-items-center align-self-stretch">
                    <a class="buy_card_button align-self-stretch justify-content-center align-items-center d-flex" href="">Buy $100</a>
                    <div class="container_counter-cards d-flex align-items-center">
                    <button class="count-m d-flex align-items-center justify-content-center">-</button>
                    <span class="counter_cards d-flex align-items-center justify-content-center">0</span>
                    <button class="count-m add-this-product d-flex align-items-center justify-content-center" data-id="3">+</button>
                </div>
                </div>
                <div class="view-product d-flex align-items-center justify-content-center align-self-stretch">
                <a href="" class="t-view-product">View product</a>
                <img class="arrow-view" src="./img/Recurso 10-8.png" width="35px" alt="">
                </div>
            </div>
        </div>
        <!--card 4-->
        <div class="cards_t overflow-hidden d-flex flex-column align-items-center ">
            <div class="content_img"><img class="flex-fill" id="image-card" src="./img/cards_products/fosilAutomatic.png" alt="product"></div>
            <div class="cards_content d-flex flex-column align-items-start align-self-stretch">
                <div class="card_text d-flex flex-column align-items-start align-self-stretch">
                    <p class="card_text_profuct-name">Fosil C-automatic</p>
                    <p class="card_text_type">Automatic watch</p>
                </div>
                <div class="cards_container-buttons d-flex align-items-center align-self-stretch">
                    <a class="buy_card_button align-self-stretch justify-content-center align-items-center d-flex" href="">Buy $100</a>
                    <div class="container_counter-cards d-flex align-items-center">
                    <button class="count-m d-flex align-items-center justify-content-center">-</button>
                    <span class="counter_cards d-flex align-items-center justify-content-center">0</span>
                    <button class="count-m add-this-product d-flex align-items-center justify-content-center" data-id="4">+</button>
                </div>
                </div>
                <div class="view-product d-flex align-items-center justify-content-center align-self-stretch">
                <a href="" class="t-view-product">View product</a>
                <img class="arrow-view" src="img/Recurso 10-8.png" width="35px" alt="">
                </div>
            </div>
        </div>
    </div>
    <!--second column-->
    <div class="card-columns d-flex container-fluid justify-content-center align-items-center align-self-stretch">
        <!--card 5-->
    <div class="cards_t overflow-hidden d-flex flex-column align-items-center ">
            <div class="content_img"><img class="flex-fill" id="image-card" src="./img/cards_products/fosilClassic.jpg" alt="product"></div>
            <div class="cards_content d-flex flex-column align-items-start align-self-stretch">
                <div class="card_text d-flex flex-column align-items-start align-self-stretch">
                    <p class="card_text_profuct-name">Fosil Classic</p>
                    <p class="card_text_type">Mecanic watch</p>
                </div>
                <div class="cards_container-buttons d-flex align-items-center align-self-stretch">
                    <a class="buy_card_button align-self-stretch justify-content-center align-items-center d-flex" href="">Buy $100</a>
                    <div class="container_counter-cards d-flex align-items-center">
                    <button class="count-m d-flex align-items-center justify-content-center">-</button>
                    <span class="counter_cards d-flex align-items-center justify-content-center">0</span>
                    <button class="count-m add-this-product d-flex align-items-center justify-content-center" data-id="5">+</button>
                </div>
                </div>
                <div class="view-product d-flex align-items-center justify-content-center align-self-stretch">
                <a href="" class="t-view-product">View product</a>
                <img class="arrow-view" src="./img/Recurso 10-8.png" width="35px" alt="">
                </div>
            </div>
        </div>
        <!--card 6-->
    <div class="cards_t overflow-hidden d-flex flex-column align-items-center ">
            <div class="content_img"><img class="flex-fill" id="image-card" src="./img/cards_products/gForce.jpg" alt="product"></div>
            <div class="cards_content d-flex flex-column align-items-start align-self-stretch">
                <div class="card_text d-flex flex-column align-items-start align-self-stretch">
                    <p class="card_text_profuct-name">G-force Chrono</p>
                    <p class="card_text_type">Mecanic watch</p>
                </div>
                <div class="cards_container-buttons d-flex align-items-center align-self-stretch">
                    <a class="buy_card_button align-self-stretch justify-content-center align-items-center d-flex" href="">Buy $100</a>
                    <div class="container_counter-cards d-flex align-items-center">
                    <button class="count-m d-flex align-items-center justify-content-center">-</button>
                    <span class="counter_cards d-flex align-items-center justify-content-center">0</span>
                    <button class="count-m add-this-product d-flex align-items-center justify-content-center" data-id="6">+</button>
                </div>
                </div>
                <div class="view-product d-flex align-items-center justify-content-center align-self-stretch">
                <a href="" class="t-view-product">View product</a>
                <img class="arrow-view" src="./img/Recurso 10-8.png" width="35px" alt="">
                </div>
            </div>
        </div>
        <!--card 7-->
    <div class="cards_t overflow-hidden d-flex flex-column align-items-center ">
            <div class="content_img"><img class="flex-fill" id="image-card" src="./img/cards_products/Tissot.jpg" alt="product"></div>
            <div class="cards_content d-flex flex-column align-items-start align-self-stretch">
                <div class="card_text d-flex flex-column align-items-start align-self-stretch">
                    <p class="card_text_profuct-name">Tissot 1853</p>
                    <p class="card_text_type">Automatic watch</p>
                </div>
                <div class="cards_container-buttons d-flex align-items-center align-self-stretch">
                    <a class="buy_card_button align-self-stretch justify-content-center align-items-center d-flex" href="">Buy $100</a>
                    <div class="container_counter-cards d-flex align-items-center">
                    <button class="count-m d-flex align-items-center justify-content-center">-</button>
                    <span class="counter_cards d-flex align-items-center justify-content-center">0</span>
                    <button class="count-m add-this-product d-flex align-items-center justify-content-center" data-id="7">+</button>
                </div>
                </div>
                <div class="view-product d-flex align-items-center justify-content-center align-self-stretch">
                <a href="" class="t-view-product">View product</a>
                <img class="arrow-view" src="img/Recurso 10-8.png" width="35px" alt="">
                </div>
            </div>
        </div>
        <!--card 8-->
    <div class="cards_t overflow-hidden d-flex flex-column align-items-center ">
            <div class="content_img"><img class="flex-fill" id="image-card" src="./img/cards_products/cassioEdiffic.jpg" alt="product"></div>
            <div class="cards_content d-flex flex-column align-items-start align-self-stretch">
                <div class="card_text d-flex flex-column align-items-start align-self-stretch">
                    <p class="card_text_profuct-name">Casio Edifice</p>
                    <p class="card_text_type">Mecanic watch</p>
                </div>
                <div class="cards_container-buttons d-flex align-items-center align-self-stretch">
                    <a class="buy_card_button align-self-stretch justify-content-center align-items-center d-flex" href="">Buy $100</a>
                    <div class="container_counter-cards d-flex align-items-center">
                    <button class="count-m d-flex align-items-center justify-content-center">-</button>
                    <span class="counter_cards d-flex align-items-center justify-content-center">0</span>
                    <button class="count-m add-this-product d-flex align-items-center justify-content-center" data-id="8">+</button>
                </div>
                </div>
                <div class="view-product d-flex align-items-center justify-content-center align-self-stretch">
                <a href="" class="t-view-product">View product</a>
                <img class="arrow-view" src="./img/Recurso 10-8.png" width="35px" alt="">
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
</div>

<!-------------second advertisement container----------------->
<div class="second-advertisement d-flex justify-content-between align-items-center container-fluid position-relative">
    <div class="advertisement-text d-flex flex-column align-items-start flex-fill">
        <div class="d-flex advertisement-text_h1 flex-column align-items-start align-self-stretch">
            <h3 class="the_best-online">The best online <br> watches store</h3>
            <p class="Elevate_your-style">Elevate Your Style with Our <br> Exclusive Watch Collection.</p>
        </div>
        <div class="d-flex view-offers btn border rounded-pill flex-row align-items-center">
            <a class=" btn-view" href="">Shop now</a>
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="14" viewBox="0 0 12 14" fill="none">
                    <path d="M11.9994 7.04479L0.711094 13.4731L0.78818 0.482955L11.9994 7.04479Z" fill="#F8C82B"/>
                </svg>
        </div>
    </div>
    <div class="position-absolute top-0 end-0">
        <img src="img/annoucemnet/Frame 58.png" width="1088px" height="582px" alt="">
    </div>
</div>
<script>
var slides = document.querySelectorAll('.slide_content');
var btns = document.querySelectorAll('.button_slider');
var currentSlide = 0;

// functin to change the announcemement manually
var manuallyNav = function (manual) {
    slides.forEach((slide) => {
        slide.classList.remove('active');
    });

    btns.forEach((btn) => {
        btn.classList.remove('active');
    });

    slides[manual].classList.add('active');
    btns[manual].classList.add('active');
    currentSlide = manual; // This updates the announcemement
};

btns.forEach((btn, i) => {
    btn.addEventListener("click", () => {
        manuallyNav(i);
    });
});

// Function that changes the announcemement automatically
var repeat = function () {
    currentSlide++; // Go to the next slide

    if (currentSlide >= slides.length) {
        currentSlide = 0; // Go back to the beginning if it reaches the end
    }

    slides.forEach((slide) => {
        slide.classList.remove('active');
    });

    btns.forEach((btn) => {
        btn.classList.remove('active');
    });

    slides[currentSlide].classList.add('active');
    btns[currentSlide].classList.add('active');

    setTimeout(repeat, 10000); // Set the time to automatically change slides
};

repeat();
</script>

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
                        <li><a class="link-footer" href="viewAll.php">All products</a></li>
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
<script src="cart.js"></script>
</body>
</html>