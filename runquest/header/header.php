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
                    <li class="nav-itens"><a href="suporte/suporte.php">Suporte</a></li>
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
                <li class="nav-itens nav-itens-mobile"><a href="suporte/suporte.php">Suporte</a></li>
            </ul>
        </nav>
    </header>
    <?php
 //Caso contrário, será carregado o footer das páginas
 }else{?>
    <header>
    <nav>
        <div class="container-header">
            <a href="../index.php"><img src="../assets/img/logo.svg" alt="logo do projeto runquest"></a>
            <ul class="nav-opcoes">
                <li class="nav-itens"><a href="../passageiro/passageiro.php">Passageiro</a></li>
                <li class="nav-itens"><a href="../motorista/motorista.php">Motorista</a></li>
                <li class="nav-itens"><a href="../suporte/suporte.php">Suporte</a></li>
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
            <li class="nav-itens nav-itens-mobile"><a href="../suporte/suporte.php">Suporte</a></li>
        </ul>
    </nav>
</header><?php
 }
 ?>