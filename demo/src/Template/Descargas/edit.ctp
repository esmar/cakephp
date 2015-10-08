<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $descarga->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $descarga->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Descargas'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="descargas form large-9 medium-8 columns content">
    <?= $this->Form->create($descarga) ?>
    <fieldset>
        <legend><?= __('Edit Descarga') ?></legend>
        <?php
            echo $this->Form->input('link');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
