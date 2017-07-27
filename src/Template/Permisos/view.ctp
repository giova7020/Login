<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Permiso $permiso
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Permiso'), ['action' => 'edit', $permiso->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Permiso'), ['action' => 'delete', $permiso->id], ['confirm' => __('Are you sure you want to delete # {0}?', $permiso->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Permisos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Permiso'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="permisos view large-9 medium-8 columns content">
    <h3><?= h($permiso->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= h($permiso->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Role') ?></th>
            <td><?= $permiso->has('role') ? $this->Html->link($permiso->role->id, ['controller' => 'Roles', 'action' => 'view', $permiso->role->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Usuario') ?></th>
            <td><?= $permiso->has('usuario') ? $this->Html->link($permiso->usuario->id, ['controller' => 'Usuarios', 'action' => 'view', $permiso->usuario->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Plugin') ?></th>
            <td><?= h($permiso->plugin) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Controller') ?></th>
            <td><?= h($permiso->controller) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Action') ?></th>
            <td><?= h($permiso->action) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Allowed') ?></th>
            <td><?= $permiso->allowed ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Parametros') ?></h4>
        <?= $this->Text->autoParagraph(h($permiso->parametros)); ?>
    </div>
</div>
