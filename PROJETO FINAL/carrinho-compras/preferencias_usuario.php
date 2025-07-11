<?php
session_start();

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Salva o nome do usuário em um cookie por 30 dias
    if (!empty($_POST['nome_usuario'])) {
        setcookie('nome_usuario', $_POST['nome_usuario'], time() + (30 * 24 * 60 * 60), "/");
    }

    // Salva a preferência de tema em um cookie por 30 dias
    if (!empty($_POST['tema'])) {
        setcookie('tema', $_POST['tema'], time() + (30 * 24 * 60 * 60), "/");
    }

    // Redireciona para a página do carrinho após salvar as preferências
    header('Location: ver_carrinho.php');
    exit();
}

// Recupera as preferências do usuário, se existirem
$nome_usuario = isset($_COOKIE['nome_usuario']) ? $_COOKIE['nome_usuario'] : '';
$tema = isset($_COOKIE['tema']) ? $_COOKIE['tema'] : 'claro'; // padrão é claro
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Preferências do Usuário</title>
</head>
<body class="<?php echo $tema; ?>">
    <h1>Defina suas Preferências</h1>
    <form method="POST" action="">
        <label for="nome_usuario">Nome:</label>
        <input type="text" id="nome_usuario" name="nome_usuario" value="<?php echo htmlspecialchars($nome_usuario); ?>" required>
        
        <label for="tema">Tema:</label>
        <select id="tema" name="tema">
            <option value="claro" <?php echo ($tema == 'claro') ? 'selected' : ''; ?>>Claro</option>
            <option value="escuro" <?php echo ($tema == 'escuro') ? 'selected' : ''; ?>>Escuro</option>
        </select>
        
        <button type="submit">Salvar Preferências</button>
    </form>
</body>
</html>