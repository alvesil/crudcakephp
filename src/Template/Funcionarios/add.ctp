<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Funcionario $funcionario
 */
?>
<div class="container-fluid">
    <!-- <?= $this->Form->create($funcionario) ?>

    <?php
    echo $this->Form->control('nome');
    echo $this->Form->control('dt_nascimento', array('label' => 'Data de Nascimento'));
    echo $this->Form->control('sexo', array('type' => 'radio', 'label' => 'Sexo', 'options' => array('M' => 'Masculino', 'F' => 'Feminino', 'O' => 'Outros')));
    echo $this->Form->control('uf', array('type' => 'select', 'label' => 'UF', 'options' => array('AC' => 'Acre', 'AL' => 'Alagoas', 'AP' => 'Amapá', 'AM' => 'Amazonas', 'BA' => 'Bahia', 'CE' => 'Ceará', 'DF' => 'Distrito Federal', 'ES' => 'Espírito Santo', 'GO' => 'Goiás', 'MA' => 'Maranhão', 'MT' => 'Mato Grosso', 'MS' => 'Mato Grosso do Sul', 'MG' => 'Minas Gerais', 'PA' => 'Pará', 'PB' => 'Paraíba', 'PR' => 'Paraná', 'PE' => 'Pernambuco', 'PI' => 'Piauí', 'RJ' => 'Rio de Janeiro', 'RN' => 'Rio Grande do Norte', 'RS' => 'Rio Grande do Sul', 'RO' => 'Rondônia', 'RR' => 'Roraima', 'SC' => 'Santa Catarina', 'SP' => 'São Paulo', 'SE' => 'Sergipe', 'TO' => 'Tocantins')));
    echo $this->Form->control('observacao');
    ?>

    <?= $this->Form->button(__('Gravar')) ?>
    <?= $this->Form->end() ?> -->
    <?= $this->Form->create($funcionario) ?>
    <div class="row g-3">
        <h1 class="text-center">Cadastrar Funcionário</h1>
        <div class="col-md-4 form-floating mb-3">
            <input name="nome" type="text" class="form-control" id="floatingInput" placeholder="Seu nome">
            <label for="floatingInput">Nome</label>
        </div>
        <div class="col-md-2 form-floating mb-3">
            <input name="dt_nascimento" type="date" class="form-control" id="floatingInput" placeholder="dd/mm/aaaa">
            <label for="floatingInput">Data de Nascimento</label>
        </div>
        <div class="col-md-2 form-floating mb-3">
            <select name="uf" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                <option value="AC">Acre</option>
                <option value="AL">Alagoas</option>
                <option value="AP">Amapá</option>
                <option value="AM">Amazonas</option>
                <option value="BA">Bahia</option>
                <option value="CE">Ceará</option>
                <option value="DF">Distrito Federal</option>
                <option value="ES">Espírito Santo</option>
                <option value="GO">Goiás</option>
                <option value="MA">Maranhão</option>
                <option value="MT">Mato Grosso</option>
                <option value="MS">Mato Grosso do Sul</option>
                <option value="MG">Minas Gerais</option>
                <option value="PA">Pará</option>
                <option value="PB">Paraíba</option>
                <option value="PR">Paraná</option>
                <option value="PE">Pernambuco</option>
                <option value="PI">Piauí</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="RN">Rio Grande do Norte</option>
                <option value="RS">Rio Grande do Sul</option>
                <option value="RO">Rondônia</option>
                <option value="RR">Roraima</option>
                <option value="SC">Santa Catarina</option>
                <option value="SP">São Paulo</option>
                <option value="SE">Sergipe</option>
                <option value="TO">Tocantins</option>
                <option value="EX">Estrangeiro</option>
            </select>
            <label for="floatingSelect">Unidade Federativa</label>
        </div>
        <div class="col-md-4">
            <label>Sexo</label>
            <div class="row g-3">
                <div class="col-md-4 form-check mb-3">
                    <input type="radio" class="form-check-input" value="M" name="sexo" id="floatingInput">
                    <label for="form-check-label">Masculino</label>
                </div>
                <div class="col-md-4 form-check mb-3">
                    <input type="radio" class="form-check-input" value="F" name="sexo" id="floatingInput">
                    <label for="form-check-label">Feminino</label>
                </div>
                <div class="col-md-4 form-check mb-3">
                    <input type="radio" class="form-check-input" value="O" name="sexo" id="floatingInput">
                    <label for="form-check-label">Outros</label>
                </div>
            </div>
        </div>
    </div>
    <div class="row g-3">
        <div class="col-md-12 form-floating mb-3">
            <textarea name="observacao" class="form-control" placeholder="Observação aqui..." id="floatingTextarea"></textarea>
            <label for="floatingTextarea">Observação</label>
        </div>
    </div>
    <div class="row g-3 text-center">
        <div class="col-md-12">
            <?= $this->Html->link('Voltar', ['action' => 'index'], ['class' => 'btn btn-outline-danger']) ?>
            <?= $this->Form->button(__('Gravar'), ['class' => 'btn btn-primary']) ?>
        </div>
    </div>
    <?= $this->Form->end() ?>
</div>