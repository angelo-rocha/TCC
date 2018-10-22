   
$(document).ready(function(){
	//carrousel
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
  

	 $("input").blur(function(){
		if($(this).val() == "")
				{
						$(this).css({"border" : "1px solid #F00", "padding": "2px"});
				}
				else
				{
					$(this).css({"border" : "1px solid", "padding": "2px"});
					
				}
	 });

	});


function VerificaLogin(form){
 
  var user = form.user.value;
  var passw = form.password.value;

  if(!user)
  {
    alert("Preencha o usuário");
    return false;
  }
  else
  {
    return true;
  }
};