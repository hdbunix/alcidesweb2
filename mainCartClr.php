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

<body style="min-width: 372px;" background="/g2Oficial/img/background.jpg">


    <!-- parametros para o menu de navegação superior -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger border-bottom shadow-sm mb-3">
        <!-- div para conteúdo responsivo -->
        <div class="container">
            <a class="navbar-brand" href="/g2Oficial/index.php">
                <strong>LOJA BARATÃO</strong>
            </a>
            <!-- Botão para menu com conteúdo responsivo (ocultar menu) -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                <!-- icone para o menu responsivo oculto -->
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- div associada ao botão de menu responsivo oculto (note a classe navbar-collapse chamada no data-target acima) -->
            <div class="navbar-collapse collapse">
                <!-- o menu construído -->
                <ul class="navbar-nav flex-grow-1">

                    <li class="nav-item">
                        <a href="/g2Oficial/contato.php" class="nav-link text-white">Contato</a>
                    </li>
                </ul>
                <!-- div alinhada ao lado direito da página -->
                <div class="align-self-end">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/g2Oficial/cadastroLogin.php" class="nav-link text-white">Quero me Cadastrar</a>
                        </li>
                        <li class="nav-item">
                            <a href="/g2Oficial/cadastroLogin.php" class="nav-link text-white">Entrar</a>
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
