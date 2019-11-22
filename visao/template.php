<html>
    <head>
        <title>Galeria</title>
        <base href="<?= URL_BASE ?>"><!--Esta instrução é super importante e não deve ser mudada!-->
        <link rel="shortcut icon" href="http://localhost/webloja/publico/imagens/icones/logo.png">
        <link href="https://fonts.googleapis.com/css?family=Cardo|Cinzel" rel="stylesheet">
        <link rel="stylesheet" href="./publico/css/app.css">
    </head>
    <body class="container">

        <div id="topo">
            <div id="menu">
                <div id="opcoes">
                    <a href="#rodape"><h3>sobre nós</h3></a>
                    <?php if (acessoUsuarioAdmin()): ?>
                        <div>
                            <a href="./usuario/dashAdm"><h3>administrador</h3></a>
                        </div>
                    <?php endif; ?>
                </div>
                <div>
                    <a href="./"><img src="./publico/imagens/icones/logoCortado.png"></a>
                </div>
                <div id="opcoes1">
                    <?php if ((acessoUsuarioCliente()) or ( acessoUsuarioAdmin())):?>
                        <div>
                            <a href="./usuario/minhaConta"><h3>minha conta</h3></a>
                        </div>
                    <?php else: ?>
                        <div>
                            <a href="./login"><h3>login</h3></a>
                        </div>
                        <div>
                            <a href="./usuario/cadastroUsuario"><h3>cadastro</h3></a>
                        </div>
                    <?php endif;?>
                    <div>
                        <a href="./carrinhoCompra/exibirCarrinho"><h3>carrinho</h3></a>
                    </div>

                </div>
            </div>
            <img class="banner" src="./publico/imagens/banners/banner1.jpg">
        </div>


        <main class="container" id="conteudodaaula">
            <?php require $viewFilePath; ?>
        </main>


        <div id="rodape">
            <img class="banner" src="./publico/imagens/banners/banner.jpg">
            <div id="infos">
                <div id="info1">
                    <a href="./"><img src="./publico/imagens/icones/logoCortado.png"></a>
                </div>
                <div id="info2">
                    <p>
                        Este site foi criado com ojetivos acadêmicos.<br>
                        Se deseja conhecer o artista Susano Correia, acesse suas redes sociais.
                    </p>
                </div>
                <div id="info3">
                    <div>
                        <img src="./publico/imagens/icones/instagram.png">
                        <p>susanocorreia</p>
                    </div>
                    <div>
                        <img src="./publico/imagens/icones/twitter.png">
                        <p>susanocorreia</p>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
