<?php
session_start();
require 'conexao.php';

// Verificar login
if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
    exit;
}

// Busca os produtos com saídas
$sql = "SELECT ps.id, p.nome, ps.quantidade, ps.data_saida 
        FROM produtos_saida ps 
        JOIN produtos p ON ps.produto_id = p.id
        ORDER BY ps.data_saida DESC";

$stmt = $pdo->query($sql);
$saidas = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <title>Loja de Informática - Produtos Saída</title>
    <link rel="stylesheet" href="assets/style.css" />
</head>
<body class="claro">
    <header>
        <h1>Loja de Informática - Produtos Saída</h1>
        <p>Usuário: <?= htmlspecialchars($_SESSION['usuario']) ?> | <a href="logout.php">Sair</a></p>
    </header>
    <div class="container">
        <?php if (!$saidas): ?>
            <p>Nenhuma saída registrada.</p>
        <?php else: ?>
            <table>
                <thead>
                    <tr>
                        <th>Produto</th>
                        <th>Quantidade</th>
                        <th>Data da Saída</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($saidas as $saida): ?>
                        <tr>
                            <td><?= htmlspecialchars($saida['nome']) ?></td>
                            <td><?= $saida['quantidade'] ?></td>
                            <td><?= date('d/m/Y H:i', strtotime($saida['data_saida'])) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
    </div>
</body>
</html>
