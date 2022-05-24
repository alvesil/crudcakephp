<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Role $role
 */
?>
<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Listar Permissões'), ['action' => 'index'], array('class' => 'bi bi-file-earmark-text', 'style' => 'font-size:16pt; ')) ?></li>
    </ul>
</nav> -->
<div class="container-fluid text-center">
    <?= $this->Form->create($role) ?>
    <h1>Adicionar Permissão</h1>
    <div class="row align-items-center">
        <div class="col">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingPermissao" name="role" placeholder="Permissão">
                <label for="floatingPermissao">Permissão</label>
            </div>
        </div>
    </div>
    <?= $this->Form->button(__('Gravar'), ["class" => "btn btn-primary mt-2"]) ?>

    <?= $this->Form->end() ?>
</div>