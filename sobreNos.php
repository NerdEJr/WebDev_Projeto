<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/style_SobreNos.css">
  <link rel="shortcut icon" href="./assets/imgs/icon-genshin-impact.png" type="image/x-icon">

  <title>Sobre Nós</title>
</head>

<body style="height: 100vh;">
<?php
        if(isset($_GET['sair'])) {
            session_start();
            session_destroy();            
            header("Location: index.php");
        }
        include("navbar.php");
    ?>

  <h2>Sobre a Hoyoverse</h2>

  <p> A Hoyoverse é uma empresa chinesa de desenvolvimento de jogos eletrônicos e animação digital sediada em Xangai,
    China. A empresa foi fundada em 2012 por três estudantes da Universidade Jiao Tong de Xangai, atualmente empregando
    milhares de pessoas.
  </p>

  <p>Na HoYoverse, estamos comprometidos em criar experiências imersivas no mundo virtual para jogadores do mundo todo.
    Além dos jogos como "Genshin Impact", "Honkai Impact 3rd", "Tears of Themis", "Honkai: Star Rail", a HoYoverse conta
    também com um software de papéis de parede dinâmicos, o "Desktop Interativo", e sua própria comunidade "HoYoLAB"
    como também animes, mangás, músicas, contos e produtos de fãs dos seus personagens.</p>

  <p>Aderindo à missão de "Tech Otakus Save the World", nos comprometemos a continuar desenvolvendo e inovando,
    explorando tecnologias de ponta e acumulando força técnica líder em renderização de desenhos animados, inteligência
    artificial, tecnologia de jogos na nuvem, entre outros. Ativamente engajada na globalização, a HoYoverse possui
    escritórios em Singapura, Montreal, Los Angeles, Tóquio, Seul, entre outros locais.</p>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>