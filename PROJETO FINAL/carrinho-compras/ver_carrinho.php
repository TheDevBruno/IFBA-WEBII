<?php
session_start();

unset($_SESSION['carrinho']);   // Remove todos os itens do carrinho


header('Location: ver_carrinho.php');   // Redireciona para o carrinho
exit();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Seu Carrinho</title>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/style.css">

</head>
<body class="<?= $classe_tema ?>">
    <h1>Carrinho de Compras</h1>
    <p>Bem-vindo, <strong><?= $nome_usuario ?></strong>!</p>
    <table border="1">
        <tr>
            <th>Produto</th>
            <th>Quantidade</th>
            <th>Preço</th>
            <th>Subtotal</th>
            <th>Ação</th>
        </tr>
        <?php
        $total = 0;
        foreach ($carrinho as $id => $item):
            $subtotal = $item['preco'] * $item['quantidade'];
            $total += $subtotal;
        ?>
        <tr>
            <td><?= htmlspecialchars($item['nome']) ?></td>
            <td><?= $item['quantidade'] ?></td>
            <td>R$ <?= number_format($item['preco'], 2, ',', '.') ?></td>
            <td>R$ <?= number_format($subtotal, 2, ',', '.') ?></td>
            <td>
                <a href="ver_carrinho.php?id=<?= $id ?>">Remover</a>
            </td>
        </tr>
        <?php endforeach; ?>
        <tr>
            <td colspan="3"><strong>Total</strong></td>
            <td colspan="2"><strong>R$ <?= number_format($total, 2, ',', '.') ?></strong></td>
        </tr>
    </table>
    <br>
    <a href="adicionar_carrinho.php">Adicionar Mais Produtos</a>
    <a href="preferencias_usuario.php">Preferências do Usuário</a>
    <form action="limpar_carrinho.php" method="post" style="display:inline;">
        <button type="submit">Limpar Carrinho</button>
    </form>
</body>
</html>