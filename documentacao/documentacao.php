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
    <p class="texto-objetivo">O projeto visa desenvolver e implementar uma plataforma de compartilhamento de caronas específica para a comunidade da FATEC, com o objetivo de melhorar a mobilidade acadêmica. A proposta é incentivar o compartilhamento de caronas para reduzir a quantidade de veículos nas estradas, promover a conexão entre as pessoas, criar oportunidades de interações pessoais positivas e ampliar o networking entre os membros da comunidade. Além disso, busca contribuir com a economia de tempo e despesas de transporte, tornando o acesso à educação mais acessível e promovendo uma cultura de sustentabilidade.</p>
    <p class="texto-objetivo">
    Para atingir esses objetivos, o projeto foca inicialmente no desenvolvimento de uma interface de usuário intuitiva e atraente para engajar mais pessoas na plataforma. Em seguida, será implementada a funcionalidade de registro de usuários, permitindo que estudantes, professores e funcionários possam se cadastrar facilmente. A integração de sistemas de geolocalização permitirá que os usuários solicitem ou ofereçam caronas com base em sua localização atual, enquanto um sistema de avaliação e comentários garantirá a segurança e a confiabilidade das caronas.
    </p>
    <p class="texto-objetivo">O projeto também incluirá a realização de testes de usabilidade para assegurar uma experiência satisfatória para os usuários e documentar resultados para futuras melhorias. Além disso, a integração com APIs de terceiros permitirá recursos de compartilhamento nas redes sociais, ampliando a divulgação e adoção da plataforma. Por fim, será preparado material de marketing, incluindo imagens e textos descritivos, para o lançamento oficial do aplicativo, atraindo e engajando os membros da comunidade da FATEC.
    A organização dos objetivos segue uma sequência lógica, começando pelo desenvolvimento da interface de usuário e registro de usuários, passando pela implementação das funcionalidades essenciais do aplicativo, realização de testes de usabilidade, integração com APIs de terceiros, e culminando na preparação para o lançamento oficial. Essa abordagem sequencial garante que cada etapa seja concluída antes de prosseguir para a próxima, proporcionando um fluxo de trabalho eficiente e ordenado. Este projeto, portanto, não só visa melhorar a mobilidade da comunidade acadêmica da FATEC, mas também promover uma cultura de sustentabilidade e interação social, tornando o acesso à educação mais acessível e eficiente.</p>

    <div class="container-pdf">
    <embed src="../assets/docs/projetoIntegradorFinal.pdf" type="application/pdf" width='100%' height='100%'>
    </div>
</section>


<!--AGRADECIMENTOS-->
<section id="agradecimentos" class='container-animacao'>
    <h1 class="titulo-agradecimentos">Agradecimentos</h1>
    <p class="texto-agradecimentos">Gostaríamos de expressar nossa profunda gratidão à FATEC Diadema e a todos os professores que nos apoiaram ao longo do desenvolvimento do Projeto Runquest. Sem a colaboração, orientação e suporte incansáveis de cada um de vocês, este projeto não teria sido possível.</p>
    <p class="texto-agradecimentos">
    A FATEC Diadema tem sido um pilar fundamental para a realização de nossas ideias e objetivos. A estrutura fornecida, junto com o ambiente acadêmico estimulante, permitiu-nos explorar, inovar e alcançar novas metas. Agradecemos pela oportunidade de fazer parte desta instituição que promove a excelência e o desenvolvimento contínuo.
    </p>
    <p class="texto-agradecimentos">
    Aos professores envolvidos no Projeto Runquest, nossa admiração e reconhecimento. Suas orientações foram cruciais para superar os desafios que encontramos ao longo do caminho. A paciência, o conhecimento compartilhado e a dedicação de vocês inspiraram-nos a dar o nosso melhor e a acreditar na importância e no impacto de nosso trabalho.
    </p>
    <p class="texto-agradecimentos">
    O sucesso do Projeto Runquest é um reflexo direto do apoio inestimável que recebemos da FATEC Diadema e de seus brilhantes educadores. Este agradecimento é apenas uma pequena demonstração da nossa imensa gratidão por tudo que fizeram por nós. Muito obrigado!
    </p>
</section>

<!--Footer-->
<?php require_once '../footer/footer.php'?>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
<script src="../assets/js/header.js"></script>
<script src="../assets/js/animacao.js"></script>
<script src="../assets/js/motoristaCrud.js"></script>
<script src="../assets/js/passageiroCrud.js"></script>




</body>
</html>