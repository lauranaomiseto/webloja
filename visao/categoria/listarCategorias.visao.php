<style>
#listaCategorias{
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
#campoNomeCategoria{
	width: 40%;
}
#campoOperacoesCategoria{
	width: 40%;
	text-align: right;
}
.cadaCategoria{
	display: flex;
	flex-direction: row;
        justify-content: space-between;
	width: 100%;
}
.sobreNomeCategoria{
	width: 40%;
	display: flex;
	flex-direction: row;
}
.sobreOperacoesCategoria{
	width: 40%;
        display: flex;
        justify-content: space-between;
        align-items: center;
}
</style>

<h2>Lista de categorias</h2>

<div id="listaCategorias">

    <div id="campos">
        <div id="campoNomeCategoria">
            <h3>Categorias</h3>
        </div>
        <div id="campoOperacoesCategoria">
            <h3>Operações</h3>
        </div>
    </div>
<hr size="" width="100%">
<?php foreach ($categorias as $categoria): ?>
    <div class="cadaCategoria">
        <div class="sobreNomeCategoria">
            <p><?=$categoria['nomeCategoria'] ?></p>
        </div>
        <div class="sobreOperacoesCategoria">
            <a href="./categoria/verCategoriaId/<?=$categoria["idCategoria"]?>"><button class="botao">Detalhar</button></a>
            <a href="./categoria/editarC/<?=$categoria["idCategoria"]?>"><button class="botao">Editar</button></a>
            <a href="./categoria/deletarC/<?=$categoria["idCategoria"]?>"><button class="botao">Deletar</button></a>
        </div>
    </div>
    <hr size="" width="100%">
<?php endforeach; ?>
</div>

<br><br>
<a href="categoria/adicionarCategoria"><button class="botao1">Nova Categoria</button></a><br><br>
<a href="usuario/dashAdm"><button class="botao">Voltar</button></a><br><br>
