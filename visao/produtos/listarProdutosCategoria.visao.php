<h2>Lista de produtos por categoria</h2>
<div id="listaProdutos">
    <?php
    foreach ($categorias as $categoria):
        ?>
        <h2><?= $categoria['nomeCategoria'] ?></h2>	
        <div class="campos">
            <div class="campoNomeProduto">
                <h3>Produto</h3>
            </div>
            <div class="campoPrecoProduto">
                <h3>Preço</h3>
            </div>
            <div class="campoEstoqueProduto">
                <h3>Estoque</h3>
            </div>
            <div class="campoOperacoesProduto">
                <h3>Operações</h3>
            </div>
        </div>        
        <hr size="" width="100%">
        <?php
        foreach ($produtos as $produto):
            if ($categoria["idCategoria"] == $produto["idCategoria"]) {
                ?>
                <div class="cadaProduto">
                    <div class="sobreNomeProduto">
                        <div>
                            <p><?= $produto['nomeProduto'] ?></p>
                        </div>
                    </div>
                    <div class="sobrePrecoProduto">
                        <p><?= $produto['precoProduto'] ?></p>
                    </div>
                    <div class="sobreEstoqueProduto">
                        <p><?= $produto['quant_estoque'] ?></p>
                    </div>
                    <div class="sobreOperacoesProduto">
                        <a href="./produto/verProdutoId/<?= $produto["idProduto"] ?>"><button class="botao">Detalhar</button></a>
                        <a href="./produto/editarP/<?= $produto["idProduto"] ?>"><button class="botao">Editar</button></a>
                        <a href="./produto/deletarP/<?= $produto["idProduto"] ?>"><button class="botao">Deletar</button></a>
                    </div>
                </div>
                <hr size="" width="100%">
                <?php
            }
        endforeach;
    endforeach;
    ?>
</div><br>
<a href="categoria/adicionarCategoria"><button class="botao2">Nova Categoria</button></a>
<a href="produto/adicionar"><button class="botao2">Novo Produto</button></a><br><br>
<a href="usuario/dashAdm"><button class="botao">Voltar</button></a><br><br>

<style>
    #listaProdutos{
        display: flex;
        flex-direction: column;
        width: 60%;
        margin: auto;
        font-family: 'Cinzel', serif;
        color: #6d6b6a;
    }
    #listaProdutos h2{
        background-color:#efe8c2;
    }
    .campos{
        display: flex;
        flex-direction: row;
        margin-bottom: 20px;
    }
    .campoNomeProduto{
        width: 24%;
    }
    .campoPrecoProduto{
        width: 23%;
        text-align: left;
    }
    .campoEstoqueProduto{
        width: 23%;
        text-align: left;
    }
    .campoOperacoesProduto{
        width: 30%;
        text-align: right;
    }
    .cadaProduto{
        display: flex;
        flex-direction: row;
        width: 100%;
    }
    .sobreNomeProduto{
        width: 24%;
        display: flex;
        flex-direction: row;
    }
    .sobrePrecoProduto{
        width: 23%;
        text-align: left;
    }
    .sobreEstoqueProduto{
        width: 23%;
        text-align: left;
    }
    .sobreOperacoesProduto{
        width: 30%;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
</style>