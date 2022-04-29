<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <!-- Icones para a pagina (favicon) -->
    <link rel="apple-touch-icon" sizes="180x180" href="/g2Oficial/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/g2Oficial/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/g2Oficial/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/g2Oficial/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="/g2Oficial/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="/g2Oficial/img/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="/g2Oficial/img/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <!-- Detalhe de correção para itens demasiadamente longos-->
    <style>
        p.corta-3linha {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        h5.corta-4linha {
            display: -webkit-box;
            -webkit-line-clamp: 4;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
        }
    </style>
    <!-- Titulo da página -->
    <title>LOJA BARATÃO</title>
</head>
<!-- Definição de tamanho min para body e imagem de fundo -->

<body>
    <div class="d-flex flex-column wrapper">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary border-bottom shadow-sm mb-3">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <strong>Lojas Baratão</strong>
                </a>
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
                        <?php session_start(); if (!$_SESSION['LogadoADM']) { ?>
                            <li class="nav-item">
                                <a href="userLogin.php" class="nav-link text-white">Logar</a>
                            </li>
                        <?php } else { ?>
                            <li class="nav-item">
                                <a href="userLogin.php" class="nav-link text-white"><?php echo $_SESSION['Nome']; ?></a>
                            </li>
                        <?php } ?>
                            <li class="nav-item">
                                <span class="badge rounded-pill bg-light text-primary position-absolute ms-4 mt-1" title="<?php echo $x; ?> produto(s) no carrinho">
                                    <small><?php echo $x ?></small>
                                </span>
                                <a href="mainCart.php" class="nav-link text-white">
                                    <i class="bi-cart" style="font-size: 24px; line-height: 24px;"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    <?php
        session_start();
        session_destroy();
    ?>
<div style="text-align: center;">
        <h1>Carrinho vazio</h1>
    <a class="btn btn-primary" href="index.php">
        <h5 style="color: black;">inicio</h5>
    </a>
</div>
<footer class="border-top fixed-bottom text-muted bg-light">
            <div class="container">
                <div class="row py-3">
                    <div class="col-12 col-md-4 text-center text-md-left">
                        &copy; 2022 - LOJA BARATÃO
                    </div>
                    <div class="col-12 col-md-4 text-center">
                        <a href="/g2Oficial/privacy.php" class="text-decoration-none text-dark">Politica de privacidade</a>
                    </div>
                </div>
            </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    </body>
</html>
