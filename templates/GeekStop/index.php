
	<section id="paginaInicial">
			<!-- Carousel -->
		<div class="carousel">
			<div class="paginaCarousel fade" style="display: block;">
				<div class="numeroSlide">1 / 3</div>
				<?= $this->Html->image('carousel\ofertas.jpg', ['alt' => 'Promoção', 'class' => 'imagemCarousel']); ?>
			</div>
			<div class="paginaCarousel fade" style="display: none;">
				<div class="numeroSlide">2 / 3</div>
				<?= $this->Html->image('carousel\camiseta_masculina4.jpg', ['alt' => 'Camiseta Naruto masculina', 'class' => 'imagemCarousel']); ?>
				<div class="legendaCarousel">Camiseta Naruto masculina 59,90</div>
			</div>
			<div class="paginaCarousel" style="display: none;">
				<div class="numeroSlide">3 / 3</div>
				<?= $this->Html->image('carousel\camiseta_masculina3.jpg', ['alt' => 'Camiseta Saint Seiya masculina', 'class' => 'imagemCarousel']); ?>
				<div class="legendaCarousel">Camiseta Saint Seiya masculina 39,90</div>
			</div>
			<div class="anterior" onclick="plusSlides(-1);">&#10094;</div>
			<div class="proximo" onclick="plusSlides(1);">&#10095;</div>
		</div>

		<!--Produtos da tela inicial-->
		<div class="secaoProdutosTelaInicial">
			<span class="destaques">Destaques</span>
			<div class="produtos" >
				<?php $cont = 1;
				foreach($produtos as $produto):
				if($produto->tipo == "camiseta" && $produto->genero == "feminino"):
				echo '<div class="produto" id = "camisetaFeminina' . $cont.'">';
					echo $this->Html->image($produto->imagem, ['alt' => $produto->nome, 'class' => 'imagensProdutos']);
					echo '<div id="infoProduto">';
						echo '<a href="' . $this->Url->build(['controller'=>'GeekStop', 'action'=>'detalhes', $produto->id]) . '" class="nomeProduto">' . $produto->nome . '</a>';
						echo '<span class="precoProduto">' . number_format($produto->preco, 2, ',', '') . '</span>';
						echo '<a href="' . $this->Url->build(['controller'=>'Geekstop', 'action'=>'carrinhoDeCompras']) . '" class="button"><span class="material-icons iconeAdicionarCarrinho">add_shopping_cart</span></a>';
					echo '</div>';
				echo '</div>';
				if($cont == 3):
					break;
				endif;
				$cont++; 
				endif;
				endforeach;?>

				<?php $cont = 1;
				foreach($produtos as $produto):
				if($produto->tipo == "camiseta" && $produto->genero == "masculino"):
				echo '<div class="produto" id = "camisetaMasculina' . $cont.'">';
					echo $this->Html->image($produto->imagem, ['alt' => $produto->nome, 'class' => 'imagensProdutos']);
					echo '<div id="infoProduto">';
						echo '<a href="' . $this->Url->build(['controller'=>'GeekStop', 'action'=>'detalhes', $produto->id]) . '" class="nomeProduto">' . $produto->nome . '</a>';
						echo '<span class="precoProduto">' . number_format($produto->preco, 2, ',', '') . '</span>';
						echo '<a href="' . $this->Url->build(['controller'=>'Geekstop', 'action'=>'carrinhoDeCompras']) . '" class="button"><span class="material-icons iconeAdicionarCarrinho">add_shopping_cart</span></a>';
					echo '</div>';
				echo '</div>';
				if($cont == 3):
					break;
				endif;
				$cont++; 
				endif;
				endforeach;?>

				<?php $cont = 1;
				foreach($produtos as $produto):
				if($produto->tipo == "colecionaveis"):
				echo '<div class="produto" id = "colecionavel"' . $cont.'>';
					echo $this->Html->image($produto->imagem, ['alt' => $produto->nome, 'class' => 'imagensProdutos']);
					echo '<div id="infoProduto">';
						echo '<a href="' . $this->Url->build(['controller'=>'GeekStop', 'action'=>'detalhes', $produto->id]) . '" class="nomeProduto">' . $produto->nome . '</a>';
						echo '<span class="precoProduto">' . number_format($produto->preco, 2, ',', '') . '</span>';
						echo '<a href="' . $this->Url->build(['controller'=>'Geekstop', 'action'=>'carrinhoDeCompras']) . '" class="button"><span class="material-icons iconeAdicionarCarrinho">add_shopping_cart</span></a>';
					echo '</div>';
				echo '</div>';
				if($cont == 3):
					break;
				endif;
				$cont++; 
				endif;
				endforeach;?>
			</div>
		</div>
	</section>