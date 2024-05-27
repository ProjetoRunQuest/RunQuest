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
                <span class='span-botao'><button onclick='redirecionar(this.value)' class='botao-banner' value='motorista'>Ser motorista</button></span>
                <span class="span-botao"><button  onclick='redirecionar()' class='botao-banner' value='passageiro'>Ser passageiro</button></span>
                </div>
            </div>
        </section>

        <!--como nós trabalhamos-->
        <section id="trabalhamos">
                <h1 class="titulo-trabalhos">Como nós trabalhamos</h1>

                <div class="container-cards container-animacao">
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
        <section id="runquest" class='container-animacao'>
            <div class="container-img">

            </div>
            <div class="container-conteudo">
                <h1 class="titulo-runquest">Por que a RunQuest?</h1>
                <p class="texto-runquest">A RunQuest é um sistema pensado diretamente nos usuários que visa a segurança, confiabilidade e efetividade do nosso produto. Portanto, contamos com tecnologias de última geração e que são amplamente utilizadas pelos líderes de mercado, aplicando sempre o nosso objetivo e cuidado para com o cliente, Fatecanos e funcionários de Fatecs que são gente como a gente! Também temos total transparência em relação as taxas cobradas em nosso projeto, assim como opções para que elas não ocorram, pois achamos de suma importância mantermos a meta inicial: Ser um projeto social que possa ter aplicabilidade à nossa sociedade, ajudando-a de alguma forma.</p>
            </div>
        </section>

        <!--Nossa equipe-->
        <section id="nossa-equipe" class='container-animacao'>
            <h1 class="titulo-equipe">Conheça nossa equipe</h1>

           <!-- Swiper -->
           <div class="slide-container swiper container-animacao">
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">
                    <div class="card swiper-slide">
                        <div class="card-content" id='conteudo-card'>
                            <img src="assets/img/matheusA.jfif" class="img-card" alt="imagem do nosso integrante, Matheus Abriz">
                            <div class="container-info">
                                <h1 class="titulo-card">Matheus Abriz</h1>
                                <p class="subtitulo-card">Desenvolvedor Front-end</p>
                                <p class="texto-card">Atuou na parte de desenvolvimento das interfaces visuais, utilizando o Figma como ferramenta principal. Também foi o líder responsável pelo desenvolvimento front-end, tirando do wireframe para o real.</p>
                            </div>
                        </div>
                    </div>

                    <div class="card swiper-slide">
                    <div class="card-content" id='conteudo-card'>
                            <img src="assets/img/alanN.jfif" class="img-card" alt="imagem do nosso integrante, matheus abriz">
                            <div class="container-info">
                                <h1 class="titulo-card">Alan Nogueira</h1>
                                <p class="subtitulo-card">Desenvolvedor Back-end</p>
                                <p class="texto-card">Atuou no desenvolvimento back-end do projeto, criando verificações para o sistema agir com maior segurança e confiabilidade. Também realizou o CRUD(Create, Read, Update e Delete) de todos os usuários do sistema.</p>
                            </div>
                        </div>
                    </div>

                    <div class="card swiper-slide">
                    <div class="card-content" id='conteudo-card'>
                            <img src="assets/img/mayandersonS.jfif" class="img-card" alt="imagem do nosso integrante, Mayaderson Santos">
                            <div class="container-info">
                                <h1 class="titulo-card">Mayanderson Santos</h1>
                                <p class="subtitulo-card">Documentador</p>
                                <p class="texto-card">Atuou na documentação, sendo responsável pela padronização de nomenclaturas dos arquivos e diversas pesquisas, tanto de testes de uso quanto como de mercado, público alvo, etc.</p>
                            </div>
                        </div>
                    </div>

                    <div class="card swiper-slide">
                    <div class="card-content" id='conteudo-card'>
                            <img src="assets/img/henriqueM.jfif" class="img-card" alt="imagem do nosso integrante, Henrique Moroni">
                            <div class="container-info">
                                <h1 class="titulo-card">Henrique Moroni</h1>
                                <p class="subtitulo-card">Documentador</p>
                                <p class="texto-card">Atuou na documentação, sendo responsável pela padronização de nomenclaturas dos arquivos e diversas pesquisas, tanto de testes de uso quanto como de mercado, público alvo, etc.</p>
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
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="assets/js/animacao.js"></script>
<script src="assets/js/index.js"></script>
<script src="assets/js/header.js"></script>
</html>