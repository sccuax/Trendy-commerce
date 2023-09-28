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
    <div class="sign-and-menu-container d-flex align-items-center justify-content-end">
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

<!--------First container, this contains the announcement and the categories---------->
<div class="first-container d-flex align-items-center universal_spacing container-fluid">
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
        <img src="img/First-container/fosil-automatic.png" alt="" height="425.833px">
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
        <img src="img/First-container/WhatsApp Image 2023-04-14 at 1.38 1.jpg" alt="" height="425.833px">
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
        <img src="img/First-container/WhatsApp Image 2023-04-14 at 1.38 1.jpg" alt="" height="425.833px">
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
    <div class="container-firs_column position-relative align-self-stretch d-flex justify-content-center align-items-end">
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
    <div class="container-firs_column position-relative align-self-stretch d-flex justify-content-center align-items-end">
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
                    <p class="title_categories">Show all</p>
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




    <?php
    echo "Hola";
    ?>
<script src="">
</script>
</body>
</html>