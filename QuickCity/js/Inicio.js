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

function VerificaCadastro(){
 
  var nome = form2.nome.value;
  var cpf = form2.cpf.value;
  var email = form2.email.value;
  var usuario = form2.usuario.value;
  var senha = form2.senha.value;
  var confsenha = form2.confsenha.value;
  
  if(!nome)
  {
    alert("Preencha com seu nome!");
    form2.nome.focus();
    return false;
	}
	if(!cpf)
  {
    alert("Preencha com seu CPF!");
    form2.cpf.focus();
    return false;
  }
  if(!email)
  {
    alert("Preencha com seu e-mail!");
    form2.email.focus();
    return false;
  }
  if(!usuario)
  {
    alert("Preencha com seu usuário!");
    form2.usuario.focus();
    return false;
  }
  if(!senha)
  {
    alert("Preencha com sua senha!");
    form2.senha.focus();
    return false;
  }
  if(!confsenha)
  {
    alert("Confirme sua senha!");
    form2.confsenha.focus();
    return false;
  }
  if(confsenha != senha){
    alert("Senha não confere!");
  }
  else
  {
    form2.submit();
    return true;
  }
}

function MaskCpf(cpf){
  if(cpf)
  {
     
        if(cpf.value.length == 11){
         var retorno = "";
          var split = cpf.value.split('');
         for(var x=0; x< split.length; x++)
         {
           retorno += split[x];
           if(x==2)
           retorno+= ".";
           if(x==5)
           retorno+= ".";
           if(x==8)
           retorno+= "-";
         }
         form2.cpf.value = retorno;
        }
 
        
  }
}


function VerificaRecarga(form)
{
   var codCartao = form.codCartao.value;
   var recarga = form.valorBand.value;
   var tipo = form.tipoBand.value;
   var cartao = form.codCartaoCD.value;
   var data = form.valCartaoCD.value;
   var cvv = form.cvvCartaoCD.value;
   var nome = form.nomeCartaoCD.value;


   if(!codCartao)
   {alert("Preencha o código do cartão");}
   else if(!recarga)
   {alert("Escolha o valor da recarga");}
   else if(!tipo)
   {alert("Escola o tipo do cartão");}
   else if(!cartao)
   {alert("Preencha o número do cartão");}
   else if(!data)
   {alert("Preencha a data do cartão");}
   else if(!cvv)
   {alert("Preencha o CVV");}
   else if(!nome)
   {alert("Preencha o nome");}
   else
   {
     form.submit();
   }
   
   


}