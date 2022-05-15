<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<style>
    table {
        display: block;
        overflow-x: auto;
        white-space: nowrap;
    }
</style>
<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Novo Usuário'), ['action' => 'add'], array('class' => 'bi bi-file-earmark-plus', 'style' => 'font-size:16pt;')) ?></li>
        <li><?= $this->Html->link(__('Nova Permissão'), ['controller' => 'Roles', 'action' => 'add'], array('class' => 'bi bi-file-earmark-plus', 'style' => 'font-size:16pt;')) ?></li>
        <li><?= $this->Html->link(__('Listar Permissões'), ['controller' => 'Roles', 'action' => 'index'], array('class' => 'bi bi-file-earmark-text', 'style' => 'font-size:16pt;')) ?></li>
        <li><?= $this->Html->link(__('Listar Funcionários'), ['controller' => 'Funcionarios', 'action' => 'index'], array('class' => 'bi bi-file-earmark-text', 'style' => 'font-size:16pt;')) ?></li>
    </ul>
</nav> -->
<div class="container-fluid">
    <h1 class="text-center"><?= __('Usuários') ?></h1>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id', ['label' => 'ID']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('name', ['label' => 'Nome']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('username', ['label' => 'Usuário']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('email', ['label' => 'E-Mail']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('password', ['label' => 'Senha']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('roles_id', ['label' => 'Permissão']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('created', ['label' => 'Criado em']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified', ['label' => 'Alterado em']) ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user) : ?>
                <tr>
                    <td><?= $this->Number->format($user->id) ?></td>
                    <td><?= h($user->name) ?></td>
                    <td><?= h($user->username) ?></td>
                    <td><?= h($user->email) ?></td>
                    <td><?= h($user->password) ?></td>
                    <td><?= $user->has('role') ? $this->Html->link($user->role->role, ['controller' => 'Roles', 'action' => 'view', $user->role->id]) : '' ?></td>
                    <td><?= h(date("d/m/Y H:i:s", strtotime($user->created))) ?></td>
                    <td><?= h(date("d/m/Y H:i:s", strtotime($user->modified))) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__(''), ['action' => 'view', $user->id], array('class' => 'bi bi-eye', 'style' => 'font-size:16pt;')) ?>
                        <?= $this->Html->link(__(''), ['action' => 'edit', $user->id], array('class' => 'bi bi-pencil text-success', 'style' => 'font-size:16pt;')) ?>
                        <?= $this->Form->postLink(__(''), ['action' => 'delete', $user->id], ['class' => 'bi bi-file-earmark-x', 'style' => 'font-size:16pt; color: #dd0000;', 'confirm' => __('Tem certeza que deseja apagar o registro # {0}?', $user->id)]) ?>
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
        <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, listando {{current}} registro(s) de um total de {{count}}')]) ?></p>
    </div>
    <!-- <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo; Primeiro</span>
                </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <?= $this->Paginator->numbers() ?>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">Último &raquo;</span>
                </a>
            </li>
        </ul>
    </nav> -->
</div>