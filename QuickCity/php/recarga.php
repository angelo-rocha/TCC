<?php  

function conectar()
{
    $servername = "localhost";
    $database = "db_quickcity";
    $username = "root";
    $password = "";
    //check conexão
    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    return $conn;
}

$codOnibus = $_POST['codCartao'];
$valor = $_POST['valorBand'];
$tipoCartao = $_POST['tipoBand'];
$codCartao = $_POST['codCartaoCD'];
$data = $_POST['valCartaoCD'];
$cvv = $_POST['cvvCartaoCD'];
$nome = $_POST['nomeCartaoCD'];

if (($codOnibus == "") || ($valor == "") || ($tipoCartao == "") || ($data == "") || ($cvv=="") || ($nome =="") ){
    exit('<script>location.href = "http://localhost/xampp/TCC/QuickCity/init.html"</script>');
} else {
    session_start();
    $_SESSION['valor'] = $valor;
    $_SESSION['passe'] = $codOnibus;
    $_SESSION['cartao'] = $codCartao;

$conn = conectar();
 $teste="INSERT INTO recarga (cartaoOnibus,valor,tipo,CartaoBanco,validadeCartao,cvv,dono, dataRecarga) VALUES('$codOnibus','$valor','$tipoCartao','$codCartao','$data','$cvv','$nome', now());";
mysqli_query($conn,$teste) or die ("ERRO NO INSERT");
mysqli_close($conn);
exit('<script>
alert("Recarga realizada com Sucesso!");
location.href = "http://localhost/xampp/TCC/QuickCity/logado.php"
</script>');
}
?>









?>