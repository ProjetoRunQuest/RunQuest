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
    <link rel="stylesheet" href="../assets/css/cadastro.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <link rel="shortcut icon" href="../assets/img/logo.svg" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/swiper-bundle.min.css">
    <title>Meu Cadastro</title>
</head>
<body>
    <!--Header-->
    <?php 
    require_once '../header/header.php';
    ?>

    <main>
        <!--Área de dados-->
        <section id="container-dados">
            <div class="barra-lateral">
                <div class="container-teste">
                        <a href="" class="opcoes-nav"><img src="../assets/img/foto-usuario.png" alt="foto usuario">Meu Perfil</a>
                        <a href="" class="opcoes-nav"><img src="../assets/img/cadastro-usuario.png" alt="icone cadastro">Meu Cadastro</a>
                        <a href="" class="opcoes-nav"><img src="../assets/img/pagamento-usuario.png" alt="icone pagamentos">Meus Pagamentos</a>
                        <a href="" class="opcoes-nav"><img src="../assets/img/seguranca-usuario.png" alt="icone seguranca e privacidade">Privacidade e segurança</a>
                </div>
                <span class="barra-lateral-active"></span>

                <a href="#" class='logout-usuario'><img src="../assets/img/logout-usuario.png" alt="icone logout usuario"></a>
            </div>
            <div class="container-cadastro">
                <h1 class='titulo-cadastro'>Meu Cadastro</h1>
                <h2 class="subtitulo-cadastro">Configure o seu cadastro</h2>

                <div class="container-form-cadastro">
                    <h2 class="titulo-form">Dados da conta</h2>

                    <form action="#" class="form-cadastro">
                        <label for="nome">Nome completo:</label>
                        <input type="text" name="nome" id="nome" class="input-cadastro" placeholder="Digite seu nome...">

                        <label for="cpf">CPF/CNPJ</label>
                        <input type="text" name="cpf" id="cpf" class="input-cadastro" placeholder="Digite seu cpf...">

                        <label for="senha-atual">Senha Atual:</label>
                        <input type="password" name="senha-atual" id="senha-atual" class="input-cadastro" disabled>

                        <label for="nova-senha">Nova Senha:</label>
                        <input type="password" name="nova-senha" id="nova-senha" class="input-cadastro" placeholder="Digite uma nova senha...">

                        <label for="confirmar-senha">Confirmar Senha:</label>
                        <input type="password" name="confirmar-senha" id="confirmar-senha" class="input-cadastro" placeholder="Confirme a nova senha...">
                        <span class='span-botao'><button type='submit' class='btn-cadastro' value='motorista'>Ser motorista</button></span>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <!--Footer-->
    <?php 
    require_once '../footer/footer.php';
    ?>
</body>
    <script src="../assets/js/perfil-usuario.js"></script>
    <script src="../assets/js/header.js"></script>
</html>