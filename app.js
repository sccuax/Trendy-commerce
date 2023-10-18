'use strict';

//-------------------------------Cart Dropdown
const cartDropdow = document.querySelector('#shop-cart');
const showCart = document.querySelector('.cart-dropdown');
const emptyCart = document.querySelector('.shop-cart-dropdown');
const counterProducts = document.querySelector('#contador-producto');
const cartTotal= document.querySelector('.bill');
let conterTotal;
let totalbill = 0;
let cart = [];

cartDropdow.addEventListener('click', showCatDropdown)
function showCatDropdown(){
    if(showCart.classList.contains('hidden')){
        showCart.classList.remove('hidden');
        showCart.classList.add('vissible');
    }else{
        showCart.classList.add('hidden');
        showCart.classList.remove('vissible');
    }
}

//add products to the cart





