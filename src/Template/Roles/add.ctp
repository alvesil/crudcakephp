<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Role $role
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Listar Permissões'), ['action' => 'index'], array('class' => 'bi bi-file-earmark-text', 'style'=>'font-size:16pt; ')) ?></li>
    </ul>
</nav>
<div class="roles form large-9 medium-8 columns content">
    <?= $this->Form->create($role) ?>
    <fieldset>
        <legend><?= __('Adicionar Permissão') ?></legend>
        <?php
            echo $this->Form->control('role', ['label' => 'Permissão']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Gravar')) ?>
    <?= $this->Form->end() ?>
</div>
