<?php 
$is_index = 2;
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <link rel="stylesheet" href="../assets/css/passageiro.css">
    <link rel="shortcut icon" href="../assets/img/logo.svg" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/swiper-bundle.min.css">
    <title>Passageiro</title>
</head>
<body onload="local()">
    <!--MENU-->
    <?php require_once '../header/header.php'; 
    ?>

    <main>
        <section id="form">
            <div class="container-content">
                <h1 class="titulo-form">Passageiro</h1>
                <div class="container-botoes">
                    <a class="botao-passageiro" id="botao-cadastro" onclick="abrirCadastro();">Cadastro</a>
                    <a class="botao-passageiro" id="botao-login" onclick="abrirLogin()">Login</a>
                </div>
                <!--FORMULARIO DE CADASTRO-->
                <div class="container-conteudo">
                    <div class="container-form">
                        <div class="container-info">
                            <label for="nome">Nome:</label>
                            <input type="text" name="nome" class="form-input" id="nome" placeholder='Digite seu nome...'>
                            <input type="hidden" name="hidden" value="0" id="tipoCliente">

                            <label for="email">E-mail:</label>
                            <input type="email" name="email" class="form-input" placeholder='Digite seu email...' id="email">
                            
                            <label for="nome">Senha:</label>
                            <input type="password" name="senha" class="form-input" placeholder='Digite sua senha...' id="senha">

                            <label for="cpf">CPF:</label>
                            <input type="text" name="cpf" class="form-input" placeholder='Digite seu CPF...' id="cpf" maxlength="14" onkeyup="mascara(this, mascaraCPF)">

                            
                            <label for="telefone">Telefone:</label>
                            <input type="text" name="telefone" class="form-input" placeholder='Digite seu telefone...' id="telefone" maxlength="15" onkeyup="mascara(this, mascaraTelefone)">
                        </div>
                        
                        <div class="container-info">
                            <label for="endereco">Endereço:</label>
                            <input type="text" name="endereco" class="form-input" placeholder='Digite seu endereço...' id="endereco">

                            
                            <label for="complemento">Complemento:</label>
                            <input type="text" name="complemento" class="form-input" placeholder='Digite o complemento...' id="complemento">
                            
                            <label for="estado">Estado:</label>
                            <select name="estado" id="estado">
                                <option value="SaoPaulo" selected class='selecao'>São Paulo</option>
                                <option value="RioDeJaneiro" class='selecao'>Rio de Janeiro</option>
                                <option value="EspiritoSanto" class='selecao'>Espírito Santo</option>
                            </select>

                            <label for="cidade">Cidade:</label>
                            <input type="text" name="cidade" class="form-input" placeholder='Digite sua cidade...' id="cidade">

                            <button onclick='cadastrarPassageiro();'>Cadastrar</button>
                        </div>

                    </div>
                    <!--FORMULARIO DE LOGIN-->
                    <div class="container-form-login">
                        <div class="container-info">
                            <label for="emailLogin">Email:</label>
                            <input type="email" name="emailLogin" id="emailLogin" placeholder="Digite seu email..." class="form-input">

                            <label for="senhaLogin">Senha:</label>
                            <input type="password" name="senhaLogin" id="senhaLogin" placeholder="Digite sua senha...">
                            <button onclick="logarPassageiro();">Logar</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php require_once '../footer/footer.php' ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="../assets/js/header.js"></script>
    <script src="../assets/js/crud.js"></script>
    <script src="../assets/js/passageiro.js"></script>
</body>
</html>