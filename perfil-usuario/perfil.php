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
    <link rel="stylesheet" href="../assets/css/perfil.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <link rel="shortcut icon" href="../assets/img/logo.svg" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/swiper-bundle.min.css">
    <title>Meu Perfil</title>
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
                        <a href="perfil.php" class="opcoes-nav"><img src="../assets/img/foto-usuario.png" alt="foto usuario">Meu Perfil</a>
                        <a href="cadastro.php" class="opcoes-nav"><img src="../assets/img/cadastro-usuario.png" alt="icone cadastro">Meu Cadastro</a>
                        <a href="pagamentos.php" class="opcoes-nav"><img src="../assets/img/pagamento-usuario.png" alt="icone pagamentos">Meus Pagamentos</a>
                </div>
                <span class="barra-lateral-active"></span>

                <a onclick="sair();" class='logout-usuario'><img src="../assets/img/logout-usuario.png" alt="icone logout usuario"></a>
            </div>
            <div class="container-perfil">
                <h1 class='titulo-perfil'>Meu Perfil</h1>
                <h2 class="subtitulo-perfil">Configure o seu perfil</h2>

                <div class="container-form-cadastro">
                    <h2 class="titulo-form">Dados do seu perfil</h2>

                    <form action="#" class="form-cadastro">
                        <img src="../assets/img/img-usuario.png" alt="foto do usuario" class="img-perfil">
                        <button class="botao-info" value='perfil' onclick="abrirModal(this.value)">Alterar Foto de Perfil</button>
                        <button class="botao-info" value='deletarConta' onclick="deletarPassageiro();">Deletar Conta</button>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <!--MODAL FORMULARIO FOTO DE PERFIL-->
    <div class="modal-endereco">
    <span class="fechar-modal"><button class="botao-fechar-modal" value = 'perfil' onclick="fecharModal(this.value)">X</button></span>
    <form action="#" class="form-cadastro">
        <label for="perfil" class='botao-upload'>Upload Foto</label>
        <span class='span-botao'><button type='submit' class='btn-cadastro'>Salvar Alterações</button></span>
    </form>
    </div>
    <!--Footer-->
    <?php 
    require_once '../footer/footer.php';
    ?>
</body>
    <script src="../assets/js/motoristaCrud.js"></script>
    <script src="../assets/js/passageiroCrud.js"></script>
    <script src="../assets/js/perfil-usuario.js"></script>
    <script src="../assets/js/header.js"></script>
</html>