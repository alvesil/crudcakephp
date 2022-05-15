<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Funcionario $funcionario
 */
?>
<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Listar Funcionários'), ['action' => 'index'], array('class' => 'bi bi-file-earmark-text', 'style' => 'font-size: 16pt;')) ?> </li>
        <li><?= $this->Html->link(__('Novo Funcionário'), ['action' => 'add'], array('class' => 'bi bi-file-earmark-plus', 'style' => 'font-size: 16pt;')) ?> </li>
        <li><?= $this->Html->link(__('Alterar Funcionário'), ['action' => 'edit', $funcionario->id], array('class' => 'bi bi-pencil', 'style' => 'font-size: 16pt;')) ?> </li>
        <li><?= $this->Form->postLink(__('Apagar Funcionário'), ['action' => 'delete', $funcionario->id], ['class' => 'bi bi-file-earmark-x', 'style'=>'font-size: 16pt; color: #dd4433', 'confirm' => __('Tem certeza que deseja apagar o registro # {0}?', $funcionario->id)]) ?> </li>
    </ul>
</nav> -->
<div class="funcionarios view large-9 medium-8 columns content">
    <h1 class="text-center"><?= h($funcionario->nome) ?></h1>
    <table class="table table-bordered table-striped">
        <tr>
            <th scope="row"><?= __('ID') ?></th>
            <td><?= h($funcionario->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($funcionario->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sexo') ?></th>
            <td><?= h($funcionario->sexo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('UF') ?></th>
            <td><?= h($funcionario->uf) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ID') ?></th>
            <td><?= $this->Number->format($funcionario->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data de Nascimento') ?></th>
            <td><?= h(date("d/m/Y", strtotime($funcionario->dt_nascimento))) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Observação') ?></h4>
        <?= $this->Text->autoParagraph(h($funcionario->observacao)); ?>
    </div>
    <?= $this->Html->link('Voltar', ['action' => 'index'], ['class' => 'btn btn-outline-danger']) ?>
</div>
