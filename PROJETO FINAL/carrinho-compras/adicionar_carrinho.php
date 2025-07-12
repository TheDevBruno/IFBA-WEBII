<?php
session_start(); 


require_once 'produtos.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['produto_id'];
    $quantidade = intval($_POST['quantidade']);

   
    if (!isset($_SESSION['carrinho'])) { //verifica se á itens no carrinho, caso tenha adiciona ao vetor.
        $_SESSION['carrinho'] = [];
    }

    // Se já existe, soma a quantidade
    if (isset($_SESSION['carrinho'][$id])) {
        $_SESSION['carrinho'][$id]['quantidade'] += $quantidade; //verifica se a itens ao carrinho
    } else {
        $_SESSION['carrinho'][$id] = [ // buscar e mostra a informação do produto preço e quantidade
            'nome' => $produtos[$id]['nome'],
            'preco' => $produtos[$id]['preco'],
            'quantidade' => $quantidade
        ];
    }

    // Redireciona para evitar reenvio do formulário - isso foi uma ajuda
    header('Location: adicionar_carrinho.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Adicionar ao Carrinho</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <h1>Produtos Disponíveis</h1>
    <form method="post"> 
        <label for="produto_id">Produto:</label>
        <select name="produto_id" id="produto_id">
            <?php foreach ($produtos as $id => $produto): ?>
                <option value="<?= $id ?>"><?= $produto['nome'] ?> - R$ <?= number_format($produto['preco'], 2, ',', '.') ?></option>
            <?php endforeach; ?>
        </select>
        <label for="quantidade">Quantidade:</label>
        <input type="number" name="quantidade" id="quantidade" value="1" min="1" required>
        <button type="submit">Adicionar ao Carrinho</button>
    </form>
    <br>
    <a href="ver_carrinho.php">Ver Carrinho</a>
    <a href="preferencias_usuario.php">Preferências do Usuário</a>
</body>
</html>