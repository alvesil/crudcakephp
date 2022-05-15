<?php

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'CRUD';
?>
<!DOCTYPE html>
<html>

<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <!-- <?= $this->Html->css('base.css') ?> -->
    <!-- <?= $this->Html->css('style.css') ?> -->
    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->script('bootstrap.bundle.min') ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>

<body>

    <?php if ($username) : ?>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><?= $this->Html->image("../webroot/img/cake.png",  ['class' => 'mb-4', 'width' => '72', 'height' => '50']) ?></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Usuários
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><?= $this->Html->link(__('Cadastrar Usuário'), ['controller' => 'Users', 'action' => 'add'], array('class' => 'dropdown-item')) ?></li>
                                <li><?= $this->Html->link(__('Listar Usuários'), ['controller' => 'Users', 'action' => 'index'], array('class' => 'dropdown-item')) ?></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Funcionários
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><?= $this->Html->link(__('Cadastrar Funcionário'), ['controller' => 'Funcionarios', 'action' => 'add'], array('class' => 'dropdown-item')) ?></li>
                                <li><?= $this->Html->link(__('Listar Funcionários'), ['controller' => 'Funcionarios', 'action' => 'index'], array('class' => 'dropdown-item')) ?></li>

                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Permissões
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><?= $this->Html->link(__('Cadastrar Permissão'), ['controller' => 'Roles', 'action' => 'add'], array('class' => 'dropdown-item')) ?></li>
                                <li><?= $this->Html->link(__('Listar Permissões'), ['controller' => 'Roles', 'action' => 'index'], array('class' => 'dropdown-item')) ?></li>

                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <?= $this->Html->link(__('Logout'), ['controller' => 'Users', 'action' => 'logout'], array('class' => 'btn btn-outline-danger')) ?>
                    </form>
                </div>
            </div>
        </nav>
    <?php endif; ?>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>

</html>