<h2>Meu pedido</h2>	
		<div id="meuCarrinho">
		
			<div id="campos">
				<div id="campoProduto">
					<h3>Produto</h3>
				</div>
                                <div class="outroCampo">
					<h3>Quantidade</h3>
				</div>
				<div class="outroCampo">
					<h3>Valor unitário</h3>
				</div>
			</div>
			
			<?php 
                        $precoTotal=0;
                        foreach($produtos as $produto): ?>
                            <div class="produtoNoCarrinho">
                                <div class="sobreProduto">
                                    <div>
                                        <img src="<?=$produto['imagem'] ?>" alt="num tem">
                                    </div>
                                    <div>
                                        <h4><?=$produto["nomeProduto"] ?></h4>
                                        <p><?=$produto["descricaoProduto"] ?></p>
                                    </div>
                                </div>
                                <div class="outroSobre">
                                    <select class="caixaEntraInfo1" name="quantidade">
                                    <?php for($i=1;$i<=10;$i++){ ?>
                                        <option value="<?=$i?>"><?=$i ?></option>
                                    <?php }; ?> 
                                    </select><br><br>
                                    <a href="./carrinhoCompra/tirar/<?=$produto['idProduto']?>"><button class="botao">Remover</button></a>
                                </div>
                                <div class="outroSobre">
                                    <h4><?=$produto["precoProduto"] ?></h4>
                                </div>
                            </div>
                        <?php 
                        $precoTotal= $produto["precoProduto"]+$precoTotal;
                        endforeach; ?>
		</div>


                
                <h2>Resumo do pedido</h2>
		<div id="resumo">
                    <p>Subtotal: R$<?=$precoTotal; ?></p>
                    <p>Frete: blabla</p>
		</div>
		
		
		<h2>Finalizar pedido</h2>
		<div id="finalizar">
			<div id="valorTotal">
				<h3>Total: R$<?=$precoTotal; ?></h3>
			</div>
			<div>
				<form>
					<input type="text" placeholder="Cupom de desconto" class="caixaEntraInfo">
					<button class="botao">Continuar</button>
				</form>
			</div>
		</div>
