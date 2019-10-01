<style>
    #cadastroLogin{
	width: 100%;
	height: 800px;
	background-image: url("publico/imagens/banners/fundoCadastro.jpg");
	display: flex;
	flex-direction: row;
	justify-content: center;
	align-items: center;
	margin-top: 30px;
	margin-bottom: 30px;
	text-align: center;
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
            <h2>Adicionar Endereço</h2>
            <form action="" method="POST">
                <input type="text" placeholder="Nome endereço" class="caixaEntraInfo" name="nomeEndereco" value="<?=@$endereco['nomeEndereco']?>"><br><br>
                <input type="text" placeholder="Logradouro" class="caixaEntraInfo" name="logradouro" value="<?=@$endereco['logradouro']?>"><br><br>
                <input type="text" placeholder="Número" class="caixaEntraInfo" name="numero" value="<?=@$endereco['numero']?>"><br><br>
                <input type="text" placeholder="Complemento" class="caixaEntraInfo" name="complemento" value="<?=@$endereco['complemento']?>"><br><br>
                <input type="text" placeholder="Bairro" class="caixaEntraInfo" name="bairro" value="<?=@$endereco['bairro']?>"><br><br>
                <input type="text" placeholder="Cidade" class="caixaEntraInfo" name="cidade" value="<?=@$endereco['cidade']?>"><br><br>
                <input type="text" placeholder="CEP" class="caixaEntraInfo" name="cep" value="<?=@$endereco['cep']?>"><br><br>                
                <button class="botao">Cadastrar</button>
            </form>
	</div>
</div>