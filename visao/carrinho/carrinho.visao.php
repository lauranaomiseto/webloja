<style>
    #meuCarrinho{
        display: flex;
        flex-direction: column;
        width: 70%;
        margin: auto;
        font-family: 'Cinzel', serif;
        color: #6d6b6a;
    }
    #meuCarrinho h4{
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
        width: 20%;
        text-align: right;
    }
    .produtoNoCarrinho{
        display: flex;
        flex-direction: row;
        width: 100%;
        margin-bottom: 10px;
    }
    .sobreProduto{
        width: 40%;
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
        width: 20%;
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

<h2>Meu pedido</h2>	
<div id="meuCarrinho">

    <div id="campos">
        <div id="campoProduto">
            <h3>Produto</h3>
        </div>
        <div class="outroCampo">
            <h3>Quantidade</h3>
        </div>
        <div class="outroCampo">
            <h3>Valor unitário</h3>
        </div>
        <div class="outroCampo">
            <h3>Total</h3>
        </div>
    </div>

    <?php
    $precoTotal = 0;
    $contProduto = 0;
    foreach ($produtos as $produto):
    ?>
        <div class="produtoNoCarrinho">
            <div class="sobreProduto">
                <div>
                    <img src="<?= $produto['imagem'] ?>" alt="num tem">
                </div>
                <div>
                    <h4><?= $produto["nomeProduto"] ?></h4>
                    <p><?= $produto["descricaoProduto"] ?></p>
                </div>
            </div>
            <div class="outroSobre">
                <form method="POST" action="./carrinhoCompra/alterarQuantidade">
                    <select class="caixaEntraInfo2" name="quantidade">
                        <option value="<?=@$produto['quantidade']  ?>"><?=@$produto['quantidade'] ?></option>
                        <?php for ($i = 1; $i = 5; $i++) { ?>
                            <option value="<?= $i ?>"><?= $i ?></option>
                        <?php }; ?> 
                    </select><br><br>
                    <input type="hidden" name="idProduto" value="<?=$produto['idProduto']?>">
                    <button class="botao">Alterar</button><br>
                </form>
                <a href="./carrinhoCompra/tirar/<?= $produto['idProduto'] ?>"><button class="botao">Remover</button></a>
            </div>
            <div class="outroSobre">
                <h4>R$<?php echo str_replace(".", ",", $produto['precoProduto']) ?></h4>
            </div>
            <div class="outroSobre">
                <h4>R$
                    <?php 
                        $totalProduto= $produto['precoProduto']*$produto['quantidade'];
                        echo str_replace(".", ",", $totalProduto);
                    ?>
                </h4>
            </div>
        </div>
        <?php
        $precoTotal = $totaProduto + $precoTotal;
        $contProduto = $contProduto + $produto['quantidade'];
    endforeach;
    ?>
</div><br>


<a href="./"><button class="botao1">Continuar comprando</button></a><br><br>



<h2>Resumo do pedido</h2>
<div id="resumo">
    <p>Subtotal (<?= $contProduto ?> produtos): R$<?php echo str_replace(".", ",", $precoTotal) ?></p>
    <h3>Total: R$ <?php echo str_replace(".", ",", $precoTotal) ?></h3>
</div>

<a href="./pedido/finalizarPedido"><button class="botao1">Finalizar Pedido</button></a>

