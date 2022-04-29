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
    <title>Lojas Baratão - Televisores</title>
        <style>
            p.corta-3linha {
                display: -webkit-box;
                -webkit-line-clamp: 3;
                -webkit-box-orient: vertical;
                overflow:hidden;
                text-overflow: ellipsis;
            }
            h5.corta-4linha {
                display: -webkit-box;
                -webkit-line-clamp: 4;
                -webkit-box-orient: vertical;
                overflow:hidden;
                text-overflow: ellipsis;
            }
        </style>
    </head>
    <!-- Definição de tamanho min para body e imagem de fundo -->
    <body style="min-width: 350px;">
        <!-- parametros para o menu de navegação superior -->

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
                        <?php session_start(); if (!$_SESSION['Logado']) { ?>
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
        <header class="container">
            <div id="carouselExampleFade" class="carousel slide carousel-dark carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="1000">
                        <img src="img/slides/banner.JPG" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="1000">
                        <img src="img/slides/banner2.JPG" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="1000">
                        <img src="img/slides/banner3.JPG" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button
                    class="carousel-control-prev"
                    type="button"
                    data-bs-target="#carouselExampleFade"
                    data-bs-slide="prev"
                >
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button
                    class="carousel-control-next"
                    type="button"
                    data-bs-target="#carouselExampleFade"
                    data-bs-slide="next"
                >
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <hr class="mt-3">
        </header>
        <!-- corpo com as informações principais pertinentes à página delimitando margens e redimencionamento -->
        <main class="mb-5 pb-5 mb-md-0">
            <div class="container">
                <!-- grid com os itens principais da página -->
                <div class="row g-3">
                    <div class="col-xl-2 col-lg-3 d-flex align-items-stretch">
                        <!-- primeiro item do grid -->
                        <div class="card text-center bg-light">  
                            <a href="/g2Oficial/php/cartItens.php?product=Smart TV Monitor LG LED 24, 2 HDMI, 1 USB, Wi-Fi - 24TL520S&price=1234.05" target="_self">
                                <img src="prod/tv/low/prodImg.jpg" class="card-img-top">
                            </a>
                            <div class="card-header">
                                R$ 1.234,05
                            </div>
                            <div class="card-body">
                                <h5 class="card-title corta-4linha">
                                    <a href="/g2Oficial/php/cartItens.php?product=Smart TV Monitor LG LED 24, 2 HDMI, 1 USB, Wi-Fi - 24TL520S&price=1234.05" target="_self">
                                        Smart TV Monitor LG LED 24´, 2 HDMI, 1 USB, Wi-Fi - 24TL520S
                                    </a>
                                </h5>
                                <p class="card-text corta-3linha">
                                    Smart TV LG acompanha o sistema webOS 3.5, onde vem com tudo para você, aproveitar a internet ao máximo. Navegue por sites, assista séries e vídeos em streaming, acesse aplicativos e muito mais. Televisor ou monitor, no trabalho ou lazer você, vai ter uma verdadeira experiência digital. Screen share. A tecnologia que permite espelhamento de diversos aparelhos (smartphones, tablets ou notebooks) diretamente na tela do Smart TV Monitor LG. E o mais impressionante, sem precisar de fios ou rede. Time machine readyA função Time Machine permite que você, faç,a gravações dos seus programas favoritos para assistir quando quiser e também permite avançar, retroceder e pausar a programação da TV ao vivo.
                                </p>
                            </div>
                            <div class="card-footer">
                                <form class="d-block">
                                    <button class="btn btn-success">
                                        <a href="/g2Oficial/php/cartItens.php?product=Smart TV Monitor LG LED 24, 2 HDMI, 1 USB, Wi-Fi - 24TL520S&price=1234.05" target="_self"><h5 style="color: black;">Adicionar ao Carrinho</h5></a>
                                    </button>
                                </form>
                                <small class="text-success">
                                    quantidade em estoque
                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 d-flex align-items-stretch">
                        <div class="card text-center bg-light"> 
                            <a href="/g2Oficial/php/cartItens.php?product=Smart TV LG 55 4K UHD, 3x HDMI, 2x USB, Wi-Fi, Assistente Virtual, Bluetooth - 55UN731C&price=4850.99" target="_self">
                                <img src="prod/tv/mid/prodImg.jpg" class="card-img-top">
                            </a>
                            <div class="card-header">
                                R$ 4.850,99
                            </div>
                            <div class="card-body">
                                <h5 class="card-title corta-4linha">
                                    <a href="/g2Oficial/php/cartItens.php?product=Smart TV LG 55 4K UHD, 3x HDMI, 2x USB, Wi-Fi, Assistente Virtual, Bluetooth - 55UN731C&price=4850.99" target="_self">
                                        Smart TV LG 55" 4K UHD, 3x HDMI, 2x USB, Wi-Fi, Assistente Virtual, Bluetooth - 55UN731C
                                    </a>
                                </h5>
                                <p class="card-text corta-3linha">
                                    Experimente o melhor da tecnologia com a Smart 55" UHD da LG, ela oferece tela de LED e resolução 4K UHD de 3840x2160 pixels obtendo uma incrível experiência de imagem, possui três entradas HDMI e duas USB, proporcionando mais possibilidades de conexão. Acompanha compatibilidade com o sistema de Inteligência Artificial ThinQ Al, conta com Bluetooth, sistema operacional webOS 5.0, Music Player, LG Content Store, painel de controle, conteúdos VR 360, miracast overlay, HDR10 e potência de som de 20W. Acesse aos aplicativos Netflix e Youtube, graças a conexão Smart, navegue na internet conectando-se diretamente a rede Wi-Fi. Além disso, seu design arrojado e diversos modos predefinidos de imagem fazem da Smart 55" uma TV elegante e eficiente.
                                </p>
                            </div>
                            <div class="card-footer">
                                <form class="d-block">
                                    <button class="btn btn-success">
                                        <a href="/g2Oficial/php/cartItens.php?product=Smart TV LG 55 4K UHD, 3x HDMI, 2x USB, Wi-Fi, Assistente Virtual, Bluetooth - 55UN731C&price=4850.99" target="_self"><h5 style="color: black;">Adicionar ao Carrinho</h5></a>
                                    </button>
                                </form>
                                <small class="text-success">
                                    quantidade em estoque
                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 d-flex align-items-stretch">
                        <div class="card text-center bg-light">  
                            <a href="/g2Oficial/php/cartItens.php?product=Smart TV Led 82 4K, LG, UHD, HDR Thinq AI, Alexa, 2 HDMI, 3 USB, Wi-Fi, Bluetooth&price=14678.89" target="_self">
                                <img src="prod/tv/high/prodImg.jpg" class="card-img-top">
                            </a>
                            <div class="card-header">
                                R$ 14.678,89
                            </div>
                            <div class="card-body">
                                <h5 class="card-title corta-4linha">
                                    <a href="/g2Oficial/php/cartItens.php?product=Smart TV Led 82 4K, LG, UHD, HDR Thinq AI, Alexa, 2 HDMI, 3 USB, Wi-Fi, Bluetooth&price=14678.89" target="_self">
                                        Smart TV Led 82" 4K, LG, UHD, HDR Thinq AI, Alexa, 2 HDMI, 3 USB, Wi-Fi, Bluetooth.
                                    </a>
                                </h5>
                                <p class="card-text corta-3linha">
                                    Prepare-se para um novo nível de qualidade de imagem com a LG UHD TV especialmente projetada para a sua diversão. Assista filmes, eventos esportivos ou jogue games com cores mais vivas e detalhes incríveis, com o Real 4K. Imagens mais reais com qualidade 4 vezes superior que as TVs Full HD.Ficou muito mais fácil falar com a TVAssista e saiba mais da tecnologia LG!
                                </p>
                            </div>
                            <div class="card-footer">
                                <form class="d-block">
                                    <button class="btn btn-success">
                                        <a href="/g2Oficial/php/cartItens.php?product=Smart TV Led 82 4K, LG, UHD, HDR Thinq AI, Alexa, 2 HDMI, 3 USB, Wi-Fi, Bluetooth&price=14678.89" target="_self"><h5 style="color: black;">Adicionar ao Carrinho</h5></a>
                                    </button>
                                </form>
                                <small class="text-success">
                                    quantidade em estoque
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="mt-3">
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
