
//carrega lista para verificação do login 
function carregarLista() {
	var xhttp;
	xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
    	if (this.readyState == 4 && this.status == 200) {
      		document.getElementById('lista').innerHTML = this.responseText;
    	} else {
    		document.getElementById('lista').innerHTML = "Erro na execucao do Ajax";
    	}
  	};
  	xhttp.open("POST", "crud.php", true);
  	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  	xhttp.send("action=lista");
}



function VerificaLogin(form){
 
  var user = form.user.value;
  var passw = form.password.value;
  
  if(!user)
  {
    alert("Preencha com seu usuário!");
    return false;
	}
	if(!passw)
  {
    alert("Preencha com sua senha!");
    return false;
  }
  else
  {
    return true;
  }
}



function VerificaCadastro(form){
 
  var user = form.user.value;
  var passw = form.password.value;
  
  if(!user)
  {
    alert("Preencha com seu usuário!");
    return false;
	}
	if(!passw)
  {
    alert("Preencha com sua senha!");
    return false;
  }
  else
  {
    return true;
  }
}

;