'use strict';

//-------------------------------Cart Dropdown
const cartDropdown = document.querySelector('#shop-cart');
const showCart = document.querySelector('.cart-dropdown');
const emptyCart = document.querySelector('.shop-cart-dropdown');
const counterProducts = document.querySelector('#contador-producto');
const cartTotal = document.querySelector('.bill');
const coursesList = document.querySelector('#courses-list');
const ProductHorizontal = document.querySelector('.container_cards_rows');
let counterTotal;
let totalBill = 0;
let cart = [];

cartDropdown.addEventListener('click', showCatDropdown);

function showCatDropdown() {
    if (showCart.classList.contains('hidden')) {
        showCart.classList.remove('hidden');
        showCart.classList.add('visible');
    } else {
        showCart.classList.add('hidden');
        showCart.classList.remove('visible');
    }
}

// Add products to the cart
/* ProductHorizontal.addEventListener('click', (e) => {
    if (e.target.classList.contains('add-this-product')) {
        const selectedCourse = e.target.parentElement.parentElement;
        readInfoProduct(selectedCourse);
    }
});

coursesList.addEventListener('click', addProduct);

function addProduct(e) {
    e.preventDefault();
    if (e.target.classList.contains('add-this-product')) {
        const selectedCourse = e.target.parentElement.parentElement;
        readInfoProduct(selectedCourse);
    }
}

function readInfoProduct(product) {
    const infoCourse = {
        image: product.querySelector('img').src,
        title: product.querySelector('.card_text_profuct-name').textContent,
        typeOfProduct: product.querySelector('.card_text_type').textContent,
        price: product.querySelector('.buy_card_button').textContent,
        quantity: 1,
        id: product.querySelector('.add-this-product').getAttribute('data-id'),
    };

    const alreadyExist = cart.some((product) => product.id === infoCourse.id);
    if (alreadyExist) {
        cart = cart.map((product) => {
            if (product.id === infoCourse.id) {
                product.quantity++;
                return product;
            } else {
                return product;
            }
        });
    } else {
        cart.push(infoCourse);
    }
    showHTML();
}

function showHTML() {
    cleanCart();

    cart.forEach((product) => {
        const containerProduct = document.createElement('div');
        containerProduct.classList.add('container-cart-product');

        containerProduct.innerHTML = `
        <div class="hidden cart-dropdown flex-column justify-content-between position-absolute align-items-center">
        <div class="container-cart-product justify-content-between align-content-center align-self-stretch d-flex">
            <img class="img-cart-container" src="img/cards_products/fosilClassic.jpg" alt="">
            <div class="info-cart-container d-flex flex-column align-items-center align-self-stretch">
                <div class="info-cart-container-text d-flex justify-content-between align-items-start align-content-start align-self-stretch flex-wrap">
                    <p class="name-product_cart-dropdown">Fosil C-automatic</p>
                    <p class="type_product_cart-dropdown">Automatic watch</p>
                    <img class="" src="img/boton-x.png" alt="" width="16px">
                </div>
                <div class="cart-container-price-buttons d-flex justify-content-between align-items-center align-self-stretch">
                    <p class="price-cart-dropdown">$100</p>
                    <div class="container_counter-cards position-relative cart-container_counters d-flex align-items-center">
                        <button class="count-m d-flex align-items-center justify-content-center">-</button>
                        <span class="counter_cards d-flex align-items-center justify-content-center">0</span>
                        <button class="count-m d-flex align-items-center justify-content-center">+</button>
                    </div>
                </div>
            </div>
        </div>
        <p class="text-cart-dropdown">Empty</p>
        <a class="shop-cart-dropdown d-flex justify-content-center align-items-center" href="">Shop now</a>
    </div>
        `;
        ProductHorizontal.appendChild(containerProduct);
        counterSpan();
        totalAmount();
    });
}

function counterSpan() {
    let counterTotal = 0;
    cart.forEach((product) => {
        counterTotal += product.quantity;
    });
    counterProducts.innerText = counterTotal;
}

function cleanCart() {
    ProductHorizontal.innerHTML = '';
}

function totalAmount() {
    let totalBill = 0;
    cart.forEach((product) => {
        totalBill += parseInt(product.price.slice(1)) * product.quantity;
    });
    cartTotal.innerHTML = `$${totalBill.toLocaleString()}`;
}
 */