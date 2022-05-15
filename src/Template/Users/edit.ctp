<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Form->postLink(
                __('Apagar'),
                ['action' => 'delete', $user->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'bi bi-file-earmark-x', 'style' => 'font-size:16pt; color: #dd4433;']
            )
            ?></li>
        <li><?= $this->Html->link(__('Listar Usuários'), ['action' => 'index'], array('class' => 'bi bi-file-earmark-text', 'style' => 'font-size:16pt;')) ?></li>
        <li><?= $this->Html->link(__('Listar Permissões'), ['controller' => 'Roles', 'action' => 'index'], array('class' => 'bi bi-file-earmark-text', 'style' => 'font-size:16pt;')) ?></li>
        <li><?= $this->Html->link(__('Cadastrar Permissão'), ['controller' => 'Roles', 'action' => 'add'], array('class' => 'bi bi-file-earmark-plus', 'style' => 'font-size:16pt;')) ?></li>
    </ul>
</nav> -->
<div class="container-fluid">
    <?= $this->Form->create($user) ?>
    <!-- <fieldset>
        <legend><?= __('Editar Usuário') ?></legend>
        <?php
        echo $this->Form->control('name', array('label' => 'Nome'));
        echo $this->Form->control('username', array('label' => 'Usuário'));
        echo $this->Form->control('email', array('label' => 'E-mail'));
        echo $this->Form->control('password', array('label' => 'Senha'));
        echo $this->Form->control('roles_id', ['label' => 'Permissão', 'options' => $roles]);
        ?>
    </fieldset> -->
    <div class="text-center">
        <h1>Alterar Usuário</h1>
        <?= $this->Form->create($user) ?>

        <div class="form-floating mb-3">
            <input onchange="validaNome()" type="text" class="form-control" name="name" id="floatingNome" placeholder="Nome" value="<?php echo $user->name; ?>">
            <label for="floatingNome">Nome</label>
            <div class="invalid-feedback">
                Campo "Nome" inválido!
            </div>
            <div class="valid-feedback">
                Campo "Nome" ok!
            </div>
        </div>
        <div class="form-floating mb-3">
            <input onchange="validaUsuario()" type="text" class="form-control" name="username" id="floatingUsuario" placeholder="Usuário" value="<?php echo $user->username; ?>">
            <label for="floatingUsuario">Usuário</label>
            <div class="invalid-feedback">
                Campo "Usuário" inválido!
            </div>
            <div class="valid-feedback">
                Campo "Usuário" ok!
            </div>
        </div>
        <div class="form-floating mb-3">
            <input onchange="validaEmail()" type="text" class="form-control" name="email" id="floatingEmail" placeholder="exemplo@gmail.com" value="<?php echo $user->email; ?>">
            <label for="floatingEmail">E-mail</label>
            <div class="invalid-feedback">
                Campo "E-mail" inválido!
            </div>
            <div class="valid-feedback">
                Campo "E-mail" ok!
            </div>
        </div>
        <div class="form-floating mb-3">
            <input onchange="validaSenha()" type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password" value="<?php echo $user->password; ?>">
            <label for="floatingPassword">Senha</label>
            <div class="invalid-feedback">
                Campo "Senha" inválido!!
            </div>
            <div class="valid-feedback">
                Campo "Senha" ok!
            </div>
        </div>
        <div class="form-floating mb-3">
            <input onchange="validaSenhas()" type="password" class="form-control" name="confirm_password" id="floatingConfirmPassword" placeholder="Confirm Password">
            <label for="floatingConfirmPassword">Confirmar Senha</label>
            <div class="invalid-feedback">
                Campos "Senha" e "Confirmar Senha" não coincidem!!
            </div>
            <div class="valid-feedback">
                Campos "Senha" e "Confirmar Senha" ok!
            </div>
        </div>
        <div class="form-floating mb-3">
            <?= $this->Form->control('roles_id', ['options' => $roles, 'label' => '', 'class' => 'form-select', 'id' => 'floatingSelect', 'aria-label' => 'Floating label select example']); ?>

        </div>

        <?php if (!$username) : ?>
            <?= $this->Html->link(__('Voltar'), ['action' => 'login'], ['class' => 'btn btn-danger']) ?>
        <?php endif; ?>
        <?= $this->Html->link(__('Voltar'), ['action' => 'index'], ['class' => 'btn btn-outline-danger']) ?>
        <?= $this->Form->button(__('Gravar'), ['class' => 'btn btn-outline-primary']) ?>
        <?= $this->Form->end() ?>
    </div>
    <?= $this->Form->end() ?>
</div>
<script>
    var senhaA = document.getElementById("floatingPassword");
    var senhaB = document.getElementById("floatingConfirmPassword");
    var nome = document.getElementById("floatingNome");
    var usuario = document.getElementById("floatingUsuario");
    var email = document.getElementById("floatingEmail");

    function validaSenhas() {
        if (senhaA.value != senhaB.value) {
            senhaB.className = "form-control is-invalid";
        }
        else if (senhaA.value == senhaB.value) {
            senhaB.className = "form-control is-valid";
        } else {
            senhaB.className = "form-control";
        }
    }

    function validaNome() {
        let tamanho = nome.value;
        if (tamanho.length == 0) {
            nome.className = 'form-control is-invalid'
        }else {
            nome.className = 'form-control is-valid'
        }
    }
    
    function validaUsuario() {
        let tamanho = usuario.value;
        if (tamanho.length == 0) {
            usuario.className = 'form-control is-invalid'
        }else {
            usuario.className = 'form-control is-valid'
        }
    }
    
    function validaSenha() {
        let tamanho = senhaA.value;
        if (tamanho.length == 0) {
            senhaA.className = 'form-control is-invalid'
        }else {
            senhaA.className = 'form-control is-valid'
        }
    }

    
    function validaEmail() {
        let tamanho = email.value;
        let espaco = 0;
        let mailSign = false;

        for (let i = 0; i < tamanho.length; i++) {
            if(tamanho[i] == ' '){
                espaco ++;
            }
            if (tamanho[i] == '@') {
                mailSign = true;
            }
        }

        if (tamanho.length == 0 || espaco > 0 || mailSign != true) {
            email.className = 'form-control is-invalid'
        }else {
            email.className = 'form-control is-valid'
        }
    }
</script>