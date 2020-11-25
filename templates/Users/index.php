
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
				<div class="produto">
					<?= $this->Html->image('camisetas\camisetas_masculinas\camiseta_masculina1.jpg', ['alt' => 'Camiseta do Mário masculina', 'class' => 'imagensProdutos']); ?>
					<div id="infoProduto">
						<span class="nomeProduto">Camiseta Mário masculina</span>
						<span class="precoProduto">99,90</span>
						<button><span class="material-icons iconeAdicionarCarrinho">add_shopping_cart</span></button>
					</div>
				</div>
				<div class="produto">
					<?= $this->Html->image('camisetas\camisetas_masculinas\camiseta_masculina2.jpg', ['alt' => 'Camiseta Dororo masculina', 'class' => 'imagensProdutos']); ?>
					<div id="infoProduto">
						<span class="nomeProduto">Camiseta Dororo masculina</span>
						<span class="precoProduto">59,90</span>
						<button><span class="material-icons iconeAdicionarCarrinho">add_shopping_cart</span></button>
					</div>
				</div>
				<div class="produto">
					<?= $this->Html->image('camisetas\camisetas_masculinas\camiseta_masculina3.jpg', ['alt' => 'Camiseta Saint Seiya masculina', 'class' => 'imagensProdutos']); ?>
					<div id="infoProduto">
						<span class="nomeProduto">Camiseta Saint Seiya masculina</span>
						<span class="precoProduto">39,90</span>
						<button><span class="material-icons iconeAdicionarCarrinho">add_shopping_cart</span></button>
					</div>
				</div>
				<div class="produto">
					<?= $this->Html->image('camisetas\camisetas_femininas\camiseta_feminina1.jpg', ['alt' => 'Camiseta Avengers feminina', 'class' => 'imagensProdutos']); ?>
					<div id="infoProduto">
						<span class="nomeProduto">Camiseta Avengers feminina</span>
						<span class="precoProduto">99,90</span>
						<button><span class="material-icons iconeAdicionarCarrinho">add_shopping_cart</span></button>
					</div>
				</div>
				<div class="produto">
					<?= $this->Html->image('camisetas\camisetas_femininas\camiseta_feminina2.jpg', ['alt' => 'Camiseta Star wars feminina', 'class' => 'imagensProdutos']); ?>
					<div id="infoProduto">
						<span class="nomeProduto">Camiseta Star wars feminina</span>
						<span class="precoProduto">59,90</span>
						<button><span class="material-icons iconeAdicionarCarrinho">add_shopping_cart</span></button>
					</div>
				</div>
				<div class="produto">
					<?= $this->Html->image('camisetas\camisetas_femininas\camiseta_feminina3.jpg', ['alt' => 'Camiseta Game of Thrones feminina', 'class' => 'imagensProdutos']); ?>
					<div id="infoProduto">
						<span class="nomeProduto">Camiseta Game of Thrones feminina</span>
						<span class="precoProduto">39,90</span>
						<button><span class="material-icons iconeAdicionarCarrinho">add_shopping_cart</span></button>
					</div>
				</div>
				<div class="produto">
					<?= $this->Html->image('bones\bone1.jpg', ['alt' => 'Boné Batman', 'class' => 'imagensProdutos']); ?>
					<div id="infoProduto">
						<span class="nomeProduto">Boné Batman</span>
						<span class="precoProduto">99,90</span>
						<button><span class="material-icons iconeAdicionarCarrinho">add_shopping_cart</span></button>
					</div>
				</div>
				<div class="produto">
					<?= $this->Html->image('acessorios\chaveiro1.jpg', ['alt' => 'Chaveiro Game of Thrones', 'class' => 'imagensProdutos']); ?>
					<div id="infoProduto">
						<span class="nomeProduto">Chaveiro Game of Thrones</span>
						<span class="precoProduto">59,90</span>
						<button><span class="material-icons iconeAdicionarCarrinho">add_shopping_cart</span></button>
					</div>
				</div>
				<div class="produto">
					<?= $this->Html->image('acessorios\chaveiro2.jpg', ['alt' => 'Chaveiro Harry Potter', 'class' => 'imagensProdutos']); ?>
					<div id="infoProduto">
						<span class="nomeProduto">Chaveiro Harry Potter</span>
						<span class="precoProduto">39,90</span>
						<button><span class="material-icons iconeAdicionarCarrinho">add_shopping_cart</span></button>
					</div>
				</div>
			</div>
		</div>

	</section>

