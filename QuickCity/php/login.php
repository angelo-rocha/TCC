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

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

echo($usuario + "Entrou");

?>