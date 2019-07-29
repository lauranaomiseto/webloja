<?php 
    if(ehPost()){
        foreach($erros as $erro){
            echo "<br>*$erro";
        }
    }
?>
<br>

<div id="cadastroLogin">
    <div id="login">
        <h2>Já sou cadastrado!</h2>
        <form method="" action="">
            <input type="text" placeholder="Email" class="caixaEntraInfo"  name="email"><br><br>
            <input type="password" placeholder="Senha" class="caixaEntraInfo"  name="senha"><br><br>
            <button class="botao">Entrar</button>
            <a href=""><p>Esqueci minha senha</p></a>
        </form>
    </div>
    <div id="cadastro">
        <h2>Quero me cadastrar!</h2>
        <form method="POST" action="">
            <input type="text" placeholder="Nome completo" name="nomeCompletoCliente" value="<?=@$cliente['nomeCompleto']?>" class="caixaEntraInfo"><br><br>
            <input type="text" placeholder="Email" name="emailCliente" value="<?=@$cliente['email']?>" class="caixaEntraInfo"><br><br>
            <input type="password" placeholder="Senha" name="senhaCliente" value="<?=@$cliente['senha']?>" class="caixaEntraInfo"><br><br>
            <input type="password" placeholder="Confirme sua senha" class="caixaEntraInfo"  name="confirmaSenhaCliente"><br><br>
            <button class="botao">Cadastrar</button>
        </form>
    </div>
</div>
