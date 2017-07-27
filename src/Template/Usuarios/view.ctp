<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Usuario $usuario
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Usuario'), ['action' => 'edit', $usuario->usuario]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Usuario'), ['action' => 'delete', $usuario->usuario], ['confirm' => __('Are you sure you want to delete # {0}?', $usuario->usuario)]) ?> </li>
        <li><?= $this->Html->link(__('List Usuarios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Permisos'), ['controller' => 'Permisos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Permiso'), ['controller' => 'Permisos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="usuarios view large-9 medium-8 columns content">
    <h3><?= h($usuario->usuario) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= h($usuario->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Usuario') ?></th>
            <td><?= h($usuario->usuario) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($usuario->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($usuario->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Role') ?></th>
            <td><?= $usuario->has('role') ? $this->Html->link($usuario->role->nombre, ['controller' => 'Roles', 'action' => 'view', $usuario->role->id]) : '' ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Permisos') ?></h4>
        <?php if (!empty($usuario->permisos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Role Id') ?></th>
                <th scope="col"><?= __('Usuario Id') ?></th>
                <th scope="col"><?= __('Plugin') ?></th>
                <th scope="col"><?= __('Controller') ?></th>
                <th scope="col"><?= __('Action') ?></th>
                <th scope="col"><?= __('Parametros') ?></th>
                <th scope="col"><?= __('Allowed') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($usuario->permisos as $permisos): ?>
            <tr>
                <td><?= h($permisos->id) ?></td>
                <td><?= h($permisos->role_id) ?></td>
                <td><?= h($permisos->usuario_id) ?></td>
                <td><?= h($permisos->plugin) ?></td>
                <td><?= h($permisos->controller) ?></td>
                <td><?= h($permisos->action) ?></td>
                <td><?= h($permisos->parametros) ?></td>
                <td><?= h($permisos->allowed) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Permisos', 'action' => 'view', $permisos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Permisos', 'action' => 'edit', $permisos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Permisos', 'action' => 'delete', $permisos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $permisos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
