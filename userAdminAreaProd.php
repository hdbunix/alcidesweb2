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

        <main class="flex-fill">
            <div class="container">
            <?php
include "connect.php";
$lista_prod = $pdo->query('SELECT CodigoEAN, Produto, Descricao, DescTipo, Preco, Estoque FROM produtos INNER JOIN tipos_prod ON produtos.CodTipo=tipos_prod.CodTipo');
echo '<table class="table table-hover table-striped" border=1>';
?> <tr><th>Codigo </th><th>Produto </th><th>Descrição </th><th>Tipo </th><th>Preço </th><th>Estoque </th><th></th><th></th><th></th></tr> <?php
foreach ($lista_prod as $row) {
    
    echo '<tr>';
    echo '<td>' . $row['CodigoEAN'] . '</td><td>' . $row['Produto'] . '</td><td>' . $row['Descricao'] . '</td><td>' . $row['DescTipo'] . '</td><td>' . $row['Preco'] . '</td><td>' . $row['Estoque'] . '</td><td><a href="userAdminAreaProdDel.php?cod=' . $row['CodigoEAN'] . '">Excluir</a></td>';
    echo '<td><a href="userAdminAreaProdUp.php?cod=' . $row['CodigoEAN'] . '">Atualizar</a></td>';
    echo '<td><a href="userAdminAreaProdPhotoNew.php?cod='.$row['CodigoEAN'].'">Adicionar foto</a></td>';    echo '</tr>';
}
echo '</table>';
?>
<br>
<a class="btn btn-lg btn-success" href="userAdminAreaProdNew.php">Gravar Novo</a>
<a class="btn btn-lg btn-primary" href="userAdminArea.php">Voltar</a>

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