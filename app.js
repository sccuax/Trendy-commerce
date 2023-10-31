'use strict';

//-------------------------------Cart Dropdown
const cartDropdow = document.querySelector('#shop-cart');
const showCart = document.querySelector('.cart-dropdown');
const emptyCart = document.querySelector('.shop-cart-dropdown');
const counterProducts = document.querySelector('#contador-producto');
const cartTotal= document.querySelector('.bill');
const coursesList = document.querySelector('#courses-list');
const rowProduct = document.querySelector('.cards_t');
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
coursesList.addEventListener('click', addCourse);

function addCourse(e){
    e.preventDefault();
    if(e.target.classList.contains('add-this-product')){
        const selectedCourse = e.target.parentElement.parentElement;
        readInfoCourse(selectedCourse);
    }
}

function readInfoCourse(course){

    const infoCourse = {
        image: course.querySelector('img').src,
        tittle: course.querySelector('p').textContent,
        typeOfProduct: course.querySelector('type_product_cart-dropdown').textContent,
        price: course.  querySelector('.price-cart-dropdown').textContent,
        quantity: 1,
        id: course.querySelector('button').getAttribute('data-id'),
    };

    const alreadyExist = cart.some((course) => course.id === infoCourse.id);
        if(alreadyExist){
            cart = cart.map((course) => {
                if(course.id === infoCourse.id){
                    course.quantity++;
                    return course;
                }else{
                    return course;
                }
            });
        }else{
            cart.push(infoCourse);
        }
        showHTML();
}

function showHTML(){
if (!cart.length){
    cart
}
}





