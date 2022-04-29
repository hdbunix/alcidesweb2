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
    <title>Lojas Baratão - Celulares</title>
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
        <!-- Titulo da página -->
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
                    <a href="/g2Oficial/php/cartItens.php?product=Smartphone Samsung Galaxy A03 Core, 32GB, RAM 2GB, Octa-Core, Câmera 8MP, Preto - SM-A032MZKRZTO&price=649" target="_self">
                    <div class="col-xl-2 col-lg-3 d-flex align-items-stretch">
                        <!-- primeiro item do grid -->
                        <div class="card text-center bg-light">  

                            <a href="/g2Oficial/php/cartItens.php?product=Smartphone Samsung Galaxy A03 Core, 32GB, RAM 2GB, Octa-Core, Câmera 8MP, Preto - SM-A032MZKRZTO&price=649" target="_self">
                                <img src="prod/cel/low/prodImg.jpg" class="card-img-top">
                            </a>
                            <div class="card-header">
                                R$ 649,00
                            </div>
                            <div class="card-body">
                                <h5 class="card-title corta-4linha">
                                    <a href="/g2Oficial/php/cartItens.php?product=Smartphone Samsung Galaxy A03 Core, 32GB, RAM 2GB, Octa-Core, Câmera 8MP, Preto - SM-A032MZKRZTO&price=649" target="_self">
                                                                Smartphone Samsung Galaxy A03 Core, 32GB, RAM 2GB, Octa-Core, Câmera 8MP, Preto - SM-A032MZKRZTO

                                    </a>
                                </h5>
                                <p class="card-text corta-3linha">
                                    O Samsung Galaxy A03 Core é um smartphone Android de médio porte, perfeito para quem não tem muitos requisitos, mas não abre mão de uma boa tela sensível ao toque. Começando com conexões Wi-Fi e GPS, as funções fornecidas pelo Samsung Galaxy A03 Core são mais ou menos as mesmas fornecidas por outros dispositivos avançados. Possui reprodutores multimídia, videoconferência e Bluetooth. Enfatizamos 32 GB de boa memória e a possibilidade de expansão. A transmissão de dados e a navegação na web são fornecidas pela rede UMTS, mas as tecnologias mais recentes, como HSDPA, não são suportadas. O que é surpreendente é sua tela sensível ao toque de 6,5 polegadas, o que torna este Samsung o melhor de seu tipo. A resolução também é alta: pixels.A excelente câmera de 8 megapixels permite que o Samsung Galaxy A03 Core tire lindas fotos com resolução de 3266x2449 pixels e grave vídeos de alta definição (Full HD) com resolução de 1920x1080 pixels.
                                </p>
                            </div>
                            <div class="card-footer">
                                <form class="d-block">
                                    <button class="btn btn-success">
                                        <a href="/g2Oficial/php/cartItens.php?product=Smartphone Samsung Galaxy A03 Core, 32GB, RAM 2GB, Octa-Core, Câmera 8MP, Preto - SM-A032MZKRZTO&price=649" target="_self"><h5 style="color: black;">Adicionar ao Carrinho</h5></a>
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
                            <a href="/g2Oficial/php/cartItens.php?product=Smartphone Samsung Galaxy M12 64GB, 4GB RAM, Octa-Core, Câmera Quádrupla, 5000mAh, Azul - SM-M127FLBSZTO&price=979" target="_self">
                                <img src="prod/cel/mid/prodImg.jpg" class="card-img-top">
                            </a>
                            <div class="card-header">
                                R$ 979,00
                            </div>
                            <div class="card-body">
                                <h5 class="card-title corta-4linha">
                                    <a href="/g2Oficial/php/cartItens.php?product=Smartphone Samsung Galaxy M12 64GB, 4GB RAM, Octa-Core, Câmera Quádrupla, 5000mAh, Azul - SM-M127FLBSZTO&price=979" target="_self">
                                        Smartphone Samsung Galaxy M12 64GB, 4GB RAM, Octa-Core, Câmera Quádrupla, 5000mAh, Azul - SM-M127FLBSZTO
                                    </a>
                                </h5>
                                <p class="card-text corta-3linha">
                                    Smartphone Samsung Galaxy M12 64GB - Azul Mais display significa mais espaço para jogar Expanda sua visão com o Infinity-V Display de 6.5 polegadas do Galaxy M12 e veja o que você estava perdendo. Com tecnologia HD+, seu conteúdo diário fica nítido e claro. Capture conteúdos mais criativos com a câmera quádrupla Capture momentos memoráveis com detalhes nítidos com a câmera principal de 48 MP. Expanda o ângulo de visão com a câmera Ultra Wide Personalize o foco com a câmera de profundidade ou fique mais perto dos detalhes com a câmera macro. A câmera macro foca nos pequenos detalhes Chegue mais perto com a câmera macro de 2 MP e realce os pequenos detalhes em sua imagem. Ele aplica o efeito Bokeh natural às suas fotos, permitindo que o objeto se destaque do fundo. Processador e RAM para um bom desempenho. O Galaxy M12 combina o poder de processamento do octa-core com 4 GB de memória RAM para um desempenho rápido e eficiente para a tarefa. Aproveite 64 GB de armazenamento interno ou tenha ainda mais espaço com um cartão MicroSD de 1 TB.
                                </p>
                            </div>
                            <div class="card-footer">
                                <form class="d-block">
                                    <button class="btn btn-success">
                                        <a href="/g2Oficial/php/cartItens.php?product=Smartphone Samsung Galaxy M12 64GB, 4GB RAM, Octa-Core, Câmera Quádrupla, 5000mAh, Azul - SM-M127FLBSZTO&price=979" target="_self"><h5 style="color: black;">Adicionar ao Carrinho</h5></a>
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
                            <a href="/g2Oficial/php/cartItens.php?product=Smartphone Samsung Galaxy S22 Ultra, 12GB RAM, 256GB, Câmera Tripla 108MP, Tela Infinita 6.8, Vinho - SM-S908EDRSZTO&price=8549.10" target="_self">
                                <img src="prod/cel/high/prodImg.jpg" class="card-img-top">
                            </a>
                            <div class="card-header">
                                R$ 8.549,10
                            </div>
                            <div class="card-body">
                                <h5 class="card-title corta-4linha">
                                    <a href="/g2Oficial/php/cartItens.php?product=Smartphone Samsung Galaxy S22 Ultra, 12GB RAM, 256GB, Câmera Tripla 108MP, Tela Infinita 6.8, Vinho - SM-S908EDRSZTO&price=8549.10" target="_self">
                                        Smartphone Samsung Galaxy S22 Ultra, 12GB RAM, 256GB, Câmera Tripla 108MP, Tela Infinita 6.8, Vinho - SM-S908EDRSZTO
                                    </a>
                                </h5>
                                <p class="card-text corta-3linha">
                                    Um novo visual digno de atenção Conheça o Galaxy S22 Ultra com o poder do Note. Sua estrutura de metal espelhado é simétrica, transmitindo uma sensação de equilíbrio verdadeiro. O primeiro Galaxy S com S Pen embutidaA S Pen se encaixa diretamente no Galaxy S pela primeira vez. Tire da parte inferior do celular para escrever, desenhar ou controlar seu smartphone. A latência aprimorada no Samsung Note torna cada toque da caneta tão natural quanto a escrita no papel. A S Pen ajuda você a trabalhar e criar de forma mais eficiente e com mais detalhes do que nunca. O processador mais rápido no Galaxy A potência do processador Octa-Core de 4 nm, com uma velocidade de 2.99GHz está presente em quase todos os aspectos do seu celular, resultando em fotos a noite extraordinária, fotos incrivelmente claras a hora que quiser e uma experiência de gaming otimizada para levar você à vitória. Ultimas notícias: este é um Galaxy super resistente A estrutura de Alumínio polida age como uma armadura, e o Gorilla Glass Victus Plus está na frente e atrás do dispositivo e atualmente é exclusivo para a linha Galaxy S22. Esses materiais protegem o dispositivo incluindo a parte mais usada de qualquer smartphone: a Tela
                                </p>
                            </div>
                            <div class="card-footer">
                                <form class="d-block">
                                    <button class="btn btn-success">
                                        <a href="/g2Oficial/php/cartItens.php?product=Smartphone Samsung Galaxy S22 Ultra, 12GB RAM, 256GB, Câmera Tripla 108MP, Tela Infinita 6.8, Vinho - SM-S908EDRSZTO&price=8549.10" target="_self"><h5 style="color: black;">Adicionar ao Carrinho</h5></a>
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
