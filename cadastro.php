<?php
include_once "conexao.php";

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" href="./assets/imgs/icon-genshin-impact.png" type="image/x-icon">
    <link rel="stylesheet" href="./assets/css/style_Cadastro.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <title>Registre-se</title>
</head>

<body>
    <div class="container">
        <section class="header">
            <H2>Nova Conta</H2>
        </section>

        <form name="cadastroUsuario" id="form" class="form" method="post" action="receberDados.php">
            <div class="form-content">
                <label for="username">Nome do Usuário</label>
                <input name="cadUserName" type="text" id="username" placeholder="Digite o nome do usuário..." />
                <a> aqui vai a mensagem de erro...</a>
            </div>

            <div class="form-content">
                <label for="email">Email</label>
                <input name="cadEmail" type="email" id="email" placeholder="Digite o seu email..." />
                <a> aqui vai a mensagem de erro...</a>
            </div>

            <div class="form-content">
                <label for="password">Senha</label>
                <input name="cadPassword" type="password" id="password" placeholder="Digite sua senha..." />
                <a> aqui vai a mensagem de erro...</a>
            </div>

            <div class="form-content">
                <label for="password-confirmation">Confirmação de senha</label>
                <input type="password" id="password-confirmation" placeholder="Digite sua senha novamente..." />
                <a> aqui vai a mensagem de erro...</a>
            </div>

            <button type="submit">Cadastrar</button>
        </form>
    </div>

    <script src="./assets/js/script_Cadastro.js"></script>
</body>

</html>