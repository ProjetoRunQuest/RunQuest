let menuH = document.getElementById('menu-hamburguer');
let navOpcoes = document.getElementById('opcoes-mobile');
let headerMobile = document.getElementById('container-mobile');

function menu(){
    if(menuH.classList.contains('active')){
        //Fechar menu
        menuH.classList.remove('active');
        menuH.style.backgroundImage = "url('assets/img/menu-aberto.png')"
        navOpcoes.style.marginTop = '-10rem';
        navOpcoes.style.opacity = '0';
        setTimeout(() =>{
            navOpcoes.style.display = 'none'
            navOpcoes.style.opacity = '1'
        }, 650)
    }else{
        //Abrir menu
        navOpcoes.style.display = 'flex';
        menuH.classList.add('active');
        menuH.style.backgroundImage = "url('assets/img/menu-fechar.png')";
        navOpcoes.style.opacity = '0'
        setTimeout(()=>{
            navOpcoes.style.marginTop = '0';
            navOpcoes.style.opacity = '1';
        }, 100)
    }
}

//Verificando se o menu não está aberto após a largura maxima de existencia dele for ultrapassada
window.addEventListener('resize', () =>{
    if(innerWidth > 671){
        navOpcoes.style.display = 'none';
    }
})