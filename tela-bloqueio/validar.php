<?php
$usuario = $_POST["login"];
$senha = $_POST["password"];

if($usuario == "diego@wolf.com" && $senha == 1234){
    header("location:home.php");
}else{
    header("location: login.php");
}
?>