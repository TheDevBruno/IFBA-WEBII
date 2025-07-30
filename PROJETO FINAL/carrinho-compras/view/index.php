<?php
session_start();
require 'conexao.php';

// Verificar login
if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
    exit;
}

// Buscar produtos com estoque > 0
$stmt = $pdo->query("SELECT * FROM produtos WHERE estoque > 0 ORDER BY nome ASC");
$produtos = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <title>Loja de Informática - Produtos Disponíveis</title>
    <link rel="stylesheet" href="assets/style.css" />
</head>
<body class="claro">
    <header>
        <h1>Loja de Informática - Produtos Disponíveis</h1>
        <p>Usuário: <?= htmlspecialchars($_SESSION['usuario']) ?> | <a href="logout.php">Sair</a></p>
    </header>
    <div class="container product-list">
        <?php foreach ($produtos as $produto): ?>
            <div class="product">
                <h2><?= htmlspecialchars($produto['nome']) ?></h2>
                <p><?= htmlspecialchars($produto['descricao']) ?></p>
                <p><strong>Preço:</strong> R$ <?= number_format($produto['preco'], 2, ',', '.') ?></p>
                <p><strong>Estoque:</strong> <?= $produto['estoque'] ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
