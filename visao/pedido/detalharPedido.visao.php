<style>
    #meusProdutos{
        display: flex;
        flex-direction: column;
        width: 50%;
        margin: auto;
        font-family: 'Cinzel', serif;
        color: #6d6b6a;
    }
    #meusProdutos h4{
        margin-top: 0px;
    }
    #campos{
        display: flex;
        flex-direction: row;
        margin-bottom: 20px;
    }
    #campoProduto{
        width: 60%;
    }
    .outroCampo{
        width: 40%;
        text-align: right;
    }
    .produtoNoPedido{
        display: flex;
        flex-direction: row;
        width: 100%;
        margin-bottom: 10px;
    }
    .sobreProduto{
        width: 60%;
        display: flex;
        flex-direction: row;
        text-align: left;
    }
    .sobreProduto div{
        width: 40%;
        margin-right: 5%;
    }
    .sobreProduto img{
        width: 100%;
    }
    .outroSobre{
        width: 40%;
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
    #resumo h3{
        font-family: 'Cinzel', serif;
        color: #6d6b6a;

    }
</style>

<h2>Detalhe do pedido</h2>
<div id="meusProdutos">

    <div id="campos">
        <div id="campoProduto">
            <h3>Produto</h3>
        </div>
        <div class="outroCampo">
            <h3>Valor unitário</h3>
        </div>
    </div>

    <?php
    foreach ($produtos as $produto):
        ?>
        <div class="produtoNoPedido">
            <div class="sobreProduto">
                <div>
                    <img src="<?= $produto['imagem'] ?>" alt="<?= $produto['nomeProduto'] ?>">
                </div>
                <div>
                    <h4><?= $produto["nomeProduto"] ?></h4>
                    <p><?= $produto["descricaoProduto"] ?></p>
                </div>
            </div>
            <div class="outroSobre">
                <h4>R$<?php echo str_replace(".", ",", $produto['precoProduto']) ?></h4>
            </div>
        </div>
        <?php
    endforeach;
    ?>
</div>
<br>
<?php $idUsuario= acessoPegarIdDoUsuario(); ?>
<a href="./pedido/listarPedidosIdUsuario"><button class="botao">Voltar</button></a>