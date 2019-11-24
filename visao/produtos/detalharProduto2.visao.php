<style>
    #produto{
	width: 70%;
	display: flex;
	justify-content: space-around;
	margin: auto;
	text-align: left;
	margin-top: 100px;
	margin-bottom: 100px;
}
#produto h2{
	color: #6d6b6a;
	font-family: 'Cinzel', serif;
	margin-top: 0px;
}

#produto img{
	width: 80%;
	margin: auto;
}
#produto div{
	width: 50%;
}
#produto button{
	background-color:#efe8c2;
	color: #6d6b6a;
	border: none;
	font-family: 'Cardo', serif;
	width: 80px;
	height: 30px;
	text-align: center;
	font-size: 15px;
}

</style>
<div id="produto">
    <div id="foto">
        <img src="<?=$produto['imagem']?>" alt='nao tem'>
    </div>
    <div id="infoProduto">
        <h2><?=$produto['nomeProduto']; ?></h2>
        <p>
            <?=$produto['descricaoProduto'] ?>
        </p>
        <h2><?php echo "R$".str_replace(".", ",", $produto['precoProduto'])?></h2>
        <a href="./carrinhoCompra/comprar/<?=$produto['idProduto']?>"><button>Comprar</button></a>
    </div>     	
</div>	

<a href="./"><button class="botao">Voltar</button></a>