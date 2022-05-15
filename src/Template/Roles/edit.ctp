<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Role $role
 */
?>
<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Listar Permissões'), ['action' => 'index'], array('class' => 'bi bi-file-earmark-text', 'style' => 'font-size: 16pt;')) ?></li>
        <li><?= $this->Form->postLink(
                __('Apagar'),
                ['action' => 'delete', $role->id],
                ['class' => 'bi bi-file-earmark-x', 'style' => 'font-size: 16pt; color: #dd4433;', 'confirm' => __('Tem certeza que quer apagar o registro # {0}?', $role->id)]
            )
            ?></li>
    </ul>
</nav> -->
<div class="container-fluid text-center">
    <?= $this->Form->create($role) ?>
    <h1>Alterar Permissão</h1>
    <div class="col-md-12 form-floating mb-3">
        <input name="role" class="form-control" placeholder="Observação aqui..." id="floatingTextarea" value ='<?php echo $role->role; ?>'>
        <label for="floatingTextarea">Permissão</label>
    </div>
    <?= $this->Html->link('Voltar', ['action' => 'index'], ['class' => 'btn btn-outline-danger']) ?>
    <?= $this->Form->button(__('Gravar'), ['class' => 'btn btn-primary']) ?>
    <?= $this->Form->end() ?>
</div>