<?php
session_start();

if (isset($_SESSION['carrinho'])) { // verifica se contem intens no carrinho.
    unset($_SESSION['carrinho']); // caso o carrinho contenha itens, remove
}


header("Location: ver_carrinho.php"); // após, redireciona para a pagina do carrinho.
exit();
?>