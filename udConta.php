<?php 
    include "operarBD.php";
    
    if(isset($_POST['DeletarUser'])) {
        $email = $_POST['email'];        
        DeletarUsuario($email);
    }
    else if(isset($_POST['EditUser'])) {
        $senha = $_POST['userPasswd'];
        $userEmail = $_POST['userEmail'];
        $idUser = $_POST['idUser'];
        $userNickName = $_POST['userNickName'];

        EditarDadosUsuario($idUser, $userEmail, $senha, $userNickName);

    }

?>