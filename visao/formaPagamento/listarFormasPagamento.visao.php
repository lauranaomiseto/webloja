<style>
#listaFormasPagamento{
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
        justify-content: space-between;
}
#campoDescricaoFormaPagamento{
	width: 40%;
}
#campoOperacoesFormaPagamento{
	width: 40%;
	text-align: right;
}
.cadaFormaPagamento{
	display: flex;
	flex-direction: row;
        justify-content: space-between;
	width: 100%;
}
.sobreDescricaoFormaPagamento{
	width: 40%;
	display: flex;
	flex-direction: row;
}
.sobreOperacoesFormaPagamento{
	width: 40%;
        display: flex;
        justify-content: space-between;
        align-items: center;
}
</style>


<h2>Lista de formas de pagamento</h2>

<div id="listaFormasPagamento">

    <div id="campos">
        <div id="campoDescricaoFormaPagamento">
            <h3>Forma de pagamento</h3>
        </div>
        <div id="campoOperacoesFormaPagamento">
            <h3>Operações</h3>
        </div>
    </div>
<hr size="" width="100%">
<?php foreach ($formasPagamento as $formaPagamento): ?>
    <div class="cadaFormaPagamento">
        <div class="sobreDescricaoFormaPagamento">
            <p><?=$formaPagamento['descricao'] ?></p>
        </div>
        <div class="sobreOperacoesFormaPagamento">
            <a href="./formaPagamento/verFormaPagamentoId/<?=$formaPagamento["idFormaPagamento"]?>"><button class="botao">Detalhar</button></a>
            <a href="./formaPagamento/editarF/<?=$formaPagamento["idFormaPagamento"]?>"><button class="botao">Editar</button></a>
            <a href="./formaPagamento/deletarF/<?=$formaPagamento["idFormaPagamento"]?>"><button class="botao">Deletar</button></a>
        </div>
    </div>
    <hr size="" width="100%">
<?php endforeach; ?>
</div>

<br><br>
<a href="./formaPagamento/adicionarFormaPagamento"><button class="botao1">Nova Forma de Pagamento</button></a><br><br>
<a href="usuario/dashAdm"><button class="botao">Voltar</button></a><br><br>
