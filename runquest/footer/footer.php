<?php
//Caso a página seja o index, será carregado esse footer
if($is_index == 1){?>
    <footer>
        <div class="container">

        <div class="container-image">
            <img src="assets/img/logo.svg" alt="logo RunQuest em SVG">
        </div>

        <div class="container-conteudo-footer">
            <div class="container-empresa">
                <h1 class="titulo-footer">Empresa</h1>
                <a href="#" class="link-footer">Motorista</a>
                <a href="#" class="link-footer">Passageiro</a>
                <a href="#" class="link-footer">Sobre nós</a>
                <a href="#" class="link-footer">Suporte</a>
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

        <div class="container-redes">
            <a href="#" class="instagram-footer"><img src="assets/img/instagram.png" alt="link clicavel instagram runquest"></a>
            <a href="#" class="youtube-footer"><img src="assets/img/youtube.png" alt="link clicavel youtube runquest"></a>
            <a href="#"><img src="assets/img/github.png" alt="link clicavel github runquest"></a>
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

        <div class="container-conteudo-footer">
            <div class="container-empresa">
                <h1 class="titulo-footer">Empresa</h1>
                <a href="../motorista/motorista.php" class="link-footer">Motorista</a>
                <a href="../passageiro/passageiro.php" class="link-footer">Passageiro</a>
                <a href="#" class="link-footer">Sobre nós</a>
                <a href="#" class="link-footer">Suporte</a>
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

        <div class="container-redes">
            <a href="#" class="instagram-footer"><img src="../assets/img/instagram.png" alt="link clicavel instagram runquest"></a>
            <a href="#" class="youtube-footer"><img src="../assets/img/youtube.png" alt="link clicavel youtube runquest"></a>
            <a href="#"><img src="../assets/img/github.png" alt="link clicavel github runquest"></a>
        </div>
        </div>

        <p class="subtitulo-footer">@ 2024 RunQuest - Todos os direitos reservados</p>
    </footer><?php
}
?>