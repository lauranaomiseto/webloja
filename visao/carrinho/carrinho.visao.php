<h2>Meu pedido</h2>	
		<div id="meuCarrinho">
		
			<div id="campos">
				<div id="campoProduto">
					<h3>Produto</h3>
				</div>
				<div class="outroCampo">
					<h3>Valor unitário</h3>
				</div>
			</div>
			
			<?php foreach($produtos as $produto): ?>
                            <div class="produtoNoCarrinho">
                                    <div class="sobreProduto">
                                            <div>
                                                    <img src="imagens/produtos/originalHomemFace.jpg" alt="num tem">
                                            </div>
                                            <div>
                                                    <h4><?=$produto["nomeProduto"] ?><h4>
                                                    <button class="botao">Remover</button>
                                            </div>
                                    </div>
                                    <div class="outroSobre">
                                            <h4><?=$produto["precoProduto"] ?></h4>
                                    </div>
                            </div>
                        <?php endforeach; ?>
			
			
		</div>

