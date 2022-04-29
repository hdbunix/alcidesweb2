<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="manifest" href="img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/estilos.css">
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
    <title>Lojas Baratão - Página Principal</title>
</head>
<?php
$cotip = $_GET['CodTipo'];
include "connect.php";
session_start();
switch ($cotip) {
    case '1':
        $produto = $pdo->query('SELECT CodigoEAN, Produto, Descricao, CodTipo, Preco, Estoque FROM produtos WHERE CodTipo = 1 AND Estoque > 0');
        break;
    case '2':
        $produto = $pdo->query('SELECT CodigoEAN, Produto, Descricao, CodTipo, Preco, Estoque FROM produtos WHERE CodTipo = 2 AND Estoque > 0');
        break;
    case '3':
        $produto = $pdo->query('SELECT CodigoEAN, Produto, Descricao, CodTipo, Preco, Estoque FROM produtos WHERE CodTipo = 3 AND Estoque > 0');
        break;
    default:
        $produto = $pdo->query('SELECT CodigoEAN, Produto, Descricao, CodTipo, Preco, Estoque FROM produtos WHERE Estoque > 0');
        break;
}
?>

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
                            <?php session_start();
                            if (!$_SESSION['LogadoADM']) { ?>
                                <li class="nav-item">
                                    <a href="userLogin.php" class="nav-link text-white">Logar</a>
                                </li>
                            <?php } else { ?>
                                <li class="nav-item">
                                    <a href="userLogin.php" class="nav-link text-white"><?php echo $_SESSION['Nome']; ?></a>
                                </li>
                            <?php } ?>
                            <li class="nav-item">
                                <span class="badge rounded-pill bg-light text-primary position-absolute ms-4 mt-1" title="Produtos no carrinho">
                                    <small><?php echo $_SESSION["nro_item"] + 0; ?></small>
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
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <hr class="mt-3">
        </header>
        <main class="flex-fill">
            <div class="container">
                <div class="row g-3">
                    <div class="d-flex justify-content-center">
                        <a class="btn btn-lg col-3 btn-dark" href="index.php">Filtros</a>
                        <a class="btn btn-lg col-3 btn-dark" href="index.php?CodTipo=3">Celulares</a>
                        <a class="btn btn-lg col-3 btn-dark" href="index.php?CodTipo=1">Notebooks</a>
                        <a class="btn btn-lg col-3 btn-dark" href="index.php?CodTipo=2">Televisores</a>
                    </div>
                </div>
                <hr class="mt-3">
                <div class="container">
                    <div class="row g-3">
                        <?php
                        foreach ($produto as $row) {
                            echo '    
                        <div class="col-xl-2 col-lg-3 d-flex align-items-stretch">
                            <!-- primeiro item do grid -->
                            <div class="card text-center bg-light">
                            <a href="mainCart.php?CodEAN=' . $row['CodigoEAN'] . '&Produto=' . $row['Produto'] . '&Preco=' . $row['Preco'] . '">
                                <img src="img/prod/' . $row['CodigoEAN'] . '.jpg" class="card-img-top">
                            </a>
                            <div class="card-header">
                                R$' . $row['Preco'] . '
                            </div>
                            <div class="card-body">
                                <h5 class="card-title corta-4linha">
                                <a href="mainCart.php?CodEAN=' . $row['CodigoEAN'] . '&Produto=' . $row['Produto'] . '&Preco=' . $row['Preco'] . '">
                                ' . $row['Produto'] . '
                                    </a>
                                </h5>
                                <p class="card-text corta-3linha">
                                    ' . $row['Descricao'] . '
                                </p>
                            </div>
                            <div class="card-footer">
                                <form class="d-block">
                                    <a class="btn btn-primary" href="mainCart.php?CodEAN=' . $row['CodigoEAN'] . '&Produto=' . $row['Produto'] . '&Preco=' . $row['Preco'] . '">
                                    <h5 style="color: black;">Adicionar ao Carrinho</h5>
                                        </a>
                                </form>
                                <small class="text-success">
                                    Disponiveis: ' . $row['Estoque'] . '
                                </small>
                            </div>
                        </div>
                        </div>

                        ';
                        } ?>
                    </div>
                    <hr class="mt-3">
                </div>
            </div>
        </main>
        <footer class="border-top text-muted bg-light">
            <div class="container">
                <div class="row py-3">
                    <div class="col-12 col-md-4 text-center">
                        &copy; 2022 - Lojas Baratão
                        <br>
                        Rua Ficticia, 616, Cidadelão/RS
                        <br>
                        CNPJ 00.000.000/0001-00
                        <br>
                    </div>
                    <div class="col-12 col-md-4 text-center">
                        <a href="mainPrivacy.php" class="text-decoration-none text-dark">
                            Política de Privacidade
                        </a>
                        <br>
                        <a href="mainTerms.php" class="text-decoration-none text-dark">
                            Termos de Uso
                        </a>
                        <br>
                        <a href="userAdmin.php" class="text-decoration-none text-dark">
                            Area Administrativa
                        </a>
                        <br>
                    </div>
                    <div class="col-12 col-md-4 text-center">
                        <a href="mainContato.php" class="text-decoration-none text-dark">
                            Contato Pelo Site
                        </a>
                        <br>
                        E-Mail:
                        <a href="mailto:henrique@email.com" class="text-decoration-none text-dark">
                            henrique@email.com
                        </a>
                        <br>
                        Telefone:
                        <a href="phone:5132323232" class="text-decoration-none text-dark">
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