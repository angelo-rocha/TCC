<!DOCTYPE html>
<html>
<head>
    <?php
    session_start();
    if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['email']) == true))
    {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    exit('<script>location.href = "http://localhost/xampp/TCC/QuickCity/init.html"</script>');
    }
    else{
        $nome = $_SESSION['nome'];
    }
    
    ?>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Quick City </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
   
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js"></script>
<script src="js/Inicio.js"></script>
</head>

<body>
        <!--NavBar-->
        <nav class="navbar navbar-light bg-dark justify-content-between">
            <label class="nav-item nav-link cor">Quick City</label>
            
            
              <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle user" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <?php echo "Seja Bem vindo, <strong>$nome</strong>";?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="tabela.php" target="_blank">Recargas Efetuadas</a>
          <a class="dropdown-item" href="init.html">Sair</a>
        </div>
      </li>
                   
          </nav>
                  
          <!--CARROSEL-->
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="image/carousel1.jpg" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="image/carousel2.jpg" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="image/carousel3.jpg" alt="Third slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
        <br>

<!-- MODAIS -->
<div id="mascara"></div>

<div class="window" id="consultaSaldo">
<div class="saldobox">
        <h1>Consulte seu saldo</h1>
            <p>Digite o código do cartão-passe:</p>          
           <input id="codigo" type="text" placeholder="Exemplo: 654321" maxlength="6" onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">
            <div>
            <a href="#saldoAtual" rel="modal"> <input type="button" value="Consultar" onclick="Pegacod()"></a>
        </div>
         </div>  
    </div>


<div class="window" id="saldoAtual">
<div class="saldobox">

       <h1>Saldo atual:</h1>  
       <input id="saldo" type="text" disabled>
        <a href="logado.php" > <input type="button" value="Ok"></a>
        </div>
                 
      
        </div>  
    </div>

<div class="window" id="Recarregar">
<div class="recargabox">
    <h1>Recarregar agora</h1>
        <form name="form" action="php/recarga.php" method="POST">
            <p>Digite o código do cartão-passe:</p>
            <input name="codCartao" type="text" placeholder="Exemplo: 654321" maxlength="6" onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">
            <fieldset>
                <span>Valor para recarga:<br></span>
                <label for="cincoreais">
                    <input id="cincoreais" type="radio" name="valorBand" value="5.00">R$5,00
                </label>
                <label for="dezreais">
                    <input id="dezreais" type="radio" name="valorBand" value="10.00">R$10,00
                </label>
                <label for="vintereais">
                    <input id="vintereais" type="radio" name="valorBand" value="20.00">R$20,00
                </label>
                <label for="cinquentareais">
                    <input id="cinquentareais" type="radio" name="valorBand" value="50.00">R$50,00
                </label>
                <label for="cemreais">
                    <input id="cemreais" type="radio" name="valorBand" value="100.00">R$100,00
                </label>
            </fieldset>

            <fieldset>
                <span><br>Tipo de cartão:<br></span>
                <label for="cartaocomum">
                    <input id="cartaocomum" type="radio" name="tipoBand" value="0">Comum
                </label>
                <label for="cartaoestudante">
                    <input id="cartaoestudantte" type="radio" name="tipoBand" value="1">Estudante
                </label>
            </fieldset>
        
        <div>
           <input type="button" value="Prosseguir" onclick="VerificaRecarga1(form)">
        </div>
    
    </div>  
    </div>

        <!-- PARTE 2 DADOS DO CARTAO --> 
        <div class="window" id="DadosCartao">
<div class="recargabox">
        <h1>Recarregar agora</h1>
           
                <p>Digite o número do cartão de débito/crédito sem espaço:</p>
                <input name="codCartaoCD" type="text" placeholder="Exemplo: 1234 5678 9012 3456" maxlength="16" onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">
                <p> Digite a data de validade do cartão:</p>
                <input name="valCartaoCD" type="text" placeholder="Exemplo: 12/12" maxlength="5">
                <p>Digite o CVV do cartão</p>
                <input name="cvvCartaoCD" type="text" placeholder="Exemplo: 000" maxlength="3" onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">
                <p> Digite o nome do dono do cartão:</p>
                <input name="nomeCartaoCD" type="text" placeholder="Exatamente como consta no cartão">      
             <input type="button" value="Realizar recarga" onclick="VerificaRecarga2(form)">       
        </div>  
    </div>
 <!-- PARTE 3 CONFIRMACAO DOS DADOS -->
<div class="window" id="ConfirmaDados">
    <div class="recargabox">
    <h1>Confirma os dados a seguir?</h1>               
            <p> Nome: </p><input type="text" value="" name="usuario" disabled>
            <p> Valor da recarga:</p><input type="text" value="" name="valor" disabled>
            <p> Cartão do Passe:</p><input type="text" value="" name="cartao" disabled>
         
           <input type="button" value="Confirmar recarga" onclick="recarga(form)">
           <a href="logado.php"><input type="button" value="Cancelar">   
    </div>  
</div>  
</form> 

       




    <!-- BOTOES REFERENTE A TELA LOGADO -->
    <div class="botoes">
            <a href="https://editor.mobilibus.com/web/timetable/27b4n" target="_blank"><input type="button" value="Consulte sua rota aqui"></a>
            <a href="#Recarregar" rel="modal"><input type="button" value="Realize sua recarga aqui"></a>  <!--AQUI TAMBÉM-->
            <a href="#consultaSaldo" rel="modal"><input type="button" value="Consulte seu saldo aqui"></a>                    <!--AQUI SERÁ UM MODAL-->
        </div>

         <div class="window" id="Recarga">
                <div class="loginbox">
            <h1>Recarregar agora</h1>
                <form action="cadastro.html" onsubmit="return VerificaLogin(this)">
                    <p>Digite o código do cartão-passe:</p>
                    <input name="codCartao" type="text" placeholder="Exemplo: 654321" maxlenght="6" onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">
                    
                    <form action="">
                    <fieldset>
                        <span>Valor para recarga:<br></span>
                        <label for="cincoreais">
                            <input id="cincoreais" type="radio" name="valorBand" value="5.00">R$5,00
                        </label>
                        <label for="dezreais">
                            <input id="dezreais" type="radio" name="valorBand" value="10.00">R$10,00
                        </label>
                        <label for="vintereais">
                            <input id="vintereais" type="radio" name="valorBand" value="20.00">R$20,00
                        </label>
                        <label for="cinquentareais">
                            <input id="cinquentareais" type="radio" name="valorBand" value="50.00">R$50,00
                        </label>
                        <label for="cemreais">
                            <input id="cemreais" type="radio" name="valorBand" value="100.00">R$100,00
                        </label>
                    </fieldset>
        
                </form>
                   <input type="submit" value="Recarregar">
                </form>
                </div>
            </div>  
</body>
</html>
