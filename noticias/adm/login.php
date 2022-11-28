<link rel="shortcut icon" href="./Imagens/logo_ETEC_favicon.png" type="image/x-icon">

<?php

$login = $_POST["email"];
$senha = $_POST["password"];
$entrar = $_POST['submit'];

include "conexao.php";
if (isset($entrar)) {
    $sql = "SELECT * FROM usuario where email = '$login' and senha = '$senha'";
    $verifica = mysqli_query($conexao, $sql) or die("erro ao selecionar");
    if (mysqli_num_rows($verifica) <= 0) {
        echo "<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');
        window.location.href='index.html';</script>";
        die();
    } else {
        echo "<script language='javascript' type='text/javascript'>
        alert('Login feito com Sucesso!');</script>";
        header("Location: controle.php");
    };
};
?>