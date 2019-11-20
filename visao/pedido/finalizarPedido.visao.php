<div id="caixaFinalizarPedido">
    <div>
        <h5>Subtotal (<?= $contProdutos ?> produtos): R$<?= $subtotal ?></h5>
        <h5>Total a pagar: R$<?= $subtotal - $subtotal * (@$cupom['desconto'] / 100) ?></h5>
        <h5>Cupom: <?= @$cupom['desconto'] ?>%</h5>
        
        <hr>
        
        <h4>Possui algum cupom?</h4>
        <form action="pedido/finalizarPedido" method="POST">
            <?="<p>".@$erros['cupom']."</p>"?>
            <input type="text" placeholder="Cupom" class="caixaEntraInfo" name="nomeCupom" value=""><br><br>
            <button class="botao">Aplicar</button>
        </form>
        <br>
    </div>
    
    <div>        
        <form action="pedido/salvarPedido" method="POST">
            <h4>Endereço de entrega:</h4>
            <?="<p>".@$erros['endereco']."</p>"?>
            <select class="caixaEntraInfo" name="enderecoEntrega">
                <option value="verificação">Meus endereços</option>
                <?php foreach ($enderecos as $endereco): ?>
                    <option value="<?= @$endereco['idEndereco'] ?>"><?= $endereco['nomeEndereco'] ?></option>
                <?php endforeach; ?>            
            </select>
            <br><br>
            
            <hr>
            
            <h4>Formas de pagamento:</h4>
            <?="<p>".@$erros['formaPagamento']."</p>"?>
            <select class="caixaEntraInfo" name="formaPagamento">
                <option value="verificação">Formas de pagamento</option>
                <?php foreach ($formasPagamento as $formaPagamento): ?>
                    <option value="<?= @$formaPagamento['idFormaPagamento'] ?>"><?= $formaPagamento['descricao'] ?></option>
                <?php endforeach; ?>            
            </select>
            <br><br>

            <button class="botao1">Finalizar Pedido</button>
        </form>
    </div>
</div>


<a href="carrinhoCompra/exibirCarrinho"><button class="botao">Cancelar</button></a><br><br>

<style>
    #caixaFinalizarPedido{
        display: flex;
        justify-content: space-around;
        color: #6d6b6a;
    }
    #caixaFinalizarPedido h4{
        font-family: 'Cinzel', serif;
    }
    #caixaFinalizarPedido h5{
        font-family: 'Cardo', serif;
    }
</style>