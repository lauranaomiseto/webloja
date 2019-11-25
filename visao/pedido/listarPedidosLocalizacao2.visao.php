<h2>Lista de pedidos (<?=$cidade ?>):</h2>	
<div id="listaPedidos">

    <div id="campos">
        <div id="campoNumeroPedido">
            <h3>Pedido</h3>
        </div>        
        <div id="campoCep">
            <h3>CEP</h3>
        </div>
        <div id="campoDataPedido">
            <h3>Data</h3>
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
        <div class="sobreCep">
            <p><?= $pedido['cep'] ?></p>
        </div>
        <div class="sobreDataPedido">
            <p><?= $pedido['dataCompra'] ?></p>
        </div>
    </div>
    <hr size="" width="100%">
<?php endforeach; ?>
</div><br>
<a href="./pedido/listarPedidosLocalizacao"><button class="botao">Voltar</button></a>

<style>
#listaPedidos{
	display: flex;
	flex-direction: column;
	width: 40%;
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
	width: 30%;
}
#campoCep{
        width: 40%;
	text-align: left;
}
#campoDataPedido{
        width: 30%;
	text-align: right;
}
.cadaPedido{
	display: flex;
	flex-direction: row;
	width: 100%;
}
.sobreNumeroPedido{
	width: 30%;
	display: flex;
	flex-direction: row;
}
.sobreCep{
        width: 40%;
	text-align: left;
}
.sobreDataPedido{
        width: 30%;
	text-align: right;
}
</style>