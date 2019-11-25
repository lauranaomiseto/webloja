<h2>Meu carrinho</h2>
<div id="resumoCarrinho">
    <div>
        <div id="meuCarrinho">

            <div id="campos">
                <div id="campoProduto">
                    <h3>Produto</h3>
                </div>
                <div class="outroCampo">
                    <h3>Quantidade</h3>
                </div>
                <div class="outroCampo">
                    <h3>Unidade</h3>
                </div>
                <div class="outroCampo">
                    <h3>Total</h3>
                </div>
            </div>

            <?php
            $subTotal = 0;
            $contProduto = 0;
            foreach ($produtos as $produto):
                ?>
                <div class="produtoNoCarrinho">
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
                        <form method="POST" action="./carrinhoCompra/alterarQuantidade">
                            <input type="number" name="quantidade" value="<?= @$produto['quantidade']?>" class="caixaEntraInfo2"><br><br>
                            <input type="hidden" name="idProduto" value="<?= $produto['idProduto'] ?>">
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
                            $totalProduto = $produto['precoProduto'] * $produto['quantidade'];
                            echo str_replace(".", ",", $totalProduto);
                            ?>
                        </h4>
                    </div>
                </div>
                <?php
                $subTotal = $totalProduto + $subTotal;
                $contProduto = $contProduto + $produto['quantidade'];
            endforeach;
            ?>
        </div><br>
        <a href="./"><button class="botao1">Continuar comprando</button></a><br><br>
    </div>
    <div>
        <div id="fretePrazo">
            <h4>Calcular frete e prazo</h4>
            <form action="carrinhoCompra/exibirCarrinho" method="POST">
                <?="<p>".@$erros['cep']."</p>"?>
                <input type="text" placeholder="CEP" class="caixaEntraInfo" name="cep" value=""><br>
                <?="<p>".@$erros['tipoFrete']."</p>"?>
                <input type="radio" name="tipoFrete" value="40010">
                <label for="40010">Sedex</label>
                <input type="radio" name="tipoFrete" value="41106">
                <label for="41106">Pac</label>
                <br><br>
                <button class="botao">Calcular</button>
            </form>
        </div>

        <hr>

        <div id="resumo">
            <?php
            $valorTotal= $subTotal+@$freteValor;
            ?>
            <h2>Resumo do pedido</h2>
            <p>Subtotal (<?= $contProduto ?> produtos): R$<?php echo str_replace(".", ",", $subTotal) ?></p>
            <p>Frete (prazo de <?=@$prazoEntrega?> dias): R$<?=@$freteValor ?></p>
            
            <h3>Total: R$ <?php echo str_replace(".", ",", $valorTotal) ?></h3>

            <a href="./pedido/finalizarPedido"><button class="botao1">Finalizar Pedido</button></a>
        </div>
    </div>
</div>




<style>
    #meuCarrinho{
        display: flex;
        flex-direction: column;
        width: 100%;
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
    #fretePrazo{
        font-family: 'Cardo', serif;
        color: #6d6b6a;
    }
    #fretePrazo h4{
        font-family: 'Cinzel', serif;
        color: #6d6b6a;
    }
    #resumo h3{
        font-family: 'Cinzel', serif;
        color: #6d6b6a;

    }
    #resumoCarrinho{
        display: flex;
        justify-content: space-around;
        margin-bottom: 30px;
    }
</style>