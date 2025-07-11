<?php
session_start();

function adicionarProdutoCarrinho($produto, $quantidade) {
    if (isset($_SESSION['carrinho'][$produto['id']])) {
        $_SESSION['carrinho'][$produto['id']]['quantidade'] += $quantidade;
    } else {
        $_SESSION['carrinho'][$produto['id']] = [
            'nome' => $produto['nome'],
            'preco' => $produto['preco'],
            'quantidade' => $quantidade
        ];
    }
}

function removerProdutoCarrinho($id) {
    if (isset($_SESSION['carrinho'][$id])) {
        unset($_SESSION['carrinho'][$id]);
    }
}

function limparCarrinho() {
    unset($_SESSION['carrinho']);
}

function calcularTotalCarrinho() {
    $total = 0;
    if (isset($_SESSION['carrinho'])) {
        foreach ($_SESSION['carrinho'] as $item) {
            $total += $item['preco'] * $item['quantidade'];
        }
    }
    return $total;
}

function salvarPreferenciasUsuario($nome, $tema) {
    setcookie('nome_usuario', $nome, time() + (86400 * 30), "/");
    setcookie('tema_usuario', $tema, time() + (86400 * 30), "/");
}

function recuperarPreferenciasUsuario() {
    $nome = isset($_COOKIE['nome_usuario']) ? $_COOKIE['nome_usuario'] : '';
    $tema = isset($_COOKIE['tema_usuario']) ? $_COOKIE['tema_usuario'] : 'claro'; // padrão claro
    return ['nome' => $nome, 'tema' => $tema];
}
?>