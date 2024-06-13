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
    <link rel="stylesheet" href="../assets/css/passageiro.css">
    <link rel="shortcut icon" href="../assets/img/logo.svg" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/swiper-bundle.min.css">
    <title>Passageiro</title>
</head>
<body>
    <!--MENU-->
    <?php require_once '../header/header.php'; 
    ?>

    <main>
        <section id="form" class='container-animacao'>
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
                            <label for="nomePassageiro">Nome:</label>
                            <input type="text" name="nome" class="form-input" id="nomePassageiro" placeholder='Digite seu nome...'>
                            <input type="hidden" name="hidden" value="0" id="tipoCliente">

                            <label for="emailPassageiro">E-mail:</label>
                            <input type="email" name="email" class="form-input" placeholder='Digite seu email...' id="emailPassageiro">
                            
                            <label for="senhaPassageiro">Senha:</label>
                            <input type="password" name="senha" class="form-input cadastro-senha" placeholder='Digite sua senha...' id="senhaPassageiro">
                            <span class="nova-senha" onclick='senha(0)'></span>

                            <label for="cpfPassageiro">CPF:</label>
                            <input type="text" name="cpf" class="form-input" placeholder='Digite seu CPF...' id="cpfPassageiro" maxlength="14" onkeyup="mascara(this, mascaraCPF)">

                            
                            <label for="telefonePassageiro">Telefone:</label>
                            <input type="text" name="telefone" class="form-input" placeholder='Digite seu telefone...' id="telefonePassageiro" maxlength="15" onkeyup="mascara(this, mascaraTelefone)">
                        </div>
                        
                        <div class="container-info">
                            <label for="enderecoPassageiro">Endereço:</label>
                            <input type="text" name="endereco" class="form-input" placeholder='Digite seu endereço...' id="enderecoPassageiro">

                            
                            <label for="complementoPassageiro">Complemento:</label>
                            <input type="text" name="complemento" class="form-input" placeholder='Digite o complemento...' id="complementoPassageiro">
                            
                            <label for="estadoPassageiro">Estado:</label>
                            <select name="estado" id="estadoPassageiro">
                                <option value="SaoPaulo" selected class='selecao'>São Paulo</option>
                                <option value="RioDeJaneiro" class='selecao'>Rio de Janeiro</option>
                                <option value="EspiritoSanto" class='selecao'>Espírito Santo</option>
                            </select>

                            <label for="cidadePassageiro">Cidade:</label>
                            <input type="text" name="cidade" class="form-input" placeholder='Digite sua cidade...' id="cidadePassageiro">

                            <span class='span-botao'><button onclick='cadastrarPassageiro();' class='botao-banner' value='motorista'>Cadastrar</button></span>
                        </div>

                    </div>
                    <!--FORMULARIO DE LOGIN-->
                    <div class="container-form-login">
                        <div class="container-info">
                            <label for="emailLoginP">Email:</label>
                            <input type="email" name="emailLogin" id="emailLoginP" placeholder="Digite seu email..." class="form-input">

                            <label for="senhaLoginP">Senha:</label>
                            <input type="password" name="senhaLogin" id="senhaLoginP" placeholder="Digite sua senha..." class='input-senha-login'>
                            <span class="senha-login" onclick='senha(1)'></span>
                            <span class='span-botao'><button onclick='logarPassageiro();' class='botao-banner' value='motorista'>Logar</button></span>
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
    <script src="../assets/js/passageiroCrud.js"></script>
    <script src="../assets/js/passageiro.js"></script>
    <script src="../assets/js/animacao.js"></script>
</body>
</html>