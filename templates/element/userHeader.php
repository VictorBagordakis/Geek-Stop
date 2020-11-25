<header id="topo">
	<h1><a href="<?= $this->Url->build(['controller'=>'GeekStop', 'action'=>'index']); ?>" class="logoAncora">Geek Stop</a></h1>

	<div id="barraDePesquisa" class = "barraDePesquisa">
    	<input type="text" placeholder="Busque seu produto aqui" class="campoDePesquisa">
		<button class="botaoParaPesquisar"><span class="material-icons">search</span></button>
	</div>
	<nav id="navSecundaria">
		<ul id="ulNavSecundaria">
			<li><a href="<?= $this->Url->build(['controller'=>'Users', 'action'=>'perfil']); ?>" class="itemDecoration2">Nome</a></li>
			<li><a href="<?= $this->Url->build(['controller'=>'Users', 'action'=>'logout']); ?>" class="itemDecoration2">Sair</a></li>
			<li><a href="<?= $this->Url->build(['controller'=>'Users', 'action'=>'carrinhoDeCompras']); ?>" class="itemDecoration2"><span class="material-icons">shopping_cart</span></a></li>

		</ul>
	</nav>
</header>