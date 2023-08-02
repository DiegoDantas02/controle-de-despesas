<?php
// Obtém os valores do formulário de login
$usuario = $_POST["usuario"];
$senha = $_POST["password"];

// Verifica se o usuário e senha são válidos
if ($usuario == "fortuna" && $senha == 1234) {
    // Redireciona para a página "home.php" em caso de sucesso
    header("Location: home.php");
} else {
    // Redireciona para a página "login.php" em caso de falha
    header("Location: login.php");
}
?>
