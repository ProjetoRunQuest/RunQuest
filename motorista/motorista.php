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
    <title>Motorista</title>
</head>
<body>
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
                            <input type="text" name="nome" class="form-input" id="nome" placeholder='Digite seu nome...' required>
                            <input type="hidden" name="hidden" value="0" id="tipoCliente">
                        </div>
                        <div class="container-info">
                            <label for="email">E-mail:</label>
                            <input type="email" name="email" class="form-input" placeholder='Digite seu email...' id="email" required>
                        </div>

                        <div class="container-info container-senha">
                            <label for="nome">Senha:</label>
                            <input type="password" name="senha" class="form-input cadastro-senha" placeholder='Digite sua senha...' id="senha" required>
                            <span class="nova-senha" onclick='senha(0)'></span>
                        </div>
                        
                        <div class="container-info container-cpf">
                            <label for="cpf">CPF:</label>
                            <input type="text" name="cpf" class="form-input" placeholder='Digite seu CPF...' id="cpf" minlength='14' maxlength="14" onkeyup="mascara(this, mascaraCPF)" required>
                        </div>
                        <div class="container-info container-telefone">
                            <label for="telefone">Telefone:</label>
                            <input type="text" name="telefone" class="form-input" placeholder='Digite seu telefone...' id="telefone" minlength='15' maxlength="15" onkeyup="mascara(this, mascaraTelefone)" required>
                        </div>
                        
                        <div class="container-info container-endereco">
                            <label for="endereco">Endereço:</label>
                            <input type="text" name="endereco" class="form-input" placeholder='Digite seu endereço...' id="endereco" required>
                        </div>

                        <div class="container-info container-complemento">
                            <label for="complemento">Complemento:</label>
                            <input type="text" name="complemento" class="form-input" placeholder='Digite o complemento...' id="complemento" required>
                        </div>
                            
                        <div class="container-info container-estado">
                            <label for="estado">Estado:</label>
                            <select name="estado" id="estado" required>
                                <option value="SaoPaulo" selected class='selecao'>São Paulo</option>
                                <option value="RioDeJaneiro" class='selecao'>Rio de Janeiro</option>
                                <option value="EspiritoSanto" class='selecao'>Espírito Santo</option>
                            </select>
                        </div>
                        <div class="container-info container-cidade">
                            <label for="cidade">Cidade:</label>
                            <input type="text" name="cidade" class="form-input" placeholder='Digite sua cidade...' id="cidade" required>
                        </div>
                            
                            <div class="container-dados-carro">
                                <h1 class="titulo-cadastro">Dados do carro</h1>
                                <div class="container-info">
                                    <label for="cnh">CNH:</label>
                                    <input type="text" name="cnh" id="cnh" placeholder='Digite sua CNH...' required>
                                </div>

                                <div class="container-info">
                                    <label for="crlv">CRLV:</label>
                                    <input type="text" name="crlv" id="crlv" placeholder='Digite sua CRLV...' required>
                                </div>

                                <div class="container-info">
                                    <label for="crlv">CRLV:</label>
                                    <input type="text" name="crlv" id="crlv" placeholder='Digite sua CRLV...' required>
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
                            <input type="password" name="senhaLogin" id="senhaLogin" placeholder="Digite sua senha..." class='login-senha'>
                            <span class="senha-login" onclick='senha(1)'></span>
                            <div class="container-botao-login">
                                <span class="span-botao"><button onclick="logarPassageiro();">Logar</button></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--VANTAGENS DE SER MOTORISTA-->
        <section id="vantagens">
            <div class="container-vantagens container-animacao">
                <div class="container-teste">
                    <img src="../assets/img/ganhos.svg" alt="icone vantagens RunQuest" class="vantagens-img">
                    <h1 class="titulo-vantagens">Ganhos</h1>
                    <p class="texto-vantagens">Na RunQuest tanto o motorista como o passageiro são beneficiados com políticas não abusivas por parte da empresa e um preço acessível para o usuário final.</p>
                </div>

                <div class="container-teste">
                    <img src="../assets/img/pre-requisitos.svg" alt="icone vantagens RunQuest" class="vantagens-img">
                    <h1 class="titulo-vantagens">Pré-requisitos</h1>
                    <p class="texto-vantagens">Para utilizar nosso sistema é necessário ter um dispositivo móvel, desktop ou notebook com acesso a internet, a serviços de geolocalização e ser parte do corpo docente ou discente das fatecs.</p>
                </div>

                <div class="container-teste">
                    <img src="../assets/img/formula.svg" alt="icone vantagens RunQuest" class="vantagens-img">
                    <h1 class="titulo-vantagens">Fórmula</h1>
                    <p class="texto-vantagens">O cálculo é feito por uma função afim em que a = preço fixo do km(R$ 0.5/km), x = km rodados e b um preço fixo(R$ 3). Do resultado é tirado 10% para manutenção de custos, o resto fica para o motorista.</p>
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
    <script src="../assets/js/motorista.js"></script>
    <script src="../assets/js/animacao.js"></script>
</body>
</html>