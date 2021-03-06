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

    <title>Lojas Baratão - Privacidade</title>
</head>

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
                                <span class="badge rounded-pill bg-light text-primary position-absolute ms-4 mt-1" title="<?php echo $_SESSION["nro_item"]+0; ?> produto(s) no carrinho">
                                    <small><?php echo $_SESSION["nro_item"]+0; ?></small>
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
            <main class="flex-fill">
                <div class="container">
                    <div id="privacy-text" class="tab-final-content">
                        <h2>Política Privacidade</h2>
                        <p>
                            A sua privacidade é importante para nós. É política do Lojas Baratão respeitar a sua privacidade em relação a qualquer informação sua que possamos coletar no site
                            <a href="localhost/index.php">Lojas Baratão</a>
                            , e outros sites que possuímos e operamos.
                        </p>
                        <p>
                            Solicitamos informações pessoais apenas quando realmente precisamos delas para lhe fornecer um serviço. Fazemo-lo por meios justos e legais, com o seu conhecimento e consentimento. Também informamos por que estamos coletando e como será usado.
                        </p>
                        <p>
                            Apenas retemos as informações coletadas pelo tempo necessário para fornecer o serviço solicitado. Quando armazenamos dados, protegemos dentro de meios comercialmente aceitáveis ​​para evitar perdas e roubos, bem como acesso, divulgação, cópia, uso ou
                        modificação não autorizados.
                        </p>
                        <p>Não compartilhamos informações de identificação pessoal publicamente ou com terceiros, exceto quando exigido por lei.</p>
                        <p>
                            O nosso site pode ter links para sites externos que não são operados por nós. Esteja ciente de que não temos controle sobre o conteúdo e práticas desses sites e não podemos aceitar responsabilidade por suas respectivas
                            <a href="https://politicaprivacidade.com" target="_BLANK">políticas de privacidade</a>
                            .
                        </p>
                        <p>Você é livre para recusar a nossa solicitação de informações pessoais, entendendo que talvez não possamos fornecer alguns dos serviços desejados.</p>
                        <p>O uso continuado de nosso site será considerado como aceitação de nossas práticas em torno de privacidade e informações pessoais. Se você tiver alguma dúvida sobre como lidamos com dados do usuário e informações pessoais, entre em contacto connosco.</p>
                        <h3>Compromisso do Usuário</h3>
                        <p>O usuário se compromete a fazer uso adequado dos conteúdos e da informação que o Lojas Baratão oferece no site e com caráter enunciativo, mas não limitativo:</p>
                        <ul>
                            <li>A) Não se envolver em atividades que sejam ilegais ou contrárias à boa fé a à ordem pública;</li>
                            <li>
                                B) Não difundir propaganda ou conteúdo de natureza racista, xenofóbica,
                                <a style="color: inherit !important; text-decoration:none !important;" href="https://ondeapostar.pt/onde-da-a-bola/">Onde dá a Bola</a>
                                ou azar, qualquer tipo de pornografia ilegal, de apologia ao terrorismo ou contra os direitos humanos;
                            </li>
                            <li>C) Não causar danos aos sistemas físicos (hardwares) e lógicos (softwares) do Lojas Baratão, de seus fornecedores ou terceiros, para introduzir ou disseminar vírus informáticos ou quaisquer outros sistemas de hardware ou software que sejam capazes de causar danos anteriormente mencionados.</li>
                        </ul>
                        <h3>Mais informações</h3>
                        <p>Esperemos que esteja esclarecido e, como mencionado anteriormente, se houver algo que você não tem certeza se precisa ou não, geralmente é mais seguro deixar os cookies ativados, caso interaja com um dos recursos que você usa em nosso site.</p>
                        <p>
                            Esta política é efetiva a partir de
                            <strong>April</strong>
                            /
                            <strong>2022</strong>
                            .
                        </p>
                    </div>
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
