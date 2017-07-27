<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $permiso->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $permiso->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Permisos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="permisos form large-9 medium-8 columns content">
    <?= $this->Form->create($permiso) ?>
    <fieldset>
        <legend><?= __('Edit Permiso') ?></legend>
        <?php
            echo $this->Form->control('role_id', ['options' => $roles, 'empty' => true]);
            echo $this->Form->control('usuario_id', ['options' => $usuarios, 'empty' => true]);
            echo $this->Form->control('plugin');
            echo $this->Form->control('controller');
            echo $this->Form->control('action');
            echo $this->Form->control('parametros');
            echo $this->Form->control('allowed');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
