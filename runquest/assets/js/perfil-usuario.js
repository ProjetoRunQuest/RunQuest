const barraL = document.getElementsByClassName('barra-lateral');
//Adicionando a animação da barra lateral
const opcoesNav = document.getElementsByClassName('opcoes-nav');
for(let i = 0; i < opcoesNav.length; i++){
    opcoesNav[i].addEventListener('mouseover', function(){
        const barraL = document.getElementsByClassName('barra-lateral');
        const barraActive = document.getElementsByClassName('barra-lateral-active')
        for(let i = 0; i < opcoesNav.length; i++){
            opcoesNav[i].style.maxWidth = '200px';
            barraActive[0].style.width = '263px';
            //foto de perfil

            barraL[0].addEventListener('mouseover', function(){
                opcoesNav[i].style.maxWidth = '200px';
                barraActive[0].style.width = '263px';
            })
        }
    });
}

//Adicionando a animação para quando o mouse sair da barra
barraL[0].addEventListener('mouseout', function(){
    const barraActive = document.getElementsByClassName('barra-lateral-active')

    for(let i = 0; i < opcoesNav.length; i++){
        opcoesNav[i].style.maxWidth = '40px';
        barraActive[0].style.width = '103px';
    }
})

