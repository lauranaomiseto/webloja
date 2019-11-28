<div id="cadastroProduto">
    <div id="cadastro">
        <h2>Cadastro de produto</h2>
        
        <form action="" method="POST" enctype="multipart/form-data">
            <div id="caixaProduto">
                <div>
                    <?= "<label for='nomeProduto'>" . @$erros['nome'] . "Produto:</label><br>" ?>
                    <input type="text"class="caixaEntraInfo" name="nomeProduto" value="<?= @$produto['nomeProduto'] ?>"><br><br>
                    <?= "<label for='categoriaProduto'>" . @$erros['categoria'] . "Selecione:</label><br>" ?>
                    <select class="caixaEntraInfo" name="categoriaProduto">
                        <option value="verificação">Categoria</option>
                        <?php foreach ($categorias as $categoria): ?>
                            <option value="<?= @$categoria['idCategoria'] ?>"><?= $categoria['nomeCategoria'] ?></option>
                        <?php endforeach; ?>            
                    </select><br><br>
                    <?= "<label for='descricaoProduto'>" . @$erros['descricao'] . "Descrição:</label><br>" ?>
                    <input type="text" class="caixaEntraInfo" name="descricaoProduto" value="<?= @$produto['descricaoProduto'] ?>"><br><br>
                    <?= "<label for='precoProduto'>" . @$erros['preco'] . "Preço:</label><br>" ?>
                    <input type="text" class="caixaEntraInfo" name="precoProduto" value="<?= @$produto['precoProduto'] ?>"><br><br>
                    <input type="file" name="imagem" value="<?= @$produto['imagem'] ?>"><br><br>
                </div>
                <div>
                    <?= "<label for='quant_estoque'>" . @$erros['qntEstoque'] . "Quantidade em estoque:</label><br>" ?>
                    <input type="text" class="caixaEntraInfo" name="quant_estoque" value="<?= @$produto['quant_estoque'] ?>"><br><br>
                     <?= "<label for='estoque_maximo'>" . @$erros['estoqueMax'] . "Estoque máximo:</label><br>" ?>
                    <input type="text"class="caixaEntraInfo" name="estoque_maximo" value="<?= @$produto['estoque_maximo'] ?>"><br><br>
                     <?= "<label for='estoque_minimo'>" . @$erros['estoqueMin'] . "Estoque mínimo:</label><br>" ?>
                    <input type="text" class="caixaEntraInfo" name="estoque_minimo" value="<?= @$produto['estoque_minimo'] ?>"><br><br>
                    <button class="botao">Cadastrar</button><br>
                    <?= "<p>" . @$erros['sucesso'] . "</p>" ?>
                    <a href="./produto/listarProdutos">Voltar</a>
                    
                </div>
            </div>
        </form>
    </div>
</div>


<style>
    #cadastroProduto{
        width: 100%;
        height: 650px;
        background-image: url("publico/imagens/banners/fundoCadastro.jpg");
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        margin-top: 30px;
        margin-bottom: 30px;
    }
    #cadastroProduto h2{
        text-align: center;
        margin-bottom: 20px;
    }
    #caixaProduto{
        display:flex;
        justify-content: space-around;
        font-family: 'Cardo', serif;
        color: #6d6b6a;
    }
    #cadastro{
        background-color: white;
        width: 50%;
        height: 65%;
        padding-top: 10px;
        padding-left: 30px;
        padding-right: 30px;
        padding-bottom: 30px;
    }
</style>

