<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-icon-180x180.png" />
    <link rel="icon" type="image/png" sizes="192x192" href="img/favicon/android-icon-192x192.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="96x96" href="img/favicon/favicon-96x96.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png" />
    <link rel="manifest" href="img/favicon/manifest.json" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="msapplication-TileImage" content="img/favicon/ms-icon-144x144.png" />
    <meta name="theme-color" content="#ffffff" />
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css" />
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="css/estilos.css" />

    <title>Lojas Baratão - Base</title>
</head>

<body>
    <div class="d-flex flex-column wrapper">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary border-bottom shadow-sm mb-3">
            <div class="container">
                <a class="navbar-brand" href="index.php"><strong>Lojas Baratão</strong></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav flex-grow-1">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="index.php">Página Inicial</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="mainContato.php">Contato</a>
                        </li>
                    </ul>
                    <div class="align-self-end">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="userCadastro.php" class="nav-link text-white">Quero me cadastrar</a>
                            </li>
                            <li class="nav-item">
                                <a href="userLogin.php" class="nav-link text-white">Logar</a>
                            </li>
                            <li class="nav-item">
                                <span class="badge rounded-pill bg-light text-primary position-absolute ms-4 mt-1" title="5 produto(s) no carrinho"><small>5</small></span>
                                <a href="mainCart.php" class="nav-link text-white">
                                    <i class="bi-cart" style="font-size: 24px; line-height: 24px;"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        
        </nav>      <?php
session_start();
if (!$_SESSION['Logado']) {
   echo '<main class="flex-fill">
         <div class="container">
            <div class="row g-3">
     <p>Acesso negado</p>
     <p><a href="userLogin.php" class="btn btn-lg btn-success">Logar</a></p>
     </div></div></main>';
exit;}?>
        <main class="flex-fill">
            <div class="container">

<?php
include "connect.php";
echo '<h3>Cadastro de Fotos</h3><hr>';
$data = $_GET;
$dirfotos = 'img/prod/';

// Prepara a vari�vel do arquivo
$arquivo = isset($_FILES["foto"]) ? $_FILES["foto"] : FALSE;

// Tamanho m�ximo do arquivo (em bytes)
$config["tamanho"] = 131072;

// Largura m�xima (pixels)
//$config["largura"] = 640;
$config["largura"] = 1200;

// Altura m�xima (pixels)
//$config["altura"]  = 480;
$config["altura"]  = 1600;

// Tipo do arquivo
$config["tipo"] = "image/jpeg";

// Formul�rio postado... executa as a��es
$erro = 0;
if ($arquivo) {

    //   // Verifica tamanho do arquivo
        if ($arquivo["size"] > $config["tamanho"]) {
           echo "<br>A foto deve ter no m�ximo " .intval($config["tamanho"]/1024). " KB.";
           $erro=1;
        }
        
        // Para verificar as dimens�es da imagem
        $tamanhos = getimagesize($arquivo["tmp_name"]);

        // Verifica largura
        if ($tamanhos[0] > $config["largura"]) {
            echo "<br>A largura da foto n�o deve ultrapassar " . $config["largura"] . " pixels.";
            $erro=1;
        }

        // Verifica altura
        if ($tamanhos[1] > $config["altura"]) {
            echo "<br>A altura da foto n�o deve ultrapassar " . $config["altura"] . " pixels.";
            $erro=1;
        }
        
        if ($tamanhos['mime'] != $config["tipo"]) {
            echo "<br>O arquivo deve ser do tipo " . $config["tipo"];
            $erro=1;
        }
        
    if ($erro==0) {
    
        $imagem_nome = $data['cod'].".jpg";
        $imagem_dir = $dirfotos.$imagem_nome;
        // Faz o upload da imagem
        move_uploaded_file($arquivo["tmp_name"], $imagem_dir);
        print'<p>&nbsp;</p><p align="center"><img border="0" src="'.$imagem_dir.'" width="200px"></p>
              <p align="center"><b><font face="Verdana" size=3 color="#008000">Foto Cadastrada</font></b></p>';
    }
    
    
}
?>
<br>
<a class="btn btn-lg btn-success" href="userAdminAreaProdNew.php">Cadastrar Novo</a>
                <a class="btn btn-lg btn-primary" href="userAdminAreaProd.php">Voltar</a>

</div>
        </main>
        <footer class="border-top text-muted bg-light">
            <div class="container">
                <div class="row py-3">
                    <div class="col-12 col-md-4 text-center">
                        &copy; 2022 - Lojas Baratão <br>
                        Rua Ficticia, 616, Cidadelão/RS <br>
                        CNPJ 00.000.000/0001-00 <br>
                    </div>
                    <div class="col-12 col-md-4 text-center">
                        <a href="mainPrivacy.php" class="text-decoration-none text-dark">
                            Política de Privacidade
                        </a><br>
                        <a href="mainTerms.php" class="text-decoration-none text-dark">
                            Termos de Uso
                        </a><br>
                        <a href="userAdmin.php" class="text-decoration-none text-dark">
                            Area Administrativa
                        </a><br>
                    </div>
                    <div class="col-12 col-md-4 text-center">
                        <a href="mainContato.php" class="text-decoration-none text-dark">
                            Contato Pelo Site
                        </a><br>
                        E-Mail: <a href="mailto:henrique@email.com" class="text-decoration-none text-dark">
                            henrique@email.com
                        </a><br>
                        Telefone: <a href="phone:5132323232" class="text-decoration-none text-dark">
                            (51)3232-3232
                        </a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
</body>

</html>