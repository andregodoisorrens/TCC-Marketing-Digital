<link rel="shortcut icon" href="./Imagens/logo_ETEC_favicon.png" type="image/x-icon">

<?php

include "conexao.php";
$id = $_POST['id_novo'];
$nome = $_POST['nome_novo'];
$sobrenome = $_POST['sobrenome_novo'];
$cidade = $_POST['cidade_novo'];
$estado = $_POST['estado_novo'];
$email = $_POST['email_novo'];
$titulo = $_POST['titulo_novo'];
$subtitulo = $_POST['subtitulo_novo'];
$texto = $_POST['texto_novo'];
$data = $_POST['data'];
$hora = $_POST['hora'];
// $mysqlImg = $_FILES["arquivo"];
$mysqlImg = isset($_FILES['arquivo']) ? $_FILES['arquivo']: NULL;
$ver = $_POST['ver_novo'];

mysqli_connect($host,$username,$password) or die("Impossível Conectar");

mysqli_query($conexao, "UPDATE noticias SET id='$id',nome='$nome',sobrenome='$sobrenome',cidade='$cidade',estado='$estado', data='$novadata', hora='$novahora' email='$email',titulo='$titulo',subtitulo='$subtitulo',texto='$texto',ver='$ver' WHERE id='$id'") or
die("Não foi possível realizar a consulta ao banco de dados");

echo "<h1>Notícia alterada com sucesso!</h1>";
if (is_null($mysqlImg) === false) {
//pega extensão da foto
$imgs = explode('.',$mysqlImg['name']);
//cria um nome temporário do arquivo foto enviado
$nametemp = session_id().'tmp-.'.(date('dmYHis')).'.'.(end($imgs));
//envia a foto para o diretório
move_uploaded_file($mysqlImg['tmp_name'], $nametemp);
//converte o arquivo de foto em bytes
$imagem = renderBytePicture($nametemp);

$sts = $pdo->prepare('UPDATE noticias SET PES_IMG='$imagem' WHERE id=?;');
$sts->bindValue(1, $imagem, PDO::PARAM_LOB);
$sts->bindValue(2, $im['type'], PDO::PARAM_STR);
$sts->bindValue(3, filesize($nametemp), PDO::PARAM_INT);
$sts->bindValue(4, $id, PDO::PARAM_INT);
$sts->execute();

                  unlink($nomeFinal);
                  echo "<h1>Cadastro efetuado com sucesso!</h1>";
                  header("location:../noticias.php");
      }
      

?><link rel="shortcut icon" href="./Imagens/logo_ETEC_favicon.png" type="image/x-icon">

<?php

include "conexao.php";
$id = $_POST['id_novo'];
$nome = $_POST['nome_novo'];
$sobrenome = $_POST['sobrenome_novo'];
$cidade = $_POST['cidade_novo'];
$estado = $_POST['estado_novo'];
$email = $_POST['email_novo'];
$titulo = $_POST['titulo_novo'];
$subtitulo = $_POST['subtitulo_novo'];
$texto = $_POST['texto_novo'];
$data = $_POST['data'];
$hora = $_POST['hora'];
// $mysqlImg = $_FILES["arquivo"];
$mysqlImg = isset($_FILES['arquivo']) ? $_FILES['arquivo']: NULL;
$ver = $_POST['ver_novo'];

mysqli_connect($host,$username,$password) or die("Impossível Conectar");

mysqli_query($conexao, "UPDATE noticias SET id='$id',nome='$nome',sobrenome='$sobrenome',cidade='$cidade',estado='$estado', data='$novadata', hora='$novahora' email='$email',titulo='$titulo',subtitulo='$subtitulo',texto='$texto',ver='$ver' WHERE id='$id'") or
die("Não foi possível realizar a consulta ao banco de dados");

echo "<h1>Notícia alterada com sucesso!</h1>";
if (is_null($mysqlImg) === false) {
//pega extensão da foto
$imgs = explode('.',$mysqlImg['name']);
//cria um nome temporário do arquivo foto enviado
$nametemp = session_id().'tmp-.'.(date('dmYHis')).'.'.(end($imgs));
//envia a foto para o diretório
move_uploaded_file($mysqlImg['tmp_name'], $nametemp);
//converte o arquivo de foto em bytes
$imagem = renderBytePicture($nametemp);

$sts = $pdo->prepare('UPDATE noticias SET PES_IMG='$imagem' WHERE id=?;');
$sts->bindValue(1, $imagem, PDO::PARAM_LOB);
$sts->bindValue(2, $im['type'], PDO::PARAM_STR);
$sts->bindValue(3, filesize($nametemp), PDO::PARAM_INT);
$sts->bindValue(4, $id, PDO::PARAM_INT);
$sts->execute();

                  unlink($nomeFinal);
                  echo "<h1>Cadastro efetuado com sucesso!</h1>";
                  header("location:../noticias.php");
      }
      

?><link rel="shortcut icon" href="./Imagens/logo_ETEC_favicon.png" type="image/x-icon">

<?php

include "conexao.php";
$id = $_POST['id_novo'];
$nome = $_POST['nome_novo'];
$sobrenome = $_POST['sobrenome_novo'];
$cidade = $_POST['cidade_novo'];
$estado = $_POST['estado_novo'];
$email = $_POST['email_novo'];
$titulo = $_POST['titulo_novo'];
$subtitulo = $_POST['subtitulo_novo'];
$texto = $_POST['texto_novo'];
$data = $_POST['data'];
$hora = $_POST['hora'];
// $mysqlImg = $_FILES["arquivo"];
$mysqlImg = isset($_FILES['arquivo']) ? $_FILES['arquivo']: NULL;
$ver = $_POST['ver_novo'];

mysqli_connect($host,$username,$password) or die("Impossível Conectar");

mysqli_query($conexao, "UPDATE noticias SET id='$id',nome='$nome',sobrenome='$sobrenome',cidade='$cidade',estado='$estado', data='$novadata', hora='$novahora' email='$email',titulo='$titulo',subtitulo='$subtitulo',texto='$texto',ver='$ver' WHERE id='$id'") or
die("Não foi possível realizar a consulta ao banco de dados");

echo "<h1>Notícia alterada com sucesso!</h1>";
if (is_null($mysqlImg) === false) {
//pega extensão da foto
$imgs = explode('.',$mysqlImg['name']);
//cria um nome temporário do arquivo foto enviado
$nametemp = session_id().'tmp-.'.(date('dmYHis')).'.'.(end($imgs));
//envia a foto para o diretório
move_uploaded_file($mysqlImg['tmp_name'], $nametemp);
//converte o arquivo de foto em bytes
$imagem = renderBytePicture($nametemp);

$sts = $pdo->prepare('UPDATE noticias SET PES_IMG='$imagem' WHERE id=?;');
$sts->bindValue(1, $imagem, PDO::PARAM_LOB);
$sts->bindValue(2, $im['type'], PDO::PARAM_STR);
$sts->bindValue(3, filesize($nametemp), PDO::PARAM_INT);
$sts->bindValue(4, $id, PDO::PARAM_INT);
$sts->execute();

                  unlink($nomeFinal);
                  echo "<h1>Cadastro efetuado com sucesso!</h1>";
                  header("location:../noticias.php");
      }
      

?><link rel="shortcut icon" href="./Imagens/logo_ETEC_favicon.png" type="image/x-icon">

<?php

include "conexao.php";
$id = $_POST['id_novo'];
$nome = $_POST['nome_novo'];
$sobrenome = $_POST['sobrenome_novo'];
$cidade = $_POST['cidade_novo'];
$estado = $_POST['estado_novo'];
$email = $_POST['email_novo'];
$titulo = $_POST['titulo_novo'];
$subtitulo = $_POST['subtitulo_novo'];
$texto = $_POST['texto_novo'];
$data = $_POST['data'];
$hora = $_POST['hora'];
// $mysqlImg = $_FILES["arquivo"];
$mysqlImg = isset($_FILES['arquivo']) ? $_FILES['arquivo']: NULL;
$ver = $_POST['ver_novo'];

mysqli_connect($host,$username,$password) or die("Impossível Conectar");

mysqli_query($conexao, "UPDATE noticias SET id='$id',nome='$nome',sobrenome='$sobrenome',cidade='$cidade',estado='$estado', data='$novadata', hora='$novahora' email='$email',titulo='$titulo',subtitulo='$subtitulo',texto='$texto',ver='$ver' WHERE id='$id'") or
die("Não foi possível realizar a consulta ao banco de dados");

echo "<h1>Notícia alterada com sucesso!</h1>";
if (is_null($mysqlImg) === false) {
//pega extensão da foto
$imgs = explode('.',$mysqlImg['name']);
//cria um nome temporário do arquivo foto enviado
$nametemp = session_id().'tmp-.'.(date('dmYHis')).'.'.(end($imgs));
//envia a foto para o diretório
move_uploaded_file($mysqlImg['tmp_name'], $nametemp);
//converte o arquivo de foto em bytes
$imagem = renderBytePicture($nametemp);

$sts = $pdo->prepare('UPDATE noticias SET PES_IMG='$imagem' WHERE id=?;');
$sts->bindValue(1, $imagem, PDO::PARAM_LOB);
$sts->bindValue(2, $im['type'], PDO::PARAM_STR);
$sts->bindValue(3, filesize($nametemp), PDO::PARAM_INT);
$sts->bindValue(4, $id, PDO::PARAM_INT);
$sts->execute();

                  unlink($nomeFinal);
                  echo "<h1>Cadastro efetuado com sucesso!</h1>";
                  header("location:../noticias.php");
      }
      

?><link rel="shortcut icon" href="./Imagens/logo_ETEC_favicon.png" type="image/x-icon">

<?php

include "conexao.php";
$id = $_POST['id_novo'];
$nome = $_POST['nome_novo'];
$sobrenome = $_POST['sobrenome_novo'];
$cidade = $_POST['cidade_novo'];
$estado = $_POST['estado_novo'];
$email = $_POST['email_novo'];
$titulo = $_POST['titulo_novo'];
$subtitulo = $_POST['subtitulo_novo'];
$texto = $_POST['texto_novo'];
$data = $_POST['data'];
$hora = $_POST['hora'];
// $mysqlImg = $_FILES["arquivo"];
$mysqlImg = isset($_FILES['arquivo']) ? $_FILES['arquivo']: NULL;
$ver = $_POST['ver_novo'];

mysqli_connect($host,$username,$password) or die("Impossível Conectar");

mysqli_query($conexao, "UPDATE noticias SET id='$id',nome='$nome',sobrenome='$sobrenome',cidade='$cidade',estado='$estado', data='$novadata', hora='$novahora' email='$email',titulo='$titulo',subtitulo='$subtitulo',texto='$texto',ver='$ver' WHERE id='$id'") or
die("Não foi possível realizar a consulta ao banco de dados");

echo "<h1>Notícia alterada com sucesso!</h1>";
if (is_null($mysqlImg) === false) {
//pega extensão da foto
$imgs = explode('.',$mysqlImg['name']);
//cria um nome temporário do arquivo foto enviado
$nametemp = session_id().'tmp-.'.(date('dmYHis')).'.'.(end($imgs));
//envia a foto para o diretório
move_uploaded_file($mysqlImg['tmp_name'], $nametemp);
//converte o arquivo de foto em bytes
$imagem = renderBytePicture($nametemp);

$sts = $pdo->prepare('UPDATE noticias SET PES_IMG='$imagem' WHERE id=?;');
$sts->bindValue(1, $imagem, PDO::PARAM_LOB);
$sts->bindValue(2, $im['type'], PDO::PARAM_STR);
$sts->bindValue(3, filesize($nametemp), PDO::PARAM_INT);
$sts->bindValue(4, $id, PDO::PARAM_INT);
$sts->execute();

                  unlink($nomeFinal);
                  echo "<h1>Cadastro efetuado com sucesso!</h1>";
                  header("location:../noticias.php");
      }
      

?><link rel="shortcut icon" href="./Imagens/logo_ETEC_favicon.png" type="image/x-icon">

<?php

include "conexao.php";
$id = $_POST['id_novo'];
$nome = $_POST['nome_novo'];
$sobrenome = $_POST['sobrenome_novo'];
$cidade = $_POST['cidade_novo'];
$estado = $_POST['estado_novo'];
$email = $_POST['email_novo'];
$titulo = $_POST['titulo_novo'];
$subtitulo = $_POST['subtitulo_novo'];
$texto = $_POST['texto_novo'];
$data = $_POST['data'];
$hora = $_POST['hora'];
// $mysqlImg = $_FILES["arquivo"];
$mysqlImg = isset($_FILES['arquivo']) ? $_FILES['arquivo']: NULL;
$ver = $_POST['ver_novo'];

mysqli_connect($host,$username,$password) or die("Impossível Conectar");

mysqli_query($conexao, "UPDATE noticias SET id='$id',nome='$nome',sobrenome='$sobrenome',cidade='$cidade',estado='$estado', data='$novadata', hora='$novahora' email='$email',titulo='$titulo',subtitulo='$subtitulo',texto='$texto',ver='$ver' WHERE id='$id'") or
die("Não foi possível realizar a consulta ao banco de dados");

echo "<h1>Notícia alterada com sucesso!</h1>";
if (is_null($mysqlImg) === false) {
//pega extensão da foto
$imgs = explode('.',$mysqlImg['name']);
//cria um nome temporário do arquivo foto enviado
$nametemp = session_id().'tmp-.'.(date('dmYHis')).'.'.(end($imgs));
//envia a foto para o diretório
move_uploaded_file($mysqlImg['tmp_name'], $nametemp);
//converte o arquivo de foto em bytes
$imagem = renderBytePicture($nametemp);

$sts = $pdo->prepare('UPDATE noticias SET PES_IMG='$imagem' WHERE id=?;');
$sts->bindValue(1, $imagem, PDO::PARAM_LOB);
$sts->bindValue(2, $im['type'], PDO::PARAM_STR);
$sts->bindValue(3, filesize($nametemp), PDO::PARAM_INT);
$sts->bindValue(4, $id, PDO::PARAM_INT);
$sts->execute();

                  unlink($nomeFinal);
                  echo "<h1>Cadastro efetuado com sucesso!</h1>";
                  header("location:../noticias.php");
      }
      

?>