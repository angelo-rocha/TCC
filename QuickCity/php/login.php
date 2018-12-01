<?php
session_start();

    //check conexão
    $conn = mysqli_connect("localhost", "root", "","db_quickcity");

$email = $_POST['email'];
$senha = $_POST['senha'];

$result = mysqli_query($conn ,"SELECT * FROM cadastro WHERE email='$email' AND senha='$senha'");
$reg = mysqli_fetch_array($result);

if(mysqli_num_rows ($result)> 0)
{
$_SESSION['nome'] = $reg['nome'];
$_SESSION['senha'] = $senha;
$_SESSION['email'] = $email;
exit('<script>location.href = "http://localhost/xampp/TCC/QuickCity/logado.php"</script>');
}


?>