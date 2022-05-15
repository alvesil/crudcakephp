<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Listar Usuário'), ['action' => 'index'], array('class' => 'bi bi-file-earmark-text', 'style' => 'font-size:16pt;')) ?> </li>
        <li><?= $this->Html->link(__('Listar Permissões'), ['controller' => 'Roles', 'action' => 'index'], array('class' => 'bi bi-file-earmark-text', 'style' => 'font-size:16pt;')) ?> </li>
        <li><?= $this->Html->link(__('Cadastrar Usuário'), ['action' => 'add'], array('class' => 'bi bi-file-earmark-plus', 'style' => 'font-size:16pt;')) ?> </li>
        <li><?= $this->Html->link(__('Cadastrar Permissões'), ['controller' => 'Roles', 'action' => 'add'], array('class' => 'bi bi-file-earmark-plus', 'style' => 'font-size:16pt;')) ?> </li>
        <li><?= $this->Html->link(__('Alterar Usuário'), ['action' => 'edit', $user->id], array('class' => 'bi bi-pencil', 'style' => 'font-size:16pt;')) ?> </li>
        <li><?= $this->Form->postLink(__('Apagar Usuário'), ['action' => 'delete', $user->id], ['class'=>'bi bi-file-x', 'style' => 'font-size:16pt; color: #dd4433;', 'confirm' => __('Tem certeza que deseja apagar o registro # {0}?', $user->id)]) ?> </li>
    </ul>
</nav> -->
<div class="container-fluid">
    <h1 class="text-center"><?= h($user->name) ?></h1>
    <table class="table table-striped table-bordered">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($user->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Usuário') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('E-mail') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Senha') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Permissão') ?></th>
            <td><?= $user->has('role') ? $this->Html->link($user->role->id, ['controller' => 'Roles', 'action' => 'view', $user->role->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ID') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Criado em') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modificado em') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
    </table>
    <?= $this->Html->link('Voltar', ['action' => 'index'], ['class' => 'btn btn-outline-danger text-center']) ?>
</div>
