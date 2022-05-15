<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Role $role
 */
?>
<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Nova Permissão'), ['action' => 'add'], array('class'=>'bi bi-file-earmark-plus', 'style' => 'font-size: 16pt;')) ?> </li>
        <li><?= $this->Html->link(__('Listar Permissão'), ['action' => 'index'], array('class'=>'bi bi-pencil', 'style' => 'font-size: 16pt;')) ?> </li>
        <li><?= $this->Html->link(__('Alterar Permissão'), ['action' => 'edit', $role->id], array('class'=>'bi bi-file-earmark-text', 'style' => 'font-size: 16pt;')) ?> </li>
        <li><?= $this->Form->postLink(__('Apagar Permissão'), ['action' => 'delete', $role->id], ['class'=>'bi bi-file-earmark-x', 'style'=>'font-size: 16pt; color: #dd4433', 'confirm' => __('Tem certeza que quer apagar o registro # {0}?', $role->id)]) ?> </li>
    </ul>
</nav> -->
<div class="roles view large-9 medium-8 columns content">
    <h1>Permissão: <?= h($role->role) ?></h1>
    <table class="table table-bordered table-striped">
        <tr>
            <th scope="row"><?= __('Permissão') ?></th>
            <td><?= h($role->role) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ID') ?></th>
            <td><?= $this->Number->format($role->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Criado em') ?></th>
            <td><?= h(date("d/m/Y H:i:s", strtotime($role->created))) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Alterado em') ?></th>
            <td><?= h(date("d/m/Y H:i:s", strtotime($role->modified))) ?></td>
        </tr>
    </table>
    <?= $this->Html->link('Voltar', ['action' => 'index'], ['class' => 'btn btn-outline-danger']) ?>
</div>
