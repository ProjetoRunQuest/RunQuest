// função local 
function local() {
    
    if(!localStorage.getItem("passageiros")){
    let dados = [
        {
            id: Date.now(), nomePassageiro: "Alan", emailPassageiro: "alanzin@hotmail.com", senhaPassageiro: "12343", cpfPassageiro: "3234434",
            enderecoPassageiro: "Rua Alves", complementoPassageiro: "433", estadoPassageiro: "Sp", cidadePassageiro: "SBC", 
            telefonePassageiro: "3234454"
        }
    ];
    let n = JSON.stringify(dados);
    localStorage.setItem("passageiros", n);

    return dados;

    }
}

//função adicionar
function cadastrarPassageiro() {
    //armazenando na variável ClienteArray os dados do item do localStorage chamado tds em forma de um objeto
    var ClienteArray = JSON.parse(localStorage.getItem("passageiros"));

    let nomePassageiro = document.getElementById("nomePassageiro").value 
    let emailPassageiro = document.getElementById("emailPassageiro").value
    let senhaPassageiro = document.getElementById("senhaPassageiro").value  
    let cpfPassageiro = document.getElementById("cpfPassageiro").value 
    let enderecoPassageiro = document.getElementById("enderecoPassageiro").value 
    let complementoPassageiro = document.getElementById("complementoPassageiro").value 
    let estadoPassageiro = document.getElementById("estadoPassageiro").value 
    let cidadePassageiro = document.getElementById("cidadePassageiro").value 
    let telefonePassageiro = document.getElementById("telefonePassageiro").value 

    let usuarioPassageiro = { 
        id: Date.now(), nomePassageiro: nomePassageiro, emailPassageiro: emailPassageiro, senhaPassageiro: senhaPassageiro, cpfPassageiro: cpfPassageiro,
        enderecoPassageiro: enderecoPassageiro, complementoPassageiro: complementoPassageiro, estadoPassageiro: estadoPassageiro, cidadePassageiro: cidadePassageiro,
        telefonePassageiro: telefonePassageiro
    }
    ClienteArray.push(usuarioPassageiro);
    localStorage.setItem("passageiros", JSON.stringify(ClienteArray));
    alert("Registro adicionado")
}

//função logar 
function logarPassageiro() {

    //Transformando os valores da chave usuariosCadastrados do formato JSON para o formato objeto
    const dados = JSON.parse(localStorage.getItem("passageiros"));

    //Criando variáveis 
    let emailLoginP = document.getElementById("emailLoginP").value;
    let senhaLoginP = document.getElementById("senhaLoginP").value;
    let sinaliza = false


    //Verificação se existe o email e a senha digitada pelo usuario
    for(let i = 0; i < dados.length; i++) {
            if (dados[i].emailPassageiro == emailLoginP && dados[i].senhaPassageiro == senhaLoginP) {
            console.log("conectado");
            let n = JSON.stringify(dados[i]);
            sessionStorage.setItem("loginAtual", n);
            alert("Usuario Logado");
            sinaliza = true
            
            location.reload();
        
            } 
    } 

    if(sinaliza) {
        alert("Bem Vindo")
    } else {
        alert("Email ou senha Incorretos")
    }
}

//Verifica se está logado ou não
function verificaLogin() {
    let login = JSON.parse(sessionStorage.getItem("loginAtual"));
    let bemvindo = document.getElementById("bemvindo");
    let sair = document.getElementById("sair");

    if(login != null) {
        bemvindo.innerHTML = `bem vindo, ${login.nomePassageiro}`;
        sair.innerHTML = "Sair";
    } else {
        bemvindo.innerHTML = "";
        sair.innerHTML = "";
    }
}

verificaLogin();

//Remove item do localStorage
function remover() {
    localStorage.removeItem("passageiros");
}

//Sair da conta acessada
function sair() {
    sessionStorage.removeItem("loginAtual");
    location.reload();
}


//Função para definir o objeto da máscara
function mascara(o, f){
    v_obj = o
    v_fun = f
    setTimeout("execmascara()", 1)
}

//Função que executará a máscara
function execmascara(){
    v_obj.value = v_fun(v_obj.value)
}

//Máscara para o telefone
function mascaraTelefone(t){
    t = t.replace(/\D/g, ""); //Remove tudo o que não é dígito
    t = t.replace(/^(\d{2})(\d)/g,"($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
    t = t.replace(/(\d)(\d{4})$/,"$1-$2");    //Coloca hífen entre o quarto e o quinto dígitos
    return t
}

//Máscara para CPF
function mascaraCPF(c){
    c = c.replace(/\D/g, ""); //Remove tudo que não é número    
    c = c.replace(/^(\d{3})/g, "$1."); //Adiciona ponto após os 3 primeiros dígitos
    c = c.replace(/(\d{3})(\d{3})/g, "$1.$2-"); //Adiciona o ponto após os outros 3 dígitos e o hífen antes dos últimos dois números
    return c;
}