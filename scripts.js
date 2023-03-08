function login(){
    var usuario = document.getElementById("userAdm").value;
    var senha = document.getElementById("senhaAdm").value;

    if(usuario == "teste" && senha == "teste"){         
        // alert("Usuário fez login com sucesso!");  
        limparDados();    
        window.location.href = "monitoria.html";
    }
    else{
        alert("Usuário e/ou senha incorreto(s)!")
        limparDados();
    }
}  

function limparDados(){
    document.getElementById("userAdm").value = "";
    document.getElementById("senhaAdm").value = "";
}

function disciplina(){
    var disciplina = "Matemática";
    window.location.href = "formulario.html";
}

function alerta(){
    alert("TESTANDO");
}

function limparMatricula(){
    document.getElementById("numeroDeMatricula").value = '';
}

function criarConta(){
    window.location.href = "novaconta.html";
}

// function criarConta(){
//     var nome = document.getElementById("nome").value;
//     var matricula = document.getElementById("numeroDeMatricula").value;
//     var curso = document.getElementById("curso").value;
//     var contato = document.getElementById("contato").value;

//     if(nome == "" || matricula == "" || curso == "" || contato == ""){
//         alert("Preencha todos os campos!");
//     }
//     else{
//         alert("Cadastro realizado com sucesso!");
//         window.location.href = "monitoria.html";
//     }
// }
