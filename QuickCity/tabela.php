<!DOCTYPE html>
<html>
<head>
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
<script src="js/tabela.js"></script>
</head>

<body>
        <!--NavBar--> 
        <nav class="navbar navbar-light bg-dark justify-content-between">
            <label class="nav-item nav-link cor">Quick City</label>
            <button name="exportar" class="btn btn-outline-primary my-2 my-sm-0" type="button" onclick="exportar()">Exportar</button>
          </nav>
          <?php
          // Conexão ao banco
          
          $link = mysqli_connect('localhost','root','','db_quickcity');  
          if($link){
          
          $sql = "SELECT dono, cartaoOnibus, dataRecarga, valor FROM recarga";
          
          $consulta = mysqli_query($link,$sql);
          
          echo '<table id="tabela" class="table table-striped table-dark">';
          
          echo '<tr>';
          
          echo '<td>NOME</td>';
          
          echo '<td>NÚMERO DO CARTÃO</td>';

          echo '<td>VALOR</td>';
          
          echo '<td>DATA DE RECARGA</td>';
          
          echo '</tr>';
          
          // Armazena os dados da consulta em um array associativo
          
          while($registro = mysqli_fetch_assoc($consulta)){
          
          echo '<tr>';
          
          echo '<td class="dono">'.$registro["dono"].'</td>';
          
          echo '<td class="cartao">'.$registro["cartaoOnibus"].'</td>';

          echo '<td class="valor">'.$registro["valor"].',00 R$</td>';
          
          echo '<td class="data">'.$registro["dataRecarga"].'</td>';
          
          echo '</tr>';
          
          }
          
          echo '</table>';
          
          }
          
          ?>

<footer>

</footer>

        
</body>
</html>