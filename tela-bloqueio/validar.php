<?php
$usuario = $_POST["usuario"];
$senha = $_POST["password"];

if($usuario == "fortuna" && $senha == 1234){
    header("Location: home.php");
}else{
    header("Location: login.php");
}
?>