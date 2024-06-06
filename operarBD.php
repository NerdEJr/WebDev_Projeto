<?php

function conectar(){
    $hostname = "localhost";
    $port = 3306;
    $DBname = "genshin"; 
    $usuario = "root";
    
    try{
        $conectar = new PDO("mysql:host=$hostname;port=$port;dbname=$DBname",$usuario,"");
        //echo("Conexao realizada com sucesso!");
        return $conectar;
    }catch(PDOException $e){
        echo("Falha ao se conectar".$e->getMessage());
    }
    
}

function cadastrarUsuarios($nomeUsuario, $email, $senha){
    $conection = conectar();
    if ($conection) {
        try {
            $sql = $conection->prepare("INSERT INTO usuarios (nickname, email, userPassword) VALUES (:nomeUsuario, :email, :senha)");
            $sql->bindParam(':nomeUsuario', $nomeUsuario);
            $sql->bindParam(':email', $email);
            $sql->bindParam(':senha', $senha);
            $sql->execute();
            echo "Usuário cadastrado com sucesso!";
            $conection = null;
        } 
        catch (PDOException $e) {
            echo "Erro ao cadastrar usuário: " . $e->getMessage();
        }
    }
}

function checarNoBD(String $campoDaTabela, $valorDoCampo) {
    $conection = conectar(); 
    $busca = $conection->prepare("SELECT * FROM usuarios WHERE $campoDaTabela = :valorASerBuscado");
    $busca->bindParam(":valorASerBuscado",$valorDoCampo);
    $busca->execute();

    if ($busca > 0){
        return true;
    } else {
        return false;
    }
}

 ?>