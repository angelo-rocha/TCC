<?php
          $conn = mysqli_connect("localhost", "root", "","db_quickcity");

          $cartao = $_POST['codigo'];
           $result = mysqli_query($conn ,"SELECT Sum(valor) as valor FROM recarga WHERE cartaoOnibus='$cartao'");
           $reg = mysqli_fetch_array($result);
           $res = $reg["valor"];
           echo $res;
              
        ?> 