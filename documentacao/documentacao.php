<?php 
$is_index = 2;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <link rel="shortcut icon" href="../assets/img/logo.svg" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/documentacao.css">
    <title>Documentação</title>
</head>
<body>
<!--header-->
<?php require_once '../header/header.php'?>

<!--OBJETIVO RUNQUEST-->
<section id="objetivo" class='container-animacao'>
    <h1 class="titulo-objetivo">Objetivo do Projeto</h1>
    <p class="texto-objetivo">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio nihil debitis, aperiam expedita laboriosam voluptates. Iste beatae consequuntur facere tempora harum quas, delectus quisquam minus. Consequuntur odio tempora rerum officia Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, quasi? Facilis tempore dicta quod, maxime cumque libero saepe cupiditate a eius! Id fuga minima aspernatur magni sunt quaerat vero reiciendis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi ad accusamus aliquam dolor. Ducimus suscipit pariatur magni eaque nulla! Nulla vero tempore veniam esse voluptas quod ex, tempora exercitationem facere! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo perspiciatis sapiente corrupti dolores, cupiditate, animi soluta porro dignissimos aspernatur vel minus, praesentium nostrum ratione quod in tenetur blanditiis ex pariatur. Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, tenetur enim qui, autem rem officiis voluptates voluptatum dolores reprehenderit earum itaque quo numquam. Dolores possimus ut qui, veniam rerum animi! Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, impedit. Laborum, aperiam perspiciatis nostrum, perferendis quam sint vitae adipisci ab nulla incidunt sapiente harum, amet corrupti molestias ex recusandae earum.</p>

    <div class="container-pdf">
    <embed src="../assets/docs/PojetoItegrador3entrega.pdf" type="application/pdf" width='100%' height='100%'>
    </div>
</section>


<!--AGRADECIMENTOS-->
<section id="agradecimentos" class='container-animacao'>
    <h1 class="titulo-agradecimentos">Agradecimentos</h1>
    <p class="texto-agradecimentos">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore voluptatum similique architecto doloribus sequi aspernatur dignissimos praesentium tempora repudiandae nihil quis ab autem, accusamus dolorem officia fuga natus labore neque. Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci aliquid eum qui excepturi ea. Maxime repellendus aut suscipit sint animi id quibusdam modi? Neque blanditiis animi id, natus temporibus eveniet. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam repellendus vero eius mollitia expedita itaque officia, soluta, asperiores odit iste quod sed enim nam fugiat! Molestias voluptate quaerat eos iste? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas harum esse illum velit impedit totam incidunt in accusamus rerum, exercitationem dolores nulla, quidem repellat laudantium cumque dolorum sint amet repudiandae? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde tempora ullam, quis sunt laboriosam quod corrupti illum et vitae, nisi quas optio ut, voluptas excepturi delectus fugit maxime deleniti officiis.</p>
</section>

<!--Footer-->
<?php require_once '../footer/footer.php'?>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
<script src="assets/js/animacao.js"></script>
<script src="assets/js/header.js"></script>
</body>
</html>