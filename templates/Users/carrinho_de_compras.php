<section id="carrinhoDeCompras">
    <h2>Seu Carrinho de compras</h2>]
    <div class="listaDeProdutos">
        <?php echo '<a href="' . $this->Url->build(['controller'=>'CarrinhoDeCompras', 'action'=>'removerDoCarrinhoDeCompras']) . '" class="button"><span class="material-icons iconeAdicionarCarrinho">add_shopping_cart</span></a>';?>
        <div class = "produtoCarrinho">
            <?php
            echo $this->Html->image('camisetas\camisetas_femininas\camiseta_feminina' . $cont . '.jpg', ['alt' => $produto->nome, 'class' => 'imagensProdutosCarrinho']);
            echo '<span class="nomeProduto">' . $produto->nome . '</span>';
			echo '<span class="precoProduto">' . number_format($produto->preco, 2, ',', '') . '</span>';
            echo '<a href="' . $this->Url->build(['controller'=>'CarrinhoDeCompras', 'action'=>'removerDoCarrinhoDeCompras']) . '" class="button"><span class="material-icons iconeAdicionarCarrinho">add_shopping_cart</span></a>';
            ?>
        </div>
    </div>
</section>