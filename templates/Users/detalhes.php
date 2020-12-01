<section id="detalhes">
	<h2><?=$produto->nome?></h2>

	<!-- seção de casacos -->
	<div id = "detalhesProduto" class="detalhesProduto">
		<?php 
		echo '<div class="produtoDetalhes">';
            echo $this->Html->image($produto->imagem, ['alt' => $produto->nome, 'class' => 'imagensDetalhes']);
	    	echo '<div id="infoProdutoDetalhes">';
				echo '<span class="precoProdutoDetalhes">' . number_format($produto->preco, 2, ',', '') . '</span>';
				echo '<a href="' . $this->Url->build(['controller'=>'CarrinhoDeCompras', 'action'=>'adicionarAoCarrinhoDeCompras', $produto->id, $Auth->user('id')]) . '" class="button"><span class="material-icons iconeAdicionarCarrinho">add_shopping_cart</span></a>';
			echo '</div>';
		echo '</div>';
			echo '<div class = "descricao">';
				echo '<p class = "descricaoTitulo">Detalhes do Produto</p>'; 
				echo '<p class = "descricaoTexto">Descrição do Produto</p>';
			echo '</div>';
		echo '</div>';
		?>
	</div>
</section>