<button?php 
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
                        <span class='span-botao'><button type='submit' class='btn-cadastro' value='motorista'>Salvar Alterações</button></span>
                    </form>
                </div>
            </div>

            <div class="container-info">
                <div class="container-email">
                    <p class="texto-info">E-mail: matheus.abriz@gmail.com</p>
                    <button class='botao-info'>Alterar</button>
                </div>
                <div class="container-telefone">
                    <p class="texto-info">Telefone: (11) 98825-7303</p>
                    <button class="botao-info">Alterar</button>
                </div>
            </div>

            <div class="container-endereco">
                <h1 class="titulo-endereco">Endereços</h1>
                <div class="container-form">
                    <span><button class="botao-info" value="endereco" onclick="abrirModal(this.value)">Alterar</button></span>
                    <div class="container-form-texto">
                        <p class='texto-endereco'>Rua Icaturama, 385</p>
                        <p class="subtexto-endereco bairro-endereco">Cidade Ademar</p>
                        <p class="subtexto-endereco cidade-endereco">São Paulo, SP</p>
                        <p class="subtexto-endereco cep-endereco">04404-120</p>
                    </div>
                </div>
                <button class="botao-endereco">Adicionar Endereço</button>
                <button class="botao-endereco">Remover Endereço</button>
            </div>
        </section>
    </main>

    <!--MODAL FORMULARIO ENDERECO-->
    <div class="modal-endereco">
    <span class="fechar-modal"><button class="botao-fechar-modal" value = 'endereco' onclick="fecharModal(this.value)">X</button></span>
    <form action="#" class="form-cadastro">
        <label for="endereco">Endereço:</label>
        <input type="text" name="endereco" id="endereco" class="input-cadastro" placeholder="Digite seu endereço...">

        <label for="complemento">Complemento:</label>
        <input type="text" name="complemento" id="complemento" class="input-cadastro" placeholder="Digite seu complemento...">

        <label for="cidade">Cidade:</label>
        <input type="text" name="cidade" id="cidade" class="input-cadastro" placeholder="Digite sua cidade...">

        <label for="cep">Cep:</label>
        <input type="text" name="cep" id="cep" class="input-cadastro" placeholder="Digite seu cep..."  maxlength="14" onkeyup="mascara(this, mascaraCPF)">

        <span class='span-botao'><button type='submit' class='btn-cadastro'>Salvar Alterações</button></span>
    </form>
    </div>

    <!--MODAL FORMULARIO EMAIL/TELEFONE-->

    <!--Footer-->
    <?php 
    require_once '../footer/footer.php';
    ?>
</body>
    <script src="../assets/js/perfil-usuario.js"></script>
    <script src="../assets/js/header.js"></script>
</html>