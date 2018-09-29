window.onload = function () {
    
    
};

function VerificaLogin() {
   
    var email = document.getElementById("IdEmail");
   
    if (!email.value) {
     
        email.className = "form-control is-invalid";
        var aviso = document.getElementById('AvisoEmail');
        aviso.className = "alert-danger";
    }
    else {
          window.location.href = "cadastro.html";
    }
};

function Cadastro()
{
    console.log("aaaaa");
    window.location.href = "CadastroTela.html";
}