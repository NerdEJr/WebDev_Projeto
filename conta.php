<?php
    if(!session_start()){
        header('location: index.php?sair');

    } else {       
        $email = $_SESSION["user_email"];
        $nickName = $_SESSION["NickName"];
        $idUser = $_SESSION["user_id"];
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Conta</title>
</head>
<body>
<?php
        if(isset($_GET['sair'])) {
            session_start();
            session_destroy();            
            header("Location: index.php");
        }
        include("navbar.php");
    ?>
    <form action="./udConta.php" method="post" class="form-group d-flex flex-column">
        <section style="margin-top: 1rem;" class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h5>Editar dados</h5>
                </div>
            </div>
            <div class="row">
                <div style="display: none" class="col-md-3">                    
                    <input class="form-control" id="idUser" value="<?php echo $idUser;?>" name="idUser" type="text">                                      
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="userNickName">Nome de Usuário</label><br>
                        <input class="form-control" id="userNickName" value="<?php echo $nickName;?>" name="userNickName" type="text">
                    </div>                    
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="userEmail">Email</label><br>
                        <input class="form-control" id="userEmail" value="<?php echo $email;?>" name="userEmail" type="text">
                    </div>                    
                </div>                
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="userPasswd">Senha</label><br>
                        <input class="form-control" id="userPasswd" name="userPasswd" type="password">
                    </div>                    
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="userPasswd">Editar Dados</label><br>
                        <input class="btn btn-info" id="userPasswd" name="EditUser" type="submit" value="Editar Dados">
                    </div>                    
                </div>
            </div>
        </section>

    </form>




    <form action="./udConta.php" method="post" class="form">
        <section style="margin-top: 1rem;" class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h6>Deletar sua conta</h6>
                    <input style="display: none;" name="email" value="<?php echo $email; ?>" type="text">
                    <input type="submit" class="btn btn-info" name="DeletarUser" value="Deletar conta">
                </div>

            </div>
        </section>
    </form>

    
</body>
</html>