function loadProducts() {
    fetch('list_products.php')
        .then(response => response.text())
        .then(data => {
            document.getElementById('productList').innerHTML = data;
        });
}

function deleteProduct(numero_produto) {
    const confirmation = confirm("Tem certeza que deseja excluir este produto?");
    if (confirmation) {
        fetch('delete_product.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: 'numero_produto=' + encodeURIComponent(numero_produto)
        })
        .then(response => response.text())
        .then(data => {
            alert(data);
            loadProducts();
        });
    }
}


window.onload = loadProducts;