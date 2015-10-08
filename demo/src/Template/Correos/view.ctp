<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Correo'), ['action' => 'edit', $correo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Correo'), ['action' => 'delete', $correo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $correo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Correos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Correo'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="correos view large-9 medium-8 columns content">
    <h3><?= h($correo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Destinario') ?></th>
            <td><?= h($correo->destinario) ?></td>
        </tr>
        <tr>
            <th><?= __('Asunto') ?></th>
            <td><?= h($correo->asunto) ?></td>
        </tr>
        <tr>
            <th><?= __('Mensaje') ?></th>
            <td><?= h($correo->mensaje) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($correo->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Id User') ?></th>
            <td><?= $this->Number->format($correo->id_user) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($correo->created) ?></tr>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($correo->modified) ?></tr>
        </tr>
    </table>
</div>
