<div id="cadastroUsuario">
    <div id="cadastro">
        <h2>Quero me cadastrar!</h2>
        
        <form method="POST" action="">
            <div id="caixaUsuario">
                <div>
                    <?= "<label for='nomeCompletoUsuario'>" . @$erros['nome'] . "Nome completo:</label><br>" ?>
                    <input type="text" name="nomeCompletoUsuario" value="<?= @$usuario['nomeCompleto'] ?>" class="caixaEntraInfo"><br><br>
                    <?= "<label for='cpf'>" . @$erros['cpf'] . "CPF:</label><br>" ?>
                    <input type="text" name="cpf" value="<?= @$usuario['cpf'] ?>" class="caixaEntraInfo"><br><br>
                    <?= "<label for='email'>" . @$erros['email'] . "Email:</label><br>" ?>
                    <input type="text" name="emailUsuario" value="<?= @$usuario['email'] ?>" class="caixaEntraInfo"><br><br>
                </div>
                <div>
                    <?= "<label for='senhaUsuario'>Senha " . @$erros['senha'] . ":</label><br>" ?>
                    <input type="password" name="senhaUsuario" value="<?= @$usuario['senha'] ?>" class="caixaEntraInfo"><br><br>
                    <?= "<label for='confirmaSenhaUsuario'>" . @$erros['confirma'] . "Confirme sua senha:</label><br>" ?>
                    <input type="password" class="caixaEntraInfo"  name="confirmaSenhaUsuario"><br><br>
                    <button class="botao">Cadastrar</button>
                    <?= "<p>" . @$erros['sucesso'] . "</p>" ?>
                </div>
            </div>
        </form>
    </div>
</div>


<style>
    #cadastroUsuario{
        width: 100%;
        height: 550px;
        background-image: url("publico/imagens/banners/fundoCadastro.jpg");
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        margin-top: 30px;
        margin-bottom: 30px;
    }
    #cadastroUsuario h2{
        text-align: center;
        margin-bottom: 20px;
    }
    #caixaUsuario{
        display:flex;
        justify-content: space-around;
        font-family: 'Cardo', serif;
        color: #6d6b6a;
    }
    #cadastro{
        background-color: white;
        width: 50%;
        height: 55%;
        padding-top: 10px;
        padding-left: 30px;
        padding-right: 30px;
        padding-bottom: 30px;
    }
</style>