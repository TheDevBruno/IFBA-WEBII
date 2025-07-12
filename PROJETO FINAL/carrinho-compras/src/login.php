<?php
session_start(); // Inicia a sessão para gerenciar o login

$login_Usuario = [
    'email' => "bruno@gmail.com",
    'senha' => "123456"
];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (
        isset($_POST['email'], $_POST['senha']) &&
        $_POST['email'] === $login_Usuario['email'] &&
        $_POST['senha'] === $login_Usuario['senha']
    ) {
        $_SESSION["Email"] = $_POST['email'];
        $_SESSION["senha"] = $_POST['senha'];
        header("Location: welcome.php");
        exit;
    } else {
        //echo "Login ou senha incorretos.";
        $_SESSION["erro"] = 'Erro';
        header("Location: ../index.php");
        exit;
    }
}

echo "<pre>";
var_dump($_POST)

?>
