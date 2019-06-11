<html>
    <head>
        <title>template MVC</title>
        <base href="<?= URL_BASE ?>"><!--Esta instrução é super importante e não deve ser mudada!-->
        <link rel="shortcut icon" href="./publico/imagens/icones/logo.png">
	<link href="https://fonts.googleapis.com/css?family=Cardo|Cinzel" rel="stylesheet">
        <link rel="stylesheet" href="./publico/css/app.css">
    </head>
    <body class="container">
        
        <div id="topo">
            <div id="menu">
		<div>
                    <a href="#rodape"><h3>Sobre</h3></a>
		</div>
		<div>
                    <a href="./"><img src="./publico/imagens/icones/logoCortado.png"></a>
		</div>
		<div id="opcoes">
                    <div>
			<a href="carrinho.html"><h3>Carrinho</h3></a>
                    </div>
                    <div>
			<a href="cadastroLogin.html"><h3>Minha conta</h3></a>
                    </div>
		</div>
            </div>
            <img class="banner" src="./publico/imagens/banners/banner1.jpg">
	</div>
        
        <br><br>
        
        
        <main class="container" id="conteudodaaula">
            <a href="./cliente/listarClientes">Lista de Clientes</a><br>
            <a href="./produto/listarProdutos">Lista de Produtos</a><br>
            <a href="./produto/listarCategorias">Lista de Categorias</a><br>
            <a href="./cliente/listarNewsletters">Lista de News Letters</a><br><br>
            <?php require $viewFilePath; ?>
        </main>
        
        
        <br><br>
        <div id="rodape">
            <img class="banner" src="./publico/imagens/banners/banner.jpg">
		<div id="infos">
			<div id="info1">
				<a href="./"><img src="./publico/imagens/icones/logoCortado.png"></a>
			</div>
			<div id="info2">
                            <p id="texto1">Este site foi criado com ojetivos acadêmicos.<br>
					Se deseja conhecer o artista Susano Correia, acesse suas redes sociais:</p>
                            <div><img src="./publico/imagens/icones/instagram.png"><p>susanocorreia</p></div>
                            <div><img src="./publico/imagens/icones/twitter.png"><p>susanocorreia</p></div>
			</div>
			<div id="info3">
                            <h3>Receba nossa newsletter!</h3>
                            <form>
				<input type="text" placeholder="Email" class="caixaEntraInfo" name="emailNewsLetter"><br><br>
				<input type="submit" class="botao">
                            </form>
			</div>
		</div>
	</div>

    </body>
</html>
