<?php
include "operarBD.php";
include "index.html";

//Aqui verifico se o form do login está passando os parametros e se sim salvo nas variaveis
if (isset($_POST['login']) && isset($_POST['senha'])) {
    $email = $_POST["login"];
    $senha = $_POST["senha"];
    $conectado = FALSE;
    $conection = conectar();


    $sql = "SELECT nickname, email FROM usuarios WHERE email = :email AND userPassword = :senha";
    $usuario = $conection->prepare($sql);

    if($usuario){

        //Passa os parametros para o sql
        $usuario->bindParam(':email', $email);
        $usuario->bindParam(':senha', $senha);
        $usuario->execute();

        //verificamos se teve algum linha de resultado
        if ($usuario->rowCount() > 0) {
            //pega o valor do resultado da busca
            $result = $usuario->fetch(PDO::FETCH_ASSOC);

            $conectado = TRUE;

            session_start();

            $_SESSION["Conectado"] = $conectado;
            $_SESSION["NickName"] = $result["nickname"];
            $_SESSION["user_email"] = $email;

            header("Location: conta.php");
        } else {
            echo "Nenhum usuário encontrado com as credenciais fornecidas.";
        }
    }else {
        echo "Erro na preparação da consulta: " . $conn->error;
    }

}

?>