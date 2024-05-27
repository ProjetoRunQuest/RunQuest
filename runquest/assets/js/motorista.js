//Criando a função de aparecer o formulário de login
function abrirLogin(){
    let formLogin = document.querySelector('.container-form-login')
    let formCadastro = document.querySelector('.container-form')

    //Primeiro, adicionando a animacao para depois fazer um fade dele sumindo e por fim, tornando-o intangível
    formCadastro.style.animation = 'fade-off 0.5s ease-in-out 0s'
    //Aqui, com um atraso de 350ms, o form de cadastro irá desaparecer, e será chamado o de loginu
    setTimeout(()=>{
        formCadastro.style.display = 'none'
        //Depois, tornando o form de cadastro visível e em seguida adicionando a animação
        formLogin.style.animation = 'fade-in .5s ease-in-out 0s'
        formLogin.style.display = 'grid'
        //Segundo timeout para, em 400ms, o login voltar a posicao inicial
        setTimeout(()=>{
            formLogin.style.transform = 'translateX(0)'
        }, 400)
    }, 350)
}

//Criando a função de aparecer o formulário de cadastro
function abrirCadastro(){
    let formLogin = document.querySelector('.container-form-login')
    let formCadastro = document.querySelector('.container-form')

    formLogin.style.animation = 'fade-off 0.5s ease-in-out 0s'
    setTimeout(()=>{
        formLogin.style.display = 'none'
        formCadastro.style.animation = 'fade-in .5s ease-in-out 0s'
        formCadastro.style.display = 'grid'
        setTimeout(()=>{
            formCadastro.style.transform = 'translateX(0)'
        }, 400)
    }, 350)
}