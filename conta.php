<?php
include "operarBD.php";
$conection = conectar();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style.css">
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
                        <a class="nav-link" href="index.html">Home</a>
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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>
</html>