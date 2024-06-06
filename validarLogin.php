<?php
include_once "operarBD.php";

$conection = conectar();
$login = $_POST["login"];
$senha = $_POST["senha"];

if (checarNoBD("email", $login) && checarNoBD("userPassword", $senha)){
    echo("login efetuado com sucesso!");
}

?>