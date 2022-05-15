<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Funcionario $funcionario
 */
?>
<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Form->postLink(
                __('Apagar'),
                ['action' => 'delete', $funcionario->id],
                ['confirm' => __('Tem certeza que deseja apagar o registro # {0}?', $funcionario->id), 'class' => 'bi bi-file-earmark-x', 'style'=> 'font-size:16pt; color: #dd0000;']
            )
        ?></li>
        <li><?= $this->Html->link(__('Listar Funcionários'), ['action' => 'index'], array('class' => 'bi bi-file-earmark-text', 'style'=> 'font-size:16pt;')) ?></li>
        <li><?= $this->Html->link(__('Cadastrar Funcionários'), ['action' => 'add'], array('class' => 'bi bi-file-earmark-plus', 'style'=> 'font-size:16pt;')) ?></li>
    </ul>
</nav>
<div class="funcionarios form large-9 medium-8 columns content">
    <?= $this->Form->create($funcionario) ?>
    <fieldset>
        <legend><?= __('Alterar Funcionário') ?></legend>
        <?php
            echo $this->Form->control('nome');
            echo $this->Form->control('dt_nascimento', array('type' => 'date', 'label' => 'Data de Nascimento', 'value' => date("Y-m-d", strtotime($funcionario->dt_nascimento))));
            echo $this->Form->control('sexo', array('type' => 'radio', 'label' => 'Sexo', 'options' => array('M' => 'Masculino', 'F' => 'Feminino', 'O' => 'Outros')));
            echo $this->Form->control('uf', array('type' => 'select', 'label' => 'UF', 'options' => array('AC' => 'Acre', 'AL' => 'Alagoas', 'AP' => 'Amapá', 'AM' => 'Amazonas', 'BA' => 'Bahia', 'CE' => 'Ceará', 'DF' => 'Distrito Federal', 'ES' => 'Espírito Santo', 'GO' => 'Goiás', 'MA' => 'Maranhão', 'MT' => 'Mato Grosso', 'MS' => 'Mato Grosso do Sul', 'MG' => 'Minas Gerais', 'PA' => 'Pará', 'PB' => 'Paraíba', 'PR' => 'Paraná', 'PE' => 'Pernambuco', 'PI' => 'Piauí', 'RJ' => 'Rio de Janeiro', 'RN' => 'Rio Grande do Norte', 'RS' => 'Rio Grande do Sul', 'RO' => 'Rondônia', 'RR' => 'Roraima', 'SC' => 'Santa Catarina', 'SP' => 'São Paulo', 'SE' => 'Sergipe', 'TO' => 'Tocantins')));
            echo $this->Form->control('observacao');
            //print_r($funcionario->dt_nascimento);
            echo date("d/m/Y", strtotime($funcionario->dt_nascimento));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Gravar')) ?>
    <?= $this->Form->end() ?>
</div> -->
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
        <h1 class="text-center">Alterar Funcionário</h1>
        <div class="col-md-4 form-floating mb-3">
            <input name="nome" value="<?php echo $funcionario->nome; ?>" type="text" class="form-control" id="floatingInput" placeholder="Seu nome">
            <label for="floatingInput">Nome</label>
        </div>
        <div class="col-md-2 form-floating mb-3">
            <input value="<?php echo date("Y-m-d", strtotime($funcionario->dt_nascimento)); ?>" name="dt_nascimento" type="date" class="form-control" id="floatingInput" placeholder="dd/mm/aaaa">
            <label for="floatingInput">Data de Nascimento</label>
        </div>
        <div class="col-md-2 form-floating mb-3">
            <select name="uf" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                <option <?php if($funcionario->uf == 'AC'){ echo 'selected'; } ?> value="AC">Acre</option>
                <option <?php if($funcionario->uf == 'AL'){ echo 'selected'; } ?> value="AL">Alagoas</option>
                <option <?php if($funcionario->uf == 'AP'){ echo 'selected'; } ?> value="AP">Amapá</option>
                <option <?php if($funcionario->uf == 'AM'){ echo 'selected'; } ?> value="AM">Amazonas</option>
                <option <?php if($funcionario->uf == 'BA'){ echo 'selected'; } ?> value="BA">Bahia</option>
                <option <?php if($funcionario->uf == 'CE'){ echo 'selected'; } ?> value="CE">Ceará</option>
                <option <?php if($funcionario->uf == 'DF'){ echo 'selected'; } ?> value="DF">Distrito Federal</option>
                <option <?php if($funcionario->uf == 'ES'){ echo 'selected'; } ?> value="ES">Espírito Santo</option>
                <option <?php if($funcionario->uf == 'GO'){ echo 'selected'; } ?> value="GO">Goiás</option>
                <option <?php if($funcionario->uf == 'MA'){ echo 'selected'; } ?> value="MA">Maranhão</option>
                <option <?php if($funcionario->uf == 'MT'){ echo 'selected'; } ?> value="MT">Mato Grosso</option>
                <option <?php if($funcionario->uf == 'MS'){ echo 'selected'; } ?> value="MS">Mato Grosso do Sul</option>
                <option <?php if($funcionario->uf == 'MG'){ echo 'selected'; } ?> value="MG">Minas Gerais</option>
                <option <?php if($funcionario->uf == 'PA'){ echo 'selected'; } ?> value="PA">Pará</option>
                <option <?php if($funcionario->uf == 'PB'){ echo 'selected'; } ?> value="PB">Paraíba</option>
                <option <?php if($funcionario->uf == 'PR'){ echo 'selected'; } ?> value="PR">Paraná</option>
                <option <?php if($funcionario->uf == 'PE'){ echo 'selected'; } ?> value="PE">Pernambuco</option>
                <option <?php if($funcionario->uf == 'PI'){ echo 'selected'; } ?> value="PI">Piauí</option>
                <option <?php if($funcionario->uf == 'RJ'){ echo 'selected'; } ?> value="RJ">Rio de Janeiro</option>
                <option <?php if($funcionario->uf == 'RN'){ echo 'selected'; } ?> value="RN">Rio Grande do Norte</option>
                <option <?php if($funcionario->uf == 'RS'){ echo 'selected'; } ?> value="RS">Rio Grande do Sul</option>
                <option <?php if($funcionario->uf == 'RO'){ echo 'selected'; } ?> value="RO">Rondônia</option>
                <option <?php if($funcionario->uf == 'RR'){ echo 'selected'; } ?> value="RR">Roraima</option>
                <option <?php if($funcionario->uf == 'SC'){ echo 'selected'; } ?> value="SC">Santa Catarina</option>
                <option <?php if($funcionario->uf == 'SP'){ echo 'selected'; } ?> value="SP">São Paulo</option>
                <option <?php if($funcionario->uf == 'SE'){ echo 'selected'; } ?> value="SE">Sergipe</option>
                <option <?php if($funcionario->uf == 'TO'){ echo 'selected'; } ?> value="TO">Tocantins</option>
                <option <?php if($funcionario->uf == 'EX'){ echo 'selected'; } ?> value="EX">Estrangeiro</option>
            </select>
            <label for="floatingSelect">Unidade Federativa</label>
        </div>
        <div class="col-md-4">
            <label>Sexo</label>
            <div class="row g-3">
                <div class="col-md-4 form-check mb-3">
                    <input <?php if($funcionario->sexo == 'M'){echo 'checked';} ?> type="radio" class="form-check-input" value="M" name="sexo" id="floatingInput">
                    <label for="form-check-label">Masculino</label>
                </div>
                <div class="col-md-4 form-check mb-3">
                    <input <?php if($funcionario->sexo == 'F'){echo 'checked';} ?> type="radio" class="form-check-input" value="F" name="sexo" id="floatingInput">
                    <label for="form-check-label">Feminino</label>
                </div>
                <div class="col-md-4 form-check mb-3">
                    <input <?php if($funcionario->sexo == 'O'){echo 'checked';} ?> type="radio" class="form-check-input" value="O" name="sexo" id="floatingInput">
                    <label for="form-check-label">Outros</label>
                </div>
            </div>
        </div>
    </div>
    <div class="row g-3">
        <div class="col-md-12 form-floating mb-3">
            <textarea name="observacao" class="form-control" placeholder="Observação aqui..." id="floatingTextarea"><?php echo $funcionario->observacao; ?></textarea>
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