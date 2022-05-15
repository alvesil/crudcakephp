<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Role[]|\Cake\Collection\CollectionInterface $roles
 */
?>
<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Nova Permissão'), ['action' => 'add'], array('class' => 'bi bi-file-earmark-plus', 'style' => 'font-size: 16pt;')) ?></li>
        <li><?= $this->Html->link(__('Listar Usuários'), ['controller' => 'Users', 'action' => 'index'], array('class' => 'bi bi-file-earmark-text', 'style' => 'font-size: 16pt;')) ?></li>
        <li><?= $this->Html->link(__('Listar Funcionários'), ['controller' => 'Funcionarios', 'action' => 'index'], array('class' => 'bi bi-file-earmark-text', 'style' => 'font-size: 16pt;')) ?></li>
    </ul>
</nav> -->
<div class="container-fluid">
    <h1 class="text-center"><?= __('Permissões') ?></h1>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id', ['label' => 'ID']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('role', ['label' => 'Permissão']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('created', ['label' => 'Criado em']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified', ['label' => 'Alterado em']) ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($roles as $role): ?>
            <tr>
                <td><?= $this->Number->format($role->id) ?></td>
                <td><?= h($role->role) ?></td>
                <td><?= h($role->created) ?></td>
                <td><?= h($role->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__(''), ['action' => 'view', $role->id], array('class' => 'bi bi-eye', 'style' => 'font-size:16pt;')) ?>
                    <?= $this->Html->link(__(''), ['action' => 'edit', $role->id], array('class' => 'bi bi-pencil text-success', 'style' => 'font-size:16pt;')) ?>
                    <?= $this->Form->postLink(__(''), ['action' => 'delete', $role->id], ['class' => 'bi-file-earmark-x', 'style' => 'font-size:16pt; color: #dd4433;','confirm' => __('Tem certeza que quer apagar o registro # {0}?', $role->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('Primeiro')) ?>
            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Próximo') . ' >') ?>
            <?= $this->Paginator->last(__('Último') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, listando {{current}} registros(s) no total de {{count}} registro(s)')]) ?></p>
    </div>
</div>
