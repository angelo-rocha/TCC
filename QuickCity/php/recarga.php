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
$nome = $_POST['valCartaoCD'];
$confsenha = $_POST['nomeCartaoCD'];

if (($email == "") || ($usuario == "") || ($senha == "") || ($nome == "") || ($senha != $confsenha)){
    exit('<script>location.href = "http://localhost/xampp/TCC/QuickCity/init.html"</script>');
} else {

$conn = conectar();
 $teste="INSERT INTO cadastro (email,usuario,senha,nome) VALUES('$email','$usuario','$senha','$nome')";
mysqli_query($conn,$teste) or die ("ERRO NO INSERT");
mysqli_close($conn);
exit('<script>location.href = "http://localhost/xampp/TCC/QuickCity/init.html"</script>');
}
?>









?>