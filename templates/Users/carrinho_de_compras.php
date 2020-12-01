<?php
    use Cake\ORM\TableRegistry;
    $produtos = TableRegistry::get('produtos');
?>
<section id="carrinhoDeCompras">
    <h2>Seu Carrinho de compras</h2>]
    <table class="listaDeProdutos">
        <tr>
            <th>Produto</th>
            <th>Preço</th>
            <th>Quantidade</th>
        </tr>
        <?php
        $totalProdutos = 0;
        $precoTotal = 0;
        foreach($produtosCarrinho as $produtoCarrinho):
            if($produtoCarrinho->idUser == $Auth->user('id')):
                $produto = $produtos->get($produtoCarrinho->idProduto);
                $totalProdutos += $produtoCarrinho->quantidade;
                $precoTotal += $produto->preco*$produtoCarrinho->quantidade;
                echo '<tr>';
                    echo '<td>'; 
                        echo '<div class = "produtoCarrinho">';
                            echo $this->Html->image($produto->imagem, ['alt' => $produto->nome, 'class' => 'imagensProdutos']);
                            echo '<div class="infoProdutoCarrinho">';
                                echo '<span class="nomeProdutoCarrinho">' . $produto->nome . '</span>';
                                echo '<a href="' . $this->Url->build(['controller'=>'CarrinhoDeCompras', 'action'=>'removerUmDoCarrinhoDeCompras', $produtoCarrinho->id]) . '" class="button"><span>- Remover um produto</span></a>';
                                echo '<a href="' . $this->Url->build(['controller'=>'CarrinhoDeCompras', 'action'=>'adicionarUmAoCarrinhoDeCompras', $produtoCarrinho->id]) . '" class="button"><span>+ Adicionar mais um produto</span></a>';
                            echo '</div>';
                        echo '</div>';
                    echo '</td>';
                    echo '<td>' . number_format($produto->preco, 2, ',', '') . '</td>';
                    echo '<td>' . $produtoCarrinho->quantidade . '</td>';
                echo '</tr>';
            endif;
        endforeach;
        ?>
        <?php

        ?>
        <tr>
            <td>Total</td>
            <td><?= number_format($precoTotal, 2, ',', '') ?></td>
            <td><?= $totalProdutos ?></td>
        </tr>
    </table>
</section>