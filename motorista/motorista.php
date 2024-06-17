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
                            <label for="nomeMotorista">Nome:</label>
                            <input type="text" name="nome" class="form-input" id="nomeMotorista" placeholder='Digite seu nome...' required>
                            <input type="hidden" name="hidden" value="0" id="tipoCliente">
                        </div>
                        <div class="container-info">
                            <label for="emailMotorista">E-mail:</label>
                            <input type="email" name="emailMotorista" class="form-input" placeholder='Digite seu email...' id="emailMotorista" required>
                        </div>

                        <div class="container-info container-senha">
                            <label for="nomeMotorista">Senha:</label>
                            <input type="password" name="senhaMotorista" class="form-input cadastro-senha" placeholder='Digite sua senha...' id="senhaMotorista" required>
                            <span class="nova-senha" onclick='senha(0)'></span>
                        </div>
                        
                        <div class="container-info container-cpf">
                            <label for="cpfMotorista">CPF:</label>
                            <input type="text" name="cpf" class="form-input" placeholder='Digite seu CPF...' id="cpfMotorista" minlength='14' maxlength="14" onkeyup="mascara(this, mascaraCPF)" required>
                        </div>
                        <div class="container-info container-telefone">
                            <label for="telefoneMotorista">Telefone:</label>
                            <input type="text" name="telefone" class="form-input" placeholder='Digite seu telefone...' id="telefoneMotorista" minlength='15' maxlength="15" onkeyup="mascara(this, mascaraTelefone)" required>
                        </div>
                        
                        <div class="container-info container-endereco">
                            <label for="enderecoMotorista">Endereço:</label>
                            <input type="text" name="endereco" class="form-input" placeholder='Digite seu endereço...' id="enderecoMotorista" required>
                        </div>

                        <div class="container-info container-complemento">
                            <label for="complementoMotorista">Complemento:</label>
                            <input type="text" name="complemento" class="form-input" placeholder='Digite o complemento...' id="complementoMotorista" required>
                        </div>
                            
                        <div class="container-info container-estado">
                            <label for="estadoMotorista">Estado:</label>
                            <select name="estadoMotorista" id="estadoMotorista" required>
                                <option value="SaoPaulo" selected class='selecao'>São Paulo</option>
                                <option value="RioDeJaneiro" class='selecao'>Rio de Janeiro</option>
                                <option value="EspiritoSanto" class='selecao'>Espírito Santo</option>
                            </select>
                        </div>
                        <div class="container-info container-cidade">
                            <label for="cidadeMotorista">Cidade:</label>
                            <input type="text" name="cidadeMotorista" class="form-input" placeholder='Digite sua cidade...' id="cidadeMotorista" required>
                        </div>
                            
                            <div class="container-dados-carro">
                                <h1 class="titulo-cadastro">Dados do carro</h1>
                                <div class="container-info">
                                    <label for="cnhMotorista">CNH:</label>
                                    <input type="text" name="cnh" id="cnhMotorista" placeholder='Digite sua CNH...' required>
                                </div>

                                <div class="container-info">
                                    <label for="crlvMotorista">CRLV:</label>
                                    <input type="text" name="crlv" id="crlvMotorista" placeholder='Digite sua CRLV...' required>
                                </div>

                                <div class="container-info">
                                    <label for="foto">CRV:</label>
                                    <input type="text" name="crlv" id="fotoMotorista" placeholder='Digite sua CRV...' required>
                                </div>

                                <div class="container-botao">
                                    <span class="span-botao"><button onclick='cadastrarMotorista();' class="btn-cadastrar">Cadastrar</button></span>
                                </div>

                                </div>
 
                            </div>

                        </div>

                    </div>
                    <!--FORMULARIO DE LOGIN-->
                    <div class="container-form-login">
                        <div class="container-info">
                            <label for="emailLoginM">Email:</label>
                            <input type="email" name="emailLoginM" id="emailLoginM" placeholder="Digite seu email..." class="form-input">

                            <label for="senhaLoginM">Senha:</label>
                            <input type="password" name="senhaLoginM" id="senhaLoginM" placeholder="Digite sua senha..." class='login-senha'>
                            <span class="senha-login" onclick='senha(1)'></span>
                            <div class="container-botao-login">
                                <span class="span-botao"><button onclick="logarMotorista();">Logar</button></span>
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
    <script src="../assets/js/motoristaCrud.js"></script>
    <script src="../assets/js/passageiroCrud.js"></script>
    <script src="../assets/js/motorista.js"></script>
    <script src="../assets/js/animacao.js"></script>
</body>
</html>