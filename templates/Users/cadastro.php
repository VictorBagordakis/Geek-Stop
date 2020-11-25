<div id="cadastro">
	<h2>Cadastre-se</h2>
	<div class="container" method="post">
        <?php
            echo $this->Form->create();
            echo $this->Form->controls(
                [
                    'nome' => ['id'=>'nome', 'class' => 'campo', 'required' => true, 'placeholder'=>'Insira seu nome', 'type'=>'text', 'label' => ['text'=>'Nome', 'style' => 'font-weight: bold;']],
                    'email' => ['id'=>'email', 'class' => 'campo', 'required' => true, 'placeholder'=>'Insira seu email', 'type'=>'email', 'label' => ['text'=>'Email', 'style' => 'font-weight: bold;']],
                    'senha' => ['id'=>'senha', 'class' => 'campo', 'required' => true, 'placeholder'=>'Insira sua senha', 'type'=>'password', 'label' => ['text'=>'Senha', 'style' => 'font-weight: bold;']],
                    'confirmarSenha' => ['id'=>'confirmarSenha', 'class' => 'campo', 'required' => true, 'placeholder'=>'Confirme sua senha', 'type'=>'password', 'label' => ['text'=>'Confirmar Senha', 'style' => 'font-weight: bold;']]
                ]
            );
            echo $this->Form->button('Cadastrar', ['id'=>'botaoCadastro', 'type'=>'submit', 'class'=>'botaoLogin', 'onclick'=>"compararSenhas();validarSenha();"]);
        ?>
            
        <?= $this->Form->end(); ?>

	</div>
</div>