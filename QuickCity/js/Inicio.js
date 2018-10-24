//Carrega Click da Modal home
$(document).ready(function(){
  $("a[rel=modal]").click( function(ev){
    ev.preventDefault();
     var id = $(this).attr("href");
     var alturaTela = $(document).height();
    var larguraTela = $(window).width();
     //colocando o fundo preto
    $('#mascara').css({'width':larguraTela,'height':alturaTela});
    $('#mascara').fadeIn(1000);	
    $('#mascara').fadeTo("slow",0.8);
     var left = ($(window).width() /2) - ( $(id).width() / 2 );
    var top = ($(window).height() / 2) - ( $(id).height() / 2 );
    
    $(id).css({'top':top,'left':left});
    $(id).show();	
   });
    $("#mascara").click( function(){
     $(this).hide();
     $(".window").hide();
   });
    $('.fechar').click(function(ev){
     ev.preventDefault();
     $("#mascara").hide();
     $(".window").hide();
   });
});


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