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
    try{

        $busca = $conection->prepare("SELECT :campo FROM usuarios WHERE :campo = :valorASerBuscado");
        $busca->bindParam(":campo",$campoDaTabela);
        $busca->bindParam(":valorASerBuscado",$valorDoCampo);
        $busca->execute();

        $usuario = $busca->fetch();
        return print_r($usuario);
        
        /* if ($usuario["$campoDaTabela"] == $valorDoCampo){
            return $usuario;
        } else {
            return;
        } */
    } catch (PDOException $e){
        echo("<br>" . $e->getMessage() );
    }
}

function validarUsuario($usuario, $senha){
    $conexao = conectar();
    try{

    } catch (PDOException $e){
        echo($e->getMessage());
    }
}

 ?>