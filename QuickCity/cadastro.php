<?php
//Dados do banco
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
$email = $_POST['email'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$conn = conectar();
 $teste="INSERT INTO cadastro (email,usuario,senha) VALUES('$email','$usuario','$senha')";
mysqli_query($conn,$teste) or die ("ERRO NO INSERT");
mysqli_close($conn);
exit('<script>location.href = "init.html"</script>');
?>