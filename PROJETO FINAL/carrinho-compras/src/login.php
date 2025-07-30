<?php
session_start();
require 'conexao.php';

$erro = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'] ?? '';
    $senha = $_POST['senha'] ?? '';

    if ($usuario && $senha) {
        $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE usuario = ?");
        $stmt->execute([$usuario]);
        $user = $stmt->fetch();

        if ($user && password_verify($senha, $user['senha'])) {
            $_SESSION['usuario'] = $user['usuario'];
            header('Location: index.php');
            exit;
        } else {
            $erro = "Usuário ou senha inválidos.";
        }
    } else {
        $erro = "Preencha todos os campos.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <title>Login - Loja de Informática</title>
    <link rel="stylesheet" href="assets/style.css" />
</head>
<body class="claro">
    <div class="container" style="max-width:400px; margin-top: 100px;">
        <h1>Login</h1>
        <?php if ($erro): ?>
            <p style="color:red;"><?= htmlspecialchars($erro) ?></p>
        <?php endif; ?>
        <form method="POST" action="">
            <label for="usuario">Usuário:</label><br />
            <input type="text" name="usuario" id="usuario" required /><br /><br />
            <label for="senha">Senha:</label><br />
            <input type="password" name="senha" id="senha" required /><br /><br />
            <button type="submit">Entrar</button>
        </form>
    </div>
</body>
</html>
