<form>
    <select class="caixaEntraInfo" name="enderecoEntrega">
        <option value="verificação">Categoria</option>
        <?php foreach ($categorias as $categoria): ?>
            <option value="<?= @$categoria['idCategoria'] ?>"><?= $categoria['nomeCategoria'] ?></option>
        <?php endforeach; ?>            
    </select><br><br>
</form>