<?php
    if(!session_start()){
        header('location: login.php');

    } else {
        print_r($_SESSION);

        $email = $_SESSION["user_email"];
        $nickName = $_SESSION["NickName"];
        $idUser = $_SESSION["id"];
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
    <section>
     <!-- Navbar-->
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid nav-brand">
                <!-- Logo ou Imagem Brand -->
                <a class="navbar-brand" href="#">
                    <img class="nav-logo" src="assets/imgs/Logo_Genshin-Black.png" alt="Logo">
                </a>

            </div>
            <div class="container-fluid">
                <!-- Botão Toggle para telas pequenas -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Links e Menus -->
                <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                    <ul class="navbar-nav">
                        <!-- Link Home -->
                        <li class="nav-item">
                            <a class="nav-link" href="pagPrincipal.html">Home</a>
                        </li>
                        <!-- Link Sobre Nós -->
                        <li class="nav-item">
                            <a class="nav-link" href="sobreNos.html">Sobre Nós</a>
                        </li>
                        <!-- Link Localização -->
                        <li class="nav-item">
                            <a class="nav-link" href="localizacao.html">Localização</a>
                        </li>
                        <!-- Link Login -->
                        <li class="nav-item">
                            <a class="nav-link" href="login.html">Login</a>
                        </li>
                        <!-- Link Cadastro -->
                        <li class="nav-item">
                            <a class="nav-link" href="cadastro.html">Cadastre-se</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <form action="./udConta.php" method="post" class="form">
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