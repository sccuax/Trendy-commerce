document.addEventListener("DOMContentLoaded", function () {
    const searchInput = document.getElementById("searchInput");
    const resultsList = document.getElementById("result");

    searchInput.addEventListener("input", function () {
        const searchTerm = searchInput.value;

        // Limpia la lista de resultados
        resultsList.innerHTML = "";

        if (searchTerm.trim() !== "") {
            // Envía una solicitud al servidor
            fetch(`search.php?term=${encodeURIComponent(searchTerm)}`)
                .then(response => response.json())
                .then(data => {
                    // Procesa y muestra los resultados
                    data.forEach(product => {
                        const li = document.createElement("div");
                        li.classList.add('cards_t');
    li.classList.add('overflow-hidden');
    li.classList.add('d-flex');
    li.classList.add('flex-column');
    li.classList.add('align-items-center');

                        li.innerHTML = `
                        
                <div class='content_img'><img class='flex-fill' id='image-card' src='admin/products/${product.dir}' alt='product'></div>
                <div class='cards_content d-flex flex-column align-items-start align-self-stretch'>
                    <div class='card_text d-flex flex-column align-items-start align-self-stretch'>
                        <p class='card_text_profuct-name'>${product.product_name}</p>
                        <p class='card_text_type'>${product.id_type_product}</p>
                    </div>
                    <div class='cards_container-buttons d-flex align-items-center align-self-stretch'>
                        <a class='buy_card_button align-self-stretch justify-content-center align-items-center d-flex' href=''>Buy $${product.price}</a>
                        <div class='container_counter-cards d-flex align-items-center'>
                            <button class='count-m d-flex align-items-center justify-content-center'>-</button>
                            <span class='counter_cards d-flex align-items-center justify-content-center'>0</span>
                            <button class='count-m add-this-product d-flex align-items-center justify-content-center' data-id='${product.id_product}'>+</button>
                        </div>
                    </div>
                    <div class='view-product d-flex align-items-center justify-content-center align-self-stretch'>
                        <a href='' class='t-view-product'>View Product</a>
                        <img class='arrow-view' src='./img/Recurso 10-8.png' width='35px' alt=''>
                    </div>
                </div>
            </div>
                        `;
                        resultsList.appendChild(li);
                    });
                })
                .catch(error => {
                    console.error("Error:", error);
                });
        }
    });
});

