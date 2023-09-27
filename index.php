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
        <div id="shop-cart" class="shop-cart position-relative"><img src="img/Nav-bar/Recurso 16-8.png" alt="" height="30px">
            <div class="count-products">
						<span id="contador-productos">0</span>
					</div>
            </div>
    </div>
    <div class="sign-and-menu-container d-flex align-items-center justify-content-center">
        <div>
            <a href="" class="btn btn-light rounded-pill login-singup border border-light-subtle">Sign up</a>
        </div>
            <div>
                <a href="" class="btn btn-light rounded-pill d-flex flex-row-reverse login-singup align-items-center border border-light-subtle"><img src="img/Nav-bar/Recurso 2-8.png" alt="" width="16px" height="22px"> Log in</a>
            </div>
                <div class="main-menu">
                    <img src="img/Nav-bar/Recurso 3-8 1.png" width="28.543px" alt="">
                </div>
    </div>
</div>

<!--First container, this contains the announcement and the categories-->
<div class="first-container d-flex align-items-center universal_spacing w-auto">

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
        <img src="img/First-container/WhatsApp Image 2023-04-14 at 1.38 1.jpg" alt="" height="425.833px">
        </div>
    </div>

        <div class="navigator">
            <div class="button_slider active"></div>
            <div class="button_slider"></div>
            <div class="button_slider"></div>
            <div class="button_slider"></div>
        </div>
    </div> 
</div>
<script>
    var slides = document.querySelectorAll('.slide_content');
var btns = document.querySelectorAll('.button_slider');
var currentSlide = 0; // Cambiado a 0 para que empiece desde la primera diapositiva

// Función para navegar manualmente a una diapositiva
var manuallyNav = function(manual){
    slides.forEach((slide) => {
        slide.classList.remove('active');
    });

    btns.forEach((btn) =>{
        btn.classList.remove('active');
    });

    slides[manual].classList.add('active');
    btns[manual].classList.add('active');
}

btns.forEach((btn, i) => {
    btn.addEventListener("click", () => {
        manuallyNav(i);
        currentSlide = i;
    });
});

// Función para avanzar automáticamente
var repeat = function(){
    let i = 0;

    var repeater = () => {
        setTimeout(function(){
            slides[i].classList.remove('active');
            btns[i].classList.remove('active');
            i++;

            if (i >= slides.length) {
                i = 0;
            }

            slides[i].classList.add('active');
            btns[i].classList.add('active');
            repeater();
        }, 5000); // Cambiado el tiempo para un avance más rápido
    }
    repeater();
}

repeat();

</script>




    <?php
    echo "Hola";
    ?>
<script src="">
</script>
</body>
</html>