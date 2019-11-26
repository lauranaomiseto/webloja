<h2>Lista de pedidos (<?php echo $data1 . " até " . $data2 ?>):</h2>	
<div id="listaPedidos">

    <div id="campos">
        <div id="campoNumeroPedido">
            <h3>Pedido</h3>
        </div>        
        <div id="campoDataPedido">
            <h3>Data</h3>
        </div>
        <div id="campoValorPedido">
            <h3>Valor por pedido</h3>
        </div>
    </div>
    <hr size="" width="100%">
    <?php
    $totalFaturamento = 0;
    foreach ($pedidos as $pedido):
        ?>
        <div class="cadaPedido">
            <div class="sobreNumeroPedido">
                <div>
                    <p><?= $pedido['idPedido'] ?></p>
                </div>
            </div>
            <div class="sobreDataPedido">
                <p><?= $pedido['dataCompra'] ?></p>
            </div>
            <div class="sobreValorPEdido">
                <p><?= $pedido['valorPedido'] ?></p>
            </div>
        </div>
        <hr size="" width="100%">
        <?php
        $totalFaturamento += $pedido['valorPedido'];
    endforeach;
    ?>
        <h3 id="totalFaturamento">Total faturado: R$<?= $totalFaturamento ?></h3>
</div><br>

<a href="./pedido/listarPedidosTempo"><button class="botao">Voltar</button></a>

<style>
    #listaPedidos{
        display: flex;
        flex-direction: column;
        width: 50%;
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
        width: 40%;
    }
    #campoDataPedido{
        width: 30%;
        text-align: left;
    }
    #campoValorPedido{
        width: 30%;
        text-align: right;
    }
    .cadaPedido{
        display: flex;
        flex-direction: row;
        width: 100%;
    }
    .sobreNumeroPedido{
        width: 40%;
        display: flex;
        flex-direction: row;
    }
    .sobreDataPedido{
        width: 30%;
        text-align: left;
    }
    .sobreValorPedido{
        width: 30%;
        text-align: right;
    }
    #totalFaturamento{
        font-family: 'Cinzel', serif;
        color: #6d6b6a;
    }
</style>
