<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Descarga'), ['action' => 'edit', $descarga->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Descarga'), ['action' => 'delete', $descarga->id], ['confirm' => __('Are you sure you want to delete # {0}?', $descarga->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Descargas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Descarga'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="descargas view large-9 medium-8 columns content">
    <h3><?= h($descarga->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Link') ?></th>
            <td><?= h($descarga->link) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($descarga->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($descarga->created) ?></tr>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($descarga->modified) ?></tr>
        </tr>
    </table>
</div>
