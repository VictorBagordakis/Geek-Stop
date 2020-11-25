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
				<div class="produto" id= "camisetaMarioMasculina">
                    <?= $this->Html->image('camisetas\camisetas_masculinas\camiseta_masculina1.jpg', ['alt' => 'Camiseta do Mário masculina', 'class' => 'imagensProdutos']); ?>
					<div id="infoProduto">
						<span class="nomeProduto">Camiseta Mário masculina</span>
						<span class="precoProduto">99,90</span>
						<button><span class="material-icons iconeAdicionarCarrinho">add_shopping_cart</span></button>
					</div>
				</div>
				<div class="produto" id= "camisetaDororoMasculina">
                    <?= $this->Html->image('camisetas\camisetas_masculinas\camiseta_masculina2.jpg', ['alt' => 'Camiseta Dororo masculina', 'class' => 'imagensProdutos']); ?>
					<div id="infoProduto">
						<span class="nomeProduto">Camiseta Dororo masculina</span>
						<span class="precoProduto">59,90</span>
						<button><span class="material-icons iconeAdicionarCarrinho">add_shopping_cart</span></button>
					</div>
				</div>
				<div class="produto" id= "camisetaSaintSeiyaMasculina">
                    <?= $this->Html->image('camisetas\camisetas_masculinas\camiseta_masculina3.jpg', ['alt' => 'Camiseta Saint Seiya masculina', 'class' => 'imagensProdutos']); ?>
					<div id="infoProduto">
						<span class="nomeProduto">Camiseta Saint Seiya masculina</span>
						<span class="precoProduto">39,90</span>
						<button><span class="material-icons iconeAdicionarCarrinho">add_shopping_cart</span></button>
					</div>
				</div>
				<div class="produto" id= "camisetaNarutoMasculina">
                    <?= $this->Html->image('camisetas\camisetas_masculinas\camiseta_masculina4.jpg', ['alt' => 'Camiseta Naruto masculina', 'class' => 'imagensProdutos']); ?>
					<div id="infoProduto">
						<span class="nomeProduto">Camiseta Naruto masculina</span>
						<span class="precoProduto">59,90</span>
						<button><span class="material-icons iconeAdicionarCarrinho">add_shopping_cart</span></button>
					</div>
				</div>
				<div class="produto" id= "camisetaFlashMasculina">
                    <?= $this->Html->image('camisetas\camisetas_masculinas\camiseta_masculina5.jpg', ['alt' => 'Camiseta Flash masculina', 'class' => 'imagensProdutos']); ?>
					<div id="infoProduto">
						<span class="nomeProduto">Camiseta Flash masculina</span>
						<span class="precoProduto">79,90</span>
						<button><span class="material-icons iconeAdicionarCarrinho">add_shopping_cart</span></button>
					</div>
				</div>
				<div class="produto" id= "camisetaIronManMasculina">
                    <?= $this->Html->image('camisetas\camisetas_masculinas\camiseta_masculina6.jpg', ['alt' => 'Camiseta Iron Man masculina', 'class' => 'imagensProdutos']); ?>
					<div id="infoProduto">
						<span class="nomeProduto">Camiseta Iron man masculina</span>
						<span class="precoProduto">89,90</span>
						<button><span class="material-icons iconeAdicionarCarrinho">add_shopping_cart</span></button>
					</div>
				</div>
			</div>
		</div>

		<div id="secaoFeminina">
			<div id="camisetasFemininas" class="produtos">
				<div class="produto" id = "camisetaAvengersFeminina">
                <?= $this->Html->image('camisetas\camisetas_femininas\camiseta_feminina1.jpg', ['alt' => 'Camiseta Avengers feminina', 'class' => 'imagensProdutos']); ?>
					<div id="infoProduto">
						<span class="nomeProduto">Camiseta Avengers feminina</span>
						<span class="precoProduto">59,90</span>
						<button><span class="material-icons iconeAdicionarCarrinho">add_shopping_cart</span></button>
					</div>
				</div>
				<div class="produto" id="camisetaStarWarsFeminina">
                <?= $this->Html->image('camisetas\camisetas_femininas\camiseta_feminina2.jpg', ['alt' => 'Camiseta Star wars feminina', 'class' => 'imagensProdutos']); ?>
					<div id="infoProduto">
						<span class="nomeProduto">Camiseta Star Wars feminina</span>
						<span class="precoProduto">79,90</span>
						<button><span class="material-icons iconeAdicionarCarrinho">add_shopping_cart</span></button>
					</div>
				</div>
				<div class="produto" id="camisetaGameOfThronesFeminina1">
                <?= $this->Html->image('camisetas\camisetas_femininas\camiseta_feminina3.jpg', ['alt' => 'Camiseta Game of Thrones feminina', 'class' => 'imagensProdutos']); ?>
					<div id="infoProduto">
						<span class="nomeProduto">Camiseta Game of Thrones feminina</span>
						<span class="precoProduto">89,90</span>
						<button><span class="material-icons iconeAdicionarCarrinho">add_shopping_cart</span></button>
					</div>
				</div>
				<div class="produto" id="camisetaGameOfThronesFeminina2">
					<?= $this->Html->image('camisetas\camisetas_femininas\camiseta_feminina4.jpg', ['alt' => 'Camiseta Game of Thrones feminina', 'class' => 'imagensProdutos']); ?>
					<div id="infoProduto">
						<span class="nomeProduto">Camiseta Game of Thrones feminina</span>
						<span class="precoProduto">59,90</span>
						<button><span class="material-icons iconeAdicionarCarrinho">add_shopping_cart</span></button>
					</div>
				</div>
				<div class="produto" id="camisetaBatmanFeminina1">
					<?= $this->Html->image('camisetas\camisetas_femininas\camiseta_feminina5.jpg', ['alt' => 'Camiseta Batman feminina 1', 'class' => 'imagensProdutos']); ?>
					<div id="infoProduto">
						<span class="nomeProduto">Camiseta Batman feminina</span>
						<span class="precoProduto">49,90</span>
						<button><span class="material-icons iconeAdicionarCarrinho">add_shopping_cart</span></button>
					</div>
				</div>
				<div class="produto" id="camisetaBatmanFeminina2">
					<?= $this->Html->image('camisetas\camisetas_femininas\camiseta_feminina6.jpg', ['alt' => 'Camiseta Batman feminina 2', 'class' => 'imagensProdutos']); ?>
					<div id="infoProduto">
						<span class="nomeProduto">Camiseta Batman feminina</span>
						<span class="precoProduto">39,90</span>
						<button><span class="material-icons iconeAdicionarCarrinho">add_shopping_cart</span></button>
					</div>
				</div>						
			</div>
		</div>
	</div>
</section>