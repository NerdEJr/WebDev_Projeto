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

    <form action="./excluirUsuario.php" method="post" class="form">
        
        <div class="row">
            <div class="col-md-12">
                <h6>Deletar sua conta</h6>
                <input style="display: none;" name="email" value="<?php echo $email; ?>" type="text">
                <input type="submit" class="btn btn-primary" name="DeletarUser" value="Deletar conta">

            </div>
        </div>
        
    </form>
    
</body>
</html>