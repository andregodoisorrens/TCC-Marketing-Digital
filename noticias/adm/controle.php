<link rel="shortcut icon" href="../Imagens/logo_ETEC_favicon.png" type="image/x-icon">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<?php
include "conexao.php";
echo "<h1 style='text-align: center;'>Controle de Noticias</h1>";
echo "<div class='input-group mb-3'>
<button class='form-control'><a class='form-control' target='_blank' href='../noticias.php'>Noticias</a></button>
<button class='form-control'><a class='form-control' href='cadastrar.php'>Cadastrar Noticias</a></button>
<button class='form-control'><a class='form-control' href='cadastro.html'>Cadastrar Usuário</a></button>
</div>";
echo "<hr>";
      $sql = "SELECT * FROM noticias";
      $resultado = mysqli_query($conexao, $sql) or die ("Não foi possível realizar a consulta ao banco de dados");

      echo "<table class='table'>";
      echo "<tr>";
      echo "<th scope='col'>ID:</th>";
      echo "<th scope='col'>Nome:</th>";
      echo "<th scope='col'>Sobrenome:</th>";
      echo "<th scope='col'>Cidade:</th>";
      echo "<th scope='col'>UF:</th>";
      echo "<th scope='col'>Email:</th>";
      echo "<th scope='col'>Data:</th>";
      echo "<th scope='col'>Hora:</th>";
      echo "<th scope='col'>Título:</th>";
      echo "<th scope='col'>imagem:</th>";
      echo "<th scope='col'>Disponível?</th>";
    //   echo "<th scope='col'>Alterar</th>";
      echo "<th scope='col'>Excluir</th>";
      echo "</tr>";

      while ($linha=mysqli_fetch_array($resultado)) {
      $id = $linha["id"];
      $nome = $linha["nome"];
      $sobrenome = $linha["sobrenome"];
      $cidade = $linha["cidade"];
      $estado = $linha["estado"];
      $email = $linha["email"];
      $data = $linha["data"];
      $hora = $linha["hora"];
      $titulo = $linha["titulo"];
      $ver = $linha["ver"];
      $img = $linha['PES_IMG'];

      $novadata = substr($data,8,2) . "/" .substr($data,5,2) . "/" . substr($data,0,4);
      $novahora = substr($hora,0,2) . "h" .substr($hora,3,2) . "min";


      echo "<tr>";
      echo "<th scope='row'>$id<br></th>";
      echo "<th scope='row'>$nome<br></th>";
      echo "<th scope='row'>$sobrenome<br></th>";
      echo "<th scope='row'>$cidade<br></th>";
      echo "<th scope='row'>$estado<br></th>";
      echo "<th scope='row'>$email<br></th>";
      echo "<th scope='row'>$novadata<br></th>";
      echo "<th  scope='row'>$novahora<br></th>";
      echo "<th scope='row'>$titulo<br></th>";
      echo "<th scope='row'><img width='100%' src='./enviar-img/getImagem.php?id=$id'></th>";
      echo "<th scope='row'>$ver<br></th>";
    //   echo "<th scope='row'><a class='form-control' href='alterar.php?id=$id'>Alterar</a><br></th>";
      echo "<th scope='row'><a class='form-control' href='excluir.php?id=$id'>Excluir</a><br></th>";
      echo "</tr>";
      echo "<br>";

      }

      echo "</table>";

      ?>