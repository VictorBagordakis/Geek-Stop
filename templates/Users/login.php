<div id="login">
	<h2>Login</h2>
    <div class="container">
        <?php
            echo $this->Form->create();
            echo $this->Form->controls(
                [
                    'email' => ['id'=>'email', 'class' => 'campo', 'required' => true, 'placeholder'=>'Insira seu email', 'type'=>'email', 'label' => ['text'=>'Email', 'style' => 'font-weight: bold;']],
                    'senha' => ['id'=>'senha', 'class' => 'campo', 'required' => true, 'placeholder'=>'Insira sua senha', 'type'=>'password', 'label' => ['text'=>'Senha', 'style' => 'font-weight: bold;']]
                ]
            );
        ?>
        <span class="recuperarSenha">Esqueceu sua <a href="#recuperar_senha">senha?</a></span>
        <?= $this->Form->button('Login', ['id'=>'botaoLogin', 'type'=>'submit', 'class'=>'botaoLogin']) ?>
        <label><input type="checkbox" checked="checked" name="lembrarSenha">Lembrar senha</label>
        <?= $this->Form->end(); ?>
    </div>
</div>