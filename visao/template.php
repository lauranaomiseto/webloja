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
                    <a href="#rodape"><h3>sobre</h3></a>
		</div>
		<div>
                    <a href="./"><img src="./publico/imagens/icones/logoCortado.png"></a>
		</div>
		<div id="opcoes">
                    <div>
			<a href="carrinho.html"><h3>carrinho</h3></a>
                    </div>
                    <div>
			<a href="./cliente/cadastro"><h3>minha conta</h3></a>
                    </div>
		</div>
            </div>
            <img class="banner" src="./publico/imagens/banners/banner1.jpg">
	</div>
        
        
        <main class="container" id="conteudodaaula">
            <div>
                <a href="./cliente/listarClientes">lista de clientes</a><br>
                <a href="./produto/listarProdutos">lista de produtos</a><br>
                <a href="./produto/listarCategorias">lista de categorias</a><br>
                <a href="./cliente/listarNewsletters">lista de news letters</a><br>
            </div>
            <?php require $viewFilePath; ?>
        </main>
        

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
