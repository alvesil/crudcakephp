<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<style>
    html,
    body {
        height: 100%;
    }

    body {
        /* display: flex; */
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
    }

    .form-signin {
        width: 100%;
        max-width: 330px;
        padding: 15px;
        margin: auto;
    }

    .form-signin .checkbox {
        font-weight: 400;
    }

    .form-signin .form-floating:focus-within {
        z-index: 2;
    }

    .form-signin input[type="text"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
    }

    .form-signin input[type="password"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }
</style>



<div class="d-flex text-center">
    <main class="form-signin">
        <?= $this->Form->create() ?>
        <?= $this->Html->image("../webroot/img/cake.png", ['class' => 'mb-4', 'width' => '150', 'height' => '100']) ?>

        <div class="form-floating mb-3">
            <!-- <?= $this->Form->control('username', ['class' => 'form-control', 'type' => 'text', 'placeholder' => 'Username', 'id' => 'floatingEmail']); ?> -->
            <input name="username" type="text" class="form-control" id="floatingUsername" placeholder="Usuario">
            <label for="floatingEmail">Usuário</label>
        </div>
        <div class="form-floating mb-3">
            <!-- <?=$this->Form->control('password', ['class' => 'form-control', 'label' => 'Password', 'id' => 'floatingPassword', 'placeholder' => 'Password']); ?> -->
            <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>

        <!-- <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div> -->
        <?= $this->Form->button(__('Login'), ['class' => 'w-100 btn btn-lg btn-primary', 'type' => 'submit']) ?>
        <?= $this->Html->link(__('Cadastrar'), ['class' => 'formcadastro', 'controller' => 'Users', 'action' => 'add', 'type' => 'button']) ?>
        <!-- <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button> -->
        <p id="p" class="mt-5 mb-3 text-muted">&copy; 2017–</p>
        <?= $this->Form->end() ?>
    </main>
    
</div>
<script>
    var date = new Date().getFullYear();
    var p = document.getElementById("p");
    p.innerHTML += date;
</script>