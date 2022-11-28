<link rel="shortcut icon" href="./Imagens/logo_ETEC_favicon.png" type="image/x-icon">

<?php

$nome = $_POST['fname'];
$sobrenome = $_POST['lname'];
$data = $_POST['Data-nascimento'];
$senha = $_POST['password'];
$email = $_POST['email'];
$celular = $_POST['tel'];
$nome_c = $nome . ' ' . $sobrenome;

include "conexao.php";
        $query = "INSERT INTO usuario (id, nome, sobrenome, nasc, email, telefone, senha) VALUE ('', '$nome', '$sobrenome', '$data', '$email', '$celular', '$senha')";

        $insert = mysqli_query($conexao,$query);

        if ($insert) {
            echo "<script language='javascript' type='text/javascript'>
            alert('Usuario cadastrado com sucesso!!');</script>";
            setcookie('login', $login);
            header("Location: controle.php");
            die();
        } else {
            echo "<script language='javascript' type='text/javascript'>
            alert('Cadastro Falhou!!');
            window.location.href='cadastro.html';</script>";
        };
?>