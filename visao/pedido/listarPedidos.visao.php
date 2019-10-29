<style>
#listaPedidos{
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
#campoNumeroPedido{
	width: 25%;
}
#campoFormaPagamento{
        width: 25%;
	text-align: left;
}
#campoDataPedido{
        width: 25%;
	text-align: left;
}
#campoOperacoesPedido{
	width: 25%;
	text-align: right;
}
.cadaPedido{
	display: flex;
	flex-direction: row;
	width: 100%;
}
.sobreNumeroPedido{
	width: 25%;
	display: flex;
	flex-direction: row;
}
.sobreFormaPagamento{
        width: 25%;
	text-align: left;
}
.sobreDataPedido{
        width: 25%;
	text-align: left;
}
.sobreOperacoesPedido{
	width: 25%;
        display: flex;
        justify-content: flex-end;
        align-items: center;
}
</style>



<h2>Lista de pedidos</h2>	
<div id="listaPedidos">

    <div id="campos">
        <div id="campoNumeroPedido">
            <h3>Número do pedido</h3>
        </div>        
        <div id="campoFormaPagamento">
            <h3>Forma de pagamento</h3>
        </div>
        <div id="campoDataPedido">
            <h3>Data</h3>
        </div>
        <div id="campoOperacoesPedido">
            <h3>Operações</h3>
        </div>
    </div>
<hr size="" width="100%">
<?php foreach ($pedidos as $pedido): ?>
    <div class="cadaPedido">
        <div class="sobreNumeroPedido">
            <div>
                <p><?=$pedido['idPedido'] ?></p>
            </div>
        </div>
        <div class="sobreFormaPagamento">
            <p><?= $pedido['descricao'] ?></p>
        </div>
        <div class="sobreDataPedido">
            <p><?= $pedido['dataCompra'] ?></p>
        </div>
        <div class="sobreOperacoesPedido">
            <div>
                <a href="./pedido/detalharPedio/<?= $pedido["idPedido"] ?>"><button class="botao">Detalhar</button></a>
            </div>
        </div>
    </div>
    <hr size="" width="100%">
<?php endforeach; ?>
</div><br>
<a href="./usuario/minhaConta"><button class="botao">Voltar</button></a>