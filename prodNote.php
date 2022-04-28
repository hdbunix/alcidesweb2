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
    <title>Lojas Baratão - Notebooks</title>
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
                <a class="navbar-brand" href="index.php"><strong>Lojas Baratão</strong></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav flex-grow-1">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="index.php">Página Inicial</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="mainContato.html">Contato</a>
                        </li>
                    </ul>
                    <div class="align-self-end">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="userCadastro.html" class="nav-link text-white">Quero me cadastrar</a>
                            </li>
                            <li class="nav-item">
                                <a href="userLogin.html" class="nav-link text-white">Logar</a>
                            </li>
                            <li class="nav-item">
                                <span class="badge rounded-pill bg-light text-primary position-absolute ms-4 mt-1"
                                    title="5 produto(s) no carrinho"><small>5</small></span>
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
                            <a href="/g2Oficial/php/cartItens.php?product=Notebook Multilaser Legacy Cloud Intel Atom Z8350, 2GB RAM, 128GB (HDD+SD Card), Windows 10 Home, 14 HD, Cinza - PC136&price=1299.9">
                                <img src="prod/note/low/prodImg.jpg" class="card-img-top">
                            </a>
                            <div class="card-header">
                                R$ 1.299,90
                            </div>
                            <div class="card-body">
                                <h5 class="card-title corta-4linha">
                                    <a href="/g2Oficial/php/cartItens.php?product=Notebook Multilaser Legacy Cloud Intel Atom Z8350, 2GB RAM, 128GB (HDD+SD Card), Windows 10 Home, 14 HD, Cinza - PC136&price=1299.9">
                                        Notebook Multilaser Legacy Cloud Intel Atom Z8350, 2GB RAM, 128GB (HDD+SD Card), Windows 10 Home, 14 HD, Cinza - PC136
                                    </a>
                                </h5>
                                <p class="card-text corta-3linha">
                                    Notebook Multilaser Legacy Cloud Intel Quad Core Atom Z8350, 2GB, 64GB + SD Card 64GB, Windows 10 Home, 14, Cinza
                                </p>
                            </div>
                            <div class="card-footer">
                                <form class="d-block">
                                    <button class="btn btn-success">
                                        <a href="/g2Oficial/php/cartItens.php?product=Notebook Multilaser Legacy Cloud Intel Atom Z8350, 2GB RAM, 128GB (HDD+SD Card), Windows 10 Home, 14 HD, Cinza - PC136&price=1299.9" target="_self"><h5 style="color: black;">Adicionar ao Carrinho</h5></a>
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
                            <a href="/g2Oficial/php/cartItens.php?product=Notebook Lenovo Ultrafino Ideapad Ryzen 5-5500U, 8GB, 256GB SSD, 15.6 Full HD, Linux, Cinza - 82MFS00100&price=3199.90" target="_self">
                                <img src="prod/note/mid/prodImg.jpg" class="card-img-top">
                            </a>
                            <div class="card-header">
                                R$ 3.199,90
                            </div>
                            <div class="card-body">
                                <h5 class="card-title corta-4linha">
                                    <a href="/g2Oficial/php/cartItens.php?product=Notebook Lenovo Ultrafino Ideapad Ryzen 5-5500U, 8GB, 256GB SSD, 15.6 Full HD, Linux, Cinza - 82MFS00100&price=3199.90" target="_self">
                                        Notebook Lenovo Ultrafino Ideapad Ryzen 5-5500U, 8GB, 256GB SSD, 15.6 Full HD, Linux, Cinza - 82MFS00100
                                    </a>
                                </h5>
                                <p class="card-text corta-3linha">
                                    Notebook Lenovo Ultrafino Ideapad Ryzen 5-5500U, 8GB, 256GB SSD, 15.6 Full HD, Linux, Cinza Lenovo IdeaPad 3 é equipado com o poderoso Ryzen 5-5500U possui design leve e compacto. Com tela antirreflexo de 15.6" para mais conforto visual. Notebook ideal para todos os momentos. Conta com WiFi AC ultrarrápido e teclado numérico para trabalhar com mais agilidade nas suas planilhas. Obtenha mais na sua tela Veja mais detalhes com menos confusão, com engastes estreitos em todos os quatro lados de uma tela antirreflexo HD de 15,6". É um prazer assistir e usar. Este compromisso com o estado da tela dá ao IdeaPad 3 um dos melhores proporções de área ativa de sua classe. Armazenamento para o que você precisa O armazenamento SSD de 256GB PCIe é 10x mais rápido que um HDD 2.5” SATA, você terá mais segurança e ao armazenar seus dados. Sua privacidade pessoal é muito importante. É por isso que o IdeaPad 3 está equipado com porta de privacidade da webcam. Quando não estiver em uma chamada de vídeo ou gravando algo, basta deslizá-la. Faça vídeo-conferências em alta-definição com a câmera HD 720p.
                                </p>
                            </div>
                            <div class="card-footer">
                                <form class="d-block">
                                    <button class="btn btn-success">
                                        <a href="/g2Oficial/php/cartItens.php?product=Notebook Lenovo Ultrafino Ideapad Ryzen 5-5500U, 8GB, 256GB SSD, 15.6 Full HD, Linux, Cinza - 82MFS00100&price=3199.90" target="_self"><h5 style="color: black;">Adicionar ao Carrinho</h5></a>
                                    </button>
                                </form>
                                <small class="text-success">
                                    quantidade em estoque
                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 d-flex align-items-stretch">
                        <div class="card text-center bg-light">  <a href="/g2Oficial/php/cartItens.php?product=Notebook Lenovo Ideapad - Tela 15.6 Full Hd, Ryzen 7 5700u, 8gb, Ssd 256gb, Windows 11&price=6380.99" target="_self">
                                <img src="prod/note/high/prodImg.jpg" class="card-img-top">
                            </a>
                            <div class="card-header">
                                R$ 6.380,99
                            </div>
                            <div class="card-body">
                                <h5 class="card-title corta-4linha">
                                    <a href="/g2Oficial/php/cartItens.php?product=Notebook Lenovo Ideapad - Tela 15.6 Full Hd, Ryzen 7 5700u, 8gb, Ssd 256gb, Windows 11&price=6380.99" target="_self">
                                        Notebook Lenovo Ideapad - Tela 15.6 Full Hd, Ryzen 7 5700u, 8gb, Ssd 256gb, Windows 11
                                    </a>
                                </h5>
                                <p class="card-text corta-3linha">
                                    Design ultrafino com performance IdeaPad 3 possui processadores até AMD Ryzen™ 7 série 5000 somado a velocidade do armazenamento SSD. Acelere sua produtividade com o teclado numérico.Foco em desempenho e entretenimentoTela de 15.6” Full HD, tenha máxima qualidade de imagem sem incomodo da iluminação externa com o tratamento de tela antirreflexo. Aumente o som sem se preocupar em perder a imersão sonora, pois o IdeaPad 3 vem equipado com certificação Dolby Audio™. Com o aplicativo é possível escolher entre os diversos modos de uso: curta seus filmes e vídeos, escute sua música favorita, se divirta com jogos ou de acordo com sua necessidade.Desenvolvido para o seu dia a diaO IdeaPad 3 vem com uma novidade: câmera de alta resolução HD-720p para vídeo-chamadas com máxima definição. Não seja pego de surpresa, utilize a privacidade de webcam a seu favor.Touchpad PTP e teclado numérico Economize tempo e aumente sua produtividade com gestos inteligentes no touchpad, usando dois ou mais dedos para navegar. Ganhe ainda mais agilidade em planilhas usando o teclado numérico.O desempenho é uma escolha sua com o Q-ControlMaior performance ou mais silencioso: você escolhe. Alterne com um atalho com as teclas FN+Q entre os modos de funcionamento para ter desempenho máximo ou silencioso e garantir a economia de bateria
                                </p>
                            </div>
                            <div class="card-footer">
                                <form class="d-block">
                                    <button class="btn btn-success">
                                        <a href="/g2Oficial/php/cartItens.php?product=Notebook Lenovo Ideapad - Tela 15.6 Full Hd, Ryzen 7 5700u, 8gb, Ssd 256gb, Windows 11&price=6380.99" target="_self"><h5 style="color: black;">Adicionar ao Carrinho</h5></a>
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
                            <a href="mainPrivacy.html" class="text-decoration-none text-dark">
                                Política de Privacidade
                            </a><br>
                            <a href="mainTerms.html" class="text-decoration-none text-dark">
                                Termos de Uso
                            </a><br>
                            <a href="userAdmin.html" class="text-decoration-none text-dark">
                                Area Administrativa
                            </a><br>
                        </div>
                        <div class="col-12 col-md-4 text-center">
                            <a href="mainContato.html" class="text-decoration-none text-dark">
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
