<div id="finalizarPedido">
    <div id="caixaFinalizarPedido">
        <div>
            <h5>Subtotal (<?= $contProdutos ?> produtos): R$<?= $subtotal ?></h5>
            <h5>Total a pagar: R$<?= $subtotal - $subtotal * (@$cupom['desconto'] / 100) ?></h5>
            <h5>Cupom: <?= @$cupom['desconto'] ?>%</h5>

            <hr>

            <h2>Possui algum cupom?</h2>
            <form action="pedido/finalizarPedido" method="POST">
                <?= "<p>" . @$erros['cupom'] . "</p>" ?>
                <input type="text" placeholder="Cupom" class="caixaEntraInfo" name="nomeCupom" value=""><br><br>
                <button class="botao">Aplicar</button>
            </form>
            <br>
        </div>

        <div>        
            <form action="pedido/salvarPedido" method="POST">
                <h2>Endereço de entrega:</h2>
                <?= "<p>" . @$erros['endereco'] . "</p>" ?>
                <select class="caixaEntraInfo" name="enderecoEntrega">
                    <option value="verificação">Meus endereços</option>
                    <?php foreach ($enderecos as $endereco): ?>
                        <option value="<?= @$endereco['idEndereco'] ?>"><?= $endereco['nomeEndereco'] ?></option>
                    <?php endforeach; ?>            
                </select>
                <br><br>

                <hr>

                <h2>Formas de pagamento:</h2>
                <?= "<p>" . @$erros['formaPagamento'] . "</p>" ?>
                <select class="caixaEntraInfo" name="formaPagamento">
                    <option value="verificação">Formas de pagamento</option>
                    <?php foreach ($formasPagamento as $formaPagamento): ?>
                        <option value="<?= @$formaPagamento['idFormaPagamento'] ?>"><?= $formaPagamento['descricao'] ?></option>
                    <?php endforeach; ?>            
                </select>
                <br><br>

                <button class="botao1">Finalizar Pedido</button>
            </form>
             <a href="carrinhoCompra/exibirCarrinho"><button class="botao">Cancelar</button></a><br><br>
        </div>
    </div>
</div>

<style>
    #finalizarPedido{
        width: 100%;
        height: 650px;
        background-image: url("publico/imagens/banners/fundoCadastro.jpg");
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        margin-top: 30px;
        margin-bottom: 30px;
    }
    #caixaFinalizarPedido{
        display:flex;
        justify-content: space-around;
        font-family: 'Cardo', serif;
        color: #6d6b6a;
        background-color: white;
        width: 50%;
        height: 55%;
        padding-top: 10px;
        padding-left: 30px;
        padding-right: 30px;
        padding-bottom: 30px;
    }
    #caixaFinalizarPedido h4{
        font-family: 'Cinzel', serif;
    }
    #caixaFinalizarPedido h5{
        font-family: 'Cardo', serif;
    }
</style>