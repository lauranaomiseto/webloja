<style>
    #produtosLoja{
	display: flex;
	flex-direction: column;
	width: 70%;
	margin: auto;
	font-family: 'Cinzel', serif;
	color: #6d6b6a;
}
#produtosLoja h4{
	margin-top: 0px;
}
#campos{
	display: flex;
	flex-direction: row;
	margin-bottom: 20px;
}
#campoProduto{
	width: 40%;
}
.outroCampo{
	width: 30%;
	text-align: right;
}
.produto{
	display: flex;
	flex-direction: row;
	width: 100%;
	margin-bottom: 10px;
}
.sobreProduto{
	width: 40%;
	display: flex;
	flex-direction: row;
}
.sobreProduto div{
	width: 40%;
	margin-right: 5%;
}
.sobreProduto img{
	width: 100%;
}
.outroSobre{
	width: 30%;
	text-align: right;
}
.quantidade{
	border: solid 2px #efe8c2;
	color: #6d6b6a;
	font-family: 'Cardo', serif;
	width: 80px;
	height: 25px;
	font-size: 15px;
	padding-left: 10px;
	
}
</style>



<h2>Lista de produtos</h2>	
<div id="produtosLoja">

    <div id="campos">
        <div id="campoProduto">
            <h3>Produto</h3>
        </div>
        <div class="outroCampo">
            <h3>Preço</h3>
        </div>
        <div class="outroCampo">
            <h3>Operações</h3>
        </div>
    </div>

<?php foreach ($produtos as $produto): ?>
    <div class="produto">
        <div class="sobreProduto">
            <div>
                <img src="<?=$produto['imagem']?>">
            </div>
            <div>
                <h4><i><?=$produto['nomeProduto'] ?></i><h4>
            </div>
        </div>
        <div class="outroSobre">
            <h4><?= $produto['precoProduto'] ?></h4>
        </div>
        <div class="outroSobre">
            <a href="./produto/verProdutoId/<?= $produto["idProduto"] ?>"><button class="botao">Detalhar</button></a><br><br>
            <a href="./produto/editarP/<?= $produto["idProduto"] ?>"><button class="botao">Editar</button></a><br><br>
            <a href="./produto/deletarP/<?= $produto["idProduto"] ?>"><button class="botao">Deletar</button></a><br><br>
        </div>
    </div>
<?php endforeach; ?>
</div><br>
<a href="produto/adicionar"><button class="botao1">Novo Produto</button></a><br><br>
<a href="usuario/dashAdm"><button class="botao1">Voltar</button></a><br><br>