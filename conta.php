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

    
</body>
</html>