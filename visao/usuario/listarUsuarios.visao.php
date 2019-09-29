<style>
    #listaUsuarios{
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
#campoNomeCompletoUsuario{
	width: 35%;
}
#campoEmailUsuario{
        width: 35%;
	text-align: left;
}
#campoOperacoesUsuario{
	width: 30%;
	text-align: right;
}
.cadaUsuario{
	display: flex;
	flex-direction: row;
	width: 100%;
}
.sobreNomeCompletoUsuario{
	width: 35%;
	display: flex;
	flex-direction: row;
}
.sobreEmailUsuario{
        width: 35%;
	text-align: left;
}
.sobreOperacoesUsuario{
	width: 30%;
        display: flex;
        justify-content: space-between;
        align-items: center;
}
</style>

<h2>Lista de usuários</h2>
<div id="listaUsuarios">

    <div id="campos">
        <div id="campoNomeCompletoUsuario">
            <h3>Nome Completo</h3>
        </div>
        <div id="campoEmailUsuario">
            <h3>Email</h3>
        </div>
        <div id="campoOperacoesUsuario">
            <h3>Operações</h3>
        </div>
    </div>
 <hr size="" width="100%">
<?php foreach ($usuarios as $usuario): ?>
    <div class="cadaUsuario">
        <div class="sobreNomeCompletoUsuario">
            <p><?=$usuario['nomeCompleto'] ?></p>
        </div>
        <div class="sobreEmailUsuario">
            <p><?=$usuario['email'] ?></p>
        </div>
        <div class="sobreOperacoesUsuario">
            <a href="./usuario/verUsuarioId/<?=$usuario["idUsuario"] ?>"><button class="botao">Detalhar</button></a>
            <a href="./usuario/editarU/<?=$usuario["idUsuario"] ?>"><button class="botao">Editar</button></a>
            <a href="./usuario/deletarU/<?=$usuario["idUsuario"] ?>"><button class="botao">Deletar</button></a>
        </div>
    </div>
    <hr size="" width="100%">
<?php endforeach; ?>
</div>
<br><br>
<a href="usuario/cadastroUsuario"><button class="botao1">Novo Usuário</button></a><br><br>
<a href="usuario/dashAdm"><button class="botao">Voltar</button></a><br><br>

