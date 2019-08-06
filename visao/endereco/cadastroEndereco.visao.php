<?php 
    if(ehPost()){
        foreach($erros as $erro){
            echo "<br>*$erro";
        }
    }
?>

<br>
    <form action="" method="POST">
        <input type="text" placeholder="Logradouro" class="caixaEntraInfo" name="logradouro"><br><br>
        <input type="text" placeholder="Número" class="caixaEntraInfo" name="numero"><br><br>
        <input type="text" placeholder="Complemento" class="caixaEntraInfo" name="complemento"><br><br>
        <input type="text" placeholder="Bairro" class="caixaEntraInfo" name="bairro"><br><br>
        <input type="text" placeholder="Cidade" class="caixaEntraInfo" name="cidade"><br><br>
        <input type="text" placeholder="CEP" class="caixaEntraInfo" name="cep"><br><br>
        <button class="botao">Cadastrar</button>
    </form>
<a href="./cliente/listarClientes">Voltar</a>

