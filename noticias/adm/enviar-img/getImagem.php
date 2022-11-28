<?php
	$host = "localhost";
	$username = "root";
	$password = "";
	$db = "noticias";
	
	$PicNum = $_GET["id"];
    $conexao = new mysqli($host, $username, $password, $db);

	mysqli_connect($host,$username,$password) or die("Impossível conectar ao banco.");
	// @mysql_select_db($db) or die("Impossível conectar ao banco.");
	$result=mysqli_query($conexao, "SELECT * FROM noticias WHERE id=$PicNum") or die("Impossível executar a query ");
	$row=mysqli_fetch_object($result);
	Header( "Content-type: image/gif");
	echo $row->PES_IMG;
?>