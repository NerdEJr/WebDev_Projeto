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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="shortcut icon" href="./assets/imgs/icon-genshin-impact.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/style_localizacao.css">
    <link rel="stylesheet" href="assets/css/style.css">

  <title>Localização</title>
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
  <div class="maps">

    <div class="container-fluid">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2796.303719928567!2d-73.5722856!3d45.5039643!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc91b01ee28209d%3A0x13fcedf8d3f76de0!2sHoYoverse%20Canada!5e0!3m2!1spt-BR!2sbr!4v1713365578038!5m2!1spt-BR!2sbr"
        width="100%" height="50%" frameborder=”0” style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="informacoes-comunicacao">
      <h2>Contate-nos</h2>

      <p>Se no futuro os Viajantes encontrarem problemas relacionados à segurança de suas Contas HoYoverse, "Genshin
        Impact", entre outros produtos, temos diversas opções para que entrem em contato conosco (incluindo o APP da
        HoYoLAB, e-mail do SAC de Genshin Impact genshin_cs@hoyoverse.com, entre outros).</p>

      <p>Caso você tenha mais dúvidas ou questões, mande um e-mail para nós em genshin_cs@mihoyo.com</p>
      <h4>Outros contatos:</h4>
      <p>
        HoYoLAB hoyolab@hoyoverse.com <br>
        Genshin Impact genshin_cs@hoyoverse.com <br>
        Criadores de conteúdo: contentcreator@ hoyoverse.com
      </p>
    </div>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>