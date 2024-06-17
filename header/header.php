 <!--Criando o menu-->
 <?php
 $dir_index = 'assets/';
 
 //Se a página for o index, será carregado esse header
 if($is_index == 1){?>
    <header>
        <nav>
            <div class="container-header">
                <a href="index.php"><img src="<?php echo $dir_index.'img/logo.svg' ?>" alt="logo do projeto runquest"></a>
                <ul class="nav-opcoes">
                    <li class="nav-itens"><a href="passageiro/passageiro.php">Passageiro</a></li>
                    <li class="nav-itens"><a href="motorista/motorista.php">Motorista</a></li>
                    <li class="nav-itens"><a href="documentacao/documentacao.php">Documentação</a></li>
                    <li class="nav-itens nav-itens-ultimo"><a onclick="verificaLogin();"><img src="assets/img/usuario.svg" alt="imagem do icone de perfil usuario" style="width: 30px; height: 30px;"></a></li>
                </ul>
            </div>

            <!--Menu Mobile-->
            <div class="container-header container-header-mobile" id='container-mobile'>
                <a href="#"><img src=<?php echo $dir_index.'img/logo.svg'?> alt="logo do projeto runquest"></a>
                <div class="container-opcoes-mobile" id="menu-hamburguer" onclick='menu()'></div>
            </div>
            <ul class="nav-opcoes nav-opcoes-mobile" id="opcoes-mobile">
                <li class="nav-itens nav-itens-mobile"><a href="passageiro/passageiro.php">Passageiro</a></li>
                <li class="nav-itens nav-itens-mobile"><a href="motorista/motorista.php">Motorista</a></li>
                <li class="nav-itens nav-itens-mobile"><a href="documentacao/documentacao.php">Documentação</a></li>
                <li class="nav-itens nav-itens-ultimo"><a onclick="verificaLogin();"><img src="assets/img/usuario.svg" alt="imagem do icone de perfil usuario" style="width: 30px; height: 30px;"></a></li>
            </ul>
        </nav>
    </header>
    <?php
 //Caso contrário, será carregado o header das páginas
 }else{?>
    <header>
    <nav>
        <div class="container-header">
            <a href="../index.php"><img src="../assets/img/logo.svg" alt="logo do projeto runquest"></a>
            <ul class="nav-opcoes">
                <li class="nav-itens"><a href="../passageiro/passageiro.php">Passageiro</a></li>
                <li class="nav-itens"><a href="../motorista/motorista.php">Motorista</a></li>
                <li class="nav-itens"><a href="../documentacao/documentacao.php">Documentação</a></li>
                <li class="nav-itens nav-itens-ultimo"><a onclick="verificaLogin();" ><img src="../assets/img/usuario.svg" alt="imagem do icone de perfil usuario" style="width: 30px; height: 30px;"></a></li>
            </ul>
        </div>

        <!--Menu Mobile-->
        <div class="container-header container-header-mobile" id='container-mobile'>
            <a href="../index.php"><img src="../assets/img/logo.svg" alt="logo do projeto runquest"></a>
            <div class="container-opcoes-mobile" id="menu-hamburguer" onclick='menu()'></div>
        </div>
        <ul class="nav-opcoes nav-opcoes-mobile" id="opcoes-mobile">
            <li class="nav-itens nav-itens-mobile"><a href="../passageiro/passageiro.php">Passageiro</a></li>
            <li class="nav-itens nav-itens-mobile"><a href="../motorista/motorista.php">Motorista</a></li>
            <li class="nav-itens nav-itens-mobile"><a href="../documentacao/documentacao.php">Documentação</a></li>
            <li class="nav-itens"><a onclick="verificaLogin();" style="display: inline-block; height: 24px;"><img src="../assets/img/usuario.svg" alt="icone de usuario"></a></li>
        </ul>
    </nav>
</header><?php
 }
 ?>