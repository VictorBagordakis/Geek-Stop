<?php
    use Cake\ORM\TableRegistry;
    $carrinho = TableRegistry::get('carrinho_de_compras');
    $produtosCarrinho = $carrinho->find('all');
    $quantidade_carrinho = 0;
    foreach($produtosCarrinho as $produtoCarrinho):
        if($produtoCarrinho->idUser == $Auth->user('id')):
            $quantidade_carrinho += $produtoCarrinho->quantidade;
        endif;
    endforeach;

?>
<section id="perfil">
	<h2>Olá <?= $Auth->user("nome") ?></h2>
    <div class = informacoesPessoais>
        <h3>Seus dados pessoais</h3>
        <p class="dadosPessoais">nome: <?=$Auth->user('nome')?></p>
        <p class="dadosPessoais">email: <?=$Auth->user('email')?></p>
        <p class="dadosPessoais">Quantidade de produtos no seu carrinho de compras: <?=$quantidade_carrinho?></p>
    </div>
</section>