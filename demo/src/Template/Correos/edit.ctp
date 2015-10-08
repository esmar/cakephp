<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $correo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $correo->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Correos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="correos form large-9 medium-8 columns content">
    <?= $this->Form->create($correo) ?>
    <fieldset>
        <legend><?= __('Edit Correo') ?></legend>
        <?php
            echo $this->Form->input('destinario');
            echo $this->Form->input('asunto');
            echo $this->Form->input('mensaje');
            echo $this->Form->input('id_user');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
