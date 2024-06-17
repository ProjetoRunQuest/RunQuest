<?php
//Caso a página seja o index, será carregado esse footer
if($is_index == 1){?>
    <footer>
        <div class="container">

        <div class="container-image">
            <img src="assets/img/logo.svg" alt="logo RunQuest em SVG">
        </div>

        <div class="container-conteudo-footer container-conteudo-footer-main">
            <div class="container-empresa">
                <h1 class="titulo-footer">Empresa</h1>
                <a href="motorista/motorista.php" class="link-footer">Motorista</a>
                <a href="passageiro/passageiro.php" class="link-footer">Passageiro</a>
                <a href="#" class="link-footer">Sobre nós</a>
                <a href="documentacao/documentacao.php" class="link-footer">Documentação</a>
            </div>

            <div class="container-links">
                <h1 class="titulo-footer">Links Úteis</h1>
                <a href="#" class="link-footer">Termos de uso</a>
                <a href="#" class="link-footer">Cookies</a>
                <a href="#" class="link-footer">Políticas de privacidade</a>
                <a href="#" class="link-footer">FAQ</a>
            </div>

            <div class="container-contato">
                <h1 class="titulo-footer">Contato</h1>
                <p class="link-footer endereco-footer">Avenida Merenda, 443</p>
                <p class="link-footer telefone-footer">+55 11 12345-6789</p>
                <a href="mailto:projetofatecdiadema@gmail.com" class="link-footer email-footer">projetofatecdiadema@gmail.com</a>
            </div>
        </div>

        <div class="container-conteudo-footer dropdown-footer">
            <div class="container-empresa">
                <ul class="titulo-footer titulo-lista-footer">
                    <li class="item-lista titulo-footer">Empresa
                        <ul>
                            <li><a href="motorista/motorisa.php" class='link-footer'>Motorista</a></li>
                            <li><a href="passageiro/passageiro.php" class='link-footer'>Passageiro</a></li>
                            <li><a href="#" class='link-footer'>Sobre Nós</a></li>
                            <li><a href="documentacao/documentacao.php" class='link-footer'>Documentação</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="container-links">
                <ul class='titulo-footer titulo-lista-footer'>
                    <li class="item-lista titulo-footer links-uteis">Links Úteis
                        <ul>
                            <li><a href="motorista/motorista.php" class='link-footer'>Termos de uso</a></li>
                            <li><a href="motorista/motorista.php" class="link-footer">Cookies</a></li>
                            <li><a href="motorista/motorista.php" class="link-footer">Políticas de Privacidade</a></li>
                            <li><a href="motorista/motorista.php" class="link-footer">FAQ</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="container-contato">
               <ul class="titulo-footer titulo-lista-footer">
                <li class="item-lista titulo-footer contato">Contato
                    <ul>
                        <li class="link-footer endereco-footer texto-lista-footer">Avenida Merenda, 443</li>
                        <li class="link-footer telefone-footer texto-lista-footer">+55 11 12345-6789</li>
                        <li class="link-footer"><a href="mailto:projetofatecdiadema@gmail.com" class='link-footer email-footer'>projetofatecdiadema@gmail.com</a></li>
                    </ul>
                </li>
               </ul>
            </div>
        </div>

        <div class="container-redes">
            <a href="#" class="instagram-footer"><img src="assets/img/instagram.svg" alt="link clicavel instagram runquest" class="img-footer"></a>
            <a href="#" class="youtube-footer"><img src="assets/img/youtube.svg" alt="link clicavel youtube runquest" class="img-footer"></a>
            <a href="#"><img src="assets/img/github.svg" alt="link clicavel github runquest" class="img-footer"></a>
        </div>
        </div>

        <p class="subtitulo-footer">@ 2024 RunQuest - Todos os direitos reservados</p>
    </footer><?php
//Se for outra página, vai carregar o footer para as páginas
}else{?>
    <footer>
        <div class="container">

        <div class="container-image">
            <img src="../assets/img/logo.svg" alt="logo RunQuest em SVG">
        </div>

        <div class="container-conteudo-footer container-conteudo-footer-main">
            <div class="container-empresa">
                <h1 class="titulo-footer">Empresa</h1>
                <a href="motorista/motorista.php" class="link-footer">Motorista</a>
                <a href="passageiro/passageiro.php" class="link-footer">Passageiro</a>
                <a href="#" class="link-footer">Sobre nós</a>
                <a href="documentacao/documentacao.php" class="link-footer">Documentação</a>
            </div>

            <div class="container-links">
                <h1 class="titulo-footer">Links Úteis</h1>
                <a href="#" class="link-footer">Termos de uso</a>
                <a href="#" class="link-footer">Cookies</a>
                <a href="#" class="link-footer">Políticas de privacidade</a>
                <a href="#" class="link-footer">FAQ</a>
            </div>

            <div class="container-contato">
                <h1 class="titulo-footer">Contato</h1>
                <p class="link-footer endereco-footer">Avenida Merenda, 443</p>
                <p class="link-footer telefone-footer">+55 11 12345-6789</p>
                <a href="mailto:projetofatecdiadema@gmail.com" class="link-footer email-footer">projetofatecdiadema@gmail.com</a>
            </div>
        </div>

        <div class="container-conteudo-footer dropdown-footer">
            <div class="container-empresa">
                <ul class="titulo-footer titulo-lista-footer">
                    <li class="item-lista titulo-footer">Empresa
                        <ul class='item-teste'>
                            <li><a href="motorista/motorisa.php" class='link-footer'>Motorista</a></li>
                            <li><a href="passageiro/passageiro.php" class='link-footer'>Passageiro</a></li>
                            <li><a href="#" class='link-footer'>Sobre Nós</a></li>
                            <li><a href="documentacao/documentacao.php" class='link-footer'>Documentação</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="container-links">
                <ul class='titulo-footer titulo-lista-footer'>
                    <li class="item-lista titulo-footer links-uteis">Links Úteis
                        <ul class='item-teste'>
                            <li><a href="motorista/motorista.php" class='link-footer'>Termos de uso</a></li>
                            <li><a href="motorista/motorista.php" class="link-footer">Cookies</a></li>
                            <li><a href="motorista/motorista.php" class="link-footer">Políticas de Privacidade</a></li>
                            <li><a href="motorista/motorista.php" class="link-footer">FAQ</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="container-contato">
               <ul class="titulo-footer titulo-lista-footer">
                <li class="item-lista titulo-footer contato">Contato
                    <ul class='item-teste'>
                        <li class="link-footer endereco-footer texto-lista-footer">Avenida Merenda, 443</li>
                        <li class="link-footer telefone-footer texto-lista-footer">+55 11 12345-6789</li>
                        <li class="link-footer"><a href="mailto:projetofatecdiadema@gmail.com" class='link-footer email-footer'>projetofatecdiadema@gmail.com</a></li>
                    </ul>
                </li>
               </ul>
            </div>
        </div>

        <div class="container-redes">
            <a href="#" class="instagram-footer"><img src="../assets/img/instagram.svg" alt="link clicavel instagram runquest" class="img-footer"></a>
            <a href="#" class="youtube-footer"><img src="../assets/img/youtube.svg" alt="link clicavel youtube runquest" class="img-footer"></a>
            <a href="#"><img src="../assets/img/github.svg" alt="link clicavel github runquest" class="img-footer"></a>
        </div>
        </div>

        <p class="subtitulo-footer">@ 2024 RunQuest - Todos os direitos reservados</p>
    </footer><?php
}
?>