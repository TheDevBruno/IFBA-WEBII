<?php 
session_start(); // Inicia a sessão para gerenciar o carrinho de compras
?>
<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Email</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <h1>Informe seu Email</h1>
    <form method="post" action="src/login.php">
        <label for="usuario">Usuário</label>
        <input type="text" name="usuario" id="usuario">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha" required>

        <button type="submit">Enviar</button>
    </form>
    <?php
    if (isset($_SESSION['erro'])) {
        echo "<p>EMail ou senha incorretos.</p>";
    } 
    session_destroy();
    session_start()
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['email'])) {
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        echo "<p>Email recebido: " . htmlspecialchars($email) . "</p>";
    }
    ?>
</body>
</html>