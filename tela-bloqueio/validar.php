<?php
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

if($usuario == " " && $senha == ''){
    header("location:painel.php");
}else{
    header("location:login.php");
}
?>