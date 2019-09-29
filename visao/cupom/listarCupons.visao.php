<style>
    #listaCupons{
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
#campoNomeCupom{
	width: 35%;
}
#campoDescontoCupom{
        width: 35%;
	text-align: left;
}
#campoOperacoesCupom{
	width: 30%;
	text-align: right;
}
.cadaCupom{
	display: flex;
	flex-direction: row;
	width: 100%;
}
.sobreNomeCupom{
	width: 35%;
	display: flex;
	flex-direction: row;
}
.sobreDescontoCupom{
        width: 35%;
	text-align: left;
}
.sobreOperacoesCupom{
	width: 30%;
        display: flex;
        justify-content: space-between;
        align-items: center;
}
</style>


<h2>Lista de cupons</h2>

<div id="listaCupons">

    <div id="campos">
        <div id="campoNomeCupom">
            <h3>Cupom</h3>
        </div>
        <div id="campoDescontoCupom">
            <h3>Desconto</h3>
        </div>
        <div id="campoOperacoesCupom">
            <h3>Operações</h3>
        </div>
    </div>
<hr size="" width="100%">
<?php foreach ($cupons as $cupom): ?>
    <div class="cadaCupom">
        <div class="sobreNomeCupom">
            <p><?=$cupom['nomeCupom'] ?></p>
        </div>
        <div class="sobreDescontoCupom">
            <p><?=$cupom['desconto'] ?></p>
        </div>
        <div class="sobreOperacoesCupom">
            <a href="./cupom/verCupomId/<?=$cupom["idCupom"]?>"><button class="botao">Detalhar</button></a>
            <a href="./cupom/editarC/<?=$cupom["idCupom"]?>"><button class="botao">Editar</button></a>
            <a href="./cupom/deletarC/<?=$cupom["idCupom"]?>"><button class="botao">Deletar</button></a>
        </div>
    </div>
    <hr size="" width="100%">
<?php endforeach; ?>
</div>
<br><br>
<a href="cupom/adicionarCupom"><button class="botao1">Novo Cupom</button></a><br><br>
<a href="usuario/dashAdm"><button class="botao">Voltar</button></a><br><br>


