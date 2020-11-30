<section id="bones">
	<h2>Bonés</h2>

	<!-- seção de bonés -->
	<div id = "todosBones" class="secaoProdutosSemFiltro">
		<div id="bones" class="produtos">
		<?php $cont = 1;
			foreach($produtos as $produto):
			if($produto->tipo == "bone"):
			echo '<div class="produto" id = "bone"' . $cont.'>';
                echo $this->Html->image($produto->imagem, ['alt' => $produto->nome, 'class' => 'imagensProdutos']);
		    	echo '<div id="infoProduto">';
					echo '<a href="' . $this->Url->build(['controller'=>'GeekStop', 'action'=>'detalhes', $produto->id]) . '" class="nomeProduto">' . $produto->nome . '</a>';
					echo '<span class="precoProduto">' . number_format($produto->preco, 2, ',', '') . '</span>';
					echo '<a href="' . $this->Url->build(['controller'=>'Geekstop', 'action'=>'carrinhoDeCompras']) . '" class="button"><span class="material-icons iconeAdicionarCarrinho">add_shopping_cart</span></a>';
				echo '</div>';
			echo '</div>';
			$cont++; 
			endif;
			endforeach;?>
		</div>
	</div>

</section>