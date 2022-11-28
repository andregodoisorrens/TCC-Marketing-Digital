<link rel="shortcut icon" href="./Imagens/logo_ETEC_favicon.png" type="image/x-icon">

<?php

      include "conexao.php";

      $id = $_GET['id'];

      $sql = "DELETE FROM noticias WHERE id='$id'";
      $resultado = mysqli_query($conexao, $sql)or die ("Não foi possível realizar a exclusão dos dados.");
      echo "<h1>A notícia foi excluída com êxito!</h1>";
      header("location:./controle.php");
      ?>