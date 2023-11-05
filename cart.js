let cart = [];

document.addEventListener('DOMContentLoaded', function () {
    const btnCart = document.querySelector('#shop-cart');
    const containerCartProducts = document.querySelector('.container-cart-products');
    const addProduct = document.querySelector('.container_cards_rows');
    const removeProduct = document.querySelector('#container-cart-products');
    const cartEmpty = document.querySelector('.text-cart-dropdown');
    const rowProduct = document.querySelector('.container-javascript');
    const ConuterProducts = document.querySelector('#contador-productos');
    let counterTotal;


    btnCart.addEventListener('click', () => {
        containerCartProducts.classList.toggle('hidden');
    });

    addProduct.addEventListener('click', getProduct);
    
    ConuterProducts.addEventListener('click', counterSpan);

    removeProduct.addEventListener('click', deleteProduct);

    function getProduct(e) {
        e.preventDefault();
        if (e.target.classList.contains('add-this-product')) {
            const selectedProduct = e.target.closest('.cards_t'); // Obtener el producto seleccionado
    
            if (selectedProduct) {
                const image = selectedProduct.querySelector('.content_img img').src;
                infoProduct(selectedProduct, image);
                showHTML();
            }
        }
    }
    

    function infoProduct(product, image) {
        const item = {
            image: image, 
            name: product.querySelector('.card_text_profuct-name').textContent,
            type: product.querySelector('.card_text_type').textContent,
            price: product.querySelector('.buy_card_button').textContent,
            quantity: 1,
            id: product.querySelector('.add-this-product').getAttribute('data-id'),
        };

        const alreadyExist = cart.some((product) => product.id === item.id);
        if (alreadyExist) {
            cart = cart.map((product) => {
                if (product.id === item.id) {
                    product.quantity++;
                }
                return product;
            });
        } else {
            cart.push(item);
        }
        showHTML();
    }

    function showHTML() {
        if (!cart.length) {
            cartEmpty.classList.remove('hidden');
            rowProduct.classList.add('hidden');
        } else {
            cartEmpty.classList.add('hidden');
            rowProduct.classList.remove('hidden');
        }

        cleanCart();

        cart.forEach((product) => {
            const containerProduct = document.createElement('div');
            containerProduct.classList.add('container-cart-product', 'justify-content-between', 'align-content-center', 'align-self-stretch', 'd-flex');

            containerProduct.innerHTML = `
                <img class="img-cart-container" src="${product.image}" alt="">
                <div class="info-cart-container d-flex flex-column align-items-center align-self-stretch">
                    <div class="info-cart-container-text d-flex justify-content-between align-items-start align-content-start align-self-stretch flex-wrap">
                        <p class="name-product_cart-dropdown">${product.name}</p>
                        <p class="type_product_cart-dropdown">${product.type}</p>
                        <img class="remove-product" src="img/boton-x.png" alt="" width="16px" data-id="${product.id}">
                    </div>
                    <div class="cart-container-price-buttons d-flex justify-content-between align-items-center align-self-stretch">
                        <p class="price-cart-dropdown">${product.price.slice(3)}</p>
                        <div class="container_counter-cards position-relative cart-container_counters d-flex align-items-center">
                            <button class="count-m d-flex align-items-center justify-content-center">-</button>
                            <span class="counter_cards d-flex align-items-center justify-content-center">${product.quantity}</span>
                            <button class="count-p d-flex align-items-center justify-content-center">+</button>
                        </div>
                    </div>
                </div>
            `;
            rowProduct.appendChild(containerProduct);
            counterSpan();
        });
    }

    function counterSpan() {
        counterTotal = 0;
        cart.forEach((product) => {
            counterTotal += product.quantity;
        });
        ConuterProducts.innerText = counterTotal;
    }

    function cleanCart() {
        rowProduct.innerHTML = '';
    }

    function deleteProduct(e) {
        if (e.target.classList.contains('remove-product')) {
            const productId = e.target.getAttribute('data-id');
    
            cart = cart.filter(product => product.id !== productId);
            showHTML();
            counterSpan()
        }
    }
});


