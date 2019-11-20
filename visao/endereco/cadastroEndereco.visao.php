<div id="cadastroEndereco">
    <div id="cadastro">
        <h2>Adicionar Endereço</h2>
        <?= "<p>" . @$erros['sucesso'] . "</p>" ?>
        <form action="" method="POST">
            <div id="caixaEndereco">
                <div>
                    <?= "<label for='nomeEndereco'>" . @$erros['nomeEndereco'] . "Nome do endereço:</label><br>" ?>
                    <input type="text" class="caixaEntraInfo" name="nomeEndereco" value="<?= @$endereco['nomeEndereco'] ?>"><br><br>
                    <?= "<label for='logradouro'>" . @$erros['logradouro'] . "Logradouro:</label><br>" ?>
                    <input type="text"  class="caixaEntraInfo" name="logradouro" value="<?= @$endereco['logradouro'] ?>"><br><br>
                    <?= "<label for='numero'>" . @$erros['numero'] . "Número:</label><br>" ?>
                    <input type="text" class="caixaEntraInfo" name="numero" value="<?= @$endereco['numero'] ?>"><br><br>
                    <?= "<label for='complemento'>" . @$erros['complemento'] . "Complemento:</label><br>" ?>
                    <input type="text" class="caixaEntraInfo" name="complemento" value="<?= @$endereco['complemento'] ?>"><br><br>
                </div>
                <div>
                    <?= "<label for='bairro'>" . @$erros['bairro'] . "Bairro:</label><br>" ?>
                    <input type="text" class="caixaEntraInfo" name="bairro" value="<?= @$endereco['bairro'] ?>"><br><br>
                    <?= "<label for='cidade'>" . @$erros['cidade'] . "Cidade:</label><br>" ?>
                    <input type="text" class="caixaEntraInfo" name="cidade" value="<?= @$endereco['cidade'] ?>"><br><br>
                    <?= "<label for='cep'>" . @$erros['cep'] . "CEP:</label><br>" ?>
                    <input type="text" class="caixaEntraInfo" name="cep" value="<?= @$endereco['cep'] ?>"><br><br>                
                    <button class="botao">Cadastrar</button>
                </div>

            </div>
        </form>
    </div>
</div>

<style>
    #cadastroEndereco{
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
    #cadastroEndereco h2{
        text-align: center;
        margin-bottom: 20px;
    }
    #caixaEndereco{
        display:flex;
        justify-content: space-around;
        font-family: 'Cardo', serif;
        color: #6d6b6a;
    }
    #cadastro{
        background-color: white;
        width: 50%;
        height: 70%;
        padding-top: 10px;
        padding-left: 30px;
        padding-right: 30px;
        padding-bottom: 30px;
    }
</style>