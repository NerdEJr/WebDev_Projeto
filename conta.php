<?php
    if(!session_start()){
        header('location: login.php');

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
        include("navbar.php");
    ?>

<div class="container conteudo">
        
        <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">
                        <h2>Perfil do Usuário</h2>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="user-email"><strong>Email:</strong></label>
                            <p id="user-email">usuario@example.com</p>
                        </div>
                        <div class="form-group">
                            <label for="user-password"><strong>Senha:</strong></label>
                            <p id="user-password">********</p>
                        </div>
                        <div class="form-group">
                            <label for="user-dob"><strong>Data de Nascimento:</strong></label>
                            <p id="user-dob">01/01/2000</p>
                        </div>
                        <button id="delete-account-button" class="btn btn-danger btn-block">Apagar Conta</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-header text-center">
                            <h2>Personagens</h2>
                        </div>
                        <div class="card-body text-center">
                            <p>Veja a lista de personagens disponíveis.</p>
                            <a href="personagens.html" class="btn btn-primary btn-block">Ver Personagens</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <form action="./excluirUsuario.php" method="post" class="form">
        <section style="justify-content: center;" class="container">
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