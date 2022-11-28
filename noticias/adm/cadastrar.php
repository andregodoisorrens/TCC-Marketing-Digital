<!-- CSS only -->
<link rel="shortcut icon" href="../Imagens/logo_ETEC_favicon.png" type="image/x-icon">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<body style='max-width: 1400px; margin: 0 auto;'>
    
    <?php
date_default_timezone_set('America/Sao_Paulo');
$data = date("Y-m-d");
$hora = date("H:i:s");
$novadata = substr($data,8,2) . "/" .substr($data,5,2) . "/" . substr($data,0,4);
$novahora = substr($hora,0,2) . "h" .substr($hora,3,2) . "min";

echo "<h1 style='text-align: center;'>Sistema de Cadastro de Notícias</h1>";
echo "<hr><br>";
echo "<form style='width:70%;margin: 0 auto;' action='inserir.php' method='post' enctype='multipart/form-data'>";
echo "<div class='input-group mb-3'>
<span class='input-group-text' id='basic-addon1'>Nome:</span>
<input class='form-control' name='nome' type='text'>
</div>
<div class='input-group mb-3'>
<span class='input-group-text' id='basic-addon1'>Sobrenome:</span>
<input class='form-control' name='sobrenome' type='text'>
</div>
<div class='input-group mb-3'>
<span class='input-group-text' id='basic-addon1'>Cidade:</span>
<input class='form-control' name='cidade' type='text' size=30><span class='input-group-text' id='basic-addon1'>Estado:</span></i><input class='form-control' name='estado' type='text' size=5 placeholder='Exemplo: SP, RS, BA'>
</div>
<div class='input-group mb-3'>
<span class='input-group-text' id='basic-addon1'>Email:</span>
<input class='form-control' name='email' type='text' size=30 placeholder='Exemplo: feitosac@yahoo.com'>
</div>
<div class='input-group mb-3'>
<span class='input-group-text' id='basic-addon1'>Título do Texto:</span>
<input class='form-control' name='titulo' type='text' size=30>
</div>
<div class='input-group mb-3'>
<span class='input-group-text' id='basic-addon1'>Subtítulo do Texto:</span>
<textarea class='form-control' name='subtitulo' rows=5 cols=30></textarea>
</div>
<div class='input-group mb-3'>
<span class='input-group-text' id='basic-addon1'>Texto:</span>
<textarea class='form-control' name='texto' rows=10 cols=30></textarea>
</div>
<div class='input-group mb-3'>
<input class='form-control' type='file' required name='arquivo'>
</div>
<input name='data' type='hidden' value='$data'><input name='hora' type='hidden' value='$hora'>
<div class='input-group mb-3'><input class='form-control' type='submit' value='Cadastrar'></div>
<div class='input-group mb-3'><a class='form-control' href='controle.php'>Ir para a área de controle</a><a class='form-control' href='noticias.php'>ir para a área de Noticias</a></div>
</form>
<hr>
<i>Campos marcados com <b>*</b> são obrigatórios no cadastro.<br>
<b>Observação</b>: Será inserido no seu cadastro a data atual, bem como a hora atual do cadastro<br>
Data: $novadata - Hora: $novahora<br>";

?>
</body>