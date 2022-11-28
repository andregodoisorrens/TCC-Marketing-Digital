<?php


$host = "localhost";
$username = "root";
$password = "";
$db = "noticias";

$conexao = new mysqli($host, $username, $password, $db);

if(!$conexao){
    echo "Erro ao conectar ao Banco de Dados";
    // mysql_error();
    exit;
}
// phpinfo()
?>