<style>
    #cadastroLogin{
	width: 100%;
	height: 550px;
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
#loginn{
	background-color: white;
	width: 400px;
	height: 65%;
}
</style>



<div id="cadastroLogin">
    <div id="loginn">
	<h2>Acesse o sistema</h2>
	<form method="POST" action="">
            <input type="text" placeholder="Email" class="caixaEntraInfo"  name="email"><br><br>
            <input type="password" placeholder="Senha" class="caixaEntraInfo"  name="senha"><br><br>
            <button class="botao">Entrar</button>
            <a href=""><p>Esqueci minha senha</p></a>
            <p>Não tem cadastro? <a href="./usuario/cadastroUsuario">Cadastre-se</p></a>
        </form>
    </div>
</div>