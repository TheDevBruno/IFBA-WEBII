<?php
session_start();

// Verifica se o item a ser removido foi passado via GET
if (isset($_GET['produto'])) {
    $produto = $_GET['produto'];

    // Verifica se o carrinho existe na sessão
    if (isset($_SESSION['carrinho'][$produto])) {
        // Remove o item do carrinho
        unset($_SESSION['carrinho'][$produto]);
    }
}

// Redireciona para a página do carrinho
header("Location: ver_carrinho.php");
exit();
?>