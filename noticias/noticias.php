<!DOCTYPE html>
<html lang="pt-br">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Noticias</title>
      <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="./Imagens/logo_ETEC_favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<div class="menu-container" id="menu-container">
            <header>
                <div class="logo">
                    <!--Logo da ETEC Jorge Street-->
                    <img src="./Imagens/logo_ETEC_01.png" alt="Logo da ETEC Jorge Street">
                </div>
                <!--logo-->
                <div class="redes-sociais">
                    <!--Redes Sociais da ETEC Jorge street-->
                    <!--Facebook-->
                    <a href="https://www.facebook.com/people/Etec-Jorge-Street/100084738010880/" arial-label="Acesse o nosso Facebook" target="_blank" class="facebook">
                        <i class="fa-brands fa-facebook sociais"></i>
                    </a>
                    <!--facebook-->
                    <!--Instagram-->
                    <a href="https://www.instagram.com/marketing_etecjorgestreet/?igshid=YmMyMTA2M2Y%3D" arial-label="Acesse o nosso Instagram" target="_blank" class="instagram">
                        <i class="fa-brands fa-instagram sociais"></i>
                    </a>
                    <!--Youtube-->
                    <a href="https://www.youtube.com/channel/UCJA_uTakTzcljA8e8OPZr0g" arial-label="Acesse o nosso canal do Youtube" target="_blank" class="youtube">
                        <i class="fa-brands fa-youtube sociais"></i>
                    </a>
                    <!--TikTok-->
                    <a href="https://www.tiktok.com/@etecjorgestreet?_t=8V7CkcymE7R&_r=1" arial-label="Acesse a nossa conta do TikTok" target="_blank" class="tiktok">
                        <i class="fa-brands fa-tiktok sociais"></i>
                    </a>
                    <!--Linkedin-->
                    <a href="https://www.linkedin.com/in/marketing-etec-jorge-street-tcc-343135249" arial-label="Acesse o nosso linkedin para conhecer a nossa equipe" target="_blank" class="linkedin">
                        <i class="fa-brands fa-linkedin sociais"></i>
                    </a>
                </div>
                <!--redes-sociais-->

                <!--Menu-->
                <div class="menu">
                    <!--Icone de Menu-->
                    <a onclick="abrir_menu()" class="menu-btn">
                        <i class="fa-solid fa-bars icon-menu"></i>
                    </a>
                </div>
                <!--menu-->
            </header>
            <!--header-->
        </div>
        <!--menu-container-->

        <!--menu aberto-->
        <div id="id_menu" class="menu-aberto">
            <h1 onclick="fechar()">
                <a href="javascript:void(0)" class="fechar"><i class="fa-solid fa-xmark"></i></a>
            </h1>
            <!-- <button id="toggle" class="button">toggle</button> -->
            <div class="switch">
                <input id='toggle' type="checkbox">
            </div>
            <ul>
                <li><a href="https://etecjorgestreet.netlify.app/index.html" onclick="color()">A ETEC</a></li>
                <li><a href="https://etecjorgestreet.netlify.app/vestibulinho.html" onclick="color()">vestibulinho</a></li>
                <li><a href="https://etecjorgestreet.netlify.app/alunos.html" onclick="color()">alunos</a></li>
                <li><a href="https://etecjorgestreet.netlify.app/professor.html" onclick="color()">Professores</a></li>
                <!-- <li><a href="tcc.html" onclick="color()">TCC</a></li> -->
                <li><a href="http://noticiasjorgestreet.epizy.com/noticias.php" onclick="color()">Notícias</a></li>
                <li><a href="http://memorias.jorgestreet.com.br" target="_blank" onclick="color()">memórias</a></li>
                <li><a href="https://etecjorgestreet.netlify.app/contatos.html" onclick="color()">contato</a></li>
            </ul>

        </div>
        <!--menu-aberto-->
         <!--Começo da pagina-->
         <div class="banner">
                <section class="module paralax paralax-1" data-anime="bottom"></section>
            </div>
<ul class="card-wrapper">
<?php

include "conexao.php";

      $sql = "SELECT * FROM noticias";

      $resultado = mysqli_query($conexao, $sql) or die ("Não foi possível realizar a consulta ao banco de dados");

      while ($linha=mysqli_fetch_array($resultado)) {

      $id = $linha["id"];
      $titulo = $linha["titulo"];
      $subtitulo = $linha["subtitulo"];
      $texto = $linha["texto"];

      echo '<a style="display: inline-block; margin: 10px 5px; color: #e44e4e; text-transform: uppercase; font-size: 1.5em;border-bottom: 3px solid transparent;" href="noticia.php?id=' . $id . '"><li class="card">';
            echo "<img width='100%' src='./adm/enviar-img/getImagem.php?id=$id'>";
            echo "<h3>$titulo</h3>";
            echo "<p>$subtitulo</p>";
      echo '</li></a>';

      }

      ?>
      </ul>
</ul>

<script src="js/theme.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
