<section id="casacos">
	<h2>Casacos</h2>

	<!-- seção de casacos -->
	<div id = "todosCasacos" class="secaoProdutosSemFiltro">
		<div id="casacos" class="produtos">
			<?php $cont = 1;
			foreach($produtos as $produto):
			if($produto->tipo == "casaco"):
			echo '<div class="produto" id = "casaco"' . $cont.'>';
                echo $this->Html->image($produto->imagem, ['alt' => $produto->nome, 'class' => 'imagensProdutos']);
		    	echo '<div id="infoProduto">';
					echo '<a href="' . $this->Url->build(['controller'=>'Users', 'action'=>'detalhes', $produto->id]) . '" class="nomeProduto">' . $produto->nome . '</a>';
					echo '<span class="precoProduto">' . number_format($produto->preco, 2, ',', '') . '</span>';
					echo '<a href="' . $this->Url->build(['controller'=>'CarrinhoDeCompras', 'action'=>'adicionarAoCarrinhoDeCompras', $produto->id, $Auth->user('id')]) . '" class="button"><span class="material-icons iconeAdicionarCarrinho">add_shopping_cart</span></a>';
				echo '</div>';
			echo '</div>';
			$cont++; 
			endif;
			endforeach;?>
		</div>
	</div>

</section>