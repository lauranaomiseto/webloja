<style>
    #cadastroLogin{
	width: 100%;
	height: 650px;
	background-image: url("publico/imagens/banners/fundoCadastro.jpg");
	display: flex;
	flex-direction: row;
	justify-content: center;
	align-items: center;
	margin-top: 30px;
	margin-bottom: 30px;
	text-align: center;
}
#cadastroLogin a:link{
	color: #6d6b6a;
}
#cadastroLogin a:visited{
	color: #6d6b6a;
}
#cadastroLogin h2{
	color: #6d6b6a;
	font-family: 'Cinzel', serif;
	margin: 35px;
}

#cadastro{
	background-color: white;
	width: 400px;
	height: 65%;
}
</style>

<?php 
    if(ehPost()){
        foreach($erros as $erro){
            echo "<br>*$erro";
        }
    }
?>

<div id="cadastroLogin">
	<div id="cadastro">
            <h2>Quero me cadastrar!</h2>
            <form method="POST" action="">
                <input type="text" placeholder="Nome completo" name="nomeCompletoUsuario" value="<?=@$usuario['nomeCompleto']?>" class="caixaEntraInfo"><br><br>
                <input type="text" placeholder="CPF" name="cpf" value="<?=@$usuario['cpf']?>" class="caixaEntraInfo"><br><br>
                <input type="text" placeholder="Email" name="emailUsuario" value="<?=@$usuario['email']?>" class="caixaEntraInfo"><br><br>
                <input type="password" placeholder="Senha" name="senhaUsuario" value="<?=@$usuario['senha']?>" class="caixaEntraInfo"><br><br>
                <input type="password" placeholder="Confirme sua senha" class="caixaEntraInfo"  name="confirmaSenhaUsuario"><br><br>
                <button class="botao">Cadastrar</button>
            </form>
	</div>
</div>