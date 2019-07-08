function validaCampos(){
    
    var email = document.getElementById('inputemail').value;
    var senha = document.getElementById('inputpassword').value;
    var confirma_senha = document.getElementById('inputconfirmpassword').value;
    var endereco = document.getElementById('inputendereco').value;
    var cidade = document.getElementById('inputenderecocidade').value;
    var estado = document.getElementById('inputenderecoestado').value;
    var complemento = document.getElementById('inputenderecocomplento').value;

    if(senha != confirma_senha){
        
        alert("As senhas devem ser iguais")
        return false;
        
    }

    if(email == "" || senha == "" || confirma_senha == "" || endereco == "" || cidade == "" || estado == "" || complemento == ""){
        alert("Todos os campos devem ser preenchidos");
        return false;
    }

   
    return true;
    
}