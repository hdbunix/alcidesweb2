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

    <title>Lojas Baratão - Termos de uso</title>
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
                    <ol>
                        <li>
                            <span style="font-weight:bold">
                                TERMOS COPIADOS DE "https://modeloinicial.com.br/conteudo/termos-de-uso-e-privacidade" PARA CRIAÇÃO DE SITE EXEMPLO
                            </span>
                        </li>
                        <li>
                            Todas as peças desta plataforma tratam-se de
                            <span style="font-weight:bold">
                                MODELOS INICIAIS e
                            básicos
                            </span>
                            que devem ser utilizados
                            <span style="font-weight:bold">
                                POR PROFISSIONAL
                            HABILITADO - ADVOGADO
                            </span>
                            para o seu cliente final, devendo ser revisados, adaptados ao
                        caso concreto de acordo com fatos, provas, jurisprudência local, base legal atualizada e
                        específica. SOB NENHUMA HIPÓTESE serão prestadas consultorias jurídicas.
                        </li>
                        <li>
                            No
                            <span style="font-weight:bold">PLANO GRATUITO</span>
                            , você concorda em conceder seu e-mail e
                        se cadastrar na plataforma. O cadastro gratuito é limitado a uma conta por pessoa/entidade - não
                        é permitido mais de um cadastro por pessoa/entidade.
                        </li>
                        <li>
                            Em qualquer plano você autoriza o uso do conteúdo das áreas de seu interesse quando você usa
                        nossos Serviços, através da
                            <span style="font-weight:bold">
                                COLETA DE DADOS DA SUA PESQUISA
                            </span>
                            e acessos aos modelos e autoriza o envio deste conteúdo ao seu e-mail.
                        </li>
                        <li>
                            No plano pago, a
                            <span style="font-weight:bold">RENOVAÇÃO AUTOMÁTICA CONSENTIDA</span>
                            : Todos os
                        planos pagos no cartão de crédito constituem contrato de assinatura renovável mensalmente por
                        tempo indeterminado, com
                            <span style="font-weight:bold">COBRANÇAS MENSAIS</span>
                            <span style="font-weight:100"></span>
                            <span style="font-weight:bold">
                                realizadas
                            automaticamente
                            </span>
                            <span style="font-weight:100">
                                no cartão de crédito indicado,
                            </span>
                            <span style="font-weight:bold">
                                até que ocorra o cancelamento pelo próprio
                            usuário
                            </span>
                            <span style="font-weight:100">
                                - situação na qual todas as cobranças futuras
                            cessarão e o usuário perderá acesso à plataforma. O cadastro pago (PRO) é limitado a uma
                            conta por pessoa/entidade - não é permitido mais de um cadastro por pessoa/entidade.
                            </span>
                        </li>
                        <li>
                            Você pode
                            <span style="font-weight:bold">CANCELAR A ASSINATURA</span>
                            <span style="font-weight:100">
                                a qualquer momento, sem qualquer custo adicional ou fidelidade.
                            </span>
                            <span style="font-weight:bold">
                                O cancelamento deverá ser feito pelo próprio usuário
                            </span>
                            <span style="font-weight:100">através do menu "Minha Assinatura".</span>
                        </li>
                        <li>
                            É responsabilidade do usuário certificar-se da
                            <span style="font-weight:bold">
                                VIGÊNCIA DA
                            LEI
                            </span>
                            e jurisprudência referida, bem como da adequação da peça à fase processual e
                        riscos de improcedência. Não oferecemos garantia de que os modelos estão atualizados, adequados
                        à legislação vigente ou qualquer responsabilidade pelo insucesso no uso dos modelos por qualquer
                        razão, seja por se mostrarem inadequados, desatualizados ou impróprios ao caso específico.
                        </li>
                        <li>
                            Antes de assinar esta plataforma, verifique se todas as peças de seu interesse estão disponíveis
                        no campo de busca. Possíveis sugestões de inclusão de novos modelos serão analisadas, porém sem
                        garantia de aceitação ou qualquer compromisso que serão disponibilizados.
                        </li>
                        <li>
                            Você
                            <span style="font-weight:100"></span>
                            <b>PODE</b>
                            <span style="font-weight:100"></span>
                            <span style="font-weight:100">
                                utilizar o conteúdo desta plataforma exclusivamente para uso
                            imediato em casos reais e concretos do seu cliente final, para fins profissionais no
                            exercício da Advocacia no âmbito processual administrativo ou judicial.
                            </span>
                        </li>
                        <li>
                            Você
                            <b>NÃO PODE</b>
                            <span style="font-weight:100">
                                baixar, armazenar, revender, divulgar,
                            distribuir ou publicar mesmo que gratuitamente o conteúdo desta plataforma para fins não
                            diretamente ligados a um caso concreto e imediato ligado ao processo do seu cliente final.
                            </span>
                            <span style="font-weight:bold">
                                Não é permitido baixar ou armazenar os conteúdos da
                            plataforma simplesmente para uso futuro, sem a existência de um caso real e concreto.
                            </span>
                        </li>
                        <li>
                            <span style="font-weight:bold">
                                <a href="/lei/LGPD/lei-geral-protecao-dados-pessoais">LGPD.</a>
                            </span>
                            Nós utilizamos
                        cookies e outras tecnologias para melhorar a experiência do usuário, e podemos capturar,
                        armazenar e processar suas informações pessoais. Você possui o direito de acessar, solicitar
                        exclusão ou confirmar que nós processamos os seus dados pessoais, exceto quando obrigações
                        legais ou tributárias venham a nos impedir. A gestão do seus dados é feita por Simple Labs T.I.
                        Ltda., e você pode entrar em contato com a pessoa responsável pelos seus dados através do
                        e-mail: midia@modeloinicial.com.br. Você tem também o direito de contatar diretamente a
                        Autoridade de Proteção de Dados brasileira.
                            <span style="font-weight:bold">
                                VEJA TERMO DE
                            CONSENTIMENTO COMPLETO ABAIXO.
                            </span>
                        </li>
                        <li>
                            <span style="font-weight:bold">Cancelamento compulsório.</span>
                            É a nós reservado o direito de
                        efetuar o cancelamento ou bloqueio imediato e sem aviso prévio da sua conta (ou de acessos
                        ligados direta ou indiretamente a você), seja ela paga ou gratuita, caso você não cumpra
                        qualquer das clausulas presentes nestes termos. Nós podemos bloquear o acesso e solicitar
                        informações adicionais aos usuários caso identifiquemos atividades suspeitas ou padrões de
                        utilização fora do esperado para a proposta desta ferramenta.
                        </li>
                        <li>
                            Qualquer dificuldade, impedimento, solicitação, sugestão ou reclamação pode ser feito pelo canal
                        de
                            <span style="font-weight:bold">COMUNICAÇÃO</span>
                            da plataforma, pelo
                            <span style="font-weight:bold">e-mail midia@modeloinicial.com.br</span>
                            ou pelo telefone (11)
                        4130.3734.
                        </li>
                        <li>
                            Ao prosseguir você concorda que
                            <span style="font-weight:bold">ELEGE O FORO</span>
                            de Porto
                        Alegre/RS para a solução de qualquer litígio decorrente desta relação.
                        </li>
                        <li>
                            Por favor leia também nossa
                            <a href="https://modeloinicial.com.br/conteudo/politica-de-privacidade">
                                Política de
                            Privacidade
                            </a>
                            e nossos Termos de Uso completos para ficar ciente de todos os detalhes que
                        envolvem o seu uso do sistema. Se você não concorda ou tem dúvidas sobre qualquer dos itens, por
                        favor não prossiga, e entre em contato conosco para esclarecimentos.
                        </li>
                    </ol>
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
