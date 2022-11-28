<link rel="shortcut icon" href="./Imagens/logo_ETEC_favicon.png" type="image/x-icon">

<?php

include "conexao.php";

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$email = $_POST['email'];
$titulo = $_POST['titulo'];
$subtitulo = $_POST['subtitulo'];
$texto = $_POST['texto'];
$data = $_POST['data'];
$hora = $_POST['hora'];
$mysqlImg = $_FILES["arquivo"];

if($mysqlImg != NULL) {
	$nomeFinal = time().'.jpg';
	if (move_uploaded_file($mysqlImg['tmp_name'], $nomeFinal)) {
		$tamanhoImg = filesize($nomeFinal);

		$mysqlImg = addslashes(fread(fopen($nomeFinal, "r"), $tamanhoImg));

		mysqli_connect($host,$username,$password) or die("Impossível Conectar");

		// @mysql_select_db($db) or die("Impossível Conectar");

		mysqli_query($conexao, "INSERT INTO noticias (nome, sobrenome, cidade, estado, email, data, hora, titulo, subtitulo, texto, PES_IMG) VALUES ('$nome', '$sobrenome', '$cidade', '$estado', '$email', '$data', '$hora', '$titulo', '$subtitulo', '$texto','$mysqlImg')") or
		die("O sistema não foi capaz de executar a query");

		unlink($nomeFinal);
        echo "<h1>Cadastro efetuado com sucesso!</h1>";
		header("location:../noticias.php");
	}
}
else {
	echo"Você não realizou o upload de forma satisfatória.";
}

// $sql = "INSERT INTO noticias (nome, sobrenome, cidade, estado, email, data, hora, titulo, subtitulo, texto) VALUES ('$nome', '$sobrenome', '$cidade', '$estado', '$email', '$data', '$hora', '$titulo', '$subtitulo', '$texto')";

// //Inserindo os dados

// $sql = mysqli_query($conexao, $sql) or die ("Houve erro na gravação dos dados, por favor, clique em voltar e verifique os campos obrigatórios!");


// header("location:./enviar-img/index.php");


?>