<?php
//dados de conexao com banco de dados do sistema
$host   = "localhost";
$user   = "root";
$pass   = "";
$db     = "bd_quickcity";

//captura acao que deve ser executada
$a = $_REQUEST["action"];


//identifica acao e invoca metodo a ser executado
switch ( $a ) {
    case "cadastros":
        cadatros(); break;

}

function conexaoBanco()
{
    global $host, $user, $pass, $db;
    $mysqli = new mysqli( $host, $user, $pass, $db );
    if ( $mysqli->connect_errno ) { printf("Connect failed: %s\n", $mysqli->connect_error); 
        exit(); 
}

function cadastros() {
    
    conexaoBanco();

    $sql = "SELECT * FROM cadastro ";
    if (!$res = $mysqli->query( $sql )) {
        echo "Erro ao executar SQL<br>";
        echo "Query: ".$sql."<br>";
        echo "Errno: ".$mysqli->errno."<br>";
        echo "Error: ".$mysqli->error."<br>";
        $res->close();
        exit;
    }
    //verifica se existe retorno de dados
    if ($res->num_rows === 0) {
        echo "Nenhum cadastro realizado até o momento.";
        $res->close();
        exit;
    }

    //monta tabela de resultados na pagina
    $saida = "<table>";
    while ($d = mysqli_fetch_array($res, MYSQLI_BOTH)) {
        $saida  = $saida. "<tr>"
                . "  <td style='width:25%'><img class=thumb src='/crud/imagens/".$d['foto']."' /></td>"
                . "  <td>"
                . "      <p class=plus>".$d['email']."</p>"
                . "      <p>".$d['usuario']."</p>"
                . "      <p>".$d['senha']."</p>"
                . "  </td>"
                . "</tr>";
    }
    $saida = $saida. "</table>";

    echo $saida;
    $res->close();
    $mysqli->close();
}
