<?php 
$is_index = 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="shortcut icon" href="assets/img/logo.svg" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <title>RunQuest</title>
</head>
<body>
    <!--menu-->
    <?php require_once 'header/header.php'?>

    <!--conteudo principal-->
    <main>
        <section id="banner">
            <div class="container-texto">
                <h1 class="banner-titulo">Faça parte você também!</h1>

                <div class="container-botao">
                <a href="#">Ser motorista</a>
                <a href="passageiro/passageiro.php">Ser passageiro</a>
                </div>
            </div>
        </section>

        <!--como nós trabalhamos-->
        <section id="trabalhamos">
                <h1 class="titulo-trabalhos">Como nós trabalhamos</h1>

                <div class="container-cards">
                    <div class="cards">

                    </div>
                    <div class="cards">

                    </div>
                    <div class="cards">

                    </div>
                    <div class="cards">

                    </div>
                </div>
        </section>

        <!--RunQuest-->
        <section id="runquest">
            <div class="container-img">

            </div>
            <div class="container-conteudo">
                <h1 class="titulo-runquest">Por que a RunQuest?</h1>
                <p class="texto-runquest">A RunQuest é um sistema pensado diretamente nos usuários que visa a segurança, confiabilidade e efetividade do nosso produto. Portanto, contamos com tecnologias de última geração e que são amplamente utilizadas pelos líderes de mercado, aplicando sempre o nosso objetivo e cuidado para com o cliente, Fatecanos e funcionários de Fatecs que são gente como a gente! Também temos total transparência em relação as taxas cobradas em nosso projeto, assim como opções para que elas não ocorram, pois achamos de suma importância mantermos a meta inicial: Ser um projeto social que possa ter aplicabilidade à nossa sociedade, ajudando-a de alguma forma.</p>
            </div>
        </section>

        <!--Nossa equipe-->
        <section id="nossa-equipe">
            <h1 class="titulo-equipe">Conheça nossa equipe</h1>

           <!-- Swiper -->
           <div class="slide-container swiper">
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">
                    <div class="card swiper-slide">
                        <div class="card-content" id='conteudo-card'>
                            <img src="assets/img/card-img1.png" class="img-card" alt="imagem do nosso integrante, matheus abriz">
                            <div class="container-info">
                                <h1 class="titulo-card">Matheus Abriz</h1>
                                <p class="subtitulo-card">Desenvolvedor Front-end</p>
                                <p class="texto-card">Lorem Ipsum is simply dummy text of the printing and  typesetting industry. Lorem Ipsum has been the industry's standard dummy  text ever since the 1500s, when an unknown printer took a galley of  type and scrambled it to make a type specimen book.</p>
                            </div>
                        </div>
                    </div>

                    <div class="card swiper-slide">
                    <div class="card-content" id='conteudo-card'>
                            <img src="assets/img/card-img1.png" class="img-card" alt="imagem do nosso integrante, matheus abriz">
                            <div class="container-info">
                                <h1 class="titulo-card">Alan Nogueira</h1>
                                <p class="subtitulo-card">Desenvolvedor Back-end</p>
                                <p class="texto-card">Lorem Ipsum is simply dummy text of the printing and  typesetting industry. Lorem Ipsum has been the industry's standard dummy  text ever since the 1500s, when an unknown printer took a galley of  type and scrambled it to make a type specimen book.</p>
                            </div>
                        </div>
                    </div>

                    <div class="card swiper-slide">
                    <div class="card-content" id='conteudo-card'>
                            <img src="assets/img/card-img1.png" class="img-card" alt="imagem do nosso integrante, matheus abriz">
                            <div class="container-info">
                                <h1 class="titulo-card">Mayanderson Santos</h1>
                                <p class="subtitulo-card">Documentador</p>
                                <p class="texto-card">Lorem Ipsum is simply dummy text of the printing and  typesetting industry. Lorem Ipsum has been the industry's standard dummy  text ever since the 1500s, when an unknown printer took a galley of  type and scrambled it to make a type specimen book.</p>
                            </div>
                        </div>
                    </div>

                    <div class="card swiper-slide">
                    <div class="card-content" id='conteudo-card'>
                            <img src="assets/img/card-img1.png" class="img-card" alt="imagem do nosso integrante, matheus abriz">
                            <div class="container-info">
                                <h1 class="titulo-card">Gabrielle Costa</h1>
                                <p class="subtitulo-card">Designer</p>
                                <p class="texto-card">Lorem Ipsum is simply dummy text of the printing and  typesetting industry. Lorem Ipsum has been the industry's standard dummy  text ever since the 1500s, when an unknown printer took a galley of  type and scrambled it to make a type specimen book.</p>
                            </div>
                        </div>
                    </div>

                    <div class="card swiper-slide">
                    <div class="card-content" id='conteudo-card'>
                            <img src="assets/img/card-img1.png" class="img-card" alt="imagem do nosso integrante, matheus abriz">
                            <div class="container-info">
                                <h1 class="titulo-card">Deivid Afonso</h1>
                                <p class="subtitulo-card">Desenvolvedor Back-end</p>
                                <p class="texto-card">Lorem Ipsum is simply dummy text of the printing and  typesetting industry. Lorem Ipsum has been the industry's standard dummy  text ever since the 1500s, when an unknown printer took a galley of  type and scrambled it to make a type specimen book.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
           </div>
        </section>
    </main>

    <!--FOOTER-->
    <?php require_once 'footer/footer.php' ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="assets/js/index.js"></script>
<script src="assets/js/header.js"></script>
</html>