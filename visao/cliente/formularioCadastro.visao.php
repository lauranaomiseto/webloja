<?php 
    if(ehPost()){
        foreach($erros as $erro){
            echo "<br>*$erro";
        }
    }
?>
<br><br>
        <form method="POST" action="">
            <input type="text" placeholder="Nome completo" name="nomeCompletoCliente" value="<?=@$cliente['nomeCompleto']?>" class="caixaEntraInfo"><br><br>
            <input type="text" placeholder="Email" name="emailCliente" value="<?=@$cliente['email']?>" class="caixaEntraInfo"><br><br>
            <input type="password" placeholder="Senha" name="senhaCliente" value="<?=@$cliente['senha']?>" class="caixaEntraInfo"><br><br>
            <input type="password" placeholder="Confirme sua senha" class="caixaEntraInfo"  name="confirmaSenhaCliente"><br><br>
            <button class="botao">Cadastrar</button>
        </form>

<a href="./cliente/listarClientes">Voltar</a>