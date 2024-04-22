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
<body>
    <!--MENU-->
    <?php require_once '../header/header.php'; ?>

    <main>
        <section id="form">
            <div class="container-form">

                <h1 class="titulo-form">Cadastro Passageiro</h1>

                <label for="nome">Nome:</label>
                <input type="text" name="nome" class="form-input" id="nome" placeholder='Digite seu nome...'>

                <label for="email">E-mail:</label>
                <input type="email" name="email" class="form-input" placeholder='Digite seu email...' id="email">
                
                <label for="nome">Senha:</label>
                <input type="password" name="senha" class="form-input" placeholder='Digite sua senha...' id="senha">

                <label for="cpf">CPF:</label>
                <input type="text" name="cpf" class="form-input" placeholder='Digite seu CPF...' id="cpf">
                
                <label for="endereco">Endereço:</label>
                <input type="text" name="endereco" class="form-input" placeholder='Digite seu endereço...' id="endereco">

                
                <label for="complemento">Complemento:</label>
                <input type="text" name="complemento" class="form-input" placeholder='Digite o complemento...' id="endereco">
                
                <label for="estado">Estado:</label>
                <select name="estado" id="estado">
                    <option value="SaoPaulo" selected>São Paulo</option>
                    <option value="RioDeJaneiro">Rio de Janeiro</option>
                    <option value="EspiritoSanto">Espírito Santo</option>
                </select>

                <label for="cidade">Cidade:</label>
                <input type="text" name="cidade" class="form-input" placeholder='Digite sua cidade...' id="cidade">

                <label for="telefone">Telefone:</label>
                <input type="tel" name="telefone" class="form-input" placeholder='Digite seu telefone...' id="telefone">

                <button onclick='cadastrar();'>Cadastrar</button>
            </div>
        </section>
    </main>

    <!--FOOTER -->
    <?php require_once '../footer/footer.php' ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="assets/js/header.js"></script>
</body>
</html>