 <!--Criando o menu-->
<header>
    <nav>
        <div class="container-header">
            <a href="#"><img src="assets/img/logo.svg" alt="logo do projeto runquest"></a>
            <ul class="nav-opcoes">
                <li class="nav-itens"><a href="passageiro/passageiro.php">Passageiro</a></li>
                <li class="nav-itens"><a href="#">Motorista</a></li>
                <li class="nav-itens"><a href="#">Suporte</a></li>
            </ul>
        </div>

        <!--Menu Mobile-->
        <div class="container-header container-header-mobile" id='container-mobile'>
            <a href="#"><img src="assets/img/logo.svg" alt="logo do projeto runquest"></a>
            <div class="container-opcoes-mobile" id="menu-hamburguer" onclick='menu()'></div>
        </div>
        <ul class="nav-opcoes nav-opcoes-mobile" id="opcoes-mobile">
            <li class="nav-itens nav-itens-mobile"><a href="#">Passageiro</a></li>
            <li class="nav-itens nav-itens-mobile"><a href="#">Motorista</a></li>
            <li class="nav-itens nav-itens-mobile"><a href="#">Suporte</a></li>
        </ul>
    </nav>
</header>