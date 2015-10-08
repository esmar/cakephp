<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Correo'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="correos index large-9 medium-8 columns content">
    <h3><?= __('Correos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('destinario') ?></th>
                <th><?= $this->Paginator->sort('asunto') ?></th>
                <th><?= $this->Paginator->sort('mensaje') ?></th>
                <th><?= $this->Paginator->sort('id_user') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($correos as $correo): ?>
            <tr>
                <td><?= $this->Number->format($correo->id) ?></td>
                <td><?= h($correo->destinario) ?></td>
                <td><?= h($correo->asunto) ?></td>
                <td><?= h($correo->mensaje) ?></td>
                <td><?= $this->Number->format($correo->id_user) ?></td>
                <td><?= h($correo->created) ?></td>
                <td><?= h($correo->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $correo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $correo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $correo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $correo->id)]) ?>
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
