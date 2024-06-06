<?php $is_index = 2 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/pagamentos.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <link rel="shortcut icon" href="../assets/img/logo.svg" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/swiper-bundle.min.css">
    <title>Meus pagamentos</title>
</head>
<body>
    <!--HEADER-->
    <?php require_once '../header/header.php'?>
    
    <!--ÁREA DE DADOS-->
    <section id="container-dados">
        <div class="barra-lateral">
            <div class="container-teste">
                <a href="perfil.php" class="opcoes-nav"><img src="../assets/img/foto-usuario.png" alt="foto usuario">Meu Perfil</a>
                <a href="cadastro.php" class="opcoes-nav"><img src="../assets/img/cadastro-usuario.png" alt="icone cadastro">Meu Cadastro</a>
                <a href="pagamentos.php" class="opcoes-nav"><img src="../assets/img/pagamento-usuario.png" alt="icone pagamentos">Meus Pagamentos</a>
            </div>
            <span class="barra-lateral-active"></span>
            <a href="#" class="logout-usuario"><img src="../assets/img/logout-usuario.png" alt="icone logout usuario"></a>
        </div>
        <div class="container-conteudo-pagamento">
            <h1 class="titulo-pagamento">Meus pagamentos</h1>
            <h2 class="subtitulo-pagamento">Configure o seu pagamento</h2>
            <div class="container-form-pagamento">
            <h2 class="titulo-form">Dados do cartão</h2>

            <form action="#" class="form-pagamento">
                <label for="nome">Nome inscrito:</label>
                <input type="text" name="nome" id="nome" class="input-cadastro" disabled>

                <label for="numero-cartao">Número do cartão:</label>
                <input type="text" name="numero-cartao" id="numero-cartao" class="input-cadastro" disabled>

                <label for="senha-atual">Senha Atual:</label>
                <input type="password" name="senha-atual" id="senha-atual" class="input-cadastro" disabled>

                <label for="cpf">CPF do titular:</label>
                <input type="text" name="cpf" id='cpf' class="input-cadastro" disabled>

                <div class="container-cartao">
                    <div class="container-codigo">
                        <label for="cvv">Código de segurança(CVV):</label>
                        <input type="text" name="cvv" id="cvv" class="input-cadastro" disabled>
                    </div>

                    <div class="container-validade">
                        <label for="validade">Validade:</label>
                        <input type="text" name="validade" id="validade" class='input-cadastro' disabled>
                    </div>
                </div>
                <span class='span-botao'><button type='submit' class='btn-cadastro' value='motorista'>Excluir Alterações</button></span>
            </form>
            </div>
</div>

            
        <div class="container-pagamento">
            <div class="container-form-pagamento container-cartao-pagamento">
                <h1 class='titulo-pagamento'>Nenhum cartão cadastrado!</h1>
                <h2 class="subtitulo-pagamento">Cadastre um agora</h2>
                <div class="container-cartao-info">
                    <img src="../assets/img/img-cartao.png" alt="imagem cartao" class='img-cartao'>

                    <span class="span-botao span-botao-cadastrar"><button type="submit" class="btn-cadastro" value = 'cartao' onclick="abrirModal(this.value)">Cadastrar Cartão</button></span>
                </div>
            </div>

            <span class="span-botao span-botao-cadastrar"><button type="submit" class="btn-cadastro">Cadastrar Cartão</button></span>
        </div>
    </section>

    <!--MODAL FORMULARIO CARTAO-->
    <div class="modal-cartao">
        <span class="fechar-modal"><button class="botao-fechar-modal" value = 'cartao' onclick="fecharModal(this.value)">X</button></span>
        <form action="#" class="form-pagamento">
                <label for="modal-nome">Nome inscrito:</label>
                <input type="text" name="nome" id="modal-nome" class="input-cadastro" placeholder="Digite o nome inscrito...">

                <label for="modal-numero-cartao">Número do cartão:</label>
                <input type="text" name="numero-cartao" id="modal-numero-cartao" class="input-cadastro" placeholder="Digite o número do cartão...">

                <label for="modal-cpf">CPF do titular:</label>
                <input type="text" name="cpf" id='modal-cpf' class="input-cadastro" placeholder="Digite seu CPF..." onkeyup="mascara(this, mascaraCPF)" maxlength="14">

                <div class="container-cartao">
                    <div class="container-codigo">
                        <label for="modal-cvv">Código de segurança(CVV):</label>
                        <input type="text" name="cvv" id="modal-cvv" class="input-cadastro" placeholder="xxx" onkeyup="mascara(this, cvv)" maxlength = '3'>
                    </div>

                    <div class="container-validade">
                        <label for="modal-validade">Validade:</label>
                        <input type="text" name="validade" id="modal-validade" class='input-cadastro' placeholder="xx/xx">
                    </div>
                </div>
                <span class='span-botao'><button type='submit' class='btn-cadastro' value='motorista'>Cadastrar Cartão</button></span>
            </form>
        </div>
    <!--FOOTER-->
    <?php require_once '../footer/footer.php'?>
</body>
    <script src="../assets/js/pagamentos.js"></script>
    <script src="../assets/js/header.js"></script>
</html>