<?php
$conectar;
function conectar(){

    $hostname = "localhost";
    $port = 3306;
    $DBname = "genshin"; 
    $usuario = "root";
    
    try{
        $conectar = new PDO("mysql:host=$hostname;port=$port;dbname=$DBname",$usuario,"");
        echo("Conexao realizada com sucesso!");
        return $conectar;
    }catch(PDOException $e){
        echo("Falha ao se conectar".$e->getMessage());
    }
    
}

function cadastrarUsuarios($nomeUsuario, $email, $senha){
    $conection = conectar();
    
    $sql =$conection ->prepare("INSERT INTO genshin.usuarios() VALUES ('$nomeUsuario', '$email', '$senha')");
 }