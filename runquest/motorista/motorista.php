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
    <link rel="stylesheet" href="../assets/css/motorista.css">
    <link rel="shortcut icon" href="../assets/img/logo.svg" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/swiper-bundle.min.css">
    <title>Passageiro</title>
</head>
<body onload="local()">
    <!--MENU-->
    <?php require_once '../header/header.php'; 
    ?>

    <main>
        <section id="form" class='container-animacao'>
            <div class="container-content">
                <h1 class="titulo-form">Motorista</h1>
                <div class="container-botoes">
                    <a class="botao-passageiro" id="botao-cadastro" onclick="abrirCadastro();">Cadastro</a>
                    <a class="botao-passageiro" id="botao-login" onclick="abrirLogin()">Login</a>
                </div>
                <!--FORMULARIO DE CADASTRO-->
                <div class="container-conteudo">
                    <div class="container-form">
                    <h1 class="titulo-cadastro">Informações pessoais</h1>
                        <div class="container-info">
                            <label for="nome">Nome:</label>
                            <input type="text" name="nome" class="form-input" id="nome" placeholder='Digite seu nome...'>
                            <input type="hidden" name="hidden" value="0" id="tipoCliente">
                        </div>
                        <div class="container-info">
                            <label for="email">E-mail:</label>
                            <input type="email" name="email" class="form-input" placeholder='Digite seu email...' id="email">
                        </div>

                        <div class="container-info">
                            <label for="nome">Senha:</label>
                            <input type="password" name="senha" class="form-input" placeholder='Digite sua senha...' id="senha">
                        </div>
                        
                        <div class="container-info">
                            <label for="cpf">CPF:</label>
                            <input type="text" name="cpf" class="form-input" placeholder='Digite seu CPF...' id="cpf" maxlength="14" onkeyup="mascara(this, mascaraCPF)">
                        </div>
                        <div class="container-info">
                            <label for="telefone">Telefone:</label>
                            <input type="text" name="telefone" class="form-input" placeholder='Digite seu telefone...' id="telefone" maxlength="15" onkeyup="mascara(this, mascaraTelefone)">
                        </div>
                        
                        <div class="container-info">
                            <label for="endereco">Endereço:</label>
                            <input type="text" name="endereco" class="form-input" placeholder='Digite seu endereço...' id="endereco">
                        </div>

                        <div class="container-info">
                            <label for="complemento">Complemento:</label>
                            <input type="text" name="complemento" class="form-input" placeholder='Digite o complemento...' id="complemento">
                        </div>
                            
                        <div class="container-info">
                            <label for="estado">Estado:</label>
                            <select name="estado" id="estado">
                                <option value="SaoPaulo" selected class='selecao'>São Paulo</option>
                                <option value="RioDeJaneiro" class='selecao'>Rio de Janeiro</option>
                                <option value="EspiritoSanto" class='selecao'>Espírito Santo</option>
                            </select>
                        </div>
                        <div class="container-info">
                            <label for="cidade">Cidade:</label>
                            <input type="text" name="cidade" class="form-input" placeholder='Digite sua cidade...' id="cidade">
                        </div>
                            
                            <div class="container-dados-carro">
                                <h1 class="titulo-cadastro">Dados do carro</h1>
                                <div class="container-info">
                                    <label for="cnh">CNH:</label>
                                    <input type="text" name="cnh" id="cnh" placeholder='Digite sua CNH...'>
                                </div>

                                <div class="container-info">
                                    <label for="crlv">CRLV:</label>
                                    <input type="text" name="crlv" id="crlv" placeholder='Digite sua CRLV...'>
                                </div>

                                <div class="container-info">
                                    <label for="crlv">CRLV:</label>
                                    <input type="text" name="crlv" id="crlv" placeholder='Digite sua CRLV...'>
                                </div>

                                <div class="container-botao">
                                    <span class="span-botao"><button onclick='cadastrarPassageiro();' class="btn-cadastrar">Cadastrar</button></span>
                                </div>

                                </div>
 
                            </div>

                        </div>

                    </div>
                    <!--FORMULARIO DE LOGIN-->
                    <div class="container-form-login">
                        <div class="container-info">
                            <label for="emailLogin">Email:</label>
                            <input type="email" name="emailLogin" id="emailLogin" placeholder="Digite seu email..." class="form-input">

                            <label for="senhaLogin">Senha:</label>
                            <input type="password" name="senhaLogin" id="senhaLogin" placeholder="Digite sua senha...">
                            <div class="container-botao-login">
                                <span class="span-botao"><button onclick="logarPassageiro();">Logar</button></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--VANTAGENS DE SER MOTORISTA-->
        <section id="vantagens" class='container-animacao'>
            <div class="container-vantagens">
                <div class="container-teste">
                    <img src="../assets/img/vantagens-img.png" alt="icone vantagens RunQuest" class="vantagens-img">
                    <h1 class="titulo-vantagens">Ganhos</h1>
                    <p class="texto-vantagens">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit provident impedit tempora autem vitae culpa velit nemo doloremque eveniet.</p>
                </div>

                <div class="container-teste">
                    <img src="../assets/img/vantagens-img.png" alt="icone vantagens RunQuest" class="vantagens-img">
                    <h1 class="titulo-vantagens">Pré-requisitos</h1>
                    <p class="texto-vantagens">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit provident impedit tempora autem vitae culpa velit nemo doloremque eveniet.</p>
                </div>

                <div class="container-teste">
                    <img src="../assets/img/vantagens-img.png" alt="icone vantagens RunQuest" class="vantagens-img">
                    <h1 class="titulo-vantagens">Lorem Ipsum</h1>
                    <p class="texto-vantagens">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit provident impedit tempora autem vitae culpa velit nemo doloremque eveniet.</p>
                </div>

            </div>
        </section>

        <!--ROADMAP MOTORISTA-->
        <section id="roadmap-motorista" class='container-animacao'>
            <h1 class="titulo-roadmap">Roadmap</h1>

            <div class="container-roadmap">
                <div class="linha-roadmap"></div>
                <div class="container-texto-roadmap">
                    <p class="texto-roadmap">Cadastro</p>
                    <p class="texto-roadmap">Validação do veículo</p>
                    <p class="texto-roadmap">Envio de foto do rosto</p>
                    <p class="texto-roadmap">Aceitar termos de uso</p>
                    <p class="texto-roadmap">Pronto para uso!</p>
                </div>
            </div>
        </section>
    </main>

    <?php require_once '../footer/footer.php' ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
    <script src="../assets/js/header.js"></script>
    <script src="../assets/js/crud.js"></script>
    <script src="../assets/js/motorista.js"></script>
    <script src="../assets/js/animacao.js"></script>
</body>
</html>