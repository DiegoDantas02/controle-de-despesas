<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Faça a validação e o processamento do formulário aqui

    // Exemplo de verificação simples (apenas para fins ilustrativos)
    if ($username === "usuario" && $password === "senha") {
        echo "<p>Login realizado com sucesso!</p>";
        // Redireciona para a página desejada após o login bem-sucedido
        header("Location: index.html");
        exit; // Termina a execução do script para evitar que o restante do código seja executado
    } else {
        echo "<p>Nome de usuário ou senha inválidos!</p>";
    }
}
?>