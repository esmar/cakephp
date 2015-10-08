<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Descarga'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="descargas index large-9 medium-8 columns content">
    <h3><?= __('Descargas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('link') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($descargas as $descarga): ?>
            <tr>
                <td><?= $this->Number->format($descarga->id) ?></td>
                <td><?= h($descarga->link) ?></td>
                <td><?= h($descarga->created) ?></td>
                <td><?= h($descarga->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $descarga->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $descarga->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $descarga->id], ['confirm' => __('Are you sure you want to delete # {0}?', $descarga->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
