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
                        <a href="perfil.php" class="opcoes-nav"><img src="../assets/img/foto-usuario.png" alt="foto usuario">Meu Perfil</a>
                        <a href="cadastro.php" class="opcoes-nav"><img src="../assets/img/cadastro-usuario.png" alt="icone cadastro">Meu Cadastro</a>
                        <a href="pagamentos.php" class="opcoes-nav"><img src="../assets/img/pagamento-usuario.png" alt="icone pagamentos">Meus Pagamentos</a>
                </div>
                <span class="barra-lateral-active"></span>

                <a onclick="sair();" class='logout-usuario'><img src="../assets/img/logout-usuario.png" alt="icone logout usuario"></a>
            </div>
            <div class="container-cadastro">
                <h1 class='titulo-cadastro'>Meu Cadastro</h1>
                <h2 class="subtitulo-cadastro">Configure o seu cadastro</h2>

                <div class="container-form-cadastro">
                    <h2 class="titulo-form">Dados da conta</h2>

                    <form action="#" class="form-cadastro">
                        <label for="nomeCadastro">Nome completo:</label>
                        <input type="text" name="nomeCadastro" id="nomeCadastro" class="input-cadastro mostraDados" placeholder="Digite seu nome...">

                        <label for="cpfCadastro">CPF/CNPJ</label>
                        <input type="text" name="cpfCadastro" id="cpfCadastro" class="input-cadastro mostraDados" placeholder="Digite seu cpf..." onkeyup="mascara(this, mascaraCPF)" maxlength="14">

                        <label for="senhaCadastro">Senha Atual:</label>
                        <input type="text" name="senhaCadastro" id="senhaCadastro" class="input-cadastro mostraDados" disabled>

                        <label for="nova-senha">Nova Senha:</label>
                        <input type="password" name="nova-senha" id="nova-senha" class="input-cadastro input-nova-senha" placeholder="Digite uma nova senha...">
                        <span class="nova-senha" onclick='senha(0)'></span>

                        <label for="confirmar-senha">Confirmar Senha:</label>
                        <input type="password" name="confirmar-senha" id="confirmar-senha" class="input-cadastro input-confirmar-senha" placeholder="Confirme a nova senha...">
                        <span class="confirmar-senha" onclick='senha(1)'></span>
                        <span class='span-botao'><button type='submit' class='btn-cadastro' value='motorista' onclick="alterarDados();">Salvar Alterações</button></span>
                        
                    </form>
                </div>
            </div>

            <div class="container-info">
                <div class="container-email">
                    <p class="texto-info mostraDados">E-mail: matheus.abriz@gmail.com</p>
                    <button class='botao-info' value = 'email' onclick="abrirModal(this.value)">Alterar</button>
                    <button class="botao-info">Excluir</button>
                </div>
                <div class="container-telefone">
                    <p class="texto-info mostraDados">Telefone: (11) 98825-7303</p>
                    <button class="botao-info" value='telefone' onclick="abrirModal(this.value)">Alterar</button>
                    <button class="botao-info">Excluir</button>
                </div>
            </div>

            <div class="container-endereco">
                <h1 class="titulo-endereco">Endereços</h1>
                <div class="container-form">
                    <span class="span-alterar"><button class="botao-info" value="endereco" onclick="abrirModal(this.value)">Alterar</button></span>
                    <span class="span-excluir"><button class="botao-info">Excluir</button></span>
                    <div class="container-form-texto">
                        <p class='texto-endereco mostraDados'>Rua Icaturama, 385</p>
                        <p class="subtexto-endereco bairro-endereco mostraDados">Cidade Ademar</p>
                        <p class="subtexto-endereco cidade-endereco mostraDados">São Paulo, SP</p>
                    </div>
                </div>
                <button class="botao-endereco" value='endereco' onclick="abrirModal(this.value)">Adicionar Endereço</button>
            </div>
        </section>
    </main>

    <!--MODAL FORMULARIO ENDERECO-->
    <div class="modal-endereco">
    <span class="fechar-modal"><button class="botao-fechar-modal" value = 'endereco' onclick="fecharModal(this.value)">X</button></span>
    <form action="#" class="form-cadastro">
        <label for="endereco">Endereço:</label>
        <input type="text" name="endereco" id="enderecoCadastro" class="input-cadastro mostraDados" placeholder="Digite seu endereço...">

        <label for="complemento">Complemento:</label>
        <input type="text" name="complemento" id="complementoCadastro" class="input-cadastro mostraDados" placeholder="Digite seu complemento...">

        <label for="cidade">Cidade:</label>
        <input type="text" name="cidade" id="cidadeCadastro" class="input-cadastro mostraDados" placeholder="Digite sua cidade...">

        <span class='span-botao'><button type='submit' class='btn-cadastro' onclick="alterarDados2();">Salvar Alterações</button></span>
    </form>
    </div>

    <!--MODAL FORMULARIO EMAIL/TELEFONE-->
    <div class="modal-email-telefone">
    <span class="fechar-modal"><button class="botao-fechar-modal" value = 'email' onclick="fecharModal(this.value)">X</button></span>
    <form action="#" class="form-cadastro">
        <label for="complemento">Email:</label>
        <input type="email" name="email" id="emailCadastro" class="input-cadastro mostraDados" placeholder="Digite seu email...">

        <label for="endereco">Telefone:</label>
        <input type="text" name="telefone" id="telefoneCadastro" class="input-cadastro mostraDados" placeholder="Digite seu telefone..." onkeyup="mascara(this, mascaraTelefone)" maxlength="15">
        <span class='span-botao'><button type='submit' class='btn-cadastro' onclick="alterarDados3();">Salvar Alterações</button></span>
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