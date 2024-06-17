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
                        <h1 class="titulo-card">Quem somos?</h1>
                        <p class="texto-card">A plataforma RunQuest é um sistema inovador que conecta membros da comunidade da FATEC, permitindo-lhes compartilhar caronas de forma fácil e conveniente para o campus e para casa. Funciona de maneira semelhante aos aplicativos de transporte populares, como Uber e 99, fornecendo uma solução adaptada às necessidades específicas da comunidade acadêmica. Além disso, oferece mais exclusividade, conectando os usuários de forma mais direta e personalizada.</p>                        
                    </div>

                <div class="cards">
                    <!-- Swiper -->
                <div class="slide-container swiper trabalhamos-slide-container">
                    <div class="trabalhamos-slide-content">
                        <div class="card-wrapper swiper-wrapper">
                            <div class="swiper-slide">
                                <h1 class="titulo-card">Problemas do dia a dia</h1>
                                    <p class="texto-card">É perceptível que o sistema de transporte público em nosso país está enfrentando desafios consideráveis atualmente. Ao conduzirmos um estudo de caso, identificamos diversos problemas comuns enfrentados diariamente pelos cidadãos, entre eles:</p>
                                    <ul>
                                        <li class="texto-card">Atrasos e inconsistências no transporte</li>
                                        <li class="texto-card">Superlotação</li>
                                        <li class="texto-card">Custo elevado</li>
                                        <li class="texto-card">Falta de acessibilidade</li>
                                        <li class="texto-card">Segurança</li>
                                        <li class="texto-card">Rotas inadequadas</li>
                                    </ul>
                            </div>

                            <div class="swiper-slide">
                            <h1 class="titulo-card">Atrasos e inconsistências no transporte</h1>
                                <p class="texto-card">Os estudantes muitas vezes enfrentam atrasos nos horários dos ônibus, trens ou metrôs, complicando sua rotina diária. Esses atrasos podem resultar em chegadas tardias às aulas ou compromissos importantes na universidade. A imprevisibilidade dos horários de transporte causa stress e frustração, afetando negativamente a pontualidade. Além disso, a espera prolongada nos pontos de parada aumenta o tempo total de viagem. A falta de confiabilidade nos serviços de transporte público prejudica a organização do dia a dia dos estudantes.</p>
                            </div>

                            <div class="swiper-slide">
                            <h1 class="titulo-card">Superlotação</h1>
                                <p class="texto-card">Os veículos de transporte público frequentemente ficam superlotados durante os horários de pico, causando desconforto aos estudantes. A superlotação torna difícil encontrar um lugar para sentar, forçando muitos a viajar em pé em condições apertadas. Além disso, o acesso aos pontos de embarque e desembarque fica dificultado, resultando em atrasos e transtornos. Esse ambiente desconfortável e congestionado aumenta o stress e a exaustão, especialmente para aqueles que têm longos trajetos diários. A falta de espaço adequado também pode levar a situações de segurança comprometida, agravando ainda mais a experiência dos usuários do transporte público.</p>
                            </div>

                            <div class="swiper-slide">
                            <h1 class="titulo-card">Custo elevado</h1>
                                <p class="texto-card">Para alguns estudantes, os custos recorrentes do transporte público podem representar um fardo financeiro significativo. Esse problema é ainda mais grave quando são necessárias várias viagens por dia ou semana, aumentando as despesas mensais. O impacto financeiro pode limitar a capacidade dos estudantes de utilizar o transporte público regularmente, forçando-os a buscar alternativas menos convenientes. Além disso, esses gastos podem reduzir o orçamento disponível para outras necessidades essenciais, como alimentação e material acadêmico.</p>
                            </div>

                            <div class="swiper-slide">
                            <h1 class="titulo-card">Falta de acessibilidade</h1>
                                <p class="texto-card">Alguns sistemas de transporte público podem não ser acessíveis para pessoas com mobilidade reduzida, dificultando o deslocamento desses estudantes. A falta de rampas, elevadores e veículos adaptados torna o trajeto até a universidade desafiador. Além disso, a ausência de sinalização adequada e de apoio para cadeirantes agrava a situação. Em muitas cidades, a infraestrutura de transporte não atende às necessidades específicas dessas pessoas, limitando sua independência. Esse cenário exige que os estudantes com mobilidade reduzida dependam de terceiros para se deslocarem, impactando sua autonomia e acesso à educação.</p>
                            </div>

                            <div class="swiper-slide">
                                <h1 class="titulo-card">Segurança</h1>
                                <p class="texto-card">A segurança é uma preocupação crucial para muitos estudantes ao utilizarem o transporte público. Dependendo da localização e do horário, eles podem se sentir inseguros, especialmente durante a noite. Certas áreas têm índices mais elevados de criminalidade, aumentando o medo. A iluminação pública inadequada em pontos de parada ou estações agrava a sensação de vulnerabilidade. A presença de indivíduos suspeitos ou comportamentos inadequados também contribui para a insegurança. Em horários noturnos, a menor frequência de ônibus e trens leva a longas esperas em locais potencialmente perigosos, fazendo com que muitos se sintam expostos a riscos.</p>
                            </div>

                            <div class="swiper-slide">
                                <h1 class="titulo-card">Rotas inadequadas</h1>
                                <p class="texto-card">Algumas áreas podem ter rotas de transporte público mal planejadas ou insuficientes, complicando o deslocamento dos estudantes. Essas rotas mal estruturadas podem aumentar significativamente o tempo de viagem, exigindo múltiplas transferências entre diferentes linhas. Isso torna o processo de chegar à universidade mais complexo e demorado, causando frustração e desgaste. A falta de conexões diretas e a frequência irregular dos serviços agravam a situação, obrigando os estudantes a planejar suas viagens com antecedência excessiva.</p>
                            </div>
                        </div>
                    </div>
                    <div class="trabalhamos-swiper-button-next swiper-button-next"></div>
                    <div class="trabalhamos-swiper-button-prev swiper-button-prev"></div>
                    <div class="trabalhamos-swiper-pagination"></div>
           </div>
                </div>

                    <div class="cards">
                        <h1 class="titulo-card">Solução</h1>
                        <p class="texto-card">Plataformas de transporte como Uber e 99 surgiram para oferecer uma solução conveniente e eficiente para conectar motoristas e passageiros, abordando problemas como a falta de disponibilidade de táxis, falta de transparência nos preços e inconveniências no transporte urbano. Logo, a RunQuest, um projeto semelhante focado na comunidade da FATEC, pode contribuir para o transporte de maneiras diversas. Ao invés de competir com plataformas existentes, ela busca agregar valor à comunidade, especialmente atendendo a uma classe específica de estudantes e funcionários que enfrenta atrasos no transporte e mobilidade.</p>
                    </div>
                    <div class="cards">
                        <h1 class="titulo-card">Conclusão</h1>
                            <p class="texto-card">O projeto RunQuest oferece uma solução inovadora e sustentável para a mobilidade urbana na FATEC, alinhando-se com os Objetivos de Desenvolvimento Sustentável (ODS) da ONU. Ao promover o compartilhamento de caronas, o projeto contribui para o crescimento econômico (ODS 8.1), a eficiência dos recursos (ODS 8.4) e a inclusão social (ODS 8.6). Ao oferecer uma alternativa acessível e eficiente de transporte, o RunQuest visa a redução das disparidades de acesso e oportunidades, promovendo um futuro mais sustentável e equitativo para a comunidade da FATEC.</p>
                    </div>
                </div>
        </section>

        <!--RunQuest-->
        <section id="runquest" class='container-animacao'>
            <div class="container-img">
                <img src="assets/img/img-teste.svg" alt="imagem logo">
            </div>
            <div class="container-conteudo">
                <h1 class="titulo-runquest">Por que a RunQuest?</h1>
                <p class="texto-runquest">A RunQuest é um sistema pensado diretamente nos usuários que visa a segurança, confiabilidade e efetividade do nosso produto. Portanto, contamos com tecnologias de última geração e que são amplamente utilizadas pelos líderes de mercado, aplicando sempre o nosso objetivo e cuidado para com o cliente, Fatecanos e funcionários de Fatecs que são gente como a gente! Também temos total transparência em relação as taxas cobradas em nosso projeto, assim como opções para que elas não ocorram, pois achamos de suma importância mantermos a meta inicial: Ser um projeto social que possa ter aplicabilidade à nossa sociedade, ajudando-a de alguma forma.</p>
            </div>
        </section>

                <!--Faça uma corrida-->
                <section id="corrida" class='container-animacao'>
            <h1 class="titulo-corrida">Faça uma corrida conosco!</h1>
            <div class="container-img-corrida">
                <img src="assets/img/img-corrida.svg" alt="imagem svg de um carro para simular uma corrida">
            </div>
            <div class="container-conteudo">
            <span class='span-botao span-botao-corrida'><a href="corrida/pedir-corrida.php"><button class='botao-banner botao-corrida' value='corrida'>Faça sua corrida</button></a></span>
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
            <div class="swiper-button-next equipe-swiper-button-next"></div>
            <div class="swiper-button-prev equipe-swiper-button-prev"></div>
            <div class="swiper-pagination equipe-swiper-pagination"></div>
           </div>
        </section>
    </main>

    <!--FOOTER-->
    <?php require_once 'footer/footer.php' ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="assets/js/motoristaCrud.js"></script>
<script src="assets/js/passageiroCrud.js"></script>
<script src="assets/js/animacao.js"></script>
<script src="assets/js/index.js"></script>
<script src="assets/js/header.js"></script>
</html>