<?php 
    include "operarBD.php";
    
    if(isset($_POST['DeletarUser'])) {
        $email = $_POST['email'];
        echo $email;
        DeletarUsuario($email);
    }

?>