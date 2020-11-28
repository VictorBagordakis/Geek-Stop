<section id="carrinhoDeCompras">
    <div id="aviso" class = "avisoSemAutorizacao">
        <p class="textoAviso">Você precisa ter autorização para acessar essa página. Faça o <a href="<?= $this->Url->build(['controller'=>'Users', 'action'=>'login']); ?>" >Login </a> ou <a href="<?= $this->Url->build(['controller'=>'Users', 'action'=>'cadastro']); ?>">Cadastre-se</a></p>
    </div>
</section>