<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Funcionario[]|\Cake\Collection\CollectionInterface $funcionarios
 */
?>
<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Novo Funcionário'), ['action' => 'add'], array('class' => 'bi bi-file-earmark-plus', 'style' => 'font-size:16pt;')) ?></li>
        <li><?= $this->Html->link(__('Listar Usuários'), array('controller' => 'Users', 'action' => 'index'), array('class' => 'bi bi-file-earmark-text', 'style' => 'font-size:16pt;')) ?></li>
        <li><?= $this->Html->link(__('Listar Permissões'), array('controller' => 'Roles', 'action' => 'index'), array('class' => 'bi bi-file-earmark-text', 'style' => 'font-size:16pt;')) ?></li>
    </ul>
</nav> -->
<div class="container-fluid">
    <h1 class="text-center"><?= __('Funcionários') ?></h1>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id', ['label' => 'ID']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dt_nascimento', ['label' => 'Data de Nascimento']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('sexo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('uf', ['label' => 'UF']) ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($funcionarios as $funcionario): ?>
            <tr>
                <td><?= $this->Number->format($funcionario->id) ?></td>
                <td><?= h($funcionario->nome) ?></td>
                <td><?= h(date("d/m/Y", strtotime($funcionario->dt_nascimento))) ?></td>
                <td><?= h($funcionario->sexo) ?></td>
                <td><?= h($funcionario->uf) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__(''), ['action' => 'view', $funcionario->id], array('class' => 'bi bi-eye', 'style' => 'font-size:16pt;')) ?>
                    <?= $this->Html->link(__(''), ['action' => 'edit', $funcionario->id], array('class' => 'bi bi-pencil text-success', 'style' => 'font-size:16pt;')) ?>
                    <?= $this->Form->postLink(__(''), ['action' => 'delete', $funcionario->id], ['class' => 'bi bi-file-earmark-x', 'style'=> 'font-size:16pt; color: #dd0000;', 'confirm' => __('Tem certeza que deseja apagar o registro # {0}?', $funcionario->id)]) ?>
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
        <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, listando {{current}} registros(s) um total de {{count}} registros')]) ?></p>
    </div>
</div>

