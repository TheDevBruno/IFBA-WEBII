// assets/scripts.js
document.addEventListener('DOMContentLoaded', function() {
    const removeButtons = document.querySelectorAll('.remove-item');
    removeButtons.forEach(button => {
        button.addEventListener('click', function(event) {
            const itemId = event.target.dataset.id;
            if (confirm('Tem certeza que deseja remover este item do carrinho?')) {
                window.location.href = `remover_item.php?id=${itemId}`;
            }
        });
    });

    const clearCartButton = document.getElementById('clear-cart');
    if (clearCartButton) {
        clearCartButton.addEventListener('click', function() {
            if (confirm('Tem certeza que deseja limpar o carrinho?')) {
                window.location.href = 'limpar_carrinho.php';
            }
        });
    }
});