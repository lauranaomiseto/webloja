
<h5>Subtotal (<?=$contProdutos ?> produtos): R$<?= $subtotal ?></h5>
<h5>Total a pagar: R$<?=$subtotal- $subtotal*(@$cupom['desconto']/100) ?></h5>
<h5>Cupom: <?=@$cupom['desconto'] ?>%</h5>
<hr size="" width="100%">
<h4>Endereço de entrega:</h4>
<form>
    <select class="caixaEntraInfo" name="enderecoEntrega">
        <option value="verificação">Meus endereços</option>
        <?php foreach ($enderecos as $endereco): ?>
            <option value="<?= @$endereco['idEndereco'] ?>"><?= $endereco['nomeEndereco'] ?></option>
        <?php endforeach; ?>            
    </select>
</form>
<br>
<hr size="" width="100%">
<h4>Possui algum cupom?</h4>
<?php 
    if(ehPost()){
        foreach($erros as $erro){
            echo "*$erro<br><br>";
            
        }
    }
?>
<form action="pedido/finalizarPedido" method="POST">
    <input type="text" placeholder="Cupom" class="caixaEntraInfo" name="nomeCupom" value=""><br><br>
     <button class="botao">Aplicar</button>
</form>
<br>
<hr size="" width="100%">
<h4>Formas de pagamento:</h4>
<form>
    <select class="caixaEntraInfo" name="enderecoEntrega">
        <option value="verificação">Formas de pagamento</option>
        <?php foreach ($formasPagamento as $formaPagamento): ?>
            <option value="<?= @$formaPagamento['idFormaPagamento'] ?>"><?= $formaPagamento['descricao'] ?></option>
        <?php endforeach; ?>            
    </select>
</form>
<br>
<hr size="" width="100%">
<br>
<a href="./pedido/addPedido"><button class="botao1">Finalizar Pedido</button></a>