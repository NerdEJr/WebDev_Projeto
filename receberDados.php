<?php
include_once "operarBD.php";
include_once "index.html";
try{
    $conexao = conectar();
    $userName = "";
    $userEmail = "";
    $userPassword = "";
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $userName = $_POST["cadUserName"];
        $userEmail = $_POST["cadEmail"];
        $userPassword = $_POST["cadPassword"];
    } else {
        echo "metodo incorreto";
    }

    $userName = htmlspecialchars($userName, ENT_QUOTES, 'UTF-8');
    $userEmail = filter_var($userEmail, FILTER_SANITIZE_EMAIL);
    $userPassword = htmlspecialchars($userPassword, ENT_QUOTES, 'UTF-8');

    // echo "<h1 style='text-align:center;color:blue;'>Estamos no PHP </h1>";
    // echo "<br><br>";
    // echo "Nome de Usuario: $userName";
    // echo "<br><br>";
    // echo "Email:$userEmail <br><br>";
    // echo "Senha: $userPassword";

    if (filter_var($userEmail, FILTER_VALIDATE_EMAIL) && !empty($userName) && !empty($userPassword)) {
        // Tentar cadastrar o usuário
        if (cadastrarUsuarios($userName, $userEmail, $userPassword)) {
            header("Location: ./index.html");
            //echo "Usuário cadastrado com sucesso!";
        } else {
            echo "Erro ao cadastrar usuário.";
        }
    } else {
        echo "Dados do formulário inválidos.";
    }
} catch(PDOException $e){
    echo "Falha na gravação do registro: " . $e->getMessage();
}
?>