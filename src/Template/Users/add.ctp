<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <?php if ($username) : ?>
            <li class="heading"><?= __('Ações') ?></li>
            <li><?= $this->Html->link(__('Listar Usuários'), ['action' => 'index'], array('class' => 'bi bi-file-earmark-text', 'style' => 'font-size:16pt;')) ?></li>
            <li><?= $this->Html->link(__('Listar Permissões'), ['controller' => 'Roles', 'action' => 'index'], array('class' => 'bi bi-file-earmark-text', 'style' => 'font-size:16pt;')) ?></li>
            <li><?= $this->Html->link(__('Nova Permissão'), ['controller' => 'Roles', 'action' => 'add'], array('class' => 'bi bi-file-earmark-plus', 'style' => 'font-size:16pt;')) ?></li>
        <?php endif; ?>

    </ul>
</nav> -->
<!-- <div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Adicionar Usuário') ?></legend>
        <?php
        echo $this->Form->control('name', ['label' => 'Nome']);
        echo $this->Form->control('username', ['label' => 'Usuário']);
        echo $this->Form->control('email', ['label' => 'E-Mail']);
        echo $this->Form->control('password', ['label' => 'Senha']);
        echo $this->Form->control('confirm_password', array('type' => 'password', 'label' => 'Confirmar Senha'));
        echo $this->Form->control('roles_id', ['options' => $roles, 'label' => 'Permissão']);
        ?>
    </fieldset>
    <?php if (!$username) : ?>
        <?= $this->Html->link(__('Voltar'), ['action' => 'login']) ?>
    <?php endif; ?>
    <?= $this->Form->button(__('Gravar')) ?>
    <?= $this->Form->end() ?>
</div> -->

<div class="container-fluid">
    <div class="text-center">
        <h1>Cadastrar Usuário</h1>
        <?= $this->Form->create($user) ?>

        <div class="form-floating mb-3">
            <input onchange="validaNome()" type="text" class="form-control" name="name" id="floatingNome" placeholder="Nome">
            <label for="floatingNome">Nome</label>
            <div class="invalid-feedback">
                Campo "Nome" inválido!
            </div>
            <div class="valid-feedback">
                Campo "Nome" ok!
            </div>
        </div>
        <div class="form-floating mb-3">
            <input onchange="validaUsuario()" type="text" class="form-control" name="username" id="floatingUsuario" placeholder="Usuário">
            <label for="floatingUsuario">Usuário</label>
            <div class="invalid-feedback">
                Campo "Usuário" inválido!
            </div>
            <div class="valid-feedback">
                Campo "Usuário" ok!
            </div>
        </div>
        <div class="form-floating mb-3">
            <input onchange="validaEmail()" type="text" class="form-control" name="email" id="floatingEmail" placeholder="exemplo@gmail.com">
            <label for="floatingEmail">E-mail</label>
            <div class="invalid-feedback">
                Campo "E-mail" inválido!
            </div>
            <div class="valid-feedback">
                Campo "E-mail" ok!
            </div>
        </div>
        <div class="form-floating mb-3">
            <input onchange="validaSenha()" type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Senha</label>
            <div class="invalid-feedback">
                Campo "Senha" inválido!
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
        <?php if ($username) : ?>
            <?= $this->Html->link(__('Voltar'), ['action' => 'index'], ['class' => 'btn btn-danger']) ?>
        <?php endif; ?> 
        <?= $this->Form->button(__('Gravar'), ['class' => 'btn btn-outline-primary']) ?>
        <?= $this->Form->end() ?>
    </div>
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