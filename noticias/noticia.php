<?php
        $id = $_GET['id'];
        include "conexao.php";
        $sql = "SELECT * FROM noticias where id = $id";
        $resultado = mysqli_query($conexao, $sql) or die ("Não foi possível realizar a consulta ao banco de dados");
        $sqlLink = "SELECT * FROM noticias ORDER BY id DESC LIMIT 15";
        $links = mysqli_query($conexao, $sqlLink);
        while ($linha=mysqli_fetch_array($resultado)) {
    ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $linha['titulo']; ?></title>
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

    <div class="tela-n">
        <div class="menu-links">
            <?php 
            while ($link = mysqli_fetch_array($links)){
                $id = $link['id'];?>
                <ul>
                    <li>
                        <a href='noticia.php?<?php echo "id=$id"; ?>'> <?php echo $link['titulo']; ?></a>
                    </li>
                </ul>

            <?php } ?>
            
        </div>
        <div class="noticias">
            <div class="titulo">
                <h1><?php echo $linha['titulo']; ?></h1>
            </div>
            <div class='n-e'>
                <span><?php echo $linha['nome'] . " " . $linha['sobrenome']; ?></span> -
                <span><?php echo $linha['email']; ?></span>
                <br>
                <span><?php echo $linha['data'] . " ás " . $linha['hora']; ?></span> -
                <span><?php echo $linha['cidade'] . ' - ' . $linha['estado']; ?></span>
            </p>
            <div class="subtitulo"><h3><?php echo $linha['subtitulo']; ?></h3></div>
            <?php $id = $_GET['id']; ?>
            <img width='100%' src='./adm/enviar-img/getImagem.php?id=<?php echo $id; ?>'>
            <p><?php echo $linha['texto']; ?></p>
        </div>
        <?php } ?>
    </div>

    <script src="js/theme.js"></script>
    <script src="js/main.js"></script>
    
</body>
</html>