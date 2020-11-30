<section id="camisetas">
	<h2>Camisetas</h2>
	<!-- Filtro de camisetas -->
	<div class="filtro">
		<h3 class="tituloFiltro">Filtros</h3>
		<h4 class = tituloGeneroOuTamanho>Gênero</h4>
		<ul class="opcoesFiltro">
			<li><input type="radio" id="masculino" name="genero_camiseta" value="masculino" onchange="filtroGenero()">Masculino</li>
			<li><input type="radio" id="feminino" name="genero_camiseta" value="feminino" onchange="filtroGenero()">Feminino</li>
		</ul>
		<h4 class = tituloGeneroOuTamanho>Tamanho</h4>
		<ul class="opcoesFiltro">
			<li><input type="radio" id="infantil" name="tamanho_camiseta" value="infantil" onchange="filtroTamanho()">Infantil</li>
			<li><input type="radio" id="P" name="tamanho_camiseta" value="P" onchange="filtroTamanho()">P</li>
			<li><input type="radio" id="M" name="tamanho_camiseta" value="M" onchange="filtroTamanho()">M</li>
			<li><input type="radio" id="G" name="tamanho_camiseta" value="G" onchange="filtroTamanho()">G</li>
			<li><input type="radio" id="GG" name="tamanho_camiseta" value="GG" onchange="filtroTamanho()">GG</li>
		</ul>
	</div>

	<!-- seção de camisetas -->
	<div id = "todasCamisas" class="secaoProdutos">
		<div id="secaoMasculina" >
			<div id="camisetasMasculinas" class="produtos">
				<?php $cont = 1;
				foreach($produtos as $produto):
				if($produto->tipo == "camiseta" && $produto->genero == "masculino"):
				echo '<div class="produto" id = "camisetaMasculina' . $cont.'">';
					echo $this->Html->image('camisetas\camisetas_masculinas\camiseta_masculina' . $cont . '.jpg', ['alt' => $produto->nome, 'class' => 'imagensProdutos']);
					echo '<div id="infoProduto">';
						echo '<span class="nomeProduto">' . $produto->nome . '</span>';
						echo '<span class="precoProduto">' . number_format($produto->preco, 2, ',', '') . '</span>';
						echo '<a href="' . $this->Url->build(['controller'=>'Geekstop', 'action'=>'carrinhoDeCompras']) . '" class="button"><span class="material-icons iconeAdicionarCarrinho">add_shopping_cart</span></a>';
					echo '</div>';
				echo '</div>';
				$cont++; 
				endif;
				endforeach;?>
			</div>
		</div>

		<div id="secaoFeminina">
			<div id="camisetasFemininas" class="produtos">
				<?php $cont = 1;
				foreach($produtos as $produto):
				if($produto->tipo == "camiseta" && $produto->genero == "feminino"):
				echo '<div class="produto" id = "camisetaFeminina' . $cont.'">';
					echo $this->Html->image('camisetas\camisetas_femininas\camiseta_feminina' . $cont . '.jpg', ['alt' => $produto->nome, 'class' => 'imagensProdutos']);
					echo '<div id="infoProduto">';
						echo '<span class="nomeProduto">' . $produto->nome . '</span>';
						echo '<span class="precoProduto">' . number_format($produto->preco, 2, ',', '') . '</span>';
						echo '<a href="' . $this->Url->build(['controller'=>'CarrinhoDeCompras', 'action'=>'adicionarAoCarrinhoDeCompras']) . '" class="button"><span class="material-icons iconeAdicionarCarrinho">add_shopping_cart</span></a>';
					echo '</div>';
				echo '</div>';
				$cont++; 
				endif;
				endforeach;?>				
			</div>
		</div>
	</div>
</section>