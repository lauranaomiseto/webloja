<h2>Lista de produtos</h2>	
<div id="listaProdutos">

    <div id="campos">
        <div id="campoNomeProduto">
            <h3>Produto</h3>
        </div>
        <div id="campoPrecoProduto">
            <h3>Preço</h3>
        </div>
        <div id="campoEstoqueProduto">
            <h3>Estoque</h3>
        </div>
        <div id="campoOperacoesProduto">
            <h3>Operações</h3>
        </div>
    </div>
<hr size="" width="100%">
<?php foreach ($produtos as $produto): ?>
    <div class="cadaProduto">
        <div class="sobreNomeProduto">
            <div>
                <p><?=$produto['nomeProduto'] ?></p>
            </div>
        </div>
        <div class="sobrePrecoProduto">
            <p><?= $produto['precoProduto'] ?></p>
        </div>
        <div class="sobreEstoqueProduto">
            <p><?= $produto['quant_estoque'] ?></p>
        </div>
        <div class="sobreOperacoesProduto">
            <a href="./produto/verProdutoId/<?= $produto["idProduto"] ?>"><button class="botao">Detalhar</button></a>
            <a href="./produto/editarP/<?= $produto["idProduto"] ?>"><button class="botao">Editar</button></a>
            <a href="./produto/deletarP/<?= $produto["idProduto"] ?>"><button class="botao">Deletar</button></a>
        </div>
    </div>
    <hr size="" width="100%">
<?php endforeach; ?>
</div><br>
<a href="produto/adicionar"><button class="botao1">Novo Produto</button></a><br><br>
<a href="usuario/dashAdm"><button class="botao">Voltar</button></a><br><br>

<style>
#listaProdutos{
	display: flex;
	flex-direction: column;
	width: 60%;
	margin: auto;
	font-family: 'Cinzel', serif;
	color: #6d6b6a;
}
#campos{
	display: flex;
	flex-direction: row;
	margin-bottom: 20px;
}
#campoNomeProduto{
	width: 24%;
}
#campoPrecoProduto{
        width: 23%;
	text-align: left;
}
#campoEstoqueProduto{
        width: 23%;
	text-align: left;
}
#campoOperacoesProduto{
	width: 30%;
	text-align: right;
}
.cadaProduto{
	display: flex;
	flex-direction: row;
	width: 100%;
}
.sobreNomeProduto{
	width: 24%;
	display: flex;
	flex-direction: row;
}
.sobrePrecoProduto{
        width: 23%;
	text-align: left;
}
.sobreEstoqueProduto{
        width: 23%;
	text-align: left;
}
.sobreOperacoesProduto{
	width: 30%;
        display: flex;
        justify-content: space-between;
        align-items: center;
}
</style>