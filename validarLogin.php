<?php
include "operarBD.php";


$login = $_POST["login"];
$senha = $_POST["senha"];

/* echo($login);
echo($senha); */

$conection = conectar();
if (checarNoBD("email", $login)){
    // echo("email encontrado"); Debug pq nn sei debugar em PHP
    $buscarSenha = $conection->prepare("SELECT userPassword FROM usuarios WHERE email = :email");
    $buscarSenha->bindParam(":email", $login);
    $buscarSenha->execute();

    $usuario = $buscarSenha->fetch();
    $senhaUsuario = $usuario['userPassword'];

    if(($senha == $senhaUsuario)){
        echo("Usuario logado com sucesso! :)");
        return true;
    } else {
        echo("Senha incorreta");
        return false;

    }
} else {
    echo("email digitado não consta no banco de dados");
}

?>