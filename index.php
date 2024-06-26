<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="./assets/imgs/icon-genshin-impact.png" type="image/x-icon">
    <title>Página Principal</title>
    <!-- Link de fontes do Google para ícones dos botoes do carrossel-->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

</head>

<?php
    if((isset($_SESSION["Conectado"]) == TRUE)){  
        if(!session_start()){
            header('location: index.php?sair');  
        } else {     
            $email = $_SESSION["user_email"];
            $nickName = $_SESSION["NickName"];
            $idUser = $_SESSION["user_id"];
        }
    }
?>

<body>
    <?php
        if(isset($_GET['sair'])) {
            session_start();
            session_destroy();            
            header("Location: index.php");
        }
        include("navbar.php");
    ?>

    <!--o que é genshin impact?-->
    <section name="oque" class="container-fluid">
        <h2 class="titulo">O que é Genshin Impact</h2>
        <div class="container">
            <p>Genshin Impact é um RPG de ação desenvolvido e distribuído pela HoYoverse (inicialmente, miHoYo), lançado
                em 28
                de setembro de 2020 para Android, iOS, Windows e PlayStation 4. Por ser um jogo gratuito, a estratégia
                de
                monetização de Genshin é inteiramente baseada em microtransações, utilizadas para acelerar alguns
                elementos do
                jogo e, principalmente, o sistema de gacha de personagens.</p>
        </div>
    </section>
    <section name="historia" class="container-fluid">
        <h2 class="titulo">Resumo História</h2>
        <div class="container">
            <p>Genshin Impact se passa no mundo de Teyvat, um lugar de beleza deslumbrante e repleto de magia. A
                história
                começa com o protagonista, que é um(a) "Traveler" (viajante) em busca de seu(ua) irmão(ã)
                desaparecido(a).
                Durante sua jornada, o(a) Traveler encontra diversos personagens cativantes e se envolve em intrigas
                políticas,
                batalhas épicas e descobertas sobre os Sete, deuses que governam as diferentes regiões de Teyvat.
            </p>
        </div>
    </section>

    <!--JOGABILIDADE-->
    <section name="jogabilidade" class="container-fluid">
        <h2 class="titulo">Jogabilidade</h2>
        <div class="container">
            <fieldset>
                <p>Quanto à jogabilidade, Genshin Impact combina elementos de ação em tempo real com mecânicas de RPG.
                    Os
                    jogadores podem explorar um vasto mundo aberto, escalando montanhas, nadando em rios e voando com a
                    ajuda de
                    asas especiais. Durante a exploração, os jogadores podem coletar recursos, desbloquear pontos de
                    teletransporte e enfrentar inimigos em combate.</p>
                <p>O combate é dinâmico e estratégico, com os jogadores podendo alternar entre diferentes personagens
                    durante as
                    batalhas. Cada personagem possui habilidades únicas e elementos associados, como fogo, água, gelo,
                    vento,
                    entre outros. Os jogadores podem montar equipes com até quatro personagens e combinar suas
                    habilidades para
                    derrotar inimigos mais poderosos e resolver quebra-cabeças ambientais.</p>
                <p>Além disso, Genshin Impact apresenta um sistema de gacha, onde os jogadores podem gastar recursos
                    para tentar
                    desbloquear novos personagens, armas e itens. Isso adiciona uma camada de colecionismo e
                    personalização à
                    experiência de jogo, incentivando os jogadores a experimentar diferentes estratégias e formações de
                    equipe.
                </p>
            </fieldset>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/Pb0ugVuVMtY?si=FVYNzGIrVC4aPoh5"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    </section>

    <!--SESSÃO DOS PERSONAGENS-->
    <section class="container-fluid container-personagens">
        <!--QUADRO DO TiTULO -->
        <div class="container-fluid">
            <div class="quadro-titulo">
                <h2 class="titulo">personagens</h2>
            </div>
            <!--QUADRO DAS IMAGENS-->
            <div class="slider-wrapper">

                <!--BOTÃO-->
                <button id="prev-slide" class="slide-button material-symbols-rounded">
                    chevron_left
                </button>

                <!--IMAGENS DOS PERSONAGENS-->
                <ul class="image-list">
                    <!--VIAJANTE-->
                    <li class="item-a">
                        <div class="teste">
                            <div class="list">
                                <!--viajante-->
                                <div class="image-item">
                                    <img src="assets/imgs/viajante.png" alt="img-1" />

                                    <h3>VIAJANTE</h3>
                                    <div class="informacoes-personagem">
                                        <p href="#" class="tentativa"> No início de Genshin Impact, o Viajante é o
                                            protagonista. Dois gêmeos, uma garota e um garoto, são atacados por uma
                                            Deusa Desconhecida. Ela captura um dos gêmeos, deixa o outro desacordado e
                                            sela seus caminhos de viagem, aprisionando-os em Teyvat. O gêmeo acordado
                                            parte em uma jornada para encontrar o irmão/irmã perdido, acompanhado por
                                            Paimon.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!--DILUC-->
                    <li class="item-b">
                        <div class="teste">
                            <div class="list">
                                <div class="image-item">
                                    <img class="image-item" src="assets/imgs/Diluc.png" alt="img-2" />
                                    <h3>DILUC</h3>
                                    <div class="informacoes-personagem">
                                        <p href="#" class="tentativa">Nascido na influente Família Ragnvindr, Diluc é o
                                            atual proprietário do
                                            Adega do Alvorecer e um nobre de alta estima na sociedade de Mondstadt.
                                            Embora um incidente anterior
                                            o tenha levado a se separar dos Cavaleiros de Favonius, ele continua a
                                            proteger Mondstadt à sua
                                            própria maneira.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!--wriothesley-->
                    <li class="item-c">
                        <div class="teste">
                            <div class="list">
                                <div class="image-item">
                                    <img class="image-item" src="assets/imgs/Wriothesley.png" alt="img-3" />
                                    <h3>WRIOTHESLEY</h3>
                                    <div class="informacoes-personagem">
                                        <p href="#" class="tentativa">Wriothesley, Duque da Fortaleza Meropide, gerencia
                                            discretamente um local de exílio para criminosos submarinos. Ao ser elogiado
                                            por sua habilidade em resolver problemas, ele responde: "Eles buscavam
                                            refúgio. Eu lhes dei a 'tranquilidade' que precisavam".
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!--venti-->
                    <li class="item-d">
                        <div class="teste">
                            <div class="list">
                                <div class="image-item">
                                    <img class="image-item" src="assets/imgs/Venti.png" alt="img-4" />
                                    <h3>VENTI</h3>
                                    <div class="informacoes-personagem">
                                        <p href="#" class="tentativa">Venti é um bardo amante do vinho e de espírito
                                            livre em Mondstadt e o
                                            atual corpo mortal de Barbatos, o Arconte Anemo. Ele também é um personagem
                                            Anemo jogável em Genshin
                                            Impact.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!--zhongli-->
                    <li class="item-e">
                        <div class="teste">
                            <div class="list">
                                <div class="image-item">
                                    <img class="image-item" src="assets/imgs/Zhongli.png" alt="img-5" />
                                    <h3>ZHONGLI</h3>
                                    <div class="informacoes-personagem">
                                        <p href="#" class="tentativa">Zhongli é um consultor da Casa Funerária de
                                            Wangsheng que aparece pela
                                            primeira vez nas Missões do Arconte Capítulo 1, Ato 2: Corpos que Partiram
                                            para Longe.

                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!--shogun-raiden-->
                    <li class="item-f">
                        <div class="teste">
                            <div class="list">
                                <div class="image-item">
                                    <img class="image-item" src="assets/imgs/Shogun-Raiden.png" alt="img-6" />
                                    <h3>SHOGUN RAIDEN</h3>
                                    <div class="informacoes-personagem">
                                        <p href="#" class="tentativa">A Shogun Raiden é a composição de dois seres
                                            coexistindo em um só corpo:
                                            Ei, a atual Arconte Electro de Inazuma; e a Shogun, a marionete criada por
                                            Ei para atuar como
                                            governante de Inazuma em seu lugar.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!--nahida-->
                    <li class="item-g">
                        <div class="teste">
                            <div class="list">
                                <div class="image-item">
                                    <img class="image-item" src="assets/imgs/Nahida.png" alt="img-7" />
                                    <h3>NAHIDA</h3>
                                    <div class="informacoes-personagem">
                                        <p href="#" class="tentativa">Ela é o corpo mortal da Lorde Menor Kusanali,
                                            atual Arconte Dendro.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!--furina-->
                    <li class="item-h">
                        <div class="teste">
                            <div class="list">
                                <div class="image-item">
                                    <img class="image-item" src="assets/imgs/furina.png" alt="img-8" />
                                    <h3>FURINA</h3>
                                    <div class="informacoes-personagem">
                                        <p href="#" class="tentativa">Furina, a humanidade separada da Deusa da Justiça,
                                            liderou Fontaine como Arconte Hydro por 500 anos, seguindo planos para
                                            enganar os Princípios Celestiais e salvar a cidade de uma profecia. Após a
                                            morte dos Focalors e a destruição do Trono Divino, ela abandonou seu papel e
                                            vive como humana.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>


                    <!--<img class="image-item" src="images/img-9.jpg" alt="img-9" />
                    <img class="image-item" src="images/img-10.jpg" alt="img-10" />-->
                </ul>
                <button id="next-slide" class="slide-button material-symbols-rounded">
                    chevron_right
                </button>
            </div>

            <!--FUNCIONALIDADE DO DESLIZAMENTO-->
            <div class="slider-scrollbar">
                <div class="scrollbar-track">
                    <div class="scrollbar-thumb"></div>
                </div>
            </div>
    </section>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="./assets/js/script.js"></script>
</body>

</html>
